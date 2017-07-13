<?php
 include '../includes/header.php';
 include '../includes/dbconfig.php';
?>
<body>

<div class="row">

<div class="col s12 l2">
	<ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">Featured Stores<i class="material-icons ">arrow_drop_down</i></div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Amazon Kindle <i class="material-icons ">arrow_drop_down</i></div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Used Books<i class="material-icons ">arrow_drop_down</i></div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
  <br>
 <h5> Show Results For</h5>
 <br>
<hr>
 <p>Books</p>
<!-- <ul>
 	<li><a href="#">Thrillers (100)</a></li>
 	<li><a href="#">Sci-fi (1,928)</a></li>
 	<li><a href="#">Accounts (67)</a></li>

 </ul>-->
 <ul>
  <?php
  
  $sql = 'SELECT count(book_id) as c, sub_name, sub_id from books natural join sub_category GROUP by sub_id';
  
   if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo "<li><a href='#'>".$row['sub_name']."(".$row['c'].")"."</a></li>";
    
    }
   }

 ?>
 </ul>

<hr>
  <br>

<h5>Refine By</h5>

<p style="font-size: 0.8em"><b> Amazon Prime </b><br>
      <input type="checkbox" id="test5" />
      <label for="test5"><img src="../images/prime.gif"></label>
    </p>
<br>
    <p style="font-size: 0.8em"><b> Fulfilled by Amazon </b><br>
      <input type="checkbox" id="test6" />
      <label for="test6"><img src="../images/fulfilled.png"></label>
    </p>
    <br>

    <p style="font-size: 0.8em"><b> English and Indian Languages </b><br>
    <ul>

    <!-- <li> 
     <input type="checkbox" id="test7" />
      <label for="test7">English</label><br>
      </li>
      <li>
      <input type="checkbox" id="test8" />
      <label for="test8">Hindi</label>
      </li>-->

      <?php
      $sql = "SELECT count(book_id) as c,lang_id, language from Language NATURAL join books GROUP BY Language";

      if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo"
      <li>
      <input type='checkbox' id=l".$row['lang_id']." />
      <label for=l".$row['lang_id'].">".$row['language']."(".$row['c'].")</label><br>
      </li>
      ";
    
    }
   }


      ?>

      </ul>
    </p>
<br>
     <p style="font-size: 0.8em"><b> Author </b><br>
     <ul>
    <!-- <li>
      <input type="checkbox" id="test9" />
      <label for="test9">Jude Hardin</label><br>
      </li>
      <li>
      <input type="checkbox" id="test10" />
      <label for="test10">Amish Tripathi</label>
      </li>
      <li>
         <input type="checkbox" id="test11" />
      <label for="test11">James Patterson</label>
      </li>
      <li>
          <input type="checkbox" id="test12" />
      <label for="test12">John Grisham</label> 
      </li>
    </p>-->
    <?php
    
    $sql= "SELECT COUNT(book_id) as c, author_name,author_id, book_id from author NATURAL JOIN books GROUP by author_name";

    if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo"
       <li>
      <input type='checkbox' id=a".$row['author_id']." />
      <label for=a".$row['author_id'].">".$row['author_name']."(".$row['c'].")</label><br>
      </li>
      ";
    
    }
   }

    ?>
    </ul>
    <br>

    <p style="font-size: 0.8em"><b> Price </b>
    <ul>
    <!--
    	<li><a href="#">Under &#8377 100</a></li>
      	<li><a href="#">&#8377 100 - &#8377 200 </a></li>
    	<li><a href="#">&#8377 200 - &#8377 500</a></li>
    	<li><a href="#">&#8377 500 - &#8377 1000</a></li>
    	<li><a href="#">Over &#8377 1000</a></li>
    -->
<?php
    $sql ="SELECT COUNT(book_id) as c , starting_price, ending_price , price_id from price_range NATURAL JOIN books GROUP BY price_id";

if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo"
       <li>
     <a href='#'> &#8377 ".$row['starting_price']."- &#8377 ".$row['ending_price']." (".$row['c'].")
      </li>
      ";
    
    }
   }

?>
    </ul>    	
    </p><br>

     <p style="font-size: 0.8em"><b> Seller </b>
    <ul>
    <!--	<li>
    		<input type="checkbox" id="test13" />
      <label for="test14">Ted Publications</label><br>
    	</li>
      	<li>
      <input type="checkbox" id="test14" />
      <label for="test14">Penguin Publications</label><br>		
      	</li>-->

        <?php
          $sql ="SELECT COUNT(book_id) as c, company_id ,company_name from company NATURAL join books GROUP by company_id";

           if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo"
       <li>
      <input type='checkbox' id=c".$row['company_id']." />
      <label for=c".$row['company_id'].">".$row['company_name']."(".$row['c'].")</label><br>
      </li>
      ";
    
    }
   }

        ?>
    	
    
    </ul>
    </p>
        
</div>


<div class="col s12 l10 offset-2" id="books">
<br>

<!-- books start
<div class="row">


 <div class="col s11 l3">
 <a href="#"><img src="../images/fresh_1.jpg" style="width: 95%;"></a>
 </div>

 <div class="col s12 l8">
 <br>
 <h5><a href="#">Sita - Warrior of Mithila (Book 2- Ram Chandra Series): An adventure thriller that follows Lady Sita’s journey, set in mythological times</a></h5>
 <p>by <a href="#">Amish Tripathi</a></p>
 <p>Paperback<br>
  &#8377 166<br>
  Get it by <span style="color: green">12th July 2017</span>
 </p>
 </div>

</div>
<hr>
<br><br>
<div class="row">


 <div class="col s11 l3">
 <a href="#"><img src="../images/fresh_2.jpg" style="width: 95%;"></a>
 </div>

 <div class="col s12 l8">
 <br>
 <h5><a href="#">Sita - Warrior of Mithila (Book 2- Ram Chandra Series): An adventure thriller that follows Lady Sita’s journey, set in mythological times</a></h5>
 <p>by <a href="#">Amish Tripathi</a></p>
 <p>Paperback<br>
  &#8377 166<br>
  Get it by <span style="color: green">12th July 2017</span>
 </p>
 </div>

</div>
<hr>
<br><br>
<div class="row">


 <div class="col s11 l3">
 <a href="#"><img src="../images/fresh_3.jpg" style="width: 95%;"></a>
 </div>

 <div class="col s12 l8">
 <br>
 <h5><a href="#">Sita - Warrior of Mithila (Book 2- Ram Chandra Series): An adventure thriller that follows Lady Sita’s journey, set in mythological times</a></h5>
 <p>by <a href="#">Amish Tripathi</a></p>
 <p>Paperback<br>
  &#8377 166<br>
  Get it by <span style="color: green">12th July 2017</span>
 </p>
 </div>
</div>
-->
<hr>
<br><br>

<div class="row">
<center>
  <a class="waves-effect waves-light btn" id="btn_books" style="background-color: #FF9900;">Load More</a>
</center>
</div>

</div>
</p>
</div>
</div>
</body>
    <script src="../js/books_page_main.js"></script>


<?php
 include '../includes/footer.php';
?>






