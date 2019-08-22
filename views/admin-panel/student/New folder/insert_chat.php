<?php

//insert_chat.php

include('conn.php');

session_start();


$data = array(
 ':to_user_email'  => $_POST['to_user_id'],
 ':from_user_email'  => $_SESSION['email'],
 ':chat_message'  => $_POST['chat_message'],
 ':status'   => '1'
);

$query = "
INSERT INTO chat_message 
(to_user_email, from_user_email, chat_message, status) 
VALUES (:to_user_email, :from_user_email, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo fetch_user_chat_history($_SESSION['email'], $_POST['to_user_id'], $connect);
}

?>
