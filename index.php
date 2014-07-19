<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
	<head>
    
		<meta charset="utf-8">
		<title>Jump Solutions Inc.</title>
        
        
        <meta name="description" content="I.T. brand leaders and pioneers in information technology to provide solutions  ">
        <meta name="keywords" content="Servers, Storage, Printing, Imaging, Networking, Uninterrupted Power Supply, Virtualization, Point-of-Sale, Disaster Recovery, Data Center, Personal Computing">
        <link rel="shortcut icon" type="text/icon" href="images/ico.ico" />
        <!-- Open Graph -->
        <meta property="og:title" content="Jump Solutions Inc." />
        <meta property="og:description" content="I.T. brand leaders and pioneers in information technology to provide solutions " />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="http://" />
        <meta property="og:image" content="http://.gif" />
        <meta property="og:image:type" content="image/gif" />
        <meta property="og:image:width" content="300" />
        <meta property="og:image:height" content="300" />
        
        <!-- Twitter Card -->
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Jump Solutions Inc." />
        <meta name="twitter:description" content="I.T. brand leaders and pioneers in information technology to provide solutions " />
        <meta name="twitter:creator" content="@jumpsolutions.ph" />
        <meta name="twitter:image:src" content="http://.gif" />
        <meta name="twitter:domain" content="http://jumpsolutions.ph" />
		
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        
		<script type="text/javascript" src="js/jquery.bxslider.js"></script>
        <script type="text/javascript" src="js/plugins/slick/slick.js"></script>
        <script src="js/plugins/jquery.fitvids.js"></script>
        
        <script type="text/javascript">
  			$(document).ready(function(){
    			$('.bxslider').bxSlider({
  					adaptiveHeight: true,
 	 				auto: true,
					autoHover: true,
					pause: 3000,
  					mode: 'fade',
				});
				function zoom(){}
				$("#basic > div:gt(0)").hide();
					setInterval(function() { 
						$('#basic > div:first')
						.fadeOut(1000)
						.next()
						.fadeIn(1000)
						.end()
						.appendTo('#basic');
						},  3000);
				$("#basic-news > div:gt(0)").hide();
					setInterval(function() { 
						$('#basic-news > div:first')
						.fadeOut(1000)
						.next()
						.fadeIn(1000)
						.end()
						.appendTo('#basic-news');
						},  2000);
				$('#jump-video').hover(
					function(){
						$(this).attr("controls", "controls");
					},
					function(){
						$(this).removeAttr("controls");
					}
				);
				$('.awards').slick({
                	centerMode: true,
					centerPadding: '0px',
					slidesToShow: 3,
					touchMove: true,
					swipe: true,
					arrows: false,
					autoplay: true,
  					autoplaySpeed: 2000,
					responsive: [
						{
							breakpoint: 768,
							settings: {
								arrows: false,
								centerMode: true,
								centerPadding: '0px',
								slidesToShow: 2
								}
						},
						{
							breakpoint: 480,
							settings: {
								arrows: false,
								centerMode: true,
								centerPadding: '190px',
								slidesToShow: 1
								}
						}
					]
					
				});
				$('.testimonials').slick({
					slidesToShow: 1,slidesToScroll: 1,autoplay: true,
					autoHeight:true,
					autoplaySpeed: 2000,
				});
				$("#izooms").mouseover(function(){
					alert("zoom");
					$(this).addClass('');
				});
			});
		</script>
        
        <link rel="stylesheet" type="text/css" href="js/plugins/slick/slick.css" />
       
        
        <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->
         <link type="text/css" href="css/jquery.bxslider.css" rel="stylesheet" />
    	<link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/navigation.css" />
        <link rel="stylesheet" type="text/css" href="css/showcase.css" />
        <link rel="stylesheet" type="text/css" href="css/responsive.css" />
        
        
    
    </head>

	<body>
		
        <div id="wapper">
        	
            
            <div id="header">
            
				<?php include('navigation.php'); ?>
			
			<!-- end of header -->
            </div>
            
            
            
  			<!--<div class="slideshow">
    			
                <div id="slides">-->
                	<ul class="bxslider">
                     	<li><img src="images/promos/1.png" alt="Jump Solutions Inc"></li>
                     	<li><a href="promos.php?"><img src="images/promos/2.png" alt="Jump Solutions Hp Promo"></a></li>
                        <li><a href="promos.php?"><img src="images/promos/3.png" alt="Jump Solutions Hp Promo"></a></li>
						<li><a href="promos.php?#HP_MID_YEAR_SALE"><img src="images/promos/5.png" alt="Jump Solutions hp Promo"></a></li>
						<li><a href="promos.php?#AVAYA"><img src="images/promos/6.png" alt="Jump Solutions Avaya Promo"></a></li>
						<li><a href="promos.php?#VMWARE"><img src="images/promos/7.png" alt="Jump Solutions Avaya Promo"></a></li>
                        <li><img src="images/promos/4.png" alt="Jump Solutions Inc"></li>
                    </ul>
      				
                <!--end of slide    
    			</div> -->    
            
            
            <!-- end of slideshow 
  			</div>-->
            
            
            <div id="top_products" class="clearfix">
            
            	<div id="tp">
                	<h1>Some of our top Products</h1>
                	<br />
                	<p>We pride ourselves in collaborating with the I.T. brand leaders and pioneers in information technologies to provide solutions. </p>
                </div>
                
                <div class="button"><a href="prods.php?category=coreproducts">View More</a></div>
            
            
            <!-- end of top_products -->
            </div>
            
            <?php include('videos.php'); ?>
            
            
            <div id="showcase">
            	
                <center>
               		<br />
                    <br />
                	<h1 style="color:#F33">Why Jump Solutions Inc.?</h1>
                    <br />
                    <br />
                </center>
            
            
            <!-- end of showcase -->
            </div>
            
            
            <div class="" style="max-width:1100px;margin:auto;">
                <div class="awards center">
                        <div><img src="images/awards/3.jpg" alt="Jump Solutions Awards"></div>
                        <div><img src="images/awards/8.jpg" alt="Jump Solutions Awards"></div>
                        <div><img src="images/awards/9.jpg" alt="Jump Solutions Awards"></div>
                        <div><img src="images/awards/10.jpg" alt="Jump Solutions Awards"></div>
               </div>
               
                
				<!--
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
				<!--
                <p class="jcarousel-pagination"></p>
                -->
            </div>
            
            
                
            <div id="marketing">
            <div  class="clearfix"></div>
             <div id="award-others">
               <br />
    <img src="images/awards/others/1.png" id="izoom"  alt="Jump Solutions Awards"  />
    <img src="images/awards/others/award-1.png"  alt="Jump Solutions Awards" style="width:30%; height:auto;margin:0px -35px;"/>
    <img src="images/awards/others/2.png"  id="izoom" alt="Jump Solutions Awards"  />
    <img src="images/awards/others/award-2.png"  alt="Jump Solutions Awards"  style="width:50%; height:auto;margin:0px -20px;"/>
    <img src="images/awards/others/3.png"  id="izoom"  alt="Jump Solutions Awards" style="margin-left:-17px" />
                    
