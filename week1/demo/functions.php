<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $randColor = strtoupper(dechex(rand(0x000000, 0xFFFFFF)));
            
            $color = dechex(rand(0,10000000));
            
            echo '#'.$randColor
        ?>
    </body>
</html>
