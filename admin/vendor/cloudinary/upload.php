<?php

require '../vendor/autoload.php'; // Corrected path to autoload.php

use Cloudinary\Cloudinary;
use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

// Configure Cloudinary
Configuration::instance([
    'cloud' => [
        'cloud_name' => 'dspp2vqid',
        'api_key'    => '838937238819565',
        'api_secret' => '*********************************',
    ],
    'url' => [
        'secure' => true
    ]
]);

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $uploadedFile = $_FILES['image']['tmp_name'];

    try {
        // Upload the image to Cloudinary
        $uploadResult = (new UploadApi())->upload($uploadedFile);

        // Print the upload result
        print_r($uploadResult);
    } catch (Exception $e) {
        echo 'Error uploading image: ' . $e->getMessage();
    }
}
?>
