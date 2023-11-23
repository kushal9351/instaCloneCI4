<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
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
        .errors ul li{
            color: red;
            list-style: none;
            text-align: center;
            font-size: 14px;
        }

        .errors ul{
            text-align: center;
        }
    </style>
</head>

<body>
    <?php //$this->include('navbar.php'); 
    ?>
    <?= $this->renderSection('content'); ?>
        

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/action.js"></script>
</body>

</html>