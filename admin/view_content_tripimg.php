<?php include("header.php"); 
$ids=$_REQUEST['id'];?>
    <!-- This page plugin CSS -->
    <link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>

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
            <h3 class="text-themecolor mb-0">Product</h3>
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item">
                <a href="dashboard.php">Home</a>
              </li>
              <li class="breadcrumb-item active">Product</li>
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
                  <div class="col-md-10 pull-left"><h4 class="card-title mb-0">Product Image List</h4></div>
				  <div class="col-md-2 pull-right"><a class="btn btn-info btn-rounded m-t-10 mb-2" href="add_contentimg.php?id=<?php echo $ids; ?>">Add Product Image</a></div>
                </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table id="file_export" class="table table-striped table-bordered display">
                      <thead>
                        <tr>
						  <th>Sl.no</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php 
						$i=1;
						 $sql="SELECT * FROM `tbl_add_organic_product_child` where content_child_ref_id='$ids'"; 
						$qry=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($qry))
						{
						?>
                        <tr>
						  <td><?php echo $i++;?></td>
                          <td><img src="assets/images/gallery/<?php echo $row['content_child_img'];?>" height="100" width="100"/></td>
                          <td><a class="like" data-bs-toggle="modal" data-bs-target="#edit-contact<?php echo $row['content_child_sl_no'];?>" title="edit"><i class="ti-pencil-alt"></i></a>&nbsp;
						  <a class="remove text-danger" data-bs-toggle="modal" data-bs-target="#del<?php echo $row['content_child_sl_no'];?>" title="Remove"><i class="ti-trash"></i></a></td>
                        </tr>
						<!-- Add Contact Popup Model -->
                  <div id="edit-contact<?php echo $row['content_child_sl_no'];?>" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
					<?php 
						$content_child_sl_no=$row['content_child_sl_no'];
						$exe="SELECT * FROM `tbl_add_organic_product_child` where content_child_sl_no='$content_child_sl_no'";
						$exe_result=mysqli_query($con,$exe);
						$rowresult = mysqli_fetch_array($exe_result);
					?>
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header d-flex align-items-center">
                          <h4 class="modal-title" id="myModalLabel">Edit Product Image</h4>
                          <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
						<form class="form-horizontal form-material" action="" method="post" enctype="multipart/form-data">
                        <div class="modal-body">                         
                            <div class="form-group row">
							  <div class="col-md-6 mb-3">
                                <label for="inputPassword4">Image</label>
								<div class="custom-file">
                                <input type="file" class="form-control" name="img_files" id="customFile">
								<img src="assets/images/gallery/<?php echo $row['content_child_img'];?>" class="form-control" style="height: 149px;width: 189px;">
                              </div>
                              </div>                             
							  <input type="hidden" value="<?php echo $rowresult['content_child_sl_no'];?>" name="content_child_sl_no" >
                              <input type="hidden" class="form-control" name="content_child_img" value="<?php echo $rowresult['content_child_img'];?>" required>
                            </div>                         
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="category_update">Update</button>
                          <button type="button" class="btn btn-default waves-effect" data-bs-dismiss="modal">Cancel</button>
                        </div>
						</form>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
				  <div class="modal fade" id="del<?php echo $row['content_child_sl_no'];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
					  <div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Delete Product Image</h5>
						<button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
					  </div>
					<?php 
						$content_child_sl_no=$row['content_child_sl_no'];
						$execution="SELECT * FROM  tbl_add_organic_product_child where content_child_sl_no='$content_child_sl_no' ";
						$exe_results=mysqli_query($con,$execution);
						$rowresults = mysqli_fetch_array($exe_results);
						?>
					  <form method="post">
					  <input type="hidden" value="<?php echo $rowresult['content_child_img'];?>" name="content_child_img" >
					  <div class="modal-body">
						<div class="alert alert-danger"><span class="icon-warning"></span> Are you sure you want to delete this Record?</div>
						<input type="hidden" name="cid" value="<?php echo $rowresults['content_child_sl_no'];?>">
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
                          <th>Image</th>
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
                          <h4 class="modal-title" id="myModalLabel">Add New Sub Category</h4>
                          <button type="button" class="close ms-auto" data-bs-dismiss="modal" aria-hidden="true">×</button>
                        </div>
						<form class="form-horizontal form-material" action="" method="post">
                        <div class="modal-body">                         
                            <div class="form-group">
                              <div class="col-md-12 mb-3">
                                <select class="form-control" name="subcategory_ref_id" required>
								  <option value="">Select Category</option>
								  <?php
								  $sql_cal="SELECT * FROM `tbl_add_organic_category`";
								  $qry_cal=mysqli_query($con,$sql_cal);
								  while($fet_cal=mysqli_fetch_array($qry_cal))
								  {
								?>
								<option value="<?php echo $fet_cal['category_sl_no']; ?>"><?php echo $fet_cal['category_name']; ?></option>
								  <?php } ?>
								</select>
                              </div>
							  <div class="col-md-12 mb-3">
                                <input type="text" class="form-control" name="subcategory_name" required placeholder="Category name"/>
                              </div>
                            </div>                         
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-info" name="category_submit">Save</button>
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
	<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  </body>
</html>
<script>
CKEDITOR.replaceClass = 'editor';

    // CKEDITOR.replace( 'product_desc' );
</script>
<script type="text/javascript">
$(document).ready(function() {
	 $("#product_discount_percent").keyup(function(){
       var percentage = $(this).val(),
        price = $('#product_original_price').val(),
        calcPrice = price - ( (price/100) * percentage ),
        discountPrice = (Math.round(calcPrice));
    $('#product_final_price').val(discountPrice);  
	 });
	 $("#product_original_price").keyup(function(){
       var price = $(this).val(),
        percentage  = $('#product_discount_percent').val(),
        calcPrice = price - ( (price/100) * percentage ),
        discountPrice = (Math.round(calcPrice));
    $('#product_final_price').val(discountPrice);  
	 });
});
function getdiscount(arg)
{  
    var priceCount=arg.getAttribute('data-id'); //alert(priceCount);
	var percentage = $("#product_discount_percent"+priceCount).val(),
        price = $('#product_original_price'+priceCount).val(),
        calcPrice = price - ( (price/100) * percentage ),
        discountPrice = (Math.round(calcPrice)); //alert(percentage);alert(price);alert(calcPrice);
    $('#product_final_price'+priceCount).val(discountPrice); 
 //}
}
</script>

<?php 
		
	 
 
if ($_POST["delete"])
{

		$cid=$_POST['cid'];
		$content_child_img=$_POST['content_child_img'];
	    unlink("../assets/images/gallery/".$content_child_img);
		unlink("../assets/images/gallery/thumb/".$content_child_img);
		$sql=" DELETE FROM  tbl_add_organic_product_child  WHERE content_child_sl_no ='$cid'";
		$res=mysqli_query($con,$sql);
		if($res){
			echo '<script type="text/javascript">alert("Deleted sucessfully");window.location.href = "view_content_tripimg.php?id='.$ids.'";</script>';

		}
}
		?>
<?php
if(isset($_POST['category_update'])) { 
$content_child_sl_no =$_POST['content_child_sl_no'];
$content_child_created_date= date('Y-m-d'); 
$content_child_img=$_POST['content_child_img'];
$file_name = $_FILES["img_files"]["name"];
	  if( isset($file_name) && $file_name != "") {
		  require_once('./php-image-magician/php_image_magician.php');
		  $msg = "";
		  $valid_image_check = array("image/gif", "image/jpeg", "image/jpg", "image/png", "image/bmp");
		  $folderName = "assets/images/gallery//";
		  if ($_FILES["img_files"]["name"] <> "") {

        $image_mime = strtolower(image_type_to_mime_type(exif_imagetype($_FILES["img_files"]["tmp_name"])));
		//size set
		$image_info = getimagesize($_FILES["img_files"]["tmp_name"]);
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

          if (!move_uploaded_file($_FILES["img_files"]["tmp_name"], $filepath)) {
            $emsg .= "Failed to upload <strong>" . $_FILES["img_files"]["name"] . "</strong>. <br>";
			 echo '<script type="text/javascript">alert("Failed to upload <strong>' . $_FILES["img_files"]["name"] . '</strong>.");window.location.href = "view_content_tripimg.php?id='.$ids.'";</script>';
            $counter++;
          } else {
            //$smsg .= "<strong>" . $_FILES["img_files"]["name"] . "</strong> uploaded successfully. <br>";

            $magicianObj = new imageLib($filepath);
            $magicianObj->resizeImage(267, 344);
            $magicianObj->saveImage($folderName . 'thumb/' . $filename, 9);

            /*             * ****** insert into database starts ******** */
            unlink("../assets/images/gallery/".$content_child_img);
			unlink("../assets/images/gallery/thumb/".$content_child_img);
        echo $sql ='UPDATE  tbl_add_organic_product_child SET content_child_img="'.$filename.'" WHERE content_child_sl_no="'.$content_child_sl_no.'"';
			$result = mysqli_query($con,$sql);
              if ($result) {
                // file uplaoded successfully.
				echo '<script type="text/javascript">alert("uploaded successfully.");window.location.href = "view_content_tripimg.php?id='.$ids.'";</script>';
              } else {
                // failed to insert into database.
				echo '<script type="text/javascript">alert("Failed to upload ' . $filename . '");window.location.href = "view_content_tripimg.php?id='.$ids.'";</script>';
              }
            
            /*             * ****** insert into database ends ******** */
          }
        } else {
		   echo '<script type="text/javascript">alert("<strong>' . $_FILES["img_files"]["name"] . '</strong>not a valid image.");window.location.href = "view_content_tripimg.php";</script>';
        }}else{
		   echo '<script type="text/javascript">alert("'.$_FILES["img_files"]["name"].' image not upload because width 267 X 344 px height above image only upload ");window.location.href = "view_content_tripimg.php?id='.$ids.'";
               </script>';  exit();
	   }
      }
		     
	}
}
?>