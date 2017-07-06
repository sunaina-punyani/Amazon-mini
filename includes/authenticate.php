<?php

session_start();

if(! ini_get('date.timezone'))
{
	date_default_timezone_set('Asia/Kolkata');

}
//if the page is not an order page or any ohter page that requires sign in

$sign_pages = array('order.php'); //can add more here

if(in_array(basename($_SERVER['PHP_SELF']),$sign_pages))
{
	if(!isset($_SESSION['user_id']))
	{
	//user is not logged in so redirect to sign in page
	header('Location: /Amazon-mini/public/sign_in.php');
	}
}
?>
