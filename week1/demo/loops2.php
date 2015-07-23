<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    
        <table border="1">
        <?php /* random table generator*/
            for($tr = 1; $tr <= rand(1,100); $tr++):?>
            <tr> 
                <?php for($td = 1; $td <= 50; $td++):?>
                <td>
                    <?php echo $td; ?>
                </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        </table>
        
    </body>
</html>
