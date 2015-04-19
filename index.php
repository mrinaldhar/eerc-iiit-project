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
                      <small>Member since Mar. 2015</small>
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
            <li class="active"><a href="#" onclick="load_form('overview')"><span>Overview</span></a></li>
            <li class="treeview">
              <a href="#"><span>Stone Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('1_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('1_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('1_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('1_4')">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Mud Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('2_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('2_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('2_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('2_4')">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>RC Frame Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('3_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('3_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('3_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('3_4')">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Ikara Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('4_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('4_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('4_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('4_4')">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Dhajjidewari Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('5_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('5_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('5_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('5_4')">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Confined Masonry Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('6_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('6_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('6_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('6_4')">Economic Non Structural</a></li>

              </ul>
            </li>
            <li class="treeview">
              <a href="#"><span>Burnt Clay brick Houses</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="#" onclick="load_form('7_1')">Life Structural</a></li>
                <li><a href="#" onclick="load_form('7_2')">Life Non Structural</a></li>
                <li><a href="#" onclick="load_form('7_3')">Economic Structural</a></li>
                <li><a href="#" onclick="load_form('7_4')">Economic Non Structural</a></li>

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
            Overview
            <small>What this project is all about</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Overview</a></li>
            <li class="active">Here</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-lg-12">
              <div class="nav-tabs-custom">
                               
                                    
                                </div><!-- /.tab-content -->
                      
                    <!-- END CUSTOM TABS -->
                            </div><!-- /.box -->

            </div>
          </div>

          <!-- Your Page Content Here -->

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
  <script>
  var page_loaded = "0";
  load_form('overview');
  function load_form(which) {
    if (page_loaded == "0") {
      clearAllTabs();
    }
    switch(which) {
      case '1_1':
        if (page_loaded!="1_1") {
        clearAllTabs();
        base = "./form1_stone/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=3; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "1_1";
      }
      break;
      case '1_2':
        if (page_loaded!="1_2") {
        clearAllTabs();
        base = "./form1_stone/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "1_2";
      }
      break;
      case '1_3':
        if (page_loaded!="1_3") {
        clearAllTabs();
        base = "./form1_stone/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=4; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "1_3";
      }
      break;
      case '1_4':
        if (page_loaded!="1_4") {
        clearAllTabs();
        base = "./form1_stone/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "1_4";
      }
      break;

      case '2_1':
        if (page_loaded!="2_1") {
        clearAllTabs();
        base = "./form2_mud/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "2_1";
      }
      break;
      case '2_2':
        if (page_loaded!="2_2") {
        clearAllTabs();
        base = "./form2_mud/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "2_2";
      }
      break;
      case '2_3':
        if (page_loaded!="2_3") {
        clearAllTabs();
        base = "./form2_mud/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=7; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "2_3";
      }
      break;
      case '2_4':
        if (page_loaded!="2_4") {
        clearAllTabs();
        base = "./form2_mud/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "2_4";
      }
      break;

      case '3_1':
        if (page_loaded!="3_1") {
        clearAllTabs();
        base = "./form3_rcframe/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "3_1";
      }
      break;
      case '3_2':
        if (page_loaded!="3_2") {
        clearAllTabs();
        base = "./form3_rcframe/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "3_2";
      }
      break;
      case '3_3':
        if (page_loaded!="3_3") {
        clearAllTabs();
        base = "./form3_rcframe/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=7; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "3_3";
      }
      break;
      case '3_4':
        if (page_loaded!="3_4") {
        clearAllTabs();
        base = "./form3_rcframe/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "3_4";
      }
      break;

      case '4_1':
        if (page_loaded!="4_1") {
        clearAllTabs();
        base = "./form4_ikara/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=3; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "4_1";
      }
      break;
      case '4_2':
        if (page_loaded!="4_2") {
        clearAllTabs();
        base = "./form4_ikara/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "4_2";
      }
      break;
      case '4_3':
        if (page_loaded!="4_3") {
        clearAllTabs();
        base = "./form4_ikara/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=4; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "4_3";
      }
      break;
      case '4_4':
        if (page_loaded!="4_4") {
        clearAllTabs();
        base = "./form4_ikara/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        for (i=2; i<=2; i++) {s
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "4_4";
      }
      break;

      case '5_1':
        if (page_loaded!="5_1") {
        clearAllTabs();
        base = "./form5_dhajjidewari/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=3; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "5_1";
        
      } 
      break;
      case '5_2':
        if (page_loaded!="5_2") {
        clearAllTabs();
        base = "./form5_dhajjidewari/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "5_2";
      } 
      break;
      case '5_3':
        if (page_loaded!="5_3") {
        clearAllTabs();
        base = "./form5_dhajjidewari/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=4; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "5_3";
      } 
        break;
      case '5_4':
        if (page_loaded!="5_4") {
        clearAllTabs();
        base = "./form5_dhajjidewari/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "5_4";
      }  
        break;

      case '6_1':
        if (page_loaded!="6_1") {
        clearAllTabs();
        base = "./form6_confinedmasonry/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
        page_loaded = "6_1";
      } 
      break;
      case '6_2':
        if (page_loaded!="6_2") {
        clearAllTabs();
        base = "./form6_confinedmasonry/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        page_loaded = "6_2";
      } 
      break;
      case '6_3':
        if (page_loaded!="6_3") {
        clearAllTabs();
        base = "./form6_confinedmasonry/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=4; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "6_3";
      }  
        break;
      case '6_4':
        if (page_loaded!="6_4") {
        clearAllTabs();
        base = "./form6_confinedmasonry/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=2; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "6_4";
      }  
      break;

      case '7_1':
        if (page_loaded!="7_1") {
        clearAllTabs();
        base = "./form7_burntclaybrick/1Life_Structural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=3; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "7_1";
      }  
        break;

      case '7_2':
        if (page_loaded!="7_2") {
        clearAllTabs();
        base = "./form7_burntclaybrick/2Life_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        page_loaded = "7_2";
      }  
        break;

      case '7_3':
        if (page_loaded!="7_3") {
        clearAllTabs();
        base = "./form7_burntclaybrick/3Economic_Structural/";
        doajax(base+"page1.php", "#tab_1");
         for (i=2; i<=4; i++) {
          console.log('adding'+i);
          addtab(i);
          doajax(base+"page"+i+".php", "#tab_"+i);
        }
        page_loaded = "7_3";
      }  
        break;
    
      case '7_4':
        if (page_loaded!="7_4") {
        clearAllTabs();
        base = "./form7_burntclaybrick/4Economic_NonStructural/";
        doajax(base+"page1.php", "#tab_1");
        page_loaded = "7_4";
      }  
        break;
        
    case 'overview':
    clearAllTabs();
    doajax("./gen/page1.php", '#tab_1');  
    break;  
    }
  }
  function doajax(page_url, element) {
    $.ajax({
      url: page_url,
  dataType: "html",
  crossDomain: true,
  success:function(data){
    $(element).html(data);
  }
});
  }
  function addtab(number) {
    $('#tabs_ctrl').append($('<li><a id="open_'+number+'" href="#tab_'+number+'" data-toggle="tab">Page '+number+'</a></li>'));
    $('#tabs_cnt').append($('<div class="tab-pane" id="tab_'+number+'"></div>'));

  }
  function openTab(number) {
    // $('#open_2').click();
    $('a[href="#tab_'+number+'"]').trigger("click");
    // window.location = "#tab_2"
  }
  function clearAllTabs() {
$('.nav-tabs-custom').html('<ul id="tabs_ctrl" class="nav nav-tabs"><li class="active"><a href="#tab_1" data-toggle="tab">Page 1</a></li></ul><div id="tabs_cnt" class="tab-content"><div class="tab-pane active" id="tab_1"></div>');
  }
  </script>
  <script>
var score = 0;
var section;
    var scores = [0, 0, 0, 0, 0, 0];
    var formvals = {
        "1_3": [0, -10, -10, -5, -5, -5],
        "1_4": [0, -10, -10]

    }
console.log(page_loaded);
function show() {
  // alert('hello');
    score = 0;
    for(var i=1; i<scores.length; i++) {
        score += scores[i];
    }
    // console.log(score);
    window.location="./results.php?score="+score;
}
</script>
<cfoutput>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
</cfoutput> 
<script type="text/javascript">

function zone(){
    window.setTimeout("zone1()", 4000);
}
function zone1(){
    longitude = document.getElementById("latbox").value;
    latitude = document.getElementById("lngbox").value;
    if((longitude >= 34.81 && longitude <=37.81)&&(latitude>=71.62 && latitude<=80.76))
    {
      zo = 4;
    }
    else if((longitude >= 33.42 && longitude <=34.49)&&(latitude>=73.9 && latitude<=77.7))
    {
      zo = 4;
    }
    else if((longitude >= 33.51 && longitude <=34.54)&&(latitude>=73.9 && latitude<=75.29))
    {
      zo = 5;
    }
    else if((longitude >= 33.51 && longitude <=34.68)&&(latitude>=75.29 && latitude<=80.76))
    {
      zo = 4;
    }
    else if((longitude >= 32.74 && longitude <=33.42)&&(latitude>=71.62 && latitude<=80.79))
    {
      zo = 4;
    }
    else if((longitude >= 30.95 && longitude <=32.61)&&(latitude>=71.62 && latitude<=75.54))
    {
      zo = 4;
    }
    else if((longitude >= 30.97 && longitude <=32.77)&&(latitude>=75.54 && latitude<=77.66))
    {
      zo = 5;
    }
    else if((longitude >= 30.97 && longitude <=32.69)&&(latitude>=77.66 && latitude<=78.75))
    {
      zo = 4;
    }
    else if((longitude >= 31.71 && longitude <=32.72)&&(latitude>=78.72 && latitude<=81.12))
    {
      zo = 4;
    }
    else if((longitude >= 29.31 && longitude <=31.74)&&(latitude>=78.72 && latitude<=81.09))
    {
      zo = 5;
    }
    else if((longitude >= 28.93 && longitude <=30.84)&&(latitude>=71.73 && latitude<=76.16))
    {
      zo = 3;
    }
    else if((longitude >= 27.19 && longitude <=30.86)&&(latitude>=76.16 && latitude<=77.06))
    {
      zo = 4;
    }
    else if((longitude >= 29.39 && longitude <=30.92)&&(latitude>=77.01 && latitude<=78.75))
    {
      zo = 4;
    }
    else if((longitude >= 27.41 && longitude <=29.34)&&(latitude>=77.09 && latitude<=81.14))
    {
      zo = 4;
    }
    else if((longitude >= 27.3 && longitude <=29.31)&&(latitude>=81.12 && latitude<=84.98))
    {
      zo = 4;
    }
    else if((longitude >= 23.38 && longitude <=31.76)&&(latitude>=88.99 && latitude<=97.81))
    {
      zo = 5;
    }
    else if((longitude >= 25.56 && longitude <=29.26)&&(latitude>=87.62 && latitude<=89.31))
    {
      zo = 4;
    }
    else if((longitude >= 26.24 && longitude <=27.49)&&(latitude>=84.98 && latitude<=87.84))
    {
      zo = 5;
    }
    else if((longitude >= 25.62 && longitude <=27.27)&&(latitude>=82.1 && latitude<=85.01))
    {
      zo = 4;
    }
    else if((longitude >= 25.77 && longitude <=27.19)&&(latitude>=76.22 && latitude<=82.07))
    {
      zo = 3;
    }
    else if((longitude >= 27.27 && longitude <=28.93)&&(latitude>=73.41 && latitude<=75.67))
    {
      zo = 2;
    }
    else if((longitude >= 27.22 && longitude <=29.04)&&(latitude>=69.03&& latitude<=73.44))
    {
      zo = 3;
    }
    else if((longitude >= 27.22 && longitude <=28.93)&&(latitude>=75.65 && latitude<=76.24))
    {
      zo = 3;
    }
    else if((longitude >= 24.79 && longitude <=27.24)&&(latitude>=69.06 && latitude<=72.32))
    {
      zo = 3;
    }
    else if((longitude >= 25.69 && longitude <=27.91)&&(latitude>=72.32 && latitude<=76.27))
    {
      zo = 2;
    }
    else if((longitude >= 24.82 && longitude <=25.58)&&(latitude>=72.3 && latitude<=82.15))
    {
      zo = 2;
    }
    else if((longitude >= 24.74 && longitude <=25.8)&&(latitude>=82.1 && latitude<=84.98))
    {
      zo = 3;
    }
    else if((longitude >= 25.12 && longitude <=26.29)&&(latitude>=85.01 && latitude<=87.76))
    {
      zo = 4;
    }
    else if((longitude >= 23.81 && longitude <=25.54)&&(latitude>=87.79 && latitude<=89.42))
    {
      zo = 3;
    }
    else if((longitude >= 24.69 && longitude <=25.15)&&(latitude>=85.04 && latitude<=87.76))
    {
      zo = 3;
    }
    else if((longitude >= 23.79 && longitude <=24.79)&&(latitude>=81.25 && latitude<=87.79))
    {
      zo = 3;
    }
    else if((longitude >= 24.09 && longitude <=24.69)&&(latitude>=73.44 && latitude<=81.28))
    {
      zo = 2;
    }
    else if((longitude >= 21.85 && longitude <=24.74)&&(latitude>=72.32 && latitude<=73.58))
    {
      zo = 3;
    }
    else if((longitude >= 21.94 && longitude <=24.79)&&(latitude>=71.18 && latitude<=72.32))
    {
      zo = 4;
    }
    else if((longitude >= 21.48 && longitude <=24.2)&&(latitude>=67.81 && latitude<=71.1))
    {
      zo = 5;
    }
    else if((longitude >= 21.88 && longitude <=23.9)&&(latitude>=73.55 && latitude<=74.12))
    {
      zo = 3;
    }
    else if((longitude >= 23 && longitude <=23.95)&&(latitude>=74.01 && latitude<=77.74))
    {
      zo = 2;
    }
    else if((longitude >= 21.88 && longitude <=22.34)&&(latitude>=68.49 && latitude<=71.1))
    {
      zo = 4;
    }
    else if((longitude >= 23.08 && longitude <=24)&&(latitude>=77.71 && latitude<=79.67))
    {
      zo = 2;
    }
    else if((longitude >= 23.02 && longitude <=24.11)&&(latitude>=79.62 && latitude<=83.54))
    {
      zo = 3;
    }
    else if((longitude >= 21.55 && longitude <=24)&&(latitude>=83.46 && latitude<=87.32))
    {
      zo = 2;
    }
    else if((longitude >= 21.47 && longitude <=23.79)&&(latitude>=87.27 && latitude<=88.17))
    {
      zo = 3;
    }
    else if((longitude >= 22.32 && longitude <=23.13)&&(latitude>=88.2 && latitude<=89.77))
    {
      zo = 4;
    }
    else if((longitude >= 23.21 && longitude <=23.76)&&(latitude>=88.17 && latitude<=89.47))
    {
      zo = 4;
    }
    else if((longitude >= 21.8 && longitude <=23.05)&&(latitude>=79.67 && latitude<=83.54))
    {
      zo = 2;
    }
    else if((longitude >= 22.02 && longitude <=22.89)&&(latitude>=74.07 && latitude<=79.76))
    {
      zo = 3;
    }
    else if((longitude >= 20.87 && longitude <=21.72)&&(latitude>=68.46 && latitude<=79.73))
    {
      zo = 3;
    }
    else if((longitude >= 20.03 && longitude <=21.99)&&(latitude>=79.76 && latitude<=85.19))
    {
      zo = 2;
    }
    else if((longitude >= 19.92 && longitude <=21.64)&&(latitude>=85.8 && latitude<=88.17))
    {
      zo = 3;
    }
    else if((longitude >= 17.33 && longitude <=20.11)&&(latitude>=81.23 && latitude<=86.29))
    {
      zo = 2;
    }
    else if((longitude >= 17.42 && longitude <=20.11)&&(latitude>=78.94 && latitude<=81.39))
    {
      zo = 3;
    }
    else if((longitude >= 17.39 && longitude <=20.08)&&(latitude>=76.93 && latitude<=79.08))
    {
      zo = 2;
    }
    else if((longitude >= 20.14 && longitude <=20.63)&&(latitude>=74.77 && latitude<=79.78))
    {
      zo = 2;
    }
    else if((longitude >= 20 && longitude <=20.47)&&(latitude>=72.24 && latitude<=74.77))
    {
      zo = 3;
    }
    else if((longitude >= 18.31 && longitude <=19.76)&&(latitude>=72.22 && latitude<=74.96))
    {
      zo = 3;
    }
    else if((longitude >= 18.29 && longitude <=20)&&(latitude>=74.8 && latitude<=77.12))
    {
      zo = 2;
    }
    else if((longitude >= 17.39 && longitude <=18.18)&&(latitude>=72.22 && latitude<=74.23))
    {
      zo = 3;
    }
    else if((longitude >= 16.46 && longitude <=18.26)&&(latitude>=72.65 && latitude<=74.18))
    {
      zo = 4;
    }
    else if((longitude >= 16.52 && longitude <=17.39)&&(latitude>=74.18 && latitude<=76.79))
    {
      zo = 3;
    }
    else if((longitude >= 15.07 && longitude <=17.39)&&(latitude>=79.96 && latitude<=84.11))
    {
      zo = 3;
    }
    else if((longitude >= 15.16 && longitude <=17.39)&&(latitude>=76.76 && latitude<=79.812))
    {
      zo = 2;
    }
    else if((longitude >= 15.16 && longitude <=16.46)&&(latitude>=75.62 && latitude<=76.79))
    {
      zo = 2;
    }
    else if((longitude >= 15.16 && longitude <=16.46)&&(latitude>=72.73 && latitude<=75.65))
    {
      zo = 3;
    }
    else if((longitude >= 12.43 && longitude <=15.13)&&(latitude>=72.87 && latitude<=75.43))
    {
      zo = 3;
    }
    else if((longitude >= 12.38 && longitude <=15.13)&&(latitude>=75.32 && latitude<=78.2))
    {
      zo = 2;
    }
    else if((longitude >= 13.41 && longitude <=15.13)&&(latitude>=78.29 && latitude<=79.1))
    {
      zo = 2;
    }
    else if((longitude >= 12.6 && longitude <=15.1)&&(latitude>=79.13 && latitude<=81.8))
    {
      zo = 3;
    }
    else if((longitude >= 11.21 && longitude <=12.57)&&(latitude>=79.05 && latitude<=80.52))
    {
      zo = 2;
    }
    else if((longitude >= 11.24 && longitude <=13.36)&&(latitude>=78.23 && latitude<=79.08))
    {
      zo = 3;
    }
    else if((longitude >= 11.18 && longitude <=12.35)&&(latitude>=75.45 && latitude<=78.26))
    {
      zo = 2;
    }
    else if((longitude >= 7.43 && longitude <=12.33)&&(latitude>=70.39 && latitude<=75.73))
    {
      zo = 3;
    }
    else if((longitude >= 7.64 && longitude <=11.18)&&(latitude>=75.48 && latitude<=77.63))
    {
      zo = 3;
    }
    else if((longitude >= 7.7 && longitude <=11.16)&&(latitude>=77.63 && latitude<=80.46))
    {
      zo = 2;
    }
    else if((longitude >= 8.35 && longitude <=15.54)&&(latitude>=93.37 && latitude<=96.61))
    {
      zo = 5;
    }
    else
    {
      zo = 6;
    }
    var arrayzone = [" ", "I", "II", "III", "IV", "V", "VI"]
  document.getElementById("zone").innerHTML = "<big style='color: red;'>You are in seismic zone: "+arrayzone[zo]+"</big>";
  }
</script>
<script>
  var myLatlng;
  var opt = 1;
  var longitude,latitude;
myLatlng = new google.maps.LatLng(28.6139, 77.2090);
  function getLocation() {
      if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition);
      } else {
          x.innerHTML = "Geolocation is not supported by this browser.";
      }
  }
  function showPosition(position) {
      document.getElementById('latbox').value = position.coords.latitude;
      document.getElementById('lngbox').value = position.coords.longitude;
      myLatlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
      initialize();
  }
  function giveresultdelay(){
    setTimeout("giveresult()",4000);
  }
  function giveresult(){
    var lng = document.getElementById('lngbox').value;
    var lat = document.getElementById('latbox').value;
    //alert(lng);
    //alert(lat);
  }
  function initialize1(){
    var defaultBounds = new google.maps.LatLngBounds(
      new google.maps.LatLng(17.3700,78.4800)
      );
    var input1 = document.getElementById('searchTextField');
    var options = {
      bounds: defaultBounds,
      componentRestrictions: {country: 'in'}
    };
          var autocomplete = new google.maps.places.Autocomplete(input1, options);
          google.maps.event.addListener(autocomplete, 'place_changed', function () {
          var place = autocomplete.getPlace();
          var longi,lat,zo;   
                document.getElementById('latbox').value = place.geometry.location.lat();
          document.getElementById('lngbox').value = place.geometry.location.lng();
                zone();
                myLatlng = new google.maps.LatLng(place.geometry.location.lat(), place.geometry.location.lng());
          initialize();
          });
  }
  google.maps.event.addDomListener(window, 'load', initialize1);

    var map = null;
    var marker = null;

    // popup window for pin, if in use
    var infowindow = new google.maps.InfoWindow({ 
        size: new google.maps.Size(150,50)
        });
 
    function createMarker(latlng, name, html) {

    var contentString = html;

    var marker = new google.maps.Marker({
        position: latlng,
        map: map,
        zIndex: Math.round(latlng.lat()*-100000)<<5
        });

    google.maps.event.addListener(marker, 'click', function() {
        infowindow.setContent(contentString); 
        infowindow.open(map,marker);
        });

    google.maps.event.trigger(marker, 'click');    
    return marker;

}

function initialize() {

    // the location of the initial pin

    // create the map
    var myOptions = {
        zoom: 4,
        center: myLatlng,
        mapTypeControl: true,
        mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
        navigationControl: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }

    map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

    // establish the initial marker/pin
    var image = 'images/marker.png';  
    marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      icon: image,
      title:"Property Location"
    });

    // close popup window
    google.maps.event.addListener(map, 'click', function() {
        infowindow.close();
        });

    // removing old markers/pins
    google.maps.event.addListener(map, 'click', function(event) {
        //call function to create marker
         if (marker) {
            marker.setMap(null);
            marker = null;
         }

        var image = 'images/marker.png';
        var myLatLng = event.latLng ;
        marker = new google.maps.Marker({   
            position: myLatLng,
            map: map,
            icon: image,
            title:"Property Location"
        });
 
        formlat = document.getElementById("latbox").value = event.latLng.lat();
        formlng = document.getElementById("lngbox").value = event.latLng.lng();

    });

}
initialize();
</script> 
</html>