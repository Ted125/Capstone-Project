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
              <h1 class="h4">Admin Name</h1>
              <p>Super Admin</p>
            </div>
          </div>
          <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
          <ul class="list-unstyled">
                    <li><a href="admindex.php"> <i class="icon-home"></i>Home </a></li>
                    <li><a href="usersmgt.php"> <i class="fa fa-user-circle-o"></i>Users Management</a></li>
                    <li><a href="manumgt.php"> <i class="fa fa-truck"></i>Manufacturers Mgmt.</a></li>
                    <li><a href="prodsmgt.php"> <i class="fa fa-bathtub"></i>Products Management</a></li>
                    <li><a href="cats.php"> <i class="fa fa-archive"></i>Categories Management</a></li>
                    <li class="active"><a href="quescomp.php"> <i class="fa fa-envelope-open-o"></i>Complaints & Questions</a></li>
                    <li><a href="adminrep.php"> <i class="fa fa-bar-chart"></i>Reports</a></li>
                    
          </ul><span class="heading">Extras</span>
          <ul class="list-unstyled">
            <li> <a href="adprofile.php"> <i class="fa fa-user"></i>Profile </a></li>
            <li><a href="loginnew.php"> <i class="icon-interface-windows"></i>Logout</a></li>
          </ul>
        </nav>
        <div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Complaints & Questions</h2>
            </div>
          </header>
          <!-- Breadcrumb-->
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="admindex.php">Home</a></li>
              <li class="breadcrumb-item active">Complaints & Questions</li>
            </ul>
          </div>
          <section style="background-color: #faf6f6">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">User Questions</h3>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>E-mail Address</th>
                        <th>Date Submitted</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Smith</td>
                        <td>name@user.com</td>
                        <td>December 01, 2017</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc1" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jane Does</td>
                        <td>name@user.com</td>
                        <td>December 02, 2017</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc2" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Adam Llemore</td>
                        <td>name@user.com</td>
                        <td>January 03, 2018</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc3" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>John Doe</td>
                        <td>name@user.com</td>
                        <td>January 02, 2018</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc4" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h3 class="h4">User Complaints</h3>
                </div>
                <div class="card-body">
                  <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>User Name</th>
                        <th>E-mail Address</th>
                        <th>Date Submitted</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td>John Smith</td>
                        <td>name@user.com</td>
                        <td>December 01, 2017</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc1" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Jane Does</td>
                        <td>name@user.com</td>
                        <td>December 02, 2017</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc2" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Adam Llemore</td>
                        <td>name@user.com</td>
                        <td>January 03, 2018</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc3" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <th scope="row">4</th>
                        <td>John Doe</td>
                        <td>name@user.com</td>
                        <td>January 02, 2018</td>
                        <td>
                          <button type="button" data-toggle="modal" data-target="#myModalc4" class="btn btn-primary">View</button>
                          <!-- Modal-->
                          <div id="myModalc4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" class="modal fade text-left" style="display: none;" aria-hidden="true">
                            <div role="document" class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h4 id="exampleModalLabel" class="modal-title">User Question/Comment</h4>
                                  <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                </div>
                                <div class="modal-body">
                                  <h6>User Name: John Smith</h6>
                                  <h6>E-mail Address: name@user.com</h6>
                                  <h6>Content:</h6><p style="margin-left: 20px;">Hello! I am a user and this is my question or my comment. I hope you will respond or do something about this. Thank you.</p>
                                  <h6>Write a response:</h6>
                                  <textarea class="input_ph input_message" placeholder="Write a response" rows="3" style="width: 100%;"></textarea>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancel</button>
                                  <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
          </section>
          <!-- Page Footer-->
          <footer class="main-footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6 col-lg-12 text-right">
                  <p>kwARto &copy; 2018-2019</p>
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
    <script src="js/charts-custom.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>