<?php

require 'class.phpmailer.php';

class CustomerContact
{
	public $Anrede;
	public $Vorname;
	public $Nachname;
	public $Strasse;
	public $Plz;
	public $Ort;
	public $Land;
	public $Email;
	public $Telefon;
	
	function createHtmlTable()
	{
		$result = "<table style=\"border-spacing: 20px 0;\">\n";
		$result .= "<tr><td>Anrede</td><td>" . $this->Anrede . "</td></tr>\n";
		$result .= "<tr><td>Vorname</td><td>" . $this->Vorname . "</td></tr>\n";
		$result .= "<tr><td>Nachname</td><td>" . $this->Nachname . "</td></tr>\n";
		$result .= "<tr><td>Straße</td><td>" . $this->Strasse . "</td></tr>\n";
		$result .= "<tr><td>Plz</td><td>" . $this->Plz . "</td></tr>\n";
		$result .= "<tr><td>Ort</td><td>" . $this->Ort . "</td></tr>\n";
		$result .= "<tr><td>Land</td><td>" . $this->Land . "</td></tr>\n";
		$result .= "<tr><td>Email</td><td>" . $this->Email . "</td></tr>\n";
		$result .= "<tr><td>Telefon</td><td>" . $this->Telefon . "</td></tr>\n";
		$result .= "</table>";
		return $result;
	}
	
	function createCompleteAnrede()
	{
		return $this->Anrede . " " . $this->Vorname . " " . $this->Nachname;
	}
	
	function isMale()
	{
		return $this->Anrede == "Herr";
	}
}	

define('MAIL_SENDED_SUCCESSFULLY', 'SUCCESS');
define('SHOP_EMAIL_ADDRESS','bestellung@weingutloescher.de');

function sendOrderMail($customerData)
{
	$subject = "Neue Bestellung: " . $customerData->Anrede . " " . $customerData->Vorname . " " . $customerData->Nachname;
	$mailer = createPHPMailer(SHOP_EMAIL_ADDRESS,"Weingut Online Shop", $subject, $customerData->Email);
	$mailer->Body = $customerData->createHtmlTable();
	if ($mailer->Send())
	{
		return MAIL_SENDED_SUCCESSFULLY;
	}
	else
	{
		return $mailer->ErrorInfo;
	}
}

function sendConfirmationMail($customerData)
{
	$now = new DateTime();
	$subject = "Ihre Bestellung vom " . $now->format('d.m.Y');
	$mailer = createPHPMailer($customerData->Email, "Weingut und Brennerei Loescher Erben", $subject,SHOP_EMAIL_ADDRESS);
	
	$msgbody = $customerData->isMale() ? "Sehr geehrter " : "Sehr geehrte ";
	$msgbody .= $customerData->createCompleteAnrede() . ",<br/><br/>";
	$msgbody .= "vielen Dank für Ihre Bestellung bei unserem Weingut.<br/><br/>";
	$msgbody .= "Wir werden baldmöglichst mit Ihnen in Kontakt treten um die Zahlungsmodalitäten zu besprechen:<br/>";
	$msgbody .= "<ul><li>Erstkunden bitten wir i.d.R. um eine Vorrauskasse per Banküberweisung (die Bankdaten übermitteln wir Ihnen in diesem Fall).</li>";
	$msgbody .= "<li>Unseren Stammkunden versenden wir unsere Ware üblicherweise bequem auf Rechnung.</li></ul><br/>";
	$msgbody .= "Anbei haben wir Ihre Bestellung nochmal aufgeführt:<br/><br/><br/>";
	$msgbody .= $customerData->createHtmlTable() . "<br/>";
	$msgbody .= "Bei Änderungswünschen oder Fragen wenden Sie sich einfach per EMail oder telefonisch an uns.<br/><br/>";
	$msgbody .= "Ihre Familie Löscher<br/><br/>";
	$msgbody .= "--<br/>";
	$msgbody .= "Weingut und Brennerei Loescher Erben<br/>";
	$msgbody .= "Neustraße 3<br/>";
	$msgbody .= "56820 Senheim<br/>";
	$msgbody .= "Tel 02673/4410<br/>";
	$msgbody .= "Fax 02673/4294<br/>";
	$msgbody .= "<a href=\"www.weingutloescher.de\">www.weingutloescher.de</a><br/>";
	
	$mailer->Body = $msgbody . "</br>";
	
	if ($mailer->Send())
	{
		return MAIL_SENDED_SUCCESSFULLY;
	}
	else
	{
		return $mailer->ErrorInfo;
	}
}

function createPHPMailer($receiver,$fromName,$subject,$replyTo)
{
	$mail = new PHPMailer;

	$mail->IsSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.goneo.de';  // Specify main and backup server
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'bestellung@weingutloescher.de';      // SMTP username
	$mail->Password = 'dhsajhHJH8';                           // SMTP password

	$mail->From = 'bestellung@weingutloescher.de';
	$mail->FromName = $fromName;

	
	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	$mail->IsHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;

	$mail->AddAddress($receiver,'');  // Add a recipient
	$mail->AddReplyTo($replyTo,'');
	return $mail;
}

?>