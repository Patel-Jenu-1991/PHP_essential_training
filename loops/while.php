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
        <title>Loops: while</title>
    </head>
    <body>
        <?php
            $count = 0;
            while ($count <= 10) {
                if ($count == 5) {
                    echo "FIVE, ";
                } else {
                    echo $count . ", ";
                }
                $count++;
            }
            echo "<p>{$count}</p>"
        ?>
    </body>
</html>
