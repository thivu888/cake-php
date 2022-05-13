<?php include 'views/fontend/common/head.php' ?>
<?php include 'views/fontend/common/header.php' ?>
<div class="card">
<?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) { ?>
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted"><?= count($_SESSION['cart'])?> items</div>
                </div>
            </div>
            <?php foreach($_SESSION['cart'] as &$cart) { ?>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="<?=$cart['image']?>"></div>
                    <div class="col">
                        <!-- <div class="row text-muted"><?=$cart['name']?></div> -->
                        <div class="row"><?=$cart['name']?></div>
                    </div>
                    <div class="col">
                        <a href="?controller=cart&action=delete&id=<?=$cart['id']?>">-</a><a href="#" class="border"><?=$cart['quantity']?></a><a href="?controller=cart&action=store&id=<?=$cart['id']?>">+</a>
                    </div>
                    <div class="col">&dollar; <?=$cart['price']?> <span class="close"><a href="?controller=cart&action=delete&id=<?=$cart['id']?>">&#10005;</a></span></div>
                </div>
            </div>
            <?php } ?>
            <div class="back-to-shop"><a href="./index.php">&leftarrow;</a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS 3</div>
                <div class="col text-right">&euro; 132.00</div>
            </div>
            <form>
                <p>SHIPPING</p>
                <select>
                    <option class="text-muted">Standard-Delivery- &euro;5.00</option>
                </select>
                <p>GIVE CODE</p>
                <input id="code" placeholder="Enter your code">
            </form>
            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&euro; 137.00</div>
            </div>
            <button class="btn">CHECKOUT</button>
        </div>
    </div>
<?php } ?>

</div>
<?php require 'views/fontend/common/footer.php' ?>