<?php ob_start();
session_start();include('db_config.php');

 if(isset($_SESSION['sl_no']))
{
echo '<script type="text/javascript"> 
window.location.href = "dashboard.php";</script>';	
} else {?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="Adminpanel"/>
    <meta name="description" content="Adminpanel"/>
    <title>Adminpanel</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png"
      sizes="16x16" href="assets/images/favicon1.png"
    />
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="main-wrapper">
      <!-- -------------------------------------------------------------- -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- -------------------------------------------------------------- -->
      <div class="preloader">
        <svg
          class="tea lds-ripple"
          width="37"
          height="48"
          viewbox="0 0 37 48"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z"
            stroke="#1e88e5"
            stroke-width="2"
          ></path>
          <path
            d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34"
            stroke="#1e88e5"
            stroke-width="2"
          ></path>
          <path
            id="teabag"
            fill="#1e88e5"
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"
          ></path>
          <path
            id="steamL"
            d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke="#1e88e5"
          ></path>
          <path
            id="steamR"
            d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13"
            stroke="#1e88e5"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          ></path>
        </svg>
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Login box.scss -->
      <!-- -------------------------------------------------------------- -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        "
        style="background: url(assets/images/background/login-register.jpg)
            no-repeat center center;
          background-size: cover;">
        <div class="auth-box p-4 bg-white rounded">
          <div id="loginform">
            <div class="logo">
              <h3 class="box-title mb-3">Sign In</h3>
            </div>
            <!-- Form -->
            <div class="row">
              <div class="col-12">
                <form class="form-horizontal mt-3 form-material" id="loginform" action="" method="post">
                  <div class="form-group mb-3">
                    <div class="">
                      <input class="form-control" type="text" name="user_name" required="" placeholder="Username"/>
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <div class="">
                      <input class="form-control" type="password" name="user_password" required="" placeholder="Password"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-flex">
                      <div class="checkbox checkbox-info pt-0">
                        <input id="checkbox-signup" type="checkbox" class="material-inputs chk-col-indigo"/>
                        <label for="checkbox-signup"> Remember me </label>
                      </div>
                      <div class="ms-auto">
                        <a href="javascript:void(0)" id="to-recover" class="link font-weight-medium"><i class="fa fa-lock me-1"></i> Forgot pwd?</a>
                      </div>
                    </div>
                  </div>
                  <div class="form-group text-center mt-4 mb-3">
                    <div class="col-xs-12">
                      <button class="btn btn-info d-block w-100 waves-effect waves-light" name="login" type="submit">
                        Log In
                      </button>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 mt-2 text-center">
                      
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-4">
                    <div class="col-sm-12 justify-content-center d-flex">                      
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div id="recoverform">
            <div class="logo">
              <h3 class="font-weight-medium mb-3">Recover Password</h3>
              <span class="text-muted"
                >Enter your forget password and instructions will be sent to you!</span
              >
            </div>
            <div class="row mt-3 form-material">
              <!-- Form -->
              <form class="col-12" action="" method="POST">
                <!-- email -->
                <div class="form-group row">
                  <div class="col-12">
                    <input class="form-control" type="password" id="new_password" required="" name="new_password" placeholder="Password"/>
                  </div>
                </div>
                <!-- pwd -->
                <div class="row mt-3">
                  <div class="col-12">
                    <button class="btn d-block w-100 btn-primary text-uppercase" name="forgot-btn" type="submit" name="action">
                      Reset
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- Login box.scss -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- All Required js -->
    <!-- -------------------------------------------------------------- -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- -------------------------------------------------------------- -->
    <!-- This page plugin js -->
    <!-- -------------------------------------------------------------- -->

    <script>
      $(".preloader").fadeOut();
      // ==============================================================
      // Login and Recover Password
      // ==============================================================
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });
    </script>
  </body>
</html>

<?php 
			if (isset($_POST['login']))
				{	 
					$user_name=$_POST['user_name'];
					$user_password=$_POST['user_password'];    
				 $sql="SELECT * FROM  tbl_add_organic_admin 
					WHERE user_name='$user_name' AND user_password='$user_password'";
					$query=mysqli_query($con,$sql);          
					$total_product=mysqli_num_rows($query);    
					$fet=mysqli_fetch_array($query);
					if ($total_product >0)
					{
						 $_SESSION["user_name"]=$fet["user_name"];    
						$_SESSION["sl_no"]=$fet["sl_no"];	
						$_SESSION["user_type"] = $fet["user_type"];	
                        $_SESSION["user_department"] = $fet["user_department"];								
						echo '<script type="text/javascript">window.location.href = "dashboard.php";</script>';	
					}
					else
					{
						echo '<script type="text/javascript"> alert("Invalid Data");window.location.href = "index.php";</script>';
					}
				}
}		

?>




<?php
session_start();
require 'db_config.php'; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['forgot-btn'])) {
    // Retrieve and sanitize input
    $new_password = trim($_POST['new_password']);
    
    // Basic validation
    if (empty($new_password)) {
        echo "Password is required.";
        exit;
    }

    // Further validation (e.g., password strength) can be added here

    // Hash the password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Assume the user is identified by a session variable 'user_id'
    $sl_no = $_SESSION['sl_no']; 

    // Update the password in the database
    $sql = "UPDATE tbl_add_organic_admin SET new_password = $new_password WHERE sl_no = $sl_no";
    if ($stmt = $con->prepare($sql)) {
        $stmt->bind_param("si", $hashed_password, $sl_no);
        if ($stmt->execute()) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $con->error;
    }

    // Close the database connection
    $con->close();
}
?>
