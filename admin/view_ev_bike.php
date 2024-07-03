<?php
include("header.php");
include('db_config.php');
require 'vendor/autoload.php';

use Cloudinary\Configuration\Configuration;
use Cloudinary\Api\Upload\UploadApi;

Configuration::instance([
    'cloud' => [
        'cloud_name' => 'dspp2vqid',
        'api_key'    => '838937238819565',
        'api_secret' => 'SOIhazSJm8MEUaov7sMAcBQRlew'
    ],
    'url' => [
        'secure' => true
    ]
]);
?>

    <!-- This page plugin CSS -->
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
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
            <h3 class="text-themecolor mb-0">Gallery</h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Gallery</li>
            </ol>
          </div>
          <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <!--<div class="d-flex mt-2 justify-content-end">
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
            </div>-->
          </div>
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
          <!-- File export -->
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding bootstrap-table">
                  <div class="col-md-10 pull-left"><h4 class="card-title mb-0">Gallery</h4></div>
				  <div class="col-md-2 pull-right"><button type="button" class="btn btn-info btn-rounded m-t-10 mb-2" data-bs-toggle="modal" data-bs-target="#add-contact">Add More</button></div>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table id="file_export" class="table table-striped table-bordered display">
                      <thead>
                        <tr>
						<th>Sl.no</th>
                          <th>Title</th>
						  <th>Content</th>
                          <th>Bike Achivers Image</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
						$i=1;
						$sql="SELECT * from tbl_add_evbike_achivers "; 
						$qry=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($qry))
						{
						?>
                        <tr>
						              <td><?php echo $i++;?></td>
                          <td><?php echo $row['title'];?></td>
						    <td><?php echo $row['content'];?></td>
						   <td  class="pro-list-img"><img src="<?php echo $row['evbike_achivers_image'];?>" style="height: 44px;"></td>

                          <td><?php  $originalDate = $row['registered_date'];  echo $newDate = date("d-m-Y", strtotime($originalDate)); ?></td>   
                         <td><a class="like" data-bs-toggle="modal" data-bs-target="#edit-contact<?php echo $row['id'];?>" title="edit"><i class="ti-pencil-alt"></i></a>&nbsp;   
						  <a class="remove text-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['id'];?>" title="Remove"><i class="ti-trash"></i></a></td>   
                        </tr>
						<!-- Add Contact Popup Model -->
                  <div id="edit-contact<?php echo $row['id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <?php 
						$id=$row['id'];
						$exe="SELECT * FROM tbl_add_evbike_achivers where id='$id' ";
						$exe_result=mysqli_query($con,$exe);
						$rowresult = mysqli_fetch_array($exe_result);
					?>
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">Edit Country</h4>
                          <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
						<form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">                                          
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="title" required placeholder="title" value="<?php echo $row['title'];?>"/>
                              </div> 
							  
							   <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor" name="content" type="text"><?php echo $row['content'];?></textarea>
                           
                              </div>
							  <div class="col-md-12 mb-3">
                         <label for="image">Photo</label>
                        <img src="<?php echo $row['evbike_achivers_image'];?>" alt="Mobile image"  width="100px" height="100px">
                      </div>
                      <div class="form-group">
                        <input id="image" class="form-control" name="img_files" type="file">
                      </div>
                      
							  <input type="hidden" value="<?php echo $row['id'];?>" name="id">
							  <input type="hidden" value="<?php echo $row['evbike_achivers_image'];?>" name="evbike_achivers_image" >
                            </div>                         
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="update">Update</button>
                          <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel</button>
                        </div>
						</form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                
				  <div class="modal fade" id="del<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Country</h5>
						<button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
					  </div>       

					<?php 
						$id=$row['id'];
						$execution="SELECT * FROM tbl_add_evbike_achivers where id='$id' ";
						$exe_results=mysqli_query($con,$execution);
						$rowresults = mysqli_fetch_array($exe_results);        
						?>
					  <form method="post">
					  <input type="hidden" value="<?php echo $rowresult['evbike_achivers_image'];?>" name="evbike_achivers_image" >    
					  <div class="modal-body">
						<div class="alert alert-danger"><span class="icon-warning"></span> Are you sure you want to delete this Record?</div>
						<input type="hidden" name="id" value="<?php echo $rowresults['id'];?>"> 
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<input type="submit"  name="delete" class="btn btn-primary" value="Delete">     
					  </form>
					</div>
				  </div>
				</div>
						<?php } ?>
                      </tbody>
                      <tfoot>
                        <tr>
						               <th>Sl.no</th>
                          <th>Title</th>
                            <th>Content</th>
                            <th>Bike Achivers Image</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Add Contact Popup Model -->
                  <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">Add New Country</h4>
                          <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
						<form class="form-horizontal form-material" method="POST" enctype="multipart/form-data">  
                        <div class="modal-body">                         
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="title" required placeholder="Title"/>
                              </div>
							<div class="form-group">
                              <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor" required name="content" type="text"></textarea>
                               
                              </div>
                            </div>
							<div class="col-md-12">
							<div class="col-md-12 mb-3">
											<label for="validationCustom03" class="form-label">Mobie Image</label>
											<input type="file" class="form-control" id="validationCustom03" required name="evbike_achivers_image">
										</div>
										</div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="submit" value="submit">Save</button>
                          <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel</button>
                        </div>
						</form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
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
    <!-- customizer Panel -->
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
    <!--This page plugins -->
    <script src="assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.print.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-advanced.init.js"></script>
  </body>
