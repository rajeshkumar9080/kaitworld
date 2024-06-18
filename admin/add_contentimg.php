<?php include("header.php"); 
$ids=$_REQUEST['id'];?>
      <!-- -------------------------------------------------------------- -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- -------------------------------------------------------------- -->
      <!-- -------------------------------------------------------------- -->
      <!-- Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
          <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Product Image</h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Product Image</li>
            </ol>
          </div>
          <!--<div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <div class="d-flex mt-2 justify-content-end">
              <div class="d-flex me-3 ms-2">
                <div class="chart-text me-2">
                  <h6 class="mb-0"><small>THIS MONTH</small></h6>
                  <h4 class="mt-0 text-info">$58,356</h4>
                </div>
                <div class="spark-chart">
                  <div id="monthchart"></div>
                </div>
              </div>
              <div class="d-flex ms-2">
                <div class="chart-text me-2">
                  <h6 class="mb-0"><small>LAST MONTH</small></h6>
                  <h4 class="mt-0 text-primary">$48,356</h4>
                </div>
                <div class="spark-chart">
                  <div id="lastmonthchart"></div>
                </div>
              </div>
            </div>
          </div>-->
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- -------------------------------------------------------------- -->
        <!-- Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <div class="container-fluid">
          <!-- -------------------------------------------------------------- -->
          <!-- Start Page Content -->
          <!-- -------------------------------------------------------------- -->
          <div class="row">
            <div class="col-12">
              <!-- ----------------------------------------- -->
              <!-- 1. Basic Form -->
              <!-- ----------------------------------------- -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-3 pb-3 border-bottom">Product Image</h4>
                  <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
					  <div class="col-md-6">
                        <div class="form-floating">	<label for="tb-cpwd">Product Images</label><br><br>					
                          <div class="email-repeater mb-3">
                        <div data-repeater-list="repeater-group">
                          <div data-repeater-item="" class="row mb-3">
                            <div class="col-md-10">
                              <div class="custom-file">
                                <input type="file" class="form-control" name="test" id="customFile">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle feather-sm fill-white"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                              </button>
                            </div>
                          </div>
                        </div>
                        <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">
                          <div class="d-flex align-items-center">
                            Add More File
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle feather-sm ms-2 fill-white"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                          </div>
                        </button>
                      </div>
                        </div>
                      </div>
                      <div class="col-12">
                        <div class="d-md-flex align-items-center mt-3">
                          <div class="ms-auto mt-3 mt-md-0">
                            <button type="submit" name="submit" class="btn btn-info font-weight-medium rounded-pill px-4">
                              <div class="d-flex align-items-center">
                                <i data-feather="send" class="feather-sm fill-white me-2"></i>
                                Submit
                              </div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        

          
          
          
          

          <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
        <!-- -------------------------------------------------------------- -->
        <!-- End Container fluid  -->
        <!-- -------------------------------------------------------------- -->
        <!-- -------------------------------------------------------------- -->
        <!-- footer -->
        <!-- -------------------------------------------------------------- -->
        <footer class="footer text-center">
          All Rights Reserved by adminpanel.
        </footer>
        <!-- -------------------------------------------------------------- -->
        <!-- End footer -->
        <!-- -------------------------------------------------------------- -->
      </div>
      <!-- -------------------------------------------------------------- -->
      <!-- End Page wrapper  -->
      <!-- -------------------------------------------------------------- -->
    </div>
    <!-- -------------------------------------------------------------- -->
    <!-- End Wrapper -->
    <!-- -------------------------------------------------------------- -->
    
    <!-- -------------------------------------------------------------- -->
    <!-- All Jquery -->
    <!-- -------------------------------------------------------------- -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/feather.min.js"></script>
    <script src="dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="assets/extra-libs/prism/prism.js"></script>
	<!--ckeditor-->
	
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<!--This page JavaScript -->
    <script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>
    <script src="assets/extra-libs/jquery.repeater/repeater-init.js"></script><!--
    <script src="assets/extra-libs/jquery.repeater/dff.js"></script>-->
  </body>
