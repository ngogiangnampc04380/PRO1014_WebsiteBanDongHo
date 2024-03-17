<?php include "../components/header.php"; ?>

<main>
    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Register</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End-->
    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>Bạn đã có tài khoản ?</h2>
                            <a href="#" class="btn_3">Đăng Nhập</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Đăng ký tài khoản mới</h3>
                            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Họ và tên">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Email">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Số điện thoại">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="name" name="name" value="" placeholder="Địa chỉ">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Reset Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <button type="submit" value="submit" class="btn_3">
                                        Đăng ký
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->
</main>

<?php include "../components/footer.php"; ?>