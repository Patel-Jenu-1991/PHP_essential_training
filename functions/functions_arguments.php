<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <style>
            body {
                background-color: #000;
                color: #fff;
                font-family: monospace;
                font-weight: bold;
                font-size: 1.5em;
            }
        </style>
        <title>Function Arguments</title>
    </head>
    <body>
        <?php
            function say_hello_to($word) {
                echo "<p>Hello {$word}!</p>";
            }

            $name = "Jack Patel";
            say_hello_to($name);
        ?>

        <?php
            function better_hello($greeting, $target, $punct) {
                echo "<p>" . $greeting . " " . $target . $punct . "</p>";
            }

            better_hello("Hello", $name, "!");
            better_hello("Greetings", $name, "!!!");

            better_hello("Greetings", $name, null);
        ?>
    </body>
</html>
