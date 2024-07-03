<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $event = [];
    $upcoming_event = [];

    $query_event = "SELECT * FROM tbl_add_eventes";
    $result_event = $con->query($query_event);

    if ($result_event) {
        while ($row = $result_event->fetch_assoc()) {
            $row['event_image'] = '' . $row['event_image'];
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
            $row['event_image1'] = '' . $row['event_image1'];
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

    $query_gold_club_achivers_meet = "SELECT * FROM  tbl_add_gold_club_achivers_meet";
    $result_gold_club_achivers_meet = $con->query($query_gold_club_achivers_meet);

    if ($result_gold_club_achivers_meet) {
        while ($row = $result_gold_club_achivers_meet->fetch_assoc()) { 
            $row['gold_club_achivers_image'] = '' . $row['gold_club_achivers_image'];
            $gold_club_achivers_meet[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch upcoming_event data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_gold_club_upcoming_achivers_meet = "SELECT * FROM tbl_add_gold_club_upcoming_achivers_meet";
    $result_gold_club_upcoming_achivers_meet = $con->query($query_gold_club_upcoming_achivers_meet);

    if ($result_gold_club_upcoming_achivers_meet) {
        while ($row = $result_gold_club_upcoming_achivers_meet->fetch_assoc()) { 
            $row['gold_club_achivers_upcomin_image'] = '' . $row['gold_club_achivers_upcomin_image'];
            $gold_club_upcoming_achivers_meet[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch upcoming_event data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_silver_club_achivers_meet = "SELECT * FROM  tbl_add_silver_club_achivers_meet";
    $result_silver_club_achivers_meet = $con->query($query_silver_club_achivers_meet);

    if ($result_silver_club_achivers_meet) {
        while ($row = $result_silver_club_achivers_meet->fetch_assoc()) { 
            $row['silver_club_achivers_image'] = '' . $row['silver_club_achivers_image'];
            $silver_club_achivers_meet[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch upcoming_event data'
        ];
        echo json_encode($response);
        exit;
    }


    $query_silver_club_upcoming_achivers_meet = "SELECT * FROM  tbl_add_silver_club_upcoming_achivers_meet";
    $result_silver_club_upcoming_achivers_meet = $con->query($query_silver_club_upcoming_achivers_meet);

    if ($result_silver_club_upcoming_achivers_meet) {
        while ($row = $result_silver_club_upcoming_achivers_meet->fetch_assoc()) { 
            $row['silver_club_achivers_upcomin_image'] = '' . $row['silver_club_achivers_upcomin_image'];
            $silver_club_upcoming_achivers_meet[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch upcoming_event data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_bronze_club_achivers_meet = "SELECT * FROM  tbl_add_bronze_club_achivers_meet";
    $result_bronze_club_achivers_meet = $con->query($query_bronze_club_achivers_meet);

    if ($result_bronze_club_achivers_meet) {
        while ($row = $result_bronze_club_achivers_meet->fetch_assoc()) { 
            $row['bronze_club_achivers_image'] = '' . $row['bronze_club_achivers_image'];
            $bronze_club_achivers_meet[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch upcoming_event data'
        ];
        echo json_encode($response);
        exit;
    }


    $query_bronze_club_upcoming_achivers_meet = "SELECT * FROM  tbl_add_bronze_club_upcoming_achivers_meet";
    $result_bronze_club_upcoming_achivers_meet = $con->query($query_bronze_club_upcoming_achivers_meet);

    if ($result_bronze_club_upcoming_achivers_meet) {
        while ($row = $result_bronze_club_upcoming_achivers_meet->fetch_assoc()) { 
            $row['bronze_club_achivers_upcomin_image'] = '' . $row['bronze_club_achivers_upcomin_image'];
            $bronze_club_upcoming_achivers_meet[] = $row;
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
                
                'Events' => 'event',
                'id' => '1', // Additional information for platinum
                'members' => $event,],
                [
                    'Events' => 'upcoming_event',
                     'id' => '2', 
                    'members' => $upcoming_event,],
                [
                        'Events' => 'Gold Club Achivers meet',
                         'id' => '3', 
                        'members' => $gold_club_achivers_meet,],
                [
                            'Events' => 'Gold Club Upcoming Achivers meet',
                             'id' => '3', 
                            'members' => $gold_club_upcoming_achivers_meet,],
               [
                            'Events' => 'Silver Club Achivers meet',
                             'id' => '4', 
                            'members' => $silver_club_achivers_meet,],
                [
                                'Events' => 'Silver Club Upcoming Achivers meet',
                                 'id' => '4', 
                                'members' => $silver_club_upcoming_achivers_meet,],
                [
                                'Events' => 'Bronze Club Achivers meet',
                                 'id' => '5', 
                                'members' => $bronze_club_achivers_meet,],
               [
                                    'Events' => 'Bronze Club Upcoming Achivers meet',
                                     'id' => '5', 
                                    'members' => $bronze_club_upcoming_achivers_meet,],
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

    