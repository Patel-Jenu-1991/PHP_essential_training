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
        <title>Functions: Scope</title>
    </head>
    <body>
        <?php

            $bar = "outside";   # global scope

            function foo() {
                # referencing a variable in the global scope
                # with the global keyword, use it with caution
                global $bar;
                if (isset($bar)) {
                    echo "<p>foo: {$bar}</p>";
                }
                $bar = "inside";    # local scope
            }

            echo "<p>1: " . $bar . "</p>";
            foo();
            echo "<p>2: " . $bar . "</p>";

        ?>
    </body>
</html>
