
<!DOCTYPE html>
<html>
<head>
  <title>Manual and documentation</title>
  <link rel="stylesheet" type="text/css" href="external/style.css">
  <script src="external/scripting.js"></script>
</head>

<body bgcolor='black' text='white'>
<h1 align='center'> Manual and documentation </h1>

<h2>Here we go...</h2>
<p>
This is the manual for your Access Control / Intrusion Detection & Monitoring System. 
<br><br>
To open the door, you have the choice to either enter a passcode on the keypad or use a registered RFID card. For the correct code or a valid RFID card, access will be granted; the door will open. If the wrong code or card is used, access will be denied, and if there are more than 3 invalid attempts, the system will go in “alert mode”, locking everything and sending you an email on the address you used. The only way to unlock the system will be to go on <a href=config.php >this page</a>. Click on the 'Cancel' button and wait up to 30 seconds to restart the system.<br><br>

<strong>Setting up passcode<br></strong>
1.	The first time the system is turned on, it has a default passcode of 1234. Enter passcode when prompted.<br>
2.	If passcode was entered properly, it will tell you with a message. Now, press the star * key.<br>
3.	When prompted, dial the new passcode, which will be 4 characters long.<br>
4.	New passcode is set!<br><br>

<strong>Accessing web server<br></strong>
To access the web server, one has to connect to the IP address of the Raspberry Pi with any web server on any device. It will first ask for the login credentials, which as default consist of admin for both the username and password. <u>It is highly recommended to change these credentials after the first login.</u> The option to do that is located on the top right of the home screen, the green button named “Change info” or you can click <a href='../chgparam/chgparam.php'>here</a> and change your login information and email to send the notifications to.<br><br>

<strong>Enabling RFID card as valid</strong><br>
To add & remove cards that will be used to unlock system, go <a href='config.php'>here</a>.
The RFID card should be used as an alternate way to open the door. They can easily be stolen so  <u>please be careful and keep them in a secure place.</u>
On the config page, you can add or remove a tag, wipe the table entirely or restart the system.<br><br>

 
<strong>Livestream</strong><br>
A camera is always filming the entry and you find this option in the menu, under the name <a href='../../livestream/index.php'>“Live Stream”</a>. This is where you keep an eye your house.<br><br>

<strong>Data</strong><br>
<a href='data.php'>Data</a> contains all the entry information that was collected, meaning what tag was used to open the door and at what time.
</p>
<p>To go back to home page, please click <a href='../../index.html'>here</a></p>

</body>
</html>
