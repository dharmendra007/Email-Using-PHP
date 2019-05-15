<?php
	require_once('class.smtp.php');
	require_once('class.phpmailer.php');
	
	//----------------------------------------------
	// Send an e-mail. Returns true if successful 
	//
	  $to = 'to email';
	  $nameto = 'Dharmendra';
	  $subject = 'email';
	  $message = 'hello..';
	  $altmess = 'hahahaha';
	  sendmail($to,$nameto,$subject,$message,$altmess);
	//----------------------------------------------
	function sendmail($to,$nameto,$subject,$message,$altmess)  {

	  $from  = "from@gmail.com";
	  $namefrom = "dharmendra patel";
	  $mail = new PHPMailer();  
	  $mail->CharSet = 'UTF-8';
	  $mail->isSMTP();   // by SMTP
	  $mail->SMTPAuth   = true;   // user and password
	  $mail->Host       = "smtp.gmail.com";
	  $mail->Port       = 587;
	  $mail->Username   = $from;  
	  $mail->Password   = "your password";
	  $mail->SMTPSecure = "tls";    // options: 'ssl', 'tls' , ''  
	  $mail->setFrom($from,$namefrom);   // From (origin)
	  //$mail->addCC($from,$namefrom);      // There is also addBCC
	  $mail->Subject  = $subject;
	  $mail->AltBody  = $altmess;
	  $mail->Body = $message;
	  $mail->isHTML();   // Set HTML type
	 //$mail->addAttachment("attachment");  
	  $mail->addAddress($to, $nameto);
	  return $mail->send();
	}
?>
