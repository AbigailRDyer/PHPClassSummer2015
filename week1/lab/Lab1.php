<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<!-- start the table -->
        <table cellspacing="0">
        <?php 
// for tr equals 1, and is less than or equal to 10, accumulator (forming the table)
            for($tr = 1; $tr <= 10; $tr++):?>
            <tr> 
                <?php 
// for td equals 1, and is less than or equal to 10, accumulator (forming the table)
                for($td = 1; $td <= 10; $td++):?>
                <td style="background-color: 
//selecting and echoing a random background color for each cell
                    <?php echo "#".$randColor = strtoupper(dechex(rand(0x100000, 0xFFFFFF))); ?>">
                    <?php echo "#".$randColor; ?>
                    <br /><span style="color:#ffffff"><?php echo "#".$randColor; ?>
                </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
<!-- end the table -->
        </table>
        
    </body>
</html>
