<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'POST') {
    $gold = [];
    $platinum = [];
    $silver = [];
    $bronze = [];

    $query_gold = "SELECT * FROM tbl_add_gold";
    $result_gold = $con->query($query_gold);

    if ($result_gold) {
        while ($row = $result_gold->fetch_assoc()) {
            $row['user_image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['user_image'];
            $gold[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch gold data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_platinum = "SELECT * FROM tbl_add_platinum";
    $result_platinum = $con->query($query_platinum);

    if ($result_platinum) {
        while ($row = $result_platinum->fetch_assoc()) {
            $row['user_image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['user_image'];
            $platinum[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch platinum data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_silver = "SELECT * FROM tbl_add_silver";
    $result_silver = $con->query($query_silver);

    if ($result_silver) {
        while ($row = $result_silver->fetch_assoc()) {
            $row['user_image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['user_image'];
            $silver[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch silver data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_bronze = "SELECT * FROM tbl_add_bronze";
    $result_bronze = $con->query($query_bronze);

    if ($result_bronze) {
        while ($row = $result_bronze->fetch_assoc()) {
            // $row['user_image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['user_image'];
            $bronze[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch bronze data'
        ];
        echo json_encode($response);
        exit;
    }

 


    $response = [
        'status' => true,
        'data' => [
            [
                'club' => 'bronze',
                'id' => '1', // Additional information for platinum
                'members' => $bronze,],
                [
            
                    'club' => 'silver',
                    'id' => '4', // Additional information for platinum
                    'members' => $silver,],
         [
                'club' => 'gold',
                'id' => '3', // Additional information for gold
                'members' => $gold,],
    [
        
                'club' => 'platinum',
                'id' => '2', // Additional information for platinum
                'members' => $platinum,],
         
          
            
           
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
