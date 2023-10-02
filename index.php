<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
</head>

<body onload="updateTime()">
    <div class="sum">
        <div class="wraper">
            <?php 
            require "header.php";
            require "navbar.php";
            ?>
            <?php
                $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
                $router = [
                    '/' => 'home.php',
                    '/product' => 'iphone.php',
                    '/quantri' => 'admin/admin.php',
                ];
                // echo $uri;
                // var_dump(stripos($uri, '/quantri') == 0);
                
                if (array_key_exists($uri, $router)) {
                    
                    require $router[$uri];
                }else {
                    echo 'page not found';
                    die();
                }
                ?>
                <?php
                require "footer.php";
                ?>
        </div>
                <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>
</body>
<script src="main.js"></script>
</html>