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
                    <th>Corp</th>
                </tr>
            </thead>
        <?php foreach($results as $row): ?>
            <tr>
                <td><?php echo $row['corp']; ?></td>           
            </tr>
        <?php endforeach; ?>
        </table>
        <br/>
        
        
    </body>
</html>
