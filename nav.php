<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<style type="text/css">
	
#menu{
	max-width:800px;
	background-color:#C30;
	list-style: none;
	margin: 0px auto;
	padding: 0;
	display: block;
}

#menu li{
	margin: 0;
	padding: 0;
	display: block;
	position: relative;
}

#menu > li {
  	float: left;
}

#menu > ul > li:hover:after,
#menu > ul > li.active:after {
  	height: 100%;
}

#menu > li:after {
  content: '';
  display: block;
  position: absolute;
  width: 100%;
  height: 0;
  top: 0;
  z-index: 0;
}

#menu li ul{
	list-style: none;
	width:auto;
	position: absolute;
	left: -9999px;
	top: auto;
	box-shadow:0px 0px 1px #808080;
}

#menu li ul li{
	 max-height: 0;
	 position: absolute;
	 -webkit-transition: max-height 0.4s ease-out;
	 -moz-transition: max-height 0.4s ease-out;
	 -ms-transition: max-height 0.4s ease-out;
	 -o-transition: max-height 0.4s ease-out;
	 transition: max-height 0.4s ease-out;
	 background: #ffffff;
}

</style>


</head>

<body>

	<div id="navigation">
    	
        <ul id="menu">
                        
   			<li><!--<li class='active'>--><a href='index.php?'><span>Home</span></a></li>
   			<li><a href='#' ><span>About</span></a></li>
   			<li class='has-sub'>
            	<a href='products.php?'><span>Products</span></a>
      				<ul>
         				<li><a href='#'><span>Server</span></a></li>
                        <li><a href="#">Storage</a></li>
                        <li><a href="#">Networking</a></li>
                        <li class='has-sub'><a href="#">PC</a>
                        	<ul>
                                <li><a href='#'><span>Desktop</span></a></li>
                                <li class='last'><a href='#'><span>Notebooks</span></a></li>
                            </ul>
                        </li>
                        <li class='has-sub'><a href="#">Virtualization</a>
                            <ul>
                                <li class='last'><a href='#'><span>Imaging</span></a></li>
                            </ul>
                       </li>
                       <li><a href="#">Disaster Recovery</a></li>
                       <li><a href="#">Supplies</a></li>
                       <li><a href="#">Other</a></li>


      				</ul>
   			</li>
   			<li><a href='#'><span>News</span></a></li>
   			<li><a href='promos.php'><span>Promos</span></a></li>
   			<li><a href='#'><span>Events</span></a></li>
   			<li><a href='#'><span>Careers</span></a></li>
   			<li class='last'><a href='contact.php?#'><span>Contact</span></a></li>
		</ul>
        
        
    </div>
    
    


</body>
</html>