<?php 
		$jat;
		$type;
		$jomi_area;
		$uria ;
		$tsp  ;
		$mop  ;
		$zipsam ;
		$dosta  ;
		$gobor;


if(isset($_POST['jat'])) 	{
	
	if(isset($_POST['type']))
								{
			$jat= $_POST['jat'];
		
			
			$type = $_POST['type'];
			
			$jomi_area=$_POST['jomi'];
		
			$number=$jomi_area;
	if ($jat==1)
	{
		
		//<option value="1">BR 3</option>
		switch ($type) {
        case '1':
			//bigha

	$uria = ((float)$number*350)/7.47 ; 
	$tsp =  ((float)$number*300)/7.47;
	$mop = ((float) $number*300)/7.47; 
	//$zipsam =  (float)$number*15*(float)7.47 ;
	//$dosta =  (float)$number*1.5*(float)7.47 ;
	$gobor =  ((float)$number*10000)/7.47;	
		
            break;
        case '2':
           //shotangsho
	
		$uria = (float)$number*1.4 ;
		$tsp = (float) $number*1.2 ;
		$mop =  (float)$number*1.4;
		//$zipsam =  (float)$number*15/33 ;
		//$dosta =  (float)$select* (float)(1.55/33) ;
        $gobor =  (float)$number*40;
		
			break;
			case '3':
			//hector
   
	$uria = (float) $number*350 ; 
	$tsp =  (float)$number*300 ;
	$mop = (float) $number*300; 
	//$zipsam =  (float)$number*15*(float)7.47 ;
	//$dosta =  (float)$number*1.5*(float)7.47 ;
	$gobor =  (float)$number*10000;	
            break;
        default:
          echo 'Plese select an option';
		break;}
		?><html lang="en">
  <head>
    <title>পরামর্শ</title>
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
            <h1 class="mb-2 bread">পরামর্শ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Advice <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

 <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"style="font-size:30px;">বিআর ৩</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
				<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাতের বৈশিষ্ট্য</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জীবনকাল</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> ফলন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>চাষাবাদ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>আগাছা দমন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-business mr-2"></span>সেচ ব্যবস্থাপনা</a>
						  </li>
						
							  </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>রোগবালাই ও পোকামাকড় দমন</a>
						  </li>
						    </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8"><span class="flaticon-search-engine mr-2"></span>ফসল কাটা</a>
							<li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-9"><span class="flaticon-rating mr-2"></span>খরচ</a>
						  </li>
						  	  
						  </ul>
					</div>
				<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
					
						  	<h3><a href="#">জাতের বৈশিষ্ট্য</a></h3>
						  	<p>একটি উচ্চফলনশীল ধানের জাত, যা বোরো, আউশ এবং আমন তিন মৌসুমের জন্য অনুমোদিত। বাংলাদেশ ধান গবেষণা ইনস্টিটিউট ১৯৭৩ সনে জাতটি উদ্ভাবন করেছে। বিআর৩-এর জনপ্রিয় নাম বিপ্লব। 
						 	পুন্য বয়স্ক গাছ এর গড় উচ্চতা ৯৫ সেমি। 	চাল মাঝারি মাঝারি মোটা ও পেটে সাদা দাগ আছে ।</p>
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  
						  	<h3><a href="#">জীবনকাল</a></h3>
						  	<p>জাতটির জীবনকাল বোরো মৌসুমে ১৭০ দিন।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  
						  	<h3><a href="#">ফলন</a></h3>
						  	<p>ফলন হেক্টরপ্রতি ৬.৫ টন।</P>

                      
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">চাষাবাদ পদ্ধতি</a></h3>
						  
							<p>   
							  	   <table style="width:50%" height="45%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>সারের  পরিমাণ </th>
							 
							 </tr>  
							<tr>						
                            <td>ইউরিয়াঃ </td>	 <td align ="left"><?php  print round($uria, 2);?> ৪০ কেজি</td>
							</tr>
							<tr>						
                            <td>টি এস পিঃ </td>        <td align ="left"><?php  print round($tsp, 2);?> ১৩কেজি</td>
							</tr>
							<tr>						
                            <td>এমওপিঃ  </td>         <td align ="left"><?php  print round($mop, 2);?> ২২কেজি</td>
							</tr>
							<tr>						
                            <td> জিপসাম: </td>          <td align ="left"><?php  print round($gobor, 2);?>১৫ কেজি</td>
							</tr>
							<tr>						
                            <td> দস্তা: </td>          <td align ="left"><?php  print round($gobor, 2);?> ১.৫কেজি</td>
							</tr>
							</table>
                              </p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	
						  	<h3><a href="#">আগাছা দমন</a></h3>
						  	<p>রোপন এর ২০-৩০ দিন পযন্ত জমি আগাছামুক্ত রাখতে হবে।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">সেচ ব্যবস্থাপনা</a></h3>
						  	<p>সেচের পানি ঘাটতি এলাকার জন্য আগাম জাত হিসেবে জাতটি নিবা্চন করা যেতে পারে।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">রোগবালাই ও পোকামাকড় দমন</a></h3>
						  	
						<p> রোগবালাই দেখা দিলে অনুমোদিত বালাই দমন ব্যবস্থাপনা অনুসরন করতে হবে।</p>
						  
						  </div>
						   <div class="tab-pane container p-0 fade" id="services-8">
						  	
						  	<h3><a href="#">ফসল কাটা</a></h3>
						  	
						<p> ধান কাটার উপযুক্ত সময় হলো বোরো মৌসুমের ক্ষেত্রে ১-১৫ বৈশাখ(১৪-২৮ এপ্রিল)।</p>
						  
						  </div>
						  	    <div class="tab-pane container p-0 fade" id="services-9">
						  	
						  	<h4><a href="#">খরচ</a></h4>
							  <table border="5" style="width:60%" height="75%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>মূল্য(প্রতি কেজি) </th>
								<th>খরচ</th>
							 </tr>  
							<tr>						
                            <td>ইউরিয়া </td>	<td align ="center">16</td> <td align ="left"><?php  print round($uria*16, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td>টি এস পি</td>   <td align ="center">22</td>     <td align ="left"><?php  print round($tsp*22, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td>এমপি  </td>    <td align ="center">27</td>     <td align ="left"><?php  print round($mop*27, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td> জিপসাম </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							</tr> 
<tr>						
                            <td> দস্তা </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							<							
							<tr>						
                            <td>মোট</td>      <td></td>    <td align ="left"><?php  $tot=($uria*16)+($tsp*22)+($mop*27); print round($tot, 2);?>  টাকা </td>
							</tr> 							
							</table>
						  	
			
						  </div>
						  
						  
						  
						</div>
									</div>
				</div>
    	</div>
    </section>

   
		
<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>
		

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
<?php	} 
	
	else if ($jat==2)
	{
		// <option value="2">সুর্যমুখী</option>		  
		switch ($type) {
        case '1':
			//bigha

	$uria = ((float)$number*350)/7.47 ; 
	$tsp =  ((float)$number*300)/7.47;
	$mop = ((float) $number*300)/7.47; 
	//$zipsam =  (float)$number*15*(float)7.47 ;
	//$dosta =  (float)$number*1.5*(float)7.47 ;
	$gobor =  ((float)$number*10000)/7.47;	
		
            break;
        case '2':
           //shotangsho
	
		$uria = (float)$number*1.4 ;
		$tsp = (float) $number*1.2 ;
		$mop =  (float)$number*1.4;
		//$zipsam =  (float)$number*15/33 ;
		//$dosta =  (float)$select* (float)(1.55/33) ;
        $gobor =  (float)$number*40;
		
			break;
			case '3':
			//hector
   
	$uria = (float) $number*350 ; 
	$tsp =  (float)$number*300 ;
	$mop = (float) $number*300; 
	//$zipsam =  (float)$number*15*(float)7.47 ;
	//$dosta =  (float)$number*1.5*(float)7.47 ;
	$gobor =  (float)$number*10000;	
            break;
        default:
          echo 'Plese select an option';
		break;} ?>
						

<html lang="en">
  <head>
    <title>পরামর্শ</title>
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
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    

      <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"style="font-size:30px;">বিআর ১৯</span>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাতের বৈশিষ্ট্য</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জীবনকাল</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> ফলন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>চাষাবাদ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>আগাছা দমন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-business mr-2"></span>সেচ ব্যবস্থাপনা</a>
						  </li>
						
							  </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>রোগবালাই ও পোকামাকড় দমন</a>
						  </li>
						    </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8"><span class="flaticon-search-engine mr-2"></span>ফসল কাটা</a>
							<li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-9"><span class="flaticon-rating mr-2"></span>খরচ</a>
						  </li>

						  </ul>
						
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
					
						  	<h3><a href="#">জাতের বৈশিষ্ট্য</a></h3>
						  	<p>একটি উচ্চফলনশীল ধানের জাত, যা বোরো, আউশ এবং আমন তিন মৌসুমের জন্য অনুমোদিত। বাংলাদেশ ধান গবেষণা ইনস্টিটিউট ১৯৮৫ সনে জাতটি উদ্ভাবন করেছে। বিআর১৯-এর জনপ্রিয় নাম মঙ্গল। 
								পুন্য বয়স্ক গাছ এর গড় উচ্চতা ১১০ সেমি।
	পাকার সময় শীষ উপরে থাকে।</p>
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  
						  	<h3><a href="#">জীবনকাল</a></h3>
						  	<p>জাতটির জীবনকাল বিচ বপন থেকে ১৬৫- ১৭০ দিন।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  
						  	<h3><a href="#">ফলন</a></h3>
						  	<p>ফলন হেক্টরপ্রতি ৬.০ টন।</P>

                      
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">চাষাবাদ পদ্ধতি</a></h3>
						  
							<p>   
							  	   <table style="width:50%" height="45%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>সারের  পরিমাণ </th>
							 
							 </tr>  
							<tr>						
                            <td>ইউরিয়াঃ </td>	 <td align ="left"><?php  print round($uria, 2);?> ৩০-৪০     কেজি</td>
							</tr>
							<tr>						
                            <td>টি এস পিঃ </td>        <td align ="left"><?php  print round($tsp, 2);?> ৭- ১৪     কেজি</td>
							</tr>
							<tr>						
                            <td>এমওপিঃ  </td>         <td align ="left"><?php  print round($mop, 2);?> ৮-১৬     কেজি</td>
							</tr>
							<tr>						
                            <td> জিপসাম: </td>          <td align ="left"><?php  print round($gobor, 2);?>৪-১১      কেজি</td>
							</tr>
							<tr>						
                            <td> দস্তা: </td>          <td align ="left"><?php  print round($gobor, 2);?> .৭-১ .০কেজি</td>
							</tr>
							</table>
                              </p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	
						  	<h3><a href="#">আগাছা দমন</a></h3>
						  	<p>রোপন এর ৪৫ দিন পযন্ত জমি আগাছামুক্ত রাখতে হবে।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">সেচ ব্যবস্থাপনা</a></h3>
						  	<p>থোর অবস্থা থেকে দুধ অবস্থা পযন্ত জমি আগাছামুক্ত রাখতে হবে।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">রোগবালাই ও পোকামাকড় দমন</a></h3>
						  	
						<p> রোগবালাই দেখা দিলে অনুমোদিত বালাই দমন ব্যবস্থাপনা অনুসরন করতে হবে।</p>
						  
						  </div>
						   <div class="tab-pane container p-0 fade" id="services-8">
						  	
						  	<h3><a href="#">ফসল কাটা</a></h3>
						  	
						<p> ধান কাটার উপযুক্ত সময় হলো বোরো মৌসুমের ক্ষেত্রে ১-১৫ বৈশাখ(১৪-২৮ এপ্রিল)।</p>
						  
						  </div>
						  	    <div class="tab-pane container p-0 fade" id="services-9">
						  	
						  	<h4><a href="#">খরচ</a></h4>
							  <table border="5" style="width:60%" height="75%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>মূল্য(প্রতি কেজি) </th>
								<th>খরচ</th>
							 </tr>  
							<tr>						
                            <td>ইউরিয়া </td>	<td align ="center">16</td> <td align ="left"><?php  print round($uria*16, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td>টি এস পি</td>   <td align ="center">22</td>     <td align ="left"><?php  print round($tsp*22, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td>এমপি  </td>    <td align ="center">27</td>     <td align ="left"><?php  print round($mop*27, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td> জিপসাম </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							</tr> 
<tr>						
                            <td> দস্তা </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							</tr>							
							<tr>						
                            <td>মোট</td>      <td></td>    <td align ="left"><?php  $tot=($uria*16)+($tsp*22)+($mop*27); print round($tot, 2);?>  টাকা </td>
							</tr> 							
							</table>
						  	
			
						  </div>
						  		  
						</div>
					</div>
				</div>
    	</div>
    </section>
<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>
    

		
    
    
  

  <!-- loader -->


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

<?php
	}					
				
						

	?>
	<?php

	 if ($jat==3)
	{
		//<option value="৩">ব৪৭</option>	
		
		switch ($type) {
        case '1':
			//bigha

		$uria = (float)$number*1*33 ;
		$tsp = (float) $number*0.8*33;
		$mop =  (float)$number*0.65*33;
		//$zipsam =  (float)$number*15/33 ;
		//$dosta =  (float)$select* (float)(1.55/33) ;
        $gobor =  (float)$number*125*33;
		
            break;
        case '2':
           //shotangsho
	
		$uria = (float)$number*1 ;
		$tsp = (float) $number*0.8 ;
		$mop =  (float)$number*0.65;
		//$zipsam =  (float)$number*15/33 ;
		//$dosta =  (float)$select* (float)(1.55/33) ;
        $gobor =  (float)$number*125;
		
			break;
			case '3':
			//hector
   
	$uria = (float)$number*1*33*7.47 ;
		$tsp = (float) $number*0.8*33*7.47;
		$mop =  (float)$number*0.65*33*7.47;
		//$zipsam =  (float)$number*15/33 ;
		//$dosta =  (float)$select* (float)(1.55/33) ;
        $gobor =  (float)$number*125*33*7.47;
            break;
        default:
          echo 'Plese select an option';
		break;} ?>



<html lang="en">
  <head>
    <title>পরামর্শ</title>
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
            <h1 class="mb-2 bread">পরামর্শ</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Advice <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

 <section class="ftco-section ftco-no-pb">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-8 text-center heading-section ftco-animate">
          	<span class="subheading"style="font-size:30px;">বিআর ৪৭</span>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাতের বৈশিষ্ট্য</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জীবনকাল</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> ফলন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>চাষাবাদ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>আগাছা দমন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-business mr-2"></span>সেচ ব্যবস্থাপনা</a>
						  </li>
						
							  </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>রোগবালাই ও পোকামাকড় দমন</a>
						  </li>
						    </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8"><span class="flaticon-search-engine mr-2"></span>ফসল কাটা</a>
							<li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-9"><span class="flaticon-rating mr-2"></span>খরচ</a>
						  </li>
						  
						  
						  
						  
						  </ul>
						
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
					
						  	<h3><a href="#">জাতের বৈশিষ্ট্য</a></h3>
						  	<p>একটি উচ্চফলনশীল ধানের জাত, যা লবনাক্ত এলাকায় বোরো মৌসুমে চাষের জন্য অনুমোদন করা হয়েছে। বাংলাদেশ ধান গবেষণা ইনস্টিটিউট ২০০৬ সনে জাতটি উদ্ভাবন করেছে। 
								পুন্য বয়স্ক গাছ এর গড় উচ্চতা ১০৫ সেমি।
	এটি লবনাক্ত  সহিষ্ণু জাত।</p>
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  
						  	<h3><a href="#">জীবনকাল</a></h3>
						  	<p>জাতটির জীবনকাল বিচ বপন থেকে ১৫২ দিন।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  
						  	<h3><a href="#">ফলন</a></h3>
						  	<p>ফলন হেক্টরপ্রতি ৬.০ টন।</P>

                      
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">চাষাবাদ পদ্ধতি</a></h3>
						  
							<p>   
							  	   <table style="width:50%" height="45%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>সারের  পরিমাণ </th>
							 
							 </tr>  
							<tr>						
                            <td>ইউরিয়াঃ </td>	 <td align ="left"><?php  print round($uria, 2);?>  ৪৫   কেজি</td>
							</tr>
							<tr>						
                            <td>টি এস পিঃ </td>        <td align ="left"><?php  print round($tsp, 2);?> ১৩     কেজি</td>
							</tr>
							<tr>						
                            <td>এমওপিঃ  </td>         <td align ="left"><?php  print round($mop, 2);?> ৯   কেজি</td>
							</tr>
							<tr>						
                            <td> জিপসাম: </td>          <td align ="left"><?php  print round($gobor, 2);?>৮     কেজি</td>
							</tr>
							<tr>						
                            <td> দস্তা: </td>          <td align ="left"><?php  print round($gobor, 2);?> ১.৫ কেজি</td>
							</tr>
							</table>
                              </p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	
						  	<h3><a href="#">আগাছা দমন</a></h3>
						  	<p>রোপন এর ৪০ দিন পযন্ত জমি আগাছামুক্ত রাখতে হবে।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">সেচ ব্যবস্থাপনা</a></h3>
						  	<p>অনুমোদিত নিয়ম অনুসরন করা আবশ্যক।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">রোগবালাই ও পোকামাকড় দমন</a></h3>
						  	
						<p>  অনুমোদিত বালাই দমন ব্যবস্থাপনা অনুসরন করতে হবে।</p>
						  
						  </div>
						   <div class="tab-pane container p-0 fade" id="services-8">
						  	
						  	<h3><a href="#">ফসল কাটা</a></h3>
						  	
						<p>  ২০ চৈত্র-৫ বৈশাখ(১-১৫ এপ্রিল)।</p>
						  
						  </div>
						  	    <div class="tab-pane container p-0 fade" id="services-9">
						  	
						  	<h4><a href="#">খরচ</a></h4>
							  <table border="5" style="width:60%" height="75%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>মূল্য(প্রতি কেজি) </th>
								<th>খরচ</th>
							 </tr>  
							<tr>						
                            <td>ইউরিয়া </td>	<td align ="center">16</td> <td align ="left"><?php  print round($uria*16, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td>টি এস পি</td>   <td align ="center">22</td>     <td align ="left"><?php  print round($tsp*22, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td>এমপি  </td>    <td align ="center">27</td>     <td align ="left"><?php  print round($mop*27, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td> জিপসাম </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							</tr> 
							<tr>						
                            <td> দস্তা </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							</tr>							
							<tr>						
                            <td>মোট</td>      <td></td>    <td align ="left"><?php  $tot=($uria*16)+($tsp*22)+($mop*27); print round($tot, 2);?>  টাকা </td>
							</tr> 							
							</table>
						  	
			
						  </div>
						  
						  
						  
						</div>
					</div>
				</div>
    	</div>
    </section>

   
		
<section class="ftco-intro ftco-no-pb img" style="background-image: url(images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">You Always Get the Best Guidance</h2>
          </div>
        </div>	
    	</div>
    </section>
		
         
    
  

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
<?php


		
	}

								}
}
	
	?>
	
