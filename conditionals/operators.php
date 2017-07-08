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
        <title>Comparison and Logical Operators</title>
    </head>
    <body>
        <?php
            $a = 4;
            $b = 3;
            $c = 1;
            $d = 20;

            // logical AND operator (&&)
            if ( ($a > $b) && ($c > $d) ) {
                echo "<p>a is larger than b AND ";
                echo "c is larger than d</p>";
            }

            // logical OR operator (||)
            if ( ($a > $b) || ($c > $d) ) {
                echo "<p>a is larger than b OR ";
                echo "c is larger than d</p>";
            }
        ?>

        <?php   // setting default values in PHP
            $e = 500;
            if ( !isset($e) ) {
                $e = 200;
            }
            echo "<p>$e</p>";
        ?>

        <?php // don't reject 0 or 0.0
            $quantity = 0.00;
            if ( empty($quantity) && !is_numeric($quantity) ) {
                echo "<p>You must enter a quantity</p>";
            }
            else {
                echo "<p>Qunatity: {$quantity}</p>";
            }
        ?>
    </body>
</html>
