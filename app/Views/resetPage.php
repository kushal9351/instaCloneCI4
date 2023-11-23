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

<div id="div" style="width: 100vw; height: 58px; border-bottom: 2px solid rgb(219, 219, 219); display: flex; align-items: center;">
<!-- <h3 >Instagram</h3> -->
<a href="<?php echo base_url('user/login') ?>" style="margin-left: 25vw; text-decoration: none; font-size: xx-large; color: black;">Instagram</a>
</div>

<div class="container col-md-2 my-5">
    <div class="upContainer text-center px-3" style="border:1px solid rgb(219, 219, 219)">
        <div class="my-3"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"/>
</svg></div>
            <!-- <div><button class="btn btn-primary px-4 md-2" type="button" style="width: 100%;"><img src="/public/image/facebook-logo.jpg" style="height: 55px;" alt="">Log in with Facebook</button></div> -->
            <p>Trouble logging in?</p>
            <p style="font-size: 11px; color: #737373; font-weight: bold;">Enter your email, phone, or username and we'll send you a link to get back into your account.</p>
            
            <!-- <hr style="width: 20vw;"> -->
            <form action="<?php echo base_url('user/email') ?>" method="post" class="">


            <!-- ************************************************************************************** -->
                <div class="field">
                    <div class="control">
                        <input type="text" class="input-text form-control" style="width: 100%;" name="mobileNumberEmailAddress" placeholder=" ">
                        <label style="color: #737373">email address</label>
                    </div>
                </div>

                    <button class="btn btn-primary my-3" style="width: 100%; " type="submit">send Login link</button>
            </form>


                <div class="mx-2">---------- OR ----------</div>
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


            <!-- <a href="" class="my-4" style="color: #385185; text-decoration: none; font-size: 12px; font-weight: bold;">Forgot password?</a> -->
            <div class="my-4">
                <a href="<?php echo base_url('user/signup') ?>" class="my-2" style="color: black; text-decoration: none; font-size: 14px;">Create new account</a>
            </div>
                
    </div>
    <div class="downContainer text-center p-3 " style="border:1px solid rgb(219, 219, 219)">
        <a href="<?php echo base_url('user/login') ?>" style="color: black; text-decoration: none; font-size: 14px;">Back to login</a>
    </div>

<!-- <div style="width: 60vw; margin: auto; font-size: 12px" class="text-center my-5">
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
</div> -->

<?= $this->endSection() ?>
