<?= $this->extend('home.php') ?>

<?= $this->section('content') ?>

<!-- <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
        .field {
            position: relative;
            margin-top: 20px;
        }

        input:focus~label,
        input:not(:placeholder-shown)~label {
            top: -13px;
            font-size: 12px;
            background-color: white;
        }

        label {
            position: absolute;
            pointer-events: none;
            left: 10px;
            top: 2px;
            transition: 0.2s ease all;
            font-size: 15px;
        }
        body{
            font-weight: bold;
        }
    </style>
</head> -->

<div class="container col-md-2 my-5">
    <div class="upContainer text-center px-3 " style="border:1px solid rgb(219, 219, 219)">
        <h1 class="my-5; font-family: 'Pacifico', cursive;" style="margin-top: revert;">Instagram</h1>
            <!-- <div><button class="btn btn-primary px-4 md-2" type="button" style="width: 100%;"><img src="/public/image/facebook-logo.jpg" style="height: 55px;" alt="">Log in with Facebook</button></div> -->
            
            <!-- <hr style="width: 20vw;"> -->
            <form action="searchAndLogin" method="post" class="mt-5">


            <!-- ************************************************************************************** -->
                <div class="field">
                    <div class="control">
                        <input type="text" class="input-text form-control" style="width: 100%;" name="mobileNumberEmailAddress" placeholder=" " required>
                        <label style="color: #737373" >Mobile number or email address</label>
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input type="password" class="input-text form-control" style="width: 100%;" name="password" id="password" placeholder=" " required>
                        <label style="color: #737373">Password</label>
                        <button class="btn" style="
    position: absolute;
    right: 0px;
    top: 0px;" type="button" id="eye">
                        <img src="https://cdn0.iconfinder.com/data/icons/feather/96/eye-16.png" alt="eye" />
                    </button>
                    </div>
                </div>
                <button class="btn btn-primary my-3" style="width: 100%; " type="submit">Log in</button>
            </form>


                <div class="md-2">---------- OR ----------</div>
                <?php
                    if($fb_login_url){

                        echo '<a class=" px-4 my-2" type="button" style="width: 100%; font-weight: bold; text-decoration: none; color: #385185;" href="'.$fb_login_url.'"><img src="https://cdn-icons-png.flaticon.com/512/124/124010.png" alt="" style="height:15px; margin-bottom: 3px; margin-right: 9px;">Login with Facebook</a>';
                    }
                ?>
            <!-- <hr style="width: 20vw;"> -->

            <?php 
                // if (isset($validation)) {
                //     $row = $validation->listErrors();
                // }
                // if(isset($isValid)){ echo $isValid; } 
                

            if(session()->has('error_controller')){
                echo "<div style='color: red; font-size: 14px;'>" . session()->getFlashdata('error_controller') . "</div>";
            }
                
                ?>
                
            <!-- ?> -->


            <div class="my-3">
                <a href="<?php echo base_url('user/password/reset') ?>"  style="color: #385185; text-decoration: none; font-size: 12px; font-weight: bold;">Forgot password?</a>
            </div>
                
            <!-- <div class="phoneNOEmailField">
                <input type="text">
            </div> -->
    </div>
    <div class="downContainer text-center my-3 p-3 " style="border:1px solid rgb(219, 219, 219)">
        Don't have an account? <a href="<?= base_url('user/signup') ?>" style="color: 0095f6; text-decoration: none">Sign up</a>
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

<?php if (!isset(($fb_login_url))){
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
