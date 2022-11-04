<?php 
$c=mysqli_connect('localhost','root','','log');
session_start();
if(!$c){die(mysqli_connect_error());}
else
{
	$email = $_POST['mail'];
	$password = $_POST['mdp'];
	$sql = "SELECT * FROM user WHERE mail='$email' AND password='$password'";
	$result = mysqli_query($c, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['user_id'] = $row['id'];
		header('location:index.html');
	} else {
		echo '<script>alert("invalide email")</script> ';
	}
}

?>
