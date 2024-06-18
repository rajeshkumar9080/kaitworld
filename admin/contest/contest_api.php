<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $contest = [];

    $query_contest = "SELECT * FROM tbl_add_contest";
    $result_contest = $con->query($query_contest);

    if ($result_contest) {
        while ($row = $result_contest->fetch_assoc()) {
            $row['image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['image'];
            $contest[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch gold data'
        ];
        echo json_encode($response);
        exit;
    }
    
    $response = [
        'status' => true,
        'data' => [
            [
                'club' => 'contest',
                'id' => '1', // Additional information for platinum
                'members' => $contest,],

                ]
            ];
            echo json_encode($response);
        } else {
            $response = [
                'status' => false,
                'message' => 'Unsupported request method'
            ];
            echo json_encode($response);
    }
    ?>

