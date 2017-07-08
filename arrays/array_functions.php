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
        <!-- Concatenate elements of an array into a single string -->
        <p>
            Implode: <?php echo $num_string = implode(" * ", $numbers); ?>
        </p>
        <!-- Convert a string into an array -->
        <p>
            Explode: <?php print_r(explode(" * ", $num_string)); ?>
        </p>

        <!-- Testing for values in an array -->
        <p>
            15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?>
        </p>
        <p>
            19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?>
        </p>
    </body>
</html>
