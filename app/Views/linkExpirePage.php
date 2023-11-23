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

<div class="container col-md-5 my-5">
    <div class="upContainer text-center px-3">
            <h3 class="my-3">Sorry, this page isn't available.</h3 >
            <p style="font-size: 15px; color: #737373; font-weight: bold;">The link you followed may be broken, or the page may have been removed. <a href="<?php echo base_url('user/login'); ?>"  style="text-decoration: none;">Go back to Instagram.</a></p>

                
    </div>

</div>

<!-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
    
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> -->

<!-- <?= $this->endSection() ?> -->