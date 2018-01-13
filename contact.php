<!DOCTYPE html>
<html lang="en">
	
<head>
	
	<meta charset="UTF-8">
	
	<!-- IE Edge Meta Tag -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Minified CSS -->
<!-- 	OPTION 1 - USE THE FOLLOWING LINK FOR THE CDN BOOTSTRAP -->
<!-- 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<!--OPTION 2 - Need to Download these following files for Local Bootstrap -->

	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css.map">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.css.map">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	
	<!-- My Stylesheet -->
	<link rel="stylesheet" href="css/style.css">


	<title>The Law Office of Shawna Mason</title>

	
</head>	



<body>
	
	<!-- 	NAVBAR - Responsive default bootstrap navbar -->

	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			         </button>
					<a class="navbar-brand hidden-md hidden-lg hidden-sm" href="home.html">shawna mason</a>
					<a class="navbar-brand hidden-xs" href="home.html">The Law Office of Shawna Mason</a>
				</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="home.html">Home</a></li>
							<li><a href="hours.php">Hours</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
							<li><a href="directions.html">Directions</a></li>
						</ul>
					</div>	
				</div>
			</div>
	</nav>
		

	
	<div class="container text-center">
		<div class="row"> <!-- HEADING ROW -->
				<div class="col-md-12">
					<div class="jumbotron">

						<h1>The Law Office of Shawna Mason</h1>
						<h3>1008 E. Geneva Rd.  Wheaton, IL 60187</h3>
					</div>
				</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-10">
				<form class="form-horizontal" role="form" method="post" action="contact-send.php">
					
					
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="name" autocorrect="off" class="form-control" id="name" name="name" placeholder="Full Name" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="phone" class="col-sm-2 control-label">Phone</label>
						<div class="col-sm-10">
							<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone Number" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" value="">
						</div>
					</div>
					
					<div class="form-group">
						<label for="comment" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" autocapitalize="sentences" rows="5" name="comment" id="comment"></textarea>
						</div>
					</div>
					
					 <div class="form-group">
					 	<div class="col-sm-10 col-sm-offset-2">
					 	<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
	        			</div>
	    			</div>
	    			
				    <div class="form-group">
				        <div class="col-sm-10 col-sm-offset-2">
				            <! Will be used to display an alert to the user>
				        </div>
				    </div>
					
					
				</form>
			</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="jumbotron text-center">
					<h4>For immediate assistance, please call 630.752.1410 or visit the office. <br />  Walk Ins are welcome Monday through Friday, 10 AM to 4 PM. <br /> Evenings and Weekends by appointment only.</h4>
				</div>
			</div>
		</div>
	</div>
	
	

	
	<nav class="navbar-default navbar-fixed-bottom bottom-navbar">
		<div class="container">
			<div class="navbar-header text-nowrap text-danger">
				<div class="bottom-navbar hidden-lg hidden-md hidden-sm">Call us today  <b>630.752.1410</b></div>
				<div class="bottom-navbar hidden-lg hidden-md hidden-xs">Call us today for a <strong>free</strong> consultation <b>630.752.1410</b>.</div>
				<div class="bottom-navbar hidden-lg hidden-sm hidden-xs">Call us today for a <strong>free</strong> consultation <b>630.752.1410</b>. Walk Ins Welcome. | Monday - Friday 10AM - 5PM</div>
				<div class="bottom-navbar hidden-md hidden-sm hidden-xs">Call us today for a <strong>free</strong> consultation <b>630.752.1410</b>. | Walk Ins Welcome. | Appointments Preferred | Monday - Friday 10AM - 5PM</div>
				
			</div>
      	</div>
	</nav>


	
<!--  BOTH - Use for both options -->
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- My Script -->		
	
	
<!-- 	OPTION 1 - USE THE FOLLOWING LINK FOR THE CDN BOOTSTRAP -->		

<!-- Minified JavaScript -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->



<!--OPTION 2 - Need to Download bootstrap for the following files -->
<script src="js/script.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/npm.js"></script>
</body>

</html>
