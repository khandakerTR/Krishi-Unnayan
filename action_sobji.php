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
		
		//<option value="1">ঝিঙ্গা</option>
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
          	<span class="subheading"style="font-size:30px;">ঝিঙ্গা</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জলবায়ু ও মাটি </a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জাত</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-insurance mr-2"></span>বীজ বপনের সময়  ও হার</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>জমি নির্বাচন এবং তৈরিঃ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>ঝিংগায় সারের পরিমাণ ও প্রয়োগ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>পরবর্তী পরিচর্যা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>ফল ধারণ বৃদ্ধিতে কৃত্রিম পরাগায়ন</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-8"><span class="flaticon-business mr-2"></span>ফসল তোলা (ভক্ষণযোগ্য পরিপক্কতা সনাক্তকরণ)</a>
						  </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-9"><span class="flaticon-business mr-2"></span>খরচ</a>
						  </li>
						
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h4><a href="#">জলবায়ু ও মাটি </a></h4>
						  	<p>
দীর্ঘ সময়ব্যাপী উষ্ণ ও আর্দ্র আবহাওয়া এবং প্রচুর সূর্যালোক থাকে এমন এলাকা ঝিঙ্গা চাষের জন্য উত্তম। সুনিষ্কাশিত উচ্চ জৈব পদার্থ সমৃদ্ধ দোঁআশ মাটি ঝিঙ্গার সফল চাষের জন্য উত্তম। 
							</p>
							
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  	
						  	<h4><a href="#">জাত</a></h4>
						  					 <p>
											<ul>বারি ঝিংগা -১
											<li>  আকর্ষণীয় গাঢ় সবুজ রংয়ের ফল। 
											<li>   লম্বা গড়ে ২৭ সেমি, ওজন ১২৫ গ্রাম। 
											<li>   হেক্টর প্রতি ফলন ১০-১৫ টন। 
											<li>    ২০০৮ সালে অবমুক্ত
											</ul>
											<b>জীবনকাল</b>
											১২০-১৪০ দিন। 
										</p>
										
										 
												  
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-7">
						  	
						  	<h4><a href="#">বীজ বপনের সময়  ও হার</a></h4>
							
						  	<p>
							ফেব্রুয়ারি থেকে মার্চ মাস পর্যন্ত বীজ বপনের উপযুক্ত সময়।</P>
							<h4>বীজ হার</h4> 
							হেক্টর প্রতি ৩-৪ কেজি বা শতাংশ প্রতি ১২-১৫ গ্রাম বীজের প্রয়োজন হয়। 
						
                        
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  	
						  	<h4><a href="#">জমি নির্বাচন এবং তৈরি</a></h4>
							
						  	<p>ঝিঙ্গা চাষে সেচ ও নিকাশের উত্তম সুবিধাযুক্ত এবং পর্যাপ্ত সূর্যালোক প্রায় এমন জমি নির্বাচন করতে হবে। একই গাছের শিকড় বৃদ্ধির জন্য জমি এবং গর্ত উত্তমরুপে তৈরি করতে হয়।  এ জন্য জমিকে প্রথমে ভাল ভাবে চাষ ও মই দিয়ে এমনভাবে তৈরি করতে হবে যেন জমিতে কোন বড় ঢিলা এবং আগাছা না থাকে। </P>

<p><h4>বেড তৈরিঃ</h4> বেডের উচ্চতা হবে ১৫-২০ সেমি। বেডের প্রস্থ হবে ১.২ মিটার এবং লম্বা জমির দৈঘ্য অনুসারে সুবিধামত নিতে হবে। এভাবে পরপর বেড তৈরি করতে হবে। এরূপ পাশাপাশি দুইটি বেডের মাঝখানে ৬০ সেমি ব্যাসের সেচ ও নিকাশ নালা থাকবে এবং ফসল পরিচর্যার সুবিধার্থে প্রতি দুবেড পর পর ৩০ সেমি প্রশস্ত নালা থাকবে। </p>

