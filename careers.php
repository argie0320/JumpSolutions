<?php 
	$title = "Careers";
	

?>
<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
	<head>
    
    	<!--[if lt IE 9]>
			<script src="/js/html5shiv.js"></script>
		<![endif]-->
    	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
		<script type="text/javascript" src="js/menu.js"></script>
        <link rel="shortcut icon" type="text/icon" href="images/ico.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/navigation.css" />
        <link rel="stylesheet" type="text/css" href="css/careers.css" />
        
       
    
    <title>Jump Solutions Products</title>
	</head>
	
	<body>
    	
      <div id="wapper">
    	
        <div id="header">
				
				<?php include('navigation.php'); ?>
			
            	
            
			<!-- end of header -->
        </div>       
            
        <?php include('title.php'); ?>
        
    	
        <div id="careers">
        
       	  <img src="images/Careers.png" style="width:100%; height:auto;margin:40px 0;"  alt=""/>       	  
        
          <form action="asset/apply.php" method="post" enctype="multipart/form-data" onsubmit="return Validate(this);">
            
            
            	
                
            	<div class="form-cols f1" style="float:left;width:50%">
                	<input type="text"  name="name" placeholder="Name" /> <span class="error">
                	<br /><br />
                	<input type="text" name="email" placeholder="Email" />  <span class="error"> 
                	<br /><br />
                	<input type="text" name="contactnumber" placeholder="Contact No." onkeypress="return isNumberKey(event)" />
                    <br /><br />  
                </div>
                
                <div class="form-cols f2" style="float:right;width:50%">
                	
                    <h3 style="color:#C33">Upload Resume</h3>
                    <br />
                	<input type="file"  id="resume" name="resume" placeholder="your cv" />  
                    <br /><br />  
                    <br /><br />  
                    <input type="submit" value="Submit">        
                </div>
            
            </form>
          <div style="clear:both"></div>
            
        <!-- events -->
        </div>
    	
        
        
        
        <?php include("footer.php"); ?>
      
     <!-- wapper-->
     </div>
	</body>
    
    <script type="text/javascript">
    
    	var _validFileExtensions = [".pdf", ".doc", ".docx"];

function Validate(oForm) {
    var arrInputs = oForm.getElementsByTagName("input");
    for (var i = 0; i < arrInputs.length; i++) {
        var oInput = arrInputs[i];
        if (oInput.type == "file") {
            var sFileName = oInput.value;
            /*if (sFileName.length > 0) {*/
                var blnValid = false;
                for (var j = 0; j < _validFileExtensions.length; j++) {
                    var sCurExtension = _validFileExtensions[j];
                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                        blnValid = true;
                        break;
                    }
                /*}*/

                if (!blnValid) {
                    alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", ")  + "\n Please provide your resume !");
                    return false;
                }
            }
        }
    }

    return true;
}
   
	function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
    
    </script>
	

</html>