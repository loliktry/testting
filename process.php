<?php
include("koneksi.php");

$errors         = array();  	// array to hold validation errors
$data 			= array(); 		// array to pass back data

// validate the variables ======================================================
	// if any of these variables don't exist, add an error to our $errors array

	if (empty($_POST['name']))
		$errors['name'] = 'Name is required.';

	if (empty($_POST['email']))
		$errors['email'] = 'Email is required.';

	if (empty($_POST['superheroAlias']))
		$errors['superheroAlias'] = 'Superhero alias is required.';

// return a response ===========================================================

	// if there are any errors in our errors array, return a success boolean of false
	if ( ! empty($errors)) {

		// if there are items in our errors array, return those errors
		$data['success'] = false;
		$data['errors']  = $errors;
	} else {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$superhero = $_POST['superheroAlias'];
		//$sql = "INSERT INTO member VALUES ($_POST['name'],$_POST['email'],$_POST['superheroAlias'])";
		//$sql = "INSERT INTO `member` ( `name`, `email`, `superheroAlias`) VALUES ('', '$name', '$email', '$superhero')";
		$sql = "INSERT INTO `member` VALUES ( '','$name', '$email', '$superhero')";
		//mysqli_query($conn, $sql);
		
		if(mysqli_query($conn, $sql) or die(mysqli_error())){
			$data['success'] = true;
			$data['message'] = 'Success!';
		}else{
			$data['success'] = false;
			$data['message'] = 'Gagal Memasukkan Data!';
		}
		// if there are no errors process our form, then return a message

		// DO ALL YOUR FORM PROCESSING HERE
		// THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

		// show a message of success and provide a true success variable
		
	}

	// return all our data to an AJAX call
	echo json_encode($data);
	//echo "<br>".$_POST['name'].$_POST['email'].$_POST['superheroAlias'];
