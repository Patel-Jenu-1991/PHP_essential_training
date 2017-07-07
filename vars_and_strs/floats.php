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
        <title>Add title here</title>
    </head>
    <body>
        <p><?php echo $float = 3.14; ?></p>
        <p><?php echo $float + 7; ?></p>
        <p><?php echo 4 / 3; ?></p>
        <!-- Cannot Divide by zero -->
        <p><?php echo 4 / 0; ?></p>
        <hr />
        <h2>Rounding functions in PHP</h2>
        <hr />
        <p>Round:   <?php echo round($float, 1); ?></p>
        <p>Ceiling:   <?php echo ceil($float); ?></p>
        <p>Floor:   <?php echo floor($float); ?></p>
        <hr />
        <h2>Functions to check for a numeric value in PHP</h2>
        <hr />
        <?php $integer = 3; ?>
        <p><?php echo "Is {$integer} integer? " . is_int($integer); ?></p>
        <p><?php echo "Is {$float} integer? " . is_int($float); ?></p>

        <p><?php echo "Is {$integer} float? " . is_float($integer); ?></p>
        <p><?php echo "Is {$float} float? " . is_float($float); ?></p>

        <p><?php echo "Is {$integer} numeric? " . is_numeric($integer); ?></p>
        <p><?php echo "Is {$float} numeric? " . is_numeric($float); ?></p>
    </body>
</html>
