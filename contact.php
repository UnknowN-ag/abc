<?php 

	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$msg=$_POST['message'];
/*
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
*/

	$sub = 'From Abhishek Website';
	$msg = $name.' wants to contact you, having contact info: '.$mobile. 'and '.$email.' and Has a message: '.$msg;

	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = 'ssl';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = 'ag528927@gmail.com';
	$mail->Password = '**********';
	$mail->setFrom('ag528927@gmail.com');
	$mail->Subject = $sub;
	$mail->Body = $msg;
	$mygmail ='ag528927@gmail.com';
	$mail->AddAddress($mygmail);

	if($mail->Send()){
		echo "send";
		header('Location: index.html');
		
	}
	else{
		echo "not send";
	}


 ?>
