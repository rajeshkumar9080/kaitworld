<?php
require 'vendor/autoload.php';

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

// Path to the local image
$localImagePath = '/path/to/your/local/image.jpg';  // Provide the actual local path

try {
    // Upload the image to Cloudinary
    $uploadResult = (new UploadApi())->upload($localImagePath);

    // Print the upload result
    print_r($uploadResult);
} catch (Exception $e) {
    echo 'Error uploading image: ' . $e->getMessage();
}
?>
