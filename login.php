<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form_admin {
            display: flex;
            justify-content: center;
            border: 1px solid black;
            padding: 30px;
            background: #333;
        }

        .container_login {
            width: 360px;
            padding: 32px 24px;
        }

        .img_login_page {
            display: flex;
            justify-content: center;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            color: white;
        }

        .input-name {
            display: flex;
            flex-direction: column;
        }

        form input {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        form button[type="submit"] {
            width: 50%;
            padding: 10px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 100px;
            margin-top: 20px;
        }

        .font {
            width: 360px;
            color: white;
            margin-left: 150px;
            cursor: pointer;
        }

        /* .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        } */
    </style>
</head>

<body> 
    <!-- <?php
            // session_start();
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $user = $_POST["username"];
                $pas = $_POST["password"];
                if ($user == "admin" && $pas == "123456") {
                    // $_SESSION['ten'] = $user;
                    header("Location: /quantri?act=addm");
                }
            }
            ?> -->
    <div class="form_admin">
        <form class="container_login" action="" method="post">
            <div class="img_login_page">
                <a href="/"><img src="img/logo.webp" alt=""></a>
            </div>
            <span class="font">ADMIN</span>
            <div class="input-name">
                <label for="username">Username:</label>
                <input class="space" type="text" name="username" required>
            </div>

            <div class="input-name">
                <label for="password">Password:</label>
                <input type="password" name="password" required>
            </div>
            <br>
            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>