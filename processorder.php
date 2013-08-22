<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de">
    <head>
        <title>Einfacher PHP-Formmailer</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		

    </head>
    <body>

<?php

include 'mail.php';

// Zu welcher Seite soll als "Danke-Seite" weitergeleitet werden?
// Wichtig: Sie muessen hier eine gueltige HTTP-Adresse angeben!
$urlDankeSeite = 'thankyou.php';
 
phpinfo();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

	$customerContact = new CustomerContact;
	$customerContact->Anrede = $_POST["Anrede"];
	$customerContact->Vorname = $_POST["Vorname"];
	$customerContact->Nachname = $_POST["Nachname"];
	$customerContact->Strasse = $_POST["Strasse"];
	$customerContact->Plz = $_POST["PLZ"];
	$customerContact->Ort = $_POST["Ort"];
	$customerContact->Land = $_POST["Land"];	
	$customerContact->Email = $_POST["E-Mail"];
	$customerContact->Telefon = $_POST["Telefon"];
	$customerContact->Anmerkungen = $_POST["Anmerkungen"];
	
	echo $customerContact->createHtmlTable();
	
	$sendOrderMailResult = sendOrderMail($customerContact);
	if ($sendOrderMailResult == MAIL_SENDED_SUCCESSFULLY)
	{
		$sendConfirmationMailResult = sendConfirmationMail($customerContact);
		if ($sendConfirmationMailResult == MAIL_SENDED_SUCCESSFULLY)
		{
		//  header("Location: $urlDankeSeite");
			exit;
		}
		else
		{
			echo "Sending Confirmation Mail failed<br/>";
			echo $sendConfirmationMailResult;
		}
	}
	else
	{
			echo "Sending Order Mail failed<br/>";
			echo $sendOrderMailResult;
	}
}

?>

	</body>
</html>
