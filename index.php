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
    <h1 class="text-4xl font-bold mb-5 flex justify-center">Welkom, dit zijn weerbaarheidsvragen!</h1>
    <h2 class="text-3xl mb-3 flex justify-center">U krijgt zodadelijk 3 scenario's te zijn. elke gebeurtenis heeft 2 keuzes.</h2>
    <h2 class="text-2xl mb-3 flex justify-center">Klik op de knop om de test te starten.</h2>
    <div class="flex justify-center mt-2">
        <form action="scene.php" method="post">
            <input type="submit" class="border-solid border-2 border-black bg-white hover:bg-green-500bg-white hover:bg-green-500" value="Start de test">
        </form>
    </div>
</body>

</html>