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
<!--Get project-->

<!DOCTYPE html>
<html>
<head>
	<title>show table</title>
</head>
<body>
<?php
include ('connection.php');
$sql ="select * from reg";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table border="2">
<tr>
<th>id</th>
<th>firstname</th>
<th>lastname</th>
<th>gmail</th>
<th>number</th>
<th>address</th>
<th>delete</th>
<th>update</th>
</tr>
	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['id']."</td>
				<td>".$result['firstname']."</td>
				<td>".$result['lastname']."</td>
				<td>".$result['gmail']."</td>
				<td>".$result['number']."</td>
				<td>".$result['address']."</td>
				<td><a href='update.php?id=$result[id] & firstname=$result[firstname] & lastname=$result[lastname] & gmail=$result[gmail] & number=$result[number] &address=$result[address]'> update </a></td>
				<td><a href='delete.php?id=$result[id] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found";
}
?>
</table>
</body>
</html>
 <!--------- echo "<br>".$result['id']."  ".$result['firstname']." ".$result['lastname']." ".$result['gmail']."  ".$result['number']."  ".$result['address']."<br>";_----->

<!--Update project-->
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<form action="" method="get">
	<input type="text" name="id" placeholder="id" value="<?php echo $_GET['id']; ?>"><br><br>
	<input type="text" name="firstname" placeholder="firstname" value="<?php echo $_GET['firstname']; ?>"><br><br>
	<input type="text" name="lastname" placeholder="lastname" value="<?php echo $_GET['lastname']; ?>" ><br><br>
	<input type="gmail" name="gmail" placeholder="gmail" value="<?php echo $_GET['gmail']; ?>"><br><br>
	<input type="text" name="number" placeholder="number" value="<?php echo $_GET['number']; ?>"><br><br>
	<input type="text" name="address" placeholder="address" value="<?php echo $_GET['address']; ?>"><br><br>
	<input type="submit" name="submit" value="update">
</form>
<?php
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$id = $_GET['id'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$gmail = $_GET['gmail'];
	$number = $_GET['number'];
	$address = $_GET['address'];
 	$sql="UPDATE reg SET firstname='$firstname' , lastname='$lastname', gmail='$gmail' , number='$number', address='$address'   WHERE id='$id'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
 		echo "not update";
 	}
}
else
{
	echo "click on  button to save the change";
}
?>
</body>
</html>

<!--Delete project-->

<?php
include ('connection.php');
$id = $_GET['id'];
$sql ="DELETE FROM `reg` WHERE id='$id'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:show.php');
}else
{
	echo "error";
}
 ?>

