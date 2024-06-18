<?php include("header.php"); 
include('db_config.php');
?>
    <!-- This page plugin CSS -->
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>


  


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
          </div>
        </div>
        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="border-bottom title-part-padding bootstrap-table">
                  <div class="col-md-10 pull-left"><h4 class="card-title mb-0">Gallery</h4></div>
				  <div class="col-md-2 pull-right"><button type="button" class="btn btn-info btn-rounded m-t-10 mb-2" data-bs-toggle="modal" data-bs-target="#add-contact">Add More</button></div>
                </div>

                <!-- <form class="form-inline" id="filterForm">
        <label>Date:</label>
        <input type="datetime-local" class="form-control" placeholder="Start" name="startDatetime" id="startDatetime" />
        <label>To</label>
        <input type="datetime-local" class="form-control" placeholder="End" name="endDatetime" id="endDatetime" />
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
        <a href="view_events.php" type="button" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span></a>
    </form> -->

                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table id="file_export" class="table table-striped table-bordered display">
                      <thead>
                        <tr>
						             <th>Sl.No</th>
                          <th>userId</th>
                        <th>userName</th>
                        <th>userImage</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
                     
						$i=1;
            $sql = "SELECT * FROM tbl_add_achiveres" ;
            $qry = mysqli_query($con, $sql);
            while($row=mysqli_fetch_array($qry))
						{
						?>
                        <tr> 
						  <td><?php echo $i++;?></td>
                          <td><?php echo $row['user_id'];?></td>
                          <td><?php echo $row['user_name']; ?></td>
						   <td  class="pro-list-img"><img src="assets/images/gallery/<?php echo $row['user_image'];?>" style="height: 44px;"></td>
											
                          <td><?php  $originalDate = $row['registered_date'];  echo $newDate = date("y-m-d", strtotime($originalDate)); ?></td>
                         <td><a class="like" data-bs-toggle="modal" data-bs-target="#edit-contact<?php echo $row['id'];?>" title="edit"><i class="ti-pencil-alt"></i></a>&nbsp;
						              <a class="remove text-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['id'];?>" title="Remove"><i class="ti-trash"></i></a></td>
                        </tr>
						<!-- Add Contact Popup Model -->
                  <div id="edit-contact<?php echo $row['id'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                
                      <?php 
						$id=$row['id'];
						$exe="	SELECT * FROM tbl_add_achiveres where id='$id' ";
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
                                <input type="text" class="form-control" name="user_id" placeholder="user_id" value="<?php echo $row['user_id'];?>"/>
                              </div>  
							   <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor" name="user_name" type="text"><?php echo $row['user_name'];?></textarea>
                           
                              </div>
							  <div class="col-md-12 mb-3">
                         <label for="image">Photo</label>
                        <img src="assets/images/gallery/<?php echo $row['user_image'];?>" alt="image"  width="100px" height="100px">
                      </div>
                      <div class="form-group">
                        <input id="image" class="form-control" name="img_files" type="file">
                      </div>
                      
							  <input type="hidden" value="<?php echo $row['id'];?>" name="id">
							  <input type="hidden" value="<?php echo $row['user_image'];?>" name="user_image" >
                            </div>                         
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="update" value="update">Update</button>
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
						$execution="	SELECT * FROM tbl_add_achiveres where id='$id' ";
						$exe_results=mysqli_query($con,$execution);
						$rowresults = mysqli_fetch_array($exe_results);
						?>
					  <form method="post">
					  <input type="hidden" value="<?php echo $rowresult['user_image'];?>" name="user_image">
					  <div class="modal-body">
						<div class="alert alert-danger"><span class="icon-warning"></span> Are you sure you want to delete this Record?</div>
						<input type="hidden" name="id" value="<?php echo $rowresults['id'];?>">
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<input type="submit"  name="delete" class="btn btn-primary" value="Delete"> 
					  </div>
					  </form>
					</div>
				  </div>
				</div>
                      <?php }?>
                      </tbody>
                      <tfoot>
                        <tr>
						              <th>Sl.no</th>
                          <th>userId</th>
                        <th>userName</th>
                        <th>userImage</th>
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

                      <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">Add New Country</h4>
                          <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
						<form class="form-horizontal form-material" method="POST" action="" enctype="multipart/form-data">
                        <div class="modal-body">                         
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="user_id" placeholder="user_id"/>
            </div>
                            </div>
							<div class="form-group">
                              <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor" name="user_name" type="text" ></textarea>
                               
                              </div>
                            </div>  
							<div class="col-md-12">
							<div class="col-md-12 mb-3">
											<label for="validationCustom03" class="form-label">Image</label>
											<input type="file" class="form-control" id="validationCustom03" name="user_image">
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
                      </tbody>
          


                        <!-- -------------------------------------------------------------- -->
          <!-- End PAge Content -->
          <!-- -------------------------------------------------------------- -->
        </div>
      
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
    <!-- <script src="dist/js/waves.js"></script> -->
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

  <?php
									// session_start();
									// error_reporting(0);
									// include "db_config.php";
									// Uploads files
									if(isset($_POST['submit'])) 
                  { 
                    $user_id=$_POST['user_id'];
                    $user_name=$_POST['user_name'];
                    $registered_date= date('Y-m-d'); 
									  $user_image=$_FILES["user_image"]["name"];

                    $valid_image_check = array("image/gif","image/jpeg","image/jpg","image/png","image/bmp");
     if (count($_FILES["user_image"]) > 0) 
    $folderName = "assets/images/gallery/";
      //  if ($_FILES["user_image"]["name"] <> "") 

        //  $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["user_image"]["tmp_name"])));
		//size set
		// $image_info = getimagesize($_FILES["user_image"]["tmp_name"]);
		// $image_width = $image_info[0];  
		// $image_height = $image_info[1];
		// if ($image_width >= 480 || $image_height >= 260) 
         move_uploaded_file($_FILES["user_image"]["tmp_name"],"assets/images/gallery/".$_FILES["user_image"]["name"]);
          {
            // $emsg .= "Failed to upload <strong>" . $_FILES["user_image"]["name"] . "</strong>. <br>";
            // $counter++;
                     echo $sql ="INSERT INTO tbl_add_achiveres(user_id,user_name,user_image,registered_date) VALUES ('$user_id','$user_name','$user_image','$registered_date')";
									  if (mysqli_query($con, $sql)) 
									  {
                      echo'<script type="text/javascript">alert("insert sucessfully");window.location.href = "view_achives.php";</script>';

									  }
									  else {
									    echo "<script>alert('Failed to upload image.');</script>";
									  }
									}
                }
									?>
   
 <?php error_reporting(0);
