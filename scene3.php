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
    <title>Scenario3</title>
</head>

<body>
    <div id="Alpha">
        <h2 class="text-1xl text-red-600">*ALPHA - WORK IN PROGRESS</h2>
    </div>
    <?php
    session_start();
    if (!isset($_POST['optie1']) && !isset($_POST['optie2']) && !isset($_POST['optie3'])) {
    ?>
        <form method="POST">
            <label for=""></label>
            <br><br>
            <div class="flex justify-center">
                <select name="optie1" class="border-solid border-2 border-black" id="optie1">
                    <option value="veilig01">Je laat het gaan maar ijnt wel even naar hem.</option>
                    <option value="onveilig01">Je wordt boos en toeterd en steekt je middel vinger op naar diegene voor je.</option>
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

</body>

</html>