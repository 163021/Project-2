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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/JS/script.js"></script>
    <link rel="stylesheet" href="/css/scene2.css">
    <title>Scenario2</title>
</head>

<body>
    <div id="Alpha">
        <h2 class="">*ALPHA - WIP</h2>
    </div>
    <div class="">
        <h1 class="">Scenario 2</h2>
    </div>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2'])) {
    ?>
        <form method="post">
            <div>
                <label for="optie1" class="">Je bent op een feestje van iemand uit je klas. Je staat rustig bij een paar van je vrienden te chillen en wat te drinken.
                    Er komen 3 nieuwe gasten aan waarvan je eentje meteen herkent. een oud klasgenoot waar je altijd ruzie mee had en nog steeds
                    niet mee kan opschieten. Hij lijkt je te herkennen en loopt naar je toe en zegt tegen je "eeh, flikker, wat doe jij hier?"...</label>
            </div>
            <br><br>
            <div class="select">
                <select id="optie1" name="optie1">
                    <option value="veilig01">Je reageert rustig met "Ik sta hier te chillen, zou je mij met rust willen laten." en draait je na de zin om zodat je je gesprek kan vervolgen met je vrienden.</option>
                    <option value="onveilig01">Je reageert geiriteerd met "tf, hou je bek eens. Ik sta hier te chillen K** flikker."</option>
                </select>
            </div>
            <br><br>
            <div>
                <input type="submit">
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
            <div class="veilig1css">
                <h2>De oud klasgenoot die denkt even en zegt dan: "Oh, negeer mij maar. sukkel" draait om en loopt weg.</h2>
                <div>
                    <h3>Scenario 2 Voltooid...</h3>
                    <br><br>
                    <h3>Doorverwijzen in 5...</h3>
                    <?php
                    header("Refresh: 5; url=scene3.php");
                    ?>
                </div>
            </div>
        <?php
        }
    } else if (isset($_POST['optie1'])) {
        if ($_SESSION['optie1'] == "onveilig01") {
        ?>
            <div class="onveilig1css">
                <h2>De oud klasgenoot scheld je uit en geeft je een flinke duw, jij schrikt en valt bijna achterover. Je herstelt net optijd je evenwicht en kijkt hem aan.</h2>
                <form method="post">
                    <div class="select2">
                        <select id="optie2">
                            <option value="onveilig02">Je geeft hem een flinke duw en geef hem een rake slag in zijn gezicht</option>
                            <option value="veilig02">Je zegt dat je geen zin hebt in gedoe en verlaat het feestje</option>
                            <option value="veilig03">test3</option>
                            <option value="onveilig03">test4</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit">
                    </div>
                </form>
            </div>
        <?php
        }
    } else if (isset($_POST['optie2'])) {
        $_SESSION['optie2'] = $_POST['optie2'];
        if ($_SESSION['optie2'] == "onveilig02") {
        ?>
            <div class="antwoord1">
                <h2>Het loopt uit de hand, Jullie beginnen te vechten en jou en zijn vrienden beginnen zich ermee te bemoeien. Er
                    word door beide groepjes hard gevochten. De buren hebben de politie gebeld en die komst snel ter plaatsen en de jongens worden uit elkaar gedreven.</h2>
                <br><br>
                <h3>Probeer opnieuw.</h3>
                <br><br>
                <div>
                    <form method="post" action="#">
                        <input type="submit" class="" value="Opnieuw">
                    </form>
                </div>
            </div>
        <?php
        }
    } else if (isset($_POST['optie2'])) {
        $_SESSION['optie2'] = $_POST['optie2'];
        ?>
        <div class="antwoord2">
            <h2></h2>
            <br><br>
            <h3></h3>
            <br><br>
            <div>
                <form method="post">
                    <input type="submit" value="">
                </form>
            </div>
        </div>
    <?php
    }
    ?>


    <div class="">
        <form method="post" action="index.php">
            <input type="submit" class="" value="Terug gaan">
        </form>
    </div>
</body>

</html>