<?php include 'validation.php';?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Configuring parameters</title>
	<link rel="stylesheet" href="../external/style.css" />
</head>

<body bgcolor='black' text='white'>
<div class="main">
		<h2>Adding or removing RFID tags</h2>
		
	<form name="registrationform" action="test.php" method="post">
    <input type="submit" name="add_tag" value="Add tag">
    <input type="submit" name="rem_tag" value="Remove tag">
    <input type="submit" name="clear" value="Clear all">
    <input type="submit" name="stop-bg" value="Cancel">
	</form>
</div>
	
<?php
		
// Create a query for the database
$query = "SELECT * FROM validtags";
 

// Get a response from the database by sending the connection
// and the query
$response = mysqli_query($conn, $query);

if($response){
echo '<table align="left"
cellspacing="5" cellpadding="8">
<tr>
<td align="left"><b>Tag ID</b></td>
<td align="left"><b>Date added</b></td>
</tr>';


// mysqli_fetch_array will return a row of data from the query
// until no further data is available
while($row = mysqli_fetch_array($response)){


echo '<tr>
<td align="left">' .
$row['tagid'] . '</td><td align="left">' .
$row['date'] . '</td><td align="left">';
echo '</tr>';

}

echo '</table>';
}

else
	{
	echo "Couldn't issue database query<br />";
	echo mysqli_error($conn);
	}

// Close connection to the database
mysqli_close($conn);

?>	
	
	
	
</body>

</html>
