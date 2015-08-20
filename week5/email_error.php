<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include './functions/until.php';
        
        $email = filter_input(INPUT_POST, 'email');
        $isValid = true;
        
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                $isValid = false;
        }
        ?>
        
        <?php if(isPostRequest() && !$isValid) : ?>
        <h1>Email is invalid</h1>
        <?php endif; ?>
        
        <form method="post" action="#">
 
            Email<input type="text" name="email" value="" />
            <input type="submit" value="submit" />
           

            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>