<!-- mens -->
<div class="inner-hero-content" >
    <h2 align="center">Sản phẩm</h2>
</div>
<div class="men-wear">
    <div class="container">
        <div class="row">
        <?php
        include("v_product_right.php");

        ?>
        <div class="clearfix"></div>
            <br>
            <?php
            foreach($san_phams as $key => $value)
            {
            ?>
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item product_max">
                                    <img src="public/layout/img/product/<?php echo $value->hinh ?>" alt=""
                                         class="pro-image-front">
                                    <img src="public/layout/img/product/<?php echo $value->hinh ?>" alt=""
                                         class="pro-image-back">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.php?ma_san_pham=<?php echo $value->ma_san_pham?>" class="link-product-add-cart" style="background: #285654">Chi tiết sản phẩm</a>
                                        </div>
                                    </div>

                                </div>
                                <div class="item-info-product ">
                                    <h6 id="heightMax"><a href="single.php?ma_san_pham=<?php echo $value->ma_san_pham?>" style="color: #411911"><?php echo $value->ten_san_pham;?></a></h6>
                                    <div class="info-product-price">
                                        <span class="item_price"><p size="14px"><?php echo number_format($value->don_gia); ?> VNĐ</p></span>

                                    </div>
                                    <input type="hidden" value="<?php echo $value->don_gia; ?>"
                                           id="dongia<?php echo $value->ma_san_pham; ?>"/>
                                    <input type="hidden" value="1"
                                           id="soluong<?php echo $value->ma_san_pham; ?>" />
                                    <a   style="background: #285654" class="item_add single-item  button2 btn" href="javascript:void(0)" id ="<?php echo $value->ma_san_pham;?>">Thêm vào giỏ hàng</a>
                                </div>
                            </div>

                        </div>
                        <?php
                    }
                    ?>
                    <div class="clearfix"></div>
        </div>
        <div class="shop-pagination">
            <nav>
                <ul class="pagination">
                    <?php if ($count > 8) { ?>
                        <li class="page-item"> <?php echo $lst; ?></li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</div>
<br>
<br>

