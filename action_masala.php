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
	if ($jat==2)
	{
		
	//<option value="2">আদা</option>
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
          	<span class="subheading"style="font-size:30px;">আদা</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>উপযুক্ত জমি ও মাটি</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>বীজ রোপণ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>জাত পরিচিতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>রোগ ব্যবস্থাপনা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>ফসল সংগ্রহ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h3><a href="#">উপযুক্ত জমি ও মাটি</a></h3>
						  	<p> 
							পানি নিকাশের সুব্যবস্থা  আছে এমন উঁচু বেলে-দো-আঁশ ও ও বেলে মাটি আদা চাষের জন্য উপযোগী।
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h3><a href="#">বীজ রোপণ</a></h3>
							
						  			<p>ফাল্গুন থেকে বৈশাখ মাস পর্যন্ত  লাগানো যায়। সাধারণত ১২-১৫ গ্রাম ওজনের ১-২টি কুঁড়ি বিশিষ্ট কন্দ লাগানো হয়।
									৪০-৪৫ সে.মি. দূরে দূরে সারি করে ২০ সে.মি. দূরে ৫ সে.মি. গভীরে আদা লাগানো হয়। কন্দ লাগানো পর ভেলী করে দিতে হয়।
									প্রতি হেক্টরে ১০০০ কেজি বীজের প্রয়োজন হয়।</p>		
											 
													
					     </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h3><a href="#">জাত পরিচিতি</a></h3>
							 <P>অনুমোদিত কোন জাত নেই। তবে স্থানীয় জাত যেমন-রংপুরী, খুলনা, টেংগুরা জাত চাষ করা হয়।</P>
							 </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">রোগ ব্যবস্থাপনা</a></h3>
						  	<h4>রোগের নাম : </h4><p>রাইজম রট</p>
							<h4>রোগের কারণ :</h4><p>পিথিয়াম এফানিডারমেটাম নামক ছত্রাক ।</p>
							<h4>ভূমিকা : </h4>
							<p>এ রোগ রাইজমে আক্রমণ করে বলে আদা বড় হতে পারে না ও গাছ দ্রত মরে যায় ফলে সমূহ ক্ষতির সম্ভাবনা থাকে।</p>
							<h4>রোগের কারণ : </h4>
							<p>অল্টারনারিয়া পোরি ও স্টেমফাইলিয়াম বট্রাইওসাম নামক ছত্রাকদ্বয় দ্বারা এ রোগ হয়ে থাকে।</p>
							<h4>ক্ষতির নমুনা : </h4>
							<p>পিথিয়াম এফানিডারমেটাম নামক ছত্রাক ।</p>
							<p>- পরবর্তীতে গাছ ঢলে পড়ে ও শুকিয়ে মরে যায়।</p>
							<p>- রাইজম (আদা) পচে যায় ও ফলন মারাত্মক ভাবে কমে যায় ।</p>
							<h4>অনুকুল পরিবেশ : </h4>
							<p>ভেজা ও স্যাঁত স্যাঁতে আবহাওয়ায় এ রোগ বেশী দেখা যায়। বর্ষাকাল বা জলাবদ্ধতা থাকলে এ রোগের প্রকোপ বেড়ে যায়।</P>
							<h4>বিস্তার :</h4>
							<p>এ রোগ বীজ, পানি ও মাটির মাধ্যমে বিস্তার লাভ করে।</p>
							<h4>ব্যবস্থাপনা :</h4>
							<p>- অর্ধপচা মুরগীর বিষ্ঠা প্রতি হেক্টরে ১০ টন হারে আদা লাগানোর ২১ দিন পূর্বে মাটিতে প্রয়োগ করতে হবে।</p>
							<p>- অনুমোদিত ছত্রাক নাশক মাটি হালকা কুপিয়ে মাটিতে স্প্রে করতে হবে।</p>
							<h4>পুষ্টিমূল্যঃ</h4>
							<p>আদায় ক্যালসিয়াম ও প্রচুর ক্যারোটিন থাকে।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h3><a href="#">সার প্রয়োগ</a></h3>
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
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">খরচ</a></h3>
						  	
			
						  </div>
						  						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">ফসল সংগ্রহ</a></h3>
						  	 <p>আদা লাগানোর ৯-১০ মাস পর উঠানোর উপযোগী হয়। গাছের প্রায় সব পাতা শুকিয়ে গেলে আদা তোলা হয়। ফলন প্রতি হেক্টরে ১২-১৩ টন।</p>
			
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
		
          <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">প্রশ্ন  ???</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> মিরপুর ২ ,ঢাকা</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">০১৯৫১১৪৯৩৪৩</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">khandaker3047@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">লিংক</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>হোম</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>আমাদের সম্পর্কে</a></li>
                <li><a href="team.php"><span class="ion-ios-arrow-round-forward mr-2"></span>বিশেষজ্ঞ </a></li>
                <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>পরামর্শ</a></li>
				  <li><a href="singup.php"><span class="ion-ios-arrow-round-forward mr-2"></span>অ্যাকাউন্ট  খুলুন</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>যোগাযোগ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">সাম্প্রতিক ব্লগ</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">সহজ ঋণ</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">বন্যায় ক্ষতি</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">আমাদের সাবস্ক্রাইব করুন!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="ইমেইল দিন">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved কৃষি উন্নয়ন team</br>by</br> <a href="#" target="_blank">Nurul Amin Khandaker</a> || <a href="#">Nazmul Hasan</a> || <a href="#">Rokaiya Sultana</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
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
<?php	} 
	
	else if ($jat==1)
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
						

