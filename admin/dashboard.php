
<?php include("header.php"); 
include('db_config.php');
?>

<link href="assets/extra-libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet"/>
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <div class="row page-titles">
          <div class="col-md-5 col-12 align-self-center">
            <h3 class="text-themecolor mb-0">Dashboard 2</h3>
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
              <li class="breadcrumb-item">
                <a href="javascript:void(0)">Home</a>
              </li>
              <li class="breadcrumb-item active">Dashboard 2</li>
            </ol>
          </div>
           <div class="col-md-7 col-12 align-self-center d-none d-md-block">
            <!-- <div class="d-flex mt-2 justify-content-end"> 
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
            </div> -->
          </div>
        </div>

        <nav class="navbar-default navbar navbar-expand-lg">
        <div class="ms-auto d-flex">
        <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
        <section class="container-fluid p-4">
        <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">Bronze</span>
                                        </div>
                                        <div>
                                            <span class="fe fa-solid fa-medal fs-6 text-primary"></span>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_bronze_query = " SELECT * from tbl_add_bronze";
                        $dash_bronze_query_run = mysqli_query($con, $dash_bronze_query);
                        
                          if ($bronze_total =mysqli_num_rows( $dash_bronze_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$bronze_total.'</h4>';                          
                           }
                        ?>
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_bronze.php"class="fw-medium fs-4 text-secondary mt-3">Total Bronze</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">Silver</span>
                                        </div>
                                        <div>
                                            <span class="fe fa-solid fa-medal fs-6 text-secondary"></span>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_silver_query = " SELECT * from tbl_add_silver";
                        $dash_silver_query_run = mysqli_query($con, $dash_silver_query);
                        
                          if ($silver_total =mysqli_num_rows( $dash_silver_query_run));
                           {
                            echo '<h4 class="fs-6 fw-bold"> + '.$silver_total.'</h4>';                          
                           }
                        ?>
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_silver.php"class="fw-medium fs-4 text-secondary mt-3">Total Silver</a>

                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">GOLD</span>
                                        </div>
                                        <div>
                                            <span class="fe fa-solid fa-coins text-warning fs-6"></span>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_gold_query = " SELECT * from tbl_add_gold";
                        $dash_gold_query_run = mysqli_query($con, $dash_gold_query);
                        
                          if ($gold_total =mysqli_num_rows( $dash_gold_query_run));
                           {
                            echo '<h4 class="fs-6 fw-bold"> + '.$gold_total.'</h4>';                          
                           }
                        ?>
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_gold.php"class="fw-medium fs-4 text-secondary mt-3">Total Gold</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">Platinum</span>
                                        </div>
                                        <div>
                                            <span class="fe fa-solid fa-trophy fs-6 text-success"></span>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_platinum_query = " SELECT * from tbl_add_platinum";
                        $dash_platinum_query_run = mysqli_query($con, $dash_platinum_query);
                        
                          if ($platinum_total =mysqli_num_rows( $dash_platinum_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$platinum_total.'</h4>';                          
                           }
                        ?>
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_platinum.php"class="fw-medium fs-4 text-secondary mt-3">Total Platinum</a>

                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">daimond<br></span>
                                        </div>
                                        <div>
                                            <span class="fe fa-solid fa-diamond fs-6 text-info-emphasis"></span>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_daimond_query = " SELECT * from tbl_add_daimond";
                        $dash_daimond_query_run = mysqli_query($con, $dash_daimond_query);
                        
                          if ($daimond_total =mysqli_num_rows( $dash_daimond_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$daimond_total.'</h4>';                          
                           }
                        ?>
                        
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_daimond.php"class="fw-medium fs-4 text-secondary mt-3">Total Daimond</a>

                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">double daimond</span>
                                        </div>
                                        <div>
                                            <span class="fe fas fa-diamond fs-6 text-success"></span>
                                        </div><i class="fas fa-diamond"></i>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_double_daimond_query = " SELECT * from tbl_add_double_daimond";
                        $dash_double_daimond_query_run = mysqli_query($con, $dash_double_daimond_query);
                        
                          if ($double_daimond_total =mysqli_num_rows( $dash_double_daimond_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$double_daimond_total.'</h4>';                          
                           }
                        ?>
                        
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_double_daimond.php"class="fw-medium fs-4 text-secondary mt-3">Total double Daimond</a>

                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">triple daimond</span>
                                        </div>
                                        <div>
                                            <span class="fe fas fa-diamond fs-6 text-success"></span>
                                        </div><i class="fas fa-diamond"></i><i class="fas fa-diamond text-success"></i>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_triple_daimond_query = " SELECT * from tbl_add_triple_daimond";
                        $dash_triple_daimond_query_run = mysqli_query($con, $dash_triple_daimond_query);
                        
                          if ($triple_daimond_total =mysqli_num_rows( $dash_triple_daimond_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$triple_daimond_total.'</h4>';                          
                           }
                        ?>
                        
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_daimond.php"class="fw-medium fs-4 text-secondary mt-3">Total Triple Daimond</a>

                                </div>
                            </div>  
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            <!-- Card -->
                            <div class="card mb-3">
                                <!-- Card body -->
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between mb-3 lh-1">
                                        <div> 
                                          <span class="fs-6 text-uppercase fw-semibold ls-md">kait king</span>
                                        </div>
                                        <div>
                                            <span class="fe fa-solid fa-chess-king fs-6 text-warning"></span>
                                        </div>
                                    </div>
                                    <h2 class="fw-bold mb-1">
                                    <?php
                        $dash_king_query = " SELECT * from tbl_add_kait_king";
                        $dash_king_query_run = mysqli_query($con, $dash_king_query);
                        
                          if ($kait_king_total =mysqli_num_rows( $dash_king_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$kait_king_total.'</h4>';                          
                           }
                        ?>
                        
                                    </h2>
                                    <!-- <span class="text-success fw-semibold">
                                        <i class="fe fe-trending-up me-1"></i>
                                        +20.9$
                                    </span> -->
                                    <!-- <span class="ms-1 fw-medium">Total Bronze</span> -->
                                    <a href="view_kait_king.php"class="fw-medium fs-4 text-secondary mt-3">Total Kait King</a>

                                </div>
                        
                </div>
              </div>
        </div>
 <form method="POST" action="">
                             <div class="card">
                                                                <!-- card header -->
                                <!-- <div class="col-lg-3 col-md-6"> -->
                                <div class="card-header">
                                <div class="card-body">

                                    <h4 class="mb-3 text-warning"> CLUB</h4>
                                    
                                    <div class="btn-group dropup">
                                    <!-- <div class="dropdown"> -->
                                    <!-- <div class="dropdown"> -->
                                      
        <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> -->
        <button type="button" class="btn btn-secondary dropdown-toggle mp-3" data-bs-toggle="dropdown" aria-expanded="false">
ALL        </button> <div class="dropdown-menu" id="opt_level">
            <a class="dropdown-item" href="#"  data-value="bronze">bronze</a>
            <a class="dropdown-item" href="#" data-value="silver">silver</a>
            <a class="dropdown-item" href="#" data-value="gold">gold</a>
            <a class="dropdown-item" href="#" data-value="platinum">platinum</a>
            <a class="dropdown-item" href="#" data-value="diamond">diamond</a>
            <a class="dropdown-item" href="#" data-value="double_diamond">double diamond</a>
            <a class="dropdown-item" href="#" data-value="triple_diamond">triple diamond</a>
            <a class="dropdown-item" href="#" data-value="kait_king">Kait King</a>
        </div>
    </div>

    <div class="btn-group dropup">
    <div class="btn-group dropup">
        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            count
        </button>
        <ul class="dropdown-menu" id="dropdown2">
            <li><a class="dropdown-item demo" href="#" data-value="week_bronze">Bronze - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_bronze">Bronze - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_silver">Silver - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_silver">Silver - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_gold">Gold - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_gold">Gold - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_platinum">Platinum - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_platinum">Platinum - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_diamond">Diamond - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_diamond">Diamond - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_double_diamond">Double Diamond - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_double_diamond">Double Diamond - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_triple_diamond">Triple Diamond - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_triple_diamond">Triple Diamond - Month</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="week_kait_king">Kait King - Week</a></li>
            <li><a class="dropdown-item demo" href="#" data-value="month_kait_king">Kait King - Month</a></li>
        </ul>
    </div>


                                    </div>
       
    <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <!-- col -->
                                        <div class="col-6">
                                            <span class="fw-semibold text-black">CLUBS</span>
                                            <div id="opt_lesson_list"></div>

                                            <h1 class="fw-bold mt-2 mb-0 h2">   
                        </h1>
                                        </div>
                                        <!-- <div class="row">
                                     <div class="row"> -->
                                        <!-- col -->
                                        <div class="col-6">
                                            <span class="fw-semibold text-black">Week&Month</span>
                                            <div id="opt_lesson"></div>

                                            <h1 class="fw-bold mt-2 mb-0 h2">   
                        </h1>
                                        </div>
                                    </div>
                                    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".dropdown-item").on('click', function(e) {
                e.preventDefault();
                var level = $(this).data('value');
                if (level) {
                    $.ajax({
                        type: 'POST',
                        url: 'example-domain.php',
                        data: { opt_level: level },
                        success: function(response) {
                            $('#opt_lesson_list').html(response);
                            console.log(response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error("Error in AJAX request: ", textStatus, errorThrown);
                        }
                    });
                }
            });
        });
    </script>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
        $(document).ready(function() {
            $(".demo").on('click', function(e) {
                e.preventDefault();
                var level1 = $(this).data('value');
                if (level1) {
                    $.ajax({
                        type: 'POST',
                        url: 'example.php',
                        data: { opt_level1: level1 },
                        success: function(response) {
                            $('#opt_lesson').html(response);
                            console.log(response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error("Error in AJAX request: ", textStatus, errorThrown);
                        }
                    });
                }
            });
        });
    </script>
                                <!-- card body -->
                             
                                            <p class="text-success fw-semibold mb-0">
                                                <i class="fe fe-trending-up me-1"></i>
                                             
                                            </p>
                                        <!-- </div> -->
                                        <!-- col -->
                                       
                                    <!-- chart -->
                                    
                                       <!-- <div class="col-4">
                                            <span class="fw-semibold text-black">This Week</span>
                                            <div id="opt_lesson"></div>
                                            <p class="text-danger fw-semibold mb-0">
                                                <i class="fe fe-trending-down me-1"></i>
                                              
                                            </p>
                                        </div> -->
                                        <!-- <div class="col-4">
                                             <span class="fw-semibold text-black">Montht</span> 
                                            <h1 class="fw-bold mt-2 mb-0 h2">1.34K</h1> 
                                            <div id="opt_lesson"></div>
                                            <p class="text-success fw-semibold mb-0">
                                                <i class="fe fe-trending-up me-1"></i>
                                            </p>
                                        </div> -->
                                     </div>

                        </div>
        </div>
                    </div>
                          </div>
        </div>


          <!-- <div class="row"> 
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-center">
                    <div class="me-3 align-self-center">
                      <h1 class="text-black"><i class="fas fa-hand-holding-usd"></i></h1>
                    </div>
                    <div>
                      <h3 class="card-title text-black fw-semibold ls-md">Upcoming Events</h3>
                      <h2 class="card-subtitle text-black fw-semibold ls-md op-5">
                      <?php
                        $dash_upcoming_events_query = " SELECT * from tbl_add_upcoming_event";
                        $dash_upcoming_events_query_run = mysqli_query($con, $dash_upcoming_events_query);
                        
                          if ($upcoming_events_total =mysqli_num_rows( $dash_upcoming_events_query_run));
                           {
                            echo '<fst-italic fw-bold mb-0 "> + '.$upcoming_events_total.'</h3>';                          
                           }
                        ?>
                      </h2>
                    </div>
                  </div> -->
                  <!-- <div class="row mt-1"> -->
                    <!-- <div class="col-4 col-xl-7 align-self-center"> -->
                      <!-- <h2 class="fw-light text-black text-nowrap"></h2> -->
                    </div>
                   
                    </div>
                  </div>
        <!-- ============================================================= --> 
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        </div>
        <div class="container-fluid">
          <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
              <div class="">
                <div class="card-body">
                  <div class="d-flex flex-row">
                    <div
                      class="
                      "
                    >

                    </div>
                  </div>  
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6">
              <div class="card">
                <!-- <div class="card-body"> -->
                  <div class="d-flex flex-row">
                </div>
              </div>
                          </div>
                               
          
          <!-- Row -->
         
           
             
              

              <div class="card bg-success">
                <!-- <div class="card-body">
                  <div class="d-flex">
                    <div class="me-3 align-self-center">
                      <h1 class="text-white">
                        <i class="icon-cloud-download"></i>
                      </h1>
                    </div>
                    <div>
                      <h3 class="card-title text-white">Download count</h3>
                      <h6 class="card-subtitle text-white op-5">March 2020</h6>
                    </div>
                  </div>
                  <div class="row mt-1">
                    <div class="col-4 col-xl-7 align-self-center">
                      <h2 class="fw-light text-white text-nowrap text-truncate">
                        35487
                      </h2>
                    </div>
                    <div class="col-8 col-xl-5 pt-2 pb-3 text-end">
                      <div id="download-count"></div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4 d-flex align-items-stretch">
              <!-- <div class="card w-100">
                <div class="card-body">
                  <h3 class="card-title">Our Visitors</h3>
                  <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                  <div id="visitor" class="mt-5"></div>
                </div>
                <div class="p-3 text-center border-top">
                  <ul class="list-inline mb-0">
                    <li class="list-inline-item px-2">
                      <h6 class="text-info mb-0">
                        <i class="fa fa-circle font-10 me-2"></i>Mobile
                      </h6>
                    </li>
                    <li class="list-inline-item px-2">
                      <h6 class="text-primary mb-0">
                        <i class="fa fa-circle font-10 me-2"></i>Desktop
                      </h6>
                    </li>
                    <li class="list-inline-item px-2">
                      <h6 class="text-success mb-0">
                        <i class="fa fa-circle font-10 me-2"></i>Tablet
                      </h6>
                    </li>
                  </ul>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <h4 class="card-title">Current Visitors</h4>
                  <h6 class="card-subtitle">Different Devices Used to Visit</h6>
                  <div id="usa" style="height: 290px"></div>
                  <div class="text-center">
                    <ul class="list-inline mb-1">
                      <li class="list-inline-item px-2">
                        <h6 class="text-success mb-0">
                          <i class="fa fa-circle font-10 me-2"></i>Valley
                        </h6>
                      </li>
                      <li class="list-inline-item px-2">
                        <h6 class="text-info mb-0">
                          <i class="fa fa-circle font-10 me-2"></i>Newyork
                        </h6>
                      </li>
                      <li class="list-inline-item px-2">
                        <h6 class="text-danger mb-0">
                          <i class="fa fa-circle font-10 me-2"></i>Kansas
                        </h6>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Row -->
          <!-- Row -->
          <!-- <div class="row"> -->
            <!-- Column -->
            <!-- <div class="col-lg-4 d-flex align-items-stretch">
              <div class="card blog-widget w-100">
                <div class="card-body">
                  <div class="blog-image">
                    <img
                      src="assets/images/background/img5.jpg"
                      alt="img"
                      class="img-fluid blog-img-height w-100"
                    />
                  </div>
                  <h3>Business development new rules for 2021</h3>
                  <label
                    class="
                      badge badge-pill
                      bg-light-success
                      text-success
                      font-weight-medium
                      py-1
                      px-2
                    "
                    >Technology</label
                  >
                  <p class="my-3">
                    Lorem ipsum dolor sit amet, this is a consectetur
                    adipisicing elit, sed do eiusmod tempor incididunt ut
                  </p>
                  <div class="d-flex align-items-center">
                    <div class="read">
                      <a
                        href="javascript:void(0)"
                        class="link font-weight-medium"
                        >Read More</a
                      >
                    </div>
                    <div class="ms-auto">
                      <a
                        href="javascript:void(0)"
                        class="link me-2"
                        data-bs-toggle="tooltip"
                        title="Like"
                        ><i class="mdi mdi-heart-outline"></i
                      ></a>
                      <a
                        href="javascript:void(0)"
                        class="link"
                        data-bs-toggle="tooltip"
                        title="Share"
                        ><i class="mdi mdi-share-variant"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex flex-wrap">
                    <div>
                      <h3 class="card-title">Newsletter Campaign</h3>
                      <h6 class="card-subtitle">
                        Overview of Newsletter Campaign
                      </h6>
                    </div>
                    <div class="ms-auto align-self-center">
                      <ul class="list-inline mb-0">
                        <li class="list-inline-item px-2">
                          <h6 class="text-success">
                            <i class="fa fa-circle font-10 me-2"></i>Open Rate
                          </h6>
                        </li>
                        <li class="list-inline-item px-2">
                          <h6 class="text-info">
                            <i class="fa fa-circle font-10 me-2"></i>Recurring
                            Payments
                          </h6>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div id="newsletter-campaign"></div>
                  <div class="row text-center">
                    <div class="col-lg-4 col-md-4 mt-3">
                      <h1 class="mb-0 fw-light">5098</h1>
                      <small>Total Sent</small>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-3">
                      <h1 class="mb-0 fw-light">4156</h1>
                      <small>Mail Open Rate</small>
                    </div>
                    <div class="col-lg-4 col-md-4 mt-3">
                      <h1 class="mb-0 fw-light">1369</h1>
                      <small>Click Rate</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Row -->
          <!-- Row -->
          <!-- <div class="row">
            <div class="col-lg-8 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-md-flex no-block">
                    <h4 class="card-title">Projects of the Month</h4>
                    <div class="ms-auto">
                      <select class="form-select">
                        <option selected="">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                      </select>
                    </div>
                  </div>
                  <div class="month-table">
                    <div class="table-responsive mt-3">
                      <table class="table stylish-table v-middle mb-0 no-wrap">
                        <thead>
                          <tr>
                            <th
                              class="border-0 text-muted fw-normal"
                              colspan="2"
                            >
                              Assigned
                            </th>
                            <th class="border-0 text-muted fw-normal">Name</th>
                            <th class="border-0 text-muted fw-normal">
                              Priority
                            </th>
                            <th class="border-0 text-muted fw-normal">
                              Budget
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="width: 50px">
                              <span
                                class="
                                  round
                                  text-white
                                  d-inline-block
                                  text-center
                                  rounded-circle
                                  bg-info
                                "
                                >S</span
                              >
                            </td>
                            <td>
                              <h6 class="font-weight-medium mb-0">
                                Sunil Joshi
                              </h6>
                              <small class="text-muted">Web Designer</small>
                            </td>
                            <td>Elite Admin</td>
                            <td>
                              <span class="badge bg-success px-2 py-1"
                                >Low</span
                              >
                            </td>
                            <td>$3.9K</td>
                          </tr>
                          <tr class="active">
                            <td>
                              <span
                                class="
                                  round
                                  d-inline-block
                                  rounded-circle
                                "
                                ><img
                                  src="assets/images/users/2.jpg"
                                  alt="user"
                                  class="rounded-circle"
                                  width="50"
                              /></span>
                            </td>
                            <td>
                              <h6 class="font-weight-medium mb-0">Andrew</h6>
                              <small class="text-muted">Project Manager</small>
                            </td>
                            <td>Real Homes</td>
                            <td>
                              <span class="badge bg-info px-2 py-1"
                                >Medium</span
                              >
                            </td>
                            <td>$23.9K</td>
                          </tr>
                          <tr>
                            <td>
                              <span
                                class="
                                  round
                                  text-white
                                  d-inline-block
                                  text-center
                                  rounded-circle
                                  bg-success
                                "
                                >B</span
                              >
                            </td>
                            <td>
                              <h6 class="font-weight-medium mb-0">
                                Bhavesh patel
                              </h6>
                              <small class="text-muted">Developer</small>
                            </td>
                            <td>MedicalPro Theme</td>
                            <td>
                              <span class="badge bg-primary px-2 py-1"
                                >High</span
                              >
                            </td>
                            <td>$12.9K</td>
                          </tr>
                          <tr>
                            <td>
                              <span
                                class="
                                  round
                                  text-white
                                  d-inline-block
                                  text-center
                                  rounded-circle
                                  bg-primary
                                "
                                >N</span
                              >
                            </td>
                            <td>
                              <h6 class="font-weight-medium mb-0">
                                Nirav Joshi
                              </h6>
                              <small class="text-muted">Frontend Eng</small>
                            </td>
                            <td>Elite Admin</td>
                            <td>
                              <span class="badge bg-danger px-2 py-1">Low</span>
                            </td>
                            <td>$10.9K</td>
                          </tr>
                          <tr>
                            <td>
                              <span
                                class="
                                  round
                                  text-white
                                  d-inline-block
                                  text-center
                                  rounded-circle
                                  bg-warning
                                "
                                >M</span
                              >
                            </td>
                            <td>
                              <h6 class="font-weight-medium mb-0">
                                Micheal Doe
                              </h6>
                              <small class="text-muted">Content Writer</small>
                            </td>
                            <td>Helping Hands</td>
                            <td>
                              <span class="badge bg-warning px-2 py-1"
                                >High</span
                              >
                            </td>
                            <td>$12.9K</td>
                          </tr>
                          <tr>
                            <td>
                              <span
                                class="
                                  round
                                  text-white
                                  d-inline-block
                                  text-center
                                  rounded-circle
                                  bg-danger
                                "
                                >N</span
                              >
                            </td>
                            <td>
                              <h6 class="font-weight-medium mb-0">Johnathan</h6>
                              <small class="text-muted">Graphic</small>
                            </td>
                            <td>Digital Agency</td>
                            <td>
                              <span class="badge bg-info px-2 py-1">High</span>
                            </td>
                            <td>$2.6K</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-4 d-flex align-items-stretch"> -->
              <!-- Column -->
              <!-- <div class="card w-100">
                <img
                  class="card-img-top w-100 profile-bg-height"
                  src="assets/images/background/profile-bg.jpg"
                  alt="Card image cap"
                />
                <div class="card-body little-profile text-center">
                  <div class="pro-img">
                    <img
                      src="assets/images/users/4.jpg"
                      alt="user"
                      class="rounded-circle shadow-sm"
                      width="128"
                    />
                  </div>
                  <h3 class="mb-0">Angela Dominic</h3>
                  <p>Web Designer &amp; Developer</p>
                  <p>
                    <small
                      >Lorem ipsum dolor sit amet, this is a consectetur
                      adipisicing elit orem ipsum dolor sit amet, this is a
                      consectetur adipisicing</small
                    >
                  </p>
                  <a
                    href="javascript:void(0)"
                    class="
                      mt-1
                      waves-effect waves-dark
                      btn btn-primary btn-md btn-rounded
                    "
                    >Follow</a
                  >
                  <div class="row text-center mt-3 justify-content-center">
                    <div class="col-6 col-md-4 mt-3">
                      <h3 class="mb-0 fw-light">1099</h3>
                      <small class="text-muted">Articles</small>
                    </div>
                    <div class="col-6 col-md-4 mt-3">
                      <h3 class="mb-0 fw-light">23,469</h3>
                      <small class="text-muted">Followers</small>
                    </div>
                    <div class="col-6 col-md-4 mt-3">
                      <h3 class="mb-0 fw-light">6035</h3>
                      <small class="text-muted">Following</small>
                    </div>
                  </div>
                </div>
              </div> -->
              <!-- Column -->
            </div>
          </div>
          <!-- Row -->
          <!-- Row -->
          <!-- <div class="row">
            <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body pb-0">
                  <h4 class="card-title">Recent Comments</h4>
                  <h6 class="card-subtitle mb-3 pb-1">
                    Latest Comments on users from Material
                  </h6>
                </div> -->
                <!-- ============================================================== -->
                <!-- Comment widgets -->
                <!-- ============================================================== -->
                <!-- <div
                  class="comment-widgets scrollable mb-2 common-widget"
                  style="height: 450px"
                > -->
                  <!-- Comment Row -->
                  <!-- <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2">
                      <span
                        class="
                          round
                          d-inline-block
                          text-center
                        "
                        ><img
                          src="assets/images/users/1.jpg"
                          class="rounded-circle"
                          alt="user"
                          width="50"
                      /></span>
                    </div>
                    <div class="comment-text w-100 p-3">
                      <h5 class="text-nowrap font-weight-medium">
                        James Anderson
                      </h5>
                      <p class="mb-1 fs-3 fw-normal text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div
                        class="comment-footer d-md-flex align-items-center mt-2"
                      >
                        <span
                          class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            py-1
                          "
                          >Pending</span
                        >
                        <span class="action-icons">
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-pencil-alt"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-check"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-heart"></i
                          ></a>
                        </span>
                        <div class="ms-auto">
                          <span class="text-muted fs-2">April 14, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- Comment Row -->
                  <!-- <div class="d-flex flex-row comment-row active p-3">
                    <div class="p-2">
                      <span
                        class="
                          round
                          d-inline-block
                        "
                        ><img
                          src="assets/images/users/2.jpg"
                          class="rounded-circle"
                          alt="user"
                          width="50"
                      /></span>
                    </div>
                    <div class="comment-text active w-100 p-3">
                      <h5 class="text-nowrap font-weight-medium">
                        Michael Jorden
                      </h5>
                      <p class="mb-1 fs-3 text-muted fw-normal">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div
                        class="comment-footer d-md-flex align-items-center mt-2"
                      >
                        <span
                          class="
                            badge
                            bg-light-success
                            text-success
                            font-weight-medium
                            py-1
                          "
                          >Approved</span
                        >
                        <span class="action-icons">
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-pencil-alt"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-check"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-heart"></i
                          ></a>
                        </span>
                        <div class="ms-auto">
                          <span class="text-muted fs-2">April 14, 2021</span>
                        </div>
                      </div> -->
                    <!-- </div>
                  </div> -->
                  <!-- Comment Row -->
                  <!-- <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2">
                      <span
                        class="
                          round
                          d-inline-block
                        "
                        ><img
                          src="assets/images/users/3.jpg"
                          class="rounded-circle"
                          alt="user"
                          width="50"
                      /></span>
                    </div>
                    <div class="comment-text w-100 p-3">
                      <h5 class="text-nowrap font-weight-medium">
                        Johnathan Doeting
                      </h5>
                      <p class="mb-1 fs-3 fw-normal text-muted">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div
                        class="comment-footer d-md-flex align-items-center mt-2"
                      >
                        <span
                          class="
                            badge
                            bg-light-danger
                            text-danger
                            font-weight-medium
                            py-1
                          "
                          >Rejected</span
                        >
                        <span class="action-icons">
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-pencil-alt"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-check"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-heart"></i
                          ></a>
                        </span>
                        <div class="ms-auto">
                          <span class="text-muted fs-2">April 14, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  <!-- Comment Row -->
                  <!-- <div class="d-flex flex-row comment-row p-3">
                    <div class="p-2">
                      <span
                        class="
                          round
                          d-inline-block
                        "
                        ><img
                          src="assets/images/users/4.jpg"
                          class="rounded-circle"
                          alt="user"
                          width="50"
                      /></span>
                    </div>
                    <div class="comment-text w-100 p-3">
                      <h5 class="text-nowrap font-weight-medium">
                        James Anderson
                      </h5>
                      <p class="mb-1 fs-3 text-muted fw-normal">
                        Lorem Ipsum is simply dummy text of the printing and
                        type setting industry.
                      </p>
                      <div
                        class="comment-footer d-md-flex align-items-center mt-2"
                      >
                        <span
                          class="
                            badge
                            bg-light-info
                            text-info
                            font-weight-medium
                            py-1
                          "
                          >Pending</span
                        >
                        <span class="action-icons">
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-pencil-alt"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-check"></i
                          ></a>
                          <a href="javascript:void(0)" class="ps-3"
                            ><i class="ti-heart"></i
                          ></a>
                        </span>
                        <div class="ms-auto">
                          <span class="text-muted fs-2">April 14, 2021</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-lg-6 d-flex align-items-stretch">
              <div class="card w-100">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <div>
                      <h4 class="card-title">To Do list</h4>
                      <h6 class="card-subtitle mb-0">
                        List of your next task to complete
                      </h6>
                    </div>
                    <button
                      class="ms-auto btn btn-sm btn-rounded btn-success"
                      data-bs-toggle="modal"
                      data-bs-target="#myModal"
                    >
                      Add Task
                    </button>
                  </div> -->

                  <!-- -------------------------------------------------------------- -->
                  <!-- To do list widgets -->
                  <!-- -------------------------------------------------------------- -->
                  <!-- <div
                    class="to-do-widget mt-3 common-widget scrollable"
                    style="height: 443px"
                  > -->
                    <!-- .modal for add task -->
                    <!-- <div
                      class="modal fade"
                      id="myModal"
                      tabindex="-1"
                      role="dialog"
                      aria-hidden="true"
                    >
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header d-flex">
                            <h4 class="modal-title">Add Task</h4>
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="modal"
                              aria-label="Close"
                            ></button>
                          </div>
                          <div class="modal-body">
                            <form>
                              <div class="mb-3">
                                <label>Task name</label>
                                <input
                                  type="text"
                                  class="form-control"
                                  placeholder="Enter Task Name"
                                />
                              </div>
                              <div class="mb-3">
                                <label>Assign to</label>
                                <select class="form-select">
                                  <option selected="">Sachin</option>
                                  <option value="1">Sehwag</option>
                                </select>
                              </div>
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button
                              type="button"
                              class="btn btn-secondary"
                              data-bs-dismiss="modal"
                            >
                              Close
                            </button>
                            <button
                              type="button"
                              class="btn btn-success"
                              data-bs-dismiss="modal"
                            >
                              Submit
                            </button>
                          </div>
                        </div> -->
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <!-- <ul
                      class="list-task todo-list list-group mb-0"
                      data-role="tasklist"
                    >
                      <li
                        class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                        data-role="task"
                      >
                        <div class="form-check form-check-inline w-100">
                          <input
                            type="checkbox"
                            class="form-check-input danger check-light-danger"
                            id="inputSchedule"
                            name="inputCheckboxesSchedule"
                          />
                          <label
                            for="inputSchedule"
                            class="form-check-label font-weight-medium"
                          >
                            <span>Schedule meeting with</span
                            ><span class="badge bg-danger badge-pill ms-1"
                              >Today</span
                            >
                          </label>
                        </div>
                        <ul
                          class="assignedto list-style-none m-0 ps-4 ms-1 mt-1"
                        >
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/1.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Steave"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/2.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Jessica"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/3.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Priyanka"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/4.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Selina"
                              class="rounded-circle"
                            />
                          </li>
                        </ul>
                      </li>
                      <li
                        class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                        data-role="task"
                      >
                        <div class="form-check form-check-inline w-100">
                          <input
                            type="checkbox"
                            id="inputCall"
                            class="form-check-input info check-light-info"
                            name="inputCheckboxesCall"
                          />
                          <label
                            for="inputCall"
                            class="form-check-label font-weight-medium"
                          >
                            <span>Give Purchase report to</span>
                            <span class="badge bg-info badge-pill ms-1"
                              >Yesterday</span
                            >
                          </label>
                        </div>
                        <ul class="assignedto m-0 ps-4 ms-1 mt-1">
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/3.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Priyanka"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/4.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Selina"
                              class="rounded-circle"
                            />
                          </li>
                        </ul>
                      </li>
                      <li
                        class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                        data-role="task"
                      >
                        <div class="form-check form-check-inline w-100">
                          <input
                            type="checkbox"
                            id="inputBook"
                            class="form-check-input primary check-light-primary"
                            name="inputCheckboxesBook"
                          />
                          <label
                            for="inputBook"
                            class="form-check-label font-weight-medium"
                          >
                            <span>Book flight for holiday</span
                            ><span class="badge bg-primary badge-pill ms-1"
                              >1 week</span
                            >
                          </label>
                        </div>
                        <div class="fs-2 ps-3 d-inline-block ms-2">
                          26 jun 2021
                        </div>
                      </li> -->
                      <!-- <li
                        class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                        data-role="task"
                      >
                        <div class="form-check form-check-inline w-100">
                          <input
                            type="checkbox"
                            id="inputForward"
                            class="form-check-input warning check-light-warning"
                            name="inputCheckboxesForward"
                          />
                          <label
                            for="inputForward"
                            class="form-check-label font-weight-medium"
                          >
                            <span>Forward all tasks</span>
                            <span class="badge bg-warning badge-pill ms-1"
                              >2 weeks</span
                            >
                          </label>
                        </div>
                        <div class="fs-2 ps-3 d-inline-block ms-2">
                          26 jun 2021
                        </div>
                      </li>
                      <li
                        class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                        data-role="task"
                      >
                        <div class="form-check form-check-inline w-100">
                          <input
                            type="checkbox"
                            id="inputRecieve"
                            class="form-check-input success check-light-success"
                            name="inputCheckboxesRecieve"
                          />
                          <label
                            for="inputRecieve"
                            class="form-check-label font-weight-medium"
                          >
                            <span>Recieve shipment</span
                            ><span class="badge bg-success badge-pill ms-1"
                              >2 weeks</span
                            >
                          </label>
                        </div>
                        <ul
                          class="assignedto list-style-none m-0 ps-4 ms-1 mt-1"
                        >
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/1.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Steave"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/2.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Jessica"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/3.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Priyanka"
                              class="rounded-circle"
                            />
                          </li> -->
                        <!-- </ul>
                      </li>
                      <li
                        class="list-group-item border-0 mb-0 py-3 pe-3 ps-0"
                        data-role="task"
                      >
                        <div class="form-check form-check-inline w-100">
                          <input
                            type="checkbox"
                            class="form-check-input danger check-light-danger"
                            id="inputSchedule"
                            name="inputCheckboxesSchedule"
                          />
                          <label
                            for="inputSchedule"
                            class="form-check-label font-weight-medium"
                          >
                            <span>Schedule meeting with</span
                            ><span class="badge bg-danger badge-pill ms-1"
                              >Today</span
                            >
                          </label>
                        </div>
                        <ul
                          class="assignedto list-style-none m-0 ps-4 ms-1 mt-1"
                        >
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/1.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Steave"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/2.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Jessica"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/3.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Priyanka"
                              class="rounded-circle"
                            />
                          </li>
                          <li class="d-inline-block border-0 me-1">
                            <img
                              src="assets/images/users/4.jpg"
                              alt="user"
                              data-bs-toggle="tooltip"
                              data-bs-placement="top"
                              title=""
                              data-original-title="Selina"
                              class="rounded-circle"
                            />
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Row -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
          All Rights Reserved by adminpanel.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->
    <aside class="customizer">
      <a href="javascript:void(0)" class="service-panel-toggle"
        ><i class="fa fa-spin fa-cog"></i
      ></a>
      <div class="customizer-body">
        <ul class="nav customizer-tab" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              id="pills-home-tab"
              data-bs-toggle="pill"
              href="#pills-home"
              role="tab"
              aria-controls="pills-home"
              aria-selected="true"
              ><i class="mdi mdi-wrench fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-profile-tab"
              data-bs-toggle="pill"
              href="#chat"
              role="tab"
              aria-controls="chat"
              aria-selected="false"
              ><i class="mdi mdi-message-reply fs-6"></i
            ></a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              id="pills-contact-tab"
              data-bs-toggle="pill"
              href="#pills-contact"
              role="tab"
              aria-controls="pills-contact"
              aria-selected="false"
              ><i class="mdi mdi-star-circle fs-6"></i
            ></a>
          </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
          <!-- Tab 1 -->
          <div
            class="tab-pane fade show active"
            id="pills-home"
            role="tabpanel"
            aria-labelledby="pills-home-tab"
          >
            <div class="p-3 border-bottom">
              <!-- Sidebar -->
              <h5 class="font-weight-medium mb-2 mt-2">Layout Settings</h5>
              <div class="form-check mt-3">
                <input
                  type="checkbox"
                  name="theme-view"
                  class="form-check-input"
                  id="theme-view"
                />
                <label class="form-check-label" for="theme-view">
                  <span>Dark Theme</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  class="sidebartoggler form-check-input"
                  name="collapssidebar"
                  id="collapssidebar"
                />
                <label class="form-check-label" for="collapssidebar">
                  <span>Collapse Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="sidebar-position"
                  class="form-check-input"
                  id="sidebar-position"
                />
                <label class="form-check-label" for="sidebar-position">
                  <span>Fixed Sidebar</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="header-position"
                  class="form-check-input"
                  id="header-position"
                />
                <label class="form-check-label" for="header-position">
                  <span>Fixed Header</span>
                </label>
              </div>
              <div class="form-check mt-2">
                <input
                  type="checkbox"
                  name="boxed-layout"
                  class="form-check-input"
                  id="boxed-layout"
                />
                <label class="form-check-label" for="boxed-layout">
                  <span>Boxed Layout</span>
                </label>
              </div>
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Logo Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-logobg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Navbar BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Navbar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-navbarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Navbar BG -->
            </div>
            <div class="p-3 border-bottom">
              <!-- Logo BG -->
              <h5 class="font-weight-medium mb-2 mt-2">Sidebar Backgrounds</h5>
              <ul class="theme-color m-0 p-0">
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin1"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin2"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin3"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin4"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin5"
                  ></a>
                </li>
                <li class="theme-item list-inline-item me-1">
                  <a
                    href="javascript:void(0)"
                    class="theme-link rounded-circle d-block"
                    data-sidebarbg="skin6"
                  ></a>
                </li>
              </ul>
              <!-- Logo BG -->
            </div>
          </div>
          <!-- End Tab 1 -->
          <!-- Tab 2 -->
          <div
            class="tab-pane fade"
            id="chat"
            role="tabpanel"
            aria-labelledby="pills-profile-tab"
          >
            <ul class="mailbox list-style-none mt-3">
              <li>
                <div class="message-center chat-scroll position-relative">
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_1"
                    data-user-id="1"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/1.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle online"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:30 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_2"
                    data-user-id="2"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/2.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle busy"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sonu Nigam</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I've sung a song! See you at</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:10 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_3"
                    data-user-id="3"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/3.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span class="profile-status rounded-circle away"></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Arijit Sinh</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >I am a singer!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:08 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_4"
                    data-user-id="4"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/4.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Nirav Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_5"
                    data-user-id="5"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/5.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Sunil Joshi</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_6"
                    data-user-id="6"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/6.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Akshay Kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_7"
                    data-user-id="7"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/7.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Pavan kumar</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                  <!-- Message -->
                  <a
                    href="javascript:void(0)"
                    class="
                      message-item
                      d-flex
                      align-items-center
                      border-bottom
                      px-3
                      py-2
                    "
                    id="chat_user_8"
                    data-user-id="8"
                  >
                    <span class="user-img position-relative d-inline-block">
                      <img
                        src="assets/images/users/8.jpg"
                        alt="user"
                        class="rounded-circle w-100"
                      />
                      <span
                        class="profile-status rounded-circle offline"
                      ></span>
                    </span>
                    <div class="w-75 d-inline-block v-middle ps-3">
                      <h5 class="message-title mb-0 mt-1">Varun Dhavan</h5>
                      <span
                        class="
                          fs-2
                          text-nowrap
                          d-block
                          text-muted text-truncate
                        "
                        >Just see the my admin!</span
                      >
                      <span class="fs-2 text-nowrap d-block text-muted"
                        >9:02 AM</span
                      >
                    </div>
                  </a>
                  <!-- Message -->
                </div>
              </li>
            </ul>
          </div>
          <!-- End Tab 2 -->
          <!-- Tab 3 -->
          <div
            class="tab-pane fade p-3"
            id="pills-contact"
            role="tabpanel"
            aria-labelledby="pills-contact-tab"
          >
            <h6 class="mt-3 mb-3">Activity Timeline</h6>
            <div class="steamline">
              <div class="sl-item">
                <div class="sl-left bg-light-success text-success">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="camera" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/2.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/1.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-primary text-primary">
                  <i data-feather="user" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Meeting today <span class="sl-date"> 5pm</span>
                  </div>
                  <div class="desc">you can write anything</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left bg-light-info text-info">
                  <i data-feather="send" class="feather-sm fill-white"></i>
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">Send documents to Clark</div>
                  <div class="desc">Lorem Ipsum is simply</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/4.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div class="font-weight-medium">
                    Go to the Doctor <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Contrary to popular belief</div>
                </div>
              </div>
              <div class="sl-item">
                <div class="sl-left">
                  <img
                    class="rounded-circle"
                    alt="user"
                    src="assets/images/users/6.jpg"
                  />
                </div>
                <div class="sl-right">
                  <div>
                    <a href="javascript:void(0)">Stephen</a>
                    <span class="sl-date">5 minutes ago</span>
                  </div>
                  <div class="desc">Approve meeting with tiger</div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Tab 3 -->
        </div>
      </div>
    </aside>
    <div class="chat-windows"></div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
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
    <!--This page JavaScript -->
    <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <!-- Vector map JavaScript -->
    <script src="assets/libs/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-us-aea-en.js"></script>
    <!-- Chart JS -->
    <script src="dist/js/pages/dashboards/dashboard2.js"></script>
  </body>
</html>
