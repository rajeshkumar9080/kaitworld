<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'GET':
        $image = [];
        $video = [];

        // Fetch images
        $query_image = "SELECT * FROM tbl_add_gallery";
        $result_image = $con->query($query_image);

        if ($result_image) {
            while ($row = $result_image->fetch_assoc()) {
                $row['src'] = '' . $row['user_image'];
                $image[] = $row;
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to fetch image data'
            ];
            echo json_encode($response);
            exit;
        }

        // Fetch videos
        $query_gallery_video = "SELECT * FROM tbl_add_gallery_video";
        $result_gallery_video = $con->query($query_gallery_video);

        if ($result_gallery_video) {
            while ($row = $result_gallery_video->fetch_assoc()) {
                $row['src'] = '' . $row['video'];
                $video[] = $row;
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to fetch video data'
            ];
            echo json_encode($response);
            exit;
        }

        $response = [
            'status' => true,
            'data' => [
                [
                    'type' => 'image',
                    'id' => '1',
                    'members' => $image,
                ],
                [
                    'type' => 'video',
                    'id' => '1',
                    'members' => $video,
                ],
            ]
        ];
        echo json_encode($response);
        break;

    case 'PUT':
        // Get the input data
        parse_str(file_get_contents("php://input"), $put_vars);
        
        // Ensure the required fields are present
        if (isset($put_vars['id']) && isset($put_vars['video'])) {
            $id = $con->real_escape_string($put_vars['id']);
            $video = $con->real_escape_string($put_vars['video']);

            $update_query = "UPDATE tbl_add_gallery_video SET video='$video' WHERE id='$id'";

            if ($con->query($update_query) === TRUE) {
                $response = [
                    'status' => true,
                    'message' => 'Video updated successfully'
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'Failed to update video'
                ];
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Invalid input'
            ];
        }
        echo json_encode($response);
        break;

    default:
        $response = [
            'status' => false,
            'message' => 'Unsupported request method'
        ];
        echo json_encode($response);
        break;
}

?>
