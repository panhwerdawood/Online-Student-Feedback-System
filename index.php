<?php
session_start();
 require('dbconfig.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Online Student feedback System</title>
	
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="background:#590977" >
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php" style="color:#FFFFFF"> Online Student feedback System</a>
				
				
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
					 <li style="color:#FFFFFF">
                        <a style="color:#FFFFFF" href="index.php">Home</a>
                    </li>
					<li><a style="color:#FFFFFF" href="index.php?info=registration">Student Registration</a></li>
					
					<li class="dropdown">
				        <a style="color:#FFFFFF" href="#" class="dropdown-toggle" data-toggle="dropdown" href="#">Login
				        <span class="caret"></span></a>
				        <ul class="dropdown-menu">          
				          <li><a href="index.php?info=login">Student</a></li>
						  <li><a href="index.php?info=faculty_login">Faculty</a></li> 
				          <li><a href="admin">Admin</a></li> 
				        </ul>
				    </li>

				    <li>
				        <a style="color:#FFFFFF" href="index.php?info=contact">Contact</a>
				    </li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<?php 
					@$info=$_GET['info'];
					if($info!="")
					{
											
						 if($info=="about")
						 {
						 include('about.php');
						 }
						
						
						
						

						 
						 else if($info=="contact")
						 {
						 include('contact.php');
						 }
						
						
						 
						 
						 else if($info=="login")
						 {
						 include('login.php');
						 }
						 
						  else if($info=="faculty_login")
						 {
						 include('faculty_login.php');
						 }
						 
						 
						 else if($info=="registration")
						 {
						 	include('registration.php');
						 }
					}
					else
					{
				?>
		<!-- slider start -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner">         
	
			 <div class="item active">
                <div class="fill" style="background-image:url('images/3.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
			
			
			
			
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
<!-- slider -->			
	
	
    <!-- Page Content -->
    <div class="container">

        <div class="row">
        	<div class="col-lg-12">
				<div class="col-sm-12" style="margin-top:60px;margin-bottom:80px">

					<h3 class="heading"><strong> ABOUT ONLINE STUDENT FEEDBACK SYSTEM</strong></h3>
					<div class="line-mf"></div>

					<br>
					<p class="description">
						 This online feedback system is a web-based system that provides a way for colleges/universities to allow students to give feedback for faculty online to improve their teaching. Students are required to give feedback using one standard feedback form. In this system the security is also maintained by the result of feedback is only visible to authentic user. This system helps teachers to improve their performance by analyzing the feedback given by students.
					</p>
	
				</div>
			
			
			
			
				<?php } ?>
            </div>
            
    </div>
    <!-- /.container -->
	
	<div class="navbar-fixed-bottom nav navbar-inverse text-center" style="padding:10px;height:40px;background:#590977">
		<span style="color:#FFFFFF">Copyright &copy; Online Student Feedback System</span>
	</div>
    <!-- jQuery -->
    <script src="css/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="css/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000//changes the speed
    })
    </script>

</body>

</html>
