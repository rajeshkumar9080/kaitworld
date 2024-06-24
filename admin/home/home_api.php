<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $home = [];

    $query_home = "SELECT * FROM  tbl_add_home";
    $result_home = $con->query($query_home);

    if ($result_home) {
        while ($row = $result_home->fetch_assoc()) {
            // $row['image'] = '' . $row['image'];
            $home[] = $row;
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
                'Home' => 'home',
                'id' => '1', // Additional information for platinum
                'members' => $home,],

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

