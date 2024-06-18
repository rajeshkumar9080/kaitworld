<?php include("header.php"); ?>
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
            <h3 class="text-themecolor mb-0">Tourism</h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Tourism</li>
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
                  <div class="col-md-10 pull-left"><h4 class="card-title mb-0">Top Achive Tourism</h4></div>
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
						  <th>Image</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
						$i=1;
						$sql="select * from  tbl_add_peaceful_trip "; 
						$qry=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($qry))
						{
						?>
                        <tr>
						  <td><?php echo $i++;?></td>
                          <td><?php echo $row['trip_title'];?></td>
						  <td><?php echo $row['trip_content']; ?></td>
						   <td  class="pro-list-img"><img src="assets/images/gallery/<?php echo $row['trip_image'];?>" style="height: 44px;"></td>
											
                          <td><?php  $originalDate = $row['registered_date'];  echo $newDate = date("d-m-Y", strtotime($originalDate)); ?></td>
                          <td><a class="like" data-bs-toggle="modal" data-bs-target="#edit-contact<?php echo $row['user_id'];?>" title="edit"><i class="ti-pencil-alt"></i></a>&nbsp;
						  <a class="remove text-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['user_id'];?>" title="Remove"><i class="ti-trash"></i></a></td>
                        </tr>
						<!-- Add Contact Popup Model -->
                  <div id="edit-contact<?php echo $row['user_id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
					<?php 
						$user_id=$row['user_id'];
						$exe="	SELECT * FROM  tbl_add_peaceful_trip where  user_id='$user_id' ";
						$exe_result=mysqli_query($con,$exe);
						$rowresult = mysqli_fetch_array($exe_result);
					?>
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">Edit Country</h4>
                          <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
							<form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                        <div class="modal-body">                         
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="trip_title" required placeholder="Country name" value="<?php echo $rowresult['trip_title'];?>"/>
                              </div> 
							  <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor" name="trip_content" type="text"><?php echo $row['trip_content'];?></textarea>
                           
                              </div>
                      <div class="col-md-12 mb-3">
                         <label for="image">Photo</label>
                        <img src="assets/images/gallery/<?php echo $row['trip_image'];?>" alt="image"  width="100px" height="100px">
                      </div>
                      <div class="form-group">
                        <input id="image" class="form-control" name="img_files" type="file">
                      </div>
                      
							  <input type="hidden" value="<?php echo $row['user_id'];?>" name="user_id">
							  <input type="hidden" value="<?php echo $row['trip_image'];?>" name="trip_image" >
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
				  <div class="modal fade" id="del<?php echo $row['user_id'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Country</h5>
						<button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
					  </div>
					<?php 
						$user_id=$row['user_id'];
						$execution="	SELECT * FROM    tbl_add_peaceful_trip	where  user_id='$user_id' ";
						$exe_results=mysqli_query($con,$execution);
						$rowresults = mysqli_fetch_array($exe_results);
						?>
					  <form method="post">
					  <input type="hidden" value="<?php echo $rowresult['home_event_image'];?>" name="home_event_image" >
					  <div class="modal-body">
						<div class="alert alert-danger"><span class="icon-warning"></span> Are you sure you want to delete this Record?</div>
						<input type="hidden" name="cid" value="<?php echo $rowresults['user_id'];?>">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<input type="submit"  name="delete" class="btn btn-primary" value="Delete"> 
					  </div>
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
						  <th>Image</th>
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
						<form class="form-horizontal form-material" method="post" enctype="multipart/form-data">
                        <div class="modal-body">                         
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="trip_title" required placeholder="Title"/>
                              </div>
                            </div>
							<div class="form-group">
                              <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor" required name="trip_content" type="text" ></textarea>
                               
                              </div>
                            </div>
							<div class="col-md-12">
							<div class="col-md-12 mb-3">
											<label for="validationCustom03" class="form-label">Image</label>
											<input type="file" class="form-control" id="validationCustom03" required name="trip_image">
										</div>
										</div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="save_user" value="submit">Save</button>
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
$msg = ""; 
if( isset($_POST['save_user'] ) ) {
	$trip_title=$_POST['trip_title'];
 $trip_content=$_POST['trip_content'];
 $file_name = $_FILES["trip_image"]["name"];
  $registered_date= date('Y-m-d'); 

	   require_once('./php-image-magician/php_image_magician.php');
  $valid_image_check = array("image/gif", "image/jpeg", "image/jpg", "image/png", "image/bmp");
  if (count($_FILES["trip_image"]) > 0) {
    $folderName = "assets/images/gallery/";
      if ($_FILES["trip_image"]["name"] <> "") {

        $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["trip_image"]["tmp_name"])));
		//size set
		$image_info = getimagesize($_FILES["trip_image"]["tmp_name"]);
		$image_width = $image_info[0];
		$image_height = $image_info[1];
		if ($image_width >= 280 || $image_height >= 160)
       {
        // if valid image type then upload
        if (in_array($image_mime, $valid_image_check)) {

          $ext = explode("/", strtolower($image_mime));
          $ext = strtolower(end($ext));
          $filename = rand(10000, 990000) . '_' . time() . '.' . $ext;
          $filepath = $folderName . $filename;

          if (!move_uploaded_file($_FILES["trip_image"]["tmp_name"], $filepath)) {
            $emsg .= "Failed to upload <strong>" . $_FILES["trip_image"]["name"] . "</strong>. <br>";
            $counter++;
          } else {
            $smsg .= "<strong>" . $_FILES["trip_image"]["name"] . "</strong> uploaded successfully. <br>";

            $magicianObj = new imageLib($filepath);
            $magicianObj->resizeImage(280, 160);
            $magicianObj->saveImage($folderName . 'thumb/' . $filename, 9);

           
       echo $sql_query ="INSERT INTO tbl_add_peaceful_trip (trip_title,trip_content,trip_image,registered_date)VALUES ('$trip_title','$trip_content','$filename','$registered_date')";
              $query = mysqli_query($con,$sql_query); 
              $result = mysqli_num_rows($query);
              if ($query) {
                // file uplaoded successfully.
				echo '<script type="text/javascript">alert("Insert Sucessfully");
               window.location.href = "view_peaceful_trip.php";</script>';
              }else{
                // failed to insert into database.
				echo '<script type="text/javascript">alert("Failed to upload <strong>"' . $filename . '"</strong>");
               window.location.href = "view_peaceful_trip.php";</script>';
              
            
            /*             * ****** insert into database ends ******** */
          }
        } 
	   }
      }
  } 
}
}
?>

