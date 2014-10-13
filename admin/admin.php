<!DOCTYPE html>
<html>
	
	<h> "You are at the admin page now. You can add or edit things in the database here, add admins or change your password." </h>
	<body>
		<form action="edit_DB.php" method="post">
			<input id="edit_DB" name=submit type=submit value="edit_DB">
		</form>
		<form action="add_admin.php" method="post">
			<input id="addAdmin" name=submit type=submit value="addAdmin">
		</form>
		<form action="change_pw" method="post">
			<input id="change_pw" name=submit type=submit value="change_pw">
		</form>
		<a href="logout.php">Logout</a>
	</body>
</html>
