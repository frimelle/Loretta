<!-- TODO: Password check and check if the name actually exists (otherwise: error!) -->

<?php

	session_start();
	$db = mysqli_connect( "localhost", "root", "password", "loretta" );

	if ( !$db ) {
		echo mysqli_connect_error();
		return;
	}

	if(isset($_POST['submit'])) {
		if($_POST['name'] == "") {
			echo 'Please Enter Name';
			#echo '<br><a href="index.php?a=login">Back</a>';
			return;
		}
		
		if($_POST['password'] == "") {
			echo 'Please Enter Password';
			#echo '<br><a href="index.php?a=login">Back</a>';
			return;
		}

		$name = $_POST['name'];
		$password = $_POST['password'];

		$qstring = "SELECT name, password, id FROM users WHERE name='$name'"; 
		$qresult = mysqli_query($db, $qstring);
		$row = mysqli_fetch_object($qresult);
		
		#TODO: hash!! & Passwordcheck in general & check if name was correct
		#if($row->password != $password){#hash("sha512", $password)){        #implement later instead of $password
		#	echo "Wrong Password.";
			#echo 'Click <a href="index.php?a=login">here</a> to log in again.';
		#	return;
		#} 
		
		$_SESSION["username"] = $name;
		$_SESSION["logged_in"] = 1;
		$_SESSION["userid"] = $row->id;
		
		include("admin.php");
	} else {
		echo '<form action="index.php" method="post">';
		echo '<p>Name:<br><input name="name"></p>';
		echo '<p>Password:<br><input name="password" type=password></p>';
		echo '<input name=submit type=submit value="SUBMIT">';
		echo '</form>';
	}

?>