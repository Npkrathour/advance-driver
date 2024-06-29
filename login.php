<?php include 'header.php';?>
<!-- ================== -->
<div class="padding_top">
</div>
<!-- =================Login sectoin============== -->
<section class="login_section overflow-hidden">
    <div class="container-fluid p-lg-0 m-lg-0">
        <div class="row justify-content-center align-items-center mt-2">
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <div class="account_container">
                    <div class="account-icon text-center">
                        <img src="assets/images/logo 1.png" alt="">
                    </div>
                    <h1 class="mobile-size text-center py-xl-3 py-lg-0">Sign Into Your Account</h1>
                    <div class="form_section">
                        <form action="" method="get" class="">
                            <div class="mb-4">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="text" name="" id="email" class="form-control" placeholder="Enter email to get started" />
                            </div>
                            <div class="mb-4 position-relative positioning">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label for="loginPassword" class="form-label">Password</label>
                                    <a href="register.php" class="forget_password">Forgot Password?</a>
                                </div>
                                <input type="password" name="password" id="loginPassword" class="form-control" placeholder="Enter your password" />
                                <span class="iconify" id="passwordIcon" data-icon="ph:eye-slash-bold" onclick="togglePasswordVisibility('loginPassword', 'passwordIcon');"></span>
                            </div>

                            <div class="submit_btn mb-4">
                                <button type="">Sign In</button>
                            </div>
                            <div class="left_right text-center position-relative">
                                <p>OR</p>
                            </div>
                            <div class="create_account text-center">
                                <p>Don’t have an account? <a href="register.php" class="new_account text-decoration-none">Create
                                        a free account</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3 p-lg-0 m-lg-0">
                <div class="login_img">
                    <img src="assets/images/contact/Frame 70.png" alt="" class="w-100 img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ============footer section============= -->
<?php include 'footer.php';?>