
<?php
include '../includes/authenticate.php';
include '../includes/dbconfig.php';

if (!empty($_GET['id'])) {
		$id = mysqli_real_escape_string($dbc, trim($_GET['id']));
	}
	if (!empty($_GET['key'])) {
		$key = mysqli_real_escape_string($dbc, trim($_GET['key']));
	}

if (isset($id) && isset($key)) {

	$query = "Update user set verified= 1 where user_id='$id'";
    $result = mysqli_query($dbc, $query);

    $sql = "select * from user where user_id = '$id'";
    $res = mysqli_query($dbc, $sql);

    if($res){
        $row = mysqli_fetch_array($res);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['name'] = $row['name'];
      
        header('Location: http://localhost:8888/Amazon-mini/public/sign-up.php');


     }
    else{
    	echo "Something wrong";
    }


}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 

   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!-- Change the "src" attribute according to your installation path -->
<script src="vendor/jquery/dist/jquery.min.js"></script>


   <link rel="stylesheet" type="text/css" href="style.css">



   <script type="text/javascript" src="../js/scripts.js"></script>
</head>
<body>
<div class="logo">
 <center>
 	<img src="../images/amazon.jpg" style="width: 250px">
 </center>
</div>
<br><br>
<center>
	<form method="post" action="<?PHP $_SERVER['SELF_PHP'] ?>">
		<a class="waves-effect waves-light btn" style="background-color:#FF9900">Proceed</a>

	</form>
	</center>
	<br><br>
</body>
<?php
include '../includes/footer.php';
?>