<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization");

include("../db_config.php");

$requestMethod = $_SERVER['REQUEST_METHOD'];

switch ($requestMethod) {
    case 'GET':
        $images = [];
        $videos = [];

        // Fetch images
        $query_image = "SELECT * FROM tbl_add_gallery";
        $result_image = $con->query($query_image);

        if ($result_image) {
            while ($row = $result_image->fetch_assoc()) {
                $row['src'] = $row['user_image'];
                $row['type'] = 'image';
                $images[] = $row;
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to fetch image data'
            ];
            echo json_encode($response);
            exit;
        }

        $query_gallery_video = "SELECT * FROM tbl_add_gallery_video";
        $result_gallery_video = $con->query($query_gallery_video);

        if ($result_gallery_video) {
            while ($row = $result_gallery_video->fetch_assoc()) {
                if (!empty($row['video'])) {
                    $row['src'] = $row['video'];
                    $row['type'] = 'video';
                    $videos[] = $row;
                }
                if (!empty($row['y_video'])) {
                    $row['src'] = $row['y_video'];
                    $row['type'] = 'y_video';
                    $videos[] = $row;
                }
            }
        } else {
            $response = [
                'status' => false,
                'message' => 'Failed to fetch video data'
            ];
            echo json_encode($response);
            exit;
        }

        // Merge images and videos with images first
        $media = array_merge($images, $videos);

        $response = [
            'status' => true,
            'data' => $media
        ];
        echo json_encode($response);
        break;

    case 'POST':
        // This example assumes you are sending the video or y_video URL in the POST request

        // Get the raw POST data
        $postData = file_get_contents("php://input");
        $data = json_decode($postData, true);

        if (isset($data['video'])) {
            $videoUrl = $data['video'];

            // Insert video URL into the database
            $query_insert_video = "INSERT INTO tbl_add_gallery_video (video) VALUES ('$videoUrl')";
            if ($con->query($query_insert_video) === TRUE) {
                $response = [
                    'status' => true,
                    'message' => 'Video URL added successfully'
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'Failed to add video URL'
                ];
            }
            echo json_encode($response);
        } elseif (isset($data['y_video'])) {
            $yVideoUrl = $data['y_video'];

            // Insert y_video URL into the database
            $query_insert_y_video = "INSERT INTO tbl_add_gallery_video (y_video) VALUES ('$yVideoUrl')";
            if ($con->query($query_insert_y_video) === TRUE) {
                $response = [
                    'status' => true,
                    'message' => 'YouTube video URL added successfully'
                ];
            } else {
                $response = [
                    'status' => false,
                    'message' => 'Failed to add YouTube video URL'
                ];
            }
            echo json_encode($response);
        } else {
            $response = [
                'status' => false,
                'message' => 'Video URL or YouTube video URL not provided'
            ];
            echo json_encode($response);
        }
        break;

    // Add cases for PUT and DELETE if needed

    default:
        $response = [
            'status' => false,
            'message' => 'Invalid Request Method'
        ];
        echo json_encode($response);
        break;
}
?>
