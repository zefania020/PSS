<?php
include("config.php");
if(isset($_POST['login']))
{
	session_start();
	$username = secure($_POST['username'], $mysqli);
	$password =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM user WHERE  nama_awal= '$username' AND password = '$password'";
	$result=mysqli_query($mysqli,$q);
	$row = $result->fetch_assoc();

	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			
			if ($row['nama_awal'] == "admin") { //$_SESSION['username'] == "admin"
				header("Location:../../admin/pencetakan_dokumen.php");
				exit;
			}else{
				header("Location:../../index.php");
				exit;
			}
		}
		else
		{
			echo"<script> location='../../login.php';alert('INVALID USERNAME OR PASSWORD');</script>";
		}
	}
}
?>