<?php include("header.php"); ?>

 <div class="btc_tittle_main_wrapper">
        <div class="btc_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="btc_tittle_left_heading">
                        <h1>Achievers</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 full_width">
                    <div class="btc_tittle_right_heading">
                        <div class="btc_tittle_right_cont_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
		<!-- Begin page name -->
		
		<!-- End page name -->

		<div class="btc_shop_indx_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                    <div class="btc_left_shop_sidebar_main_wrapper">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                               </div>
							   </div>
							   </div>
                             </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">
                         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="tab-content btc_shop_index_content_tabs_main">
                                <div id="grid" class="tab-pane fade in active">
                                    <div class="row">
									  <?php 
						$i=1;
						$sql="select * from  tbl_add_bitcoin_tourism "; 
						$qry=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($qry))
						{
						?>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="btc_shop_indx_cont_box_wrapper">
                                                <div class="btc_shop_indx_img_wrapper">
                                                    <img src="admin/assets/images/gallery/<?php echo $row['images'];?>" alt="shop_img" class="img-responsive" />
                                                </div>

                                            </div>
                                        </div>
                                 <?php $i++; } ?>
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                                            <div class="pager_wrapper">
                                                <ul class="pagination">
                                                    <li><a href="#"><i class="flaticon-left-arrow"></i></a></li>
                                                    <li class="btc_shop_pagi"><a href="#">01</a></li>
                                                    <li class="btc_shop_pagi"><a href="#">02</a></li>
                                                    <li class="btc_third_pegi btc_shop_pagi"><a href="#">03</a></li>
                                                    <li class="hidden-xs btc_shop_pagi"><a href="#">04</a></li>
                                                    <li><a href="#"><i class="flaticon-right-arrow"></i></a></li>
                                                </ul>
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

	<?php include("footer.php"); ?>