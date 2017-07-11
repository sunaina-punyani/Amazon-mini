<?php

  // authenticate
  require_once(__DIR__ . '/../includes/authenticate.php');

  // connect to database
  require_once(__DIR__ . '/../includes/dbconfig.php');

  $display_msg = "<div class='container-fluid'><h1>Invalid Activation!</h1><p>Sorry, it seems you have an invalid activation link. Check the link sent to you or try again.<br>If the problem persists, mail us at regdesk.vjti@gmail.com.</p></div>";

  if (!empty($_GET['id'])) {
    $id = mysqli_real_escape_string($dbc, trim($_GET['id']));
  }
  if (!empty($_GET['key'])) {
    $key = mysqli_real_escape_string($dbc, trim($_GET['key']));
  }
  if (isset($id) && isset($key)) {

    // get the first and last name of user
    $query = "SELECT name from user WHERE user_id = '$id'";
    $result = mysqli_query($dbc, $query);
    if (mysqli_num_rows($result) == 1) {
      $row = mysqli_fetch_array($result);
      $db_key = md5(sha1($row['name']));
      if ($key == $db_key) {
        // account verified
        $_SESSION['user_id'] = $id;
        $_SESSION['name'] = $row['name'];

        $query = "UPDATE user SET verified = 1 WHERE user_id = $id LIMIT 1";
        mysqli_query($dbc, $query);
        $display_msg = '<div class="container-fluid"><h1>Congatulations!</h1><p><b>Your account is activated.</b><br>Go explore! <a href="index.php">Amazon-mini</a></p></div>';
      }
    }
  }

  // render header
  $title = 'Activate';
  require_once(__DIR__ . '/../includes/header.php');

  echo $display_msg;
?>

  
  

<?php 
  require_once(__DIR__ . '/../includes/footer.php');
  
?>
