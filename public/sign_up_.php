<?php
 /*$server = "localhost";
 $user = "root";
 $pass = "";
 $database = "amazon_mini";
 $port = 8889;
$conn = mysqli_init();
$success = mysqli_real_connect( $conn, $server, $user, $pass, $database, $port);


if($success)
 echo "All okay";
else
  echo "Not okay";

//$errmsg=' ';

//if(!isset($_SESSION['user_id']))//what does this mean
//{
  //user is not logged in

  if(isset($_POST['btn_login']))
  {
    //grab the data

  /* $name= mysqli_real_escape_string($dbc, trim($_POST['name']));
    $mob_num=mysqli_real_escape_string($dbc,trim($_POST['mobile']));
    $email=mysqli_real_escape_string($dbc,trim($_POST['email']));
    $password1= mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2= mysqli_real_escape_string($dbc, trim($_POST['password2']));

    $name = $_POST['name'];
$mob_num = $_POST['mobile'];
 $email = $_POST['email'];
 $hash = $_POST['password1'];
   /* if (!empty($name) && !empty($mob_num) && !empty($email) && !empty($password1) && !empty($password2)) {
        // make sure someone isn't registered with same email
        $query = "SELECT user_id FROM user WHERE email_id = '$email'";
        $result = mysqli_query($dbc, $query);
        if (mysqli_num_rows($result) == 0) {
          // email is unique
          if ($password1 != $password2) // passwords don't match
            $err_msg = 'The passwords don\'t match.';
          else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // email is invalid
            $err_msg = 'The email provided is invalid.';
          else if (!validate_contact($mob_num)) // contact is invalid
            $err_msg = 'The contact number provided is invalid.';
          else if (!validate_name($name)) // name is invalid
            $err_msg = "Invalid name! Is your name really $name?";

          else {
           // $name = ucfirst(strtolower($name));
            //$hash = password_hash($password1, PASSWORD_BCRYPT);

            // insert data into database
            $query = "INSERT INTO user(name,mobile_num,email_id, password,verified,cart_items,grand_total)"."VALUES ('$name','$mob_num','$email', '$hash',0,0,0)";
            $res = mysqli_query($success,$query);
            if($res)
              echo "Account created";
            else
              echo "Error occured";
         }
        }
        else {
          // email exits. ask user for a different one.
          $err_msg = 'The email id has been used. Choose another one. <a href="forgot.php">Forgot password?</a>';
        }
      }
      else {
        $err_msg = 'Please fill the required fields.';
      }*/
 // }
//}*/


/*function validate_contact($contact) {
    if (preg_match('/^[789]\d{9}$/', $contact))
      return true;

    return false;
  }

function validate_name($name) {
    return preg_match("/^[a-zA-Z'-]+$/", $name);
  }*/


  include '../includes/dbconfig.php';

if(!isset($_SESSION['user_id'])){

  if(isset($_POST['btn_login'])){


 
    $first = mysqli_real_escape_string($dbc, trim($_POST['name']));
    $mobile = mysqli_real_escape_string($dbc, trim($_POST['mobile']));
    $email = mysqli_real_escape_string($dbc, trim($_POST['email']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $pass = password_hash($password1, PASSWORD_BCRYPT);
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    $cart = 0;
    $grand = 0;
    $verified =0;


     $query = "SELECT user_id FROM user WHERE email_id = '$email'";
        $result = mysqli_query($dbc, $query);

 $query2 = "SELECT user_id FROM user WHERE mobile_num = '$mobile'";
        $result2 = mysqli_query($dbc, $query2);



if (mysqli_num_rows($result) == 0 && mysqli_num_rows($result2) == 0) {

if ($password1 != $password2) {// passwords don't match
            echo 'The passwords don\'t match.';
          }
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {// email is invalid
           echo 'The email provided is invalid.';
          }


else{
  $sql = "Insert into user(name, mobile_num, email_id, password,verified,cart_items,grand_total)"."values('$first','$mobile','$email','$pass','$verified','$cart','$grand')";
           $res = mysqli_query($dbc,$sql);  
            if($res)
              echo "Account created";
            else
              echo "Error occured";
    }

   }
   else{
    echo "Already registered";
   }         


  }

//if (!empty($name) && !empty($mob_num) && !empty($email) && !empty($password1) && !empty($password2)) {
        // make sure someone isn't registered with same email
     /*   $query = "SELECT user_id FROM user WHERE email_id = '$email'";
        $result = mysqli_query($dbc, $query);

        if (mysqli_num_rows($result) == 0) {
          // email is unique
          if ($password1 != $password2) // passwords don't match
            $err_msg = 'The passwords don\'t match.';
          else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // email is invalid
            $err_msg = 'The email provided is invalid.';
          else if (!validate_contact($mob_num)) // contact is invalid
            $err_msg = 'The contact number provided is invalid.';
          else if (!validate_name($name)) // name is invalid
            $err_msg = "Invalid name! Is your name really $name?";

          else {*/
           // $name = ucfirst(strtolower($name));
            //$hash = password_hash($password1, PASSWORD_BCRYPT);

            // insert data into database
         
         //}
        //}
       
 // }
}

function validate_contact($contact) {
    if (preg_match('/^[789]\d{9}$/', $contact))
      return true;

    return false;
  }

function validate_name($name) {
    return preg_match("/^[a-zA-Z'-]+$/", $name);
  }


?>