<p><h4>মাদা তৈরি ও চারা রোপণঃ</h4> মাদার আকার হবে ব্যাস ৫০ সেমি, গভীর ৫০ সেমি এবং তলদেশ ৫০ সেমি। ৬০ সেমি প্রশস্ত সেচ ও নিকাশ নালা সংলগ্ন উভয় বেডের কিনারা হইতে ৬০ সেমি বাদ দিয়ে মাদার কেন্দ্র ধরে ২ মিটার অন্তর অন্তর এক সারিতে মাদা তৈরি করতে হবে। প্রতি বেডে এক সারিতে ১৬-১৭ দিন বয়সের চারা লাগাতে হবে। </p>
                        
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h4><a href="#">ঝিংগায় সারের পরিমাণ ও প্রয়োগ পদ্ধতি</a></h4>
						  	<p><table style="width:50%" height="45%">
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
							<tr>
								<td> জিপসামঃ </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
								</tr> 
								<tr>						
								<td> দস্তা সারঃ </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
								</tr> 
							<tr>						
                            <td> বোরাক্সঃ </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr> 	
							<tr>						
                            <td> ম্যাগনেশিয়ামঃ </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr> 								
							</table></p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
	
						  	<h4><a href="#">পরবর্তী পরিচর্যা</a></h4>
						  	   
<p><h4>সেচ</h4> দেওয়াঃ ঝিংগা গ্রীষ্মকালে চাষ করা হয়। গ্রীষ্মকালে মাঝে মাঝে বৃষ্টি হয় বলে তখন সবসময় পানি সেচের প্রয়োজন নাও হতে পারে। কিন্তু ফেব্রুয়ারির শেষ সময় থেকে মে মাস পর্যন্ত খুব শুষ্ক আবহাওয়া বিরাজ করে। তখন অনেক সময় কারণ বৃষ্টিই থাকে না। উক্ত সময়ে ৫-৬ দিন অন্তর  নিয়মিত পানি সেচের প্রয়োজন হয়। </p>

<p><h4>বাউনি দেওয়াঃ</h4> ঝিংগার কাংখিত ফলন পেতে হলে অবশ্যই মাচায় চাষ করতে হবে। ঝিংগা মাটিতে চাষ করলে ফলের একদিক বিবর্ণ হয়ে বাজারমূল্য কমে যায়, ফলে পচন ধরে এবং প্রাকৃতিক পরাগায়ন কম হওয়ায় ফলন হ্রাস পায়।</p>
 
<p><h4>মালচিং</h4> সেচের পর জমিতে চটা বাধেঁ। চটা বাধঁলে গাছের শিকড়াঞ্চলে বাতাস চলাচল ব্যাহত হয়। কাজেই প্রত্যেক সেচের পর হালকা মালচ করে গাছের গোড়ার মাটির চটা ভেঙ্গে দিতে হবে। </p>

<p><h4>সার উপরি প্রয়োগঃ</h4> চারা রোপণের পর গাছ প্রতি সারের উপরি প্রয়োগের যে মাত্রা উল্লেখ করা আছে তা প্রয়োগ করতে হবে। </p>
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
						  	  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h4><a href="#"> ফল ধারণ বৃদ্ধিতে কৃত্রিম পরাগায়ন</a></h4>
							 

<p>ঝিংগার পরাগায়ন প্রধানতঃ মৌমাছির দ্বারা সম্পন্ন হয়। প্রাকৃতিক পরাগায়নের মাধ্যমে বেশী ফল ধরার জন্য হেক্টর প্রতি তিনটি মৌমাছির কলোনী স্থাপন করা প্রয়োজন। এছাড়াও কৃত্রিম পরাগায়ন করে ঝিংগার ফলন শতকরা ২০-২৫ ভাগ পর্যন্ত বৃদ্ধি করা সম্ভব। </p>