</div>
            
            	<div id="wordings" style="display:none;">
            	
            		<center><h4 style="color:#f33;">Why Choose Us?</h4></center>
                	<br />
                	
                    <ul>
                		<li><p>We are a one stop store</p></li>
                        <li><p>We were able to sustain our stand in the I.T business</p></li>
                        <li><p>We provides software, security, man power and authorized service center.</p></li> 
                        <li><p>We focus on data center hardware, infrastructure, communication and end-point equipment’s. </p></li>
                         
                	</ul>
                   
            	<!-- end of wordings -->
            	</div>
                
            
            	<div id="testimonials" >
            	
                	<h3 style="color:#f33;text-align:left;">Testimonials</h3>
                    <br />
                    
                    
                    
                    
                    <div class="testimonials">
                    
                    
                    
                    <div style="">
                        	<img src="images/testimonials/HP-Premier-Business-Partner.jpg" style="width:10%;height:auto;float:left;margin:20px;" />
                            <div style="float:left;width:80%;margin:20px;height:100px;">
                        <div style="clear:both;"></div>
                            <marquee direction="up" scrollamount="2" onmouseover="this.scrollAmount = 0" onmouseout="this.scrollAmount = 2"  style="height:100px;" >
<p>It is apparent that JUMP Solutions (formerly known as AXIS Computers Corporation) has been 
a strong partner for HP for the past 3 years. From IPG and PSG days to what is now known as PPS, HP 
has valued the company's contributions in our business. 
 <br />
Thru the years, JUMP Solutions has widened their skills and exhibits the true meaning of customer 
support and customer care- being one of the thrust of HP. And because of this, JUMP Solutions is 
deemed as one of HP's Gold Partners. With its innovative approach, results oriented team and 
exemplary skills, HP is proud to call JUMP Solutions a partner in technological growth. There's no other 
way but to go up and HP looks forward to JUMP Solutions' desire to push barriers, to broaden its 
clientele and take HP's solutions and products to greater heights.</p>
</marquee>
</div>
                        	<br>
                        	<h5 style="text-align:right;">- Ms. Joan G. Francisco <br />
Partners Business Manager <br />
Printing and Personal Systems (PPS) | HP Philippines </h5>
                    	</div>
                    
                    
                        <div style="">
                        	<img src="images/testimonials/ACER.jpeg" style="width:10%;height:auto;float:left;margin:20px;" />
