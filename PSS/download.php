<?php 

include ("config.php");
$data = mysql_query("SELECT * FROM print_documen WHERE id=" . $_REQUEST['id']);

if ($row = mysql_fetch_assoc($data)){
	$filedata = $row['filedata'];
	$filetype = $row['filetype'];
	$filename = $row['filename'];
	$filesize = $row['filesize'];
}

	header('Content-type: ' . $filetype);
	header('Content-length: ' . $filesize);
	header("Content-Transfer-Encoding: binarynn");
	header("Pragma: no-cache");
	header("Expired: 0");
	header('Content-Disposition: attacment; filename="' . $filename . '"');
	echo $filedata;
	exit();

 ?>