</html>

<?php 
if (isset($_POST['submit'])) {
  $title = $_POST['title'];
  $content = $_POST['content'];
  $registered_date = date('Y-m-d');
  $filename = $_FILES["evbike_achivers_image"]["name"];
  
  $allowed_types = array("image/jpeg", "image/png", "image/gif", "image/bmp", "image/gif");
  $max_size = 5 * 1024 * 1024; // 5 MB
  
  // Validate file type
  if (in_array($_FILES["evbike_achivers_image"]["type"], $allowed_types)) {
      // Validate file size
      if ($_FILES["evbike_achivers_image"]["size"] <= $max_size) {
          // Move the uploaded file to the desired directory
          $upload_dir = "assets/images/gallery/";
          $file_name = basename($_FILES["evbike_achivers_image"]["name"]);
          $destination = $upload_dir . $file_name;
          
          if (move_uploaded_file($_FILES["evbike_achivers_image"]["tmp_name"], $destination)) {
              // Upload the image to Cloudinary
              try {
                  $cloudUpload = (new UploadApi())->upload($destination);
                  $cloudinaryUrl = $cloudUpload['secure_url'];

                  // Insert into database
                  $sql_query = "INSERT INTO tbl_add_evbike_achivers (title, content, evbike_achivers_image, registered_date) VALUES ('$title', '$content', '$cloudinaryUrl', '$registered_date')";
                  $query = mysqli_query($con, $sql_query);
                  
                  if ($query) {
                      echo '<script type="text/javascript">alert("Insert Successfully"); window.location.href = "view_ev_bike.php";</script>';
                  } else {
                      echo '<script type="text/javascript">alert("Failed to insert into database"); window.location.href = "view_ev_bike.php";</script>';
                  }
              } catch (Exception $e) {
                  echo 'Cloudinary upload failed: ' . $e->getMessage();
              }
          } else {
              echo '<script type="text/javascript">alert("Failed to move uploaded file"); window.location.href = "view_ev_bike.php";</script>';
          }
      }
      //  else {
      //     echo '<script type="text/javascript">alert("File size exceeds the limit of 5 MB"); window.location.href = "view_ev_bike.php";</script>';
      // }
  } else {
      echo '<script type="text/javascript">alert("Invalid file type"); window.location.href = "view_ev_bike.php";</script>';
  }
}
?>

<?php error_reporting(0);
if ($_POST["delete"])
{
		$id=$_POST['id'];
		$evbike_achivers_image=$_POST['evbike_achivers_image'];
	 unlink("assets/images/gallery/".$evbike_achivers_image);
	 unlink("assets/images/gallery/thumb/".$evbike_achivers_image);
		$sql="DELETE FROM tbl_add_evbike_achivers WHERE id='$id'";
		$res=mysqli_query($con,$sql);
		if($res){
			echo '<script type="text/javascript">alert("Deleted sucessfully");window.location.href = "view_ev_bike.php";</script>';

		}
}
		?>
		
		<?php
    if (isset($_POST['update'])) {
    // Sanitize and retrieve form data
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $evbike_achivers_image = mysqli_real_escape_string($con, $_POST['evbike_achivers_image']);
    $file_name = $_FILES["img_files"]["name"];

    // Validate file upload
    if (!empty($file_name)) {
        $folderName = "assets/images/gallery/";
        $filepath = $folderName . basename($file_name);
        $image_info = getimagesize($_FILES["img_files"]["tmp_name"]);
        $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["img_files"]["tmp_name"])));
        $valid_image_check = array("image/gif", "image/jpeg", "image/jpg", "image/png", "image/bmp");

        if (!in_array($image_mime, $valid_image_check)) {
            echo '<script type="text/javascript">alert("Invalid image format.");window.location.href = "view_ev_bike.php";</script>';
            // exit();
        }

        // Move uploaded file to temporary location
        if (!move_uploaded_file($_FILES["img_files"]["tmp_name"], $filepath)) {
            echo '<script type="text/javascript">alert("Failed to upload ' . $_FILES["img_files"]["name"] . '");window.location.href = "view_ev_bike.php";</script>';
            // exit();
        }
        // Upload the image to Cloudinary
        try {
            $cloudUpload = (new UploadApi())->upload($filepath);
            $cloudinaryUrl = $cloudUpload['secure_url'];

            // Remove the local file after successful upload
            unlink($filepath);

            // Update database record with Cloudinary URL
            $sql = "UPDATE `tbl_add_evbike_achivers` SET title='$title', content='$content', evbike_achivers_image='$cloudinaryUrl' WHERE id='$id'";
        } catch (Exception $e) {
            echo 'Cloudinary upload failed: ' . $e->getMessage();
            exit();
        }
    } else {
        // Update without changing the image
        $sql = "UPDATE `tbl_add_evbike_achivers` SET title='$title', content='$content' WHERE id='$id'";
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script type="text/javascript">alert("Updated successfully.");window.location.href = "view_ev_bike.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Failed to update.");window.location.href = "view_ev_bike.php";</script>';
    }
}
?>
<script>
CKEDITOR.replaceClass = 'editor';

    // CKEDITOR.replace( 'product_desc' );
</script>