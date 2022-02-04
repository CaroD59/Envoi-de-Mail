<?php
// echo !extension_loaded('openssl')?"Not Available":"Available";
use PHPMailer\PHPMailer\PHPMailer;

  require_once('PHPMailer/src/Exception.php');
  require_once('PHPMailer/src/OAuth.php');
  require_once('PHPMailer/src/PHPMailer.php');
  require_once('PHPMailer/src/POP3.php');
  require_once('PHPMailer/src/SMTP.php');



  define('GMailUSER', 'testfoadsofip@gmail.com'); // utilisateur Gmail
  define('GMailPWD', 'foadtest'); // Mot de passe Gmail


  $to = htmlspecialchars($_POST["email_to"]);
  $from = htmlspecialchars($_POST["email_from"]);
  $subject= htmlspecialchars($_POST["object"]);
  $body = htmlspecialchars($_POST["body"]);


  function smtpMailer($to, $from, $subject, $body) {

  	$mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
  	$mail->IsSMTP(); // active SMTP
  	// $mail->SMTPDebug = 3;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
  	$mail->SMTPAuth = true;  // Authentification SMTP active
 		$mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
  	$mail->Host = 'ssl://smtp.gmail.com';
  	$mail->Port = 465;
  	$mail->Username = GMailUSER;
  	$mail->Password = GMailPWD;
  	$mail->SetFrom($from);
  	$mail->Subject = $subject;
  	$mail->Body = $body;
  	$mail->AddAddress($to);
  	if(!$mail->Send()) {
  		return 'Mail error: '.$mail->ErrorInfo;
  	} else {
			header("Location: message-sent.php");
  	}
  }


  $result = smtpmailer($to, $from,$subject, $body);
  if (true !== $result)
  {
  	// erreur -- traiter l'erreur
  	echo $result;
  }