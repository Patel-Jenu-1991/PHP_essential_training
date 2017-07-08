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
        <title>Null and empty</title>
    </head>
    <body>
        <?php
            $var1 = null;   # NULL is case in-sensitive
            $var2 = ""; # an empty string is not the same as null
        ?>

        <p>var1 null? <?php echo is_null($var1); ?></p>
        <p>var2 null? <?php echo is_null($var2); ?></p>
        <!-- A variable that is not defined is considered null -->
        <p>var3 null? <?php echo is_null($var3); ?></p>

        <?php
            # Values that are considered to be empty in PHP
            # empty values: "", null, 0, 0.0, "0", false, array()
        ?>

        <?php $var3 = "0"; ?>
        <p>var1 empty? <?php echo empty($var1); ?></p>
        <p>var2 empty? <?php echo empty($var2); ?></p>
        <p>var3 empty? <?php echo empty($var3); ?></p>
    </body>
</html>
