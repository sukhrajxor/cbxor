<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ULTIMO Admin Dashboard Template</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/admin.css" rel="stylesheet" type="text/css" />
</head>
<body class="light_theme  fixed_header left_nav_fixed">
<div class="wrapper">
  <!--\\\\\\\ wrapper Start \\\\\\-->
  <div class="header_bar">
    <!--\\\\\\\ header Start \\\\\\-->
    <div class="brand">
      <!--\\\\\\\ brand Start \\\\\\-->
      <div class="logo" style="display:block"><span class="theme_color">ULTIMO</span> Admin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div>
    <!--\\\\\\\ brand end \\\\\\-->
    <div class="header_top_bar">
      <!--\\\\\\\ header top bar start \\\\\\-->
      <a href="javascript:void(0);" class="menutoggle"> <i class="fa fa-bars"></i> </a>
      <div class="top_left">
        <div class="top_left_menu">
          <ul>
            <li> <a href="javascript:void(0);"> <i class="fa fa-repeat"></i> </a> </li>
            <li> <a href="javascript:void(0);"> <i class="fa fa-th-large"></i> </a> </li>
          </ul>
        </div>
      </div>
      <a href="javascript:void(0);" class="add_user" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus-square"></i> <span> New Task</span> </a>
      <div class="top_right_bar">
        <div class="top_right">
          <div class="top_right_menu">
            <ul>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Tasks <span class="badge badge">8</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 7 pending tasks</p>
                  </li>
                  <li> <a href="task.php" class="task">
                    <div class="green_status task_height" style="width:80%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right green_label">80%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="yellow_status task_height" style="width:50%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right yellow_label">50%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="blue_status task_height" style="width:70%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right blue_label">70%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <a href="task.php" class="task">
                    <div class="red_status task_height" style="width:85%;"></div>
                    <div class="task_head"> <span class="pull-left">Task Heading</span> <span class="pull-right red_label">85%</span> </div>
                    <div class="task_detail">Task details goes here</div>
                    </a> </li>
                  <li> <span class="new"> <a href="task.php" class="pull_left">Create New</a> <a href="task.php" class="pull-right">View All</a> </span> </li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> Mail <span class="badge badge color_1">4</span> </a>
                <ul class="drop_down_task dropdown-menu">
                  <div class="top_pointer"></div>
                  <li>
                    <p class="number">You have 4 mails</p>
                  </li>
                      <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail red_color"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
                  <li> <a href="readmail.php" class="mail"> <span class="photo"><img src="images/user.png" /></span> <span class="subject"> <span class="from">sarat m</span> <span class="time">just now</span> </span> <span class="message">Hello,this is an example msg.</span> </a> </li>
              
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"> notification <span class="badge badge color_2">6</span> </a>
                <div class="notification_drop_down dropdown-menu">
                  <div class="top_pointer"></div>
                  <div class="box"> <a href="inbox.php"> <span class="block primery_6"> <i class="fa fa-envelope-o"></i> </span> <span class="block_text">Mailbox</span> </a> </div>
                  <div class="box"> <a href="calendar.php"> <span class="block primery_2"> <i class="fa fa-calendar-o"></i> </span> <span class="block_text">Calendar</span> </a> </div>
                  <div class="box"> <a href="maps.php"> <span class="block primery_4"> <i class="fa fa-map-marker"></i> </span> <span class="block_text">Map</span> </a> </div>
                  <div class="box"> <a href="todo.php"> <span class="block primery_3"> <i class="fa fa-plane"></i> </span> <span class="block_text">To-Do</span> </a> </div>
                  <div class="box"> <a href="task.php"> <span class="block primery_5"> <i class="fa fa-picture-o"></i> </span> <span class="block_text">Tasks</span> </a> </div>
                  <div class="box"> <a href="timeline.php"> <span class="block primery_1"> <i class="fa fa-clock-o"></i> </span> <span class="block_text">Timeline</span> </a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="user_admin dropdown"> <a href="javascript:void(0);" data-toggle="dropdown"><img src="images/user.png" /><span class="user_adminname">John Doe</span> <b class="caret"></b> </a>
          <ul class="dropdown-menu">
            <div class="top_pointer"></div>
            <li> <a href="profile.php"><i class="fa fa-user"></i> Profile</a> </li>
            <li> <a href="help.php"><i class="fa fa-question-circle"></i> Help</a> </li>
            <li> <a href="settings.php"><i class="fa fa-cog"></i> Setting </a></li>
            <li> <a href="login.php"><i class="fa fa-power-off"></i> Logout</a> </li>
          </ul>
        </div>
        <a href="javascript:;" class="toggle-menu menu-right push-body jPushMenuBtn rightbar-switch"><i class="fa fa-comment chat"></i></a>
      </div>
    </div>
    <!--\\\\\\\ header top bar end \\\\\\-->
  </div>
  <!--\\\\\\\ header end \\\\\\-->
  <div class="inner">
    <!--\\\\\\\ inner start \\\\\\-->
    <div class="left_nav">
      <!--\\\\\\\left_nav start \\\\\\-->
      <div class="search_bar"> <i class="fa fa-search"></i>
        <input name="" type="text" class="search" placeholder="Search Dashboard..." />
      </div>
      <div class="left_nav_slidebar">
        <ul>
          <li class="left_nav_active theme_border"><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul class="opened" style="display:block">
              <li> <a href="index.php" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dashboard</b> </a> </li>
              <li> <a href="settings.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li>
              <li> <a href="layouts.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Layouts</b> </a> </li>
              <li> <a href="themes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Themes</b> </a> </li>
              <li> <a href="widgets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Widgets</b> </a> </li>
              <li> <a href="animations.php"> <span>&nbsp;</span> <i class="fa fa-circle  theme_color"></i> <b class="theme_color">Animations</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-edit"></i> UI KIT <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="typography.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Typography</b> </a> </li>
              <li> <a href="buttons.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Buttons</b> </a> </li>
              <li> <a href="icons.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Icons</b> </a> </li>
              <li> <a href="grid.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Grid</b> </a> </li>
              
              <li> <a href="alert.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Alert & Notification</b> </a> </li>
              <li> <a href="tabs.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tabs & Accordion</b> </a> </li>
              <li> <a href="tree.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Tree View</b> </a> </li>
              <li> <a href="list.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>List Group</b> </a> </li>
              <li> <a href="portlets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Portlets</b> </a> </li>
              <li> <a href="general.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>General</b> </a> </li>
            </ul>
          </li>
          
          <li> <a href="javascript:void(0);"> <i class="fa fa-tasks"></i> Forms <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
                            <li> <a href="components.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Components</b> </a> </li>
              <li> <a href="validation.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Validation</b> </a> </li>
              <li> <a href="multi-upload.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Multi-upload</b> </a> </li>
              <li> <a href="other-forms.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Others</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-users icon"></i> APPS <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="todo.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>To-Do</b> </a> </li>
              <li> <a href="task.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Task</b> </a> </li>
              <li> <a href="notes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Notes</b> </a> </li>
              <li> <a href="media.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Media Manager</b> </a> </li>
              <li> <a href="calendar.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Calendar</b> </a> </li>
              <li> <a href="ticket.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Ticket Support</b> </a> </li>
              <li> <a href="invoice.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Invoice</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-envelope"></i> EMAIL <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="inbox.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Inbox</b> </a> </li>
              <li> <a href="compose.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Compose</b> </a> </li>
              <li> <a href="readmail.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Read Mail</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-folder-open-o"></i> PAGES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="login.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Login</b> </a> </li>
              <li> <a href="registration.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Registration</b> </a> </li>
              <li> <a href="lockscreen.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Lock Screen</b> </a> </li>
              <li> <a href="blankpage.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Blank Page</b> </a> </li>
              <li> <a href="404error.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>404 Error</b> </a> </li>
              <li> <a href="500error.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>500 Error</b> </a> </li>
              <li> <a href="search.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Search</b> </a> </li>
              <li> <a href="about.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>About</b> </a> </li>
              <li> <a href="contact.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-th"></i> TABLES <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="statictable.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Static Table</b> </a> </li>
              <li> <a href="datatable.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Data Table</b> </a> </li>
            </ul>
          </li>
          <li> <a href="javascript:void(0);"> <i class="fa fa-glass"></i> EXTRA <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul>
              <li> <a href="timeline.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Timeline</b> </a> </li>
              <li> <a href="profile.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Profile</b> </a> </li>
              <li> <a href="contactlist.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Contact List</b> </a> </li>
              <li> <a href="maps.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Maps</b> </a> </li>
              <li> <a href="gallery.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Gallery</b> </a> </li>
              <li> <a href="help.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Help</b> </a> </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <!--\\\\\\\left_nav end \\\\\\-->
    <div class="contentpanel">
      <!--\\\\\\\ contentpanel start\\\\\\-->
      <div class="pull-left breadcrumb_admin clear_both">
        <div class="pull-left page_title theme_color">
          <h1>Animation</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">DASHBOARD </a></li>
            <li class="active">Animation</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        
       
       
  
 
     
     <div class="row">
						<h3 class="animate-title">Attention Seekers</h3>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounce" class="effect-button">Bounce</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="pulse" class="effect-button">Pulse</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="flash" class="effect-button">Flash</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="shake" class="effect-button">Shake</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="swing" class="effect-button">Swing</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="tada" class="effect-button">Tada</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="wobble" class="effect-button">Wobble</div>
                      </div>
                      
						<h3 class="animate-title">Bouncing Entrances</h3>
                        
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceIn" class="effect-button">BounceIn</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceInDown" class="effect-button">BounceInDown</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceInLeft" class="effect-button">BounceInLeft</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceInRight" class="effect-button">BounceInRight</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceInUp" class="effect-button ">BounceInUp</div>
                      </div>
                      
						<h3 class="animate-title">Bouncing  Exits</h3>
                        
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceOut" class="effect-button">bounceOut</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceOutDown" class="effect-button">bounceOutDown</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceOutUp" class="effect-button">bounceOutUp</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceOutLeft" class="effect-button">bounceOutLeft</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="bounceOutRight" class="effect-button">bounceOutRight</div>
                      </div>

						<h3 class="animate-title">Fading Entrances</h3>
                     
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeIn" class="effect-button">Fade In</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInUp" class="effect-button">Fade In Up</div>
                      </div>
                      
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInDown" class="effect-button">Fade In Down</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInLeft" class="effect-button">Fade In Left</div>
                      </div>
                      
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInRight" class="effect-button">Fade In Right</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInUpBig" class="effect-button">Fade In Up Big</div>
                      </div>
                      
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInDownBig" class="effect-button">Fade In Down Big</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInLeftBig" class="effect-button">Fade In Left Big</div>
                      </div>
                      
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeInRightBig" class="effect-button">Fade In Right Big</div>
                      </div>
                      
                      <h3 class="animate-title">Fading Exits </h3>
                                        
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOut" class="effect-button">Fade Out</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutUp" class="effect-button">Fade Out Up</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutDown" class="effect-button">Fade Out Down</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutLeft" class="effect-button ">Fade Out Left</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutRight" class="effect-button ">Fade Out Right</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutUpBig" class="effect-button">Fade Out Up Big</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutDownBig" class="effect-button">Fade Out Down Big</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutLeftBig" class="effect-button ">Fade Out Left Big</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="fadeOutRightBig" class="effect-button ">Fade Out Right Big</div>
                      </div>
                      
                      	<h3 class="animate-title">Flippers </h3>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="flip" class="effect-button ">Flip</div>
                      </div>
                        
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="flipInX" class="effect-button ">Flip In X</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="flipOutX" class="effect-button ">Flip Out X</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="flipInY" class="effect-button ">Flip In Y</div>
                      </div>
                      
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="flipOutY" class="effect-button ">Flip Out Y</div>
                      </div>

                     <h3 class="animate-title">Lightspeed Specials </h3> 

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="lightSpeedIn" class="effect-button ">LightSpeed In</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="lightSpeedOut" class="effect-button ">LightSpeed Out</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="hinge" class="effect-button ">Hinge</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rollIn" class="effect-button ">Roll In</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rollOut" class="effect-button ">RollOut</div>
                      </div>


						<h3 class="animate-title">Rotating Entrances </h3> 

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateIn" class="effect-button ">Rotate In</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateInDownLeft" class="effect-button ">Rotate In Down Left</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateInDownRight" class="effect-button ">Rotate In Down Right</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateInUpLeft" class="effect-button ">Rotate In Up Left</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateInUpRight" class="effect-button ">Rotate In Up Right</div>
                      </div>
                      
						<h3 class="animate-title">Rotating Exits Sliders </h3> 

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateOut" class="effect-button ">Rotate Out</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateOutDownLeft" class="effect-button ">Rotate Out Down Left</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateOutDownRight" class="effect-button ">Rotate Out Down Right</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateOutUpLeft" class="effect-button ">Rotate Out Up Left</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="rotateOutUpRight" class="effect-button ">Rotate Out Up Right</div>
                      </div>
						<h3 class="animate-title">Sliders </h3> 

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="slideInDown" class="effect-button ">Slide In Down</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="slideInLeft" class="effect-button ">Slide In Left</div>
                      </div>

                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="slideInRight" class="effect-button ">Slide In Right</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="slideOutUp" class="effect-button ">Slide Out Up</div>
                      </div>
                      <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="slideOutLeft" class="effect-button ">Slide Out Left</div>
                      </div>
						 <div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
                        <div data-effect="slideOutRight" class="effect-button ">Slide Out Right</div>
                      </div>

                    </div>
     
        
        
        
       
        
        
        
      </div>
      <!--\\\\\\\ container  end \\\\\\-->
    </div>
    <!--\\\\\\\ content panel end \\\\\\-->
  </div>
  <!--\\\\\\\ inner end\\\\\\-->
