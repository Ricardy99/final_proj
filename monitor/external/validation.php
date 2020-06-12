<?php

$username = 'php';
$password = 'password';
$servername = 'localhost';
$dbname = 'data';

$conn = mysqli_connect($servername, $username, $password, $dbname);

//making sure any python process in the bg are cleared
shell_exec('sudo /home/pi/Desktop/pi-rfid4/cleanps.sh');

if(isset($_POST['add_tag']))
{
  
    shell_exec('sudo /home/pi/Desktop/pi-rfid4/cleanps.sh');
    
   $tagid = shell_exec('python3 /home/pi/Desktop/pi-rfid4/read_id.py 2>&1');
   $date = date("Y-m-d @ H:i");
    
    //Making sure id isnt already in db
    $result = $conn->query("SELECT tagid FROM validtags WHERE tagid = $tagid");
    if ($result->num_rows>0) {
	shell_exec('sudo /home/pi/Desktop/pi-rfid4/cleanps.sh');
	//exit("Already in database!");
	echo "Already in database";
	}
    else{
	  $sql = "INSERT INTO validtags (tagid, date) VALUES ($tagid, '$date')";
	if (mysqli_query($conn, $sql)) { 
	    echo "New record created successfully";}
	else {
	    echo "Error: " . $sql . "<br>" .mysqli_error($conn);}
	}
    

}

if(isset($_POST['rem_tag']))
{
    shell_exec('sudo /home/pi/Desktop/pi-rfid4/cleanps.sh');
    $tagid = shell_exec('python3 /home/pi/Desktop/pi-rfid4/read_id.py 2>&1');
    $date = date("Y-m-d @ h:i");
    
    //Making sure id is actually in db
    $result = $conn->query("SELECT tagid FROM validtags WHERE tagid = $tagid");
    if ($result->num_rows==0) {
	shell_exec('sudo /home/pi/Desktop/pi-rfid4/cleanps.sh');
	echo "Not in database";
	}
	
    else{
	$sql = "DELETE FROM  validtags WHERE tagid=$tagid";
	if (mysqli_query($conn, $sql)) { 
	echo "ID removed successfully";}
	else {
	echo "Error: " . $sql . "<br>" .mysqli_error($conn);
	    }
	}

	
	//shell_exec('python3 /home/pi/Desktop/pi-rfid4/read_id2.py &');
}

if(isset($_POST['clear']))
{
    $sql = "DELETE FROM  validtags";
    if (mysqli_query($conn, $sql)) { 
	echo "All cleared!";}
    else {
	echo "Error: " . $sql . "<br>" .mysqli_error($conn);
	}
}

if(isset($_POST['stop-bg']))
{
    shell_exec('/home/pi/Desktop/pi-rfid4/cleanps.sh');
    shell_exec('sudo python3 /home/pi/Desktop/pi-rfid4/cleanup.py ');
    //shell_exec('sudo python3 /home/pi/Desktop/pi-rfid4/test6.py &');
    echo "Start over";
}

//echo "will happen";
//shell_exec('sudo /home/pi/Desktop/pi-rfid4/ricfcn.sh &');
//shell_exec('/home/pi/Desktop/pi-rfid4/ricfcn.sh');


?>
