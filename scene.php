<!DOCTYPE html>
<html lang="en">

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

//TIJDELIJKE VERSIE
?>

<?php
require 'tailwind.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10;scene.php" />
    <script src="script.js"></script>
    <title>Scenario1</title>

</head>

<body>

    <div id="Alpha">
        <h2 class="text-1xl text-red-600 mt-3 ml-4">*ALPHA - WIP</h2>
    </div>
    <h1 class="text-4xl mb-5 flex justify-center underline">
        Scenario 1:
    </h1>
    <?php
    session_start();
    if (!isset($_POST['optie1'])) {
        ?>
        <form method="post" class="flex justify-center">
            <label for="optie1">
                <h3 class="mb-10 text-xl flex justify-center">Je krijgt ruzie met
                        een jongeren op straat en hij heeft een mes
                        op zijn heup en dreigt je er mee te steken.</h3>
                <div class="flex justify-center">
                    <select id="optie1" class="border-solid border-2 border-black" name="optie1">
                        <option value="veilig">Je probeert de situatie
                            te deëscaleren</option>
                        <option value="onveilig">Je wilt het gevecht aan en
                            geeft hem een kaakstoot</option>
                    </select>
                </div>
                <div class="flex justify-center mt-10">
                    <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Selecteren" id="btnSubmit">
                </div>
        </form>
        <br><br><br>
        <?php
    }
    if (isset($_POST['optie1'])) {
        $_SESSION['optie1'] = $_POST['optie1'];
        if ($_SESSION['optie1'] == "veilig") {
            ?>
            <div class="text-xl flex justify-center">
                <h2>Goed Gedaan. Je koos er voor om met de man te praten.
                    Hij heeft naar je geluisterd.</h3>
            </div>
            <br><br>
            <div class="flex justify-center">
                <h3 class="text-2xl">Scenario 2 Voltooid</h1>
            </div>
            <br><br>
            <div class="flex justify-center">
                <h4 class="text-xl">Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
            <?php
            header("Refresh:5; url=/scene2.php", true, 303);
        } else if ($_SESSION['optie1'] == "onveilig") {
            ?>
            <div class="flex justify-center">
                <h3 class="text-2xl">Dit gaat heel fout. De man heeft zijn mes
                    getrokken. Hij heeft je neer gestoken. :(
                </h3>
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
        ?>
        <?php
    }
    ?>
    <br><br><br>

    <div class="flex justify-center underline">
        <form method="post" action="index.php">
            <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-yellow-500 duration-250" value="Terug gaan">
        </form>
    </div>
</body>

</html>