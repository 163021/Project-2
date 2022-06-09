<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scenario1</title>
</head>

<body>
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
    <h1>
        Scenario 1:
    </h1>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2'])) {
        ?>
        <form method="post">
            <label for="optie1">
                <h3><strong>Je krijgt ruzie met
                        een man op straat en hij heeft een machette
                        op zijn heup en dreigt je er mee te kappen.
                        Wat doe je?</strong></h3>
                <select id="optie1" name="optie1">
                    <option value="veilig">Je probeert de situatie
                        te deëscaleren</option>
                    <option value="onveilig">Je wilt het gevecht aan en
                        geeft hem een kaakstoot</option>
                </select>
                <br><br><br>
                <input type="submit" value="Selecteren" id="btnSubmit">
        </form>
        <br><br><br>
        <form method="post" action="index.html">
            <input type="submit" value="Terug gaan">

        </form>
        <?php
    }
    if (isset($_POST['optie1'])) {
        $_SESSION['optie1'] = $_POST['optie1'];
        if ($_SESSION['optie1'] == "veilig") {
            ?>
            <h3><strong>Goed Gedaan. Je koos er voor om met de man te praten.
                    Hij heeft naar je geluisterd.</strong></h3>
            <form method="post" action="scene2.php">
                <input type="submit" value="Volgende Scenario" id="btnSubmit2">
            </form>
            <?php
        } else if ($_SESSION['optie1'] == "onveilig") {
            ?>
            <h3><strong>Dit gaat heel fout. De man heeft zijn machette
                    getrokken. Hij kapt je neer. :(</strong></h3>
            <h3><strong>Probeer opnieuw.</strong></h3>
            <form method="post" action="#">
            <input type="submit" value="Opnieuw">

            </form>
            <?php
        }
        ?>
        <?php
    }
    ?>
    <br><br><br>
</body>

</html>