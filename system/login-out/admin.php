<?php session_start();
include('../../helper/condb.php');

$ID = $_SESSION['ID'];
$name = $_SESSION['name'];
$status = $_SESSION['status'];
if ($status != 'admin') {
	Header("Location: ./logout.php");
}
?>
<!DOCTYPE html>
<html>

<head>
	<title></title>
</head>

<body>
	<form action="./logout.php">
		<h1>Admin Page</h1>
		<h3> สวัสดี <?php echo $name; ?> สถานะ <?php echo $status; ?> </h3>
		<input type="submit" value="ออกจากระบบ">
	</form>
</body>

</html>