if ($_POST["delete"])
{

		$id=$_POST['id'];
		$user_image=$_POST['user_image'];
	 unlink("assets/images/gallery/".$user_image);
	 unlink("assets/images/gallery/thumb/".$user_image);
		$sql=" DELETE FROM tbl_add_achiveres WHERE id='$id'";
		$res=mysqli_query($con,$sql);
		if($res){
			echo '<script type="text/javascript">alert("Deleted sucessfully");window.location.href = "view_achives.php";</script>';

		}
}
		?> 
		
		
    
    <?php  
if( isset($_POST['update'] ) ) { 
  $user=mysqli_real_escape_string($con,$_POST['id']);
 $user_id=mysqli_real_escape_string($con,$_POST['user_id']);
 $user_name=mysqli_real_escape_string($con,$_POST['user_name']);
  $user_image=mysqli_real_escape_string($con,$_POST['user_image']);
  $file_name = $_FILES["img_files"]["name"];

// Validate file upload
    if (!empty($file_name)) {
        $folderName = "assets/images/gallery/";
        $filepath = $folderName . basename($file_name);
        $image_info = getimagesize($_FILES["img_files"]["tmp_name"]);
        $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["img_files"]["tmp_name"])));
        $valid_image_check = array("image/gif", "image/jpeg", "image/jpg", "image/png", "image/bmp");

        if (!in_array($image_mime, $valid_image_check)) {
            echo '<script type="text/javascript">alert("Invalid image format.");window.location.href = "view_achives.php";</script>';
            exit();
        }

        // Move uploaded file
        if (!move_uploaded_file($_FILES["img_files"]["tmp_name"], $filepath)) {
            echo '<script type="text/javascript">alert("Failed to upload ' . $_FILES["img_files"]["name"] . '");window.location.href = "view_achives.php";</script>';
            exit();
        }

        // Update database record
        unlink("assets/images/gallery/" . $user_image);
        unlink("assets/images/gallery/thumb/" . $user_image);
      echo $sql =("UPDATE `tbl_add_achiveres` SET user_id='$user_id',user_name='$user_name',user_image='$file_name' WHERE id='$user'");
    } else {
        // Update without changing the image
        $sql =("UPDATE `tbl_add_achiveres` SET user_id='$user_id',user_name='$user_name' WHERE id='$user'");
    }

    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<script type="text/javascript">alert("Updated successfully.");window.location.href = "view_achives.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Failed to update.");window.location.href = "view_achives.php";</script>';
    }
  }
?>


<script>
CKEDITOR.replaceClass = 'editor';

    // CKEDITOR.replace( 'product_desc' );
</script>