<p>"Working with Jump Solutions as Acer Philippines' partner reseller is an endeavor where together we work closely in efficient support in growing the IT business together."</p>
                        	<br>
                        	<h5 style="text-align:right;">Ms. Jeannette Vasquez <br />Business Partner Lead – Corporate</h5>
                    	</div>
                        <div>
                        	<img src="images/testimonials/CISCO-Select Certified.jpg" style="width:10%;height:auto;float:left;margin:20px;" />
                    		<p>“A YoY growth of sales for more than 100% in just 3 quarters is a commendable record in our partnership with Jump. As a Cisco partner, Jump Solutions helps us deliver an increasing market share for Data Centre and to our legacy switches. End-user total coverage and providing Cisco’s product knowledge to our named and new customers. Jump Solutions is one of the leaders in providing total IT solution to its client. Their expertise and post-sales support is extremely recognized across all verticals. Working with them as a Cisco partner, is an asset to our company.”  </p>
                        	<br>
                        	<h5 style="text-align:right;">Mr. Lew  Francis Nombres <br />Cisco- Virtual Sales - vBM</h5>
                    	</div>
                        <div>
                        	<img src="images/testimonials/DELL.PNG" style="width:10%;height:auto;float:left;margin:20px;" />
                    		<p>“Jump Solutions has been a valuable partner of Dell. They are easy to do business with, and customers can leverage on their knowledge and experience in various enterprise solutions. We look forward to more years of cooperation and partnership.” </p>
                        	<br>
                        	<h5 style="text-align:right;">Mr. Jayson Ong <br />Channel Account Manager </h5>
                    	</div>
                        <div>
                        	<img src="images/testimonials/Epson.png" style="width:10%;height:auto;float:left;margin:20px;" />
                        
                        <div style="float:left;width:80%;margin:20px;height:100px;">
                        <div style="clear:both;"></div>
                            <marquee direction="up" scrollamount="2" onmouseover="this.scrollAmount = 0" onmouseout="this.scrollAmount = 2"  style="height:100px;" >
                    		<p >“Jump Solutions, Inc. has established its name among successful I.T. Dealer in the country. Working with Jumps Solutions Inc. not only ensures Epson that our products will become top of mind but also ensures good business relationship and good future ahead of us. A well-known sales achiever, Jump Solution Inc, created opportunities which resulted to the deployment of Epson products to large corporations in the Philippines. With these opportunities, Epson was able to showcase its Projectors, Inkjet Printers and POS Printers to their prestigious clientless. 
<br /><br />
Epson Philippines Corporation, without a doubt benefitted a lot with the partnership it had since 2011. Jump Solutions Inc, leaved up to its expectations as prime IT Sales Company today through its hardworking and efficient sales and technical team. 
<br /><br />
The Two(2) most significant improvements that Epson Philippines Corporations had from working with Jump Solutions are the increase of installations and market coverage of Epson Products particularly the POS Printers and Serial Impact Dot matrix printer.  Epson Philippines Corporations selected Jump Solutions Inc. as a partner was due to their industry knowledge, market share, and most specially the people that form Jump Solutions Inc.”
  </p></marquee>
  
  </div>
                        	<br>
                        	<h5 style="text-align:right;">Ms. Macy Manahan-Socorro  <br />Corporate Channel Management
                     <br />Corporate Sales Department
</h5>
                    	</div>
                       
                    </div>
                	
            	<!-- end of testimonials -->
            	</div>
            
            
            <div  class="clearfix"></div>
            
            <!-- end of marketing -->
            </div>
            
            
            
            <div id="Partnership">
            	<h3>Partners</h3>
                
            	<ul>
                    <li><a href="http://www8.hp.com/ph/en/home.html" target="_blank" class="partner hp"></a></li>
                    <li><a href="http://www.dell.com.ph/" target="_blank" class="partner dell"></a></li>
                    <li><a href="http://www.cisco.com/web/PH/about/contacts.html" target="_blank" class="partner cisco"></a></li>
                    <li><a href="http://www.apc.com/home/ph/en/" target="_blank" class="partner apc"></a></li>
                    <li><a href="http://www.epson.com.ph/" target="_blank" class="partner epson"></a></li>
                    <li><a href="http://solutions.3mphilippines.com.ph/wps/portal/3M/en_PH/Products3/Dir/" target="_blank" class="partner treeam"></a></li> 
                    
                    
                    
                    <li><a href="http://windows.microsoft.com/en-PH/windows/home" target="_blank" class="partner microsoft"></a></li>
                    <li><a href="http://www.samsung.com/ph/" target="_blank" class="partner samsung"></a></li>
                    
                    
                    <li><a href="http://www.lenovo.com/ph/en/" target="_blank" class="partner lenovo"></a></li>
                    <li><a href="http://www.vmware.com/ap/" target="_blank" class="partner vmware"></a></li>
                    <li><a href="http://www.ibm.com/ph/en/" target="_blank" class="partner ibm"></a></li>
                    
                    <li><a href="http://www.avaya.com/apac/" target="_blank" class="partner avaya"></a></li>
                    <li><a href="http://www.panduit.com/en/home" target="_blank" class="partner panduit"></a></li>
                    <li><a href="http://www.ruckuswireless.com/" target="_blank" class="partner ruckus"></a></li>
                    <li><a href="http://www.acer.com.ph/ac/en/PH/content/home" target="_blank" class="partner acer"></a></li>
                    
                    
                </ul>
                            
         <!-- Partnership -->
         </div>
            
            
            
            
            
            <?php include('footer.php'); ?>
            
    
    
    	<!-- end of wapper -->
        </div>
        
    <script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-4390117-9', 'jumpsolutions.ph');
	  ga('send', 'pageview');

	</script>
    
	</body>
</html>
