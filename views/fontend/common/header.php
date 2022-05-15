<header class="main_header_area">
    <div class="top_header_area row m0">
        <div class="container">
            <div class="float-left">
                <a href="tel: +840123456789"><i class="fa fa-phone" aria-hidden="true"></i> 0123456789</a>
                <a href="mailto:info@cakebakery.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> info@cakebakery.com</a>
            </div>
            <div class="float-right" style="margin-top:16px;">
                <ul class="h_social list_style">
                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
                <ul class="h_search list_style">
                    <li class="shop_cart">
                        <a href="?controller=cart">
                            <i class="lnr lnr-cart" id="icon-cart-i">
                                <?php if (!empty($_SESSION['cart'])) { ?>
                                    <p style="top:1px;" class="number_cart" id="cart-icon"><?= count($_SESSION['cart']) ?></p>
                                <?php } ?>
                            </i>
                        </a>
                    </li>
                    <li><a class="popup-with-zoom-anim" href="#test-search"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main_menu_area">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php">
                    <img src="public/img/logo.png" alt="">
                    <img src="public/img/logo-2.png" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="my_toggle_menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="dropdown submenu">
                            <a href="./" role="button">Home</a>
                        </li>
                        <li class="dropdown submenu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Sản phẩm</a>
                            <?php if (isset($categories) && isset($categories['data'])) { ?>
                                <ul class="dropdown-menu">
                                    <?php
                                    $listCategories = $categories['data'];
                                    foreach ($listCategories as &$category) {
                                    ?>
                                        <li><a href="?controller=product&action=category&id=<?= $category['id'] ?>"><?= $category['name'] ?></a></li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                        <li class="dropdown submenu">
                            <a href="?controller=contact">Phản hồi</a>
                        </li>
                    </ul>
                    <ul class=" navbar-nav justify-content-end">
                        <?php if (isset($_SESSION['user'])) { ?>
                            <li class="dropdown submenu">
                                <a href="#"><?= $_SESSION['user']['username'] ?></a>
                                <ul class="dropdown-menu">
                                    <li><a href="?controller=order">Xem đơn hàng</a></li>
                                    <li><a href="?controller=user&action=logout">Đăng xuất</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="dropdown submenu">
                                <a class="cursor-pointer" data-toggle="modal" data-target="#myModal-login">Đăng nhập</a>
                            </li>
                            <li class="dropdown submenu">
                                <a class="cursor-pointer" data-toggle="modal" data-target="#myModal-register">Đăng kí</a>
                            </li>
                    </ul>
                <?php } ?>
                </div>
            </nav>
        </div>
    </div>
</header>