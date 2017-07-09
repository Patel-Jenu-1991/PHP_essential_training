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
        <title>Defining functions in PHP</title>
    </head>
    <body>
        <?php
            function say_hello() {
                echo "<p>Hello World!</p>";
            }

            say_hello();

            function say_hello_to($word) {
                echo "<p>Hello {$word}!</p>";
            }

            say_hello_to("World");
            say_hello_to("Everyone");

            // it's best practice to define functions before invoking them
            # but it's not required to define functions before they're invoked
            say_hello_loudly();

            function say_hello_loudly() {
                echo "<p>HELLO WORLD!</p>";
            }
        ?>
    </body>
</html>
