<?php 

	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$msg=$_POST['message'];

	$to = "ag528927@gmail.com";
	
    $subject = "This is subject";
    
    $message = "thiss msg is from $name having contact number $mobile having message $msg";
    $message .= "<h1>This is headline.</h1>";
         
   
    $mail=mail($to,$subject,$message);
	if($mail){
		echo "success";
	}
	else{
		echo "fail";
	}

	
 ?>