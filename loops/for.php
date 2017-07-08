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
        <title>Loops: for</title>
    </head>
    <body>
        <p>
            <?php   // a simple for loop
                for ($count = 0; $count <= 10; $count++) {
                    echo $count . ", ";
                }
            ?>
        </p>
        <p>
            <?php   // odd or even with a for loop
                for ($count = 16; $count > 0; $count--) {
                    if ($count % 2 == 0) {
                        echo "{$count} is even.<br />";
                    }
                    else {
                        echo "{$count} is odd.<br />";
                    }
                }
            ?>
        </p>
    </body>
</html>
