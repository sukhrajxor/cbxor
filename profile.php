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
	   <div class="logo" style="display:block"><span class="theme_color">XOR</span> SuperAdmin</div>
      <div class="small_logo" style="display:none"><img src="images/s-logo.png" width="50" height="47" alt="s-logo" /> <img src="images/r-logo.png" width="122" height="20" alt="r-logo" /></div>
    </div> 	   <!--\\\\\\\ brand end \\\\\\-->
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
          <li><a href="javascript:void(0);"><i class="fa fa-home"></i> DASHBOARD <span class="left_nav_pointer"></span> <span class="plus"><i class="fa fa-plus"></i></span> </a>
            <ul>
              <li> <a href="index.php" class="left_nav_sub_active"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Dashboard</b> </a> </li>
              <li> <a href="settings.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Settings</b> </a> </li>
              <li> <a href="layouts.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Layouts</b> </a> </li>
              <li> <a href="themes.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Themes</b> </a> </li>
              <li> <a href="widgets.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Widgets</b> </a> </li>
              <li> <a href="animations.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Animations</b> </a> </li>
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
          <li class="left_nav_active theme_border"> <a href="javascript:void(0);"> <i class="fa fa-glass"></i> EXTRA <span class="plus"><i class="fa fa-plus"></i></span></a>
            <ul class="opened" style="display:block">
              <li> <a href="timeline.php"> <span>&nbsp;</span> <i class="fa fa-circle"></i> <b>Timeline</b> </a> </li>
              <li> <a href="profile.php"> <span>&nbsp;</span> <i class="fa fa-circle theme_color"></i> <b class="theme_color">Profile</b> </a> </li>
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
          <h1>Profile</h1>
          <h2 class="">Subtitle goes here...</h2>
        </div>
        <div class="pull-right">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">EXTRA </a></li>
            <li class="active">Profile</li>
          </ol>
        </div>
      </div>
      <div class="container clear_both padding_fix">
        <!--\\\\\\\ container  start \\\\\\-->
        <div class="page-content">
          <div class="row">
            <div class="col-md-4">
              <div class="profile_bg">
                <div class="user-profile-sidebar">
                  <div class="row">
                    <div class="col-md-4"><img src="images/pro.png" /></div>
                    <div class="col-md-8">
                      <div class="user-identity">
                        <h4><strong>John Doe</strong></h4>
                        <p><i class="fa fa-map-marker"></i> Riaxe Systems Pvt</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="account-status-data">
                  <div class="row">
                    <div class="col-md-4">
                      <h5><strong>2,173</strong><br/>
                        Posts</h5>
                    </div>
                    <div class="col-md-4">
                      <h5><strong>14</strong><br/>
                        Following</h5>
                    </div>
                    <div class="col-md-4">
                      <h5><strong>100</strong><br/>
                        Followers</h5>
                    </div>
                  </div>
                </div>
                <div class="user-button">
                  <div class="row">
                    <div class="col-sm-6">
                      <button type="button" class=" btn btn-primary btn-rounded"><i class="fa fa-envelope"></i> Send Message</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="button" class="btn btn-default btn-rounded"><i class="fa fa-user"></i> Add as friend</button>
                    </div>
                  </div>
                </div>
                <div> <small class="">about me</small>
                  <p>Artist</p>
                  <small class="">info</small>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                  <div class="line"></div>
                  <p class="m-t-sm"> </p>
                </div>
                <h6><strong >CONNECTION</strong></h6>
                <div class="">
                  <ul class="social_icons ">
                    <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
              <!--/block-web-->
              <section class="panel panel-default ">
                <form >
                  <textarea placeholder="What are you doing..." rows="3" class="form-control no-border profile_form" style="width:414px;"></textarea>
                </form>
                <footer class="profile_form">
                  <button class="btn btn-info pull-right btn-sm">POST</button>
                  <ul class="nav nav-pills nav-sm">
                    <li><a href="#"><i class="fa fa-camera text-muted"></i></a></li>
                    <li><a href="#"><i class="fa fa-video-camera text-muted"></i></a></li>
                  </ul>
                </footer>
              </section>
              <section class="panel panel-default profile_bg">
                <h4 class="font-thin padder">Latest Tweets</h4>
                <ul class="profile_list">
                  <li class="profile_list-item">
                    <p>Wellcome <a class="text-info" href="#">@Drew Wllon</a> and play this web application template, have fun1 </p>
                    <small class="tweets"><i class="fa fa-clock-o"></i> 2 minuts ago</small> </li>
                  <li class="profile_list-item">
                    <p>Morbi nec <a class="text-info" href="#">@Jonathan George</a> nunc condimentum ipsum dolor sit amet, consectetur</p>
                    <small class="tweets"><i class="fa fa-clock-o"></i> 1 hour ago</small> </li>
                  <li class="profile_list-item">
                    <p><a class="text-info" href="#">@Josh Long</a> Vestibulum ullamcorper sodales nisi nec adipiscing elit. </p>
                    <small class="tweets"><i class="fa fa-clock-o"></i> 2 hours ago</small> </li>
                </ul>
              </section>
              <section class="panel ">
                <div class="panel-body"> <a class=" pull-left m-r" href="#"><img src="images/pro.png" /></a> <a class="text-info" href="#">@Mike Mcalidek <i class="fa fa-twitter"></i></a> <br/>
                  <small class="">2,415 followers / 225 tweets</small> <br/>
                  <a class="btn btn-xs btn-success m-t-xs pull-right" href="#">Follow</a> </div>
              </section>
            </div>
            <!--/col-md-4-->
            <div class="col-md-8">
              <div class="block-web full">
                <ul class="nav nav-tabs nav-justified nav_bg">
                  <li class="active"><a href="#about" data-toggle="tab"><i class="fa fa-user"></i> About</a></li>
                  <li class=""><a href="#edit-profile" data-toggle="tab"><i class="fa fa-pencil"></i> Edit</a></li>
                  <li class=""><a href="#user-activities" data-toggle="tab"><i class="fa fa-laptop"></i> Activities</a></li>
                  <li class=""><a href="#mymessage" data-toggle="tab"><i class="fa fa-envelope"></i> Message</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane animated fadeInRight active" id="about">
                    <div class="user-profile-content">
                      <h5><strong>ABOUT</strong> ME</h5>
                      <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </p>
                      <hr>
                      <div class="row">
                        <div class="col-sm-6">
                          <h5><strong>CONTACT</strong> ME</h5>
                          <address>
                          <strong>Phone</strong><br>
                          <abbr title="Phone">+91 354 123 4567</abbr>
                          </address>
                          <address>
                          <strong>Email</strong><br>
                          <a href="mailto:#">first.last@example.com</a>
                          </address>
                          <address>
                          <strong>Website</strong><br>
                          <a href="http://riaxe.com">http://riaxe.com</a>
                          </address>
                        </div>
                        <div class="col-sm-6">
                          <h5><strong>MY</strong> SKILLS</h5>
                          <p>UI Design</p>
                          <p>Clean and Modern Web Design</p>
                          <p>PHP and MySQL Programming</p>
                          <p>Vector Design</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane animated fadeInRight" id="edit-profile">
                    <div class="user-profile-content">
                      <form role="form">
                        <div class="form-group">
                          <label for="FullName">Full Name</label>
                          <input type="text" class="form-control" id="FullName" value="John Doe">
                        </div>
                        <div class="form-group">
                          <label for="Email">Email</label>
                          <input type="email" class="form-control" id="Email" value="first.last@example.com">
                        </div>
                        <div class="form-group">
                          <label for="Username">Username</label>
                          <input type="text" class="form-control" id="Username" value="john">
                        </div>
                        <div class="form-group">
                          <label for="Password">Password</label>
                          <input type="password" class="form-control" id="Password" placeholder="6 - 15 Characters">
                        </div>
                        <div class="form-group">
                          <label for="RePassword">Re-Password</label>
                          <input type="password" class="form-control" id="RePassword" placeholder="6 - 15 Characters">
                        </div>
                        <div class="form-group">
                          <label for="AboutMe">About Me</label>
                          <textarea class="form-control" id="AboutMe" style="height: 125px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                      </form>
                    </div>
                  </div>
                  <div class="tab-pane" id="user-activities">
                    <ul class="media-list">
                      <li class="media"> <a href="#">
                        <p><strong>John Doe</strong> Uploaded a photo <strong>"DSC000254.jpg"</strong> <br>
                          <i>2 minutes ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Imran Tahir</strong> Created an photo album <strong>"Indonesia Tourism"</strong> <br>
                          <i>8 minutes ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Colin Munro</strong> Posted an article <strong>"London never ending Asia"</strong> <br>
                          <i>an hour ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Corey Anderson</strong> Added 3 products <br>
                          <i>3 hours ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Morne Morkel</strong> Send you a message <strong>"Lorem ipsum dolor..."</strong> <br>
                          <i>12 hours ago</i></p>
                        </a> </li>
                      <li class="media"> <a href="#">
                        <p><strong>Imran Tahir</strong> Updated his avatar <br>
                          <i>Yesterday</i></p>
                        </a> </li>
                    </ul>
                  </div>
                  <div class="tab-pane" id="mymessage">
                    <ul class="media-list">
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Tim Southee</a> <small>Yesterday at 04:00 AM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Kane Williamson</a> <small>January 17, 2014 05:35 PM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Lonwabo Tsotsobe</a> <small>January 17, 2014 05:35 PM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">Dale Steyn</a> <small>January 17, 2014 05:35 PM</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                      <li class="media"> <a class="pull-left" href="#"><img src="images/gg.png" /></a>
                        <div class="media-body">
                          <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--/tab-content-->
              </div>
              <!--/block-web-->
            </div>
            <!--/col-md-8-->
          </div>
          <!--/row-->
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
<script src="js/jPushMenu.js"></script> 
<script src="js/side-chats.js"></script>
</body>
</html>
