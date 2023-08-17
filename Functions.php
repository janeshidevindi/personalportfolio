<!--connect database-->

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

<!--Insert project-->

<div class="row text-center">
	<div class="container">
		<h1>Insert DATA</h1>
	<form action="index.php" method="post">
	<input type="text" name="firstname" placeholder="firstname"><br><br>
	<input type="text" name="lastname" placeholder="lastname"><br><br>
	<input type="gmail" name="gmail" placeholder="gmail"><br><br>
	<input type="text" name="number" placeholder="number"><br><br>
	<input type="text" name="address" placeholder="address"><br><br>
	<input type="submit" name="submit" value="insert" class="btn"><br><br>
	</form>
<button><a href="show.php">show data</a></button>
	</div>
</div>
<?php
error_reporting(0);
include 'connection.php';
if (isset($_POST['submit'])) {
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$gmail = $_POST['gmail'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$sql = "INSERT INTO `reg` VALUES ('$id','$firstname','$lastname','$gmail','$number','$address')";
	$data=mysqli_query($con,$sql);
	if ($data) {
		echo "insert";
	}else
	{
		echo "sorry";
	}
}
?>

