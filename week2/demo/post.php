<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $dataoneVal = filter_input(INPUT_POST, 'dataone');
        $datatwoVal = filter_input(INPUT_POST, 'datatwo');
        echo $dataoneVal;
        echo $datatwoVal;
                
        ?>
        <form method="post" action="#">
            
           Data one <input type="text" value="" name="dataone" />
           <br/>
           Data two <input type="text" value="" name="datatwo" />
           <br/>
           
           <input type="submit" value="Submit" />
        </form>
    </body>
</html>
