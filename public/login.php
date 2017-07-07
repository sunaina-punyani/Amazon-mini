<?php
/*
//connect to database
include '../includes/dbconfig.php';

//if the user isnt logged in try to log in

if(!isset($_SESSION['user_id'])){
	
	//if the user tried to login

	if(isset($_POST['submit']))
	{
		//grab the login data entered by the user

		$user_email=mysqli_real_escape_string($dbc,trim($_POST['email']));
		$user_password=mysqli_real_escape_string($dbc,trim($_POST['password']));

		//query the database if the email and password are not empty

		if(!empty($user_email) && !empty($user_password))
		{
			//look up email and password in the database
			$query="SELECT user_id,name,mobile_num,password,cart_items,grand_total,verified from user where email_id='$user_email'";
			$result=mysqli_query($dbc,$query);

			if(mysqli_num_rows($result)==1)
			{
				$row=mysqli_fetch_array($result);
				if(password_verify($user_password,$row['password']))
				{
					$verified=$row['verified'];
					if($verified)
					{
						$_SESSION['user_id']=$row['user_id'];
						$_SESSION['name']=$row['name'];
						$_SESSION['mobile_num']=$row['mobile_num'];
						$_SESSION['email_id']=$row['email_id'];
						$_SESSION['cart_items']=$row['cart_items'];
						$_SESSION['grand_total']=$row['grand_total'];


						header('Location: /Amazon-mini/index.php');

					}
					else
					{
						//account is not activated yet
						$err_msg="You have not activated your account yet";
					}
				}
				else
				{
					//email or password was incorrect
					$err_msg="Incorrect password or email-id";
				}

			}

		}
		else {
			$err_msg="Email or password is missing";
		}
	}
}*/

  include '../includes/dbconfig.php';
 if($dbc)
 	echo "All okay";
 else
 	echo "Not okay";

if(!isset($_SESSION['user_id'])){
   if(isset($_POST['btn_login'])){


		$user_email=mysqli_real_escape_string($dbc,trim($_POST['email']));
		$user_password=mysqli_real_escape_string($dbc,trim($_POST['password']));
	    $pass = password_hash($user_password, PASSWORD_BCRYPT);


    $query= "SELECT * from user where email_id='$user_email'";
			$result=mysqli_query($dbc,$query);


			if(mysqli_num_rows($result)!=0){

			    $row=mysqli_fetch_array($result);

				if(password_verify($user_password,$row['password'])){
					echo "all okay";

					$verified=$row['verified'];
					if($verified){
						echo "Verified";
					}
					else{
						echo "not verified";
					}

				}
				else{
					echo "not okay";
				}

			}
			else if(mysqli_num_rows($result)==0)
			echo "not okay";

   }

}	




?>