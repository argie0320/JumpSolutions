<?php 
$title = "About";
?>
<html>
	<head>
    	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        
        <script type="text/javascript">
  			$(document).ready(function(){
    			$('#jump-video').hover(
						function(){
							$(this).attr("controls", "controls");
					},
					function(){
						$(this).removeAttr("controls");
					}
				);
			});
		</script>
        
        <!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
		<![endif]-->
        <link rel="shortcut icon" type="text/icon" href="images/ico.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/navigation.css" />
        <link rel="stylesheet" type="text/css" href="css/about.css" />
        
        <style type="text/css">
		
		#staff{
			position: absolute;
	top:20;
	left:0;
	right:0;
	bottom:0;
		}
		
		#staff >  div { 
    position: absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
	background:#000
}

#staff div img{ 
	position: absolute;
	top:0;
	left:0;
	right:0;
	bottom:0;
}

		</style>
        
        
    
    <title>Jump Solutions Inc. About</title>
	</head>
	
	<body>
      <div id="wapper">
        <div id="header">
				
				<?php include('navigation.php'); ?>
			
            	
            
			<!-- end of header -->
        </div>
            
        <?php include('title.php'); ?>
        
    	
        <div id="about">
        	
          <div>
          	<p>Previously Axis Computer, Inc., <strong style="color:black"> Jump Solutions Inc. </strong> is conceived
          	  to provide our partners the <strong><i>best solutions for our customers'</i></strong> I.T.
          	  requirements. For over 20 years of existence we were able to sustain our
          	  stand in the I.T business industry as we are led by our values, shared vision
       	    and are heartily committed.</p>
          	<p><br>
          	  Much of our skills were derived from people who have been in the IT industry
          	  for several years. We have been strengthened from the fast-pace
          	  advancement of technology and honed by the need to bring these
       	    technologies to our partners in shortest span of time.</p>
          	<p><br>
          	  Our past, our present and our future exemplify on how we live our values. We
          	  value the increase in efficiency and productivity of our products which our
          	  partners provide. In which we see ourselves as a conduit to our partner's
       	    advancement as well.</p>
        
        <br />
        <p> <strong style="color:black">Jump Solutions Inc.</strong> believes that the partnership we have with our
customers should be as strong as the partnerships we maintain with our
suppliers and vendors. It is in this manner our customers will be able to enjoy
the additional benefits that will be cascaded down from our suppliers and
vendors to our clients. To meet our primary goal of letting our customers
acquire investments at their best prices with the best after sales support.</p>
        
        <br />
        <p>We pride ourselves in collaborating with the I.T. brand leaders and pioneers
in information technology to provide solutions like: </p>
        
        
        <br />

        	
          <table>
            <tbody>
              <tr>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
              <tr>
                <td><p>Servers and Storage</p></td>
                <td><p>Printing and Imaging</p></td>
              </tr>
              <tr>
                <td><p>Networking</p></td>
                <td><p>Uninterrupted Power Supply</p></td>
              </tr>
              <tr>
                <td><p>Virtualization</p></td>
                <td><p>Point-of-Sale</p></td>
              </tr>
              <tr>
                <td><p>Disaster Recovery</p></td>
                <td><p>Data Center</p></td>
              </tr>
              <tr>
                <td><p>Personal Computing</p></td>
              </tr>
            </tbody>
          </table>
          <br />
          <p>Our company is a fraction of a bigger business that provides software, security, man power and authorized service center. We focus on data center hardware, infrastructure, communication and end-point equipment's. 
</p>
		  
          <br />
          <h3>Our Mission</h3>
          <p>To retain our partnership with our existing customer and to forge new ones with prospective clientele as we provide them the best value of product that comprises each and every aspect of their needs.</p>
          
          <br />
          <h3>Our Vision</h3>
          <p>We see ourselves in learning new technologies as it developed and must be able to deliver and support these technologies to our partners. </p>
          
          <br />
          <p>Jump Solutions Inc., solely partners with the finest Information Technology companies and products in the market.  </p>


		  <br />
          
          </div>
          
          <div>
          		<div id="ratings">
            		
                    
                    
                    <div id="speech">
                   <h3>President's Note</h3>
                    	<p>
                	Being in the Industry for more than 20 years, Jump Solutions, Inc. sustain its' stand in the I.T business industry as we are led by our values, shared vision and are heartily committed. In Jump Solutions primary goal is to let our customers acquire investments at their best prices with the best after sales support. We always work as closely as possible with all of our customers.  
                	</p>
                    <br />
                    <p>
                    We do partner ourselves with the leaders in the IT industry to offer the best products that can highly match our customers' needs.  And now, we aim to continually meet the needs and requirements of our customers as well as our prospective clientele.  We offer a much broader product range, covering most of the possible requirements our clients might need. We want to provide our customers with not just a product, but rather with a solution with the most cost effective, quality products in the industry.
                    </p>
                    <br />
                    <p>
                    We are backed by our dedicated sales people whose experience and expertise can address every aspect of these needs. These give them the capability of rendering service to large enterprises companies in the country. I believe that leveraging the competency of our employees and venturing in them, they can be the best that they can be.
                    </p>
                    <br />
                    <p>
                    May you gain a better insight on our products and a better sense of who we are as you regularly visit our website.
                    </p>
                	<br />
                    <p style="width:100%;text-align:right;">
                   <strong style="color:#000">Mr. ADDISON TAN</strong><br />
                    President
                    </p>
                	
                    
                    </div>
                    
               	  
                    
            	<!-- end of ratings -->   
            	</div>
          </div>
          <div style="clear:both;"></div>
          <div style="float:left;width:60%;height:400px;position:relative;overflow:hidden;" >
          
            <video  id="jump-video" poster="video/thumb.jpg" >
                          <source src="video/company.mp4" type="video/mp4">
                          <source src="video/company.webm" type="video/webm">
                          <source src="video/company.ogv" type="video/ogg">
                        </video>
          
                      
       	  	
          </div>
          
          
          <div style="float:right;width:35%;" >
           		
                <!-- none --->
          
          
          
          </div>
         
          
          
          
            
        <!-- About -->
        </div>
        
        <div style="clear:both;"></div>
          
        
        <?php include("footer.php"); ?>
	  
      </div>
        		
	</body>
	

</html>