<?php
 require_once 'includes/config_session.inc.php';
 require_once 'includes/signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="img/icons8-shark-64.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devkiarie</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.cdnfonts.com/css/poppins" rel="stylesheet">
</head>
<body>
    <div id="preloader"></div>
    <header>
        <div class="navigation">
            <input type="checkbox" id="check">
            <label for="check" class="check_btn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DEVKIARIE</label>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">contact</a></li>
                <li><button class="btnlogin-popup">login</button></li>
            </ul>
        </div>
    </header>
        <div class="cover_box">
            <span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>

            <!---Login -->

            <div class="form-box login">
                <h2>Login</h2>
                <form method="post" action="includes/login.inc.php">
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" >Remember me</label>
                        <a href="#">Forgot password ?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ? <a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>

            <!--registration-->

            <div class="form-box register">
                <h2>Register</h2>
                <form method="post" action="includes/register.inc.php"> 
                    <div class="input-box">
                        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" name="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" name="password" required>
                        <label>password</label>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" >Agree to terms & conditions</label>
                        <a href="#">Forgot password ?</a>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Aleady have an account ? <a href="#" class="login-link">login</a></p>
                    </div>
                </form>
            </div>
        </div>

        <?php
        check_signup_errors();
        ?>

        <!---FOOTER-->
        <div>

            <!---increase loader start-->
            <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/VR1fY_w-nZo?si=9Pw4DMglHf9A11X_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share?rel=0&autoplay=1" allowfullscreen></iframe>
            <iframe style="display: none;" width="560" height="315" src="https://www.youtube.com/embed/VR1fY_w-nZo?si=9Pw4DMglHf9A11X_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share?rel=0&autoplay=1" allowfullscreen></iframe>
        </div>

    <script src="script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    
    <script>
        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none"
        })
    </script>



</body>
</html>