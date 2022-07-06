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


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introductie</title>
    <link rel="stylesheet" href="/css/index.css">
</head>

<body>
    <div id="container">
        <div class="container-navbar">
            <div>
                <h4>*ALPHA - WIP</h4>
            </div>
            <div class="logo">
                <a href="https://fundamentplus.nl/"><img src="/Img/FundamentPlus.png" alt="FundamentPlusLogo"></a>
            </div>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="https://fundamentplus.nl/over-ons/">Over Ons</a></li>
                        <li><a href="scenarios.php">Scenario's</a></li>
                        <li><a href="https://fundamentplus.nl/contact/">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container-body">
            <div class="center-content">
                <h4>FundamentPlus</h4>
                <h1>Welkom, dit zijn weerbaarheidsvragen!</h1>
                <div class="transparent">
                    <img src="/Img/FundamentPlusTransparant.png">
                </div>
                </div>
        </div>
        <h2>U krijgt zodadelijk 3 scenario's te zien.</h2>
        <h4>Klik op de knop om de test te starten.</h4>
        <div class="test-start">
            <form action="/Php/scene.php" method="post">
                <input type="submit" class="" value="Start de test">
                </form>
            </div>
            <div>
                <div>
                    <a href="/Php/disclaimer.php">Main Contact</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>