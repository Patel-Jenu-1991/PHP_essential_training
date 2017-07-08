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
        <title>Type Juggling and Type Casting</title>
    </head>
    <body>
        <h2>Type Juggling</h2>
        <?php $count = "2 cats"; ?>
        <p>Type: <?php echo gettype($count); ?></p>

        <?php $count += 3; ?>
        <p>Type: <?php echo gettype($count); ?></p>

        <?php $cats = "I have" . $count . " cats."; ?>
        <p>Cats: <?php echo gettype($cats); ?></p>

        <hr />

        <h2>Type Casting</h2>
        <?php settype($count, "integer"); ?>
        <p>count: <?php echo gettype($count); ?></p>

        <?php $count2 = (string) $count; ?>
        <p>count: <?php echo gettype($count); ?></p>
        <p>count2: <?php echo gettype($count2); ?></p>
        
        <?php $test1 = 3; ?>
        <?php $test2 = 3; ?>
        <?php settype($test1, "string"); ?>
        <?php (string) $test2; ?>
        <p>test1: <?php echo gettype($test1); ?></p>
        <p>test2: <?php echo gettype($test2); ?></p>
    </body>
</html>
