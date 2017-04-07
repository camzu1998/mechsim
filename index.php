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
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/snackbar.js"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/skeleton.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/snackbar.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <h2><a href="index.php" style="text-decoration: none; font-family: 'Revalia', cursive;">Mechsim</a></h2>
        </div>
        <div class="row" style="margin-top: 15%;">
            <div class="six columns">
                <form action="zaloguj.php" method="post">
                    <p>Login:</p>
                    <input type="text" name="login">
                    <p>Hasło:</p>
                    <input type="password" name="haslo"><br>
                    <input type="submit" name="Zaloguj" value="Zaloguj!">
                </form>
                <a href="rejestracja.php">Zarejestruj się!</a>
            </div>
            <div class="six columns">
                <h3>Changelog:</h3>
                <br>
                <br>
                <br>
            </div>
        </div>
        <div class="row"><!-- Miejsce na reklamy --></div>
    </div>
    <footer>Wykonał: Kamil Langer &copy; kamillanger4@gmail.com</footer>
    <div id="snackbar"><span id="tekst"></span></div>
    <?php
    if(isset($_SESSION['bladLH'])){
        ?><script>openSnackbarBLH();</script><?php
    } else if(isset($_SESSION['RegOK'])){
        ?><script>openSnackbarOK();</script><?php
    }
    unset($_SESSION['bladLH']);
    unset($_SESSION['RegOK']);
    ?>
</body>
</html>
