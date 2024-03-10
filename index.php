<!DOCTYPE html>
<html lang="en">
<head>
<title>Travelix</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Travelix Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<?php include 'template/header.php'; ?>

	<?php include 'template/div.php'; ?>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			
			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<!-- Image by https://unsplash.com/@anikindimitry -->
					<div class="home_slider_background" style="background-image:url(images/swit.avif)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="offers.html">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/worl.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="offers.html">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/london.jpg)"></div>

					<div class="home_slider_content text-center">
						<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
							<h1>discover</h1>
							<h1>the world</h1>
							<div class="button home_slider_button"><div class="button_bcg"></div><a href="offers.html">explore now<span></span><span></span><span></span></a></div>
						</div>
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav - Prev -->
			<div class="home_slider_nav home_slider_prev">
				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_prev'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
					<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
					M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
					C22.545,2,26,5.541,26,9.909V23.091z"/>
					<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
					11.042,18.219 "/>
				</svg>
			</div>
			
			<!-- Home Slider Nav - Next -->
			<div class="home_slider_nav home_slider_next">
				<svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
						<linearGradient id='home_grad_next'>
							<stop offset='0%' stop-color='#fa9e1b'/>
							<stop offset='100%' stop-color='#8d4fff'/>
						</linearGradient>
					</defs>
				<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
				M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
				C22.545,2,26,5.541,26,9.909V23.091z"/>
				<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
				17.046,15.554 "/>
				</svg>
			</div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots">
				<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
					<li class="home_slider_custom_dot active"><div></div>01.</li>
					<li class="home_slider_custom_dot"><div></div>02.</li>
					<li class="home_slider_custom_dot"><div></div>03.</li>
				</ul>
			</div>
			
		</div>

	</div>
	
	<!-- Search -->

	<div class="search">
		

		<!-- Search Contents -->
		
		<div class="container fill_height">
			<div class="row fill_height">
				<div class="col fill_height">

					<!-- Search Tabs -->

					<div class="search_tabs_container">
						<div class="search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/suitcase.png" alt=""><span>hotels</span></div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/bus.png" alt="">car rentals</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/departure.png" alt="">flights</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/island.png" alt="">trips</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/cruise.png" alt="">cruises</div>
							<div class="search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start"><img src="images/diving.png" alt="">activities</div>
						</div>		
					</div>

					<!-- Search Panel -->

					<div class="search_panel active">
						<form action="#" id="search_form_1" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_1" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_1" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_2" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_2" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_2" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_3" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_3" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_3" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_4" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_4" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_4" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_5" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_5" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_5" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>

					<!-- Search Panel -->

					<div class="search_panel">
						<form action="#" id="search_form_6" class="search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start">
							<div class="search_item">
								<div>destination</div>
								<input type="text" class="destination search_input" required="required">
							</div>
							<div class="search_item">
								<div>check in</div>
								<input type="text" class="check_in search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>check out</div>
								<input type="text" class="check_out search_input" placeholder="YYYY-MM-DD">
							</div>
							<div class="search_item">
								<div>adults</div>
								<select name="adults" id="adults_6" class="dropdown_item_select search_input">
									<option>01</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<div class="search_item">
								<div>children</div>
								<select name="children" id="children_6" class="dropdown_item_select search_input">
									<option>0</option>
									<option>02</option>
									<option>03</option>
								</select>
							</div>
							<button class="button search_button">search<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>		
	</div>
	<!-- Intro -->
	
	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2 class="intro_title text-center">We have the best tours</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="intro_text text-center">
						<p>Travelix services are up to date with all of the Prices really reasonable. Tour to places that are very safe and secure in all terms. </p>
					</div>
				</div>
			</div>
			<div class="row intro_items">

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@dnevozhai -->
						<div class="intro_item_background" style="background-image:url(images/hunza.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="pakistan.html">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Pakistan</h1>
								<div class="intro_price">From $500</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@hellolightbulb -->
						<div class="intro_item_background" style="background-image:url(images/china.jpg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>China</h1>
								<div class="intro_price">From $1000</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Intro Item -->

				<div class="col-lg-4 intro_col">
					<div class="intro_item">
						<div class="intro_item_overlay"></div>
						<!-- Image by https://unsplash.com/@willianjusten -->
						<div class="intro_item_background" style="background-image:url(images/switzerland.jpeg)"></div>
						<div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
							<div class="intro_date">May 25th - June 01st</div>
							<div class="button intro_button"><div class="button_bcg"></div><a href="#">see more<span></span><span></span><span></span></a></div>
							<div class="intro_center text-center">
								<h1>Switzerland</h1>
								<div class="intro_price">From $1450</div>
								<div class="rating rating_4">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="cta_background" style="background-image:url(images/cta.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col">

					<!-- CTA Slider -->

					<div class="cta_slider_container">
						<div class="owl-carousel owl-theme cta_slider">

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Scattered like pearls across the deep blue Indian ocean, the islands of Maldives are irresistible in every way. The Maldives is home to sandy white beaches, glistening waters, and a dizzying variety of marine life. However, beyond the breathtaking beauty, is another special element that makes Maldives a destination unlike any other. That is the unyielding Maldivian hospitality. A gem in its own right.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Scattered like pearls across the deep blue Indian ocean, the islands of Maldives are irresistible in every way. The Maldives is home to sandy white beaches, glistening waters, and a dizzying variety of marine life. However, beyond the breathtaking beauty, is another special element that makes Maldives a destination unlike any other. That is the unyielding Maldivian hospitality. A gem in its own right.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>

							<!-- CTA Slider Item -->
							<div class="owl-item cta_item text-center">
								<div class="cta_title">maldives deluxe package</div>
								<div class="rating_r rating_r_4">
									<i></i>
									<i></i>
									<i></i>
									<i></i>
									<i></i>
								</div>
								<p class="cta_text">Scattered like pearls across the deep blue Indian ocean, the islands of Maldives are irresistible in every way. The Maldives is home to sandy white beaches, glistening waters, and a dizzying variety of marine life. However, beyond the breathtaking beauty, is another special element that makes Maldives a destination unlike any other. That is the unyielding Maldivian hospitality. A gem in its own right.</p>
								<div class="button cta_button"><div class="button_bcg"></div><a href="#">book now<span></span><span></span><span></span></a></div>
							</div>
							
						</div>

						<!-- CTA Slider Nav - Prev -->
						<div class="cta_slider_nav cta_slider_prev">
							<svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- CTA Slider Nav - Next -->
						<div class="cta_slider_nav cta_slider_next">
							<svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='cta_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>

				</div>
			</div>
		</div>
					
	</div>

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">the best offers with rooms</h2>
				</div>
			</div>
			<div class="row offers_items">

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(images/offer3.jpg)"></div>
									<div class="offer_name"><a href="#">England</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">London<span>England</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">London, city, capital of the United Kingdom. It is among the oldest of the world’s great cities—its history spanning nearly two millennia.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by Egzon Bytyqi -->
									<div class="offers_image_background" style="background-image:url(images/offer2.jpg)"></div>
									<div class="offer_name"><a href="#">Turkey</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">Istanbul<span>Turkey</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">Istanbul is a beautiful destination that is one of the oldest cities. It has seen so much of history, and there is so many cultural relics here.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@nevenkrcmarek -->
									<div class="offers_image_background" style="background-image:url(images/offer.jpg)"></div>
									<div class="offer_name"><a href="#">France</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">Paris<span>France</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">For centuries Paris has been one of the world’s most important and attractive cities. It is appreciated for the opportunities it offers.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@mantashesthaven -->
									<div class="offers_image_background" style="background-image:url(images/offer4.jpg)"></div>
									<div class="offer_name"><a href="#">America</a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">New York<span>America</span></div>
									<div class="rating_r rating_r_4 offers_rating">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text">New York City comprises 5 boroughs sitting where the Hudson River meets the Atlantic Ocean. At its core is Manhattan.</p>
									<div class="offers_icons">
										<ul class="offers_icons_list">
											<li class="offers_icons_item"><img src="images/post.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
											<li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
										</ul>
									</div>
									<div class="offers_link"><a href="offers.html">read more</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Testimonials -->

	<div class="testimonials">
		<div class="test_border"></div>
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">what our clients say about us</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<!-- Testimonials Slider -->

					<div class="test_slider_container">
						<div class="owl-carousel owl-theme test_slider">

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/Kayla-Person.jpg" alt="https://unsplash.com/@anniegray"></div>
									<div class="test_icon"><img src="images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2020</div>
											</div>
											<div class="test_quote_title">"Wonderful trip"</div>
											<p class="test_quote_text">My trip with family to the beautiful valleys of Pakistan was fantastic due to this helpful website.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/per.jpg" alt="https://unsplash.com/@tschax"></div>
									<div class="test_icon"><img src="images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">James Potter</div>
												<div class="test_date">April 29, 2021</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">I found the service and response of this travel agency to be excellent.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/Kelly_Johnson.jpg" alt="https://unsplash.com/@seefromthesky"></div>
									<div class="test_icon"><img src="images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">Lily Granger</div>
												<div class="test_date">January 11, 2022</div>
											</div>
											<div class="test_quote_title">"Great and refreshing experience "</div>
											<p class="test_quote_text">This sight helped me a lot in choosing the right destination and my tour was awesome.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/Kayla-Person.jpg" alt=""></div>
									<div class="test_icon"><img src="images/island_t.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">carla smith</div>
												<div class="test_date">May 24, 2020</div>
											</div>
											<div class="test_quote_title">"Wonderful trip"</div>
											<p class="test_quote_text">My trip with family to the beautiful valleys of Pakistan was fantastic due to this helpful website.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/per.jpg" alt=""></div>
									<div class="test_icon"><img src="images/backpack.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">James Potter</div>
												<div class="test_date">April 29, 2021</div>
											</div>
											<div class="test_quote_title">" Best holliday ever "</div>
											<p class="test_quote_text">I found the service and response of this travel agency to be excellent.</p>
										</div>
									</div>
								</div>
							</div>

							<!-- Testimonial Item -->
							<div class="owl-item">
								<div class="test_item">
									<div class="test_image"><img src="images/Kelly_Johnson.jpg" alt=""></div>
									<div class="test_icon"><img src="images/kayak.png" alt=""></div>
									<div class="test_content_container">
										<div class="test_content">
											<div class="test_item_info">
												<div class="test_name">Lily Granger</div>
												<div class="test_date">January 11, 2022</div>
											</div>
											<div class="test_quote_title">"Great and refreshing experience"</div>
											<p class="test_quote_text">This sight helped me a lot in choosing the right destination and my tour was awesome.</p>
										</div>.
									</div>
								</div>
							</div>

						</div>

						<!-- Testimonials Slider Nav - Prev -->
						<div class="test_slider_nav test_slider_prev">
							<svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_prev'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
								<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
								M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
								C22.545,2,26,5.541,26,9.909V23.091z"/>
								<polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
								11.042,18.219 "/>
							</svg>
						</div>
						
						<!-- Testimonials Slider Nav - Next -->
						<div class="test_slider_nav test_slider_next">
							<svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
									<linearGradient id='test_grad_next'>
										<stop offset='0%' stop-color='#fa9e1b'/>
										<stop offset='100%' stop-color='#8d4fff'/>
									</linearGradient>
								</defs>
							<path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
							M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
							C22.545,2,26,5.541,26,9.909V23.091z"/>
							<polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
							17.046,15.554 "/>
							</svg>
						</div>

					</div>
					
				</div>
			</div>

		</div>
	</div>

	<div class="trending">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">trending now</h2>
				</div>
			</div>
			<div class="row trending_container">

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_1.png" alt="https://unsplash.com/@fransaraco"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book1.html">Hotel Margala</a></div>
							<div class="trending_price">From $150</div>
							<div class="trending_location">Islamabad, Pakistan</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_2.png" alt="https://unsplash.com/@grovemade"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book2.html">Crown Plaza</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">Istanbul, Turkey</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_3.png" alt="https://unsplash.com/@jbriscoe"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book5.html">Queen hotel</a></div>
							<div class="trending_price">From $300</div>
							<div class="trending_location">Paris, France</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_4.png" alt="https://unsplash.com/@oowgnuj"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book2.html">Taksim the Peak</a></div>
							<div class="trending_price">From $200</div>
							<div class="trending_location">Istanbul, Turkey</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_5.png" alt="https://unsplash.com/@mindaugas"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book3.html">Central Park Hotel</a></div>
							<div class="trending_price">From $190</div>
							<div class="trending_location">London, England</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_6.png" alt="https://unsplash.com/@itsnwa"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book4.html">Pod Times square</a></div>
							<div class="trending_price">From $250</div>
							<div class="trending_location">New York, America</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_7.png" alt="https://unsplash.com/@rktkn"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book5.html">Luxus Hotel</a></div>
							<div class="trending_price">From $182</div>
							<div class="trending_location">Paris, France</div>
						</div>
					</div>
				</div>

				<!-- Trending Item -->
				<div class="col-lg-3 col-sm-6">
					<div class="trending_item clearfix">
						<div class="trending_image"><img src="images/trend_8.png" alt="https://unsplash.com/@thoughtcatalog"></div>
						<div class="trending_content">
							<div class="trending_title"><a href="book1.html">Serena Hotel</a></div>
							<div class="trending_price">From $180</div>
							<div class="trending_location">Islamabad, Pakistan</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<div class="contact">
		<div class="contact_background" style="background-image:url(images/contact.png)"></div>

		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="contact_image">
						
					</div>
				</div>
				<div class="col-lg-7">
					<div class="contact_form_container">
						<div class="contact_title">get in touch</div>
						<form action="contact.php" method="post" id="contact_form" class="contact_form text-center">
							<input type="text" id="contact_form_name" name="t1" class="contact_form_name input_field" placeholder="Name" required="required" data-error="Name is required.">
							<input type="text" id="contact_form_email" name="t2" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
							<input type="text" id="contact_form_subject" name="t3" class="contact_form_subject input_field" placeholder="Subject" required="required" data-error="Subject is required.">
							<textarea id="contact_form_message" name="t4" class="text_field contact_form_message" name="message" rows="4" placeholder="Message" required="required" data-error="Please, write us a message."></textarea>
							<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">send message<span></span><span></span><span></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<?php include 'template/footer.php'; ?>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 order-lg-1 order-2  ">
					<div class="copyright_content d-flex flex-row align-items-center">
						<div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
				<?php include 'template/copyright.php'; ?>
			</div>
		</div>
	</div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

</body>

</html>