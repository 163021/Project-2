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
<html lang="en" class="flex">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Scenario3</title>
</head>

<body class="block m-0">
    <div id="Alpha">
        <h2 class="text-1xl text-red-600 ml-3 mt-4">*ALPHA - WIP</h2>
    </div>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2'])) {
        ?>
        <form method="POST">
            <div class="text-center flex justify-center w-1/3">
                <label for="optie1" class="text-xl flex justify-center">Je zit op de fiets bij een kruispunt. Het stoplicht gaat op groen en je fiets aan de rechter kant naar het volgende stoplicht links.
                    Je steekt je hand uit dat je naar links moet, en op het aller laatse moment komt er nog een gast op een brommer links van jou die denkt dat hij gewoon rechtdoor mag.
                    Jullie komen stil te staan en gaan aan de kant:</label>
            </div>
            <br><br>
            <div class="flex justify-center">
                <select name="optie1" class="border-solid border-2 border-black" id="optie1">
                    <option value="veilig01">Je zegt sorry terwijl het niet jouw schuld is en fiets weer door.</option>
                    <option value="onveilig01">Je vraagt aan hem wtf zijn probleem is.</option>
                </select>
            </div>
            <br><br>
            <div class="flex justify-center">
                <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Volgende">
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
        <div class="flex justify-center text-xl">
            <h3>Hij roept nog naar je maar gaat ook zijn eigen kant op.</h3>
        </div>
        <div class="flex justify-center">
                <h4 class="text-xl">Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
            <?php
            header("Refresh:5; url=/scene3.php", true, 303);
        } else {
            ?>
        <form method="POST">
            <div class="flex">
                <label for="optie2" class="text-xl mb-2 justify-center">De jongen is nu boos op je en het lijkt erop alsof hij wil gaan vechten.</label>
            <br><br>
            </div>
            <div class="flex justify-center mt-2 w-screen">
                <select id="optie2" class="border-solid border-2 border-black w-96" name="optie2">
                    <option value="veilig02">Je neemt afstand en wacht totdat hij iets doet.</option>
                    <option value="onveilig02">Je scheldt hem uit en geeft hem een klap.</option>
                </select>
            </div>
                <br><br>
            <div class="flex justify-center">
                <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Volgende" id="btnSubmit3">
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
                <h1 class="text-2xl">Scenario 3 Voltooid</h1>
            </div>
            <br><br>
            <div class="flex justify-center">
                <h4 class="text-xl">Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
            <?php
            header("Refresh:5; url=/End-Footer.php", true, 303);
        } else {
            ?>
            <div class="flex justify-center">
                <h1>Jullie beginnen allebei te vechten en er worden een paar flinke klappen gegeven. Omstanders moeten jullie uit elkaar halen en politie bellen. Jullie bloeden allebei.</h1>
            </div>
            <br><br>
            <div class="flex justify-center">
                <h3 class="text-xl">Probeer opnieuw.</h3>
            </div>
            <br><br>
            <div class="flex justify-center">
                <form method="post" action="#">
                    <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-yellow-500 duration-250" value="Opnieuw">
                </form>
            </div>
            <?php
        }
    }
    ?>

    <div class="flex justify-center underline mt-32">
        <form method="post" action="index.php">
            <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-yellow-500 duration-250" value="Terug gaan">
        </form>
    </div>
</body>

</html>