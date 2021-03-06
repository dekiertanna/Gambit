<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ZTW Projekt Organiser</title>

    <!-- Bootstrap Core CSS -->

    <?php echo link_tag('css/bootstrap.css'); ?>
    <!-- Custom CSS -->
  
    <?php echo link_tag('css/sb-admin-2.css'); ?>

 

    <!-- Custom Fonts -->
 
   
      <?php echo link_tag('css/style.css'); ?>
	  <script src="js/modernizr.js"></script> <!-- Modernizr -->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top"  style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">ZTW Organiser</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <p class="g_icon g_icon-envelope "></p> <p class="g_icon g_icon-circle-arrow-down"></p>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <p>John Smith</p>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>John Smith</p>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>John Smith</p>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <p>Read All Messages</p>
                                <p class="g_icon g_icon-circle-arrow-right"></p>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <p class="g_icon g_icon-tasks "></p> <p class="g_icon g_icon-circle-arrow-down"></p>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <p>Task 1</p>
                                        <span class="pull-right text-muted">40% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <p>Task 2</p>
                                        <span class="pull-right text-muted">20% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <p>Task 3</p>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <p>Task 4</p>
                                        <span class="pull-right text-muted">80% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <p>See All Tasks</p>
                                <p class="g_icon g_icon-circle-arrow-right"></p>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <p class="g_icon g_icon-bell "></p> <p class="g_icon g_icon-circle-arrow-down"></p>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <p class="g_icon g_icon-comment "></p> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>                     
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p class="g_icon g_icon-envelope "></p> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p class="g_icon g_icon-tasks "></p> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p class="g_icon g_icon-upload "></p> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <p>See All Alerts</p>
                                <p class="g_icon g_icon-circle-arrow-right"></p>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <p class="g_icon g_icon-user "></p> <p class="g_icon g_icon-circle-arrow-down"></p>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><p class="g_icon g_icon-user "></p> User Profile</a>
                        </li>
                        <li><a href="#"><p class="g_icon g_icon-edit "></p> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><p class="g_icon g_icon-log-out "></p> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

           <nav class="navbar navbar-inverse sidebar" >
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Brand</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Dashboard<span style="font-size:16px;" class="pull-right hidden-xs showopacity g_icon g_icon-dashboard"></span></a></li>
				<li ><a href="<?php echo  site_url('index.php/Calendar/index')?>">Kalendarz<span style="font-size:16px;" class="pull-right hidden-xs showopacity g_icon g_icon-calendar"></span></a></li>
				<li ><a href="#">Kontakty<span style="font-size:16px;" class="pull-right hidden-xs showopacity g_icon g_icon-user"></span></a></li>
				
				<li><a href="#">Notatki<span style="font-size:16px;" class="pull-right hidden-xs showopacity g_icon g_icon-list"></span></a></li>
			</ul>
		</div>
	</div>
</nav>

          
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
            <div class="row">
                <div class="col-lg-8">
                    
                 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Responsive Timeline
                        </div>
                       
                        
                            <section id="cd-timeline" class="cd-container">
	                          	<div class="cd-timeline-block">
		                          	<div class="cd-timeline-img cd-picture">
		                            		<img src="../img/cd-icon-picture.svg" alt="Picture">
			                          </div> <!-- cd-timeline-img -->

			                            <div class="cd-timeline-content">
                                  
			                          	  <h2>Title of section 1</h2>
			                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			                              <a href="#0" class="cd-read-more">Read more</a>
			                              <span class="cd-date">Jan 14</span>
		                              </div> <!-- cd-timeline-content -->
                                  
		                          </div> <!-- cd-timeline-block -->

	                            <div class="cd-timeline-block">
                              
			                              <div class="cd-timeline-img cd-movie">
			                              	<img src="../img/cd-icon-movie.svg" alt="Movie">
			                              </div> <!-- cd-timeline-img -->

		                                <div class="cd-timeline-content">
			                              	<h2>Title of section 2</h2>
				                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde?</p>
				                              <a href="#0" class="cd-read-more">Read more</a>
				                              <span class="cd-date">Jan 18</span>
			                              </div> <!-- cd-timeline-content -->
                                    
	                            </div> <!-- cd-timeline-block -->

	                            <div class="cd-timeline-block">
                              
		                                <div class="cd-timeline-img cd-picture">
			                         	    <img src="../img/cd-icon-picture.svg" alt="Picture">
		                                 </div> <!-- cd-timeline-img -->

		                                <div class="cd-timeline-content">
				                                 <h2>Title of section 3</h2>
				                                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum voluptatem doloremque dolorem ipsam quae rerum quis. Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident pariatur temporibus quia eos repellat consequuntur perferendis enim amet quae quasi repudiandae sed quod veniam dolore possimus rem voluptatum eveniet eligendi quis fugiat aliquam sunt similique aut adipisci.</p>
				                                 <a href="#0" class="cd-read-more">Read more</a>
			                                   	<span class="cd-date">Jan 24</span>
		                                </div> <!-- cd-timeline-content -->
                                    
	                            </div> <!-- cd-timeline-block -->

	                            <div class="cd-timeline-block">
                              
		                               	<div class="cd-timeline-img cd-location">
			                              	<img src="../img/cd-icon-location.svg" alt="Location">
		                               	</div> <!-- cd-timeline-img -->

			                              <div class="cd-timeline-content">
			                              	<h2>Title of section 4</h2>
			                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? Iste voluptatibus minus veritatis qui ut.</p>
			                                <a href="#0" class="cd-read-more">Read more</a>
				                              <span class="cd-date">Feb 14</span>
		                                  </div> <!-- cd-timeline-content -->
                                      
	                            </div> <!-- cd-timeline-block -->

                              <div class="cd-timeline-block">
                              
                                  <div class="cd-timeline-img cd-location">
                                  <img src="../img/cd-icon-location.svg" alt="Location">
                                  </div> <!-- cd-timeline-img -->
                                
                                  <div class="cd-timeline-content">
                                  <h2>Title of section 5</h2>
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto, optio, dolorum provident rerum.</p>
                                  <a href="#0" class="cd-read-more">Read more</a>
                                  <span class="cd-date">Feb 18</span>
                                  </div> <!-- cd-timeline-content -->
                                  
                              </div> <!-- cd-timeline-block -->
                              
                              <div class="cd-timeline-block">
                                  <div class="cd-timeline-img cd-movie">
                                       <img src="../img/cd-icon-movie.svg" alt="Movie">
                                  </div> <!-- cd-timeline-img -->
                                  
                                  <div class="cd-timeline-content">
                                       <h2>Final Section</h2>
                                       <p>This is the content of the last section</p>
                                       <span class="cd-date">Feb 26</span>
                                  </div> <!-- cd-timeline-content -->
                              </div> <!-- cd-timeline-block -->
                              
                          </section> <!-- cd-timeline -->
                       
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
             
                        <!-- /.panel-body -->
            </div>
            <!-- /.row -->
                   
          
            
                  
            
                   
            
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../js/main.js"></script> <!-- Resource jQuery -->
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/sb-admin-2.js"></script>

</body>

</html>
