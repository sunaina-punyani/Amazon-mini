<?php
 include '../includes/dbconfig.php';

 $sql ="Select * from books";
 if($result = mysqli_query($dbc,$sql)){

 	    $emparray = array();

 	while($row = mysqli_fetch_assoc($result)){
         $emparray[] = $row;
 	}

   $fp = fopen('../json/books.json', 'w');
    fwrite($fp, json_encode($emparray));
    fclose($fp);

    mysqli_close($connection);

 }
?>