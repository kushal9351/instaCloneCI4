<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>dashboard</title>
    <!-- <style>
        body {
        font-family: "Lato", sans-serif;
        }

        .sidenav {
        height: 100%;
        width: 200px;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        padding-top: 20px;
        }

        .sidenav a {
        padding: 6px 6px 6px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        display: block;
        }

        .sidenav a:hover {
        color: #f1f1f1;
        }

        .main {
        margin-left: 200px; /* Same as the width of the sidenav */
        }

        @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
        }
    </style> -->
    <style>
        body {
            background-color: #fbfbfb;
        }

        @media (min-width: 991.98px) {
            main {
                padding-left: 240px;
            }
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            padding: 58px 0 0;
            /* Height of navbar */
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
            width: 240px;
            z-index: 600;
        }

        @media (max-width: 991.98px) {
            .sidebar {
                width: 100%;
            }
        }

        .sidebar .active {
            border-radius: 5px;
            box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
        }

        .sidebar-sticky {
            position: relative;
            top: 0;
            height: calc(100vh - 48px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
            /* Scrollable contents if viewport is shorter than content. */
        }
    </style>
</head>

<body>
    <!-- <h1>dashboard</h1> -->
    <?php //session()->destroy(); 
    ?>


    <!-- <div class="sidenav">
  <a href="#">About</a>
  <a href="#">Services</a>
  <a href="#">Clients</a>
  <a href="#">Contact</a>
</div>

<div class="main">
  <h2>Sidenav Example</h2>
  <p>This sidenav is always shown.</p>
</div> -->


<?= $this->include('navbar.php') ?>
    

    <!--Main layout-->
    <main style="margin-top: 58px">
        <div class="container pt-4">

            <?php
            if (session()->has('error_controller')) {
                // echo "<div style='color: red; font-size: 14px;'>" . session()->getFlashdata('error_controller') . "</div>";
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>success : </strong>' . session()->getFlashdata("error_controller")
                    . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
            }
            if (session()->has('error_msg')) {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>error : </strong>' . session()->getFlashdata("error_msg")
                    . '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
            }
            ?>



            <?= $this->include('mainPage.php') ?>





        </div>
        <div>
            <?= $this->include('ProfileEdit.php') ?>
        </div>
        <div>
            <?= $this->include('photo_post_modal.php') ?>
        </div>
        

        <?= $this->include('modals/showAllMessageUsers.php') ?>
            
    </main>
    <!--Main layout-->









    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="<?php echo base_url('/js/dashboard.js'); ?>"></script>
  
</body>

</html>