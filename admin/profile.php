<?php 
include("header.php");
include('db_config.php');

// Start the session
session_start();

    // Prepare the SQL statement to prevent SQL injection
     $sql = "SELECT * FROM tbl_add_organic_admin WHERE sl_no = 1";
    $qry=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($qry))
    { 
            $user_name = $row['user_name'];
            $user_password = $row['user_password'];
        }
?>

<div class="page-wrapper">
    <div class="row page-titles">
        <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Profile</h3>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="dashboard.php">Home</a>
                </li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title mb-3 pb-3 border-bottom">Profile</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="email-repeater mb-3">
                                    <div data-repeater-list="repeater-group">
                                        <div data-repeater-item="" class="row mb-3">
                                            <div class="col-lg-8">
                                                <form name="frmChange" method="POST" action="">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">User Name</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="text" class="form-control" name="user_name" value="<?php echo htmlspecialchars($user_name); ?>" required/>
                                                                </div>
                                                            </div>

                                                            <div class="row mb-3">
                                                                <div class="col-sm-3">
                                                                    <h6 class="mb-0">Password</h6>
                                                                </div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="password" class="form-control" name="user_password" value="<?php echo htmlspecialchars($user_password); ?>" required/>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-3"></div>
                                                                <div class="col-sm-9 text-secondary">
                                                                    <input type="submit" name="update_profile" class="btn btn-primary px-4" value="Submit"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                                
                                                <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update_profile'])) {
    // Capture form data
    $user_name = htmlspecialchars(trim($_POST['user_name']));
    $user_password = htmlspecialchars(trim($_POST['user_password']));

    // Validate inputs
    if (empty($user_name) || empty($user_password)) {
        echo "All fields are required.";
        exit;
    }

    // Hash the new password
    $hashed_password = password_hash($user_password, PASSWORD_DEFAULT);

    // Update the password in the database
    $sql = "UPDATE tbl_add_organic_admin SET password = ? WHERE username = ?";
    $stmt = $con->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("ss", $hashed_password, $user_name);
        if ($stmt->execute()) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }

    // Close connection
    $con->close();
}
?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer text-center">
        All Rights Reserved by adminpanel.
    </footer>
</div>


<!-- All Jquery -->
<script src="assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="dist/js/app.min.js"></script>
<script src="dist/js/app.init.js"></script>
<script src="dist/js/app-style-switcher.js"></script>
<script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="assets/extra-libs/sparkline/sparkline.js"></script>
<script src="dist/js/waves.js"></script>
<script src="dist/js/sidebarmenu.js"></script>
<script src="dist/js/feather.min.js"></script>
<script src="dist/js/custom.min.js"></script>
<script src="assets/extra-libs/prism/prism.js"></script>
<script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
<script src="assets/extra-libs/jquery.repeater/repeater-init.js"></script>

</body>
</html>
