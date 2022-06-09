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

session_start();
?>


<!-- Path: scene2.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scenario2</title>
</head>

<body>
    <?php
    if (!isset($_POST['optie2'])) {
        ?>
        <form method="post">
            <label for="optie2">
                <h3><strong>Je bent op een feestje van iemand uit je klas.
                        Je staat rustig bij een paar van je vrienden
                        te chillen en wat te drinken.
                    Er komen 3 nieuwe gasten aan waarvan je eentje meteen herkent.
                    een oud klasgenoot waar je altijd ruzie mee had en nog steeds
                    niet mee kan opschieten. Hij lijkt je te herkennen en
                    loopt naar je toe en zegt tegen je "eeh, flikker, 
                    wat doe jij hier?"...
                    </strong></h3>
                <select id="optie2" name="optie2">
                    <option value="veilig2">Je reageert rustig 
                        met "Ik sta hier te chillen, 
                        zou je mij met rust willen laten." 
                        en draait je na de zin om zodat je
                        je gesprek kan vervolgen met je vrienden.
                    </option>
                    <option value="onveilig2">Je reageert 
                        geiriteerd met "what the fuck,
                        hou je bek eens. Ik sta hier te chillen K** flikker."
                    </option>
                </select>
                <br><br><br>
                <input type="submit" value="Selecteren" id="btnSubmit3">
        </form>
        <br><br><br>
        <form method="post" action="index.html">
            <input type="submit" value="Terug gaan">
        </form>
        <?php
    }
    if (isset($_POST['optie2'])) {
        $_SESSION['optie2'] = $_POST['optie2'];
        if ($_SESSION['optie2'] == "veilig2") {
            ?>
            <h3><strong>De oud klasgenoot die denkt even en zegt dan:
                    "Oh, negeer mij maar. sukkel" draait om en loopt weg.
            <strong<h3>
                <br><br><br>
            <form method="post" action="scene3.php">
                <input type="submit" value="Volgende Scenario" id="btnSubmit2">
            </form>
                    <?php
        } elseif ($_SESSION['optie2'] == "onveilig2") {
            ?>
            <h3><strong>De oud klasgenoot scheld je uit en geeft je een flinke duw, 
                jij schrikt en valt bijna achterover. Je herstelt net optijd je
                evenwicht en kijkt hem aan.
            <strong<h3>
                <br><br><br>
                <?php
                if (!isset($_POST['optie3'])) {
                    ?>
                    <select id="optie3" name="optie3">
                    <option value="veilig3">Je zegt dat je geen zin hebt 
                    in gedoe en verlaat het feestje
                    </option>
                    <option value="onveilig3">Je geeft hem een flinke 
                    duw en geef hem een rake slag in zijn gezicht
                    </option>
                </select>
                <br><br><br>
                <form method="post">
                    <input type="submit" value="Selecteren" id="btnSubmit10">
                </form>
                <br><br><br>
                <form method="post" action="index.html">
                    <input type="submit" value="Terug gaan">
                </form>
                    <?php
                } if (isset($_POST['optie3'])) {
                    $_SESSION['optie3'] = $_POST['optie3'];
                    ?>
                    <?php
                    if ($_POST['optie3'] == "veilig3") {
                        ?>
                        <h3><strong>Je hebt de situatie goed 
                            afgehandeld, ga zo door!</strong></h3>
                        <?php
                    } elseif ($_POST['optie3'] == "onveilig3") {
                        ?>
                        <h3><strong>Je hebt de situatie niet 
                            goed afgehandeld, Probeer opnieuw!</strong></h3>
                            <form method="POST" action="index.html">
                            <input type="submit" value="Opnieuw" id="btnSubmit5">
                            </form>
                        <?php
                    }
                    
                }
                    


        }
    }
    ?>
</body>

</html>