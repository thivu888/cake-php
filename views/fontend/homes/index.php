<?php include 'views/fontend/common/head.php' ?>

<body>


	<?php include 'views/fontend/common/header.php' ?>
	<?php count($products['data']) > 0 ? include 'views/fontend/common/slide.php' : '' ?>
	<!--================Welcome Area =================-->
	<section class="welcome_bakery_area">
		<div class="container">
			<?php
			if (isset($listCategories) && count($products['data']) > 0) {
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
											<div class="cake_img" onclick="redirectProductDetails(<?= $product['id'] ?>)">
												<img src=<?= $product['image'] ?> alt="">
											</div>
											<div class="cake_text">
												<h4><?= "$" .  $product['price']  ?></h4>
												<h3><?= $product['name'] ?></h3>
												<p onclick="addToCart(<?= $product['id'] ?>)" class="pest_btn" >Add to cart</p>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
				<?php }
				}
			} else { ?>
				<h1>Sản phẩm trống</h1>
			<?php } ?>
		</div>
	</section>

	<?php require 'views/fontend/common/footer.php' ?>