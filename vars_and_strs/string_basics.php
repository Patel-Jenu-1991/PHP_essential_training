<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>String basics</title>
    </head>
    <body>
        <?php
            // strings can be created using
            # both single and double quotes
            echo "Hello World<br />";
            echo 'Hello World<br />';

            $greeting = "Hello";
            $target = "World";
            $phrase = $greeting . " " . $target;
            echo $phrase
        ?>
        <br />
        <?php
            // variables are still accessible in
            # in diffrent chunks of a script
            echo "$phrase Again<br />"; # string interpolation in PHP
            echo '$phrase Again<br />'; # displays the string as is
            echo "{$phrase}Again<br />"; # in-place substitution
        ?>
    </body>
</html>
