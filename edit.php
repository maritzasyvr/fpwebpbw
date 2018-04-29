<?php
// include database connection file
include_once("config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['name'];
	$number=$_POST['number'];
	$phone=$_POST['phone'];
	$datepicker=$_POST['datepicker'];
	$message=$_POST['message'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET name='$name',number='$number',phone='$phone', datepicker='$datepicker',message='message' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: indexcrud.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['name'];
	$number = $user_data['number'];
	$phone = $user_data['phone'];
	$datepicker = $user_data['datepicker'];
	$message = $user_data['message'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="indexcrud.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Nama</td>
				<td><input type="text" name="name" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Jumlah</td>
				<td><input type="text" name="number" value=<?php echo $number;?>></td>
			</tr>
			<tr> 
				<td>Nomor HP</td>
				<td><input type="text" name="phone" value=<?php echo $phone;?>></td>
			</tr>
			<tr> 
				<td>Waktu</td>
				<td><input type="text" name="datepicker" value=<?php echo $datepicker;?>></td>
			</tr>
			<tr> 
				<td>Pesan</td>
				<td><input type="text" name="message" value=<?php echo $message;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>