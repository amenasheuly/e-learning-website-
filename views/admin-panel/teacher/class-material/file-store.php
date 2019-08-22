<?php

require '../connect.php';


if(isset($_POST['submit'])){
	
$date = @$_POST['date'];
$class = @$_POST['class'];
$subject = @$_POST['subject'];
$title = @$_POST['title'];
$des = @$_POST['des'];
$author = @$_POST['author'];
$video = @$_POST['video'];
$email = @$_POST['a_email'];
$file_dir = "uploads/";
$file = $file_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;    
$fileType = strtolower(pathinfo($file,PATHINFO_EXTENSION));
$filemov = move_uploaded_file($_FILES["file"]["tmp_name"], $file);



    if($date&&$class&&$subject&&$title&&$des&&$author&&$video&&$email&&$file){

        

    	$sql = "INSERT INTO `online_learning`.`t_class_material` (`id`, `date`, `class`, `subject`, `title`, `des`, `author`, `video`, `a_email`,`file`) VALUES ('', '$date', '$class', '$subject', '$title', '$des', '$author', '$video', '$email','$file')";        
         if (mysqli_query($link, $sql)) {
                        echo "Success!!Your data have been interted.";
                        header("Location:video-list.php");
                    } else {
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
                    mysqli_close($link);
        } 
    else{
        echo 'please fill all the field';
    }
}
?>




