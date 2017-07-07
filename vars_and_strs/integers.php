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
        <title>Integers in PHP</title>
    </head>
    <body>
        <?php
            $var1 = 3;
            $var2 = 4;
        ?>
        <p>Basic Math:      <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?></p>
        <p>Absolute Value:   <?php echo abs(0 - 300); ?></p>
        <p>Exponential:      <?php echo pow(2, 8); ?></p>
        <p>Square root:      <?php echo sqrt(100); ?></p>
        <p>Modulo:           <?php echo fmod(20, 7); ?></p>
        <p>Random:           <?php echo rand(); ?></p>
        <p>Random (min, max): <?php echo rand(1, 10); ?></p>
        <hr />
        <h2>Compound Operators in PHP</h2>
        <hr />
        <p>+= : <?php $var2 += 4; echo $var2 ?></p>
        <p>-= : <?php $var2 -= 4; echo $var2 ?></p>
        <p>*= : <?php $var2 *= 3; echo $var2 ?></p>
        <p>/= : <?php $var2 /= 4; echo $var2 ?></p>
        <hr />
        <h2>Implicit conversion in PHP</h2>
        <hr />
        <p><?php echo 1 + "2 houses"; ?></p>
    </body>
</html>
