<?php 

$title = 'Product';


if(isset($_GET['category'])){
	

function randomSort(&$arr){  // pass array by reference
	
	foreach($arr as $val => $linkVal){
		/*
		echo ''.$val.'<br />';
		echo ''.$linkVal.'<br />';
		*/
	}
	 
}
	//tabs
	$a1 = $a2 = $a3 = $a4 = $a5 = $a6 = $a7 = $a8 = $a9 = $a10 = $a11 = $a12 = $a13 ="";
	
	
	$cat = $_GET['category'];
	
	$prod ="";
	$active = '';
	
	if($cat == "imaging"){
		
		$imaging = array(
						'hp'=>'http://www.cisco.com/c/en/us/products/servers-unified-computing/product-listing.html',
						'epson'=>'http://www.epson.com.ph/'
				);
		$prod = $imaging;
		$a9 = 'style="background-color:#36F;"';
		
	}
	
	if($cat == "server"){
		
		$server = array(
						'hp'=>'http://www.cisco.com/c/en/us/products/servers-unified-computing/product-listing.html',
						'lenovo'=>'http://shop.lenovo.com/us/en/servers/',
						'ibm'=>'http://www.dell.com/us/business/p/servers?~srd=true&sk=server&scat=prod&ref=ac',
						'cisco'=>'http://www.cisco.com/c/en/us/products/servers-unified-computing/product-listing.html',
						'dell'=>'http://www.dell.com/us/business/p/servers?~srd=true&sk=server&scat=prod&ref=ac',
						'acer'=>'http://www.acer.com.ph/ac/en/PH/content/search/SERVER'
				);
		$prod = $server;
		$a5 = 'style="background-color:#36F;"';
			
		 	
	}else if($cat == "storage"){
		
		$storage = array(
						'hp'=>'http://www.acer.com.ph/ac/en/PH/content/search/SERVER',
						'ibm'=>'http://www.cisco.com/c/en/us/products/servers-unified-computing/product-listing.html'
					);
		$prod = $storage;
		$a6 = 'style="background-color:#36F;"';
	
	}else if($cat == "networking"){
		
		$networking = array(
						'hp'=>'http://www.dell.com/us/business/p/servers?~srd=true&sk=server&scat=prod&ref=ac',
						'cisco'=>'http://shop.lenovo.com/us/en/servers/'
				);
		$prod = $networking;
		$a3 = 'style="background-color:#36F;"';
		
	}else if($cat == "pc"){
		
		
		//Desktop
		$Desktop = array(
						'hp'=>'http://www8.hp.com/ph/en/products/gateway/desktops/personal/index.html',
						'lenovo'=>'http://shopap.lenovo.com/ph/en/desktops/',
						'dell'=>'http://www.dell.com/ph/business/p/desktops.aspx?c=ph&&l=en&&s=bsd&&~ck=mn',
						'acer'=>'http://www.acer.com.ph/ac/en/PH/content/group/desktops'
				);
				
		$Laptop = array(
						'hp'=>'http://www8.hp.com/ph/en/products/gateway/laptops/personal/index.html',
						'lenovo'=>'http://shopap.lenovo.com/ph/en/laptops/',
						'dell'=>'http://www.dell.com/ph/business/p/laptops.aspx?c=ph&&l=en&&s=bsd&&~ck=mn',
						'acer'=>'http://www.acer.com.ph/ac/en/PH/content/group/laptops'
				);
		
		$prod = $Desktop;
		$a4 = 'style="background-color:#36F;"';
		
		/*
		foreach($personalcomputerLaptop as $comp => $links){
			
			$Laptop .= 
				'<li>
						<a href="'.$links.'" target="_blank" class="complogo '.$comp.'"><h1>'.$comp.'</h1></a>
					</li>';
		}
		*/
		
	}else if($cat == "laptop"){
		
		$Laptop = array(
						'hp'=>'http://www8.hp.com/ph/en/products/gateway/laptops/personal/index.html',
						'lenovo'=>'http://shopap.lenovo.com/ph/en/laptops/',
						'dell'=>'http://www.dell.com/ph/business/p/laptops.aspx?c=ph&&l=en&&s=bsd&&~ck=mn',
						'acer'=>'http://www.acer.com.ph/ac/en/PH/content/group/laptops'
				);
		
		$prod = $Laptop;
		$a10 = 'style="background-color:#36F;"';
		
	}else if($cat == "virtualization"){
		
		$virtualization = array(
						'vmware'=>'http://www.vmware.com/',
						'microsoft'=>'http://www.microsoft.com/'
				);
		$prod = $virtualization;
		$a8 = 'style="background-color:#36F;"';
		
	}else if($cat == "ups"){	
	
		$ups = array(
						'apc'=>'http://www.apc.com/products/category.cfm?id=13',
						'emerson'=>'http://www.emersonnetworkpower.com/en-US/Products/ACPower/Pages/default.aspx'
				);
		$prod =$ups;
		$a13 = 'style="background-color:#36F;"';
		
	}else if($cat == "cabling"){	
	
		$cabling = array(
						'panduit'=>'http://www.panduit.com/en/home',
						'threeam'=>'http://solutions.3mphilippines.com.ph/wps/portal/3M/en_PH/World/Wide/',
						'schneider'=>'http://www.schneider-electric.com/site/home/index.cfm/ww/'
				);
		$prod = $cabling;
		$a12 = 'style="background-color:#36F;"';
		
	}else if($cat == "supplies"){
		
		$Supplies = array(
					'hp'=>'http://www8.hp.com/',
					'canon'=>'',
					'epson'=>''
				);
		$prod = $Supplies;
		$a7 = 'style="background-color:#36F;"';
		
	}else if($cat == "coreproducts"){
		
		$coreProducts = array(
					'hp'=>'http://www8.hp.com/ph/en/home.html',
					'dell'=>'http://www.dell.com.ph/',
					'cisco'=>'http://www.cisco.com/web/PH/about/contacts.html',
					'apc'=>'http://www.apc.com/home/ph/en/',
					'epson'=>'http://www.epson.com.ph/',
					
					'lenovo'=>'http://www.lenovo.com/ph/en/',
					'vmware'=>'http://www.vmware.com/ap/',
					'ibm'=>'http://www.ibm.com/us/en/',
					'avaya'=>'http://www.avaya.com/apac/',
					'panduit'=>'http://www.panduit.com/en/home',
					
					
					
					'threeam'=>'http://solutions.3mphilippines.com.ph/wps/portal/3M/en_PH/Products3/Dir/',
					'ruckus'=>'http://www.ruckuswireless.com/',
					'microsoft'=>'http://windows.microsoft.com/en-PH/windows/home',
					'acer'=>'http://www.acer.com.ph/ac/en/PH/content/home',
					'samsung'=>'http://www.samsung.com/ph/'
				);
				
		$prod = $coreProducts;
		$a1 = 'style="background-color:#36F;"';
		
	}else if($cat == "others"){
		
		$Others = array(
					'amd'=>'http://www.amd.com/',
					'aoc'=>'http://solutions.3mphilippines.com.ph/wps/portal/3M/en_PH/Products3/Dir/',
					'apple'=>'http://store.apple.com/ph',
					'apacer'=>'http://www.apacer.com/en/products/Server_Memory_Fully_Buffered_DIMM_other_Where_to_buy.htm',
					'asus'=>'http://www.asus.com/ph/',
					'brother'=>'http://welcome.brother.com/ph-en.html',
					'canon'=>'http://www.canon.com.ph/',
					'dlink'=>'http://www.dlink.com.ph/',
					'eaton'=>'http://www.eaton.com/Eaton/OurCompany/NewsEvents/NewsReleases/CT_265168',
					'fujixerox'=>'http://www.fujixerox.com.ph/',
					'infocus'=>'http://www.infocus.com/',
					'intel'=>'http://www.intel.ph/content/www/ph/en/homepage.html ',
					'kingston'=>'http://www.kingston.com/us/',
					'lg'=>'http://www.lg.com/ph',
					'linksys'=>'http://www.linksys.com/en-apac/home?referrer=www.linksysbycisco.com',
					'motorola'=>'http://www.motorolasolutions.com/XP-EN/Home',
					'philips'=>'http://www.philips.com.ph/',
					'polycom'=>'http://www.polycom.asia/company/about-us/contact-us.html',
					/*'ruckus'=>'http://www.ruckuswireless.com/',*/
					'seagate'=>'http://www.seagate.com/as/en/ ',	
					/*'sony'=>'http://www.sony.com.ph/section/home ',	*/
					'synology'=>'http://www.synology.com/en-global/buy/asia.php ',	
					'toshiba'=>'http://www.toshiba.ph/tph/products/tv/index.htm ',	
					'WesternDigital'=>'http://www.wdc.com/en/ ',	
					'zebra'=>'http://www.zebra.com/us/en.html ',					
				);
		$prod = $Others;
		$a11 = 'style="background-color:#36F;"';
		
	}
}
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Jump Solutions Inc. Products</title>
		
        <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/menu.js"></script>
        <script type="text/javascript" src="js/ajax.js"></script>
        
        <script type="text/javascript" src="js/footer.js"></script>
        
 
       
        
        <!--[if lt IE 9]>
			<script src="/js/html5shiv.js"></script>
		<![endif]-->
        <link rel="shortcut icon" type="text/icon" href="images/ico.ico" />
    	<link rel="stylesheet" type="text/css" href="css/default.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" type="text/css" href="css/navigation.css" />
        <link rel="stylesheet" type="text/css" href="css/products_v2.css" />
        
    
    </head>
	<body>
		
        <div id="wapper">
        	
            
            <div id="header">
				
				<?php include('navigation.php'); ?>
			
            	
            
			<!-- end of header -->
            </div>
            
            <?php include('title.php'); ?>
            
            
            <div id="products">
            	<center>
                	<nav>
                	<a href="prods.php?category=coreproducts" <?php echo $a1; ?> >core products</a>
                    <a href="prods.php?category=pc" <?php echo $a4; ?> >desktop</a>
                    <a href="prods.php?category=laptop" <?php echo $a10; ?> >laptop</a>
                    <a href="prods.php?category=server" <?php echo $a5; ?>>server</a>
                    <a href="prods.php?category=storage" <?php echo $a6; ?>>storage</a>
                    <a href="prods.php?category=ups" <?php echo $a13; ?>>ups</a>
                    <a href="prods.php?category=virtualization" <?php echo $a8; ?>>virtualization</a>
                    <a href="prods.php?category=networking" <?php echo $a3; ?>>network Solutions</a>
                    <a href="prods.php?category=supplies" <?php echo $a7; ?>>supplies</a>
                    <a href="prods.php?category=imaging" <?php echo $a9; ?>>imaging</a>
                    <a href="prods.php?category=cabling" <?php echo $a12; ?>>Cabling</a>
                    <a href="prods.php?category=others" <?php echo $a11; ?>>Others</a>
                </nav>
                </center>
                <ul>
               
                   
				   <?php foreach($prod as $company => $linkVal ): ?>
                   	<li>
						<a href="<?php echo $linkVal; ?>" target="_blank" class="complogo <?php echo $company; ?>"><h1><?php echo $company; ?></h1></a>
					</li>
				   <?php endforeach; ?>
                   
                  
                   
                </ul>
            
            	
                
            
            <!-- products -->
            </div>
           
            
            
          
            <?php include('footer.php'); ?>
           
    
    
    	<!-- end of wapper -->
        </div>
        
    
	</body>
</html>
