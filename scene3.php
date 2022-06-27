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
            <label for="">Je zit in de auto en bent aan het rijden. Je rijdt op de linker baan en iemand voor je snijd je af om ook naar links te gaan.</label>
            <br><br>
            <select name="optie1" id="optie1">
                <option value="veilig01">Je laat het gaan maar ijnt wel even naar hem.</option>
                <option value="onveilig01">Je wordt boos en toeterd en steekt je middel vinger op naar diegene voor je.</option>
            </select>
            <input type="submit" value="Volgende">
        </form>
        <?php
    }
    ?>
    
</body>
</html>