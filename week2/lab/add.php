
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//connecting to the database connection file and the fuctions file
            include './dbConn.php';
            include './functions.php';
            
            $results = '';
            
//if data is submitted
            if (isPostRequest()) {
            
            $db = getDatabase();
            
            $stmt = $db->prepare("INSERT INTO actors SET firstname = :firstname, lastname = :lastname, dob = :dob, height = :height");
//linking text box data with database data
            $firstname = filter_input(INPUT_POST, 'firstname');
            $lastname = filter_input(INPUT_POST, 'lastname');
            $dob = filter_input(INPUT_POST, 'dob');
            $height = filter_input(INPUT_POST, 'height');
        
            $binds = array( 
                ":firstname" => $firstname,
                ":lastname" => $lastname,
                ":dob" => $dob,
                ":height" => $height
                    );
            
//displays 'data added' if data is added sucessfully
            if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {   
                $results = 'Data Added';
            }
            }
            
        ?>
        <h1>Favorite Actors</h1>
        <h3>
            <?php echo $results; ?>
        </h3>
        
<!--data entry form-->
        <form method="post" action="#">
            
                First Name: <input type="text" value="" name="firstname" />
                <br />
                Last Name: <input type="text" value="" name="lastname" />
                <br />
                Date of Birth: <input type="date" value="" name="dob" />
                <br />    
                Height: <input type="text" value="" name="height" />
            <br/>
            <br/>
<!--submit data button-->
            <input type="submit" value="Submit" /></form>
            <br/>
<!--link to all data in database table-->
            <button onclick="window.location.href='view.php'">View all Data</button>
    </body>
</html>
