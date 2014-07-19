<?php 
	$title = "Events";
	
if(isset($_GET['val'])){
	
	
	$evnt = $_GET['val'];
	
	$evntTitle = 'Your Event Title';
	$evtDate = '';
	$evtDesc = "";
	$venue = "";
	$imgpath = "";
	$evntImages = "";
	$images = array();
	
	//TO SET THE BACKGROUND PAGES OF THE PROFILE INDEX
		//SET THE LOCATION OF THE DIRECTORY TO SCAN
		$directory = 'images/event/JUMP-IBM-EU-EVENT-BUBBA-GUMP/';
		
		//SCAN THE DIRECTORY AND REMOVE THE DOTS
		$scan = array_diff(scandir($directory), array('..', '.'));
		
		//ALLOW ONLY CERTAIN IMAGE TYPES
		$files = glob("{$directory}*.{jpg,gif,png}", GLOB_BRACE);
		
		$short_names = str_replace($directory,"",$files);
		/*
		echo '<script>console.log('.$short_names.')</script>';
		*/
	if($evnt == 'HP-EU-EVENT'){
		$evntTitle = 'HP Philippines and Jump Solutions Power Up!';
		$evtDate = 'May 7, 2014';
		$venue = 'Buddha Bar Manila';
		$evtDesc = 'Attendees of the event were updated with HP’s latest Printing and Personal Product (Notebook, Desktop, Printers & Supplies) offerings conducted by HP experts. They were also able to have a personal look and feel with the latest HP products.';
		$imgpath = "";
		$images = array('HP.jpg','HP (1).jpg','HP (2).jpg');
		
		
		foreach($images as $value ){
			
			//if (!$value->isDot()) {
			//}
			
			$imgpath = 'images/event/HP-EU-EVENT/';
			$evntImages .= 
				'<div class="item">
               		<img src="'.$imgpath.''.$value.'" width="1100" height="500" alt="Jump Solutions Inc Events" />
            	</div>';
		}
		
	
	}if($evnt == 'JUMP-IBM-EU-EVENT'){
		$evntTitle = 'Technology 
JUMP-Start With 
IBM & Jump 
Solutions, Inc';
		$evtDate = 'June 26, 2013';
		$venue = 'Mandarin Oriental 
Manila 
';
		$evtDesc = "Attendees discovered the latest IBM 
System x & Storage products as 
discussed by the IBM expert, Mr. Reggie 
Castillo - IBM STG Architect 
(Systems & Technology Group 
IBM Philippines, Inc.). Actual demo units 
were showcased during the event";
		$imgpath = 'images/event/JUMP-IBM-EU-EVENT/';
		//SCAN THE DIRECTORY AND REMOVE THE DOTS
		$scan = array_diff(scandir($imgpath), array('..', '.'));
		
		foreach($scan as $value ){
			
			$evntImages .= 
				'<div class="item">
               		<img src="'.$imgpath.''.$value.'" width="1100" height="500" alt="Jump Solutions Inc Events" />
            	</div>';
		}
	}if($evnt == 'JUMP-IBM-EU-EVENT-BUBBA-GUMP'){
		$evntTitle = 'Lunch & Learn Product Session with IBM & Jump Solutions';
		$evtDate = 'October 7, 2013';
		$venue = 'Bubba Gump Restaurant Gump House Function Room';
		$evtDesc = "A simple lunch treat for our customers while learning the IBM technology in an enjoyable manner.";
		$imgpath = 'images/event/JUMP-IBM-EU-EVENT-BUBBA-GUMP/';
		//SCAN THE DIRECTORY AND REMOVE THE DOTS
		$scan = array_diff(scandir($imgpath), array('..', '.'));
		
		foreach($scan as $value ){
			
			$evntImages .= 
				'<div class="item">
               		<img src="'.$imgpath.''.$value.'" width="1100" height="500" alt="Jump Solutions Inc Events" />
            	</div>';
		}
	}if($evnt == 'LENOVO-EU-EVENT'){
		$evntTitle = 'Intel and Lenovo Philippines with JUMP Solutions presents The Amazing Spiderman 2';
		$evtDate = 'May 5, 2014';
		$venue = 'My Cinema, Greenbelt 3';
		$evtDesc = "Mr. Francis Judan (Lenovo Phils. 4P Manager) spoke about the latest Lenovo offerings in partnership with Intel. After the discussion everybody were given a free movie pass of The Amazing Spiderman2.";
		$imgpath = 'images/event/LENOVO-EU-EVENT/';
		//SCAN THE DIRECTORY AND REMOVE THE DOTS
		$scan = array_diff(scandir($imgpath), array('..', '.'));
		
		foreach($scan as $value ){
			
			$evntImages .= 
				'<div class="item">
               		<img src="'.$imgpath.''.$value.'" width="1100" height="500" alt="Jump Solutions Inc Events" />
            	</div>';
		}
	}if($evnt == 'MSI-HP-Old-Swiss-Inn'){
		$evntTitle = 'HP Tech & Treats End User Event with MSI-ECS, Phils.';
		$evtDate = 'November 13, 2013';
		$venue = 'Old Swiss Inn Restaurant';
		$evtDesc = "Whole day session with our HP customers. Attendees learned 
the latest offerings of HP Notebook, Desktop, Printer & Supplies, Server, Storage & Networking. Live demo for the HP Server was conducted by MSI-ECS’ ";
		$imgpath = 'images/event/MSI-HP-Old-Swiss-Inn/';
		//SCAN THE DIRECTORY AND REMOVE THE DOTS
		$scan = array_diff(scandir($imgpath), array('..', '.'));
		
		foreach($scan as $value ){
			
			$evntImages .= 
				'<div class="item">
               		<img src="'.$imgpath.''.$value.'" width="1100" height="500" alt="Jump Solutions Inc Events" />
            	</div>';
		}
	
	}else{
		echo '<script>console.log("no val")</script>';
	}
	
	
	/*else{
		echo 'cant get';
	}*/
	
}else{
	header("location: index.php");
	exit();
}
	
