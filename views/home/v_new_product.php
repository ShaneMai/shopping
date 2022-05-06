<div class="product" data-aos="fade-up" data-aos-duration="1000">

    <div class="container">
        <div class="row"><?php
        foreach($new_san_phams as $sp)
        {
    ?>
    <div class="col-md-3 product-men " >
        <div class="men-pro-item simpleCart_shelfItem" >
            <div class="men-thumb-item product_max" >
                <img src="public/layout/img/product/<?php echo $sp->hinh;?>" alt="" class="pro-image-front" >
                <img src="public/layout/img/product/<?php echo $sp->hinh;?>" alt="" class="pro-image-back">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro">
                        <a href="single.php?ma_san_pham=<?php echo $sp->ma_san_pham?>" class="link-product-add-cart" style="background: #285654">Chi tiết sản phẩm</a>
                    </div>
                </div>
                <span class="product-new-top" style="background: pink">Mới</span>

            </div>
            <div class="item-info-product " >
                <h6 id="heightMax"><a href="single.php?ma_san_pham=<?php echo $sp->ma_san_pham?>" style="color: #411911"><?php echo $sp->ten_san_pham;?></a></h6>
                <div class="info-product-price" >
                    <span class="item_price"  ><p size="14px"><?php echo number_format($sp->don_gia);?> VNĐ</p></span>
                </div>
                <input type="hidden" value="<?php echo $sp->don_gia;?>" id="dongia<?php echo $sp->ma_san_pham;?>"/>
                <input type="hidden" value="1" id="soluong<?php echo $sp->ma_san_pham;?>" />
                <a   class="item_add single-item button2 btn" href="javascript:void(0)" id ="<?php echo $sp->ma_san_pham;?>" style="font: -apple-system-short-body; background: #285654">Thêm vào giỏ hàng</a>

            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div class="clearfix"></div>
</div>
    </div>