
<?php
   $server = 'localhost';
 $user = 'root';
 $pass = '';
 $database = 'amazon_mini';
 $port = 8889;

$conn = mysqli_init();
$success = mysqli_real_connect( $conn, $server, $user, $pass, $database, $port);

if($success)
	echo "All okay";
else
	echo "Not okay";


  if(isset($_POST['btn_login'])){
    $first = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $cart = 0;
    $grand = 0;
  }
 

  $sql = "Insert into user(name, mobile_num, email_id, password,cart_items,grand_total)"."values('$first','$mobile','$email','$pass','$cart','$grand')";
  $res = mysqli_query($conn,$sql);  

  if($res)
  	echo "All okay";
  else
  	echo "Not okay";
  

   
?>