<?php

//database_connection.php

$connect = new PDO("mysql:host=localhost;dbname=online_learning", "root", "");

date_default_timezone_set('Asia/Dhaka');

function fetch_user_last_activity($email, $connect)
{
 $query = "
 SELECT * FROM users 
 WHERE email = '$email' 
 ORDER BY last_activity DESC 
 LIMIT 1
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row['last_activity'];
 }
}
function fetch_user_chat_history($from_user_email, $to_user_id, $connect)
{
 $query = "
 SELECT * FROM chat_message 
 WHERE (from_user_email = '".$from_user_email."' 
 AND to_user_email = '".$to_user_id."') 
 OR (from_user_email = '".$to_user_id."' 
 AND to_user_email = '".$from_user_email."') 
 ORDER BY timestamp DESC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $output = '<ul class="list-unstyled">';
 foreach($result as $row)
 {
  $user_name = '';
  if($row["from_user_email"] == $from_user_email)
  {
   $user_name = '<b class="text-success">You</b>';
  }
  else
  {
  $user_name = '<b class="text-danger">'.get_user_name($row['from_user_email'], $connect).'</b>';
  }
  $output .= '
  <li style="border-bottom:1px dotted #ccc">
   <p>'.$user_name.' - '.$row["chat_message"].'
    <div align="right">
     - <small><em>'.$row['timestamp'].'</em></small>
    </div>
   </p>
  </li>
  ';
 }
 $output .= '</ul>';
 return $output;
}
function get_user_name($email, $connect)
{
 $query = "SELECT user FROM users WHERE email = '$email'";
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 foreach($result as $row)
 {
  return $row['user'];
 }
}
?>




