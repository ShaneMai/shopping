<div class="checkout" id="th_giohang">
    <div class="container">
        <?php if(isset($ds_san_pham)) {  ?>
        <form action="checkout.php" method="post">
            <div class="inner-hero-content" style="position: relative;
    text-align: center;
    padding: 10px 0;">
                <h2 style="position: relative;
    color: #3C2856;
    padding: 10px 0;">Giỏ hàng của tôi</h2>
            </div>
        <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
            <table class="table table-bordered ">
                <thead style="background: #285654;" >
                <tr align="center" >
                    <th style="color: #e6e6e6; " size="20px">Xóa</th>
                    <th style="color: #e6e6e6">Sản phẩm</th>
                    <th style="color: #e6e6e6">Số lượng</th>
                    <th style="color: #e6e6e6">Tên sản phẩm</th>
                    <th style="color: #e6e6e6">Giá tiền</th>
                </tr>
                </thead>


                <?php
                foreach ($ds_san_pham as $item) { ?>
                    <tr class="rem1" align="center" >
                        <td class="invert-closeb" >
                         <!--   <div class="rem">
                                <div class="close1"></div>
                            </div>
                            <script>$(document).ready(function (c) {
                                    $('.close1').on('click', function (c) {
                                        $('.rem1').fadeOut('slow', function (c) {
                                            $('.rem1').remove();
                                        });
                                    });
                                });
                            </script>-->


                            <input type="checkbox" name="<?php echo $item->ma_san_pham; ?>" value="<?php echo $item->don_gia;?>"/>

                        </td>
                        <td id="imgCheckout" class="invert-image" style="height: 5px"><a href="single.php?ma_san_pham=<?php echo $item->ma_san_pham?>"><img
                                        src="public/layout/img/product/<?php echo $item->hinh; ?>"
                                        alt=" " class="img-responsive"/></a>
                        </td>
                        <td class="invert">
                            <div class="quantity">
                                <div>

                                    <input type="text" value="<?php echo $item->so_luong; ?>"
                                           name="soluong<?php echo $item->ma_san_pham; ?>"
                                           style="width:70px; text-align:center"/>
                                    <input type="hidden" value="<?php echo $item->don_gia;?>" name="dongia<?php echo $item->ma_san_pham;?>"/>

                                </div>
                            </div>
                        </td>
                        <td class="invert" ><?php echo $item->ten_san_pham; ?></td>
                        <td class="invert"><?php echo number_format($item->don_gia); ?> VNĐ</td>
                    </tr>

                <?php }

                ?>

                <!--quantity-->
                <script>
                    $('.value-plus').on('click', function () {
                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) + 1;
                        divUpd.text(newVal);
                    });

                    $('.value-minus').on('click', function () {
                        var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10) - 1;
                        if (newVal >= 1) divUpd.text(newVal);
                    });
                </script>
                <!--quantity-->
            </table>
            <br>

        </div>
        <div class="checkout-left">

            <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s" >
                <a href="product.php"style="background: #285654"><span class="glyphicon glyphicon-menu-left" aria-hidden="true" ></span>Quay lại mua sắm</a>
            </div>
            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                <h4 style="background: #285654">Danh sách giỏ hàng</h4>

                <ul>
                    <?php $tien_mon_an = 0; ?>
                    <?php foreach ($ds_san_pham as $item) {
                        ?>
                        <li><?php echo $item->ten_san_pham; ?><i>-</i>
                            <span><?php echo number_format($item->don_gia * $item->so_luong); ?> VNĐ</span></li>
                        <?php
                        $tien_mon_an += $item->don_gia * $item->so_luong;
                    }

                    ?>

                    <b><li>Tổng tiền:  <span><?php
                            echo  number_format($tien_mon_an) ." VNĐ";
                                ?></span></li></b>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        </div>
        </form>
        <?php
        }
        else
        {

            echo  '<h3 align="center">','Bạn chưa chọn sản phẩm nào chọn giỏ','</h3>';

        }

        ?>

    <div align="center">

        <input size="20" type="submit" name="btnCapnhat" value="Cập nhật" class="btn-primary" />
        <input type="button" class=" btn-success"
               onclick="window.location.href = 'khach_hang.php?key=dat-hang'"
               value="Đặt hàng" />

        <input type="button" class="btn-danger" id="btnxoa"
               value="Xóa giỏ hàng" class="art-button" />
    </div>
    </div>
</div>
<!-- //check out -->

