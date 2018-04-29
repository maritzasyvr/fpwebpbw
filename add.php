<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$number = $_POST['number'];
		$phone = $_POST['phone'];
		$datepicker = $_POST['datepicker'];
		$message = $_POST['message'];
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO users(name,number,phone,datepicker,message) VALUES('$name','$number','$phone','$datepicker','$message')");
		
		// Show message when user added
		echo "Anda berhasil melakukan reservasi. Kami akan menghubungi telepon anda untuk informasi lebih lanjut  <a href='index.php'>Kembali ke Home</a>";
	}
	?>