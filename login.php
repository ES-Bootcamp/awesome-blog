<?php
 session_start();
 if(isset($_SESSION['login'])){
    header('Location: http://'.$_SERVER['HTTP_HOST'].'/blog');
    exit();
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/materialize/css/materialize.min.css">
    <link rel="stylesheet" href="asset/css/ico.min.css">
    <link rel="stylesheet" href="asset/css/login.css">
    <title>no</title>
</head>
<body>
    <div class="container main">
    
        <div class="row z-depth-1 lgn-cnt">
            <div class="col s6 form-side">
                <?php if(isset($_SESSION['register'])&& $_SESSION['register']){?>
                    <div style="color:green;text-align:center;">register successfully you can login now</div>
                    <?php }?>
            <?php if(isset($_SESSION['error'])&&$_SESSION['error']){?>
                <small style="color:red;text-align:center;">error please retry</small>
                <?php  }  ?>
                <div class="row col s12 lgn-tlt">LOGIN</div>
                <form action="asset/php/private/verify.php" method="post">
                    <div class="input-field col s12">
                        <input id="email" type="text" class="validate clr-inp" name="user_l_name">
                        <label for="email">Last Name</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field col s12 dv-btn">
                        <input type="submit" class=" waves-light btn-large btn clr-btn" value="send">
                    </div>
                    <div class="row col s12 fgt-pss">
                        <a href="#">forgot your password</a>
                    </div>
                </form>
            </div>
            <div class="col s6 img-side">
                <h3>Welcome to Login</h3>
                <h5>don't have an account?</h5>
                <a href="register.php" class=" waves-light btn-large clr-btn">register</a>
            </div>
        </div>
    </div>
    <?php unset($_SESSION['error']);unset($_SESSION['register']);$_SESSION['error']=false;$_SESSION['register']=false;?>
    <script src="asset/materialize/js/materialize.min.js"></script>
</body>
</html>