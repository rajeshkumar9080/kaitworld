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
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table id="file_export" class="table table-striped table-bordered display">
                      <thead>
                        <tr>
						             <th>Sl.no</th>
                          <th>title</th>
                          <th>content</th>
                          <th>video</th>
                          <th>youtube video</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php  
						$i=1;
						$sql="SELECT * from tbl_add_gallery_video"; 
						$qry=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($qry))
						{
						?>
                        <tr>
						  <td><?php echo $i++;?></td>
                          <td><?php echo $row['title'];?></td>
                            <td><?php echo $row['content'];?></td>
                            <td class="pro-list-img">
                <video controls width='220px' height='100px'>
        <!-- Add more source elements if needed -->
        <source src="<?php echo $row['video'];?>" type="video/mp4"> 
         </video>    
        </td>
         <td>        
            <a href="<?php echo htmlspecialchars($row['y_video']); ?>" target="_blank"><?php echo htmlspecialchars($row['y_video']); ?></a>    
        </td> 
                          <td><?php $originalDate = $row['registered_date']; echo $newDate = date("y-m-d", strtotime($originalDate)); ?></td>
                         <td><a class="like w-100px" data-bs-toggle="modal" data-bs-target="#edit-contact<?php echo $row['id'];?>" title="edit"><i class="ti-pencil-alt"></i></a>&nbsp;
                         <a class="remove text-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['id'];?>" title="Remove"> <i class="ti-trash"></i></a>
                         </tr>    
						<!-- Add Contact Popup Model -->
                  <div id="edit-contact<?php echo $row['id'];?>"class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                      <?php 
						$id=$row['id'];
						$exe="SELECT * FROM tbl_add_gallery_video where id='$id'";
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
                                <input type="text" class="form-control" name="title"  placeholder="title" value="<?php echo $row['title'];?>"/>
                              </div> 
							  <div class="col-md-12 mb-3">
                  <textarea id="content_page" class="form-control editor" name="content" type="text"><?php echo $row['content'];?></textarea>
                              </div> 

                              <div class="col-md-12 mb-3">
                                  <label for="video">Video</label>
                                  <video controls width='220px' height='100px'>
                                    <source src="<?php echo $row['video'];?>" type="video/mp4">
                                </video>                      </div>
                                <div class="form-group">
                                  <input id="video" class="form-control" name="video" type="file">
                              </div>
                              <input type="hidden" value="<?php echo $row['id'];?>" name="id">
                              <input type="hidden" value="<?php echo $row['video'];?>" name="existing_video">        
                                                      <br>
                               <div class="col-md-12 mb-3">
                               <label for="y_video">youtube Video</label>
                                <input type="text" class="form-control" name="y_video"  placeholder="youtube video" value="<?php echo $row['y_video'];?>"/>
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
                <h5 class="modal-title" id="exampleModalLabel">Delete Video</h5>          
                <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>     
            </div>   
            <?php                        
            $id=$row['id'];   
            $execution="SELECT * FROM tbl_add_gallery_video WHERE id='$id'";
            $exe_results=mysqli_query($con,$execution);
            $rowresults = mysqli_fetch_array($exe_results);
            ?>
            <form method="post">
                <input type="hidden" value="<?php echo $rowresults['video'];?>" name="video" >
                <div class="modal-body">
                    <div class="alert alert-danger"><span class="icon-warning"></span> Are you sure you want to delete this Record?</div>
                    <input type="hidden" name="id" value="<?php echo $rowresults['id'];?>">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" name="delete" class="btn btn-primary" value="Delete"> 
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
                        <th>title</th>
                        <th>content</th>
                        <th>video</th>
                        <th>youtube video</th>
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
                                <input type="text" class="form-control" name="title"  placeholder="title"/>
                              </div>
							    
                            </div>
							<div class="form-group">
                              <div class="col-md-12 mb-3">
							   <textarea id="content_page" class="form-control editor"  name="content" type="text"></textarea>
                               
                              </div>
                            </div>  
                            
						 <!-- <div class="col-md-12">
							<div class="col-md-12 mb-3">
											<label for="validationCustom03" class="form-label">video</label>
											<input type="file" class="form-control" id="validationCustom03" name="video">   
										</div>
										</div>
                           
                    <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="y_video"  placeholder="youtube video Url"/>
                              </div>							   
                            </div>  -->
                            <div class="container">
        <form id="videoForm" action="video_script.php" method="POST" enctype="multipart/form-data">
            <div class="form-group col-md-12">
            <!-- <div class="col-md-12"> -->
            <div class="col-md-12 mb-3">
                <label for="videoFile">Video File</label>
                <input type="file" class="form-control" id="videoFile" name="video" accept="video/*">
            </div>
            </div>
            <div class="form-group">
            <div class="col-md-12 mb-3">
                <input type="text" class="form-control" id="youtubeUrl" name="y_video" placeholder="YouTube Video URL">
            </div>
        </form>
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
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

  </body>
  <style>
        .hidden {
            display: none;
        }
    </style>

  <script>
        $(document).ready(function() {
            $('#videoFile').change(function() {
                if ($(this).val()) {
                    $('#youtubeUrl').closest('.form-group').addClass('hidden');
                } else {
                    $('#youtubeUrl').closest('.form-group').removeClass('hidden');
                }
            });

            $('#youtubeUrl').on('input', function() {
                if ($(this).val()) {
                    $('#videoFile').closest('.form-group').addClass('hidden');
                } else {
                    $('#videoFile').closest('.form-group').removeClass('hidden');
                }
            });
        });
    </script>
  
  <?php
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $y_video = $_POST['y_video'];
    $registered_date = date('Y-m-d');
    date_default_timezone_set('Asia/Manila');
    // Validate YouTube URL and generate embed URL
    if (preg_match('/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/', $y_video)) {
        $youtubeEmbedUrl = preg_replace(
            "/\A.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^\#\&\?]*).*/",
            "https://www.youtube.com/embed/$7",
            $y_video
        );
    } else {
        $youtubeEmbedUrl = '';
    }
  if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
    $file_name = $_FILES['video']['name'];
    $file_temp = $_FILES['video']['tmp_name'];
    $file_size = $_FILES['video']['size'];

    if ($file_size < 50000000) { // 50 MB limit
        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_ext = array('avi', 'flv', 'wmv', 'mov', 'mp4');
        if (in_array($file_ext, $allowed_ext)) {
            $new_file_name = date("Ymd") . time() . "." . $file_ext;
            $destination = 'assets/images/video/' . $new_file_name;
            if (move_uploaded_file($file_temp, $destination)) {
                try {
                    // Upload the video to Cloudinary
                    // $cloudUpload = $cloudinary->uploadApi()->upload($destination, ['resource_type' => 'video']);
                    // $cloudinaryUrl = $cloudUpload['secure_url'];
                    $cloudUpload = (new UploadApi())->upload($destination, ['resource_type' => 'video']);
                    $cloudinaryUrl = $cloudUpload['secure_url'];
                    // Remove the local file
                    unlink($destination);
                    // Insert data into the database
                    $sql_query = "INSERT INTO tbl_add_gallery_video (title, content, video, y_video, registered_date) VALUES ('$title', '$content', '$cloudinaryUrl', '$youtubeEmbedUrl', '$registered_date')";
                    $query = mysqli_query($con, $sql_query);
                    if ($query) {
                        echo '<script type="text/javascript">alert("Insert Successfully"); window.location.href = "view_gallery_video.php";</script>';
                    } else {
                        echo '<script type="text/javascript">alert("Failed to insert into database"); window.location.href = "view_gallery_video.php";</script>';
                    }
                } catch (Exception $e) {
                    echo 'Cloudinary upload failed: ' . $e->getMessage();
                }
            }
        } else {
            echo '<script type="text/javascript">alert("Invalid file type"); window.location.href = "view_gallery_video.php";</script>';
        }
    } else {
        echo '<script type="text/javascript">alert("File size exceeds the limit of 50 MB"); window.location.href = "view_gallery_video.php";</script>';
    }
} else {
    // Insert data into the database without video file
    $sql_query = "INSERT INTO tbl_add_gallery_video (title, content, y_video, registered_date) VALUES ('$title', '$content', '$youtubeEmbedUrl', '$registered_date')";
    $query = mysqli_query($con, $sql_query);

    if ($query) {
        echo '<script type="text/javascript">alert("Insert Successfully"); window.location.href = "view_gallery_video.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Failed to insert into database"); window.location.href = "view_gallery_video.php";</script>';
    }
}
}
?>



