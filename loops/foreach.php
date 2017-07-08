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
        <title>Loops: foreach</title>
    </head>
    <body>
        <ul>
            <?php // stepping through an array using foreach
                $ages = array(4, 8, 15, 16, 23, 42);

                foreach ($ages as $age) {
                    echo "<li>Age: {$age}</li>";
                }
            ?>
        </ul>
        <ul>
            <?php   // stepping through an associative array using foreach
                $person = array(
                    "first_name" => "Jenu",
                    "last_name" => "Patel",
                    "address" => "1991 Main Street",
                    "city" => "Houston",
                    "state" => "TX",
                    "zip_code" => "77016"
                );

                foreach ($person as $attribute => $data) {
                    $attr_nice = ucwords(str_replace("_", " ", $attribute));
                    echo "<li>{$attr_nice}: {$data}</li>";
                }
            ?>
        </ul>

        <ul>
            <?php
                $prices = array(
                    "Brand New Computer" => 2000,
                    "1 month of Lynda.com" => 25,
                    "Learning PHP" => null
                );

                foreach($prices as $item => $price) {
                    echo "<li>{$item}: ";
                    if (is_int($price)) {
                        echo "$" . $price;
                    } else {
                        echo "priceless";
                    }
                    echo "</li>";
                }
            ?>
        </ul>
    </body>
</html>
