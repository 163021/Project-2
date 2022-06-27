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
<?php
require 'tailwind.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scenario2</title>
</head>

<body>
    <div id="Alpha">
        <h2 class="text-1xl text-red-600">*ALPHA - WORK IN PROGRESS</h2>
    </div>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2'])) {
        ?>
    <form method="post">
        <label for="optie1">Je bent op een feestje van iemand uit je klas. Je staat rustig bij een paar van je vrienden te chillen en wat te drinken.
        Er komen 3 nieuwe gasten aan waarvan je eentje meteen herkent. een oud klasgenoot waar je altijd ruzie mee had en nog steeds
        niet mee kan opschieten. Hij lijkt je te herkennen en loopt naar je toe en zegt tegen je "eeh, flikker, wat doe jij hier?"...</label>
        <br><br>
        <select id="optie1" name="optie1">
            <option value="veilig01">Je reageert rustig met "Ik sta hier te chillen, zou je mij met rust willen laten." en draait je na de zin om zodat je je gesprek kan vervolgen met je vrienden.</option>
            <option value="onveilig01">Je reageert geiriteerd met "tf, hou je bek eens. Ik sta hier te chillen K** flikker."</option>
        </select>
        <br><br>
        <input type="submit" value="Volgende" id="btnSubmit1">
    </form>

        <?php
    }
    if (isset($_POST['optie1'])) {
        $_SESSION['optie1'] = $_POST['optie1'];
        if ($_SESSION['optie1'] == "veilig01") {
            ?>
            <h3>De oud klasgenoot die denkt even en zegt dan: "Oh, negeer mij maar. sukkel" draait om en loopt weg.</h3>
            <form method="POST" action="scene3.php">
                <input type="submit" value="Volgende Scenario" id="btnSubmit2">
            </form>
            <?php
        } else {
            ?>
            <form method="POST">
                <label for="optie2">De oud klasgenoot scheld je uit en geeft je een flinke duw, jij schrikt en valt bijna achterover. Je herstelt net optijd je evenwicht en kijkt hem aan.</label>
                <br><br> 
                <select id="optie2" name="optie2">
                    <option value="veilig02">Je zegt dat je geen zin hebt in gedoe en verlaat het feestje</option>
                    <option value="onveilig02">Je geeft hem een flinke duw en geef hem een rake slag in zijn gezicht</option>
                </select>
                <br><br>
                <input type="submit" value="Volgende Scenario" id="btnSubmit3">
            </form>
            <?php
        }
    }
    ?>
    </body>
    </html>