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
		
		//<option value="1">pam oil</option>
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
          	<span class="subheading"style="font-size:30px;">পামওয়েল</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>পামওয়েল বৃক্ষ</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>পাম ওয়েল চাষ পদ্ধতি ক্ষেত্র</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>পাম ওয়েল ফল ও তেল সংগ্রহ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>সাবধানতা</a>
						  </li>
					
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-business mr-2"></span>খরচ</a>
						  </li>
						
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h4><a href="#">পামওয়েল বৃক্ষ </a></h4>
						  	<p>

পাম ওয়েল গাছ একটি বর্ষজীবি উদ্ভিদ। রোপণের ৩-৪ বছরের মধ্যে ফলন শুরু হয়। একটানা ৬০-৭০ বছর ফল দিয়ে থাকে। বছওে ৮-১০টি কাঁদি আহরণ করা যায়। একটি কাঁদিও ওজন ৪০-৮০
 কেজি পর্যন্ত হয়। ঝড় জলোচ্ছাসে এই গাছ সহজে ক্ষতি হয় না। অন্যান্য গাছ থেকে ১০ গুণ বেশি অক্সিজেন দেয়।</p>

		<h4>কেন পামওয়েল চাষ করবো</h4>
		<p>১) (এক একরে) পামওয়েল চাষে ঘওে বসেই মাসে লক্ষ টাকা আয় করা সম্ভব। প্রতি গাছে মাসে ১,০০০/=টাকা আয় হয়।</p>
		<p>২) একটি পরিবারের সারা বছরের তেলের চাহিদা পূরনের জন্য দুটি গাছই যথেষ্ট।</p>
		<p>৩) একবার বিনিয়োগে ৬০-৭০ বছর আয়।</p>
		<p>৪) কোটি কোটি টাকার তেল আমদানী বাঁচবে।</p>
		<p>৫) দূষণমুক্ত পরিবেশ, অর্থনৈতিক মুক্তি, বেকারত্বেও অবসান হয়। 
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h4><a href="#">পাম ওয়েল চাষ পদ্ধতি ক্ষেত্র</a></h4>
														
		<p>	বাংলাদেশের সকল জেলাউ পামওয়েল চাষের উপযোগী। পাম চাষে বাংলাদেশ অচিরেই আরও সমৃদ্ধ হবে। দেশের সর্বত্র বিশেষ কওে অনাবাদী ও খালী জমিতে, রাস্তার পাশে,
		স্কুল, কলেজ মাদ্রাসা, উপসনালয়ের খালি জায়গায়, সরকারী ও বেসরকারী প্রতিষ্ঠানের খালি জায়গায়, বনভূমিতে পাম ওয়েল চারা রোপন করা যায়। 
		২০ ফুট দূরত্বে ২ফুট x  ২ফুট x ২ফুট গর্ত কওে মাটির সঙ্গে</p>
			<p>১) গোবর সার ৫-৭ কেজি</p>
			<p>২) টি.এস.পি ১০০ গ্রাম</p>
		<p>	৩) এমওপি ৫০ গ্রাম মিশিয়ে চারা রোপণ করতে হয়।
										</p>
										
										 
												  
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h4><a href="#">পাম ওয়েল ফল ও তেল সংগ্রহ</a></h4>
							
						  	
							
