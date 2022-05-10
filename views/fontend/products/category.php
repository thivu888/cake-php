<?php include 'views/fontend/common/head.php' ?>
<?php include 'views/fontend/common/header.php' ?>
<section class="service_offer_area p_100">
    <div class="container">
        <div class="main_title">
            <h2>Sản phẩm</h2>
        </div>
        <div class="row service_main_item_inner">
            <?php if ($products['data'] && count($products['data']) > 0) {
                foreach ($products['data'] as &$product) { ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="service_m_item">
                            <div class="service_img_inner">
                                <div class="service_img" onclick="redirectProductDetails(<?= $product['id'] ?>)">
                                    <img class="rounded-circle" src="public/img/service/service-1.png" alt="">
                                </div>
                            </div>
                            <div></div>
                            <div class="service_text">
                                <span><?= "$" .  $product['price']  ?></span>
                                <span><?= $product['name'] ?></span><br />
                                <a class="pest_btn" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<?php require 'views/fontend/common/footer.php' ?>