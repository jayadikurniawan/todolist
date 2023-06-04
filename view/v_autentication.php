<?php

session_start();


if (isset($_SESSION['status']) && $_SESSION['status'] == 'errorlogin') {
    echo '<script>alert("Username atau Password salah!");</script>';
    unset($_SESSION['status']);
}

if (isset($_SESSION['username'])) {
    header('Location: v_dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../style/autentication.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="main">
        <div class="container a-container" id="a-container">
            <form id="a-form" class="form" action="../controller/c_login.php" method="POST" autocomplete="off">
                <!-- <h2 class="title form__title">Create Account</h2>
                    <input class="form__input" type="text" name="username" placeholder="Name">
                    <input class="form__input" type="password" name="password" placeholder="Password">
                    <input class="form__input" type="text" name="email" placeholder="Email">
                    <input class="form__input" type="tel" name="telepon" placeholder="Telepon">
                    <input class="button switch__button switch-btn" type="submit" name="signup" value="SIGN UP"> -->
                <h2 class="title form__title">Sign in to Website</h2>
                <input class="form__input" type="text" name="username" placeholder="Username" required>
                <input class="form__input" type="password" name="password" placeholder="Password" required>
                <input class="button" type="submit" name="login" value="LOG IN">
            </form>
        </div>
        <div class="container" id="container">
            <form method="POST" action="../controller/c_login.php" id="b-form" class="form" autocomplete="off">
                <!-- <h2 class="title form__title">Sign in to Website</h2>
                    <input class="form__input" type="text" name="username" placeholder="Email">
                    <input class="form__input" type="password" name="password" placeholder="Password">
                    <input class="button" type="submit" name="login" value="LOG IN"> -->

                <h2 class="title form__title">Create Account</h2>
                <input class="form__input" type="text" name="username" placeholder="Username" required>
                <input class="form__input" type="password" name="password" placeholder="Password" required>
                <input class="form__input" type="text" name="email" placeholder="Email" required>
                <input class="form__input" type="tel" name="telepon" placeholder="Telepon" required>
                <input class="button" type="submit" name="signup" value="SIGN UP">
            </form>
        </div>
        <div class="switch" id="switch-cnt">
            <div class="switch__circle"></div>
            <div class="switch__circle switch__circle--t"></div>
            <div class="switch__container" id="switch-c1">
                <h2 class="title switch__title">Hello Friend !</h2>
                <p class="description switch__description">Enter your personal details and start journey with us</p>
                <button class="button switch__button switch-btn">SIGN UP</button>
            </div>
            <div class="switch__container is-hidden" id="switch-c2">

                <h2 class="title switch__title">Welcome Back !</h2>
                <p class="description switch__description">To keep connected with us please login with your personal info</p>

                <button class="button switch__button switch-btn">LOG IN</button>
            </div>
        </div>
    </div>
    <script src="../javascript/autentication.js"></script>
   
</body>

</html>