?>

<html>
	<head>
    	
    	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/plugins/owl.carousel.js"></script>
        
        <link rel="shortcut icon" type="text/icon" href="images/ico.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/css" href="css/navigation.css" />
        
        
        
        <!-- Related Events -->
        <link rel="stylesheet" type="text/css" href="js/plugins/assets/owl.carousel.css" />
        <link rel="stylesheet" type="text/css" href="js/plugins/assets/owl.theme.default.min.css" />
        <link rel="stylesheet" type="text/css" href="css/events.css" />
		<script type="text/javascript" src="js/plugins/related-events-slider.js"></script>
        
        <style type="text/css">
		body,html{
			background-color:#f3f3f3;
		}
		
		.events-slideshow div{
			width:1100px;
			height:auto;
		}
		
		</style>
        
        
        <script>
			$(document).ready(function(e) {
                $('.events-slideshow').owlCarousel({
					items:1,
					
					responsiveClass: true,
                	responsive: {
                  		0: {
							autoHeight:true,
					loop:true,
					autoplay:true,
					autoplayTimeout:3000,
					autoplayHoverPause:true,
                    		items: 1,
                    		nav: false
                  		},
                  		600: {
							autoHeight:true,
					loop:true,
					autoplay:true,
					autoplayTimeout:3000,
					autoplayHoverPause:true,
                    		items: 1,
                    		nav: false
                  		},
                  		1100: {
							autoHeight:true,
					loop:true,
					autoplay:true,
					autoplayTimeout:3000,
					autoplayHoverPause:true,
                    		items: 1,
                    		nav: false,
                  		}
                	}
				});
				$("#event-description").click(function(){
					var w = $('.related-events').find('.item').width();
					var h = $('.related-events').find('.item').height();
					console.log(w);
					console.log(h);
            	
				});
            });
		</script>
    
    <title>Jump Solutions Events</title>
	</head>
	
	<body>
    	
      <div id="wapper">
    	
        <div id="header">
				
				<?php include('navigation.php'); ?>
			
            	
            
			<!-- end of header -->
        </div>
            
        <?php include('title.php'); ?>
        
    	
        <div id="events">
        
        
        
        <div class="" style="width:100%;"><h1 style="display:inline-block;color:#7f8c8c;padding:20px 0px 20px"><?php echo $evntTitle; ?></h1></div>
            
            <div id="my-slide" >
            
            <div class="events-slideshow">
            		
                <?php echo $evntImages; ?>  
            
          </div>
        </div>
        
        
        	<div id="event-description">
         <div>
         	<br />
         	<h2><?php echo $evntTitle; ?></h2>
            <br />
            <h4 style="color:#369"><?php echo $evtDate; ?> <?php echo $venue; ?></h4>
         	<br />
         	<br />
         	<p><?php echo $evtDesc; ?></p>
         	<br />
         	<br />
         	<br />
         	<br />
            
         <!-- end of div -->
         </div>
         
         
         <!-- end of event-description-->
         </div>
        
        <div id="related-events-wapper">
        
        	<h2>Other Events</h2>
            <br />
            
        	<div class="related-events">
              <a href="<?php echo "events.php?val=HP-EU-EVENT"; ?>">
            	<div class="item" style="background:url(images/event/HP-EU-EVENT-thumb.jpg);">
              		<div><h2 style="color:#FFF">HP EU EVENT</h2></div>
            	</div>
              </a>
              <a href="<?php echo "events.php?val=JUMP-IBM-EU-EVENT"; ?>">
            	<div class="item" style="background:url(images/event/JUMP%20IBM%20EU%20EVENT-thumb.jpg);">
              		<div><h2 style="color:#FFF">JUMP IBM EU EVENT</h2></div>
            	</div>
              </a>
              <a href="<?php echo "events.php?val=JUMP-IBM-EU-EVENT-BUBBA-GUMP"; ?>">
            	<div class="item" style="background:url(images/event/JUMP-IBM-EU-EVENT-BUBBA-GUMP-thumb.jpg);">
              		<div><h2 style="color:#FFF">JUMP IBM EU EVENT BUBBA GUMP</h2></div>
            	</div>
              </a>
              <a href="<?php echo "events.php?val=LENOVO-EU-EVENT"; ?>">
            	<div class="item" style="background:url(images/event/LENOVO%20EU%20EVENT-thumb.jpg)">
              		<div><h2 style="color:#FFF">LENOVO EU EVENT</h2></div>
            	</div>
              </a>
              <a href="<?php echo "events.php?val=MSI-HP-Old-Swiss-Inn"; ?>">
            	<div class="item" style="background:url(images/event/MSI-HP-Old%20Swiss%20Inn-thumb.jpg);">
              		<div><h2 style="color:#FFF">MSI HP Old Swiss Inn</h2></div>
            	</div>
              </a>
             
            	
            
			<!-- related-events -->
			</div>
            
          <!-- related-events-wapper-->  
          </div>
        
        <!-- events -->
        </div>
    	
        
        <div style="clear:both"></div>
        
        <?php include("footer.php"); ?>
      
      
      <!-- wapper -->
	  </div>
      
        <script type="text/javascript" src="js/plugins/jquery.devrama.slider-0.9.4.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#my-slide').DrSlider({
                    width: 1100, //slide width
					height: 500,
                    /*height: 600,*/  //remove value for auto height
					'userCSS': true,
					transition: 'random'
					
                }); //Yes! that's it!
            });
        </script>
        		
	</body>
	

</html>