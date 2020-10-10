<?php
$nm;
$vl;
$di;
$ds;
$th;
$po;
$ph;
$em;
session_start();
include "config.php";
header('Content-Type: text/html; charset=utf-8');
$us = $_SESSION["username"]; 
				$query = "SELECT name,village,division,district,thana,post,phone,eamil FROM   users WHERE  username = '$us' ";
				if ($result = mysqli_query($link,$query)) {
					
				/* fetch associative array */
				while ($row = mysqli_fetch_assoc($result)) {
				$nm=$row["name"];
				$vl=$row["village"];
				$di=$row["division"];
				$ds=$row["district"];
				$th=$row["thana"];
				$po=$row["post"];
				$ph=$row["phone"];
				$em=$row["eamil"];
				
						}

    mysqli_free_result($result);
				}



?>
<html lang="en">
  <head>
    <title>তথ্য দেখুন</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>
  </head>
  <body>
	  <div class="bg-top navbar-light d-flex flex-column-reverse">
    	<div class="container py-3">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.php">কৃষি উন্নয়ন<br><span>আছে  কৃষকের পাশে</span></br></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span>তথ্য</span><span class="iconify" data-icon="emojione-v1:information" data-inline="false"></span></div>
					    	<div class="text">
					    
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span>জিজ্ঞেসা </span><span class="iconify" data-icon="emojione-v1:exclamation-question-mark" data-inline="false"></span></div>
						    <div class="text">
						    	
						 
						    </div>
					    </div>
					    <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
					    	<div class="icon d-flex justify-content-center align-items-center"><span>সেবা</span><span class="iconify" data-icon="medical-icon:i-social-services" data-inline="false"></span></div>
						    <div class="text">
						    </div>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
		
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="খুঁজুন">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
	     	<li class="nav-item active"><a href="index.php" class="nav-link">হোম</a></li>
	        	<li class="nav-item"><a href="about.php" class="nav-link">আমাদের সম্পর্কে</a></li>
	        	<li class="nav-item"><a href="team.php" class="nav-link">বিশেষজ্ঞ</a></li>
	        	<li class="nav-item"><a href="services.php" class="nav-link">পরামর্শ</a></li>
				<li class="nav-item"><a href="singup.php" class="nav-link">অ্যাকাউন্ট খুলুন</a></li>
				<li class="nav-item"><a href="contact.php" class="nav-link">যোগাযোগ</a></li>
			  </a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    	    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">প্রোফাইল</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">তথ্য দেখুন <i class="ion-ios-arrow-forward"></i></a></span> </p>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-consult">
			<div class="container">
				
					<div class="col-md-10 wrap-about2 align-items-centerd-flex">
						<div class="ftco-animate bg-primary align-self-center px-4 py-5 w-100">
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" accept-charset="utf-8" method="post" class="appointment-form ftco-animate">

							<table  align="center" width="50%">  
								  
								<tr>    
								<td align="right" style="font-size:20px;"><font style="color:blue">নামঃ</font></td>    
								<td><input type="text"  placeholder="নাম" name="name"  value="<?php echo $nm; ?>" required></td>
								</tr> 
								
								<tr>    
								<td align="right"style="font-size:20px;"><font style="color:blue"> এলাকা/গ্রামঃ</font></td>   
								<td><input type="text"  placeholder="গ্রাম/এলাকা" name="vill" value="<?php echo $vl; ?>"required></td>  
								</tr> 
								
								<tr>  <!-- bivagh hobe -->  
								<td align="right" style="font-size:20px;"><font style="color:blue">বিভাগঃ</font></td>    
								<td><input type="text"  placeholder="জেলা" name="dist" value="<?php echo $di; ?>"required></td>  
								</tr>  
								
								<tr>    
								<td  align="right" style="font-size:20px;"><font style="color:blue">জেলাঃ</font></td>    
								<td><input type="text"  placeholder="জেলা" name="dist"  value="<?php echo $ds; ?>"required></td>  
								</tr>  
								
								<tr>    
								<td  align="right" style="font-size:20px;"><font style="color:blue">থানাঃ</font></td>    
								<td><input type="text"  placeholder="থানা" name="thana"  value="<?php echo $th; ?>"required> </td>  
								</tr>
								<tr>    
								<td align="right" style="font-size:20px;"><font style="color:blue">পোস্টঃ</font></td>    
								<td>  <input type="text"  placeholder="পোষ্ট অফিস" name="posto"  value="<?php echo $po; ?>"required></td>  
								</tr>
								<tr>    
								<td align="right" style="font-size:20px;"><font style="color:blue">মোবাইলঃ</font></td>    
								<td><input type="text"  placeholder="মোবাইল  নাম্বার" name="mobile"  value="<?php echo $ph; ?>"required></td>  
								</tr>
								<tr>    
								<td align="right" style="font-size:20px;"><font style="color:blue">ই-মেইলঃ</font></td>    
								<td> <input type="text"  placeholder="ই-মেইল" name="email"  value="<?php echo $em; ?>"></td>  
								</tr>
								</table>
										
							
		    		
					
	    		
		            <div class="form-group">
		              <input type="submit" value="পরিবর্তন করুন" class="btn btn-secondary py-3 px-4">
		            </div>
		    			</form>
							
						</div>
					</div>
	
				
			</div>
		</section>
		
		<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_3.jpg);">
    	
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>