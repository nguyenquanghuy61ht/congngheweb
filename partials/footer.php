<?php
if (!isset($_SESSION['login_ok'])) {
    header("Location:http://localhost:7855/BTL/login.php");
}
?>
<footer class="new_footer_area bg_color" style="margin-top: 5%;">
    <div class="new_footer_top border-top border-success"">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Liên Hệ</h3>
                        <p>Điền email phía dưới để nhận thông báo khi có môn học mới !</p>
                        <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Đăng ký</button>
                            
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Tải Xuống</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="#">Máy Tính</a></li>
                            <li><a href="#">Dự án</a></li>
                            <li><a href="#">Nhiệm Vụ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Trợ Giúp</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="question.php">Các câu hỏi thường gặp</a></li>
                            <li><a href="personal_opinion.php">Y Kiến Cá Nhân </a></li>
                            <li><a href="#">Quyền Cá Nhân </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Giải Pháp Nhóm</h3>
                        <div class="f_social_icon">
                            <a href="https://www.facebook.com/huy.huyt.7" class="fab fa-facebook"></a>
                            <a href="https://www.facebook.com/daoquyenminh" class="fab fa-twitter"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-7">
                    <p class="mb-0 f_400">©2021 Tất cả quyền được bảo lưu</p>
                </div>

            </div>
        </div>
    </div>
</footer>
<style>
    a{
    
    text-decoration: none;
    }

</style>