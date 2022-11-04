<?php
$first=$_POST['First_name'] ;
$last=$_POST['Last_name'] ;
$name= $first .' '. $last ;
$mail=$_POST['email'];
$tell=$_POST['phone'];
$msg=$_POST['message'];

$c=mysqli_connect('localhost','root','','log');
if(!$c){die(mysqli_connect_error());}
else{
   echo "connection effectué" ;
}

$req=mysqli_query($c,"insert into message(name,mail,phone,content) values('$name','$mail','$tell','$msg') ") or die('error in insertion');
if ($req) {
	header('location:index.html'); 	
} else {
	echo "Something Wrong Went";
}
	
?>