</div>
<!--\\\\\\\ wrapper end\\\\\\-->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Compose New Task</h4>
      </div>
      <div class="modal-body"> content </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- sidebar chats -->
<nav class="atm-spmenu atm-spmenu-vertical atm-spmenu-right side-chat">
	<div class="header">
    <input type="text" class="form-control chat-search" placeholder=" Search">
  </div>
  <div href="#" class="sub-header">
    <div class="icon"><i class="fa fa-user"></i></div> <p>Online (4)</p>
  </div>
  <div class="content">
    <p class="title">Family</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Steven Smith</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> John Doe</a></li>
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Michael Smith</a></li>
      <li class="busy"><a href="#"><i class="fa fa-circle-o"></i> Chris Rogers</a></li>
    </ul>
    
    <p class="title">Friends</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li class="online"><a href="#"><i class="fa fa-circle-o"></i> Vernon Philander</a></li>
      <li class="outside"><a href="#"><i class="fa fa-circle-o"></i> Kyle Abbott</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Dean Elgar</a></li>
    </ul>   
    
    <p class="title">Work</p>
    <ul class="nav nav-pills nav-stacked contacts">
      <li><a href="#"><i class="fa fa-circle-o"></i> Dale Steyn</a></li>
      <li><a href="#"><i class="fa fa-circle-o"></i> Morne Morkel</a></li>
    </ul>
    
  </div>
  <div id="chat-box">
    <div class="header">
      <span>Richard Avedon</span>
      <a class="close"><i class="fa fa-times"></i></a>    </div>
    <div class="messages nano nscroller has-scrollbar">
      <div class="content" tabindex="0" style="right: -17px;">
        <ul class="conversation">
          <li class="odd">
            <p>Hi John, how are you?</p>
          </li>
          <li class="text-right">
            <p>Hello I am also fine</p>
          </li>
          <li class="odd">
            <p>Tell me what about you?</p>
          </li>
          <li class="text-right">
            <p>Sorry, I'm late... see you</p>
          </li>
          <li class="odd unread">
            <p>OK, call me later...</p>
          </li>
        </ul>
      </div>
    <div class="pane" style="display: none;"><div class="slider" style="height: 20px; top: 0px;"></div></div></div>
    <div class="chat-input">
      <div class="input-group">
        <input type="text" placeholder="Enter a message..." class="form-control">
        <span class="input-group-btn">
        <button class="btn btn-danger" type="button">Send</button>
        </span>      </div>
    </div>
  </div>
