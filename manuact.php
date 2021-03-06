<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>kwARto 2018</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
 
    <!-- Web Icon -->
    <link rel="shortcut icon" href="images/icon.png">
   
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="admindex.php" class="navbar-brand">
                  <div class="brand-text brand-big"><span>kw </span><strong>AR</strong>to</div>
                  <div class="brand-text brand-small"><strong>AR</strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              <!-- Navbar Menu -->
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Search-->
                <li class="nav-item d-flex align-items-center"><a id="search" href="#"><i class="icon-search"></i></a></li>
                <!-- Notifications -->
                <li class="nav-item dropdown"> <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-bell-o"></i><span class="badge bg-red">4</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-shopping-basket bg-orange"></i>You have 2 product purchases</div>
                          <div class="notification-time"><small>4 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item"> 
                        <div class="notification">
                          <div class="notification-content"><i class="fa fa-star-o"></i>You have 2 new product ratings</div>
                          <div class="notification-time"><small>10 minutes ago</small></div>
                        </div></a></li>
                    <li><a rel="nofollow" href="manuact.php" class="dropdown-item all-notifications text-center"> <strong>view all notifications</strong></a></li>
                  </ul>
                </li>
                <!-- Messages -->
                <li class="nav-item dropdown"> <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-envelope-o"></i><span class="badge bg-orange">6</span></a>
                  <ul aria-labelledby="notifications" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-body">
                          <h3 class="h5">Comfy Chair</h3><span>You have 2 new questions/comments</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-body">
                          <h3 class="h5">Wooden Stool</h3><span>You have 3 new questions/comments</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="#" class="dropdown-item d-flex"> 
                        <div class="msg-body">
                          <h3 class="h5">Modern Table</h3><span>You have 1 new questions/comments</span>
                        </div></a></li>
                    <li><a rel="nofollow" href="manuact.php" class="dropdown-item all-notifications text-center"> <strong>Read all messages    </strong></a></li>
                  </ul>
                </li>
                <!-- Logout    -->
                <li class="nav-item"><a href="loginnew.php" class="nav-link logout">Logout<i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <nav class="side-navbar">
          <!-- Sidebar Header-->
          <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="https://www.shareicon.net/data/2016/07/05/791221_man_512x512.png" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
              <h1 class="h4">Company Name</h1>
              <p>Manufacturer</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="manuindex.php"> <i class="icon-list"></i>Reports</a></li>
                    <li><a href="prodsmanu.php"> <i class="icon-padnote"></i>Products Management</a></li>
                    <li><a href="upload.php"> <i class="fa fa-upload"></i>Upload Product</a></li>
                    <li><a href="manutrans.php"> <i class="fa fa-shopping-bag"></i>Transactions Mgmt.</a></li>
                    <li class="active"><a href="manuact.php"> <i class="fa fa-street-view"></i>Customer Activity</a></li>
 
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="manuprofile.php"> <i class="icon-user"></i>Profile </a></li>
            <li><a href="loginnew.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Customer Activity</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Customer Activity</li>
            </ul>
          </div>
          <section class="tables" style="background-color: #faf6f6"> 
            <div class="container-fluid">
              <div class="row">
                <!-- Customer Questions -->
                <div class="col-lg-6">
                  <div class="daily-feeds card"> 
                    <div class="card-header">
                      <h3 class="h4">Customer Questions</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Item-->
                      <div class="item clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content">
                              <h5>Comfy Chair</h5><span>Jane Doe</span>
                              <div class="full-date"><small>Today 5:60 pm - 12.29.2017</small></div>
                            </div>
                          </div>
                          <div class="date text-right"><small>5min ago</small></div>
                        </div>
                        <div class="quote has-shadow"> <small>This is my question regarding this item. I am not sure if this is helpful but i hope that it may aid future buyers who would want to purchase this product. is this question long enough? I hope that it is.</small></div>
                        <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
                      </div>  
                      <!-- Item-->
                      <div class="item clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content">
                              <h5>Comfy Chair</h5><span>Jane Doe</span>
                              <div class="full-date"><small>Today 5:60 pm - 12.29.2017</small></div>
                            </div>
                          </div>
                          <div class="date text-right"><small>5min ago</small></div>
                        </div>
                        <div class="quote has-shadow"> <small>This is my question regarding this item. I am not sure if this is helpful but i hope that it may aid future buyers who would want to purchase this product. is this question long enough? I hope that it is.</small></div>
                        <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
                      </div>  
                      <!-- Item-->
                      <div class="item clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content">
                              <h5>Comfy Chair</h5><span>Jane Doe</span>
                              <div class="full-date"><small>Today 5:60 pm - 12.29.2017</small></div>
                            </div>
                          </div>
                          <div class="date text-right"><small>5min ago</small></div>
                        </div>
                        <div class="quote has-shadow"> <small>This is my question regarding this item. I am not sure if this is helpful but i hope that it may aid future buyers who would want to purchase this product. is this question long enough? I hope that it is.</small></div>
                        <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
                      </div>  
                    </div>
                  </div>
                </div> 
                <!-- Customer Comments -->
                <div class="col-lg-6">
                  <div class="daily-feeds card"> 
                    <div class="card-header">
                      <h3 class="h4">Customer Comments</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Item-->
                      <div class="item clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content">
                              <h5>Comfy Chair</h5><span>Jane Doe</span>
                              <div class="full-date"><small>Today 5:60 pm - 12.29.2017</small></div>
                            </div>
                          </div>
                          <div class="date text-right"><small>5min ago</small></div>
                        </div>
                        <div class="quote has-shadow"> <small>This is my comment regarding this item. I am not sure if this is helpful but i hope that it may aid future buyers who would want to purchase this product. is this comment long enough? I hope that it is.</small></div>
                        <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
                      </div>  
                      <!-- Item-->
                      <div class="item clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content">
                              <h5>Comfy Chair</h5><span>Jane Doe</span>
                              <div class="full-date"><small>Today 5:60 pm - 12.29.2017</small></div>
                            </div>
                          </div>
                          <div class="date text-right"><small>5min ago</small></div>
                        </div>
                        <div class="quote has-shadow"> <small>This is my comment regarding this item. I am not sure if this is helpful but i hope that it may aid future buyers who would want to purchase this product. is this comment long enough? I hope that it is.</small></div>
                        <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
                      </div>  
                      <!-- Item-->
                      <div class="item clearfix">
                        <div class="feed d-flex justify-content-between">
                          <div class="feed-body d-flex justify-content-between"><a href="#" class="feed-profile"><img src="https://www.shareicon.net/data/512x512/2016/07/05/791212_people_512x512.png" alt="person" class="img-fluid rounded-circle"></a>
                            <div class="content">
                              <h5>Comfy Chair</h5><span>Jane Doe</span>
                              <div class="full-date"><small>Today 5:60 pm - 12.29.2017</small></div>
                            </div>
                          </div>
                          <div class="date text-right"><small>5min ago</small></div>
                        </div>
                        <div class="quote has-shadow"> <small>This is my comment regarding this item. I am not sure if this is helpful but i hope that it may aid future buyers who would want to purchase this product. is this comment long enough? I hope that it is.</small></div>
                        <div class="CTAs pull-right"><a href="#" class="btn btn-xs btn-secondary"><i class="fa fa-share"> </i>View</a></div>
                      </div>  
                    </div>
                  </div>
                </div>

                <!-- Ratings-->
                <div class="col-lg-12">
                  <div class="recent-updates card">
                    <div class="card-header">
                      <h3 class="h4">Product Ratings</h3>
                    </div>
                    <div class="card-body no-padding">
                      <!-- Item-->
                      <div class="item d-flex justify-content-between">
                        <div class="info d-flex">
                          <div class="icon"><i class="fa fa-star-half-o"></i></div>
                          <div class="title">
                            <a href="#" style="text-decoration: none;"><h5>Comfy Chair</h5></a>
                            <p>Jane Doe</p>
                            </div>
                          </div>
                            <div class="text-right">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                            </div>
                        <div class="date text-right"><strong>29</strong><span>December 2017</span></div>
                      </div>
                      <!-- Item-->
                      <div class="item d-flex justify-content-between">
                        <div class="info d-flex">
                          <div class="icon"><i class="fa fa-star-half-o"></i></div>
                          <div class="title">
                            <a href="#" style="text-decoration: none;"><h5>Comfy Chair</h5></a>
                            <p>John Doe</p>
                            </div>
                          </div>
                            <div class="text-right">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                            </div>
                        <div class="date text-right"><strong>28</strong><span>December 2017</span></div>
                      </div>
                      <!-- Item        -->
                      <div class="item d-flex justify-content-between">
                        <div class="info d-flex">
                          <div class="icon"><i class="fa fa-star-half-o"></i></div>
                          <div class="title">
                            <a href="#" style="text-decoration: none;"><h5>Round Table</h5></a>
                            <p>John Adams</p>
                            </div>
                          </div>
                            <div class="text-right">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                            </div>
                        <div class="date text-right"><strong>28</strong><span>December 2017</span></div>
                      </div>
                      <!-- Item-->
                      <div class="item d-flex justify-content-between">
                        <div class="info d-flex">
                          <div class="icon"><i class="fa fa-star-half-o"></i></div>
                          <div class="title">
                            <a href="#" style="text-decoration: none;"><h5>Modern Table</h5></a>
                            <p>Rachel Williams</p>
                            </div>
                          </div>
                            <div class="text-right">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1d/Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg/1200px-Roundel_of_the_Hungarian_Red_Air_Corps_%28second_variant%29.svg.png" style="max-width: 15px;">
                            </div>
                        <div class="date text-right"><strong>27</strong><span>December 2017</span></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 col-lg-12 text-right">
                  <p>kwARto &copy; 2017-2019</p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>