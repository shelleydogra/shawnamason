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
	
	<link rel="stylesheet" href="css/style.css">

	
	
	
	<!-- My Stylesheet -->
	
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
							<li><a href="hours.html">Hours</a></li>
							<li><a href="contact.html">Contact</a></li>
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
						
					</div>
				</div>
		</div>
	</div>
		
	<?php

date_default_timezone_set('Europe/Copenhagen');

// Runs the function
echo time_str();

function time_str() {

        if(IsHoliday())
        {
            return ClosedHoliday();
        }           

    $dow = date('D'); // Your "now" parameter is implied

    if ($dow == 'Sat' || $dow == 'Sun') {
        // weekend
        return Closed();
    }

        // Time in HHMM
        $hm = (int)date("Gi");

        switch(strtolower($dow)){
                case 'mon': //MONDAY
                    if ($hm >=    0 && $hm <  800) return Closed();
                    if ($hm >=  800 && $hm < 1100) return Open();
                    if ($hm >= 1100 && $hm < 1500) return OpenDelay();
                    if ($hm >= 1500 && $hm < 1600) return Open();
                    if ($hm >= 1600 && $hm < 2359) return Closed();
                    break;
                case 'tue': //TUESDAY
                    if ($hm >=    0 && $hm <  800) return Closed();
                    if ($hm >=  800 && $hm < 1100) return Open();
                    if ($hm >= 1100 && $hm < 1500) return OpenDelay();
                    if ($hm >= 1500 && $hm < 1600) return Open();
                    if ($hm >= 1600 && $hm < 2359) return Closed();
                    break;              
                case 'wed': //WEDNESDAY
                    if ($hm >=    0 && $hm <  800) return Closed();
                    if ($hm >=  800 && $hm < 1100) return Open();
                    if ($hm >= 1100 && $hm < 1500) return OpenDelay();
                    if ($hm >= 1500 && $hm < 1600) return Open();
                    if ($hm >= 1600 && $hm < 2359) return Closed();
                    break;              
                case 'thu': //THURSDAY
                    if ($hm >=    0 && $hm <  800) return Closed();
                    if ($hm >=  800 && $hm < 1100) return Open();
                    if ($hm >= 1100 && $hm < 1500) return OpenDelay();
                    if ($hm >= 1500 && $hm < 1600) return Open();
                    if ($hm >= 1600 && $hm < 2359) return Closed(); 
                    break;              
                case 'fri': //FRIDAY
                    if ($hm >=    0 && $hm <  800) return Closed();
                    if ($hm >=  800 && $hm < 1100) return Open();
                    if ($hm >= 1100 && $hm < 1500) return OpenDelay();
                    if ($hm >= 1500 && $hm < 1600) return Open();
                    if ($hm >= 1600 && $hm < 2359) return Closed();
                    break;              

        }           
}

// List of holidays
function HolidayList()
{
    // Format: 2009/05/11 (comma seperated)
    return array("2010/05/04","2009/05/11");
}

// Function to check if today is a holiday
function IsHoliday()
{
  // Retrieves the list of holidays
    $holidayList = HolidayList();
  // Checks if the date is in the holidaylist   
    if(in_array(date("Y/m/d"),$holidayList))
    { 
        return true;
  }else
    {
        return false;
    }   
}

// Returns the data when open
function Open()
{
        return 'Open';
}

// Return the data when closed
function Closed()
{
        return 'Closed';
}

// Returns the data when open but with waiting time
function OpenDelay()
{
        return 'Open, but with delay';
}

// Returns the data when closed due to holiday
function ClosedHoliday()
{
        return 'Lukket pga. helligdag';
}

?>

	
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
