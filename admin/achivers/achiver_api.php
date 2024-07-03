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
            $row['user_image'] = '' . $row['user_image'];
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




    $query_mobile_achivers = "SELECT * FROM tbl_add_mobile_achivers";
    $result_mobile_achivers = $con->query($query_mobile_achivers);

    if ($result_mobile_achivers) {
        while ($row = $result_mobile_achivers->fetch_assoc()) {
            $row['mobile_achivers_image'] = '' . $row['mobile_achivers_image'];
            $mobile_achivers[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch gold data'
        ];
        echo json_encode($response);
        exit;
    }


    $query_laptop_achivers = "SELECT * FROM tbl_add_laptop_achivers";
    $result_laptop_achivers = $con->query($query_laptop_achivers);

    if ($result_laptop_achivers) {
        while ($row = $result_laptop_achivers->fetch_assoc()) {
            $row['laptop_achivers_image'] = '' . $row['laptop_achivers_image'];
            $laptop_achivers[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch gold data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_evbike_achivers = "SELECT * FROM tbl_add_evbike_achivers";
    $result_evbike_achivers = $con->query($query_evbike_achivers);

    if ($result_evbike_achivers) {
        while ($row = $result_evbike_achivers->fetch_assoc()) {
            $row['evbike_achivers_image'] = '' . $row['evbike_achivers_image'];
            $evbike_achivers[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch gold data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_car_achivers = "SELECT * FROM tbl_add_car_achivers";
    $result_car_achivers = $con->query($query_car_achivers);

    if ($result_car_achivers) {
        while ($row = $result_car_achivers->fetch_assoc()) {
            $row['car_achivers_image'] = '' . $row['car_achivers_image'];
            $car_achivers[] = $row;
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
                'Achivers' => 'achiver',
                'id' => '1', // Additional information for platinum
                'members' => $achiver,],

            [
                    'Awards' => 'Mobile Achivers',
                    'id' => '1', // Additional information for platinum
                    'members' => $mobile_achivers,],
            [
                        'Awards' => 'Laptop Achivers',
                        'id' => '2', // Additional information for platinum
                        'members' => $laptop_achivers,],
           [
                            'Awards' => '   EV Bike  Achivers',
                            'id' => '3', // Additional information for platinum
                            'members' => $evbike_achivers,],
           [
                                'Awards' => 'Car Achivers',
                                'id' => '3', // Additional information for platinum
                                'members' => $car_achivers,],

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

    