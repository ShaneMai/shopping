<!-- footer -->
<?php
@session_start();
?>
<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="fta-1">
                    <div class="f-logo">
                        <a href="#"> <img src="public/layout/img/Logo2.png" alt=""></a>
                    </div>
                    <p>Luôn đồng hành cùng vẻ đẹp của bạn </p>
                    <div class="payment-method">
                        <p>Hỗ trợ các hình thức thanh toán</p>
                        <ul>
                            <li><img src="public/layout/img/bg-element/Card5.png" alt=""></li>
                            <li><img src="public/layout/img/bg-element/Card3.png" alt=""></li>
                            <li><img src="public/layout/img/bg-element/Card2.png" alt=""></li>
                            <li><img src="public/layout/img/bg-element/Card4.png" alt=""></li>
                            <li><img src="public/layout/img/bg-element/Card1.png" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="fta-2">
                    <h6>Thông tin</h6>
                    <ul>
                        <li><a href="about-us.html">Về chúng tôi</a></li>
                        <li><a href="checkout.html">Thanh toán</a></li>
                        <li><a href="404.html">Theo dõi đơn hàng</a></li>
                        <li><a href="404.html">Chính sách bảo mật</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3">
                <div class="fta-2">
                    <h6>Liên hệ với chúng tôi</h6>
                    <ul>
                        <li>(00) 123 456 789</li>
                        <li><a href="https://demo.voidcoders.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7811161e173801170d0a15191114561b1715">xuanhoansth@gmail.com</a></li>
                        <li>www.boomrom.com</li>
                        <li>255 Sheet, Ba Dinh, Viet Nam</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="subscrive">
                    <h6>Nhập email của bạn để nhận thông tin về các chương trình khuyến mãi</h6>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="enter your email address">
                        <span class="input-group-text" id="basic-addon2"><i class="flaticon-right-arrow"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p>Copyright © 2021 Boomrom ! All Rights Reserved By Shane
            </p>
        </footer>
    </div>
</div>
<!-- //footer -->
<!-- login -->
<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-info">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body modal-spa">
                <div class="login-grids">
                    <div class="login">
                        <div class="login-bottom">
                            <h3 style="color: #285654">Đăng ký miễn phí</h3>
                            <form>
                                <div class="sign-up">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-up">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <h4>Re-type Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">

                                </div>
                                <div class="sign-up">
                                    <input type="submit" value="Đăng ký ngay" class="btn" style="background: #285654">
                                </div>

                            </form>
                        </div>
                        <div class="login-right">
                            <h3 style="color: #285654">Đăng nhập</h3>
                            <form>
                                <div class="sign-in">
                                    <h4>Email :</h4>
                                    <input type="text" value="Type here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">
                                </div>
                                <div class="sign-in">
                                    <h4>Password :</h4>
                                    <input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="single-bottom">
                                    <input type="checkbox"  id="brand" value="">
                                    <label for="brand"><span></span>Remember Me.</label>
                                </div>
                                <div class="sign-in"  >
                                    <input type="submit" value="Đăng nhập" class="btn"style="background: #285654" >
                                </div>
                            </form>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <p>Bằng cách đăng nhập, bạn đồng ý với các Điều khoản và Chính sách Bảo mật của chúng tôi</p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- //login -->
<!--<script src="public/layout/js/jquery.validate.min.js"></script>-->
</body>
</html>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.4";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
    window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
        d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
    _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
        $.src="https://v2.zopim.com/?54eoTrpeGhYt4Ss0SUHYeSzV2TSBpo6G";z.t=+new Date;$.
            type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->