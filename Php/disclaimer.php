<?php

/**
 * PHP version 8.1.2
 *
 * @category Template_Class
 * @package  Template_Class
 * @author   Author <162339student.horizoncollege.nl>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     http://localhost/
 */

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/disclaimer.css"Dev-o>
    <title>Disclaimer</title>
</head>

<p>
    Alle studenten in de aanstaande pagina die bekend zijn als: Jurre Poelman, Marai de Jong, Casper Kizewski, Martijn Kerpentier.
    Hebben dit project uitgevoerd voor hun eindproject van het eerste leerjaar in naam van FundamentPlus onder begeleiding van:
    Rick Nansink; Projectleider en Ambulant hulpverlener.
</p>

<br>

<p>
    Alle problemen die zijn opgekomen met de website kunt u melden aan de projectleider;
    <a href=mailto:r.nansink@fundamentplus.zorgring.nl>r.nansink@fundamentplus.zorgring.nl</a>. 
    Na enige tijd gaat dit doorgevoerd worden naar de dan huidige developers van de site.
    De studenten zijn niet aanspreekbaar voor fouten die zijn opgekomen, en kunnen hierover geen contact ontvangen.
    De mails van de studenten zijn uitsluitend bedoeld voor contact over zaken zoals; Stage of Samenwerking.
    Neem contact op met Rick Nansink of FundamentPlus over verdere vragen.
</p>

<form action="<?php echo $action ?>" method="POST">
    <h2>Ik accepteer de disclaimer en zal geen contact met de studenten opnemen over de website of problemen die ik ervaar met de website.</h2>

    <input type="radio" id="accept" name="disclaimer" value="accept">
    <label for="accept">accept</label>
    <input type="radio" id="refuse" name="disclaimer" value="refuse">
    <label for="refuse">refuse</label>
    <br>
    <br>
    <input type="submit" value="continue">
</form>

<?php

if (isset($_POST['logout'])) {
    header('Location: logout.php');
}

?>

</html>