</nav>
<!-- /sidebar chats -->   















<div class="demo"><span id="demo-setting"><i class="fa fa-cog txt-color-blueDark"></i></span> <form><legend class="no-padding margin-bottom-10" style="color:#6e778c;">Layout Options</legend><section><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-header" name="subscription"><span>Fixed Header</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-fixed-navigation" name="terms"><span>Fixed Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-rigth-navigation" name="terms"><span>Right Navigation</span></label><label><input type="checkbox" class="checkbox style-0" id="smart-boxed-layout" name="terms"><span>Boxed Layout</span></label><span id="smart-bgimages" style="display: none;"></span></section><section><h6 class="margin-top-10 semi-bold margin-bottom-5">Clear Localstorage</h6><a id="reset-smart-widget" class="btn btn-xs btn-block btn-primary" href="javascript:void(0);"><i class="fa fa-refresh"></i> Factory Reset</a></section> <h6 class="margin-top-10 semi-bold margin-bottom-5">Ultimo Skins</h6><section id="smart-styles"><a style="background-color:#23262F;" class="btn btn-block btn-xs txt-color-white margin-right-5" id="dark_theme" href="javascript:void(0);"><i id="skin-checked" class="fa fa-check fa-fw"></i> Dark Theme</a><a style="background:#E35154;" class="btn btn-block btn-xs txt-color-white" id="red_thm" href="javascript:void(0);">Red Theme</a><a style="background:#34B077;" class="btn btn-xs btn-block txt-color-darken margin-top-5" id="green_thm" href="javascript:void(0);">Green Theme</a><a style="background:#56A5DB" class="btn btn-xs btn-block txt-color-white margin-top-5" data-skinlogo="img/logo-pale.png" id="blue_thm" href="javascript:void(0);">Blue Theme</a><a style="background:#9C6BAD" class="btn btn-xs btn-block txt-color-white margin-top-5" id="magento_thm" href="javascript:void(0);">Magento Theme</a><a style="background:#FFFFFF" class="btn btn-xs btn-block txt-color-black margin-top-5" id="light_theme" href="javascript:void(0);">Light Theme</a></section></form> </div>









<script src="js/jquery-2.1.0.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/common-script.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/script.min.js"></script>
<script src="js/animated.js" type="text/javascript"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48105801-1', 'creativico.com');
  ga('send', 'pageview');

</script>



<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>



</body>
</html>
