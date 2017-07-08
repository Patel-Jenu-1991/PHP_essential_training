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
        <title>CONSTANTS in PHP</title>
    </head>
    <body>
        <?php
            # setting a regular variable
            $max_width = 980;

            # defining a constant
            define("MAX_WIDTH", 980);
            echo MAX_WIDTH;

            # the value of a constant cannot be changed

            # a constant cannot be redefined unless the
            # script run-time has ended
        ?>
    </body>
</html>
