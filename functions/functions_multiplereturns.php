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
        <title>Functions: Return multiple values</title>
    </head>
    <body>
        <?php
            function add_subt($val1, $val2) {
                $add = $val1 + $val2;
                $subt = $val1 - $val2;
                # Multiple values can be returned from
                # a function using arrays
                return array($add, $subt);
            }

            $result_array = add_subt(10, 5);
            echo "<p>Add: " . $result_array[0] . "</p>";
            echo "<p>Subt: " . $result_array[1] . "</p>";

            // the list function can be used to
            # assign values to individual variables
            # from an array
            list($add_result, $subt_result) = add_subt(20, 7);
            echo "<p>Add: " . $add_result . "</p>";
            echo "<p>Subt: " . $subt_result . "</p>";
        ?>
    </body>
</html>
