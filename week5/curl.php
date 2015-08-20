<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $curl = curl_init();
        
        curl_setopt($curl, CURLOPT_URL, "gforti.com");
        
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        
        $output = curl_exec($curl);
        
        curl_close($curl);
        ?>
        
        <textarea><?php echo  $output; ?></textarea>
    </body>
</html>
