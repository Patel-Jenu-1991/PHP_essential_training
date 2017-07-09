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
        <title>Functions: Default Argument Values</title>
    </head>
    <body>
        <?php
            function paint($room = "Office", $color = "white") {
                return "<p>The color of the {$room} is {$color}.</p>";
            }

            echo paint();
            echo paint("Bedroom", "blue");
            echo paint("Laundry Room", null);
            echo paint("Cabin", "Black");
            echo paint("Drawing Room", "Purple");
        ?>
    </body>
</html>
