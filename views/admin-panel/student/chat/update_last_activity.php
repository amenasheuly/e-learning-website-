<?php

//update_last_activity.php

include('conn.php');

session_start();

$query = "
UPDATE users 
SET last_activity = now() 
WHERE email = '".$_SESSION["email"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>