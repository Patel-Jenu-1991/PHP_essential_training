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
        <title>Loops: While (Odd and Even)</title>
    </head>
    <body>
        <?php   // finding odd and even numbers

            $number = 0;

            while ($number <= 16) {
                // checks if the number is even
                if ($number % 2 == 0) {
                    echo "<p>{$number} is even.</p>";
                } else {
                    echo "<p>{$number} is odd.</p>";
                }

                $number++;  # increment by 1
            }
        ?>
    </body>
</html>
