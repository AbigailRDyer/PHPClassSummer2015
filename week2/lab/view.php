<!DOCTYPE html>

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
            
            $db = getDatabase();
//select all from actors table
            $stmt = $db->prepare("SELECT * FROM actors");
            $results = array();            
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            }
            
        ?>
<!--table to display the database data-->
        <table cellspacing="15">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Date of Birth</th>
                    <th>Height</th>
                </tr>
            </thead>
        <?php foreach($results as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['firstname']; ?></td>
                <td><?php echo $row['lastname']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['height']; ?></td>             
            </tr>
        <?php endforeach; ?>
        </table>
        <br/>
        <br/>
<!--button to return to data entry-->
        <button onclick="window.location.href='add.php'">Enter Data</button>
    </body>
</html>
