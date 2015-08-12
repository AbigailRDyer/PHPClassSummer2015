<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>Forms</h1>
        
        <?php
        $action = filter_input(INPUT_POST, 'action');
        
         include './includes/form1.php';
         include './includes/form2.php';
         
        if ($action === 'submit1') {
            echo 'Submitted form 1';
        }
        
        if ($action === 'submit2') {
            echo 'Submitted form 2';
        }
        
        ?>
    </body>
</html>
