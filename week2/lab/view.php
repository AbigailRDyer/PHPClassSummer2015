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
            include './dbConn.php';
            include './functions.php';
            
            $db = getDatabase();
            
            $stmt = $db->prepare("SELECT * FROM actors");
            $results = array();            
            if ($stmt->execute() && $stmt->rowCount() > 0) {
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC); 
            }
            
        ?>
        
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
        <button onclick="window.location.href='add.php'">Enter Data</button>
    </body>
</html>
