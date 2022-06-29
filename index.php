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

require 'tailwind.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introductie</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="flex flex-row flex-start pl-5 items-center h-14">
        <div class="pl-3 pt-5 mr-3" id="Alpha">
            <h2 class="text-1xl text-red-600 pr-5 inline">*ALPHA - WIP</h2>
        </div>
        <div id="logo" class="w-52">
            <a href="https://fundamentplus.nl/"><img class="hover:transition ease-in-out duration-150 hover:-translate-y-1 hover:scale-110 mr-10 mt-2 scale-105" src="Img/FundamentPlus.png" alt="FundamentPlusLogo"></a>
        </div>
        <ul id="nav" class="">
            <li><a href="https://fundamentplus.nl/over-ons/">Over Ons</a></li>
            <li><a href="#">Scenario's</a>
                <ul>
                    <li><a href="/scene.php">Scenario 1</a></li>
                    <li><a href="/scene2.php">Scenario 2</a></li>
                    <li><a href="/scene3.php">Scenario 3</a>
                    </li>
                </ul>
            </li>
            <li><a href="https://fundamentplus.nl/contact/">Contact</a></li>
        </ul>
    </div>
    <div class="flex flex-col justify-center">
        <h1 class="text-4xl pt-32 mb-3 font-bold flex justify-center">Welkom, dit zijn weerbaarheidsvragen!</h1>
        <h2 class="text-3xl mb-3 flex justify-center">U krijgt zodadelijk 3 scenario's te zijn.
            elke gebeurtenis heeft 2 keuzes.</h2>
        <h2 class="text-2xl mb-3 flex justify-center">Klik op de knop om de test te starten.</h2>
    </div>
    <div class="flex justify-center mt-2">
        <form action="scene.php" method="post">
            <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Start de test">
        </form>
    </div>
    <div class="">
        <div class="absolute inset-x-0 bottom-0 ml-4 mb-4">
            <a href="Dev-Contact.php" class="underline">Dev-Contact</a>
        </div>
    </div>
</body>

</html>