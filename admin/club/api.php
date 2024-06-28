<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $gold = [];
    $platinum = [];
    $silver = [];
    $bronze = [];
    $diamond = [];
    $double_daimond = [];    
    $triple_daimond = []; 
    $kait_king = [];

    $query_gold = "SELECT * FROM tbl_add_gold";
    $result_gold = $con->query($query_gold);

    if ($result_gold) {
        while ($row = $result_gold->fetch_assoc()) {
            $row['user_image'] = '' . $row['user_image'];
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
            $row['user_image'] = '' . $row['user_image'];
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
            $row['user_image'] = '' . $row['user_image'];
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
    
    $query_daimond = "SELECT * FROM tbl_add_daimond";
    $result_daimond = $con->query($query_daimond);

    if ($result_daimond) {
        while ($row = $result_daimond->fetch_assoc()) {
             $row['user_image'] = '' . $row['user_image'];
            $diamond[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch bronze data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_double_daimond = "SELECT * FROM tbl_add_double_daimond";
    $result_double_daimond = $con->query($query_double_daimond);

    if ($result_double_daimond) {
        while ($row = $result_double_daimond->fetch_assoc()) {
             $row['user_image'] = '' . $row['user_image'];
            $double_daimond[] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch bronze data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_triple_daimond = "SELECT * FROM tbl_add_triple_daimond";
    $result_triple_daimond = $con->query($query_triple_daimond);

    if ($result_triple_daimond) {
        while ($row = $result_triple_daimond->fetch_assoc()) {
             $row['user_image'] = '' . $row['user_image'];
            $triple_daimond [] = $row;
        }
    } else {
        $response = [
            'status' => false,
            'message' => 'Failed to fetch bronze data'
        ];
        echo json_encode($response);
        exit;
    }

    $query_kait_king = "SELECT * FROM tbl_add_kait_king";
    $result_kait_king = $con->query($query_kait_king);

    if ($result_kait_king) {
        while ($row = $result_kait_king->fetch_assoc()) {
             $row['user_image'] = '' . $row['user_image'];
            $kait_king [] = $row;
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
                'id' => '1', 
                'members' => $bronze,],
                [
            
                    'club' => 'silver',
                    'id' => '4', // Additional information for silver
                    'members' => $silver,],

    [
                        'club' => 'gold',
                        'id' => '3', 
                        'members' => $gold,],
                        [
        
                            'club' => 'platinum',
                            'id' => '2', 
                            'members' => $platinum,],
 
        
   
    [
        
                'club' => 'diamond',
                'id' => '5', 
                'members' => $diamond,],
                   
    // [
        
    //             'club' => 'double_daimond',
    //             'id' => '6', 
    //             'members' => $double_daimond,],
//    [
        
//                 'club' => 'triple_daimond',
//                 'id' => '7', 
//                 'members' => $triple_daimond,],
//    [
        
//                  'club' => 'kait_king',
//                  'id' => '8',
//                  'members' => $kait_king,],
             
                         
           
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
