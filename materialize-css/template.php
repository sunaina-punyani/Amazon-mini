<!DOCTYPE html>
<html>
<head>
  <title>Materialize Demo</title>

  <!-- Compiled and minified CSS -->

   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">

   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 

   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script> 

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">

   <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>



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

          <form class="col s12" method="post">
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' />
                <label for='email'>Enter your email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' />
                <label for='password'>Enter your password</label>
              </div>
              <label style='float: right;'>
                        <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                     </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' id="submit" name='btn_login' class='col s12 btn btn-large waves-effect'>Login</button>
              </div>
            </center>
          </form>
        </div>
      </div>
      <a id="acc" style="color: #FF9900" href="sign-up.php">Create a new account</a>
    </center>
    </main>

<!-- footer -->
  <footer style="background-color:#EEEBE6"  class="page-footer">

          <div class="container" style="">
            <div class="row">
              <div class="col l4 s4">
              <center>
                <h5 >Connect With Us</h5>
                <ul>
                  <li><a href="#">Facebook</a></li>
                  <li><a href="#">Instagram</a></li>
                  <li><a href="#">Twitter</a></li>
                </ul>
                </center>
              </div>

              <div class="col l4  s4">
              <center>
                <h5 class="">Links</h5>
                <ul>
             
                  <li><a class=" text-lighten-3" href="#!">About Us</a></li>
                  <li><a class=" text-lighten-3" href="#!">Contact Us</a></li>
                </ul>
                </center>
              </div>

              <div class="col l4  s4">
              <center>
              <h5 class="">Sell Something</h5>
              <ul>
                <li><a href="#">Sell On Amazon</a></li>
              </ul>
              </center>
              </div>



            </div>
          </div>

          <div style="background-color: #FF9900" class="footer-copyright">
            <div class="container" id="copy">
            © 2014 Copyright Text
           
            </div>
             <a class="grey-text text-lighten-4" id="links" style="float: right" href="index.php">Go to Home Page</a>
          </div>

        </footer>

</body>
</html>