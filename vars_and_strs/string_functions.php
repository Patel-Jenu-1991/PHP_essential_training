<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>String Functions</title>
    </head>
    <body>
        <?php
            $first = "The quick brown fox";
            $second = " jumped over the lazy dog.";

            $third = $first;
            $third .= $second;
            echo "<p>$third</p>";
        ?>
        <br />
        <!-- Convert a string to lower-case characters -->
        <p>Lowercase: <?php echo strtolower($third); ?></p><br />

        <!-- Convert a string to upper-case characters -->
        <p>Uppercase: <?php echo strtoupper($third); ?></p><br />

        <!-- only make the first character to uppercase -->
        <p>Uppercase first: <?php echo ucfirst($third); ?></p><br />

        <!-- make the first character of all the words to uppercase -->
        <p>Uppercase words: <?php echo ucwords($third); ?></p><br />

        <!-- find the length of a string -->
        <p>Length: <?php echo strlen($third); ?></p><br />

        <!-- trim a string for whitespace (beginning and ending) -->
        <p>Trim: <?php echo "A" . trim(" B C D ") . "E"; ?></p><br />

        <!-- Find a string within a string -->
        <p>Find: <?php echo strstr($third, "brown"); ?></p><br />

        <!-- Replace by string within a string, doesn't work -->
        <p>Replace by string:
        <?php
            // str_replace doesn't work unless assigned to a variable
            $new_str = str_replace("quick", "super-fast", $third);
            echo $new_str;
        ?></p><br />

        <!-- Repeating a string -->
        <p>Repeat: <?php echo str_repeat($third, 2); ?></p><br />

        <!-- making a substring from a string -->
        <p>Make substring: <?php echo substr($third, 5, 10); ?></p><br />

        <!-- find the position of a string -->
        <p>Find position: <?php echo strpos($third, "brown"); ?></p><br />

        <!-- find a character within a string -->
        <p>Find Character: <?php echo strchr($third, "z"); ?></p><br />
    </body>
</html>
