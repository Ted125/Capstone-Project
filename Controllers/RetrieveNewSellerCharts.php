<?php

        include_once("Models/Database.php");

        $db = new Database();
        $connection = $db->connect();
        $result = null;
        if($connection){
        $qry = "SELECT DATE_FORMAT(dateAdded, '%M %Y') as date,count(userId) as sellers 
                FROM user_details 
                WHERE userType = 'seller'
                GROUp BY MONTH(dateAdded)
                ORDER BY YEAR(dateAdded)";
        $result = mysqli_query($connection, $qry);
    
        mysqli_close($connection);       
        }else{
        echo 'no connection';
        }       

        while($row = $result->fetch_assoc()){ 
              echo "['".$row['date']."',"; 
              echo $row['sellers']."],";
        }
?>