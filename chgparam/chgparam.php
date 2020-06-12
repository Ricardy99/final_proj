<!DOCTYPE html>
<html>
<head>
  <title>Changing parameters</title>
  <script src="morescripts.js"></script>
  <!--
  <link rel="stylesheet" type="text/css" href="../monitor/external/style.css">
  -->
</head>

<body bgcolor='black' text='white'>
<h1 align='center'> Changing parameters & information</h1>

<h4>To modify login information or email, enter the new information needed and click on the button.</h4>
	<form name="changing info" action="chgparam.php" method="post">
		<fieldset>
		<input type="submit" name="userpass" value="Change login">
		<br>
		Username: <input type="text" input id="username" name="username" placeholder="username" size="20" onkeyup="noSpecialChars(this)"><br>
		Password: <input type="text" input id="password" name="password" placeholder="password" size="20"><br>
		
		<br>
		<input type="submit" name="email" value="Change email">
		<br>
		 Email: <input type="text" input id="email" name="email" placeholder="user@site.xx" size="30" onkeyup="noSpecialChars(this)"><br>
		</fieldset>
	</form>
	
<?php
if(isset($_POST['userpass'])) 
{
	if(empty($_POST['username']) || empty($_POST['password']))
    {
		echo "Fill username & password field correctly!";
    }
    else
    {
		$username = $_POST['username'];
		$password = $_POST['password'];
		shell_exec("sudo htpasswd -b -c /etc/apache2/.htpasswd ".$username."  ".$password."");
		echo ("Username and password have been updated");
	}
}

else
if(isset($_POST['email'])) 
{
	if(empty($_POST['email'])) {
	echo "Enter email please!";
    }
    else
    {
		$new_email = $_POST['email'];
		shell_exec("echo '" .$new_email. "' > /home/pi/Desktop/pi-rfid4/R_EMAIL"."");
		#restarting all of it to make sure changes will be reflected
		shell_exec("sudo /home/pi/Desktop/pi-rfid4/cleanps.sh");
		
		echo ("Email has been updated");
	}
}
?>

<p>To go back to homepage, click <a href=../../index.html>here</a></p>

</body>
</html>
