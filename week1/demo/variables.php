<!DOCTYPE html>
<?php 
    $myvar = 'hello'; 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo 'My Page Title, '.$myvar; ?></title>
    </head>
    <body>

        <?php
            $randNumber = rand(1,10);
            
            echo 'My number is '.$randNumber;
        ?>
    </body>
</html>
