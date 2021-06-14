<?php 	

include 'config.php';

$id = $_GET['id'];
$query="DELETE from print_kaos WHERE id='$id'";

mysqli_query($mysqli, $query);


header("location:index.php?pesan=delete");
 ?>