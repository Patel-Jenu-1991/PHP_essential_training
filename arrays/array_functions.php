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
        <title>Array Functions</title>
    </head>
    <body>
        <?php $numbers = array(8, 23, 15, 42, 16, 4); ?>

        <!-- Count() returns the number of elements in an array -->
        <p>Count: <?php echo count($numbers); ?></p>

        <!-- max() returns the largest value in an array -->
        <p>Max value: <?php echo max($numbers); ?></p>

        <!-- min() returns the smallest value in an array -->
        <p>Min value: <?php echo min($numbers); ?></p>

        <!-- Sorting values in an array -->
        <pre>
            <!-- Sorts the values in ascending order -->
            Sort:   <?php sort($numbers); print_r($numbers); ?><br />
            <!-- Sorts the values in descending order -->
            Reverse Sort: <?php rsort($numbers); print_r($numbers) ?>
        </pre>
    </body>
</html>
