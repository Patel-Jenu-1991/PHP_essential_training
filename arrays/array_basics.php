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
        <title>Arrays in PHP</title>
    </head>
    <body>
        <?php
            $numbers = array(4, 8, 15, 16, 23, 42);
            echo "<p>{$numbers[0]}</p>";
        ?>

        <?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?>

        <?php echo "<p>{$mixed[2]}</p>"; ?>

        <!-- Returns array type but doesn't display the array -->
        <?php echo "<p>{$mixed[3]}</p>"; ?>
        <?php echo "<p>{$mixed}</p>"; ?>

        <!-- Accessing multi-dimensional arrays -->
        <?php echo "<p>{$mixed[3][1]}</p>"; ?>

        <!-- Replacing an element of an array  -->
        <?php $mixed[2] = "cat"; ?>

        <!-- Inserting an element into the array, using index -->
        <?php $mixed[4] = "mouse"; ?>

        <!-- Inserting an element into the array, without specifying index -->
        <?php $mixed[] = "house"; ?>

        <pre>
            <?php
                // print_r returns true, therefore, the extra 1
                echo print_r($mixed);
            ?>

            <br />

            <?php
                // PHP 5.4 introduced the short array syntax.
                $array = [1, 2, 3, 4, 5];
                echo print_r($array);
            ?>
        </pre>

    </body>
</html>
