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
        <title>Booleans in PHP</title>
    </head>
    <body>
        <?php
            // The boolean values true and false
            # are case in-sensitive in PHP
            $result1 = True;
            $result2 = False;
        ?>

        <p>Result 1: <?php echo $result1; ?></p>
        <p>Result 2: <?php echo $result2; ?></p>

        <!-- Testing for a boolean value -->
        <p>result2 is boolean? <?php echo is_bool($result2); ?></p>

        <!-- Using booleans in a conditional -->
        <?php
            $number = 3.14;
            if ( is_float($number) ) {
                echo "It is a float.";
            }
        ?>
    </body>
</html>