<?php ?>
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
          	<span class="subheading"style="font-size:30px;">পেঁয়াজ </span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>উপযুক্ত জমি ও মাটি</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জাত পরিচিতি </a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>পোকা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>রোগ ব্যবস্থাপনা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>ফসল সংগ্রহ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h3><a href="#">উপযুক্ত জমি ও মাটি</a></h3>
						  	<p> 
							উর্বর বেলে-দো-আঁশ মাটি পেঁয়াজ চাষের জন্য অতি উত্তম। 
							বর্ষায় পেঁয়াজ চাষের জন্য উঁচু জমি দরকার যেখানে বৃষ্টির পানি জমেনা। জমিতে সেচ ও পানি নিকাশের ব্যবস্থা থাকতে হবে।
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h3><a href="#">জাত পরিচিতি</a></h3>
							        <h4>চারা তৈরিঃ </h4>
						  			<p>৩  ও ১ মিটার আকারের প্রতি বীজতলার জন্য ২৫-৩০ গ্রাম বীজের প্রয়োজন হয়।
									পেঁয়াজ রবি ও খরিপ মৌসুমে চাষ করা যায়। খরিপ মৌসুমে চাষের জন্য জুলাই-আগষ্ট (শ্রাবণ-ভাদ্র) ও রবি মৌসুমে চাষের জন্য ফেব্রুয়ারী-মার্চ (মাঘ-ফাল্গুন) মাসে বীজ তলায় বীজ বপন করতে হয়। 
									জমির আগাছা পরিষ্কার করে ভালভাবে চাষও মই দিয়ে ৩ত্ম১ মিটার আকারের বীজতলা করে এক সপ্তাহ রাখা হয়। 
									বীজ বপনের পূর্বে আগের দিন সন্ধ্যায় বীজ ভিজিয়ে রেখে পরের দিন তুলে ১ ঘন্টা রৌদ্রে শুকিয়ে তারপর বীজতলায় বপন করতে হবে।
									বীজ বপনের পর ঝুরঝুরে মাটি দিয়ে বীজ ঢেকে দিতে হবে। বীজ বপনের পরদিন বেডে ছায়ার ব্যবস্থা করতে হবে। 
									দিনের বেলা বীজতলা ঢেকে রাখতে হবে এবং রাত্রে খোলা রাখতে হবে। প্রয়োজনে ঝরনা দিয়ে পানি দিতে হবে।</p>		
									<h4>চারা রোপনঃ</h4>
									<p>৫ টি চাষ ও মই দিয়ে জমি তৈরি করা হয়। ১৫   ও   ১০ সে.মি. দূরত্বে চারা রোপন করা হয়।
									বর্ষার সময় ১ মিটার চওড়া ও ১৫ সে.মি. উঁচু বেড তৈরি করে চারা রোপণ করা হয়। 
									দুই বেডের মাঝে ৩০ সে.মি. চওড়া পানি নিকাশের নালা রাখা হয়। ৪০-৪৫ দিন বয়সের চারা লাগানোর উপযোগী হয়।</p>
													
					     </div>
						   <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h3><a href="#">পোকা</a></h3>
							 <h4>পোকার নাম : থ্রিপস</h4><br>
						  	<h4>ভূমিকা :</h4><p>থ্রিপস ছোট আকারের পোকা বলে সহজে নজরে আসে না কিন্তু' পাতার রস চুষে খায় বলে অধিক আক্রমণে পাতা শুকিয়ে গাছ মরে যায় ও ফলন কম হয়।</P>
                            <h4>পোকা চেনার উপায় :</h4>
							<p>স্ত্রী পোকা সরম্ন,  হলুদাভ। পুরম্নষ গাঢ় বাদামী । বাচ্চা পোকা হলুদ অথবা সাদা । এদের পিঠের উপর লম্বা দাগ দেখা যায়।  </p>
							<h4>ক্ষতির নমুনা :</h4>
							<p>রস চুষে খায় বলে পাতা রূপালী রং ধারণ করে অথবা ক্ষুদ্রাকৃতির বাদামী দাগ বা ফোটা দেখা যায়। আক্রমণ বেশী হলে পাতা শুকিয়ে মরে যায়। কন্দ আকারে ছোট ও বিকৃত হয়।</p>
							<h4>অনুকুল পরিবেশ :</h4>
					        <p>বিকল্প পোষকের উপস্তিতি।</p>
							<h4>জীবন চক্র :</h4>
							<p>স্ত্রী পোকা পাতার কোষের মধ্যে ৪৫-৫০ টি ডিম পাড়ে।
 
                                                                                ৫-১০ দিনে ডিম হতে নিম্ফ (বাচ্চা) বের হয়। নিম্ফ ১৫-৩০ দিনে দুটি ধাপ অতিক্রম করে । প্রথম ধাপে খাদ্য গ্রহণ করে  এবং দ্বিতীয় ধাপে খাদ্য গ্রহণ না করে মাটিতে থাকে । এরা বছরে ৮ বার বংশ বিস্তার করে এবং স্ত্রী পোকা পুরুষ পোকার সাথে মিলন ছাড়াই বাচ্চা দিতে সক্ষম ।</P>
							<h4>ব্যবস্থাপনা :</h4>
                            <p>সাদা রংয়ের আঠালো ফাঁদ ব্যবহার ক্ষেতে মাকড়সার সংখ্যা বৃদ্ধি করে এ পোকা দমন করা যায়। অনুমোদিত কীটনাশক নির্ধারিত মাত্রায় প্রয়োগ করতে হবে।</p>							
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">রোগ ব্যবস্থাপনা</a></h3>
						  	<h4>রোগের নাম : </h4><p>পার্পল বস্নচ / বস্নাইট</p>
							
							<h4>ভূমিকা : </h4>
							<p>এ রোগ পেঁয়াজের সবচেয়ে বেশি ক্ষতি করে। যে কোন বয়সে গাছের পাতা ও কান্ড আক্রান্ত হয়। 
							অধিক আক্রমনে পেঁয়াজে ফুল আসে না ও ফসল কম হয়। আক্রান্ত বীজ বেশিদিন গুদামে রাখা যায়না ।
							বাজার মূল্য কমে যায়।</p>
							
							<h4>রোগের কারণ : </h4>
							<p>অল্টারনারিয়া পোরি ও স্টেমফাইলিয়াম বট্রাইওসাম নামক ছত্রাকদ্বয় দ্বারা এ রোগ হয়ে থাকে।</p>
							
							<h4>ক্ষতির নমুনা : </h4>
							<p>কান্ডে প্রথমে ক্ষুদ্র ক্ষুদ্র পানি ভেজা হালকা বেগুনী রংয়ের দাগের সৃষ্টি হয়। 
							দাগগুলি বৃদ্ধি পেয়ে বড় দাগে পরিণত হয় এবং আক্রান্ত  স্থান খড়ের মত হয়ে শুকিয়ে যায়।</p>
							<p>- আক্রান্ত পাতা ক্রমান্বয়ে উপরের দিক হতে মরতে শুরু করে।</p>
							<p>- পাতা বা কান্ডের গোড়ায় আক্রান্ত স্থানের দাগ বৃদ্ধি পেয়ে হঠাৎ পাতা বা বীজবাহী  কান্ড ভেঙ্গে পড়ে এতে বীজ অপুষ্ট হয় ও ফলন কম হয়।</p>
							
							<h4>অনুকুল পরিবেশ : </h4>
							<p>বৃষ্টিপাত হলে এ রোগ দ্রত বিস্তার লাভ করে।</P>
							
							<h4>বিস্তার :</h4>
							<p>আক্রান্ত বীজ, গাছের পরিত্যাক্ত অংশ ও বায়ুর মাধ্যমে এ রোগ বিস্তার লাভ করে।</p>
							
							<h4>ব্যবস্থাপনা :</h4>
							<p>- রোগ প্রতিরোধী বা সহনশীল জাত ব্যবহার</p>
							<p>- রোগমুক্ত বীজ ব্যবহার</p>
							<p>- ফসল পর্যায় অনুসরন করা অর্থ্যাৎ একই জমিতে পর পর কমপক্ষে ৪ বছর পেঁয়াজ না করা</p>
							<p>- পেঁয়াজ গাছের পরিত্যাক্ত অংশ, আগাছা ধ্বংশ করা</p>
							<p>- অনুমোদিত ছত্রাক নাশক নির্ধারিত মাত্রায় প্রয়োগ করা ।    </p>
							
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h3><a href="#">সার প্রয়োগ</a></h3>
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
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">খরচ</a></h3>
						  	
			
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">ফসল সংগ্রহ</a></h3>
						  	 <p>সাধারণতঃ বর্ষা মৌসুমে ৩৫-৪৫ দিন এবং রবি মৌসুমে ৪০-৫৫ দিনের মধ্যে পেঁয়াজ তোলার উপযুক্ত হয়। 
							 রবি মৌসুমে পেঁয়াজের পাতা মরে গেলে (গলা চিকন হলে) গাছ সমেত পেঁয়াজ তুলে এনে পাতা শুকিয়ে মরা পাতা কেটে সংরক্ষণ করা হয়। 
							 প্রতি হেক্টরে ফলন রবিতে ১২-১৬ টন ও খরিপ ১০-১২ টন।</p>
			
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
		
          <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">প্রশ্ন  ???</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> মিরপুর ২ ,ঢাকা</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">০১৯৫১১৪৯৩৪৩</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">khandaker3047@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">লিংক</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>হোম</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>আমাদের সম্পর্কে</a></li>
                <li><a href="team.php"><span class="ion-ios-arrow-round-forward mr-2"></span>বিশেষজ্ঞ </a></li>
                <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>পরামর্শ</a></li>
				  <li><a href="singup.php"><span class="ion-ios-arrow-round-forward mr-2"></span>অ্যাকাউন্ট  খুলুন</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>যোগাযোগ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">সাম্প্রতিক ব্লগ</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">সহজ ঋণ</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">বন্যায় ক্ষতি</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">আমাদের সাবস্ক্রাইব করুন!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="ইমেইল দিন">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved কৃষি উন্নয়ন team</br>by</br> <a href="#" target="_blank">Nurul Amin Khandaker</a> || <a href="#">Nazmul Hasan</a> || <a href="#">Rokaiya Sultana</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
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



	<?php  ?>
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
          	<span class="subheading"style="font-size:30px;">রসুন</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাত পরিচিতি</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>চারা তৈরি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>পোকা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>রোগ ব্যবস্থাপনা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>ফসল সংগ্রহ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h3><a href="#">জাত পরিচিতি</a></h3>
						  	<p> 
							অনুমোদিত জাত নেই। স্থানীয় জাত চাষ করা হয়।
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h3><a href="#">চারা তৈরি</a></h3>
							<h4>বীজ বপনঃ</h4>
						  			<p>শুকনো রসুনের বাহিরের সারির কোয়া লাগানো হয়। ১৫ সে.মি. দূরত্বে সারি করে ১০ সে.মি. দূরে ৩-৪ সে.মি. গভীরে রসুনের কোয়া লাগানো হয়।
									প্রতি হেক্টরে ৩০০-৩৫০ কেজি বীজ রসুনের প্রয়োজন হয়।</p>		
											 
							<h4>সেচ ও আগাছা ব্যবস্থাপনাঃ</h4>
                                   <p>মাটিতে রসের অভার থাকলে মাঝে মাঝে সেচ দিতে হবে। প্রতিবার সেচ দেয়ার পর মাটি নিড়ানি দিয়ে কুপিয়ে ঝুরঝুরে করে দিতে হবে।
								   আগাছা দেখা দিলে তা পরিষ্কার করতে হবে।</p>							
												  
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h3><a href="#">পোকা</a></h3>
							 <h4>পোকার নাম : থ্রিপস</h4><br>
						  	<h4>ভূমিকা :</h4><p>থ্রিপস ছোট আকারের পোকা বলে সহজে নজরে আসে না কিন্তু' পাতার রস চুষে খায় বলে অধিক আক্রমণে পাতা শুকিয়ে গাছ মরে যায় ও ফলন কম হয়।</P>
                            <h4>পোকা চেনার উপায় :</h4>
							<p>স্ত্রী পোকা সরম্ন,  হলুদাভ। পুরম্নষ গাঢ় বাদামী । বাচ্চা পোকা হলুদ অথবা সাদা । এদের পিঠের উপর লম্বা দাগ দেখা যায়।  </p>
							<h4>ক্ষতির নমুনা :</h4>
							<p>রস চুষে খায় বলে পাতা রূপালী রং ধারণ করে অথবা ক্ষুদ্রাকৃতির বাদামী দাগ বা ফোটা দেখা যায়। আক্রমণ বেশী হলে পাতা শুকিয়ে মরে যায়। কন্দ আকারে ছোট ও বিকৃত হয়।</p>
							<h4>অনুকুল পরিবেশ :</h4>
					        <p>বিকল্প পোষকের উপস্তিতি।</p>
							<h4>জীবন চক্র :</h4>
							<p>স্ত্রী পোকা পাতার কোষের মধ্যে ৪৫-৫০ টি ডিম পাড়ে।
 
                                                                                ৫-১০ দিনে ডিম হতে নিম্ফ (বাচ্চা) বের হয়। নিম্ফ ১৫-৩০ দিনে দুটি ধাপ অতিক্রম করে । প্রথম ধাপে খাদ্য গ্রহণ করে  এবং দ্বিতীয় ধাপে খাদ্য গ্রহণ না করে মাটিতে থাকে । এরা বছরে ৮ বার বংশ বিস্তার করে এবং স্ত্রী পোকা পুরুষ পোকার সাথে মিলন ছাড়াই বাচ্চা দিতে সক্ষম ।</P>
							<h4>ব্যবস্থাপনা :</h4>
                            <p>সাদা রংয়ের আঠালো ফাঁদ ব্যবহার ক্ষেতে মাকড়সার সংখ্যা বৃদ্ধি করে এ পোকা দমন করা যায়। অনুমোদিত কীটনাশক নির্ধারিত মাত্রায় প্রয়োগ করতে হবে।</p>							
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">রোগ ব্যবস্থাপনা</a></h3>
						  	<h4>রোগের নাম : </h4><p>পার্পল বস্নচ / বস্নাইট</p>
							<h4>ভূমিকা : </h4>
							<p>এ রোগ পেঁয়াজের সবচেয়ে বেশি ক্ষতি করে। যে কোন বয়সে গাছের পাতা ও কান্ড আক্রান্ত হয়। 
							অধিক আক্রমনে পেঁয়াজে ফুল আসে না ও ফসল কম হয়। আক্রান্ত বীজ বেশিদিন গুদামে রাখা যায়না । বাজার মূল্য কমে যায়।</p>
							<h4>রোগের কারণ : </h4>
							<p>অল্টারনারিয়া পোরি ও স্টেমফাইলিয়াম বট্রাইওসাম নামক ছত্রাকদ্বয় দ্বারা এ রোগ হয়ে থাকে।</p>
							<h4>ক্ষতির নমুনা : </h4>
							<p>কান্ডে প্রথমে ক্ষুদ্র ক্ষুদ্র পানি ভেজা হালকা বেগুনী রংয়ের দাগের সৃষ্টি হয়। 
							দাগগুলি বৃদ্ধি পেয়ে বড় দাগে পরিণত হয় এবং আক্রান্ত স্থান খড়ের মত হয়ে শুকিয়ে যায়।</p>
							<p>- আক্রান্ত পাতা ক্রমান্বয়ে উপরের দিক হতে মরতে শুরু করে।</p>
							<p>- পাতা বা কান্ডের গোড়ায় আক্রান্ত স্থানের দাগ বৃদ্ধি পেয়ে হঠাৎ পাতা বা বীজবাহী  কান্ড ভেঙ্গে পড়ে এতে বীজ অপুষ্ট হয় ও ফলন কম হয়।</p>
							<h4>অনুকুল পরিবেশ : </h4>
							<p>বৃষ্টিপাত হলে এ রোগ দ্রত  বিস্তার লাভ করে।</P>
							<h4>বিস্তার :</h4>
							<p>আক্রান্ত বীজ, গাছের পরিত্যাক্ত অংশ ও বায়ুর মাধ্যমে এ রোগ বিস্তার লাভ করে।</p>
							<h4>ব্যবস্থাপনা :</h4>
							<p>- রোগ প্রতিরোধী বা সহনশীল জাত ব্যবহার</p>
							<p>- রোগমুক্ত বীজ ব্যবহার</p>
							<p>- ফসল পর্যায় অনুসরন করা অর্থ্যাৎ একই জমিতে পর পর কমপক্ষে ৪ বছর পেঁয়াজ না করা</p>
							<p>- পেঁয়াজ গাছের পরিত্যাক্ত অংশ, আগাছা ধ্বংশ করা</p>
							<p>- অনুমোদিত ছত্রাক নাশক নির্ধারিত মাত্রায় প্রয়োগ করা ।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h3><a href="#">সার প্রয়োগ</a></h3>
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
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">খরচ</a></h3>
						  	
			
						  </div>
						   <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">ফসল সংগ্রহ</a></h3>
						  	 <p>রসুন গাছের পাতা শুকিয়ে বাদামী রং ধারণ করলে ঢলে পড়ে তখন রসুন তোলার উপযোগী হয়।
							 গাছসহ রসুন তোলা হয় এবং ঐ ভাবে ছায়াতে ভালভাবে শুকিয়ে মরা পাতা কেটে সংরক্ষণ করা হয়।
							 প্রতি হেক্টরে ১০-১২ টন ফলন পাওয়া যায়।</p>
			
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
		
          <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">প্রশ্ন  ???</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> মিরপুর ২ ,ঢাকা</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">০১৯৫১১৪৯৩৪৩</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">khandaker3047@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">লিংক</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>হোম</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>আমাদের সম্পর্কে</a></li>
                <li><a href="team.php"><span class="ion-ios-arrow-round-forward mr-2"></span>বিশেষজ্ঞ </a></li>
                <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>পরামর্শ</a></li>
				  <li><a href="singup.php"><span class="ion-ios-arrow-round-forward mr-2"></span>অ্যাকাউন্ট  খুলুন</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>যোগাযোগ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">সাম্প্রতিক ব্লগ</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">সহজ ঋণ</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">বন্যায় ক্ষতি</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">আমাদের সাবস্ক্রাইব করুন!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="ইমেইল দিন">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved কৃষি উন্নয়ন team</br>by</br> <a href="#" target="_blank">Nurul Amin Khandaker</a> || <a href="#">Nazmul Hasan</a> || <a href="#">Rokaiya Sultana</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
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
	<?php
	}
	else  if ($jat==4)
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

