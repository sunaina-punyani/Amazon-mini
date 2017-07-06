<?php 
//authenticate
include '../includes/authenticate.php';

//database connection

include '../includes/dbconfig.php';

$errmsg=' ';

if(!isset($_SESSION['user_id']))
{
  //user is not logged in

  if(isset($_POST['btn-login']))
  {
    //grab the data

    $name= mysqli_real_escape_string($dbc, trim($_POST['name']));
    $mob_num=mysqli_real_escape_string($dbc,trim($_POST['mobile']));
    $email=mysqli_real_escape_string($dbc,trim($_POST['email']));
    $password1= mysqli_real_escape_string($dbc, trim($_POST['password']));
    $password2= mysqli_real_escape_string($dbc, trim($_POST['password2']));

    if (!empty($name) && !empty($mob_num) && !empty($email) && !empty($password1) && !empty($password2)) {
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
            $name = ucfirst(strtolower($name));
            $hash = password_hash($password1, PASSWORD_BCRYPT);

            // insert data into database
            $query = "INSERT INTO user (name,mobile_num,email_id, password,verified) VALUES ('$name','$mob_num','$email', '$hash',0)";
          }
        }
        else {
          // email exits. ask user for a different one.
          $err_msg = 'The email id has been used. Choose another one. <a href="forgot.php">Forgot password?</a>';
        }
      }
      else {
        $err_msg = 'Please fill the required fields.';
      }
  }
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
<!DOCTYPE html>
<html>
<head>
	<title>Amazon Mini</title>

	<!-- Compiled and minified CSS -->

   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 

   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

<!-- Change the "src" attribute according to your installation path -->
<script src="vendor/jquery/dist/jquery.min.js"></script>


   <link rel="stylesheet" type="text/css" href="../css/style.css">



   <script type="text/javascript" src="../js/scripts.js"></script>
</head>
<body>

   <div class="section"></div>
  <main>
    <center>

      <img  style="width: 250px;" src="../images/amazon.jpg" />
     

      <div class="section"></div>

      <div class="container">
        <div class="z-depth-1 #F5F2ED lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

          <form class="col s12" method="POST" action="<?PHP $_SERVER['PHP_SELF'] ?>" name="registration">

            <div class='row'>
              <div  class='input-field col s12'>
              <input class="validate" type='text' name='name' id='name' value=" <?php if(isset($name)) echo $name; ?>" />
                <label for='name'>Enter your Name</label>
              </div>
            </div>

             <div class='row'>
              <div  class='input-field col s12'>
              <input class="validate" type='number' name='mobile' id='mobile' value="<?php if(isset($mob_num)) echo $mob_num;?>" />
                <label for='mobile'>Enter your Mobile Number</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' value="<?php if(isset($email)) echo $email; ?>" />
                <label for='email'>Enter your email</label>
              </div>
              <input type="checkbox" >
              <label style='float: right;'>
                        <label class='pink-text'><b>Send me a mail</b></label>
                     </label>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
             
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password2' id='passwordre' />
                <label for='password'>Confirm password</label>
              </div>
              <label style='float: right;' id="recheck">
                        <label class='pink-text'></label>
                        </label>
              
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' id="submit" name='btn_login' class='col s12 btn btn-large waves-effect' onclick="validateForm();">Submit</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a id="acc" style="color: #FF9900" href="template.php">Already have an account?</a>
    </center>
    </main>




   

<!-- footer -->
  <?php
   include '../includes/footer.php';
  ?>

</body>
</html>