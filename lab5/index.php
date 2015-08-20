<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require './functions/dbConn.php';
            require './functions/functions.php';
            
            $results = '';
            $isValid = true;
            $textbox = '';
        ?>
        
        <center>
            <h2>Enter a Website</h2>
            <form class="form-group" action="index.php" method="post">
                <input type="text" name="site" value="<?php echo $textbox ?>" placeholder="http://">
                <input class="btn btn-default" type="submit" value="Enter New" name="submit" />
            </form>
        
        
        <?php
            if (isPostRequest()) {
                
                $site1 = filter_input(INPUT_POST, 'site');
                
                if ( filter_var($site1, FILTER_VALIDATE_URL) === false ) {
                    $isValid = false;
                    $textbox = filter_input(INPUT_POST, 'site') ?>
                    <b><h3><?php echo "Must enter valid website"; ?></h3></b>
                    
                <?php }
                if ($isValid) {
                    $site = filter_input(INPUT_POST, 'site');
                
                
                $db = getDatabase();
                
                $stmt = $db->prepare("INSERT INTO sites SET site = :site, date = NOW()");
            
                $binds = array(
                    ":site" => $site);
            
                if ($stmt->execute($binds)) {   
                $results = 'New Data Added';
                ?>
                <center><b><h3><?php echo $results; ?></h3></b></center>
                <?php }} 

//curl
                include 'curl.php';
        
//REGEX TIME!
                include 'regex.php';
                
                
                $site_id = $db->lastInsertId();
                
                $stmt = $db->prepare("INSERT INTO sitelinks SET link = :link, site_id = :site_id");
            
                foreach ($links as $link) {
                        $binds = array( 
                            ":link" => $link, ":site_id" => $site_id); 
                        $stmt->execute($binds);
                    } 
            
            }
        ?>
        
        
        <br />
        <button class="btn btn-default" onclick="window.location.href='view.php'">View All</button>
        </center>
        
    </body>
</html>
