<!-- contact -->

<div class="contact">
    <div class="container" >
        <div class="contact-info">
        <div class="row">
            <h2 align="center">Liên hệ với chúng tôi</h2>
            <div class="col-md-3">
                <div class="single-contact-info">
                    <a href="#"> <img src="public/layout/img/bg-element/con-icon1.png" alt=""></a>
                    <h4>Phone</h4>
                    <p>(00) 123 456 999 </p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-contact-info">
                    <a href="#"> <img src="public/layout/img/bg-element/con-icon2.png" alt=""></a>
                    <h4>Email</h4>
                    <p><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__"
                          data-cfemail="3f565159507f46504a4d525e5653115c5052">[xuanhoansth@gmail.com&#160;]</a></p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-contact-info">
                    <a href="#"> <img src="public/layout/img/bg-element/con-icon3.png" alt=""></a>
                    <h4>Web</h4>
                    <p>https://boomrom.com</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="single-contact-info">
                    <a href="#"> <img src="public/layout/img/bg-element/con-icon4.png" alt=""></a>
                    <h4>Address</h4>
                    <p>Hà Nội </p>
                </div>
            </div>
        </div>
        </div>
        <div class="map wow fadeInDown animated" data-wow-delay=".5s">
            <h3 class="tittle" style="color: #3C2856">Xem bản đồ</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9300677842107!2d105.81635031473154!3d21.03548398599465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab0d6c788695%3A0x2b2482c266d15157!2zMjU1IMSQ4buZaSBD4bqlbiwgTGnhu4V1IEdpYWksIEJhIMSQw6xuaCwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1651658375366!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <h3 class="tittle" style="color: #3C2856">Contact Form</h3>
        <form action="#" method="post" id="contactForm">
            <div class="contact-form2">
                <input type="text" name="name" id="name" placeholder="Nhập họ tên của bạn">
                <input type="email" name="email" id="email" placeholder="Nhập email của bạn">
                <textarea type="text" name="content" id="content" placeholder="Nhập nội dung" " ></textarea>
                <input type="submit" name="submit" value="Gửi thông tin" id="submit" class="btn" style="background: #285654">
            </div>
        </form>
    </div>
</div>
<script>
    $(document).ready(function () {
        $("#submit").click(function (e) {
            var patternEmail = /\S+@\S+\.\S+/;
            if ($("#name").val() == "") {
                swal({
                    title: "Nội dung không được để trống!",
                    icon: "warning",
                });
                $("#name").css("border", "1px solid red");
                $("#name").focus();
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
            } else if ($("#content").val() == "") {
                        swal({
                            title: "Nội dung không được để trống!",
                            icon: "warning",
                        });
                $("#content").css("border", "1px solid red");
                $("#content").focus();
                return false;
            } else {
                swal({
                    title: "Cảm ơn Quý khách đã gửi liên hệ!",
                    icon: "success",
                });
                return true;
            }
        });
    });
</script>