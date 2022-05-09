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
			<?php
			if (isset($listCategories)) {
				foreach ($listCategories as &$category) {
					$listProducts = $products['data'];
					$listProductOfCategory = array_filter($listProducts, function ($product) use ($category) {
						return $product['category_id'] === $category['id'];
					});
					if (count($listProductOfCategory) > 0) { ?>
						<div class="cake_feature_inner">
							<div class="main_title">
								<h2><?= $category['name'] ?></h2>
								<h5>Sản phẩm đặc biệt</h5>
							</div>
							<div class="cake_feature_slider owl-carousel">
								<?php
								foreach ($listProductOfCategory as &$product) { ?>
									<div class="item">
										<div class="cake_feature_item">
											<div class="cake_img">
												<img src=<?= "public/img/cake-feature/c-feature-1.jpg" ?> alt="">
											</div>
											<div class="cake_text">
												<h4><?= "$" .  $product['price']  ?></h4>
												<h3><?= $product['name'] ?></h3>
												<a class="pest_btn" href="#">Add to cart</a>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
			<?php }
				}
			} ?>
		</div>
	</section>

	<?php require 'views/fontend/common/footer.php' ?>