<?php 
error_reporting(0);
if (isset($_POST["delete"])) {
    $id = $_POST['id'];
    $video = $_POST['video'];

    // Print values for debugging
    error_log("ID: " . $id);
    error_log("Video: " . $video);
    
    // Delete the video files
    $videoPath = "assets/images/video/" . $video;
    $thumbPath = "assets/images/gallery/thumb/" . $video;

    if (file_exists($videoPath)) {
        unlink($videoPath);
    } else {
        error_log("Video file does not exist: " . $videoPath);
    }

    if (file_exists($thumbPath)) {
        unlink($thumbPath);
    } else {
        error_log("Thumbnail file does not exist: " . $thumbPath);
    }

    // Delete the record from the database
    $sql = "DELETE FROM tbl_add_gallery_video WHERE id='$id'";
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo '<script type="text/javascript">alert("Deleted successfully");window.location.href = "view_gallery_video.php";</script>';
    } else {
        echo '<script type="text/javascript">alert("Error deleting record");window.location.href = "view_gallery_video.php";</script>';
        error_log("MySQL error: " . mysqli_error($con));
    }
}
?>  
 

        

<?php
if (isset($_POST['update'])) {
    // Sanitize and retrieve form data
    $id = mysqli_real_escape_string($con, $_POST['id']);
    $title = mysqli_real_escape_string($con, $_POST['title']);
    $content = mysqli_real_escape_string($con, $_POST['content']);
    $y_video = mysqli_real_escape_string($con, $_POST['y_video']);
  
    $registered_date = date('Y-m-d'); // Assuming you want to update the registered date too
    date_default_timezone_set('Asia/Manila');
  
    // Initialize SQL query
    $sql = "UPDATE tbl_add_gallery_video SET title='$title', content='$content'";
  
    // Validate and process YouTube video URL
    if (preg_match('/^(https?\:\/\/)?(www\.youtube\.com|youtu\.?be)\/.+$/', $y_video)) {
        $youtubeEmbedUrl = preg_replace(
            "/\A.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^\#\&\?]*).*/",
            "https://www.youtube.com/embed/$7",
            $y_video
        );
        $sql .= ", y_video='$youtubeEmbedUrl'";
    } else {
        $youtubeEmbedUrl = '';
        $sql .= ", y_video='$youtubeEmbedUrl'";
    }
  
    // Handle video file upload
    if (isset($_FILES['video']) && $_FILES['video']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['video']['name'];
        $file_temp = $_FILES['video']['tmp_name'];
        $file_size = $_FILES['video']['size'];
      
        if ($file_size < 50000000) { // 50MB file size limit
            $folderName = "assets/images/video/";
            $valid_video_types = array("video/mp4", "video/mpeg", "video/quicktime"); // Valid video MIME types
          
            if (in_array($_FILES['video']['type'], $valid_video_types)) {
                // Generate unique file name
                $name = date("Ymd") . time();
                $new_file_name = $folderName . $name . ".mp4"; // Assuming you want to store videos in mp4 format
              
                // Move uploaded file to the desired location
                if (move_uploaded_file($file_temp, $new_file_name)) {
                    try {
                        // Upload the video to Cloudinary
                        $cloudUpload = (new UploadApi())->upload($new_file_name, ['resource_type' => 'video']);
                        $cloudinaryUrl = $cloudUpload['secure_url'];
        
                        // Remove the local file after successful upload
                        unlink($new_file_name);
                  
                        // Update the SQL query with the new video file URL
                        $sql .= ", video='$cloudinaryUrl'";
                    } catch (Exception $e) {
                        echo 'Cloudinary upload failed: ' . $e->getMessage();
                        exit();
                    }
                } else {
                    echo '<script>alert("Failed to move uploaded file.");window.location.href = "view_gallery_video.php";</script>';
                    exit();
                }
            } else {
                echo '<script>alert("Invalid video type.");window.location.href = "view_gallery_video.php";</script>';
                exit();
            }
        } else {
            echo '<script>alert("File size exceeds the limit.");window.location.href = "view_gallery_video.php";</script>';
            exit();
        }
    }

    // Complete the SQL query
    $sql .= " WHERE id='$id'";

    // Execute SQL query
    if (mysqli_query($con, $sql)) {
        echo '<script>alert("Updated successfully.");window.location.href = "view_gallery_video.php";</script>';
    } else {
        echo '<script>alert("Failed to update.");window.location.href = "view_gallery_video.php";</script>';
    }
}
?>

<script>
CKEDITOR.replaceClass = 'editor';

    // CKEDITOR.replace( 'product_desc' );
</script>