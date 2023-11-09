<html>

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <meta name="description" content="Login - Register Template">
    <meta name="author" content="Lorenzo Angelino aka MrLolok">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            background-color: #F9AD6B   ;
        }
    </style>
</head>

<body>
    <div id="container-register">
        <div id="title">
        Register
        </div>

        <form action="add_gfsdreg.php" method="post">
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">email</i>
                </div>
                <input id="email" placeholder="Email" type="email" name="email" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>
        
            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">face</i>
                </div>
                <input id="username" name="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                    <i class="material-icons">vpn_key</i>
                </div>
                <input id="password" name="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div> 
            
            <div class="input">                
            <select class="form-select" aria-label="Default select example" name="status">
                <option selected>Open this select menu</option>
                <option>Customer</option>
                <option>Tukang</option>
            </select>
            </div>
            <br>            

            <input type="submit" name="add" value="Register" />
        </form>
            <?php 
                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $status = $_POST['status'];

                    include_once("kon.php");

                    $result = mysqli_query($mysqli, "INSERT INTO tb_admin (username,password,email,status) VALUES('$username','$email','$email','$status')");
	
                }
            ?>
        <div class="register">
            <span style="color: #657575">Do you already have an account?</span>
            <a href="login.php"><button id="register-link">Log In here</button></a><br><br>
        </div>
    </div>
</body>

</html>
