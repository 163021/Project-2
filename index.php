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
        <div id="Alpha">
            <h2 class="text-1xl text-red-600">*ALPHA - WORK IN PROGRESS</h2>
        </div>
        <h1 class="text-4xl font-bold mb-5 flex justify-center">Welkom, dit zijn weerbaarheidsvragen!</h1>
        <h2 class="text-3xl mb-3 flex justify-center">U krijgt zodadelijk 3 scenario's te zijn. elke gebeurtenis heeft 2 keuzes.</h2>
        <h2 class="text-2xl mb-3 flex justify-center">Klik op de knop om de test te starten.</h2>
        <div class="flex justify-center mt-2">
            <form action="scene.php" method="post">
                <input type="submit" class="border-solid border-2 border-black px-2 transition ease-in-out delay-50 bg-white hover:-translate-y-1 hover:scale-110 hover:bg-green-500 duration-250" value="Start de test">
            </form>
        </div>
        <div class="shrink-0 text-center flex flex-row justify-center absolute inset-x-0 bottom-0">
            <h3 class="text-xl font-bold">Powered By...</h3>
            <img class="h-15 w-80 mb-10" src="Img/FundamentPlus.png" alt="Fundament+">
        </div>
    <div class="">
        <div class="absolute inset-x-0 bottom-0 ml-4 mb-4">
            <a href="Dev-Contact.php" class="underline">Dev-Contact</a>
            <a href="https://fundamentplus.nl/" class="underline ml-2">Website</a>
            
        </div>
    </div>
</body>

</html>