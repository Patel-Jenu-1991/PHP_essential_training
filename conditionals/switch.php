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
        <title>Switch statement in PHP</title>
    </head>
    <body>
        <?php // always remember to add break;
            $a = 9;

            switch( $a ) {
                case 0:
                    echo "<p>a equals 0</p>";
                    break;
                case 1:
                    echo "<p>a equals 1</p>";
                    break;
                case 2:
                    echo "<p>a equals 2</p>";
                    break;
                case 3:
                    echo "<p>a equals 3</p>";
                    break;
                default:
                    echo "<p>a is not 0, 1, 2 or 3</p>";
                    break;
            }
        ?>

        <?php
            // Chinese Zodiac
            // whitespace doesn't matter
            // colons, semicolons and breaks do

            $year = 2013;

            switch( ($year - 4) % 12 ) {
                case 0: $zodiac = 'Rat';        break;
                case 1: $zodiac = 'Ox';         break;
                case 2: $zodiac = 'Tiger';      break;
                case 3: $zodiac = 'Rabbit';     break;
                case 4: $zodiac = 'Dragon';     break;
                case 5: $zodiac = 'Snake';      break;
                case 6: $zodiac = 'Horse';      break;
                case 7: $zodiac = 'Goat';       break;
                case 8: $zodiac = 'Monkey';     break;
                case 9: $zodiac = 'Rooster';    break;
                case 10: $zodiac = 'Dog';       break;
                case 11: $zodiac = 'Pig';       break;

            }

            echo "<p>{$year} is the year of the {$zodiac}.</p>";
        ?>

        <?php // case with multiple values
            $user_type = 'student';

            switch( $user_type ) {
                case 'student':
                    echo "<p>Welcome!</p>";
                    break;
                case 'press':
                case 'customer':
                case 'admin':
                    echo "<p>Hello! {$user_type}</p>";
                    break;
            }
        ?>
    </body>
</html>
