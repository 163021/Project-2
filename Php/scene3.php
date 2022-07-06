<!-- TIJDELIJKE VERSIE -->

<?php
/**
 * PHP version 8.1.2
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <163021@student.horizoncollege.nl>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */


?>


<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/JS/script.js"></script>
    <link rel="stylesheet" href="/css/scene3.css">
    <title>Scenario3</title>
</head>

<body class="">
    <div id="Alpha">
        <h2 class="">*ALPHA - WIP</h2>
    </div>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2'])) {
        ?>
        <form method="POST">
            <div class="">
                <label for="optie1" class="">Je zit op de fiets bij een kruispunt. Het stoplicht gaat op groen en je fiets aan de rechter kant naar het volgende stoplicht links.
                    Je steekt je hand uit dat je naar links moet, en op het aller laatse moment komt er nog een gast op een brommer links van jou die denkt dat hij gewoon rechtdoor mag.
                    Jullie komen stil te staan en gaan aan de kant:</label>
            </div>
            <br><br>
            <div class="">
                <select name="optie1" class="" id="optie1">
                    <option value="veilig01">Je zegt sorry terwijl het niet jouw schuld is en fiets weer door.</option>
                    <option value="onveilig01">Je vraagt aan hem wtf zijn probleem is.</option>
                </select>
            </div>
            <br><br>
            <div class="">
                <input type="submit" class="" value="Volgende">
            </div>
        </form>
        <?php
    }
    ?>
    <?php
    if (isset($_POST['optie1'])) {
        $_SESSION['optie1'] = $_POST['optie1'];
        if ($_SESSION['optie1'] == "veilig01") {
            ?>
        <div class="">
            <h3>Hij roept nog naar je maar gaat ook zijn eigen kant op.</h3>
        </div>
        <div class="">
                <h4 class="">Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
            <?php
            header("Refresh:5; url=/Php/scene3.php", true, 303);
        } else {
            ?>
        <form method="POST">
            <div class="">
                <label for="optie2" class="">De jongen is nu boos op je en het lijkt erop alsof hij wil gaan vechten.</label>
            <br><br>
            </div>
            <div class="">
                <select id="optie2" class="" name="optie2">
                    <option value="veilig02">Je neemt afstand en wacht totdat hij iets doet.</option>
                    <option value="onveilig02">Je scheldt hem uit en geeft hem een klap.</option>
                </select>
            </div>
                <br><br>
            <div class="">
                <input type="submit" class="" value="Volgende" id="btnSubmit3">
            </div>
        </form>
            <?php
        }
    }

    if (isset($_POST['optie2'])) {
        $_SESSION['optie2'] = $_POST['optie2'];
        if ($_SESSION['optie2'] == "veilig02") {
            ?>
            <div class="">
                <h1 class="">Scenario 3 Voltooid</h1>
            </div>
            <br><br>
            <div class="">
                <h4 class="">Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
            <?php
            header("Refresh:5; url=/Php/End-Footer.php", true, 303);
        } else {
            ?>
            <div class="">
                <h1>Jullie beginnen allebei te vechten en er worden een paar flinke klappen gegeven. Omstanders moeten jullie uit elkaar halen en politie bellen. Jullie bloeden allebei.</h1>
            </div>
            <br><br>
            <div class="">
                <h3 class="text-xl">Probeer opnieuw.</h3>
            </div>
            <br><br>
            <div class="">
                <form method="post" action="#">
                    <input type="submit" class="" value="Opnieuw">
                </form>
            </div>
            <?php
        }
    }
    ?>

    <div class="">
        <form method="post" action="index.php">
            <input type="submit" class="" value="Terug gaan">
        </form>
    </div>
</body>

</html>