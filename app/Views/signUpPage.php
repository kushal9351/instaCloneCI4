<?= $this->extend('home.php') ?>

<?= $this->section('content') ?>

<div class="container col-md-2 my-5">
    <div class="upContainer text-center px-3" style="border:1px solid rgb(219, 219, 219)">
        <h1 class="my-3">Instagram</h1>
        <p class="my-4">Sign up to see photos and videos from your friends.</p>
        <?php if (isset(($fb_login_url))) { ?>
            <!-- <div><button class="btn btn-primary px-4 md-2" type="button" style="width: 100%;"><img src="/public/image/facebook-logo.jpg" style="height: 55px;" alt="">Log in with Facebook</button></div> -->
            <a class="btn btn-primary px-4 md-2" type="button" style="width: 100%;" href="<?= $fb_login_url; ?>">Login with Facebook</a>
        <?php } ?>
        <!-- <hr style="width: 20vw;"> -->
        <div class="my-3">---------- OR ----------</div>
        <!-- <hr style="width: 20vw;"> -->
        <form action="create" method="post" onsubmit="return validation(event)">


            <!-- ************************************************************************************** -->
            <?php if (isset($validation)) {
                echo '<br>' . $validation->listErrors();
            } ?>
            <div class="field">
                <div class="control">
                    <input type="text" style="width: 100%;" class="input-text form-control" name="mobileNumberEmailAddress" id="mobileNumberEmailAddress" placeholder=" ">
                    <label style="color: #737373">Mobile number or email address</label>
                    <?php

                    if (isset($validation)) {
                        $row = $validation->listErrors();
                        // echo $row;
                        // if(isset($row)){
                        // echo '<div class="valid-feedback">'.$row.'</div>';
                        // }
                    }

                    // $row = $validation->listErrors('fullName');
                    // echo $row;
                    // if(isset($row)){
                    //     echo '<div class="valid-feedback">'.$row.'</div>';
                    // }
                    ?>
                </div>

            </div>

            <div class="field">
                <div class="control">
                    <input type="text" class="input-text form-control" name="fullName" id="fullName" placeholder=" " style="width: 100%;">
                    <label style="color: #737373">Full Name</label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input type="text" class="input-text form-control" name="userName" id="userName" placeholder=" " style="width: 100%;">
                    <label style="color: #737373">Username</label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input type="password" class="input-text form-control masked" name="password" id="password" placeholder=" " style="width: 100%;">
                    <label style="color: #737373">Password</label>
                    <button class="btn" style="
    position: absolute;
    right: 18px;
    top: 0px;" type="button" id="eye">
                        <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
                    </button>
                </div>
            </div>


            <div style="font-size: 10.8px" class="my-2">
                People who use our service may have uploaded your contact information to Instagram. <a href="https://www.facebook.com/help/instagram/261704639352628" target="_blank">learn more</a>
            </div>

            <div style="font-size: 10.8px">
                By signing up, you agree to our
                <a href="https://help.instagram.com/581066165581870/?locale=en_GB">Terms,</a>
                <a href="https://www.facebook.com/privacy/policy"> Privacy Policy</a>
                and
                <a href="https://help.instagram.com/1896641480634370/">Cookies Policy.</a>

            </div>

            <button class="btn btn-primary my-3 md-5" style="width: 100%;" type="submit">Sign Up</button>
        </form>
        <!-- <div class="phoneNOEmailField">
                <input type="text">
            </div> -->
    </div>
    <div class="downContainer text-center my-3 p-3" style="border:1px solid rgb(219, 219, 219)">
        Have an account? <a href="<?= base_url('user/login') ?>" style="color: 0095f6; text-decoration: none">Log in</a>
    </div>

    <div class="text-center my-3">
        Get the app.
    </div>
    <div class="text-center my-3">
        <span><a href="https://apps.apple.com/us/app/instagram/id389801252?vt=lo" target="_blank"><img alt="Download from the App Store" class="" src="https://static.cdninstagram.com/rsrc.php/v3/yt/r/Yfc020c87j0.png" style="width: 135px;;"></a></span>
        <span><a href="https://play.google.com/store/apps/details?id=com.instagram.android&referrer=ig_mid%3DEC75302D-1D5D-4FD9-A0BD-AA77E165BBE5%26utm_campaign%3DloginPage%26utm_content%3Dlo%26utm_source%3Dinstagramweb%26utm_medium%3Dbadge&pli=1" target="_blank"><img alt="Download from the App Store" class="" src="https://static.cdninstagram.com/rsrc.php/v3/yz/r/c5Rp7Ym-Klz.png" style="width: 135px;;"></a></span>
    </div>
</div>

<div style="width: 60vw; margin: auto; font-size: 12px" class="text-center my-5">
    <span class="mx-3">Meta</span>
    <span class="mx-3">About</span>
    <span class="mx-3">Blog</span>
    <span class="mx-3">Jobs</span>
    <span class="mx-3">Help</span>
    <span class="mx-3">API</span>
    <span class="mx-3">Privacy</span>
    <span class="mx-3">Terms</span>
    <span class="mx-3">Locations</span>
    <span class="mx-3">Instagram Lite</span>
    <span class="mx-3">Threads</span>
    <span class="mx-3">Contact uploading and non-users</span>
    <span class="mx-3">Meta Verified</span>
    <span class="mx-3">English (UK)</span>
    <span class="mx-3">&copy; 2023 Instagram from Meta</span>
</div>

<?php if (!isset(($fb_login_url))) {
    if (session()->has('userdata')) {
        $uinfo = session()->get('userdata');
?>

        <img src="<?= $uinfo['profile_pic']; ?>" height='100' width='100'>
        <p>Id: <?= $uinfo['userid']; ?></p>
        <p>Welcome <?= $uinfo['user_name']; ?></p>
        <a href="<?= base_url(''); ?>/login/logout">Logout</a>
    <?php
    }
    ?>
<?php } ?>

<?= $this->endSection() ?>



<!-- https://static.designboom.com/wp-content/uploads/2023/09/facebook-new-logo-change-designboom-02.jpg -->
<!-- disabled="" -->