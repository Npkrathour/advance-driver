<?php include 'header.php';?>
<div class="padding_top">
</div>
<!-- ================= -->
<section class="logout_sectoin overflow-hidden">
    <div class="container-fluid p-lg-0 m-lg-0">
        <div class="row align-items-center mt-2">
            <div class="col-lg-6 col-md-6 col-12 p-lg-0 m-lg-0">
                <div class="logout_image">
                    <img src="assets/images/contact/Frame 69.png" alt="" class="w-100 img-fluid">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12 my-3">
                <div class="logout_container">
                    <div class="logout_logo text-center">
                        <img src="assets/images/logo 1.png" alt="">
                    </div>
                    <h1 class="mobile_size_log text-center py-xl-3 py-lg-0 py-0">Create Free Account</h1>
                    <form action="" method="get" class="logout_form">
                        <div class="mb-3">
                            <label for="" class="form-label">Email Address</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Enter email to get started" />
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Mobile Number</label>
                            <input type="text" name="" id="" class="form-control" placeholder="Enter your mobile number" />
                        </div>
                        <div class="mb-3 position-relative logout_position">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password" />
                            <span class="iconify" id="passwordIcon" data-icon="ph:eye-slash-bold" onclick="togglePasswordVisibility('password', 'passwordIcon');"></span>
                        </div>
                        <div class="mb-3 position-relative logout_position">
                            <label for="confirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" name="confirmPassword" id="confirmPassword" class="form-control" placeholder="Re-enter your password" />
                            <span class="iconify" id="confirmPasswordIcon" data-icon="ph:eye-slash-bold" onclick="togglePasswordVisibility('confirmPassword', 'confirmPasswordIcon');"></span>
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn">Sign Up</button>
                        </div>
                        <div class="mb-3 pt-lg-1 pt-2">
                            <div class="left_right text-center position-relative">
                                <p>OR</p>
                            </div>
                        </div>
                        <div class="create_account text-center">
                            <p>Already have an account? <a href="login.php" class="new_account text-decoration-none">Sign In</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- ============footer section============= -->
<?php include 'footer.php';?>