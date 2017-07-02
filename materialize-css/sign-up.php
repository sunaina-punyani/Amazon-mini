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

          <form class="col s12" method="post"  name="registration">

            <div class='row'>
              <div  class='input-field col s12'>
              <input class="validate" type='email' name='name' id='name' />
                <label for='name'>Enter your Name</label>
              </div>
            </div>

             <div class='row'>
              <div  class='input-field col s12'>
              <input class="validate" type='email' name='mobile' id='mobile' />
                <label for='mobile'>Enter your Mobile Number</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
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
   include 'footer.php';
  ?>

</body>
</html>