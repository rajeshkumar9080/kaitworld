<?php include("db_config.php"); ?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="keywords" content="Adminpanel" />
  <meta name="description" content="Adminpanel" />
  <title>Adminpanel</title>
  <!-- Favicon icon -->
  <link href="../../assets/libs/bootstrap-icons/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon1.png" />
  <script src="assets/extra-libs/prism/prism.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="assets/libs/apexcharts/dist/apexcharts.css" />
  <!-- Vector CSS -->
  <link href="assets/libs/jvectormap/jquery-jvectormap.css" rel="stylesheet" />
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
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="tea lds-ripple" width="37" height="48" viewbox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M27.0819 17H3.02508C1.91076 17 1.01376 17.9059 1.0485 19.0197C1.15761 22.5177 1.49703 29.7374 2.5 34C4.07125 40.6778 7.18553 44.8868 8.44856 46.3845C8.79051 46.79 9.29799 47 9.82843 47H20.0218C20.639 47 21.2193 46.7159 21.5659 46.2052C22.6765 44.5687 25.2312 40.4282 27.5 34C28.9757 29.8188 29.084 22.4043 29.0441 18.9156C29.0319 17.8436 28.1539 17 27.0819 17Z" stroke="#1e88e5" stroke-width="2"></path>
      <path d="M29 23.5C29 23.5 34.5 20.5 35.5 25.4999C36.0986 28.4926 34.2033 31.5383 32 32.8713C29.4555 34.4108 28 34 28 34" stroke="#1e88e5" stroke-width="2"></path>
      <path id="teabag" fill="#1e88e5" fill-rule="evenodd" clip-rule="evenodd" d="M16 25V17H14V25H12C10.3431 25 9 26.3431 9 28V34C9 35.6569 10.3431 37 12 37H18C19.6569 37 21 35.6569 21 34V28C21 26.3431 19.6569 25 18 25H16ZM11 28C11 27.4477 11.4477 27 12 27H18C18.5523 27 19 27.4477 19 28V34C19 34.5523 18.5523 35 18 35H12C11.4477 35 11 34.5523 11 34V28Z"></path>
      <path id="steamL" d="M17 1C17 1 17 4.5 14 6.5C11 8.5 11 12 11 12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="#1e88e5"></path>
      <path id="steamR" d="M21 6C21 6 21 8.22727 19 9.5C17 10.7727 17 13 17 13" stroke="#1e88e5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
    </svg>
  </div>
  <!-- ============================================================== -->
  <!-- Main wrapper - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <div id="main-wrapper">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar">
      <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
          <!-- This is for the sidebar toggle which is visible on mobile only -->
          <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <a class="navbar-brand" href="dashboard.php">
            <!-- Logo icon -->
            <b class="logo-icon">
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
              <!-- Dark Logo icon 
                <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo"/>-->KAIT
              <!-- Light Logo icon  -->
              <!-- <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo"/> -->
            </b>
            <!--End Logo icon -->
            <!-- Logo text -->
            <span class="logo-text">
              <!-- dark Logo text 
                <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo"/>LOGO
                 Light Logo text 
                <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage"/>
              </span>
            </a>
            <!-- ============================================================== -->
              <!-- End Logo -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Toggle which is visible on mobile only -->
              <!-- ============================================================== -->
              <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav me-auto">
            <!-- This is  -->
            <li class="nav-item">
              <a class="
                    nav-link
                    sidebartoggler
                    d-none d-md-block
                    waves-effect waves-dark
                  " href="javascript:void(0)"><i class="ti-menu"></i></a>
            </li>
            <!-- ============================================================== -->
            <!-- Search -->
            <!-- ============================================================== -->
            <li class="nav-item d-none d-md-block search-box">
              <!--<a
                  class="nav-link d-none d-md-block waves-effect waves-dark"
                  href="javascript:void(0)"
                  ><i class="ti-search"></i
                ></a>
                <form class="app-search">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search & enter"
                  />
                  <a class="srh-btn"><i class="ti-close"></i></a>
                </form>-->
            </li>
            <!-- ============================================================== -->
            <!-- Mega Menu -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown mega-dropdown">
              <!--<a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  ><i class="mdi mdi-view-grid"></i
                ></a>-->
              <div class="dropdown-menu dropdown-menu-animate-up">
                <div class="mega-dropdown-menu row">
                  <div class="col-lg-3 col-xl-2 mb-4">
                    <h4 class="mb-3">CAROUSEL</h4>
                    <!-- CAROUSEL -->
                    <div id="carouselExampleControls" class="carousel slide carousel-dark" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block img-fluid" src="assets/images/big/img1.jpg" alt="First slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="assets/images/big/img2.jpg" alt="Second slide" />
                        </div>
                        <div class="carousel-item">
                          <img class="d-block img-fluid" src="assets/images/big/img3.jpg" alt="Third slide" />
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </a>
                    </div>
                    <!-- End CAROUSEL -->
                  </div>
                  <div class="col-lg-3 mb-4">
                    <h4 class="mb-3">ACCORDION</h4>
                    <!-- Accordian -->
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                          </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                          </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid.
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                          </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                          <div class="accordion-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod
                            high life accusamus terry richardson ad squid.
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 mb-4">
                    <h4 class="mb-3">CONTACT US</h4>
                    <!-- Contact -->
                    <form>
                      <div class="mb-3 form-floating">
                        <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name" />
                        <label>Enter Name</label>
                      </div>
                      <div class="mb-3 form-floating">
                        <input type="email" class="form-control" placeholder="Enter email" />
                        <label>Enter Email address</label>
                      </div>
                      <div class="mb-3 form-floating">
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                        <label>Enter Message</label>
                      </div>
                      <button type="submit" class="btn px-4 rounded-pill btn-info">
                        Submit
                      </button>
                    </form>
                  </div>
                  <div class="col-lg-3 col-xlg-4 mb-4">
                    <h4 class="mb-3">List style</h4>
                    <!-- List style -->
                    <ul class="list-style-none">
                      <li>
                        <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                          You can give link</a>
                      </li>
                      <li>
                        <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                          Give link</a>
                      </li>
                      <li>
                        <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                          Another Give link</a>
                      </li>
                      <li>
                        <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                          Forth link</a>
                      </li>
                      <li>
                        <a href="#" class="font-weight-medium"><i data-feather="check-circle" class="feather-sm text-success me-2"></i>
                          Another fifth link</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Mega Menu -->
            <!-- ============================================================== -->
          </ul>
          <!-- ============================================================== -->
          <!-- Right side toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav">
            <!-- ============================================================== -->
            <!-- Comment -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <!--<a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-message"></i>
                  <div class="notify">
                    <span class="heartbit"></span> <span class="point"></span>
                  </div>
                </a>-->
              <div class="dropdown-menu dropdown-menu-end mailbox dropdown-menu-animate-up">
                <ul class="list-style-none">
                  <li>
                    <div class="border-bottom rounded-top py-3 px-4">
                      <div class="mb-0 font-weight-medium fs-4">
                        Notifications
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="message-center notifications position-relative" style="height: 230px">
                      <!-- Message -->
                      <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                        <span class="btn btn-light-danger text-danger btn-circle">
                          <i data-feather="link" class="feather-sm fill-white"></i>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Luanch Admin
                          </h5>
                          <span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just see the my new admin!</span>
                          <span class="fs-2 text-nowrap d-block subtext text-muted">9:30 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="message-item d-flex align-items-center border-bottom px-3 py-2">
                        <span class="btn btn-light-success text-success btn-circle">
                          <i data-feather="calendar" class="feather-sm fill-white"></i>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Event today
                          </h5>
                          <span class="fs-2 text-nowrap d-block time text-truncate fw-normal text-muted mt-1">Just a reminder that you have event</span>
                          <span class="fs-2 text-nowrap d-block subtext text-muted">9:10 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                        <span class="btn btn-light-info text-info btn-circle">
                          <i data-feather="settings" class="feather-sm fill-white"></i>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Settings
                          </h5>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">You can customize this template as you want</span>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:08 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                        <span class="
                              btn btn-light-primary
                              text-primary
                              btn-circle
                            ">
                          <i data-feather="users" class="feather-sm fill-white"></i>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                text-muted
                                mt-1
                              ">Just see the my admin!</span>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:02 AM</span>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);">
                      <strong>Check all notifications</strong>
                      <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Comment -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Messages -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <!--<a
                  class="nav-link dropdown-toggle waves-effect waves-dark"
                  href="#"
                  id="2"
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="mdi mdi-email"></i>
                  <div class="notify">
                    <span class="heartbit"></span> <span class="point"></span>
                  </div>
                </a>-->
              <div class="
                    dropdown-menu
                    mailbox
                    dropdown-menu-end dropdown-menu-animate-up
                  " aria-labelledby="2">
                <ul class="list-style-none">
                  <li>
                    <div class="border-bottom rounded-top py-3 px-4">
                      <div class="mb-0 font-weight-medium fs-4">
                        You have 4 new messages
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="message-center message-body position-relative" style="height: 230px">
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle w-100" />
                          <span class="profile-status rounded-circle online"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                                fw-normal
                                mt-1
                              ">Just see the my admin!</span>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:30 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="assets/images/users/2.jpg" alt="user" class="rounded-circle w-100" />
                          <span class="profile-status rounded-circle busy"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Sonu Nigam
                          </h5>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">I've sung a song! See you at</span>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:10 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="assets/images/users/3.jpg" alt="user" class="rounded-circle w-100" />
                          <span class="profile-status rounded-circle away"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Arijit Sinh
                          </h5>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">I am a singer!</span>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:08 AM</span>
                        </div>
                      </a>
                      <!-- Message -->
                      <a href="javascript:void(0)" class="
                            message-item
                            d-flex
                            align-items-center
                            border-bottom
                            px-3
                            py-2
                          ">
                        <span class="user-img position-relative d-inline-block">
                          <img src="assets/images/users/4.jpg" alt="user" class="rounded-circle w-100" />
                          <span class="profile-status rounded-circle offline"></span>
                        </span>
                        <div class="w-75 d-inline-block v-middle ps-3">
                          <h5 class="message-title mb-0 mt-1 fs-3 fw-bold">
                            Pavan kumar
                          </h5>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                time
                                text-truncate
                              ">Just see the my admin!</span>
                          <span class="
                                fs-2
                                text-nowrap
                                d-block
                                subtext
                                text-muted
                              ">9:02 AM</span>
                        </div>
                      </a>
                    </div>
                  </li>
                  <li>
                    <a class="nav-link border-top text-center text-dark pt-3" href="javascript:void(0);">
                      <b>See all e-Mails</b> <i class="fa fa-angle-right"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- End Messages -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Profile -->
            <!-- ============================================================== -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="assets/images/users/1.jpg" alt="user" width="30" class="profile-pic rounded-circle" />
              </a>
              <div class="
                    dropdown-menu dropdown-menu-end
                    user-dd
                    animated
                    flipInY
                  ">
                <div class="
                      d-flex
                      no-block
                      align-items-center
                      p-3
                      bg-info
                      text-white
                      mb-2
                    ">
                  <div class="">
                    <img src="assets/images/users/1.jpg" alt="user" class="rounded-circle" width="60" />
                  </div>

                </div>
                <a class="dropdown-item" href="profile.php"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>My Profile</a>
                <!--<a class="dropdown-item" href="#"
                    ><i
                      data-feather="credit-card"
                      class="feather-sm text-info me-1 ms-1"
                    ></i>
                    My Balance</a
                  >
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="mail"
                      class="feather-sm text-success me-1 ms-1"
                    ></i>
                    Inbox</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#"
                    ><i
                      data-feather="settings"
                      class="feather-sm text-warning me-1 ms-1"
                    ></i>
                    Account Setting</a
                  >-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>Logout</a>
                <!--<div class="dropdown-divider"></div>
                  <div class="pl-4 p-2">
                    <a href="#" class="btn d-block w-100 btn-info rounded-pill"
                      >View Profile</a
                    >
                  </div>-->
              </div>
            </li>
            <!-- ============================================================== -->
            <!-- Language -->
            <!-- ============================================================== -->
            <!-- <li class="nav-item dropdown">
              <a
                  class="
                    nav-link
                    dropdown-toggle
                    text-muted
                    waves-effect waves-dark
                  "
                  href=""
                  data-bs-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="flag-icon flag-icon-us"></i
                ></a>
              <div class="
                    dropdown-menu dropdown-menu-end dropdown-menu-animate-up
                  ">
                 <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-in"></i> India</a> 
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-cn"></i> China</a>
                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> Dutch</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- ============================================================== -->
    <!-- End Topbar header -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
        <!-- User profile -->
        <div class="position-relative" 
          <div class="profile-img"> 
          <!-- <img src="assets/images/2.JPG" alt="user" class="w-100"/> -->
          <!-- </div> -->
          <!-- User profile text-->
          <div class="profile-text pt-1 dropdown">

            <div class="dropdown-menu animated flipInY" aria-labelledby="dropdownMenuLink">
              <a class="dropdown-item" href="profile.php"><i data-feather="user" class="feather-sm text-info me-1 ms-1"></i>
                My Profile</a>
              <!--<a class="dropdown-item" href="#"><i data-feather="credit-card" class="feather-sm text-info me-1 ms-1"></i>
                  My Balance</a>
                <a class="dropdown-item" href="#"><i data-feather="mail" class="feather-sm text-success me-1 ms-1"></i>
                  Inbox</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i data-feather="settings" class="feather-sm text-warning me-1 ms-1"
                  ></i>Account Setting</a>-->
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php"><i data-feather="log-out" class="feather-sm text-danger me-1 ms-1"></i>Logout</a>
              <!--<div class="dropdown-divider"></div>
                <div class="ps-4 p-2">
                  <a href="#" class="btn d-block w-100 btn-info rounded-pill">View Profile</a>
                </div>-->
            </div>
          </div>
        </div>
        <!-- End User profile text-->
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
          <ul id="sidebarnav">
            <!--<li class="nav-small-cap">
                <i class="mdi mdi-dots-horizontal"></i>
                <span class="hide-menu">Personal</span>
              </li>-->
            <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark fw-bold fs-5" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                <span class="hide-menu">Dashboard </span>
              </a>
            </li>

            <!-- <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark" href="view_home.php"
                  aria-expanded="false"><i class="mdi mdi-collage"></i>
                  <span class="hide-menu">Home</span>
                </a>
			  </li> -->
        <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark fw-bold fs-5" href="view_home.php" aria-expanded="false"><i class="mdi mdi-account-settings"></i>
                <span class="hide-menu">Home</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-camera-burst"></i><span class="hide-menu">Gallery </span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_gallary.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">image</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_gallery_video.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">video</span></a>
                </li>
              </ul>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark" href="view_events.php" aria-expanded="false"><i class="mdi mdi-buffer"></i>
                <span class="hide-menu">Events</span>
              </a>
            </li> -->
            
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-buffer"></i><span class="hide-menu">All Events </span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_events.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">Events</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_upcoming_event.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Upcoming Events</span></a>
                </li>
                
                <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-creation"></i><span class="hide-menu">Gold Achivers</span></a>
                <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_Gold_Club_Achivers_meet.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Gold Club Achivers meet</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_Gold_Club_Upcomin_Achivers_meet.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Gold Club Upcoming Achivers meet</span></a>
                </li>
                </ul>

                <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-google-circles-extended"></i><span class="hide-menu">Silver Achivers</span></a>
                <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_Silver_Club_Achivers_meet.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Silver Club Achivers meet</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_Silver_Club_Upcoming_Achivers_meet.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Silver Club Upcoming Achivers meet</span></a>
                </li>
                </ul>

                <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-file-check"></i><span class="hide-menu">Bronze Achivers</span></a>
                <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_Bronze_Club_Achivers_meet.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Bronze Club Achivers meet</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_Bronze_Club_Upcoming_Achivers_meet.php" class="sidebar-link"><i class="mdi mdi-format-align-right "></i><span class="hide-menu">Bronze Club Upcoming Achivers meet</span></a>
                </li>
                </ul>
              </ul>
            </li>

            <!-- <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark fw-bold fs-5" href="view_achives.php" aria-expanded="false"><i class="mdi mdi-chart-areaspline"></i>
                <span class="hide-menu">Achives</span>
              </a>
            </li> -->
            <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-buffer"></i><span class="hide-menu">All Achives </span></a>
             <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item fw-bold">
                  <a href="view_achives.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">Achiver</span></a>
                </li>
                <a class="sidebar-link has-arrow waves-effect waves-dark fw-bold fs-5" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-trophy-award"></i><span class="hide-menu">Awards </span></a>
                <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_mobile_achives.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">Mobile Phone Achivers</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_labtop_achives.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu"> Laptop Achivers</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_ev_bike.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">EV Bike Achivers</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_car.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">Car Achivers</span></a>
                </li>
                </ul>
              </ul>
            </li>
            <!-- <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark" href="view_gallery.php"
                  aria-expanded="false"><i class="mdi mdi-account-multiple"></i>
                  <span class="hide-menu">Gallery </span>
                </a>
			  </li> -->

        <li class="sidebar-item">
              <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu fw-bold fs-5">Clubs </span></a>
              <ul aria-expanded="false" class="collapse first-level">
                <li class="sidebar-item fw-bold">
                  <a href="view_bronze.php" class="sidebar-link"><i class="mdi mdi-format-align-left"></i><span class="hide-menu">Bronze</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_silver.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Silver</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_gold.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Gold</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_platinum.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Platinum</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_daimond.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Diamond</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_double_daimond.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Double Diamond</span></a>
                </li>
                <!-- <li class="sidebar-item fw-bold">
                  <a href="view_dublu.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Dublu</span></a>
                </li> -->
                <li class="sidebar-item fw-bold">
                  <a href="view_triple_daimond.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Triple Diamond</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_kait_king.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Kait King</span></a>
                </li>
              </ul>
            </li>

            <!-- <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark fw-bold fs-5" href="view_trips.php" aria-expanded="false"><i class="mdi mdi-airplane-landing"></i>
                <span class="hide-menu">Trips </span>
              </a>
            </li> -->

          
            <li class="sidebar-item">
            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-chart-line"></i><span class="hide-menu fw-bold fs-5">Contests </span></a>
            <ul aria-expanded="false" class="collapse first-level">
              <!-- <a class="sidebar-link waves-effect waves-dark fw-bold fs-5" href="view_contest.php" aria-expanded="false"><i class="mdi mdi-trophy"></i>
                <span class="hide-menu">Contest </span>
              </a> -->
              <li class="sidebar-item fw-bold">
                  <a href="view_contest.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Contest</span></a>
                </li>
              <li class="sidebar-item fw-bold">
                  <a href="view_upcoming_contest.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Upcoming Contest</span></a>
                </li>
                <li class="sidebar-item fw-bold">
                  <a href="view_contest_gallery.php" class="sidebar-link fs-3"><i class="mdi mdi-format-align-right"></i><span class="hide-menu">Contest Gallery</span></a>
                </li>
              
            </ul>
            </li>
            <!-- <li class="sidebar-item">
              <a class="sidebar-link waves-effect waves-dark fw-bold fs-5" href="view_blog.php" aria-expanded="false"><i class="mdi mdi-comment-text-outline"></i>
                <span class="hide-menu">Blog</span>
              </a>
            </li> -->
            <!-- <li class="sidebar-item">
                <a class="sidebar-link waves-effect waves-dark" href="view_content_trip.php"
                  aria-expanded="false"><i class="mdi mdi-image"></i>
                  <span class="hide-menu">Peaceful Trip </span>
                </a>
			  </li> -->
           
          </ul>

          </ul>
        </nav>
        
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
      <!-- Bottom points-->
      <div class="sidebar-footer">
        <!-- item-->
        <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Settings"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Email"><i class="mdi mdi-gmail"></i></a>
        <!-- item-->
        <a href="logout.php" class="link" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout"><i class="mdi mdi-power"></i></a>
      </div>
      <!-- End Bottom points-->
    </aside>

    