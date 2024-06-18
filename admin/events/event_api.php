<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $event = [];
    $platinum = [];

    $query_event = "SELECT * FROM tbl_add_eventes";
    $result_event = $con->query($query_event);

    if ($result_event) {
        while ($row = $result_event->fetch_assoc()) {
            $row['event_image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['event_image'];
            $event[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch gold data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_upcoming_event = "SELECT * FROM  tbl_add_upcoming_event";
    $result_upcoming_event = $con->query($query_upcoming_event);

    if ($result_upcoming_event) {
        while ($row = $result_upcoming_event->fetch_assoc()) {
            $row['event_image1'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['event_image1'];
            $upcoming_event[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch upcoming_event data'
        ];
        echo json_encode($response);
        exit;
    }


    $response = [
        'status' => true,
        'data' => [
            [
                'club' => 'event',
                'id' => '1', // Additional information for platinum
                'members' => $event,],
                [
                    'club' => 'upcoming_event',
                    'id' => '1', // Additional information for platinum
                    'members' => $upcoming_event,],
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

    