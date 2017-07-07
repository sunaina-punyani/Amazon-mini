<?php
include '../includes/dbconfig.php';

if(isset($_POST['btn-login'])){
	$name = $_POST['name'];

$sql ="INSERT INTO user(name) VALUES ('$name')";
      $res = mysqli_query($dbc,$sql);
	
	if($res)
		echo "Data entered";
	else
		echo "Error occured";

}
}
?>