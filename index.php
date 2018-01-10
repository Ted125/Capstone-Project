<!DOCTYPE html>
<html lang="en">
<head>
<title>KwARto | Web Application</title>
<!-- HEAD TAG HERE WITH THE NECESSARY CSS LINKS AND PLUGINS -->
<?php include('Access/Header.php');?>
</head>

<body>

<div class="super_container">

	<!-- NAVBAR HERE -->
	<?php include('Access/Navbar.php');?>

	<div class="main_slider" style="background-image:url(http://www.iasc2015.org/l/2017/10/06/red-sofa-furniture-design-red-sofa-near-white-vase-n-orange-background-wallpaper_b740487bc8b1df8f.jpg)">
		<div class="container fill_height">
			<div class="row align-items-center fill_height">
				<div class="col">
					<div class="main_slider_content">
						<h6>Opening Collection 2018</h6>
						<h1>Get up to 20% Off New Arrivals</h1>
						<div class="red_button shop_now_button"><a href="loginnew.php">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(https://cdn.decoist.com/wp-content/uploads/2015/01/Dark-gray-accent-wall-and-pops-of-black-anchor-the-lovely-room.jpg)">
						<div class="banner_category">
							<a href="categories.php">Bedroom</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(http://dreamstop.com/wp-content/uploads/2013/07/office-dream-meaning.jpeg)">
						<div class="banner_category">
							<a href="categories.php">Home Office</a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="banner_item align-items-center" style="background-image:url(https://st.hzcdn.com/simgs/d7411574036680db_4-7159/contemporary-living-room.jpg)">
						<div class="banner_category">
							<a href="categories.php">Living Room</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="new_arrivals">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>New Arrivals</h2>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col text-center">
					<div class="new_arrivals_sorting">
						<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".bedroom">bedroom</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".dining">dining room</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".homeacc">home accents</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".homeoff">home office</li>
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".living">living room</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

						<div class="product-item homeoff">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" style="padding-top: 20px; max-height: 240px;" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Swivel Chair (Black)</a></h6>
									<div class="product_price">P540.00<span>P600.00</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item living">
							<div class="product product_filter">
								<div class="product_image">
									<img src="http://www.ikea.com/PIAimages/0312397_PE429728_S5.JPG" style="padding-top: 20px; max-height: 240px;" alt="">
								</div>
								<div class="favorite"></div>
								<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Leatherette Sofa</a></h6>
									<div class="product_price">P3,610.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item bedroom">
							<div class="product product_filter">
								<div class="product_image">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1zUdS4n5O_unZ0F9RkYZfLcOOgkiIQicSvGXOPmuivALtHIGF" style="padding-top: 20px; max-height: 240px;">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Modern Chic Bed</a></h6>
									<div class="product_price">P2,220.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item bedroom">
							<div class="product product_filter">
								<div class="product_image">
									<img src="https://ashleyfurniture.scene7.com/is/image/AshleyFurniture/B188-22-SD-P1-KO?$AFHS-Grid-1X$" style="padding-top: 20px; max-height: 240px;">
								</div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>sale</span></div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Small Bedroom Desk</a></h6>
									<div class="product_price">P2,000.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item dining">
							<div class="product product_filter">
								<div class="product_image">
									<img src="http://www.vikingcasual.com/media/ecom/prodsm/T-418%20Square%20Floral%20Table%2064%20x%2064.jpg" style="padding-top: 20px; max-height: 240px;">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Dining Table, Floral</a></h6>
									<div class="product_price">P1,950.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item dining">
							<div class="product discount product_filter">
								<div class="product_image">
									<img src="https://www.patiowarehouse.co.za/wp-content/uploads/2017/10/YorkB-6Seater-400x400.jpg" style="padding-top: 20px; max-height: 240px;">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-P500</span></div>
								<div class="product_info">
									<h6 class="product_name"><a href="#single.php">Dining Room Set (White)</a></h6>
									<div class="product_price">P4,500<span>P5,000.00</span></div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item bedroom">
							<div class="product product_filter">
								<div class="product_image">
									<img src="https://i.pinimg.com/736x/42/7d/09/427d09befbe59e3d47f29eebd63e762b--bedroom-desk-bedroom-office.jpg" style="padding-top: 20px; max-height: 240px;">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Blue Bedroom Desk</a></h6>
									<div class="product_price">P1,500.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item dining">
							<div class="product product_filter">
								<div class="product_image">
									<img src="https://images.pier1.com/dis/dw/image/v2/AAID_PRD/on/demandware.static/-/Sites-pier1_master/default/dw997b1142/images/2503656/2503656_1.jpg?sw=1600&sh=1600&impolicy=Bypass" style="padding-top: 20px;">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Round Table</a></h6>
									<div class="product_price">P1,400.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item homeoff">
							<div class="product product_filter">
								<div class="product_image">
									<img src="https://www.cultfurniture.com/images/products/medium/1486046910-20134200.jpg" style="max-height: 240px; padding-top: 20px;">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Turbo Thermal Label Chair</a></h6>
									<div class="product_price">P500.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>

						<div class="product-item homeacc">
							<div class="product product_filter">
								<div class="product_image">
									<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXx4epDpWIT7a-4AYBLk5xDhaJ_ZpboHnMc5jFbcnSygD98Tnp" style="padding-top: 20px; max-height: 240px;">
								</div>
								<div class="favorite"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.php">Floral Divider</a></h6>
									<div class="product_price">P1,180.00</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="deal_ofthe_week">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="deal_ofthe_week_img">
						<img src="https://www.knoll.com/media/328/93/Thumb_aa-residential-chaise-lounge-880,3.png" alt="">
					</div>
				</div>
				<div class="col-lg-6 text-right deal_ofthe_week_col">
					<div class="deal_ofthe_week_content d-flex flex-column align-items-center float-right">
						<div class="section_title">
							<h2>Deal Of The Week</h2>
						</div>
						<ul class="timer">
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="day" class="timer_num">03</div>
								<div class="timer_unit">Day</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="hour" class="timer_num">15</div>
								<div class="timer_unit">Hours</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="minute" class="timer_num">45</div>
								<div class="timer_unit">Mins</div>
							</li>
							<li class="d-inline-flex flex-column justify-content-center align-items-center">
								<div id="second" class="timer_num">23</div>
								<div class="timer_unit">Sec</div>
							</li>
						</ul>
						<div class="red_button deal_ofthe_week_button"><a href="#">shop now</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="best_sellers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title new_arrivals_title">
						<h2>Best Sellers</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="product_slider_container">
						<div class="owl-carousel owl-theme product_slider">

							<div class="owl-item product_slider_item">
								<div class="product-item homeoff">
									<div class="product discount">
										<div class="product_image">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXx4epDpWIT7a-4AYBLk5xDhaJ_ZpboHnMc5jFbcnSygD98Tnp" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Floral Divider</a></h6>
											<div class="product_price">P1,180.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="https://i.pinimg.com/736x/42/7d/09/427d09befbe59e3d47f29eebd63e762b--bedroom-desk-bedroom-office.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Blue Bedroom Desk</a></h6>
											<div class="product_price">P1,500.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="https://www.patiowarehouse.co.za/wp-content/uploads/2017/10/YorkB-6Seater-400x400.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-P500</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#single.php">Dining Room Set (White)</a></h6>
											<div class="product_price">P4,500<span>P5,000.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item dining">
									<div class="product">
										<div class="product_image">
											<img src="http://www.ikea.com/PIAimages/0312397_PE429728_S5.JPG" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Leatherette Sofa</a></h6>
											<div class="product_price">P3,610.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Swivel Chair (Black)</a></h6>
											<div class="product_price">P540.00<span>P600.00</span></div>
										</div>
									</div>
								</div>
							</div>

							
							<div class="owl-item product_slider_item">
								<div class="product-item homeoff">
									<div class="product discount">
										<div class="product_image">
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXx4epDpWIT7a-4AYBLk5xDhaJ_ZpboHnMc5jFbcnSygD98Tnp" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Floral Divider</a></h6>
											<div class="product_price">P1,180.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="https://i.pinimg.com/736x/42/7d/09/427d09befbe59e3d47f29eebd63e762b--bedroom-desk-bedroom-office.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite"></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Blue Bedroom Desk</a></h6>
											<div class="product_price">P1,500.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item homeacc">
									<div class="product">
										<div class="product_image">
											<img src="https://www.patiowarehouse.co.za/wp-content/uploads/2017/10/YorkB-6Seater-400x400.jpg" style="padding-top: 20px; max-height: 240px;">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-P500</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="#single.php">Dining Room Set (White)</a></h6>
											<div class="product_price">P4,500<span>P5,000.00</span></div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item dining">
									<div class="product">
										<div class="product_image">
											<img src="http://www.ikea.com/PIAimages/0312397_PE429728_S5.JPG" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite"></div>
										<div class="product_bubble product_bubble_left product_bubble_green d-flex flex-column align-items-center"><span>new</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Leatherette Sofa</a></h6>
											<div class="product_price">P3,610.00</div>
										</div>
									</div>
								</div>
							</div>

							<div class="owl-item product_slider_item">
								<div class="product-item women men">
									<div class="product">
										<div class="product_image">
											<img src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" style="padding-top: 20px; max-height: 240px;" alt="">
										</div>
										<div class="favorite favorite_left"></div>
										<div class="product_bubble product_bubble_right product_bubble_red d-flex flex-column align-items-center"><span>-10%</span></div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.php">Swivel Chair (Black)</a></h6>
											<div class="product_price">P540.00<span>P600.00</span></div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="blogs">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h2>Latest News</h2>
					</div>
				</div>
			</div>
			<div class="row blogs_container">
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(https://i0.wp.com/belovedbd.com/wp-content/uploads/2017/08/Eid-ul-Adha-2017-in-Bangladesh.jpg?fit=940%2C630&ssl=1)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Year End Sale</h4>
							<span class="blog_meta">8:00 AM | dec 01, 2017</span>
							<a class="blog_more" href="news.php">See More</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(http://www.carters.com/on/demandware.static/-/Sites-Carters-Library/default/dwb2fa8876/images/carters/slots/clearance/carters_mobile_destinationpage_clearance.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Clearance Sale</h4>
							<span class="blog_meta">4:00 PM | Jan 01, 2017</span>
							<a class="blog_more" href="news.php">See more</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 blog_item_col">
					<div class="blog_item">
						<div class="blog_background" style="background-image:url(http://cdn.crownmediadev.com/6d/c3/140f713445c58a1fca4466288f10/bigstock-decorated-christmas-tree-close-76005554-1.jpg)"></div>
						<div class="blog_content d-flex flex-column align-items-center justify-content-center text-center">
							<h4 class="blog_title">Christmas Sale</h4>
							<span class="blog_meta">3:00 PM | Dec 01, 2017</span>
							<a class="blog_more" href="news.php">See more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Within the Philippines</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cash on delivery</h6>
							<p>Pay upon receiving your item</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>14 days return</h6>
							<p>See return policy for details</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>Open Always</h6>
							<p>24/7</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- NEWSLETTER HERE-->
	<?php include('Access/Newsletter.php');?>

	<!-- FOOTER HERE-->
	<?php include('Access/Footer.php');?>

</div>

<!-- MODAL CONTENTS -->

<div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                    <div role="document" class="modal-dialog modal-bigger" style="min-width: 800px!important;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 id="exampleModalLabel" class="modal-title">Order Details</h4>
                          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                          <table class="table-bordered thead-dark table-hover" style="width: 100%; margin-top: 20px;">
								<thead>
									<tr style="text-align: center;">
										<th>Item No.</th>	
										<th>Product</th>
										<th>Quantity</th>
										<th>Product Name</th>
									
										<th>Price</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody class="text-center">
									<tr class="">
										<td class="">1</td>
										<td class=""><a href="single.php"><img style="max-height: 140px;" src="http://www.zurifurniture.com/common/images/products/large/medici_chair_red2.jpg" alt=" " class="img-responsive"></a></td>
										<td class="">
											<div class="" style="text-align: -webkit-center"> 
												<div class="form-group form-group-options">
						                            <div class="input-group input-group-option" style="width: 130px;">
						                                <span class="input-group-addon input-group-addon-remove btn">
						                                    <span class="fa fa-minus"></span>
						                                </span>
						                                <input type="text" class="form-control" style="text-align: center;" value="1" placeholder="1">
						                                <span class="input-group-addon btn">
						                                    <span class="fa fa-plus"></span>
						                                </span>
						                            </div>
				                        		</div>
											</div>
										</td>
										<td class="">Comfy Chair</td>
										<td class="">P850.00</td>
										<td class="" style="text-align:  center;">	
											<div class="red_button" style="width: 200px"><a href="#">move to wishlist</a></div><br>
											<div class="red_button" style="width: 100px; background-color: #444; margin-top: 10px;"><a href="#">remove</a></div>
										</td>
									</tr>
									<tr class="">
										<td class="">2</td>
										<td class=""><a href="single.php"><img style="max-height: 140px;" src="https://images.samsclubresources.com/is/image/samsclub/0004216738171_A?$img_size_380x380$" alt=" " class="img-responsive"></a></td>
										<td class="">
											<div class="" style="text-align: -webkit-center"> 
												<div class="form-group form-group-options">
						                            <div class="input-group input-group-option" style="width: 130px;">
						                                <span class="input-group-addon input-group-addon-remove btn">
						                                    <span class="fa fa-minus"></span>
						                                </span>
						                                <input type="text" class="form-control" style="text-align: center;" value="1" placeholder="1">
						                                <span class="input-group-addon btn">
						                                    <span class="fa fa-plus"></span>
						                                </span>
						                            </div>
				                        		</div>
											</div>
										</td>
										<td class="">Swivel Chair</td>
										<td class="">P540.00</td>
										<td class="" style="text-align:  center;">	
											<div class="red_button" style="width: 200px;"><a href="#">move to wishlist</a></div><br>
											<div class="red_button" style="width: 100px;background-color: #444; margin-top: 10px;"><a href="#">remove</a></div>
										</td>
									</tr>
							</tbody></table>
                        </div>
                        <div class="modal-footer">
                        	<a href="cart.php" class="btn red_button button" style="color: white;" >Checkout</a>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
</body>

</html>