<?php 
if ($_POST["delete"])
{

		$cid=$_POST['cid'];
			$trip_image=$_POST['trip_image'];
	 unlink("assets/images/gallery/".$trip_image);
	 unlink("assets/images/gallery/thumb/".$trip_image);
		$sql=" DELETE FROM   tbl_add_peaceful_trip  WHERE user_id='$cid'";
		$res=mysqli_query($con,$sql);
		if($res){
			echo '<script type="text/javascript">alert("Deleted sucessfully");window.location.href = "view_peaceful_trip.php";</script>';

		}
}
		?>
		
		<?php
if( isset($_POST['update'] ) ) { 
 $user_id=$_POST['user_id'];
 $trip_title=$_POST['trip_title'];
 $trip_content=$_POST['trip_content'];

$file_name = $_FILES["img_files"]["name"];
  $trip_image=$_POST['trip_image'];
  if( isset($file_name) && $file_name == "") {
		echo $sql = ' UPDATE  tbl_add_peaceful_trip SET trip_title="'.$trip_title.'",trip_content="'.$trip_content.'"  WHERE user_id="'.$user_id.'"';
	$result = mysqli_query($con,$sql);
	 						 
		 echo '<script type="text/javascript">alert("Updated sucessfully");window.location.href = "view_peaceful_trip.php";</script>';
	}else if( isset($file_name) && $file_name != "") { 
		  require_once('./php-image-magician/php_image_magician.php');
		  $msg = "";
		  $valid_image_check = array("image/gif", "image/jpeg", "image/jpg", "image/png", "image/bmp");
		  $folderName = "assets/images/gallery/";
		  if ($_FILES["img_files"]["name"] <> "") {

        $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["img_files"]["tmp_name"])));
        // if valid image type then upload
		//size set
		$image_info = getimagesize($_FILES["img_files"]["tmp_name"]);
		 $image_width = $image_info[0];
		 $image_height = $image_info[1];
		if ($image_width >= 360 || $image_height >= 280)
       {
        if (in_array($image_mime, $valid_image_check)) {

          $ext = explode("/", strtolower($image_mime));
          $ext = strtolower(end($ext));
          $filename = rand(10000, 990000) . '_' . time() . '.' . $ext;
          $filepath = $folderName . $filename;

          if (!move_uploaded_file($_FILES["img_files"]["tmp_name"], $filepath)) {
            $emsg .= "Failed to upload <strong>" . $_FILES["img_files"]["name"] . "</strong>. <br>";
			 echo '<script type="text/javascript">alert("Failed to upload <strong>' . $_FILES["img_files"]["name"] . '</strong>.");window.location.href = "view_blog.php";</script>';
            $counter++;
          } else {
            //$smsg .= "<strong>" . $_FILES["img_files"]["name"] . "</strong> uploaded successfully. <br>";

            $magicianObj = new imageLib($filepath);
            $magicianObj->resizeImage(360, 280);
            $magicianObj->saveImage($folderName . 'thumb/' . $filename, 9); 

            /*             * ****** insert into database starts ******** */
            unlink("assets/images/gallery/".$images);
			unlink("assets/images/gallery/thumb/".$images);
        	echo $sql = ' UPDATE  tbl_add_peaceful_trip SET trip_title="'.$trip_title.'",trip_content="'.$trip_content.'",trip_image="'.$filename.'"   WHERE user_id="'.$user_id.'"';
	$result = mysqli_query($con,$sql);
              if ($result) {
                // file uplaoded successfully.
				echo '<script type="text/javascript">alert("uploaded successfully.");window.location.href = "view_peaceful_trip.php";</script>';
              } else {
                // failed to insert into database.
				echo '<script type="text/javascript">alert("Failed to upload ' . $filename . '");window.location.href = "view_peaceful_trip.php";</script>';
              }
            
            /*             * ****** insert into database ends ******** */
          }
        } else {
		   echo '<script type="text/javascript">alert("<strong>' . $_FILES["img_files"]["name"] . '</strong>not a valid image.");window.location.href = "view_peaceful_trip.php";</script>';
        }
		}else{
		   echo '<script type="text/javascript">alert("'.$_FILES["img_files"]["name"].' image not upload because width 360 X 280 px height above image only upload ");window.location.href = "view_peaceful_trip.php";
               </script>';  exit();
	   }
      }
		     
	}
  
  
             
}

?>	
		
<script>
CKEDITOR.replaceClass = 'editor';

    // CKEDITOR.replace( 'product_desc' );
</script>