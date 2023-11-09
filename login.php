<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mn.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #F9AD6B;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
        <img src="img/logo.png" width="35" height="35"> <br> Login Cari Tukang
        </div>

        <form action="cek_login.php" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" placeholder="Username" name="username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" placeholder="Password" name="password" type="password" required class="validate" autocomplete="off">
            </div>
                <br><br>
            <input type="submit" value="LOGIN" />
        </form>

        <div class="forgot-password">
        </div>
        <div class="privacy">
        </div>

        <div class="register">
            <span style="color: #657575">Don't have an account yet?</span>
            <a href="register.php"><button id="register-link">Register here</button></a>
        </div>
    </div>
</body>

</html>