পামওয়েল ফল থেকে হাতে ও মেশিনে তেল সংগ্রহ করা যায়। ফলগুলো পানিতে সিদ্ধ কওে চিপন দিলে তেল বের হয়। টঙ্গী মাজুখানে ইতিমধ্যে মিল স্থাপন হযেছে। ভবিস্যতে সমগ্র 
দেশেই ক্ষুদ্র ও বৃহৎ স্থাপন করা হবে।
						
                        
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h4><a href="#">সাবধানতা</a></h4>
							
						  	
				<p>১) অসাধু চারা বিক্রেতার চারা ক্রয় করলে  ভূমি, অর্থ ও সময় নষ্ট হবে।</p>
				<p>২) সফল গবেষকের চারা নিশ্চিত হয়ে জেনে শুনে বুঝে ক্রয় করুন।</p>
                        
						  </div>
					
						  

						  <div class="tab-pane container p-0 fade" id="services-5">
						  	
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
                            <td>এমওপি  </td>    <td align ="center">27</td>     <td align ="left"><?php  print round($mop*27, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td> গোবর </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
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
          	<span class="subheading"style="font-size:30px;">সুর্যমুখী</span>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাত পরিচিতি</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>উপযুক্ত জমি ও মাটি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> বীজ হার ও বপন সময় এবং বপন পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>সার ব্যবস্থাপনা ও প্রয়োগ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span> সেচ ও আগাছা ব্যবস্থাপনা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-business mr-2"></span>পরিচর্যা</a>
						  </li>
						
							  </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>ফসল তোলা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8"><span class="flaticon-business mr-2"></span>খরচ</a>
						  </li>
						  </ul>
						
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
					
						  	<h3><a href="#">জাত পরিচিতি</a></h3>
						  	এ পর্যন্ত বারি কর্তৃক ২টি জাত উদ্ভাবন করা হয়েছে। যথা<br> (১) কিরণী (ডিএস-১) </br>(২) বারি সুর্যমুখী-২</br>

			<p><b>কিরণী:</b>১৯৯২ সালে জাতটির অনুমোদন দেয়া হয়। বাছাই প্রক্রিয়ার মাধ্যমে জাতটি উদ্ভাবন করা হয়। জাতটির কান্ডের ব্যাস ১.৫-২.০ সে.মি.। পরিপক্ক পুষ্পমঞ্জুরী বা শাখার ব্যাস ১২-১৫ সে.মি.।
			 প্রতি মাথায় বীজের সংখ্যা ৪০০-৬০০। বীজের রং কালো। ১০০০ বীজের ওজন ৬৮-৭২ গ্রাম। বীজে তেলের পরিমাণ শতকরা ৪২-৪৪ ভাগ। জাতটি মোটামুটি অলটারনারিয়া বৱাইট রোগ সহনশীল। জীবনকাল ৯০-১১০ দিন। হেক্টর প্রতি ফলন ১.৬ হতে ১.৮ টন।</p>
 

<p><b>বারি সূর্যমুখী-২:</b> গাছের কান্ডের ব্যাস ২.০-২.৪ সে.মি.। পরিপক্ক পুষ্পমঞ্জুরী বা শাখার ব্যাস ১৫-১৮ সে.মি.। বীজের রং কালো। ১০০০ বীজের ওজন ৬৫-৭০ গ্রাম। প্রতি মাথায় বীজের সংখ্যা ৪৫০-৬৫০। তেলের পরিমাণ শতকরা ৪২-৪৪ ভাগ।
 জীবনকাল রবি মৌসুমে ৯৫-১০০ দিন এবং খরিফ মৌসুমে ৯০-৯৫ দিন।  হেক্টর প্রতি ফলন রবি মৌসুমে ২.০ হতে ২.৩ টন এবং খরিপ মৌসুমে ১.৫ হতে ১.৮ টন।</p>
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  
						  	<h3><a href="#">উপযুক্ত জমি ও মাটি</a></h3>
						  	<p>সূর্যমুখী সাধারণত সব মাটিতেই জন্মে। তবে দো-আঁশ মাটি সবচেয়ে বেশী উপযোগী।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  
						  	<h3><a href="#">বীজ হার ও বপন সময় এবং বপন পদ্ধতি</a></h3>
						  	<p><b> বীজের হার :</b> ৮-১০ কেজি/হেক্টর।<p>
 

							<p><b>বপন সময় ও বপন পদ্ধতি : </b>সূর্যমুখী সারা বছর চাষ করা যায়। তবে অগ্রহায়ন মাসে (মধ্য  থেকে চাষ করলে এর ভালো ফলন পাওয়া যায়। 
খরিপ-১ মৌসুমে অর্থাৎ জ্যৈষ্ঠে (মধ্য এপ্রিল থেকে মধ্য মে) মাসেও এর চাষ করা যায়। সূর্যমুখী বীজ সারিতে বুনতে হয়। সারি থেকে সারির দূরত্ব ৫০ সে.মি. এবং গাছ থেকে গাছের  দূরত্ব ২৫ সে.মি.।</P>

                      
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">সার ব্যবস্থাপনা ও প্রয়োগ পদ্ধতি</a></h3>
						  ভালো ফলনের জন্য সূর্যমুখীতে নিম্নরূপ সার ব্যবহার করতে হবে।
							<p>   
							  	   <table style="width:50%" height="45%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>সারের  পরিমাণ </th>
							 
							 </tr>  
							<tr>						
                            <td>ইউরিয়াঃ </td>	 <td align ="left"><?php  print round($uria, 2);?> কেজি</td>
							</tr>
							<tr>						
                            <td>টি এস পিঃ </td>        <td align ="left"><?php  print round($tsp, 2);?> কেজি</td>
							</tr>
							<tr>						
                            <td>এমওপিঃ  </td>         <td align ="left"><?php  print round($mop, 2);?> কেজি</td>
							</tr>
							<tr>						
                            <td> জিপসাম </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr>  
							<tr>						
                            <td> জিংক সালফেট </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr>  
							<tr>						
                            <td> বরিক এসিড </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr>  
							<tr>						
                            <td>ম্যাগনেসিয়াম সালফেট </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr>  
							</table>
                              </p>
							  		  <b>	* রংপুর, দিনাজপুর, পঞ্চগড়, ঠাকুরগাঁও, নওগাঁ ও রাজশাহী এলাকার জন্য প্রযোজ্য</b>
									  <p>
 

						অর্ধেক ইউরিয়া এবং বাকি সব সার শেষ চাষের সময় জমিতে ছিটিয়ে মাটির সাথে মিশিয়ে দিতে হবে। বাকি অর্ধেক ইউরিয়া ২ ভাগ করে প্রথম ভাগ চারা গজানোর ২০-২৫ দিন এবং দ্বিতীয় ভাগ ৪০-৪৫ দিন পর (ফুল ফোটার পূর্বে) প্রয়োগ করতে হবে।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
				
						  	<h3><a href="#">সেচ ও আগাছা ব্যবস্থাপনা</a></h3>
						  	<p>
 

						 সূর্যমুখী ফসলের ফলন বেশী পেতে হলে কয়েকবার সেচ দেয়া প্রয়োজন।
						প্রথম সেচ বীজ বপনের ৩০ দিন পর (গাছে ফুল আসার আগে), দ্বিতীয় সেচ বীজ বপনের ৫০ দিন পর (পুষ্পস্তবক তৈরির সময়) এবং তৃতীয় সেচ বীজ বপনের ৭০ দিন পর (বীজ পুষ্ট হবার আগে) সেচ দেয়া দরকার।সূর্যমুখীর জমি সর্বদা আগাছামুক্ত রাখতে হবে। 
						জমিতে আগাছা দেখা দিলে উহা তুলে ফেলতে হবে।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">পরিচর্যা</a></h3>
						  	
						<p> <h4>পোকামাকড় ব্যবস্থাপনা :</h4>

								<p><b>পোকার নাম :</b> বিছা পোকা</p>

								<p><b>ভূমিকা :</b> ছোট অবস্থায় এরা দলবদ্ধভাবে থাকে।</p>
								 

								<p><b>পোকা চেনার উপায় :</b> কীড়া বা বিছা হলুদ রংয়ের এবং গায়ে কাঁটা থাকে।</p>
								 

								<p><b>ক্ষতির নমুনা :</b> এরা সাধারণত গাছের পাতায় আক্রমণ করে। এ পোকার কীড়া দলবদ্ধভাবে থেকে পাতার সবুজ অংশ খেয়ে পাতাকে পাতলা সাদা পর্দার মতো করে ফেলে।</p>
								 

								<p><b>অনুকূল পরিবেশ :</b> উষ্ণ আবহাওয়া।</p>
								 

								<p><b>ব্যবস্থাপনা :</b> mn পোকা দেখার সংগে সংগে গাছ থেকে পোকাসহ পাতা সংগ্রহ করে পোকা মেরে ফেলতে হবে। সেচ নালায় কেরোসিন মিশ্রিত পানি থাকলে কীড়া পানিতে পড়ে মারা যায়।

								প্রতি লিটার পানিতে ডায়াজিনন-৬০ ইসি ২ মিলি হারে মিশিয়ে বিকালে জমিতে স্প্রে করতে হবে।</p>


								<h4>  রোগ ব্যবস্থাপনা :</h4>

								<p><b>রোগের নাম :</b>পাতা ঝলসানো রোগ</p>
								 

								<p><b>ক্ষতির নমুনা :</b>অলটারনেরিয়াহেলিয়ানথী নামক ছত্রাকের সাহায্যে এ রোগ ছড়ায়। আক্রমণের শুরুতে পাতায় ধুসর বা গাঢ় বাদামী বর্ণের অসম আকৃতির দাগ পড়ে। এ দাগগুলো একত্রে মিলিত হয়ে বড় দাগের সৃষ্টি করে এবং অবশেষে পুরো পাতা ঝলসে যায়।</p>

								<p><b>বিস্তার :</b> বীজ এবং বায়ুর সাহায্যে বিস্তার লাভ করে।</p>
								 

								<p><b>ব্যবস্থাপনা :</b> কিরণী জাতের চাষ করা
								 

								প্রতি লিটার পানির সাথে ২ গ্রাম রোভরাল-৫০ ডব্লিউ পি মিশিয়ে ১০ দিন পর পর ৩ বার সেপ্র করা বা ফসল কাটার পর পরিত্যক্ত কান্ড, মূল ও পাতা পুড়িয়ে ফেলা।</p></p>
						  
						  </div>
						  	    <div class="tab-pane container p-0 fade" id="services-8">
						  	
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
                            <td>এমওপি  </td>    <td align ="center">27</td>     <td align ="left"><?php  print round($mop*27, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td> গোবর </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
							</tr>   
							<tr>						
                            <td>মোট</td>      <td></td>    <td align ="left"><?php  $tot=($uria*16)+($tsp*22)+($mop*27); print round($tot, 2);?>  টাকা </td>
							</tr> 							
							</table>
						  	
			
						  </div>
						    <div class="tab-pane container p-0 fade" id="services-7">
				
						  	<h3><a href="#">ফসল তোলা </a></h3>
						  	<p>
 

						 ৯০-১১০ দিনের মধ্যে ফসল তোলা যায়।</p>
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
		//<option value="4">বাঁধা কপি</option>	
		
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
          	<span class="subheading"style="font-size:30px;">সরিষা</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাত</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>বপন পদ্ধতি সময়</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>নিড়ানী দেয়া</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-insurance mr-2"></span>সেচ প্রয়োগ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-money mr-2"></span>সারের পরিমান</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-rating mr-2"></span>সরিষার জাব পোকা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-business mr-2"></span>পরজীবী উদ্ভিদজনিত রোগ</a>
						  </li>
						   <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h4><a href="#">সরিষার জাত</a></h4>
						  	

		<p><b>টরি-৭</b>
			ফসল বোনা থেকে পাকা পর্যন্ত ৭০-৮০ দিন সময় লাগে। উন্নত পদ্দতিতে চাষ করলে হেক্টর প্রতি ফলন ৯৫০-১১০০ কেজি হয়। বীজে তেলের পরিমাণ ৩৮-৪১%। জাতটি রোগবালাই সহনশীল।</p>

			<p><b>সোনালী সরিষা (এসএস-৭৫)</b>
			ফলে ৪ টি কক্ষ থাকে এবং প্রতি ফলে বীজের সংখ্যা ৩৫-৪৫ টি । বীজের রং হলদে সোনালী । বীজ গোলাকার।হাজার বীজের ওজন ৩.৫-৪.৫ গ্রাম এবং বীজে তেলের পরিমাণ ৪৪-৪৫%। গাছের কান্ড ও শিকড় শক্ত বলে অধিক সার ও সেচ প্রয়োগে গাছ নুয়ে পড়ে না।</p>

			<p><b>কল্যাণীয়া (টিএস-৭২)  </b>
			বীজ গোলাকার। হাজার বীজের ওজন ২.৫-৩.০ গ্রাম। বীজে তেলের পরিমাণ ৪০-৪২%। ফসল পাকতে ৭৫-৮৫ দিন সময় লাগে। উন্নত পদ্দতিতে চাষ করলে প্রতি হেক্টরে ১.৪৫-১.৬৫ টন ফলন পাওয়া যায়। কল্যাণীয়া জাতটি স্বল্প মেয়াদী উচ্চ ফলনশীল আগাম জাত।</p>

			<p><b>দৌলত ( আর এস-৮১)</b>
			বপন থেকে তোলা পর্যন্ত ৯০-১০৫ দিন সময় লাগে। হেক্টর প্রতি ফলন ১.১-১.৩ টন। দৌলত জাত খরা ও কিছুটা লবনাক্ততা সহনশীল। বীজে তেলের পরিমাণ ৩৯-৪০%। জাতটি অলটারনারিয়া ব্লাইট রোগ সহনশীল।</p>


			<p><b>বারি সরিষা -৬ (ধলি)</b>
			ফল ২ কক্ষ বিশিষ্ট এবং প্রতি ফলে বীজের সংখ্যা ২২-২৫ টি। হাজার বীজের ওজন ৩-৪ গ্রাম। বীজের রং হলদে। কান্ড ও শিকড় শক্ত হওয়ায় গাছ হেলে পড়ে না। পরিপক্ক ফল ফেটে গিয়ে বীজ ঝরে পড়ে না। ফল ও ফলের ঠোঁট তুলনামূলকভাবে লম্বা।
			বারি সরিষা -৬ (ধলি) পাকতে ৯০-১০০ দিন সময় লাগে। পরিমাণমত সার ও সেচ দিলে প্রতি হেক্টরে ১.৯-২.২ টন ফলন পাওয়া যায়। বীজে তেলের পরিমাণ ৪৪-৪৫%।</p>

			<p><b>বারি সরিষা -৭ (ন্যাপাস-৩১৪২)</b>
			গাছের পাতা বোটাহীন ও তল মসৃণ । ফুলের পাঁপড়ির রং সাদা। প্রতি গাছে ফলের সংখ্যা ৯০-১২৫ টি । ফল ২ কক্ষ বিশিষ্ট এবং প্রতি ফলে বীজের সংখ্যা ২৫-৩০ টি।</p>

			<p><b>বারি সরিষা -৮ (ন্যাপাস-৮৫০৯)</b>
			ফুলের পাঁপড়ির রং হলদে। প্রতি গাছে ফলের সংখ্যা ৯০-১২৫ টি, ফল ২ কক্ষ বিশিষ্ট । প্রতি ফলে বীজের সংখ্যা ২৫-৩০ টি। বীজের রং কালচে। হাজার বীজের ওজন ৩.৪-৩.৬ গ্রাম। ফসল পাকতে ৯০-৯৫ দিন সময় লাগে।বীজে তেলের পরিমাণ ৪৩-৪৫%। এ জাত অলটারনারিয়া ব্লাইট রোগ ও সাময়িক জলাবদ্দতা  সহনশীল।</p>

			<p><b>রাই-৫</b>
			প্রতি গাছে ৪-৬ টি প্রাথমিক শাখা থাকে। পাতা বোটাযুক্ত ও খসখসে। প্রস্ফুটিত ফুল কুড়ির নিচে অবস্থান করে।প্রতি গাছে ফলের সংখ্যা ৯০-১২০। বীজে তেলের পরিমাণ ৩৯-৪০%।</p>

			<p><b>বারি সরিষা -৯</b>
			এ জাতটি  ‌টরি-৭ এর চেয়ে শতকরা ১০-২৫ ভাগ বোশ ফলন দেয়। আমন ধান কাটার পর এবং বোরো ধান চাষের আগে। স্বল্প মেয়াদী এ জাতটি সহজে চাষ করা সম্ভব। 
			বীজে তেলের পরিমাণ শতকরা ৪৩-৪৪ ভাগ। ফসল পাকতে ৮০-৮৫ দিন সময় লাগে। পরিমাণমত সার ও সেচ দিলে হেক্টরে ১.২৫-১.৪৫ টন ফলন পাওয়া যায়। </p>

			<p><b>বারি সরিষা -১০</b>
			গাছের উচ্চতা ৯০-১০০ সেমি। প্রতি গাছে ৪-৬ টি প্রাথমিক শাখা থাকে। শাখা থেকে প্রশাখা বের হয়। পাতা হালকা সবুজ রংয়ের।
			পাতা  বোটাযুক্ত ও খসখসে । প্রতি গাছে ফলের সংখ্যা ১০০-১২০ টি । ফল ২ কক্ষ বিশিষ্ট । প্রতি পলে বীজের সংখ্যা ১২-১৫ টি । বীজের রং পিঙ্গঁল । হাজার বীজের ওজন ২.০-৩.০ গ্রাম। বীজে তেলের পরিমাণ শতকরা ৪২-৪৩ ভাগ। হেক্টর প্রতি ফলন ১.২৫-১.৪৫ টন। আমন ধান কাটার পর এ জাতটি নাবি জাত হিসাবে চাষ করা যায়।</p>

			<p><b>বারি সরিষা -১১</b>
			হাজার বীজের ওজন ৩.৫-৪.০ গ্রাম। বীজের ওজন অন্যান্য রাই সরিষার চেয়ে বেশি। ফসল ১০৫-১১০ দিন পাকে। প্রতি হেক্টরে ২.০-২.৫ টন ফলন পাওয়া যায়। এ জাতটি দৌলতের চেয়ে ২০-২৫% বেশি ফলন দেয়।
			আমন ধান কাটার পর এ জাতটি নাবি জাত হিসাবে চাষ করা যায়। জাতটি খরা এবং লবনাক্ত সহনশীল। প্রতি ফলে বীজের সংখ্যা ১২-১৫ টি। বীজের রং পিঙ্গল।</p>

			<p><b>বারি সরিষা -১২</b>
			হাজার বীজের ওজন ২.৬-৩.২ গ্রাম। বীজে তেলের পরিমাণ ৪৩- ৪৪%। ফসল ৭৮-৮৫ দিনে পাকে। প্রতি হেক্টরে ১.৪৫-১.৬৫ টন ফলন পাওয়া যায়। আমন ধান কাটার পর স্বল্প মেয়াদী জাত হিসেবে চাষ করে বোরো ধান রোপণ করা যায়।</p>
			 

			<p><b>বারি সরিষা-১৩:</b>

			হেক্টর প্রতি ফলন ২.২০-২.৮০ টন। ফসল ৯০-৯৫ দিনে পাকে। বীজে তেলের পরিমান শতকরা প্রায় ৪৩ ভাগ।</p>

			 

			<p><b>বারি সরিষা -১৪</b>

			হাজার বীজের ওজন ৩.৫-৩.৯ গ্রাম।  ফসল ৭৫-৮০ দিনে পাকে। প্রতি হেক্টরে ১.৪-১.৬ টন ফলন পাওয়া যায়। আমন ধান কাটার পর স্বল্প মেয়াদী জাত হিসেবে চাষ করে বোরো ধান রোপণ করা যায়।</p>

			 

			<p><b>বারি সরিষা -১৫</b>
			হাজার বীজের ওজন ৩.২৫-৩.৫০ গ্রাম। ফসল ৮০-৮৫ দিনে পাকে। প্রতি হেক্টরে ১.৫৫-১.৬৫ টন ফলন পাওয়া যায়। আমন ধান কাটার পর স্বল্প মেয়াদী জাত হিসেবে চাষ করে বোরো ধান রোপণ করা যায়।</p>

			 

			<p><b>বারি সরিষা -১৬</b>
			হাজার বীজের ওজন ৪.৭-৪.৯ গ্রাম। ফসল ১০৫-১১৫ দিনে পাকে। প্রতি হেক্টরে ২.০-২.৫ টন ফলন পাওয়া যায়। আমন ধান কাটার পর  বোরো ধান করে না এমন জমিতে এ জাতটি নাবি জাত হিসেবে চাষ করা যায়। এ জাতটি খরা ও লবনাক্ততা সহিষ্ঞু।</p>

			 

			<p><b>বারি সরিষা -১৭</b>
			হাজার বীজের ওজন ৩.০-৩.৪ গ্রাম। ফসল ৮২-৮৬ দিনে পাকে। প্রতি হেক্টরে ১.৭-১.৮ টন ফলন পাওয়া যায়। জাতটি স্বল্প মেয়াদী হওয়ায় রোপা আমন-সরিষা-বোরো ধান শস্য বিন্যাসের জন্য উপযুক্ত।</p>

			 

			<p><b>বিনাসরিষা-৪</b>

			হাজার বীজের ওজন ৩.৫০-৩.৮০ গ্রাম। বীজের রঙ লালচে কালো এবং বীজে তেলের পরিমাণ ৪৪% । জীবনকাল ৮০-৮৫ দিন। সর্বোচ্চ ২.৪০ টন /হেক্টর ফলন পাওয়া যায়। তবে হেক্টর প্রতি গড় ফলন ১.৭০ টন।</p>

			 

			<p><b>বিনা সরিষা-৭</b>

			জাতটি খরা এবং অল্টারনারিয়া জনিত পাতা ও ফলের ঝলসানো রোগ সহনশীল। বীজের আকার তুলনামূলকভাবে বড় এবং ১০০০ বীজের ওজন ৩.৫০-৪.২৫ গ্রাম। বীজে তেলের পরিমাণ ৩৬-৩৮%। জীবনকাল ১০২-১১০ দিন। হেক্টর প্রতি ফলন ২.০ টন।</p>

			 

			<p><b>বিনা সরিষা-৮</b>

			বীজে তেলের পরিমাণ ৩৯-৪১%। জীবনকাল ১০০-১০৮ দিন। হেক্টর প্রতি ফলন ২.৪ টন।</p>

			 

			<p><b>বিনা সরিষা-৯</b>

			জাতটি অল্টারনারিয়া জনিত পাতা ও ফলের ঝলসানো রোগ এবং বৃষ্টিজনিত সাময়িক জলাবদ্ধতা  সহনশীল। বীজে তেলের পরিমাণ ৪৩%। জীবনকাল ৮০-৮৪ দিন। হেক্টর প্রতি ফলন গড়ে ১.৬০ টন। </p>

			 

			<p><b>বিনা সরিষা-১০</b>

			বীজে তেলের পরিমাণ ৪২%। জীবনকাল ৭৮-৮২ দিন। হেক্টর প্রতি ফলন ১.৫ টন।</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h4><a href="#">লাগানোর সময়</a></h4>
						  					 <p>বাঁধাকপি শীতকালেই ভাল হয়। শীত মৌসুমে আগাম ও নাবী করেও চাষ করা যায়। তবে সমপ্রতি গ্রীষ্ম ও বর্ষকালেও বাঁধাকপি উৎপাদিত হচ্ছে। মৌসুমভেদে বাঁধাকপির বীজ বপনের সময় নিচে দেয়া হল- 
											 
										</p>
										<table style="width:80%">
										<tr>
                                             <th>সময় </th>
                                             <th> বীজ বপনের সময় </th>											 
                                             <th> চারা বপনের সময় </th>											 
										</tr>
										<tr>
                                             <td>আগাম</td>
                                             <td> শ্রাবণ-ভাদ্র </td>											 
                                             <td>ভাদ্র-আশ্বিন </td>											 
										</tr>
										<tr>
                                             <td>মধ্যম</td>
                                             <td>আশ্বিন-কার্তিক </td>											 
                                             <td>কার্তিক-আগ্রহায়ণ </td>											 
										</tr>
										<tr>
                                             <td>নাবি </td>
                                             <td>অগ্রহায়ণ-মধ্য পৌষ </td>											 
                                             <td>পৌষ-মধ্য মাঘ </td>											 
										</tr>
										
							  	         </table>
										 
												  
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h4><a href="#">বীজের পরিমাণ </a></h4>
							
						  	<p>জাত ভেদে প্রতি শতকে ২-৩ গ্রাম, হেক্টর প্রতি ৫০০-৭০০ গ্রাম।</P>
                        
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h4><a href="#">চারা উৎপাদন পদ্ধতি </a></h4>
							
						  	<p>বাঁধা কপির চারা বীজতলায় উৎপাদন করে জমিতে লাগানো হয়। বীজতলার আকার ১ মিটার পাশে ও লম্বায় ৩ মিটার হওয়া উচিত। 
							সমপরিমাণ বালি, মাটি ও জৈবসার মিশিয়ে ঝুরাঝুরা করে বীজতলা তৈরি করতে হয়। 
							দ্বিতীয় বীজতলায় চারা রোপণের আগে ৭/৮ দিন পূর্বে প্রতি বীজতলায় ১০০ গ্রাম ইউরিয়া, ১৫০ গ্রাম টিএসপি ও ১০০ গ্রাম এমওপি সার ভালভাবে মিশিয়ে দিতে হবে। 
							পরে চারা ঠিকমত না বাড়লে প্রতি বীজতলায় প্রায় ১০০ গ্রাম পরিমাণ ইউরিয়া সার ছিটিয়ে দেয়া ভাল।</P>
                        
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h4><a href="#">জমি তৈরি ও চারা রোপণ</a></h4>
						  	<p>গভীর ভাবে ৪-৫টি চাষ দিয়ে মাটি ঝুরঝুরে করে তৈরি করতে হবে। বীজ বপনের ৩০-৩৫ দিন পর বা ৫/৬টি পাতা বিশিষ্ট ১০-১৫ সেন্টিমিটার লম্বা  চারা সাধারণতঃ বিকেল বেলা জমিতে রোপণ করতে হয়। তবে সুস' ও সবল হলে চারা এক-দেড় মাস বয়সের চারা রোপণ করা যায়। 
							রোপণের জন্য সারি থেকে সারির দুরত্ব ৬০ সেন্টিমিটার  এবং প্রতি সারিতে চারা থেকে চারার দূরত্ব ৪৫ সেন্টিমিটার দিলে ভাল হয়। 
							এ হিসেবে প্রতি শতকে ১৫০টির মত চারার প্রয়োজন হয়। 
							আঙ্গিনায় ৫ মিটার লম্বা একটা বেডের জন্য ২০-২২টি চারার প্রয়োজন হয়। 
							বেডে দুই সারিতে চারাগুলো লাগাতে হবে। আঙ্গিনায় লাগানোর জন্য যেহেতু কম চারার দরকার হয় সেজন্য কোন বিশ্বস- নার্সারি থেকে চারা কিনে লাগানো ভাল। 
							তবে একটা বেডে বাঁধাকপির চারা তৈরি করে অল্পদিনের মধ্যেই তা বিক্রি করে যেমন অধিক লাভবান হওয়া যায় তেমনি নিজের প্রয়োজনও মেটানো যায়। এত ভাল চারা পাওয়াটা নিশ্চিত হয়।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h4><a href="#">সার প্রয়োগ ও সেচ দেয়া</a></h4>
						  	   <table style="width:50%" height="45%">
                             <tr>
							    <th>সারের নাম  </th>
							    <th>সারের  পরিমাণ </th>
							 
							 </tr>  
							<tr>						
                            <td>ইউরিয়াঃ </td>	 <td align ="left"><?php  print round($uria, 2);?> কেজি</td>
							</tr>
							<tr>						
                            <td>টি এস পিঃ </td>        <td align ="left"><?php  print round($tsp, 2);?> কেজি</td>
							</tr>
							<tr>						
                            <td>এমওপিঃ  </td>         <td align ="left"><?php  print round($mop, 2);?> কেজি</td>
							</tr>
							<tr>						
                            <td> গোবরঃ </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr>                          
							</table>
							সম্পূর্র্ণ গোবর ও টিএসপি সার জমি তৈরির সময় প্রয়োগ করতে হবে। ইউরিয়া ও এমওপি সার ২ কিসি-তে চারা রোপণের ২০-২৫ দিন পর একবার এবং ৩০-৪০ দিন পর আর একবার উপরি প্রয়োগ করতে হবে। সার দেয়ার পর পরই সেচ দিতে হবে। 
							এ ছাড়া ২-৩ দিন পর পরই সেচ দিতে হবে। গাছ বড় হবার সাথে সাথে দুই সারির মাঝখান থেকে মাটি তুলে সারি বরাবর আইলের মত করে দিতে হবে। ফলে দু’সারির মাঝে নালা তৈরি হবে। এতে সেচ দিতে বেশ সুবিধে হবে।
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
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
                            <td>এমওপি  </td>    <td align ="center">27</td>     <td align ="left"><?php  print round($mop*27, 2);?>  টাকা </td>
							</tr>
							<tr>						
                            <td> গোবর </td>      <td align ="center">--</td>    <td align ="left"><?php  print round($gobor*0, 2);?>  টাকা </td>
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
	
