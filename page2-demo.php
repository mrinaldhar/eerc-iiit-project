<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Earthquake Assessment tool :: EERC, IIIT-H</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="skin-blue">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="index.php" class="logo"><b>EERC</b> IIIT-H</a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the messages -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="#">
                          <div class="pull-left">
                            <!-- User Image -->
                            <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <!-- Message title and timestamp -->
                          <h4>                            
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <!-- The message -->
                          <p>Why not buy a new awesome phone?</p>
                        </a>
                      </li><!-- end message -->                      
                    </ul><!-- /.menu -->
                  </li>
                  <li class="footer"><a href="#">See All Messages</a></li>
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- Inner Menu: contains the notifications -->
                    <ul class="menu">
                      <li><!-- start notification -->
                        <a href="#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li><!-- end notification -->                      
                    </ul>
                  </li>
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->
              <li class="dropdown tasks-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- Inner menu: contains the tasks -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="#">
                          <!-- Task title and progress text -->
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <!-- The progress bar -->
                          <div class="progress xs">
                            <!-- Change the css width attribute to simulate progress -->
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->                      
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Mrinal Dhar</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Mrinal Dhar
                      <small>Member since Nov. 2012</small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="login.html" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Mrinal Dhar</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->
            <li><a href="#"><span>Overview</span></a></li>
            <li class="active treeview">
              <a href="#"><span>Stone Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="page1-demo.php">Life Structural</a></li>
                <li><a href="page2-demo.php">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Mud Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>RC Frame Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Confined Masonry Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>ABC Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>XYZ Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>PQR Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#">Life Structural</a></li>
                <li><a href="#">Life Non Structural</a></li>
                <li><a href="#">Economic Structural</a></li>
                <li><a href="#">Economic Non Structural</a></li>

              </ul>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Stone Houses
            <small>Life Non-Structural</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Stone Houses</a></li>
            <li class="active">Life Non-Structural</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          
          <!--Life-threatening Factors related to the Structural Elements - Page 2 -->
<form action="index.php" method="">
    <p>3. Architectural Features</p>

    <p>a. The outer dimensions of the house at plinth level are less than those at the top in either of the two horizontal plan directions</p>
    <input type="radio" name="_3a" value='Y'/>Yes
    <input type="radio" name="_3a" value='N'/>No

    <p>b. The house has large una nchored projections and overhangs</p>
    <input type="radio" name="_3b" value='Y'/>Yes
    <input type="radio" name="_3b" value='N'/>No

    <p>c. Door and window openings in walls are at the corners</p>
    <input type="radio" name="_3c" value='Y'/>Yes
    <input type="radio" name="_3c" value='N'/>No

    <p>d. The house is touching or located too close to the adjacent seemingly unsafe house/construction</p>
    <input type="radio" name="_3d" value='Y'/>Yes
    <input type="radio" name="_3d" value='N'/>No
    <br/><br/>

    <p>4. Structural Aspects</p>

    <p>a. The roof is constructed such that it is not integral within itself (i.e., it does not act as a single unit and breaks open during earthquake shaking) and is not anchored into the walls</p>
    <input type="radio" name="_4a" value='-2'/>Yes
    <input type="radio" name="_4a" value='N'/>No

    <p>b. The walls are thick and made in two wythes</p>
    <input type="radio" name="_4b" value='Y'/>Yes
    <input type="radio" name="_4b" value='N'/>No

    <p>c. The walls are not integrated into each other at the corners</p>
    <input type="radio" name="_4c" value='Y'/>Yes
    <input type="radio" name="_4c" value='N'/>No
    <br/><br/>

    <p>5. Construction Details</p>

    <p>a. The walls of the house are made with mud mortar and are exposed to the vagaries of the outside weather (especially rain water beating)</p>
    <input type="radio" name="_5a" value='Y'/>Yes
    <input type="radio" name="_5a" value='N'/>No
    <br/><br/>

    <input type="submit"/>Submit
</form>


        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Copyright &copy; 2015. All Rights Reserved.
        </div>
        <!-- Default to the left --> 
        <strong>Developed by ES Subgroup 6 for EERC, IIIT-Hyderabad</strong>
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->
    
    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    
    <!-- Optionally, you can add Slimscroll and FastClick plugins. 
          Both of these plugins are recommended to enhance the 
          user experience -->
  </body>
</html>