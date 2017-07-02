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
<!-- Navbar -->


<!-- Dropdown Structure -->


<nav>
  <div class="nav-wrapper" style="background-color:  #023F59" >
  <div class="row">
  <div class= "col s4 l4">
    <a href="#!" class="brand-logo">Logo</a>
</div>

<div class="col s8 l8 offset-12">
      <ul class="hide-on-med-and-down right"> 
      <li>
      <a class="dropdown-button" href="#!" data-activates="dropdown2">
      	<i class="material-icons">arrow_drop_down</i>
      	</a>
      </li>

      <li>
       	<div class="input-field">
          <input id="search" type="search" required>
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>

        </div>
       </li>    

       <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Your Orders<i class="material-icons right">arrow_drop_down</i></a></li> 
       
                       <li><a href="badges.html" >Cateogary</a></li>
                <li><a href="collapsible.html" > <i class="material-icons">shopping_cart</i>
</a></li>
     <li>Added to Cart: 0</li>
            </ul>
            </div>
     
</div>
  </div>
</nav>

<ul id="dropdown1" class="dropdown-content ">
  <li><a href="sign-up.php" class="waves-effect waves-light btn" style="background-color: #FF9900"><p class="black-text" style="margin-top: -3px;" >Sign Up</p></a>
</li>
  <li><a href="#!" class="black-text">Your orders</a></li>
  <li><a href="#!" class="black-text">Your account</a></li>
  <li><a href="#!" class="black-text">Your suggestion</a></li>
</ul>

<ul id="dropdown2" class="dropdown-content ">
  
  <li><a href="#!" class="black-text" style="font-size: 0.7em;">Accessories</a></li>
  <li><a href="#!" class="black-text" style="font-size: 0.7em;">Books</a></li>
  <li><a href="#!" class="black-text" style="font-size: 0.7em;">Electronics</a></li>
</ul>

