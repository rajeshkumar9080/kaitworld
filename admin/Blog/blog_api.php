<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

if ($requestMethod === 'GET') {
    $blog = [];

    $query_blog = "SELECT * FROM tbl_add_blog";
    $result_blog = $con->query($query_blog);

    if ($result_blog) {
        while ($row = $result_blog->fetch_assoc()) {
            $row['image'] = 'http://localhost/kait/admin/assets/images/gallery/' . $row['image'];
            $blog[] = $row;
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
                'club' => 'blog',
                'id' => '1', // Additional information for platinum
                'members' => $blog,],

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

