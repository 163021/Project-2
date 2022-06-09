<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>De vragen</title>
</head>

<body>
    <h1>
        <!-- vraagnummer dynamisch bepaald: js/php -->
    </h1>
    <?php
    if (!isset($_POST['submit'])) {
        ?>
        <form method="post" action="" value="1ste">
            <p></p>
            <input type="radio" name="optie1" value="optie1">Optie 2: </input>
            <input type="radio" name="optie2" value="optie2">Optie 2: </input>
            <input type="submit" name="submit" value="Volgende"></input>
        </form>
        <?php
    }
    ?>
    <?php
    if (isset($_POST['submit'])) {
        ?>
    <form method="post" action="" value="2de">
        <input type="radio" name="optie1" value="optie1">Optie 2: </input>
        <input type="radio" name="optie2" value="optie2">Optie 2: </input>
        <input type="submit" name="submit2" value="Volgende"></input>
    </form>
        <?php
    }
    ?>
    <?php
    if (!isset($_POST['submit2'])) {
        ?>
    <form method="post" action="" value="2de">
        <input type="radio" name="optie1" value="optie1">Optie 2: </input>
        <input type="radio" name="optie2" value="optie2">Optie 2: </input>
        <input type="submit" name="submit2" value="Volgende"></input>
    </form>
        <?php
    }
    ?>
    <?php
    if (isset($_POST['submit2'])) {
        ?>
        <form method="post" action="" value="3de">
        <input type="radio" name="optie1" value="optie1">Optie 2: </input>
        <input type="radio" name="optie2" value="optie2">Optie 2: </input>
        <input type="submit" name="submit3" value="Volgende"></input>
    </form>
        <?php
    }
    ?>
    <?php
    if (!isset($_POST['submit3'])) {
        ?>
        <form method="post" action="" value="3de">
        <input type="radio" name="optie1" value="optie1">Optie 2: </input>
        <input type="radio" name="optie2" value="optie2">Optie 2: </input>
        <input type="submit" name="submit3" value="Volgende"></input>
    </form>
        <?php
    }
    ?>
    <?php
    if (isset($_POST['submit3'])) {
        ?>
        <p><strong>Je bent klaar met deze vragenlijst!</strong></p>
        <?php
    }
    ?>
    <!-- de gekozen opties worden getoond -->
</body>

</html>