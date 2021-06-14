<?php
global $mysqli;
$currency = '₹';
$db_username = 'root';
$db_password = '';
$db_name = 'bolt';
$db_host = 'localhost';
$mysqli = new mysqli($db_host, $db_username, $db_password,$db_name);


	
	function secure($str,$sqlHandle)
	{
		$secured = strip_tags($str);
		$secured = htmlspecialchars($secured);
		$secured = mysqli_real_escape_string($sqlHandle,$secured);
		
		return $secured;
	}
	function getUserId($username, $password)
    {
        global $mysqli;
        
        $query = "SELECT id FROM users WHERE email='$username' && password='$password'";
        $query_run = mysqli_query($mysqli, $query);
        $fetched_id = mysqli_fetch_array($query_run);

        // Get the id
        $id = $fetched_id['id'];
        
        return $id;
    }
?>