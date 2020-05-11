<?php
if(isset($_POST['submit'])){
	//echo "this is working";
	//shell_exec('sudo /bin/bash /home/pi/Desktop/pi-rfid4/ricfcn.sh');
	$a = shell_exec('python3 /home/pi/Desktop/pi-rfid4/test1.py 2>&1');
	#echo $a;
}

?>
