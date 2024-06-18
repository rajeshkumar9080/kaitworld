<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $achiver = [];
   

    $query_achiver = "SELECT * FROM tbl_add_achiveres";
    $result_achiver = $con->query($query_achiver);

    if ($result_achiver) {
        while ($row = $result_achiver->fetch_assoc()) {
            $row['user_image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['user_image'];
            $achiver[] = $row;
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
                'club' => 'achiver',
                'id' => '1', // Additional information for platinum
                'members' => $achiver,],
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

    