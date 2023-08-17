<!.....connect database.....>

<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con=mysqli_connect('sql306.infinityfree.com','if0_34834733','xngQXw7JXj','if0_34834733_myprograming') or die("connection failed : ".mysqli_connect_error());
if ($con) {
	// echo "Connection Successfully";
}
else{
	echo "Sorry Some Mistakes is";
}
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
