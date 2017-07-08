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
        <title>If statement in PHP</title>
    </head>
    <body>
        <?php
            $a = 4;
            $b = 3;

            if ($a > $b) {
                echo "<p>a is larger than b</p>";
            }
        ?>

        <?php //only welcome new users
            $new_user = True;
            if ( $new_user ) {
                echo "<h1>Welcome!</h1>";
                echo "<p>We are glad you decided to join us.</p>";
            }
        ?>

        <?php //Don't divide by zero
            $numerator = 20;
            $denominator = 4;
            $result = 0;
            if ( $denominator > 0 ) {
                $result = $numerator / $denominator;
            }
            echo "<p>Result: {$result}</p>";
        ?>
    </body>
</html>
