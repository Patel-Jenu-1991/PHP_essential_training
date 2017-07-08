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
        <title>Associative Arrays</title>
    </head>
    <body>
        <?php
            // defining an associative array using named indices
            $assoc = array("first_name" => "Jenu", "last_name" => "Patel");
        ?>

        <!-- Accessing elements of an associative array -->
        <?php echo $assoc["first_name"]; ?><br />
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?>

        <!-- Replacing an element of an associative array -->
        <?php $assoc["first_name"] = "Jack"; ?><br />
        <?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?>

        <!-- Elements of an associative array cannot be
            accessed with numbers, unless explicitly indexed by numbers -->
        <?php echo $assoc[0]; ?><br /><!-- Returns no output -->

        <!-- An associative array indexed by
            numbers is similar to a regular array -->
        <?php $numbers = array(4, 8, 15, 16, 23, 42); ?>
        <?php
            $numbers = array(0 => 4, 1 => 8, 2 => 15,
                        3 => 16, 4 => 23, 5 => 42);
        ?>
        <?php echo $numbers[0]; ?>
    </body>
</html>
