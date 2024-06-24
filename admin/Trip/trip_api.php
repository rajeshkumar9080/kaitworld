<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $trip = [];

    $query_trip = "SELECT * FROM tbl_add_trip";
    $result_trip = $con->query($query_trip);

    if ($result_trip) {
        while ($row = $result_trip->fetch_assoc()) {
            // $row['trip_image'] = '' . $row['trip_image'];
            $trip[] = $row;
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
                'Trip' => 'trip',
                'id' => '1', // Additional information for platinum
                'members' => $trip,],

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

