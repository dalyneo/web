<?PHP
require '_header.php' ;
?>
<?PHP
if (isset($_GET['del']))
{
	$panier->del($_GET['del']) ;
}

?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Kimolu">
  
  <meta name="author" content="Themefisher.com">

  <title>Kimolu</title>

  <!-- Mobile Specific Meta-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- animate.css -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  
  <!-- Revolution Slider -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/fonts/font-awesome/css/font-awesome.css">

  <!-- REVOLUTION STYLE SHEETS -->
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/settings.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/layers.css">
  <link rel="stylesheet" type="text/css" href="plugins/revolution-slider/revolution/css/navigation.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span>+21670686500</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">
						<!-- replace logo here -->
						<img src="images/logo.png" alt="website main logo" /> 
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
			<!-- Cart -->
			<ul class="top-menu text-right list-inline">
	          <li class="dropdown cart-nav dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-heart"></i></a>
	            <div class="dropdown-menu cart-dropdown">
	            	<!-- Cart Item -->
					<form method="post" action="header.php">
						<h3 align="center">My favorite</h3>
					<?PHP
					$ids = array_keys($_SESSION['panier']) ;
					if(empty($ids))
					{
						$products = array() ;
					}
					else{
						$products = $DB->query('SELECT * FROM products WHERE id IN('.implode(',',$ids).')') ;
					}
					?>
					<?PHP foreach ( $products as  $product) :?>
	            	<div class="media">
	            		<a class="pull-left" href="#">
	            			<img  class="media-object" src="images/shop/<?= $product->id; ?>.jpg" alt="image" /><br>
	            		</a>
	            		<div class="media-body">
	            			<h4 class="media-heading"><?PHP echo $product->name; ?></h4>
	            		</div>
                        <a href="header.php?del=<?= $product->id ; ?>" class="remove"><i class="tf-ion-close"></i></a>
	            	</div><!-- / Cart Item -->
					<?PHP endforeach ?>
						</form>
	            	
					<!-- Cart Item -->
	          <li class="dropdown search dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-ios-search-strong"></i> Search</a>
	            <ul class="dropdown-menu search-dropdown">
	              <li><form action="post"><input type="search" class="form-control" placeholder="Search..."></form></li>
	            </ul>
	          </li>
	          <li class="commonSelect">
	          	<select class="form-control">
                    <option>EN</option>
                    <option>DE</option>
                    <option>FR</option>
                    <option>ES</option>
                </select>
	          </li>
	        </ul>
			</div>
