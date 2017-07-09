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
        <title>Functions: Return Values</title>
    </head>
    <body>
        <?php
            function add($val1, $val2) {
                $sum = $val1 + $val2;
                return $sum;
            }

            $result1 = add(3, 4);
            $result2 = add(1991, 16);
            echo "<p>Result1: {$result1}</p>";
            echo "<p>Result2: {$result2}</p>";
        ?>

        <?php   // Chinese Zodiac as a function
            function chinese_zodiac($year) {
                switch(($year - 4) % 12) {
                    case 0: return 'Rat';
                    case 1: return 'Ox';
                    case 2: return 'Tiger';
                    case 3: return 'Rabbit';
                    case 4: return 'Dragon';
                    case 5: return 'Snake';
                    case 6: return 'Horse';
                    case 7: return 'Goat';
                    case 8: return 'Monkey';
                    case 9: return 'Rooster';
                    case 10: return 'Dog';
                    case 11: return 'Pig';
                }
            }

            $years = array(2013, 2017, 1991, 1992,
                        1962, 1965, 1993, 2000, 2005,
                        2009, 2010, 2012, 2015, 2016,
                        2017, 2020, 2018, 2019, 2007);
            echo "<ul>";
            foreach ($years as $year) {
                $zodiac = chinese_zodiac($year);
                echo "<li>{$year} is the year of the {$zodiac}.</li>";
            }
            echo "</ul>";
        ?>
    </body>
</html>
