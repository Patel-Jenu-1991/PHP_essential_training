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
        <title>Else and Elseif in PHP</title>
    </head>
    <body>
        <?php
            $a = 4;
            $b = 4;

            if ( $a > $b ) {
                echo "<p>a is larger than b</p>";
            }
            elseif ( $a < $b ) {
                echo "<p>a is smaller than b</p>";
            }
            else {
                echo "<p>a is equal to b</p>";
            }
        ?>
    </body>
</html>
