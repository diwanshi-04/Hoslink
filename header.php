<?php
include 'config.php';
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="hoslink">
    <meta name="author" content="Anoshika">
    <title>HOSLINK</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

	<!-- ALTERNATIVE COLORS CSS -->
	<link href="#" id="colors" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>
	
	<div id="page">
		
	<header class="header_in is_sticky menu_fixed">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-12">
					<div id="logo">
						<a href="index6.php">
						<img src="img/hoslinklogo.jpg" width="150" height="50" alt="" class="logo_sticky">	
						</a>
					</div>
				</div>
				<div class="col-lg-9 col-12">
					<ul id="top_menu">
						<li><a href="admin_section/add-listing.html" class="btn_add" target="_blank">Add Listing</a></li>
						<li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
						<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
					</ul>
					<!-- /top_menu -->
					<a href="#menu" class="btn_mobile">
						<div class="hamburger hamburger--spin" id="hamburger">
							<div class="hamburger-box">
								<div class="hamburger-inner"></div>
							</div>
						</div>
					</a>
					<nav id="menu" class="main-menu">
						<ul>
							<li><span><a href="index6.php">Home</a></span>
							
							</li>
                            <li><span><a href="contacts.php">Contact</a></span>
							
							</li>
							<li><span><a href="#0">Detail</a></span>
							<ul>

								<li><a href="detail-shop.php">shop</a></li>
								<li><a href="detail-hotel.php">hotel</a></li>
								<li><a href="detail-restaurant.php">restaurant</a></li>
							</ul>								
							</li>
							<li><span><a href="#0">Listings</a></span>
								<ul>
									<li>
										<span><a href="#0">Grid Layout</a></span>
										<ul>
											<li><a href="grid-listings-filterscol.php">Sidebar+Search mobile 1</a></li>
											<li><a href="grid-listings-filterscol.php">Full+Search mobile 1</a></li>
											<li><a href="grid-listings-filterscol.php">Sidebar+Search mobile 2</a></li>
											<li><a href="grid-listings-filterscol.php">Full+Search mobile 2</a></li>
											<li><a href="grid-listings-filterscol.php">Full+Isotope filter</a></li>
										</ul>
									</li>
									<li>
										<span><a href="#0">Row Layout</a></span>
										<ul>
											<li><a href="grid-listings-filterscol.php">Sidebar+Search mobile 1</a></li>
											<li><a href="grid-listings-filterscol.php">Full+Search mobile 1</a></li>
											<li><a href="grid-listings-filterscol.php">Sidebar+Search mobile 2</a></li>
											<li><a href="grid-listings-filterscol.php">Full+Search mobile 2</a></li>
											<li><a href="grid-listings-filterscol.php">Full+Isotope filter</a></li>
										</ul>
									</li>
									<li><a href="listing-map.php">Listing Map</a></li>
									
										
									<li><a href="bookings.php">Bookings - Purchases</a></li>
									<li><a href="checkout.php">Checkout</a></li>
									<li><a href="confirm.php">Confirm</a></li>
								</ul>
							</li>
							<li><span><a href="#0">Pages</a></span>
								<ul>
									<li><a href="account.php">Account</a></li>
									<li><a href="help.html">Help Section</a></li>
									<li><a href="contacts.php">Contacts</a></li>
                                    
									<li>
                                    
										<span><a href="#0">Icon Packs</a></span>
										<ul>
											<li><a href="icon-pack-1.html">Icon pack 1</a></li>
											<li><a href="icon-pack-2.html">Icon pack 2</a></li>
											<li><a href="icon-pack-1.html">Icon pack 3</a></li>
											<li><a href="icon-pack-2.html">Icon pack 4</a></li>
										</ul>
									</li>
									<li><a href="about.php">About</a></li>
									<li><a href="media-gallery.html">Media gallery</a></li>
								</ul>
							</li>
							
							<li><span><a href="about.php" target="_parent">About Us</a></span></li>
                            


                           

                            <li><span><a href="#0">Extra</a></span>
								<ul>
									<li><a href="404.php">404 page</a></li>
									<li><a href="contacts.php">Contacts </a></li>
									<li><a href="pricing-tables.php">Pricing tables</a></li>
									<li><a href="login.php">Login</a></li>
									<li><a href="register.php">Register</a></li>
									<li><a href="menu-options.php">Menu Options</a></li>
									<li><a href="invoice.php" target="_blank">Invoice</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->		
	</header>