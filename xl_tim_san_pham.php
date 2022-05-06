<?php
$gtTim=$_POST["valueSearch"];
include("models/m_san_pham.php");
$m_san_pham=new M_san_pham();
$san_phams=$m_san_pham->Tim_san_pham($gtTim);
?>
<div id="kq1">

</div>
<div class="single-pro">
    <?php
        foreach ($san_phams as $sp)
        {
    ?>
    <div class="col-md-3 product-men">
        <div class="men-pro-item simpleCart_shelfItem">
            <div class="men-thumb-item product_max">
                <img src="public/layout/img/product/<?php echo $sp->hinh ?>" alt=""
                     class="pro-image-front">
                <img src="public/layout/img/product/<?php echo $sp->hinh ?>" alt=""
                     class="pro-image-back">
                <div class="men-cart-pro">
                    <div class="inner-men-cart-pro" >
                        <a href="single.php?ma_san_pham=<?php  echo $sp->ma_san_pham;?>" class="link-product-add-cart" style="background: #285654">Chi tiết sản phẩm</a>
                    </div>
                </div>
                <span class="product-new-top" style="background: pink">New</span>
            </div>
            <div class="item-info-product ">
                <h4><a style= "color: #411911" id="heightMax" href="single.php?ma_san_pham=<?php echo $sp->ma_san_pham; ?>"><?php echo $sp->ten_san_pham;?> </a></h4>
                <div class="info-product-price">
                    <span class="item_price"><?php echo number_format($sp->don_gia);?> VNĐ</span>

                </div>
                <a   style="background: #285654" class="item_add single-item  button2 btn" href="javascript:void(0)" id ="<?php echo $sp->ma_san_pham;?>">Thêm vào giỏ hàng</a>
            </div>
        </div>

    </div>
    <?php
        }
    ?>
</div>