<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//connecting to the database connection file
        include './dbConn.php';
        $db = getDatabase();
        
//select all from corps table
            $stmt = $db->prepare("SELECT * FROM corps");
            $results = array();
            
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            } ?>
<!--table to display the database data-->
        <table>
            <thead>
                <tr>
                    <th><h3>Companies</h3></th>
                </tr>
            </thead>
         <?php foreach ($results as $row): ?>
                <tr>
                    <td><?php echo $row['corp']; ?></td>
                    <td><a href="read.php?id=<?php echo $row['id']; ?>">Read</a></td>
                    <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>            
                    <td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>            
                </tr>
            <?php endforeach; ?>
            
        </table>
        <br/>
        
        
    </body>
</html>
