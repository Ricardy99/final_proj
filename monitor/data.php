<?php 
include 'external/validation.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Data entries</title>  
         <style>
            table, th, td {
               border: 1px solid black;
            }
         </style>
         
    </head>
<body bgcolor=black text=white>

<h1>Data entries</h1>
						
<?php
		
// Create a query for the database
//$query = "SELECT * FROM entries"; ORDER BY id DESC
 $query = "SELECT * FROM entries ORDER BY userid DESC";

// Get a response from the database by sending the connection
// and the query
$response = mysqli_query($conn, $query);

// If the query executed properly proceed
if($response){

echo '<table align="left"
cellspacing="5" cellpadding="8">
<tr>
<td align="left"><b>Tag ID</b></td>
<td align="left"><b>Date</b></td>
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

} else {

echo "Couldn't issue database query<br />";
echo $response;
echo mysqli_error($conn);
}

// Close connection to the database
mysqli_close($conn);
		
?>

<p>To go back to the home page, please click <a href='../../index.html'>here</a> </p>

</body>
</html>
