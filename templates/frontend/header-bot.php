<?php
@session_start();
require_once ("libs/Helper.php");
$san_pham_cha = Helper::loadMenu();
?>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light " >
        <div class="container-fluid" >
            <a class="navbar-brand" style="font: message-box" href="index.php" >Trang chủ</a>
            <a class="navbar-brand" style="font: message-box" href="about.php">Giới thiệu</a>
            <a class="navbar-brand" style="font: message-box" href="product.php">Sản phẩm</a>
            <a class="navbar-brand" style="font: message-box" href="blog.php">Blog</a>
            <a class="navbar-brand" style="font: message-box" href="checkout.php">Thanh toán</a>
            <a class="navbar-brand" style="font: message-box" href="contact.php">Liên hệ</a>
            <a class="navbar-brand" style="font: message-box" href="search.php"><svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg></a>
        </div>
        <div class="top_nav_right" >
            <div class="cart box_1" style="background: #285654;" >
                <a href="checkout.php">
                    <h3> <div class="total" style="font: -apple-system-short-body" >
                            <i class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></i>
                            <span style="font: -apple-system-short-body"><?php if(isset($_SESSION['thanh_tien'])) echo number_format($_SESSION['thanh_tien']); else 0; ?></span> (<span id="simpleCart_quantity"><?php if(isset($_SESSION['so_luong'])) echo $_SESSION['so_luong']; else 0; ?></span> món hàng)</div>

                    </h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty"  >Giỏ Hàng</a></p>

            </div>
        </div>
        <div class="clearfix"></div>
    </nav>
</div>

