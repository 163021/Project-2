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
        <h2 class="text-1xl text-red-600 mb-5">*ALPHA - WORK IN PROGRESS</h2>
    </div>
    <div class="flex w-screen justify-center">
        <h1 class="underline text-4xl mb-10">Scenario 2</h2>
    </div>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2'])) {
        ?>
        <form method="post">
            <div class="flex justify-center text-xl">
                <label for="optie1" class="w-1/3">Je bent op een feestje van iemand uit je klas. Je staat rustig bij een paar van je vrienden te chillen en wat te drinken.
                    Er komen 3 nieuwe gasten aan waarvan je eentje meteen herkent. een oud klasgenoot waar je altijd ruzie mee had en nog steeds
                    niet mee kan opschieten. Hij lijkt je te herkennen en loopt naar je toe en zegt tegen je "eeh, flikker, wat doe jij hier?"...</label>
            </div>
            <br><br>
            <div class="flex justify-center">
                    <select id="optie1" class="border-solid border-2 border-black w-96" name="optie1">
                        <option value="veilig01">Je reageert rustig met "Ik sta hier te chillen, zou je mij met rust willen laten." en draait je na de zin om zodat je je gesprek kan vervolgen met je vrienden.</option>
                        <option value="onveilig01">Je reageert geiriteerd met "tf, hou je bek eens. Ik sta hier te chillen K** flikker."</option>
                    </select>
            </div>
            <br><br>
            <div class="flex justify-center">
                <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Volgende" id="btnSubmit1">
            </div>
        </form>

        <?php
    }
    if (isset($_POST['optie1'])) {
        $_SESSION['optie1'] = $_POST['optie1'];
        if ($_SESSION['optie1'] == "veilig01") {
            ?>
            <div class="flex justify-center text-xl">
                <h3>De oud klasgenoot die denkt even en zegt dan: "Oh, negeer mij maar, sukkel" draait om en loopt weg.</h3>
            </div>
            <div class="flex justify-center mt-10">
                <form method="POST" action="scene3.php">
                    <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Volgende Scenario" id="btnSubmit2">
                </form>
            </div>
            <?php
        } else {
            ?>
            <form method="POST">
                <div class="flex justify-center">
                <label for="optie2" class="text-xl mb-2">De oud klasgenoot scheld je uit en geeft je een flinke duw, jij schrikt en valt bijna achterover. Je herstelt net optijd je evenwicht en kijkt hem aan.</label>
                <br><br>
                </div>
                <div class="flex justify-center mt-2">
                    <select id="optie2" class="border-solid border-2 border-black w-96" name="optie2">
                        <option value="veilig02">Je zegt dat je geen zin hebt in gedoe en verlaat het feestje</option>
                        <option value="onveilig02">Je geeft hem een flinke duw en geef hem een rake slag in zijn gezicht</option>
                    </select>
                </div>
                    <br><br>
                <div class="flex justify-center">
                    <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Volgende Scenario" id="btnSubmit3">
                </div>
            </form>
            <?php
        }
    }

    if (isset($_POST['optie2'])) {
        $_SESSION['optie2'] = $_POST['optie2'];
        if ($_SESSION['optie2'] == "veilig02") {
            ?>
        <div class="flex justify-center">
                <h1 class="text-2xl">Scenario 2 Voltooid</h1>
                <br><br>
        </div>
        <div class="flex justify-center">
            <h3 class="text-xl">Redirecting in 3...</h3>
        </div>
            <?php
            header("Refresh:3; url=/scene3.php", true, 303);
        } else {
            header("Refresh:3; url=/scene3.php", true, 303);
        }
    }
    ?>
</body>

</html>