<?php ?>
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
          	<span class="subheading"style="font-size:30px;"> হলুদ</span>
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
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>বীজ বপন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>পোকমাকড় ব্যবস্থাপনা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>ফসল সংগ্রহ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h3><a href="#">জাত পরিচিতি</a></h3>
						  	<p> 
							ডিমলা ও সিন্দুরী নামে বাংলাদেশে দু’টি উন্নত জাত রয়েছে। ডিমলা জাতটি স্থানীয় জাতের তুলনায় ৩ গুণ ফলন বেশী দেয়।
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h3><a href="#">উপযুক্ত জমি ও মাটি</a></h3>
							
						  			<p>সব ধরনের মাটিতে হলুদ চাষ করা যায়। তবে দো-আঁশ ও বেলে-দো-আঁশ মাটি হলুদ চাষের জন্য অতি উত্তম।</p>		
											 
													
												  
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h3><a href="#">বীজ বপন</a></h3>
						  	<p>চৈত্র মাস কন্দ লাগানোর উপযুক্ত সময়। সাধারণতঃ ১৫-২০ গ্রাম ওজনের ১-২টি ঝুঁড়ি বিশিষ্ট কন্দ  লাগাতে হয়। 
							৫০ সে.মি. দূরে দূরে সারি করে ২৫ সে.মি. দূরে দূরে ৫-৭ সে.মি. গভীরে কন্দ লাগাতে হয়। 
							প্রতি হেক্টরে ২৫০০ কেজি কন্দ প্রয়োজন হয়। কন্দ লাগানোর পর ভেলী করে দিতে হয়।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">পোকমাকড় ব্যবস্থাপনা</a></h3>
							 <h4>পোকার নাম : ডগা ছিদ্রকারী পোকা</h4><br>
						  	<h4>ভূমিকা :</h4><p>কান্ড আক্রমণ করে বলে গাছের বৃদ্ধি ব্যহত হয়। ফলে উৎপাদন কম হয়।
                                                                         পোকা চেনার উপায় : এ পোকার মথ (মা) কমলা হলুদ রংয়ের এবং পাখার উপর কালো বর্ণের ফোটা থাকে। কীড়া হালকা বাদামী বর্ণের। 
                                                                         গায়ে সুক্ষ্ণ শুং থাকে।

                             </P>
							 
							<h4>ক্ষতির নমুনা :</h4>
							<p>পোকা কান্ড ছিদ্র করে ভিতরের দিকে খায় বলে পাতা হলুদ হয়ে যায়। নেক সময় ডেড হার্ট লঙ্গন দেখা যায়। আক্রান্ততা কান্ডে ছিদ্র ও কীড়ার মল দেখা যায়।</p>
							<h4>অনুকুল পরিবেশ :</h4>
					        <p>আদ্র আবহাওয়া।</p>
							<h4>জীবন চক্র :</h4>
							<p>স্ত্রী মথ পাতা বা গাছের নরম অংশে ডিম পাড়ে। ৭ দিনে ডিম থেকে কীড়া বের হয় এবং ২-৩ সপ্তাহ কীড়া অবস্থায় থাকে। পুত্তলি ধাপ সম্পন্ন করতে ১ সপ্তাহ লাগে। 
							এরা বছরে ৩ বার বংশ বিস্তার করে।
		                                                   ব্যবস্থাপনা : আক্রান্ত ডগা তুলে ফেলা ও সম্ভব হলে পোকার কীড়া ধরে মেরা ফেলা।
		                                                     প্রতি লিটার পানিতে ৪ মি.গ্রা. হারে বিটি মিশিয়ে স্প্রে করতে হবে। অধিক আক্রমণে অনুমোদিত কীটনাশক প্রয়োগ করতে হবে।</P>
															 
															 
							 <h4>পোকার নাম : রাইজোম স্কেল পোকা</h4><br>
						  	<h4>ভূমিকা :</h4><p> এ পোকা রাইজোম (হলুদ) আক্রমণ করে বলে ক্ষেতের আইল থেকে সহজে বুঝা যায় না। ফলে প্রভূত ক্ষতি সাধিত হয়</P>
							
							 <h4>পোকা চেনার উপায় :</h4>
							 <p>পূর্ণাঙ্গ স্কেল পোকা উজ্জল হলুদ বর্ণের এবং শরীর গোলাকার । এদের শরীর মোমের মত স্কেল দ্ধারা   আবৃত থাকে।</p>
							 
							<h4>ক্ষতির নমুনা :</h4>
							<p>ফসলের শেষ পর্যায়ে রাইজোম এ পোকার আক্রমণ দেখা যায়। পূর্নাঙ্গ ও নিম্ফ পোকা রাইজোমের রস চুষে খায় বলে রাইজোম আকারে ছোট হয়।
							রাইজোম কুঁচকে যায় ও অঙ্কুরোদগম ক্ষমতা কমে যায়। আক্রান্ত রাইজোম গুদামে রাখলে সেখানে পচন ধরতে পারে।</p>
							
							<h4>অনুকুল পরিবেশ :</h4>
					        <p>আদ্র আবহাওয়া।</p>
							
							<h4>জীবন চক্র :</h4>
							<p>স্ত্রী পোকা রাইজোমের উপর হলুদ রংয়ের ডিম পাড়ে। ৭-৮ দিনে ডিম থেকে নিম্ফ (বাচ্চা) বের হয়। ২৪ দিন পর নিম্ফ পূর্ণাঙ্গে পরিণত হয়। 
							এদের জীবনচক্র সম্পন্ন করতে ৩১-৩৫ দিন সময় লাগে।  বছরে এরা ১০ বার বংশ বিস্তার করে।</P>								 
							
							<h4>ব্যবস্থাপনা :</h4>
							<p> জুলাই- আগস্ট মাসে আক্রান্ত রাইজোম তুলে ধ্বংশ করতে হবে। 
							স্কেল আক্রান্ত রাইজোম বাদ দিয়ে গুদামজাত করতে হবে। মাঠে আক্রমণ দেখা দিলে ও গুদামে রাখার পূর্বে অনুমোদিত কীটনাশক প্রয়োগ করতে হবে।</p>
																
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h3><a href="#">সার প্রয়োগ</a></h3>
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
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">খরচ</a></h3>
						  	
			
						  </div>
						   <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">ফসল সংগ্রহ</a></h3>
						  	 <p>সাধারণতঃ লাগানোর ৯-১০ মাস পর পাতা শুকিয়ে গেলে হলুদ সংগ্রহ করা হয়। প্রতি হেক্টরে ২৫-৩০ টন কাঁচা হলুদ পাওয়া যায়।</p>
			
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
		
          <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">প্রশ্ন  ???</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> মিরপুর ২ ,ঢাকা</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">০১৯৫১১৪৯৩৪৩</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">khandaker3047@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">লিংক</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>হোম</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>আমাদের সম্পর্কে</a></li>
                <li><a href="team.php"><span class="ion-ios-arrow-round-forward mr-2"></span>বিশেষজ্ঞ </a></li>
                <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>পরামর্শ</a></li>
				  <li><a href="singup.php"><span class="ion-ios-arrow-round-forward mr-2"></span>অ্যাকাউন্ট  খুলুন</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>যোগাযোগ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">সাম্প্রতিক ব্লগ</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">সহজ ঋণ</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">বন্যায় ক্ষতি</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">আমাদের সাবস্ক্রাইব করুন!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="ইমেইল দিন">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved কৃষি উন্নয়ন team</br>by</br> <a href="#" target="_blank">Nurul Amin Khandaker</a> || <a href="#">Nazmul Hasan</a> || <a href="#">Rokaiya Sultana</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
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
<?php 
	}
	else if ($jat==5)
	{
		
	//<option value="2">আদা</option>
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
		?>
<?php ?>
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
          	<span class="subheading"style="font-size:30px;">মরিচ</span>
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
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>চারা তৈরি ও রোপণ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>পোকমাকড় ব্যবস্থাপনা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>ফসল সংগ্রহ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h3><a href="#">জাত পরিচিতি</a></h3>
						  	<p> 
							ঝাল ও মিষ্টি এ ধরনের মরিচ দেখা যায়। ঝাল মরিচের মধ্যে বগুড়া, চাঁদপুরী, ফরিদপুরী উল্লেখযোগ্য। এছাড়া কামরাংগা, আকালী ও কালো মরিচ খুব ঝাল।
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h3><a href="#">উপযুক্ত জমি ও মাটি</a></h3>
							
						  			<p>প্রচুর আলো-বাতাস এবং  পানি, সেচ ও নিকাশের ব্যবস্থা আছে এমন দো-আঁশ মাটি মরিচ চাষের জন্য উপযোগী।</p>		
											 
													
												  
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h3><a href="#">বীজ বপন</a></h3>
						  	<p><b>চারা তৈরি</br></b> জমি ভালভাবে চাষ ও ও মই দিয়ে ও আগাছা বাছাই করে ৩১ মিটার আকারের বীজতলা করে সেখানে বীজ বপন করা হয়। শীতকালের জন্য ভাদ্র-আশ্বিণ মাসে ও বর্ষা মৌসুমের জন্য ফাল্গুন-চৈত্র মাসে বীজতলায় বীজ বপন করা হয়।
							চারা ১০ সে.মি. উঁচু হলে রোপণের উপযোগী হয়।</p>

							<p><b>চারা রোপণ</br></b> আগাছা পরিষ্কার করে ৪-৫ টি চাষ ও মই দিয়ে জমি প্রস্তুতির পর চারা রোপণ করা হয়। চারা রোপণে সারি থেকে সারির দূরত্ব ৬০-৭০ সে.মি. ও চারা থেকে চারার দূরত্ব ৩০-৪০ সে.মি. রাখা হয়। চারা বিকেলে লাগাতে হবে এবং ২-৩ দিন সকাল বিকাল পানি দিতে হবে।</p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">পোকমাকড় ব্যবস্থাপনা</a></h3>
							
							<h5> সাদা মাছি</h5>
			<p><b>ভূমিকা:</b> খুব ছোট আকারের এ পোকা পাতার রস চুষে খায়। ফলে গাছের বাড়বাড়তি ব্যহত হয়। তাছাড়া এ পোকা কালো সুটি মোল্ড নামক ছত্রাক পাতায় জন্মাতে  সহায়তা করে এবং ভাইরাস রোগ ছড়ায়।</br>
			<b>পোকা চেনার উপায়:</b> সাদা রংয়ের এ পোকা গাছের পাতার নিচের দিকে থাকে। লম্বায় ১ মিলিমিটারের চেয়ে সামান্য বড়। গাছের পাতা সামান্য নাড়া দিলে উড়ে চলে যায়। এ সকল পোকার শরীর সাদা মোম জাতীয় পদার্থ দ্বারা ঢাকা থাকে।</p>

			<p><b>ক্ষতির নমুনা:</b>
		<ul>
			<li>পাতার নিচের দিক হতে প্রাপ্ত বয়স্ক ও অপ্রাপ্ত বয়স্ক (নিম্ফ)  পোকা পাতার রস চুষে খায় ফলে পাতা কুঁচকে যায় এবং গাছের বৃদ্ধি ব্যাহত হয়।   
			<li>আক্রমণে প্রথমে পাতায় সাদা বা হলদেটে রং দেখা যায় পরে দাগগুলো একত্রে হয়ে সবুজ শিরাসহ পাতা হলুদ হয়ে যায়।  
			<li>এ পোকা খাওয়ার সময় আঠালো মিষ্টি রস  নি:সরণ করে বিধায় ঐ আঠাতে কালো ছত্রাক জন্মাতে সহায়তা করে।  
			<li>এ পোকা ভাইরাস রোগ ছড়ায়।
		</ul>
			</p></u>
			<p><b>অনুকুল পরিবেশ:</b>  উষ্ণ ও শুষ্ক আবহাওয়া এ পোকা বিস্তারের জন্য সহায়ক।</p>

			<p><b>জীবন চক্র:</b> এ পোকা সাধারনত পাতার নিচের দিকে অতি ক্ষুদ্র সাদা ডিম পাড়ে। ডিম পরে বাদামী রং ধারণ করে ও ৩-১৭ দিন পর ডিম ফুটে নিম্ফ (বাচ্চা ) বের হয়। বাচ্চা সবুজাভ সাদা, ২-৬ সপ্তাহ নিম্ফ অবস্থায় থেকে  পূর্ণাঙ্গ পোকায় পরিণত হয়। পূর্নাঙ্গ পোকা ১০-১৫ দিন বাঁচে।</p>

			<p><b>ব্যবস্থাপনা:</b> হলুদ রংয়ের আঠালো ফাঁদ ব্যবহার করতে হবে। প্রতি লিটারের ৫ গ্রাম কাপড় কাঁচা সাবান মিশিয়ে স্প্রে করতে হবে। অনুমোদিত কীটনাশক নির্ধারিত মাত্রায় ব্যবহার করতে হবে।</p>

			<h5>থ্রিপস</h5>
			<p><b>পোকার নাম:</b> থ্রিপস</br>
			<b>ভূমিকা:</b> এটি একটি ক্ষুদ্র পোকা। আক্রমণ বাহির হতে বোঝা যায় না বিধায় ক্ষতির সমূহ সম্ভাবনা থাকে। সুতরাং মাঝে মাঝে ক্ষেত পরিদর্শন করে ফসলের অবস্থা দেখে আগে থেকেই ব্যবস্থা নিতে হবে।</br>
			<b>পোকা চেনার উপায়:</b> থ্রিপস অতি ক্ষুদ্র একটি পোকা যা খালি চোখে কোন মতে দেখা যায়। এ পোকা পাতার রস চুষে খায়। ফলে অধিক আক্রমণে পাতা কুঁচতে যায় এমনকি গাছ থেকে কোন ফুল ফল নাও আসতে পারে। এ পোকা ভাইরাস রোগও ছড়ায়।</p>

			<p><b>ক্ষতির নমুনা</b><ul>
			<li>নিম্ফ (বাচ্চা )ও পূনাঙ্গ পাতার রস চুষে খায় বলে পাতা কুঁকড়িয়ে যায় এবং অনেকটা  নৌকার মত দেখায়।  
			<li>পোকার আক্রমনে পাতা বাদামী রং ধারন করে।
			<li>নতুন ও পুরাতন উভয় পাতায় আক্রমন করে।
			</ul></p>
			<p><b>অনুকুল পরিবেশ:</b> উষ্ণ ও শুষ্ক আবহাওয়া ।</p>
	<p><b>জীবন চক্র:</b> পূর্ণ বয়স্ক পোকা ৪৫-৫০টি ডিম পাড়ে। ৫-৬ দিনে ডিম থেকে নিম্ফ (বাচ্চা) বের হয় এবং নিম্ফ ৭-৮ দিন পর পূর্নাঙ্গ পোকায় পরিণত হয়। র্পূনাঙ্গ পোকা ৩১ দিন পর্যন্ত বাঁচে। পাতা নাড়াচাড়া করলে এরা উড়ে পালায় ।</p>

			<p><b>ব্যবস্থাপনা:</b> সাদা রংয়ের আঠালো ফাঁদ ব্যবহার । মাকড়সা এ পোকা খায় বিধায় এর সংখ্যা বাড়ানো গেলে সহজেই থ্রিপস দমন করা যায়।  অনুমোদিত কীটনাশক সঠিক মাত্রায় প্রয়োগ । </p>
	

			<h5>জাব পোকা</h5>
			<p><b>পোকার নাম:</b> জাব পোকা</br>
			<b>ভূমিকা:</b> র্পূনাঙ্গ ও নিম্ফ  (বাচ্চা) পাতা, ফুল, কচি ফল ও ডগার রস চুষে খায়। অধিক আক্রমনে গাছের বাড় বাড়তি কমে যায় ও ফলন কম হয়। এ পোকা ভাইরাস রোগ ছড়ায়।</br>

			<b>পোকা চেনার উপায়:</b> জাব পোকা অতি ছোট, দেহ নরম ও উজ্জ্বল কাল রংয়ের হয়ে থাকে। পাখাওয়ালা জাব পোকা উড়তে পারে কিন্তু নিম্ফ বা পাখা বিহীন উড়তে পারে না । এরা দল বদ্ধ ভাবে বাস করে।</p>

			<p><b>ক্ষতির নমুনা:</b><ul>
			<li>পূর্নাঙ্গ ও নিম্ফ পাতা, ফুল কচি ফল ও ডগার রস চুষে খায়।
			<li>পাতা কুঁকড়ে যায়, গাছের বৃদ্ধি ও ফুল, ফল ধারণ বাধাগ্রস্থ হয়  
			<li>এ পোকা থেকে নি:সৃত মধুরসে কালো শুটি মোল্ড ছত্রাক জন্মায়।
			<p><b>অকুকুল পরিবেশ:</b>বাতাসে আদ্রতা বেশী ও মেঘলা আকাল</p>
			</ul></p>
			<p><b>জীবন চক্র: </b> এ পোকা কোন যৌন মিলন ছাড়াই ১০-১২ দিনের মধ্যে  ৮-৩০ টি নিম্ফ জন্ম দিতে পারে। নিম্ফ অবস্থা ৫-৮ দিন থাকে।  পাখা বিহীন জাব পোকা ২৪ ঘন্টার মধ্যে বাচ্চা দিতে পারে। এরা সারা বছর বংশ বিস্তার করে।</p>

			<p><b>ব্যবস্থাপনা:</b>
			<ul>
			<li>আক্রমনের প্রাথমিক অবস্থায় হাত দিয়ে পিষে মেরে ফেলা ।
			<li>লেডি বার্ড বিটলের পূর্নাঙ্গ ও কীড়া (গ্লাব) এবং সিরফিড ফ্লাই এর কীড়া জাব পোকা খায় বিধায় এদের সংরক্ষণ ও সংখ্যা বাড়ানো গেলে জাবপোকা অতিদ্রুত খেয়ে ফেলে ।
			<li>অনুমোদিত কীট নাশক ব্যবহার করা
			</ul>
			</p>

			<h5>ফলছিদ্রকারী পোকা</h5>
			<p><b>ভূমিকা:</b> এ পোকার মথ নিশাচর এবং রাতের আলোতে আকৃষ্ট হয়। পোকার কীড়ার আক্রমণে মরিচ ছিদ্র যুক্ত দেখায় ও বাজার মূল্য কমে যায।</br>
			<b>পোকা চেনার উপায়:</b> মা পোকাকে (মথ) সাধারনত রাত ছাড়া দেখা যায় না । কীড়াকে (বাচ্চা) ফলের মধ্যে দেখা যায়। কীড়া লম্বায় প্রায় ২ ইঞ্চি। কীড়ার গায়ের রং কালচে ধূসর থেকে হালকা বাদামী এবং শরীরের উভয় পার্শ্বে লম্বালম্বি হালকা কাল ও বাদামী রংয়ের দাগ দেখা যায়।</p>

			<p><b>ক্ষতির নমুনা:</b>
			<ul>
			<li>কীড়া ফলের বোটার কাছে ছিদ্র করে ভেতরের অংশ খায়।
			<li>একটি পোকা একাধিক ফলে আক্রমন করতে পারে এবং ফলের ভেতর কীড়ার বিষ্ঠা ও পচন দেখা যায়।
			<li>আক্রান্ত ফল অসময়ে পাকে।
			</ul></p>
			<p><b>অনুকুল পরিবেশ:</b> বিকল্প পোষকের উপস্থিতি ।</p>

			<p><b>জীবন চক্র:</b> মথ পাতার নিচে ২০০-৩০০ ডিম পাড়ে। ৩-৪ দিনে ডিম ফোটে কীড়া বের হয়। ছোট কীড়া একত্রে থাকে তবে বড় হলে সারা মাঠ ছড়িয়ে পড়ে। কীড়া ১৪-১৬ দিন পর পুত্তলিতে পরিণত হয়। 
			পুত্তলি ২-৩ ইঞ্চি মাটির গভীরে থাকে।  ১০-১৫ দিন পর পুত্তলি হতে পূর্ণাঙ্গ মথ বের হয়।  জীবনচক্র সম্পন্ন করতে ৩০-৩৫ দিন লাগে । এরা বছরে ৮বার বংশ বি¯তার করে।</p>

			<p><b>ব্যবস্থাপনা :</b> 
			<ul>
			<li>জমি থেকে ডিম ও কীড়া সংগ্রহ করে নষ্ট করা।   
			<li>প্রতি বিঘায় ১৫ টি হারে সেক্স ফেরোমন ফাঁদ ব্যবহার করে পুরুষ মথ মেরে ফেলা।
			<li>প্রতি সপ্তাহে একবার করে পরজীবী পোকা; ট্রাইকোগ্রামা কাইলোনিজ ব্যবহার (প্রতি হেক্টরে ১ গ্রাম ডিম) করা।
			<li>অনুমোদিত কীটনাশক ব্যবহার করা।
			</ul></p>
			<h5>চওড়া মাকড়</h5>
			নাম : চওড়া মাকড়
			<p><b>ভূমিকা:</b> এদের পা ৮ টি বলে মাকড় বলে । বালিকণার মত ক্ষুদ্র বলে দেখা যায় না কিন্তুু  এদের আক্রমণে ফসলের ব্যাপক ক্ষতি হয়ে থাকে।</br>
			<b>মাকড় চেনার উপায়:</b> মাকড় অতি ক্ষুদ্র, খালি চোখে দেখা যায় না, রং সাদা বা হলদে । এরা পাতার নিচে মধ্য শিরা ঘিরে দলবদ্ধভাবে বসবাস করে। দেহ নরম, ডিম্বাকৃতির।  এরা কাঁকড়ার মত দেখায়।</p>

			<p><b>ক্ষতির নমুনা:</b>
			<ul>
			<li>পাতার নীচে থেকে রস চুষে খায় ফলে পাতার শিরার মধ্যকায় এলাকার বাদামী রং ধারণ করে ও শুকিয়ে যায়।
			<li>আক্রান্ত পাতা কুঁকড়িয়ে  যায় এবং কচি পাতার নীচের দিকে বেঁকে পেয়ালা আকৃতির হয়ে যায় ও পাতা সরু হয়।
			<li>ব্যাপক আক্রমণে পাতা ভেঙ্গে যায়।
			<li>ফলন ব্যাপকভাবে কমে যায়।   
			</ul>
			</p>
			
			<p><b>অনুকুল পরিবেশ:</b> বিকল্প পোষক।</p>

			<p><b>জীবন চক্র:</b> স্ত্রী মাকড় পাতার নীচে ৩০-৭৬ টি ডিম পাড়ে।  ২-৩ দিনের মধ্যে ডিম থেকে কীড়া বের হয়।  ২-৩ দিন পর কীড়াগুলো নিম্ফে পরিণত হয় এবং ১ দিন পর পূর্ণাঙ্গ মাকড়ে পরিণত হয়।  পূর্ণাঙ্গ স্ত্রী মাকড় ৮-১৩ দিন বাঁচে ও পুরুষ মাকড়  ৫-৯ দিন বাঁচে।</p>
			
			<p><b>ব্যবস্থাপনা:</b> 
			<li>আক্রমণের শুরুতে হাত দিয়ে আক্রান্ত পাতা সংগ্রহ করে ধ্বংশ করতে হবে।
			<li>প্রতি লিটার পানিতে নিম তেল ৫ মিলি + ৫ মিলি ট্রিকস্ মিশিয়ে পাতার নিচের দিকে ¯েপ্র করতে হবে।
			<li>পাইরিথ্রয়েড জাতীয় কীটনাশক প্রয়োগ যথা সম্ভব এড়িয়ে চলতে হবে।
			<li>অনুমোদিত মাকড়নাশক প্রয়োগ করতে হবে।  
			</ul>
			</p>
			
			<h5>রোগের নাম : ক্ষত, এনথ্রাকনোজ বা ডাইব্যাক</h5>
			<p><b>রোগের কারণ:</b> কলিটোট্রিকাম ক্যাপসিসি নামক ছত্রাক দ্ধারা এ রোগ হয়।</br>
			<b>ভূমিকা:</b> এ রোগের আক্রমণে গাছ বড় হয় না, পাতায় দাগ পড়ে ও ডগা থেকে শুরু হয়ে পুরো গাছ মরে যেতে পারে। মরিচে আক্রমন হলে মরিচের ফলন কম হয় এবং রং বিবর্ণ হওয়ায় বাজার মূল্য কমে যায়।</p>

			<p><b>ক্ষতির নমুনা:</b> 
			<ul>
			
			<li>চারা ও বয়স্ক গাছের পাতা , ডাল, ফুল ফল আক্রান্ত হয়।
			<li>আক্রান্ত পাতা ঝরে যায় ও ডগা উপর হতে মরতে শুরু করে।  
			<li>আক্রান্ত গাছ ফ্যাকাশে বর্ণ ধারণ করে, দুর্বল হয়ে যায় ও ফল ধারণ ক্ষমতা কমে যায়।
			<li>ফলের উপর গোলাকার কাল দাগ পড়ে এবং দাগের চারিদিকে গাঢ় হলুদ রিং বা বলয় থাকে। এ দাগ বৃদ্ধি পেয়ে ফল পঁচিয়ে দেয় ও ঝরে পড়ে।        
			<li>আক্রান্ত গাছ দ্রুত মরে যায।
			</ul>
			</p>
			<p><b>অনুকুল পরিবেশ:</b> আদ্র আবহাওয়া ও অধিক বৃষ্টিপাত এ রোগ বিস্তারে সহায়তা করে।</br>
			<b>বিস্তার:</b> গাছের পরিত্যাক্ত অংশ , বিকল্প পোষক হতে বায়ু, পানি, ইত্যাদির মাধ্যমে বিস্তার লাভ করে। তাছাড়া বীজের মাধ্যমে ও এ রোগের বিস্তার হয়।</p>

			<p><b>ব্যবস্থাপনা:</b>
			<ul>
			<li>সুস্থ গাছ থেকে বীজ সংগ্রহ করতে হবে।
			<li>আক্রান্ত গাছের পরিত্যাক্ত অংশ ধ্বংশ করতে হবে।
			<li>অনুমোদিত ছত্রাকনাশক দ্ধারা বীজ শোধন করে বীজ বপন করতে  হবে।
			<li>ক্ষেতে রোগের আক্রমণ দেখা মাত্র অনুমোদিত ছত্রাকনাশক প্রয়োগ করতে হবে।
			</ul>
			</p>
			
			<h5>পাতা পঁচা</h5>
			<p><b>রোগের নাম</b>: পাতা পঁচা</br>
			<b>রোগের কারণ:</b> চুয়ানিফোরা নামক ছত্রাকের আক্রমনে এ রোগ হয়।</br>
			<b>ভূমিকা:</b> ক্ষেতে আক্রমণ বেশী হলে সম্পূর্ণ ফসল নষ্ট হয়ে যাবার সম্ভাবনা আছে। এ কারনে রোগের আক্রমনের শুরু থেকেই  সাবধানতা অবলম্বন করা উচিত।</p>

			<p><b>ক্ষতির নমুনা:</b><ul>
			<li>চারা ও বয়স্ক গাছের শাখা প্রশাখা, পাতা ফুল ও ফল এ রোগে আক্রান্ত হয়।
			<li>প্রথমে পাতায় পানি ভেজা দাগ দেখা যায়। পরে এ দাগ বৃদ্ধি পায় ও আক্রান্ত অংশ বিবর্ণ হয়ে কালচে রং ধারন করে এবং পাতা দ্রুত পঁচে যায়। 
			<li>অনুকুল পরিবেশে ৫-৭ দিনের মধ্যে সম্পূর্ণ গাছ মরে যেতে পারে।
			</ul>
			<b>অনুকুল পরিবেশ:</b> উচ্চ তাপ মাত্রা ও স্যাঁত স্যাঁতে আবহাওয়ায় এ রোগ দ্রুত ছড়ায় ।</br>
			<b>বিস্তার:</b> বায়ু , আক্রান্ত অংশের মাধ্যমে এ রোগ ছড়ায়। </p>

			<p><b>ব্যবস্থাপনা:</b> ফসলের পরিত্যাক্ত অংশ নষ্ট করতে হবে। গাছ আক্রান্ত হওয়া মাত্রই অনুমোদিত ছত্রাক নাশক স্প্রে করতে হবে।<p>

			<h5>লিফ কার্ল</h5>
			<p><b>রোগের নাম</b> লিফ কার্ল </br>
			<b>রোগের কারণ:</b> একপ্রকার ভাইরাস</br>
			<b>ভূমিকা:</b> যে কোন বয়সের গাছ আক্রান্ত হতে পারে তবে বয়স্ক গাছই বেশী আক্রান্ত হয়। পাতা কুঁকড়িয়ে যায় বলে গাছের সাধারণ বৃদ্ধি ব্যহত হয় ও ফলন কমে যায়।</P>

			<p><b>ক্ষতির নমুনা:</b>
			<ul>
			<li>আক্রান্ত গাছের পাতা কুঁকড়িয়ে যায় ও সাধারণ পাতা অপেক্ষা পুরু হয়।  
			<li>গাছের পর্ব মধ্য ছোট হয় ও গাছ খাট আকারের হয়।
			<li>ফুল ও ফল ধারণ ক্ষমতা কমে যায়।
			<li>ভাইরাস আক্রান্ত গাছ মরে যায় না তবে পুনরায় স্বাভাবিক ও হয় না ।
			</ul>
			
			<b>অনুকুল পরিবেশ:</b> বিকল্প পোষকের উপস্থিতি</br>
			<b>বিস্তার:</b> পোকা দ্বারা এ রোগের বিস্তার ঘটে।</br>
			<b>দমন:</b> আশে পাশের সোলানেসি পরিবারের অন্যান্য পোষক উদ্ভিদ ধ্বংশ করতে হবে। অনুমোদিত কীটনাশক সঠিক মাত্রায় প্রয়োগ করতে হবে।</p>
																
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h3><a href="#">সার প্রয়োগ</a></h3>
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
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">খরচ</a></h3>
						  	
			
						  </div>
						   <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h3><a href="#">ফসল সংগ্রহ</a></h3>
						  	 <p>ফুল আসার পর ১৫-২০ দিনের মধ্যে কাঁচা মরিচ তোলা হয়। তবে মরিচের রং লাল হলে তুলে রোদে শুকিয়ে সংরক্ষণ করা যায়। প্রতি হেক্টরে ফলন কাঁচা ১০-১১ টন ও শুকনো ১.৫-২.০ টন।</p>
			
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
		
          <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">প্রশ্ন  ???</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> মিরপুর ২ ,ঢাকা</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">০১৯৫১১৪৯৩৪৩</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">khandaker3047@gmail.com</span></a></li>
	              </ul>
	            </div>
	            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">লিংক</h2>
              <ul class="list-unstyled">
                <li><a href="index.php"><span class="ion-ios-arrow-round-forward mr-2"></span>হোম</a></li>
                <li><a href="about.php"><span class="ion-ios-arrow-round-forward mr-2"></span>আমাদের সম্পর্কে</a></li>
                <li><a href="team.php"><span class="ion-ios-arrow-round-forward mr-2"></span>বিশেষজ্ঞ </a></li>
                <li><a href="services.php"><span class="ion-ios-arrow-round-forward mr-2"></span>পরামর্শ</a></li>
				  <li><a href="singup.php"><span class="ion-ios-arrow-round-forward mr-2"></span>অ্যাকাউন্ট  খুলুন</a></li>
                <li><a href="contact.php"><span class="ion-ios-arrow-round-forward mr-2"></span>যোগাযোগ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-4">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">সাম্প্রতিক ব্লগ</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">সহজ ঋণ</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">বন্যায় ক্ষতি</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Oct. 16, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">আমাদের সাবস্ক্রাইব করুন!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="ইমেইল দিন">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved কৃষি উন্নয়ন team</br>by</br> <a href="#" target="_blank">Nurul Amin Khandaker</a> || <a href="#">Nazmul Hasan</a> || <a href="#">Rokaiya Sultana</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
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


<?php


		
	}

								}
}
	
	?>
	