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

<div class="col s12 l10 offset-2">
<br>

<div class="row">

<center>
<!--
<div class="col s12 l2">
<a href="#">
<img src="../images/lit.png" style="margin-left: 5%; margin-right: 10%; width: 70%; ">
<p>Literature</a></p>
</div>

<div class="col s12 l2">
<a href="#">
<img src="../images/romance.png" style="margin-left: 5%; margin-right: 10%; width: 70%; ">
<p>Romance</a></p>
</div>
<div class="col s12 l2">
<a href="#">
<img src="../images/crime.png" style="margin-left: 5%; margin-right: 10%; width: 70%; ">
<p>Crime</a></p>
</div>
<div class="col s12 l2">
<a href="#">
<img src="../images/children.png" style="margin-left: 5%; margin-right: 10%;width: 70%;  ">
<p>Children's Books</a></p>
</div>
<div class="col s12 l2">
<a href="#">
<img src="../images/sci-fi.png" style="margin-left: 5%; margin-right: 5%; width: 70%; ">
<p>Sci-Fi</a></p>
</div>
<div class="col s12 l2">
<a href="#">
<img src="../images/bussiness.png" style="margin-left: 5%; margin-right: 5%; width: 70%; ">
<p>Business &amp; Economics</a></p>
</div>-->

<?php 
  $sql = "SELECT sub_id, sub_name from sub_category where sub_id in (SELECT sub_id from books) limit 6";
  if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
      echo "
    <div class='col s12 l2'>
    <a href='#'>
    <img src='../images/".$row['sub_id'].".png' style='margin-left: 5%; margin-right: 10%; width: 70%; '>
    <p>".$row['sub_name']."</a></p>
    </div>
  ";
    }
  }


?>
</center>

</div>

<br><br>

 <div class="row">
  <div class="col s12 l3">
  <a href="#">
  <img src="../images/new_releases.png" style="width: 95%;"></a>
  </div>
    <div class="col s12 l3">
    <a href="#">
   <img src="../images/deals.jpeg" style="width: 95%;">   
   </a>
  </div>	
    <div class="col s12 l3">
    <a href="#">
    <img src="../images/exclusive.png" style="width: 95%;">  
    </a>
  </div>	
    <div class="col s12 l3">
    <a href="#">
      <img src="../images/scholastic.png" style="width: 95%;">
      </a>
  </div>		
  
 </div>

 <br>

 <div class="row">
 
 <h5>Related to items you've viewed</h5>
 <hr>
 <br>
 <center>
 <!--
 <div class="col s12 l3">
 	<a href="#">
 	<img src="../images_books/meluha_mrutunjay_book_11.jpg" style="width: 70%;">
 	<p style="font-size: 0.8em">Meluha ka Mrutunjay</p> 
 	</a>
 		<p>Amish</p><img src="../images/prime.gif">
 </div>
 <div class="col s12 l3">
 		<a href="#">
 	<img src="../images_books/the_whistler_book_12.jpg" style="width: 70%;">
 	<p style="font-size: 0.8em">The Whistler</p>
 	</a>
 		<p>John Grisham</p>
 </div>
  <div class="col s12 l3">
 		<a href="#">
 	<img src="../images_books/sita_warrior_book_3.jpg" style="width: 70%;">
 	<p style="font-size: 0.8em">Sita- Warrior Of Mithila </p>
 	</a>
 		<p>Amish</p> <img src="../images/prime.gif">
 </div>
  <div class="col s12 l3">
 <a href="#">
 	<img src="../images_books/the_hostage_book_4.jpg" style="width: 70%;">
 	<p style="font-size: 0.8em">The Hostage </p>
 	</a>
 		<p>James Patterson</p> <img src="../images/prime.gif">	
 </div>-->

 <?php
   $sql = "SELECT * FROM books NATURAL JOIN author ORDER BY RAND() LIMIT 4";
   if($result = mysqli_query($dbc,$sql)){
    while($row = mysqli_fetch_array($result)){
     echo "
       <div class='col s12 l3'>
        <a href='book_open.php?id=".$row['book_id']."'>
      <img src='../images_books/".$row['book_id'].".jpg' style='width: 70%; height: 60%;'>  
      <p style='font-size: 0.8em'>".$row['book_name']."</p> 
      </a>
      <p>".$row['author_name']."</p>
 </div>
     ";
     
    }
   }
 ?>

 </center>
 </div>

<hr><br>

<div class="row">
<div class="col s12 l6">
	<a href="#"><img src="../images/sale.jpg" style="width: 90%;"></a>
</div>

<div class="col s12 l6">
	<a href="#"><img src="../images/exam.jpg" style="width: 90%;"></a>	
</div>
	
</div>

<hr><br>

 <div class="row">
 <div class="col s12 l12">
 	<h6 class="orange-text">Explore and Buy Books at Amazon India</h6>

 	<p style="font-size: 0.8em">
 		Amazon.in offers you over 10 million titles across categories such as Children’s Books, Business & Economics, Indian Writing and Literature & Fiction.</p>
<p style="font-size: 0.8em">
Reading books is the favourite pastime of many people. If you’re bitten by the book-bug too, then there is a massive collection of books for you to read. From bestsellers to new & future releases, the choices are exhaustive when you <a href="#">shop online</a> at India's Largest Bookstore.</p>
<p style="font-size: 0.8em">
From books for dummies, to textbooks for students, there are a wide variety of books. You can explore the young adults books store if you’re looking to gift a nice book to a teenager, where you can find books from the best-selling series.</p>
<p style="font-size: 0.8em">
Innumerable books are divided under various categories like action & adventure, business & economics, comics & mangas, crime, thriller & mystery, fiction, humour, and romance. You can browse by genre when you buy online making it more convenient for you to narrow down your choices. Then there are biographies and true accounts bestsellers as well. These books are available in different formats like hardcover, paperback, and board book.</p>
<p style="font-size: 0.8em">
Gone are the days, when books were always hand-held. In this digital age, there are Kindle eBooks which you can read on your Amazon Kindle. Some selected range of free eBooks are present if you want to download them on to your device. Apart from that, there are audiobooks, which can be used by those who prefer listening to reading. This is especially helpful for students who want to listen to recorded lectures by reputed professors, and also to those who can’t read.</p>
<p style="font-size: 0.8em">
When you shop online, there are hot pre-orders. You can easily secure that book you’ve always wanted to read, as the book will be delivered at your doorstep soon after its official release. You also have easy access to most of the new arrivals, with book descriptions that help you get an idea about the book without spoilers.</p>
<p style="font-size: 0.8em">
You can also use the Search Inside!™ feature to look inside the book and browse through a few pages of the book, just as you would at a bookstore. Read book reviews written by Amazon customers, and review your favourite books too. Amazon.in also offers you personalised recommendations based on your browsing and purchasing history to help you discover new books that might interest you. So, whether you are looking to buy a story book for children; study guides for engineering, law or medicine; Biographies or books on Computing & Digital Media; Amazon.in has a book for you.</p>
<p style="font-size: 0.8em">
You can now also buy and <a href="#">sell</a> used books. Explore the <a href="#"> Used Books</a> Store</p>

 </div>
 	

 </div>

</div>

</div>	


<?php
include '../includes/footer.php';
?>