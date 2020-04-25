<!DOCTYPE html>
<html>
<head>
	<title>Contact form with validation</title>
  <script src="external/scripting.js"></script>
</head>

<body background="images/background.jpg">
  <h2>Contact us</h2>

  <p>Now enter you information and we might get in touch</p>

  <form name="contactform" method="post" action="contact.php">
    <fieldset>
      <legend><b>Your Information:</b></legend>
    Name: <input type="text" input id="name" name="name" placeholder="first-name last-name" size="30" onkeyup="lettersOnly(this)"><br>
    Email: <input type="text" input id="email" name="email" placeholder="user@site.xx" size="30" onkeyup="noSpecialChars(this)"><br>
    Phone: <input type="text" input id="phone" name="phone" placeholder="123-123-1234" size="30" onkeyup="numbersOnly(this)"><br>
    Gender: <input type="text" input id="gender" name="gender" placeholder="M or F" size="10" maxlength="1" onkeyup="lettersOnly(this)"><br>
    Date of birth: <input type="text" input id="birthdate" name="birthdate" placeholder="yyyy-mm-dd" size="10" maxlength="10" onkeyup="numbersOnly(this)">
    </fieldset>
    <input type="submit" name="submit" value="Send">
  </form>

  <h4>How should we contact you</h4>
  <select>
      <option value="email">Email</option>
      <option value="phone">Phone</option>
      <option value="other">Other</option>
    </select>

  
  <p3>...or you can go back to the <a href="index.php">home page</a> or the <a href="options.php">options</a> page</p3>

</body>
</html>
