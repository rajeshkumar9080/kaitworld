<?php
// Load the database configuration file
include_once 'db_config.php';

if(isset($_POST['importSubmit'])){
    // Validate whether selected file is a CSV file
    $csvMimes = array('text/csv', 'text/plain', 'application/csv', 'text/comma-separated-values', 'text/x-comma-separated-values', 'application/vnd.ms-excel', 'application/x-csv', 'application/octet-stream');
    
    if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        // Check if the file was uploaded without errors
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');

            // Skip the first line
            fgetcsv($csvFile);
        
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){ 
                // Get row data
                $user_id = $line[0];
                $user_name = $line[1];
                $registered_date = date("y-m-d", strtotime($originalDate)); // Current date and time in MySQL format
                 
                // Check whether member already exists in the database with the same email
                $prevQuery = "SELECT id FROM tbl_add_bronze WHERE user_id = ?";
                $stmt = $con->prepare($prevQuery);
                $stmt->bind_param("s", $user_id);
                $stmt->execute();
                $result = $stmt->get_result();

                if($result->num_rows > 0){
                    // Update member data in the database
                    $existing_row = $result->fetch_assoc();
                    $id = $existing_row['id'];
                    $updateQuery = "UPDATE tbl_add_bronze SET user_name = ?,  WHERE id = ?";
                    $updateStmt = $con->prepare($updateQuery);
                    $updateStmt->bind_param("ssi", $user_name, $id);
                    $updateStmt->execute();
                    $updateStmt->close();
                } else {
                    // Insert member data in the database
                    $insertQuery = "INSERT INTO tbl_add_bronze (user_id, user_name) VALUES (?, ?)";
                    $insertStmt = $con->prepare($insertQuery);
                    $insertStmt->bind_param("sss", $user_id, $user_name);
                    $insertStmt->execute();
                    $insertStmt->close();
                }
            }

            // Close opened CSV file
            fclose($csvFile);
            $qstring = '?status=succ';
        } else {
            $qstring = '?status=err_upload';
        }
    } else {
        $qstring = '?status=invalid_file';
    }
} else {
    $qstring = '?status=err_submit';
}

// Close database connection
$con->close();

// Redirect to the listing page
header("Location: view_bronze.php".$qstring);
exit();
?>