</section><!-- End Top Header Bar -->
		<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
	    <div class="container">
	      <div class="navbar-header">
	      	<h2 class="menu-title">Main Menu</h2>
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	          <span class="sr-only">Toggle navigation</span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>

	      </div><!-- / .navbar-header -->

	      <!-- Navbar Links -->
	      <div id="navbar" class="navbar-collapse collapse text-center">
	        <ul class="nav navbar-nav">

	          <!-- Home -->
	          <li class="dropdown ">
	            <a href="index.html">Home</a>
				
	          </li><!-- / Home -->
				
				<li class="dropdown">
					<a href="video.php">Videos</a>
				</li>

	          <!-- Elements -->
	          <li class="dropdown dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="tf-ion-ios-arrow-down"></span></a>
	            <div class="dropdown-menu">
	              <div class="row">

	                <!-- Basic -->
	                <div class="col-lg-6 col-md-6 mb-sm-3">
	                	<ul>
							<li class="dropdown-header">Pages</li>
							<li role="separator" class="divider"></li>
							<li><a href="shop.php">Shop</a></li>
							<li><a href="checkout.php">Checkout</a></li>
	                	</ul>
	                </div>
					     <!-- Layout -->
	                <div class="col-lg-6 col-md-6 mb-sm-3">
	                	
	                </div>
	              </div><!-- / .row -->
	            </div><!-- / .dropdown-menu -->
	          </li><!-- / Elements -->


	          <!-- Pages -->
	          <li class="dropdown full-width dropdown-slide">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="tf-ion-ios-arrow-down"></span></a>
	            <div class="dropdown-menu">
	              	<div class="row">

		                <!-- Introduction -->
		                <div class="col-sm-3 col-xs-12">
		                	<ul>
								<li role="separator" class="divider"></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li><a href="about.html">About Us</a></li>
								<li><a href="coming-soon.html">Coming Soon</a></li>
		                	</ul>
		                </div>

		                <!-- Contact -->
		                <div class="col-sm-3 col-xs-12">
		                	<ul>
								<li class="dropdown-header">Dashboard</li>
								<li role="separator" class="divider"></li>
								<li><a href="dashboard.html">User Interface</a></li>
								<li><a href="order.html">Orders</a></li>
								<li><a href="address.html">Address</a></li>
								<li><a href="profile-details.html">Profile Details</a></li>
		                	</ul>
		                </div>

		                <!-- Utility -->
		                <div class="col-sm-3 col-xs-12">
		                	<ul>
								<li class="dropdown-header">Utility</li>
								<li role="separator" class="divider"></li>
								<li><a href="login.html">Login Page</a></li>
								<li><a href="signin.html">Signin Page</a></li>
								<li><a href="forget-password.html">Forget Password</a></li>
								<li><a href="logout.html">Logout page</a></li>
		                	</ul>
		                </div>

		                <!-- Mega Menu -->
		                <div class="col-sm-3 col-xs-12">
		                	<a href="shop.php">
			                	<img class="img-responsive" src="images/logo.png" alt="menu image" />
		                	</a>
		                </div>
	              	</div><!-- / .row -->
	            </div><!-- / .dropdown-menu -->
	          </li><!-- / Pages -->
	        </ul><!-- / .nav .navbar-nav -->
	      	</div><!--/.navbar-collapse -->
	    </div><!-- / .container -->
	</nav>
</section>


