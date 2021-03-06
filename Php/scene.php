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



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10;/Php/scene.php" />
    <script src="/JS/script.js"></script>
    <link rel="stylesheet" href="/css/scene.css">
    <title>Scenario1</title>

</head>

<body>

    <div id="Alpha">
        <h2 class="alpha">*ALPHA - WIP</h2>
    </div>
    <h1 class="hoi">
        Scenario 1:
    </h1>
    <?php
    session_start();
    if (!isset($_POST['optie1'])) {
    ?>
        <form method="post">
            <div class="situatie">
                <label for="optie1">
                    <h3 class="">Je krijgt ruzie met
                        een jongeren op straat en hij heeft een mes
                        op zijn heup en dreigt je er mee te steken.</h3>
            </div>
            <div class="">
                <select id="optie1" class="" name="optie1">
                    <option value="veilig">Je probeert de situatie
                        te deëscaleren</option>
                    <option value="onveilig">Je wilt het gevecht aan en
                        geeft hem een kaakstoot</option>
                    <option value="veilig2">test3</option>
                    <option value="onveilig2">test4</option>
                </select>
            </div>
            <div class="">
                <input type="submit" class="" value="Volgende">
            </div>
        </form>
        <br><br><br>
        <?php
    }
    if (isset($_POST['optie1'])) {
        $_SESSION['optie1'] = $_POST['optie1'];
        if ($_SESSION['optie1'] == "veilig") {
        ?>
            <div class="hoi">
                <h2>Goed Gedaan. Je koos er voor om met de man te praten.
                    Hij heeft naar je geluisterd.</h3>
            </div>
            <br><br>
            <div class="hoi">
                <h3 class="">Scenario 1 Voltooid</h1>
            </div>
            <br><br>
            <div class="hoi">
                <h4 class="">Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
        <?php
            header("Refresh:5; url=/Php/scene2.php", true, 303);
        } else if ($_SESSION['optie1'] == "onveilig") {
        ?>
            <div>
                <h3>Dit gaat heel fout. De man heeft zijn mes
                    getrokken. Hij heeft je neer gestoken. :(
                </h3>
            </div>
            <br><br>
            <div class="">
                <h3 class="">Probeer opnieuw.</h3>
            </div>
            <br><br>
            <div class="">
                <form method="post" action="#">
                    <input type="submit" class="" value="Opnieuw">
                </form>
            </div>
        <?php
        } else if ($_SESSION['optie1'] == "veilig2") {
        ?>
            <div>
                <h2>test3</h2>
            </div>
            <br><br>
            <div>
                <h3>Scenario 1 Voltooid</h1>
            </div>
            <br><br>
            <div>
                <h4>Redirecting in <span id="countdowntimer">5</span>...</h4>
            </div>
        <?php
            header("Refresh:5; url=/Php/scene2.php", true, 303);
        } else if ($_SESSION['optie1'] == "onveilig2") {
        ?>
            <div>
                <h2>Jullie vechten het uit, hij heeft je gestoken, maar je hebt hem terug gepakt. De Politie is gebeld en haalt jullie uit elkaar.</h2>
            </div>
            <br><br>
            <div>
                <h3>Probeer opnieuw.</h3>
            </div>
            <br><br>
            <div>
                <form method="post" action="#">
                    <input type="submit" class="" value="Opnieuw">
                </form>
            </div>
            <br><br>

    <?php

        }
    }
    ?>
    <br><br><br>

    <div class="">
        <form method="post" action="index.php">
            <input type="submit" class="" value="Terug gaan">
        </form>
    </div>
</body>

</html>