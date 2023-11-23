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
        <div class="my-3"><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-shield-lock" viewBox="0 0 16 16">
            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"/>
            <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"/>
          </svg></div>
            <!-- <div><button class="btn btn-primary px-4 md-2" type="button" style="width: 100%;"><img src="/public/image/facebook-logo.jpg" style="height: 55px;" alt="">Log in with Facebook</button></div> -->
            <p>Create A Strong Password</p>
            <p style="font-size: 11px; color: #737373; font-weight: bold;">Your password must be at least 6 characters and should include a combination of numbers, letters and special characters (!$@%).</p>
            
            <!-- <hr style="width: 20vw;"> -->
            <form action="<?php echo base_url('user/password/reset/confirm/'.$auth) ?>" method="post" class="">


            <!-- ************************************************************************************** -->
            <div class="field">
                <div class="control">
                    <input type="password" class="input-text form-control" style="width: 100%;" name="spassword" id="spassword" placeholder=" " required>
                    <label style="color: #737373">New password</label>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input type="password" class="input-text form-control" style="width: 100%;" name="cpassword" id="cpassword" placeholder=" " required>
                    <label style="color: #737373">New password, again</label>
                </div>
            </div>
                <button class="btn btn-success my-3" style="width: 100%; " type="submit">change password</button>
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