</html>
<?php
if(isset($_POST['submit'] ) ) {
	  $content_child_img='content_child_img';
$registered_date= date('Y-m-d');                							
	 // include resized library
  require_once('./php-image-magician/php_image_magician.php');
  $msg = "";
  $valid_image_check = array("image/gif", "image/jpeg", "image/jpg", "image/png", "image/bmp");
  if (count($_FILES["repeater-group"]) > 0) {
    $folderName = "assets/images/gallery/"; 
	$ccc=count($_FILES["repeater-group"]["name"]);
	//echo '<script type="text/javascript">alert("'.$ccc.'");window.location.href = "add_productimg.php?id='.$ids.'";
            //   </script>';  exit(); 

   // $sql = "INSERT INTO tbl_images(image_name) VALUES (:img)";
   // $stmt = $DB->prepare($sql);

    for ($i = 0; $i < count($_FILES["repeater-group"]["name"]); $i++) { 
      if ($_FILES["repeater-group"]["name"][$i] <> "") {  $ke='test';

        $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["repeater-group"]["tmp_name"][$i][$ke])));
		//size set
		$image_info = getimagesize($_FILES["repeater-group"]["tmp_name"][$i][$ke]);
		$image_width = $image_info[0];
		$image_height = $image_info[1]; 
		if ($image_width >= 267 || $image_height >= 344)
       {
        // if valid image type then upload
        if (in_array($image_mime, $valid_image_check)) {

          $ext = explode("/", strtolower($image_mime));
          $ext = strtolower(end($ext));
          $filename = rand(10000, 990000) . '_' . time() . '.' . $ext;
          $filepath = $folderName . $filename;

          if (!move_uploaded_file($_FILES["repeater-group"]["tmp_name"][$i][$ke], $filepath)) {
            $emsg .= "Failed to upload <strong>" . $_FILES["repeater-group"]["name"][$i][$ke] . "</strong>. <br>";
            $counter++;
          } else {
            $smsg .= "<strong>" . $_FILES["repeater-group"]["name"][$i][$ke] . "</strong> uploaded successfully. <br>";

            $magicianObj = new imageLib($filepath);
            $magicianObj->resizeImage(267, 344);
            $magicianObj->saveImage($folderName . 'thumb/' . $filename, 9);

            /*             * ****** insert into database starts ******** */

        	$sql_query =  "INSERT INTO   tbl_add_organic_product_child (content_child_ref_id,content_child_img,content_child_created_date)VALUES ('$ids','$filename','$registered_date')";
              $query = mysqli_query($con,$sql_query); 
              $result = mysqli_num_rows($query);
              if ($result > 0) {
                // file uplaoded successfully.
				$msg .= "<p class='msg_success'>Insert successfully.</p>";
              } else {
                // failed to insert into database.
				//$sql=" DELETE FROM  tbl_add_organic_product  WHERE category_sl_no='$last_id'";
		//$res=mysqli_query($con,$sql);
				$msg .= "<p class='msg_error'>Failed to upload <strong>" . $filename . "</strong>.</p>";
              }
            
            /*             * ****** insert into database ends ******** */
          }
        } else {
          $emsg .= "<strong>" . $_FILES["repeater-group"]["name"][$i][$ke] . "</strong> not a valid image. <br>";
        } }else{
		   echo '<script type="text/javascript">alert("'.$_FILES["repeater-group"]["name"][$i][$ke].' image not upload because width 267 X 344 px height above image only upload ");window.location.href = "add_contentimg.php?id='.$ids.'";
              </script>';  exit();
	   }
      }//if($result){
		  echo '<script type="text/javascript">alert("Insert Sucessfully");
             window.location.href = "view_content_tripimg.php?id='.$ids.'";</script>';
	  }
    //}



  } else {
    echo '<script type="text/javascript">alert("You must upload atleast one file");
               window.location.href = "view_content_tripimg.php?id='.$ids.'";</script>';
}
}
?>