ঝিংগার ফুল বিকালে ফোটে। বিকাল ৪ঃ০০ সন্ধ্যার মধ্যে ফুল ফোটা শেষ হয়। এর পরাগায়ন ফুল ফোটার পর থেকে সন্ধ্যা পর্যন্ত এবং পরদিন সকালের অগ্রভাগে হয়। ঝিঙ্গার কৃত্রিম পরাগায়নে ভাল ফলন পাওয়া যায়। কৃত্রিম পরাগায়নের নিয়ম হলো ফুল ফোটার পর পুরুষ ফুল ছিড়েঁ নিয়ে ফুলের পাপড়ি 
অপসারণ করা হয় এবং ফলের পরাগধানী (যার মধ্যে পরাগরেণু থাকে) আস্তে করে স্ত্রী ফুলের গর্ভমুন্ডে (যেটি গর্ভাশয়ের পিছনে পাপড়ির মাঝখানে থাকে) ঘষে দেয়া হয়। 
						  	
			
						  </div>
						    <div class="tab-pane container p-0 fade" id="services-8">
						  	
						  	<h4><a href="#"> ফসল তোলা (ভক্ষণযোগ্য পরিপক্কতা সনাক্তকরণ)</a></h4>
							 

<p>ফসল তোলা (ভক্ষণযোগ্য পরিপক্কতা সনাক্তকরণ)
•    ঝিঙ্গার ফল পরাগায়নের ৮-১০ দিন পর সংগ্রহের উপযোগী হয়।
•    ফল মসৃণ ও উজ্জল দেখাবে। 

</p>

