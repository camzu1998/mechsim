<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Strona główna</title>
    <meta name="description" content="Gra o życiu mechanika">
    <meta name="author" content="Kamil Langer">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Revalia" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/snackbar.css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/snackbar.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <h2><a href="index.php" style="text-decoration: none; font-family: 'Revalia', cursive;">Mechsim</a></h2>
        </div>
        <div class="row" style="margin-top: 15%;">
            <form action="rejestruj.php" method="post" style="text-align:center;">
                <p>Login:</p>
                <input type="text" name="login">
                <p>Hasło:</p>
                <input type="password" name="haslo">
                <p>Email:</p>
                <input type="email" name="email"> <br>
                <input type="submit" name="rejestruj" value="Rejestruj!">
            </form>
        </div>
        <div class="row"><!-- Miejsce na reklamy --></div>
    </div>
    <footer>Wykonał: Kamil Langer &copy; kamillanger4@gmail.com</footer>
    <div id="snackbar"><span id="tekst"></span></div>
    <?php
    if(isset($_SESSION['bladEL'])){
        ?><script>openSnackbarBLH();</script><?php
    } else if(isset($_SESSION['bladL'])){
        ?><script>openSnackbarBL();</script><?php
    } else if(isset($_SESSION['bladE'])){
        ?><script>openSnackbarBE();</script><?php
    }
    unset($_SESSION['bladEL']);
    ?>
</body>
</html>
