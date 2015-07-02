<? 

// SETTINGS
$to = 'a.jarnheimer@gmail.com';

// VARIABLER
$name 		= $_POST['name'];
$number 	= $_POST['number'];
$email 		= $_POST['email'];
$message 	= $_POST['message'];
$ip			= $_SERVER['REMOTE_ADDR'];


// KONTROLL
if(strlen($name) < 3 )
	die('Vänlig ange ett namn (minst 3 tecken)');

if(strlen($message) < 6 )
	die('Vänligen skriv ett meddelande som är längre än 7 tecken.');

if((strlen($number) < 6) || (strlen($email) < 7))
	die('Vänligen ange ett giltigt telefonnummer / epost-adress');
	
// MESSAGE
$message = "Namn: $name\nNummer: $number\nEmail: $email\n\n Meddelande: $message \n\nIP: $ip";

// SKICKAT
if(mail($to, 'Kontaktformuläret', $message)){
	header('kontakt.php?message=sent');	
}else{
 die('Meddelandet kunde inte skickas');	
}

?>