<?php
	
	if( isset( $_POST['submit_DB'] ) ) {
		if( $_POST['name'] == "" ) {
			echo 'Please Enter A Name';
			echo '<br><a href="edit_DB.php">Back</a>';
			return;
		}
	$name = $_POST( 'name' );
	$name = sanitize_input( $name );
	$result = mysql_query( "SELECT id FROM loretta WHERE name = '$name'" );
	//row not found
	if(mysql_num_rows($result) == 0) {
		$website = $_POST( 'website' );
		$insert = mysql_query( "INTSERT INTO organization VALUES('$name', '$website'");

	 //row found
	} else {
	 
	}



	} else {
		echo '<p> Enter only the name of the organization and the thing you want to change to edit something. </p>';
		echo '<form action="edit_DB.php" method="post">';
		echo '<p>Name:<br><input name="name"></p>';
		echo '<p>Website:<br><input name="website" type=website></p>';
		echo '<p>Address:<br><input name="address" type=address></p>';
		echo '<p>Day:<br><input name="day" type=day></p>';
		echo '<p>Open Time:<br><input name="open" type=open></p>';
		echo '<p>Close Time:<br><input name="close" type=close></p>';
		echo '<p>Contact Number/Mail:<br><input name="contact" type=contact></p>';
		echo '<p>Tag:<br><input name="tag" type=tag></p>';
		echo '<input name=submit_DB type=submit value="SUBMIT">';
		echo '</form>';
	}


?>