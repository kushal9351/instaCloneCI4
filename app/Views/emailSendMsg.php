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
    <div class="upContainer text-center px-3" style="border:1px solid rgb(219, 219, 219); ">
            <!-- <div><button class="btn btn-primary px-4 md-2" type="button" style="width: 100%;"><img src="/public/image/facebook-logo.jpg" style="height: 55px;" alt="">Log in with Facebook</button></div> -->
            <p class="my-3">Email sent</p>
            <p style="font-size: 15px; color: #737373; font-weight: bold;">We sent an email to <span style="color: black;"><?php echo $email; ?></span> with a link to get back into your account.</p>


            <div class="my-4">
                <a href="<?php echo base_url('user/password/reset'); ?>"  style="color: 0095f6;; text-decoration: none; font-size: 17px; font-weight: bold;">ok</a>
            </div>
                
    </div>

<?= $this->endSection() ?>
