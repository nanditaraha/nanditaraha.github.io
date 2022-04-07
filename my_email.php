<?
$name = $_POST['name'];
$visitor_emial = $_POST['email'];
$message = $_POST['message'];

//Validate
if(empty($name)||empty($email)){
	echo "Nanme and Email required!";
	exit;
}

$email_form = 'nandita.raha@gmail.com';
$email_subject = "New message from $name. \n".
$email_body = "New message:\n".
	"email add: $visitor_emial".
	"Message:\n $message".

$to = "nandita.raha@gmail.com";
$headers = "From: $email_from \n";

mail($to,$email_subject,$email_body,$headers);
?>