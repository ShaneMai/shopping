<section id="content">
    <div class="main" style="min-height:500px">
        <div class="container" style="width: 500px; background: #285654">
            <hr>
            <h3 align="center" style="color: #e6e6e6">Vui lòng nhập thông tin của bạn</h3>
            <hr>
            <form name="them_khach_hang" action="khach_hang.php?key=dat-hang" method="post">
                <table align="center" width="90%" cellpadding="2px" cellspacing="0" class="table" border="1">

                    <tr>
                        <td align="center" style="color: #e6e6e6; ">
                            Họ và tên
                            <input type="text" value="" name="ten_khach_hang" id="ten_khach_hang"
                                   style="width:450px; text-align:center;color: #0b0b0b"/>
                    </tr>
                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Giới tính<br/>Nam&nbsp;&nbsp;<input name="gioi_tinh"
                                                                                                        type="radio"
                                                                                                        value="1"
                                                                                                        checked="true"/>&nbsp;&nbsp;&nbsp;&nbsp;Nữ&nbsp;&nbsp;<input
                                    name="gioi_tinh" type="radio" value="0"/></td>
                    </tr>
                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Ngày Sinh<br/><input type="text" name="ngay_sinh"
                                                                                         id="ngay_sinh" class="ngay"
                                                                                         style="width:450px; text-align:center;color: #0b0b0b""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Email<br/><input type="text" value="" name="email"
                                                                                     id="email"
                                                                                     style="width:450px; text-align:center;color: #0b0b0b""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Địa chỉ<br/><input type="text" value=""
                                                                                       name="dia_chi" id="dia_chi"
                                                                                       style="width:450px; text-align:center;color: #0b0b0b""/>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Điện thoại<br/><input type="text" name="dien_thoai"
                                                                                          id="dien_thoai"
                                                                                          style="width:450px; text-align:center;color: #0b0b0b""/>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Ghi chú<br/><textarea name="ghi_chu" id="ghi_chu"
                                                                                          cols="55" rows="3"
                                                                                          style="width:450px; text-align:center;color: #0b0b0b""></textarea>
                        </td>
                    </tr>


                    <tr>
                        <td align="center" style="color: #e6e6e6; ">Hình thức thanh toán<br/>
                            <input type="radio" name="httt" value="tiền mặt" checked="true"/> Tiền mặt
                            <input type="radio" name="httt" value="chuyển khoản"/> Chuyển khoản
                            <input type="radio" name="httt" value="tín dụng"/> Tín dụng
                        </td>
                    </tr>

                    <tr>
                        <td align="center"><input type="submit" class="btn btn-primary" value="Đặt hàng" name="submit"
                                                  id="submit"/>
                            <input type="button" class="btn btn-danger"
                                   onclick="window.location.href = 'checkout.php'"
                                   value="Quay về"/>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</section>
<script>
    $(document).ready(function () {
        $("#submit").click(function (e) {
            var patternEmail = /\S+@\S+\.\S+/;
            if ($("#ten_khach_hang").val() == "") {
                swal({
                    title: "Họ tên không được để trống!",
                    icon: "warning",
                });
                $("#ten_khach_hang").css("border", "1px solid red");
                $("#ten_khach_hang").focus();
                return false;
            } else if ($("#ngay_sinh").val() == "") {
                swal({
                    title: "Bạn chưa chọn ngày sinh!",
                    icon: "warning",
                });
                $("#ngay_sinh").css("border", "1px solid red");
                $("#ngay_sinh").focus();
                return false;
            } else if ($("#email").val() == "") {
                swal({
                    title: "Email không được để trống!",
                    icon: "warning",
                });
                $("#email").css("border", "1px solid red");
                $("#email").focus();
                return false;
            } else if (!patternEmail.test($("#email").val())) {
                swal({
                    title: "Email không hợp lệ!",
                    icon: "warning",
                });
                $("#email").css("border", "1px solid red");
                $("#email").focus();
                return false;
            } else if ($("#dia_chi").val() == "") {
                swal({
                    title: "Địa chỉ không được để trống!",
                    icon: "warning",
                });
                $("#dia_chi").css("border", "1px solid red");
                $("#dia_chi").focus();
                return false;
            } else if ($("#dien_thoai").val() == "") {
                swal({
                    title: "Điện thoại không được để trống!",
                    icon: "warning",
                });
                $("#dien_thoai").css("border", "1px solid red");
                $("#dien_thoai").focus();
                return false;
            } else if ($("#ghi_chu").val() == "") {
                swal({
                    title: "Ghi chú không được để trống!",
                    icon: "warning",
                });
                $("#ghi_chu").css("border", "1px solid red");
                $("#ghi_chu").focus();
                return false;
            } else {
                swal({
                    title: "Good job!",
                    text: "Bạn đã đặt hàng thành công!",
                    icon: "success",
                });
                return true;
            }
        });
    });
</script>