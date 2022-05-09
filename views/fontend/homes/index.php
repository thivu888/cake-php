<?php include 'views/fontend/common/head.php' ?>

<body>

	<?php include 'views/fontend/common/header.php' ?>
	<?php include 'views/fontend/common/slide.php' ?>

	<!--================Welcome Area =================-->
	<section class="welcome_bakery_area">
		<div class="container">
			<div class="welcome_bakery_inner p_100">
				<div class="row">
					<div class="col-lg-6">
						<div class="main_title">
							<h2>Welcome to our Bakery</h2>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur uis autem vel eum.</p>
						</div>
						<div class="welcome_left_text">
							<p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
							<a class="pink_btn" href="#">Know more about us</a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="welcome_img">
							<img class="img-fluid" src="public/img/cake-feature/welcome-right.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
			<div class="cake_feature_inner">
				<div class="main_title">
					<h2>Our Featured Cakes</h2>
					<h5> Seldolor sit amet consect etur</h5>
				</div>
				<div class="cake_feature_slider owl-carousel">
					<?php
					$listProducts = $products['data'];
					foreach ($listProducts as $key => $product) { ?>
						<div class="item">
							<div class="cake_feature_item">
								<div class="cake_img">
									<img src=<?= "public/img/cake-feature/c-feature-1.jpg" ?> alt="">
								</div>
								<div class="cake_text">
									<h4><?= "$" . round(($product['price'] / 20000), 2) ?></h4>
									<h3><?= $product['name'] ?></h3>
									<a class="pest_btn" href="#">Add to cart</a>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!--================End Welcome Area =================-->

	<!--================Special Recipe Area =================-->
	<section class="special_recipe_area">
		<div class="container">
			<div class="special_recipe_slider owl-carousel">
				<div class="item">
					<div class="media">
						<div class="d-flex">
							<img src="public/img/recipe/recipe-1.png" alt="">
						</div>
						<div class="media-body">
							<h4>Special Recipe</h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
							<a class="w_view_btn" href="#">View Details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="media">
						<div class="d-flex">
							<img src="public/img/recipe/recipe-1.png" alt="">
						</div>
						<div class="media-body">
							<h4>Special Recipe</h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
							<a class="w_view_btn" href="#">View Details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="media">
						<div class="d-flex">
							<img src="public/img/recipe/recipe-1.png" alt="">
						</div>
						<div class="media-body">
							<h4>Special Recipe</h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
							<a class="w_view_btn" href="#">View Details</a>
						</div>
					</div>
				</div>
				<div class="item">
					<div class="media">
						<div class="d-flex">
							<img src="public/img/recipe/recipe-1.png" alt="">
						</div>
						<div class="media-body">
							<h4>Special Recipe</h4>
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi equatur uis autem vel eum.</p>
							<a class="w_view_btn" href="#">View Details</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Special Recipe Area =================-->

	<!--================Discover Menu Area =================-->
	<section class="discover_menu_area">
		<div class="discover_menu_inner">
			<div class="container">
				<div class="main_title">
					<h2>Discover Menu</h2>
					<h5>Duis aute irure dolor in reprehenderit voluptate</h5>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="discover_item_inner">
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="discover_item_inner">
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
							<div class="discover_item">
								<h4>Double Chocolate Pie</h4>
								<p>Chocolate puding, vanilla, fruite rasberry jam milk <span>$8.99</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Discover Menu Area =================-->

	<!--================Client Says Area =================-->
	<section class="client_says_area p_100">
		<div class="container">
			<div class="client_says_inner">
				<div class="c_says_title">
					<h2>What Our Client Says</h2>
				</div>
				<div class="client_says_slider owl-carousel">
					<div class="item">
						<div class="media">
							<div class="d-flex">
								<img src="public/img/client/client-1.png" alt="">
								<h3>“</h3>
							</div>
							<div class="media-body">
								<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
								<h5>- Robert joe</h5>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="media">
							<div class="d-flex">
								<img src="public/img/client/client-1.png" alt="">
							</div>
							<div class="media-body">
								<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
								<h5>- Robert joe</h5>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="media">
							<div class="d-flex">
								<img src="public/img/client/client-1.png" alt="">
							</div>
							<div class="media-body">
								<p>Osed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci sed quia non numquam qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.</p>
								<h5>- Robert joe</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Client Says Area =================-->

	<!--================Latest News Area =================-->
	<section class="latest_news_area p_100">
		<div class="container">
			<div class="main_title">
				<h2>Latest Blog</h2>
				<h5>an turn into your instructor your helper, your </h5>
			</div>
			<div class="row latest_news_inner">
				<div class="col-lg-4 col-md-6">
					<div class="l_news_image">
						<div class="l_news_img">
							<img class="img-fluid" src="public/img/blog/latest-news/l-news-1.jpg" alt="">
						</div>
						<div class="l_news_hover">
							<a href="#">
								<h5>Oct 15, 2016</h5>
							</a>
							<a href="#">
								<h4>Nanotechnology immersion along the information</h4>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="l_news_item">
						<div class="l_news_img">
							<img class="img-fluid" src="public/img/blog/latest-news/l-news-2.jpg" alt="">
						</div>
						<div class="l_news_text">
							<a href="#">
								<h5>Oct 15, 2016</h5>
							</a>
							<a href="#">
								<h4>Nanotechnology immersion along the information</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="l_news_item">
						<div class="l_news_img">
							<img class="img-fluid" src="public/img/blog/latest-news/l-news-3.jpg" alt="">
						</div>
						<div class="l_news_text">
							<a href="#">
								<h5>Oct 15, 2016</h5>
							</a>
							<a href="#">
								<h4>Nanotechnology immersion along the information</h4>
							</a>
							<p>Lorem ipsum dolor sit amet, cons ectetur elit. Vestibulum nec odios Suspe ndisse cursus mal suada faci lisis. Lorem ipsum dolor sit ametion ....</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Latest News Area =================-->

	<!--================Footer Area =================-->
	<footer class="footer_area">
		<div class="footer_widgets">
			<div class="container">
				<div class="row footer_wd_inner">
					<div class="col-lg-3 col-6">
						<aside class="f_widget f_about_widget">
							<img src="public/img/footer-logo.png" alt="">
							<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui bland itiis praesentium voluptatum deleniti atque corrupti.</p>
							<ul class="nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</aside>
					</div>
					<div class="col-lg-3 col-6">
						<aside class="f_widget f_link_widget">
							<div class="f_title">
								<h3>Quick links</h3>
							</div>
							<ul class="list_style">
								<li><a href="#">Your Account</a></li>
								<li><a href="#">View Order</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Terms & Conditionis</a></li>
							</ul>
						</aside>
					</div>
					<div class="col-lg-3 col-6">
						<aside class="f_widget f_link_widget">
							<div class="f_title">
								<h3>Work Times</h3>
							</div>
							<ul class="list_style">
								<li><a href="#">Mon. : Fri.: 8 am - 8 pm</a></li>
								<li><a href="#">Sat. : 9am - 4pm</a></li>
								<li><a href="#">Sun. : Closed</a></li>
							</ul>
						</aside>
					</div>
					<div class="col-lg-3 col-6">
						<aside class="f_widget f_contact_widget">
							<div class="f_title">
								<h3>Contact Info</h3>
							</div>
							<h4>(1800) 574 9687</h4>
							<p>Justshiop Store <br />256, baker Street,, New Youk, 5245</p>
							<h5>cakebakery@contact.co.in</h5>
						</aside>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================End Footer Area =================-->


	<!--================Search Box Area =================-->
	<div class="search_area zoom-anim-dialog mfp-hide" id="test-search">
		<div class="search_box_inner">
			<h3>Search</h3>
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button"><i class="icon icon-Search"></i></button>
				</span>
			</div>
		</div>
	</div>
	<!--================End Search Box Area =================-->





	<?php require 'views/fontend/common/footer.php' ?>