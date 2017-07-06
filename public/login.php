<?php

//connect to database
require_once(_DIR_.'/../includes/dbconfig.php');

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
				if(password_verify($user_password,$))
			}

		}
	}
}