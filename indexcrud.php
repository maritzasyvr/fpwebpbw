<?php
session_start();
if(!isset($_SESSION['simple_login']))
{
    header("Location:indexlogin.php");
}
?>

<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Homepage</title>
</head>
 
<body>
<h1 style="text-align: center;"> Reservasi Meja</h1>    
<a href="indexlogout.php">Logout</a><br/><br/>
 
    <table width='80%' border=1>
 
    <tr>
        <th>Nama</th> <th>Jumlah</th> <th>Telepon</th> <th>Waktu</th> <th>Pesan</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['number']."</td>";
        echo "<td>".$user_data['phone']."</td>";  
		echo "<td>".$user_data['datepicker']."</td>";  
        echo "<td>".$user_data['message']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>