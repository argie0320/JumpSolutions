<?php 
$title = "Contact";
?>
<html>
	<head>
    	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/style.css" />
         <link rel="stylesheet" type="text/css" href="css/navigation.css" />
        <link rel="shortcut icon" type="text/icon" href="images/ico.ico" />
        
        <link rel="stylesheet" type="text/css" href="css/contact.css" />
        
        <style type="text/css">
		body,html{
			background-color:#f3f3f3;
		}
		</style>
       
        
        <script type="text/javascript" src="js/contact.js"></script>
    
    <title>Jump Solutions Inc. Contact</title>
	</head>
	
	<body>
      <div id="wapper">
        <div id="header">
				
				<?php include('navigation.php'); ?>
			
            	
            
			<!-- end of header -->
        </div>
            
        <?php include('title.php'); ?>
        
    	
        <div id="contact">
         
          <div id="cinfo">
            
                <br />
                <h3><span>JUMP </span>Solutions Inc.</h3>
                <br />
                
                
                <div>
                	<br>
                </div>
                
                </table>
                	<p style="font-size:10px;">&nbsp;</p>
                    <br />
                    <table>
                    	<tr>
                        
                        	<td width="114"><p style="font-size:11pt;"><strong>Trunk:&nbsp;</strong></p></td>
                        	<td width="301"><p>(02) 759-30-56 to 57 
                            <br />(02) 759-68-09 to 10</p></td>
					                        	
                        </tr>
                       
                       <tr>
                       		<td><p><strong>Fax. No. :</strong></p></td>
                       		<td><p>(02) 759-6811</p></td>
                       </tr>
                        
                    </table>
                
                
            <!-- end of first div-->
            </div>
            
            <div id="cform">
            	
                <br />
                
            	<form onSubmit="return false;">
                	
                    <input type="text" placeholder="Name:" class="iname" >
                    <input type="text" placeholder="Email" class="iemail">
                    <br />
                    <input type="text" placeholder="Address:" class="iaddress" >
                    <input type="text" placeholder="Contact No.:" class="icontact">
                    <br />
                    <textarea rows="10" placeholder="Inquiry:" class="imessage"></textarea>
                    <br />
                    <button id="btnSend">Send</button><button id="btnClear">Clear</button>
                
                </form>
            
            <!-- end of second div-->
            </div>
            
       <div style="clear:both;"></div>      
            
        <!-- Contact -->
        </div>
    	
        
        <?php include("footer.php"); ?>
        
        <!-- wapper-->
        </div>
        
        
        
		
        
        		
	</body>
	

</html>