<?php
$name=$_POST['name'];
$mail=$_POST['email'];
$mdp=$_POST['pass'];
$cmdp=$_POST['cpass'];

$c=mysqli_connect('localhost','root','','log');
if(!$c){die(mysqli_connect_error());}
else{
   echo "connection effectué" ;
}
if (strcmp($mdp,$cmdp)!=0)
{die ("password not matching") ;}
else {
$sql = "SELECT * FROM user WHERE mail='$mail'";
		$result = mysqli_query($c, $sql);
		if (mysqli_num_rows($result) > 0) {
			echo '<script>alert("email already exist")</script>';
		} else {
			$req=mysqli_query($c,"insert into user(name,mail,password) values('$name','$mail','$mdp') ");
			if ($req) {
				header('location:index.html'); 	
			} else {
				echo "Something Wrong Went";
			}
		}
	}
?>
