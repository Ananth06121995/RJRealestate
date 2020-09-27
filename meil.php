<?php

if(isset($_POST['submit'])){
	
	
	require 'PHPMailer/PHPMailerAutoload.php';
	$mail = new PHPMailer;
	$mail ->Host       = 'smtp.gmail.com';
	$mail ->Port       =  587;
	$mail ->SMTPAuth   = true;
	$mail ->SMTPSecure = 'tls';
	$mail ->Username   = 'ananthamurugesan123@gmail.com';                     // SMTP username
    $mail ->Password   = 'OC@12345';
	
   
    
	
	
	  	// Set the SMTP server to send through
      
    	// Enable SMTP authentication
                                   // SMTP password

    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('ananthamurugesan123@gmail.com');               // Name is optional
    $mail->addReplyTo($_POST['email'], $_POST['name']);
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Message from website' .$_POST['subject'];
    $mail->Body    = '<h3>Name :'.$_POST['name'].'<br> Email:' .$_POST['email'].'<br>Message:' .$_POST['message'].'<h3>';
	if(!$mail->send()){
	 $result="Something went wrong. Please try again.";
	 
	 }

	 else{
	 $result="Thanks\t".$_POST['name']."for connecting us. we will get back to you soon!";
	 }
	 
}
?>