<h4>ফলন</h4>
ভালো জাত উর্বর মাটিতে উত্তমরুপে চাষ করতে পারলে হেক্টর প্রতি ১০-১৫ টন (শতাংশ প্রতি ৪০-৬০ কেজি ) ফলন পাওয়া সম্ভব।< 
						  	
			
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
		// <option value="2">মূলা</option>		  
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
          	<span class="subheading"style="font-size:30px;">মূলা</span>
          </div>
        </div>
  			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span> জমি ও মাটি</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>জাত</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span> বীজ হার ও বপন </a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>সারের মাত্রা</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-business mr-2"></span>পরিচর্যা</a>
						  </li>
						
							  </li>
						    <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li></ul>
						
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
					
						  	<h3><a href="#">জমি ও মাটি</a></h3>
						  	<p>উঁচু, মাঝারি উঁচু ও মাঝারি নিচু জমিতে মূলা চাষ করা যায়। সুনিষ্কাশিত বেলে দোয়াশ মাটি মূলা চাষের জন্য ভাল। এটেল মাটিতে মূলার বাড় বাড়তি কম হয়। মূলা চাষের জন্য জমি গভীরভাবে ধুলো ধুলো করে চাষ করতে হয়। ছাই ও জৈব সার বেশী ব্যবহারে মূলার বাড় বাড়তি ভাল হয়।</p>
						  </div>
						 
						  <div class="tab-pane container p-0 fade" id="services-2">
						  
						  	<h3><a href="#">জাত</a></h3>
						  	<p>একসময় জাপানের বিখ্যাত তাসাকি সান জাতের মূলার মাধ্যমে এ দেশে উচ্চফলনশীল মূলার আবাদ শুরু হলেও এখন মূলার প্রায় ২৫টি জাত চাষ হচ্ছে। 
							আসছে নিত্য নতুন স্বল্প জীবনকালের অধিক ফলনশীল হাইব্রিড জাত। উল্লেখযোগ্য জাত সমূহ হল বারি মূলা ১, বারি মূলা ২, বারি মূলা ৩, এভারেষ্ট, হোয়াইট প্রিন্স, বিপ্লব ৯৪, হিমালয় এফ১, সুপার ৪০, মুক্তি এফ১, তাসাকী, কুইক ৪০, রকি ৪৫, হোয়াইট রকেট, হোয়াইট ৪০, জি চেটকি, সুফলা ৪০, বিএসবিডি ২১০১ এফ১, আনারকলি, দুর্বার, রকেট এফ১, সামার বেষ্ট এফ১, হ্যাভেন এফ১, মিনো আর্লি লং হোয়াই, বরকতি ৪০ এফ১, পাইলট এফ১, সিগমা ৪০ ইত্যাদি। 
							নিচে মূলার বিভিন্ন জাতের সংক্ষিপ্ত পরিচিতি দেয়া হল-</p>
							<h4>বারিমূলা ১ (তাসাকিসান)-</h4><p>  ভাদ্র থেকে কার্তিক মাসে বীজ বুনতে হয়। বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ ধবধবে সাদা, বেলুনাকৃতি, লম্বা ও বড়, দৈর্ঘ্যে প্রায় ৩৫ সেন্টিমিটার, প্রতিটি মূলার গড় ওজন ১ কেজি। 
							দেশী মূলার মত অত ঝাঁঝ নেই। প্রতি হেক্টরে ফলন ৬৫-৭০ টন।</p>
							<h4>বারিমূলা ২ (পিংকী)-</h4>
							<p> ভাদ্র থেকে কার্তিক মাসে বীজ বুনতে হয়। বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ লালচে, নলাকৃতি, দৈর্ঘ্যে প্রায় ২৫-৩০ সেন্টিমিটার, মধ্যমাকার, প্রতিটি মূলার গড় ওজন ৯০০ গ্রাম। শাক খাওয়ার উপযুক্ত। প্রতি হেক্টরে ফলন ৬৫-৭০ টন। </p>
							<h4>বারিমূলা ৩ (দ্রুতি)-</h4>
							<p>ভাদ্র থেকে কার্তিক মাসে বীজ বুনতে হয়। বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ সাদা, নলাকৃতি। পাতার কিনারা ঢেউ খেলানো।
							মূলার অর্ধেক অংশ মাটির উপরে থাকে। প্রতিটি মূলার গড় ওজন ৪০০-৬০০ গ্রাম। প্রতি হেক্টরে ফলন ৪০-৪৫ টন। জীবনকাল ৪০-৪৫ দিন। রোগ পোকার আক্রমণ প্রতিরোধী। 
							এ দেশের আবহাওয়ায় ভাল বীজ উৎপাদন করা যায়। প্রতি হেক্টরে প্রায় ১.২-১.৩ টন বীজ পাওয়া যায়</p>
							<h4>এভারেষ্ট এফ১-</h4>
							<p>সারা বছর চাষ করা যায়। একই জমিতে একই মৌসুমে ৩ বার চাষ করা যায়। সহজে ফুল আসেনা। 
							বীজ বোনার ৪০-৪৫ দিন পর থেকেই মূলা তোলা যায়। মূলার রঙ সাদা, নলাকৃতি, ছোট আকারের, প্রতিটি মূলার গড় ওজন ৪০০-৫০০ গ্রাম। শাক খাওয়ার উপযুক্ত। প্রতি হেক্টরে ফলন ৫০-৬০ টন।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-3">
						  
						  	<h3><a href="#">বীজ হার ও বপন</a></h3>
						  	<p>আশ্বিন থেকে কার্তিক মাসের মধ্যেই অধিকাংশ মূলার বীজ বপন করা হয়। প্রতি হেক্টরে বপনের জন্য ২.৫-৩.০ কেজি বীজের প্রয়োজন হয়।
							সাধারণতঃ ছিটিয়ে বীজ বপন করা হয়। তবে সারিতে বপন করলে পরিচর্যার সুবিধে হয়। সারিতে বুনতে হলে এক সারি থেকে আর এক সারির দূরত্ব দিতে হবে ২৫-৩০ সেমি.।</P>

                      
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-4">
						  	
						  	<h3><a href="#">সারের মাত্রা</a></h3>
						  
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
                            <td> গোবরঃ </td>          <td align ="left"><?php  print round($gobor, 2);?> কেজি</td>
							</tr>                          
							</table>
                              </p>
						  </div>
						  
						  <div class="tab-pane container p-0 fade" id="services-5">
						  	
						  	<h3><a href="#">সার প্রয়োগ পদ্ধতি</a></h3>
						  	<p>জমি তৈরির সময় সবটুকু জৈব সার, টিএসপি ও অর্ধেক এমওপি সার মাটির সাথে মিশিয়ে দিতে হবে। 
							ইউরিয়া ও বাকি অর্ধেক এমওপি সার সমান ২ কিস্তিতে ভাগে ভাগ করে বীজ বপনের পর তৃতীয় ও পঞ্চম সপ্তাহে ছিটিয়ে সেচ দিতে হবে। 
							মূলার বীজ উৎপাদন করতে হলে জমিতে অবশ্যই বোরন সার হিসেবে বোরিক পাউডার/বোরক্স ব্যবহার করতে হবে। প্রতি হেক্টরে ১০-১৫ কেজি বোরিক এসিড/বোরাক্স দিলেই চলে।</p>
						  </div>
						  <div class="tab-pane container p-0 fade" id="services-6">
						  	
						  	<h3><a href="#">পরিচর্যা</a></h3>
						  	
						<p> বীজ বপনের ৭-১০ দিন পর অতিরিক্ত চারা তুলে পাতলা করে দিতে হবে। ৩০ সেমি. দূরত্বে একটি করে চারা রাখা ভাল।
						মাটিতে রস কম থাকলে সেচ দিতে হবে। প্রতি কিসি-র সার উপরি প্রয়োগের পর পরই সেচ দিতে হবে। 
						আগাছা পরিষ্কার করে দিতে হবে। মাটি শক্ত হয়ে গেলে নিড়ানী দিয়ে মাটির উপরের চটা ভেঙ্গে দিতে হবে।</p>
						  
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
		// <option value="3">ঢেঁড়শ</option>
	}
	else if ($jat==4)
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
          	<span class="subheading"style="font-size:30px;">বাধা কপি</span>
          </div>
        </div>
    			<div class="row tabulation mt-4 ftco-animate">
  				<div class="col-md-4">
						<ul class="nav nav-pills nav-fill d-md-flex d-block flex-column">
						  <li class="nav-item text-left">
						    <a class="nav-link active py-4" data-toggle="tab" href="#services-1"><span class="flaticon-analysis mr-2"></span>জাত</a>
						  </li>
						 
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-2"><span class="flaticon-business mr-2"></span>লাগানোর সময়</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-7"><span class="flaticon-insurance mr-2"></span>বীজের পরিমাণ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-3"><span class="flaticon-insurance mr-2"></span>চারা উৎপাদন পদ্ধতি</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-4"><span class="flaticon-money mr-2"></span>জমি তৈরি ও চারা রোপণ</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-5"><span class="flaticon-rating mr-2"></span>সার প্রয়োগ ও সেচ দেয়া</a>
						  </li>
						  <li class="nav-item text-left">
						    <a class="nav-link py-4" data-toggle="tab" href="#services-6"><span class="flaticon-search-engine mr-2"></span>খরচ</a>
						  </li>
						</ul>
					</div>
					<div class="col-md-8">
						<div class="tab-content">
						  <div class="tab-pane container p-0 active" id="services-1">
						  	
						  	<h4><a href="#">জাত</a></h4>
						  	<p>আগাম জাত লাগাতে চাইলে লাগাতে হবে কে কে ক্রস এবং এক্সপ্রেস ক্রস জাত দুটি। 
							মধ্যম সময়ের উপযোগী জাত হল কে ওয়াই ক্রয়, এটলাস ৭০, টোকিও প্রাইড, গ্রীন এক্সপ্রেস, প্রভাতী ইত্যাদি। 
							আর দেরীতে লাগাতে চাইলে লাগাতে হবে এটলাস ৭০, লিও ৮০, সেভয়, রুবি বল, ড্রাম হেড ইত্যাদি। এ দেশের আবহাওয়ায় বীজ উৎপাদন করতে চইলে করতে হবে বারি বাঁধাকপি ২ (অগ্রদূত), ইপসা বাঁধাকপি ১। 
							সমপ্রতিক আমদানীকৃত হাইব্রিড জাতসমূহের মধ্যে উল্লেখযোগ্য হল সামার ওয়ারিয়র এফ ১, লরেন্স এফ ১, গ্রীন ৬২১ এফ ১, সামার ষ্টার এফ ১, গ্রীন কর্নেট এফ ১, অটাম কুইন এফ ১, সুপার ট্রপিক এফ ১, সামার বয় এফ ১, গ্রীন বল ৪০ এফ ১, সুপ্রিম কুইন এফ ১ ইত্যাদি।
							</p>
							
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
	else if ($jat==5)
	{
		//<option value="5">লাউ</option>								  
	}
	else if ($jat==6)
	{
		//<option value="6">শিম</option>								  
	}
	else if ($jat==7)
	{
		//<option value="7">করলা</option>								  
	}

	else if ($jat==8)
	{
		//<option value="8">টমেটো</option>								  
	} 
								}
}
	
	?>
	