<section class="main-slider">
	<div id="home_slider_wrapper" class="rev_slider_wrapper fullscreen-container" >
		<div id="home_slider" class="rev_slider fullscreenbanner tiny_bullet_slider" data-version="5.4.1">
			<ul>	<!-- SLIDE  -->
				<li data-index="rs-73" 
				data-thumb="images/slider/slider-9.jpg"
				data-transition="fade" 
				data-slotamount="default" 
				data-hideafterloop="0" 
				data-hideslideonmobile="off"  
				data-easein="default" 
				data-easeout="default" 
				data-masterspeed="300"   
				data-rotate="0"  
				data-saveperformance="off"  
				data-title="Slide" 
				data-param1="" 
				data-param2="" 
				data-param3="" 
				data-param4="" data-param5="" 
				data-param6="" 
				data-param7="" 
				data-param8="" 
				data-param9="" 
				data-param10="" 
				data-description="">
					<!-- MAIN IMAGE -->
					<img src="images/slider/slider-9.jpg" 
					data-bgposition="cover" 
					data-bgfit="cover" 
					data-bgrepeat="no-repeat" 
					data-bgparallax="on" 
					class="rev-slidebg" 
					data-no-retina
					alt="Slider image" />
					<!-- LAYERS -->

					<!-- LAYER NR. 1 -->
					<a  href="shop.html"
						class="tp-caption rev-btn  tp-resizeme" 
						data-x="['left','left','left','left']" 
						data-hoffset="['170','120','70','40']" 
						data-y="['middle','middle','middle','middle']" 
						data-voffset="['150','150','150','110']" 
						data-width="150px"
						data-height="50px"
						data-whitespace="normal"
			 			data-type="button" 
						data-responsive_offset="on" 
						data-frames='[{"delay":500,"speed":1000,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[6,6,6,6]"

						style="z-index: 5; font-size: 22px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;cursor:pointer;text-align:center">Shop Now</a>

					<!-- LAYER NR. 3 -->
					<div class="tp-caption   tp-resizeme" 
						id="slide-73-layer-3" 
						data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
						data-width="none"
						data-height="none"
						data-whitespace="normal"
			 
						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"delay":300,"speed":750,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[10,10,10,10]"
						data-paddingright="[20,20,20,20]"
						data-paddingbottom="[10,10,10,10]"
						data-paddingleft="[20,20,20,20]"

						style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">PRODUCTS </div>

					<!-- LAYER NR. 4 -->
					<div class="tp-caption   tp-resizeme" 
						 id="slide-73-layer-2" 
						 data-x="['left','left','left','left']" data-hoffset="['150','100','50','20']" 
						 data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']" 
									data-fontsize="['70','70','70','50']"
						data-lineheight="['70','70','70','50']"
						data-width="['650','650','620','380']"
						data-height="none"
						data-whitespace="normal"
			 
						data-type="text" 
						data-responsive_offset="on" 

						data-frames='[{"delay":200,"speed":750,"sfxcolor":"#ffff58","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoleft","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[20,20,20,20]"
						data-paddingright="[20,20,20,20]"
						data-paddingbottom="[30,30,30,30]"
						data-paddingleft="[20,20,20,20]"

						style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">The force of nature felt in waves crashing. </div>
				</li>
				<!-- SLIDE  -->
				<li data-index="rs-74" 
					data-transition="fade" 
					data-slotamount="default" 
					data-hideafterloop="0" 
					data-hideslideonmobile="off"  
					data-easein="default" 
					data-easeout="default" 
					data-masterspeed="300"  
					data-thumb="images/slider/slider-10.jpg"  
					data-rotate="0"  
					data-saveperformance="off"  
					data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="images/slider/slider-10.jpg" alt=""  
						data-bgposition="cover"
						data-bgfit="cover"
						data-bgrepeat="no-repeat"
						data-bgparallax="on" 
						class="rev-slidebg" data-no-retina />
					<!-- LAYERS -->

					

					<!-- LAYER NR. 6 -->
					<a 	
						href="shop.html"
						class="tp-caption rev-btn  tp-resizeme" 
						data-x="['left','left','left','left']"
						data-hoffset="['880','760','600','330']" 
						data-y="['middle','middle','middle','middle']"
						data-voffset="['120','250','150','110']" 
						data-width="150px"
						data-height="50px"
						data-whitespace="normal"
						data-type="button" 
						data-responsive_offset="on" 
						data-frames='[{"delay":500,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[8,8,8,8]"
						
						style="z-index: 6; white-space: normal; font-size: 22px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Shop Now</a>

					<!-- LAYER NR. 7 -->
					<div class="tp-caption   tp-resizeme" 
						id="slide-74-layer-3" 
						data-x="['left','left','left','left']" data-hoffset="['820','700','540','270']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-177','-177','-177','-157']" 
						data-width="none"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames='[{"delay":400,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[10,10,10,10]"
						data-paddingright="[20,20,20,20]"
						data-paddingbottom="[10,10,10,10]"
						data-paddingleft="[20,20,20,20]"

						style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">PRODUCTS </div>

					<!-- LAYER NR. 8 -->
					<div class="tp-caption   tp-resizeme" 
						id="slide-74-layer-2" 
						data-x="['left','left','left','left']" data-hoffset="['360','240','110','80']" 
						data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-30']" 
						data-fontsize="['70','70','70','50']"
						data-lineheight="['70','70','70','50']"
						data-width="['650','650','620','380']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames='[{"delay":300,"speed":750,"sfxcolor":"#cbbacc","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktoright","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['right','right','right','right']"
						data-paddingtop="[20,20,20,20]"
						data-paddingright="[20,20,20,20]"
						data-paddingbottom="[30,30,30,30]"
						data-paddingleft="[20,20,20,20]"

						style="z-index: 8; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">The beauty of nature is hidden in details. 
					</div>
				</li>
				<!-- SLIDE  -->
				<li data-index="rs-75" 
					data-transition="fade" 
					data-slotamount="default" 
					data-hideafterloop="0"
					data-hideslideonmobile="off"  
					data-easein="default" 
					data-easeout="default" 
					data-masterspeed="300" 
					data-thumb="images/slider/slider-5.jpg"
					data-rotate="0"  
					data-saveperformance="off"  
					data-title="Slide" 
					data-param1="" 
					data-param2="" 
					data-param3="" 
					data-param4="" 
					data-param5=""
					data-param6="" 
					data-param7="" 
					data-param8="" 
					data-param9="" 
					data-param10="" 
					data-description="">
					<!-- MAIN IMAGE -->
					<img src="images/slider/slider-5.jpg"
					data-bgposition="center center"
					data-bgfit="cover"
					data-bgrepeat="no-repeat" 
					data-bgparallax="on" 
					class="rev-slidebg" 
					data-no-retina  alt="slider img" />
					<!-- LAYERS -->


					<!-- LAYER NR. 10 -->
					<div class="tp-caption   tp-resizeme" 
						id="slide-75-layer-2" 
						data-x="['center','center','center','center']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" 
						data-voffset="['-100','-100','-100','-90']" 
						data-fontsize="['70','70','70','50']"
						data-lineheight="['70','70','70','50']"
						data-width="['650','650','620','380']"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames='[{"delay":200,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[20,20,20,20]"
						data-paddingright="[20,20,20,20]"
						data-paddingbottom="[30,30,30,30]"
						data-paddingleft="[20,20,20,20]"

						style="z-index: 6; min-width: 650px; max-width: 650px; white-space: normal; font-size: 70px; line-height: 70px; font-weight: 400; color: #ffffff; letter-spacing: -2px;font-family:Playfair Display;">Lurking in the deep of the sea, waits a monster. </div>

					<!-- LAYER NR. 11 -->
					<div class="tp-caption   tp-resizeme" 
						id="slide-75-layer-3" 
						data-x="['center','center','center','center']" 
						data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" 
						data-voffset="['-247','-247','-247','-217']" 
						data-width="none"
						data-height="none"
						data-whitespace="normal"
						data-type="text" 
						data-responsive_offset="on" 
						data-frames='[{"delay":300,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['left','left','left','left']"
						data-paddingtop="[10,10,10,10]"
						data-paddingright="[20,20,20,20]"
						data-paddingbottom="[10,10,10,10]"
						data-paddingleft="[20,20,20,20]"

						style="z-index: 7; white-space: normal; font-size: 20px; line-height: 20px; font-weight: 400; color: #ffffff; letter-spacing: 10px;font-family:Roboto Condensed;">PRODUCTS </div>

					<!-- LAYER NR. 12 -->
					<div class="tp-caption rev-btn  tp-resizeme" 
						data-x="['center','center','center','center']"
						data-hoffset="['0','0','0','0']" 
						data-y="['middle','middle','middle','middle']" 
						data-voffset="['80','80','80','50']" 
						data-width="150px"
						data-height="50px"
						data-whitespace="normal"
			 			data-type="button" 
						data-responsive_offset="on" 
						data-frames='[{"delay":400,"speed":750,"sfxcolor":"#058a9b","sfx_effect":"blockfromtop","frame":"0","from":"z:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"sfxcolor":"#ffffff","sfx_effect":"blocktotop","frame":"999","to":"z:0;","ease":"Power4.easeOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(0,0,0);bg:rgb(255,255,255);"}]'
						data-textAlign="['center','center','center','center']"
						data-paddingtop="[6,6,6,6]"
						style="z-index: 8; white-space: normal; font-size: 22px; line-height: 50px; font-weight: 400; color: rgba(255,255,255,1); letter-spacing: 2px;font-family:Roboto Condensed;border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;text-align:center!important;">Shop Now
					</div>
				</li>
			</ul>
			<div class="tp-bannertimer" style="height: 10px; background: rgba(0, 0, 0, 0.15);"></div>
		</div>
	</div><!-- END REVOLUTION SLIDER -->
		
		
</section>
