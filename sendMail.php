<?php 

	require "PHPMailer/PHPMailerAutoload.php";
	require "PHPMailer/class.phpmailer.php";
	require "PHPMailer/class.smtp.php";
	require "mailing/resources.php";

	class Mailing
	{
		public function __construct($jsonData, $mail1, $mail2, $MSE, $MSP, $AE)
		{
			$this->MailServerEmail = $MSE;
			$this->MailServerPass = $MSP;
			$this->AdminEmail = $AE;
			$this->mail1 = $mail1;
			$this->mail2 = $mail2;
			$this->name = $jsonData['name'];
			$this->email = $jsonData['email'];
			$this->subject = $jsonData['sub'];
			$this->body = $jsonData['body'];
		}

		public function EmailGenerator1()
		{
			$this->mail1->isSMTP();
			$this->mail1->Host = "smtp.gmail.com";
			$this->mail1->SMTPAuth = true;
			$this->mail1->Username = $this->MailServerEmail;
			$this->mail1->Password = $this->MailServerPass;
			$this->mail1->SMTPSecure = 'tls';
			$this->mail1->Port = 587;
			$this->mail1->isHTML(true);

			$this->mail1->setFrom($this->email, $this->name." from your Portfolio Website");
			$this->mail1->addAddress($this->AdminEmail, "Samaresh Adak");
			$this->mail1->Subject = $this->subject;
			$this->mail1->Body = "<p style='font-size: 24px;'>".$this->body."</p>";
		}

		public function EmailGenerator2()
		{
			$this->mail2 = new PHPMailer;
			$this->mail2->isSMTP();
			$this->mail2->Host = "smtp.gmail.com";
			$this->mail2->SMTPAuth = true;
			$this->mail2->Username = $this->MailServerEmail;
			$this->mail2->Password = $this->MailServerPass;
			$this->mail2->SMTPSecure = 'tls';
			$this->mail2->Port = 587;
			$this->mail2->isHTML(true);

			$this->mail2->setFrom($this->MailServerEmail, "Samaresh Adak's Portfolio");
			$this->mail2->addAddress($this->email, $this->name);
			$this->mail2->Subject = "Hello ".$this->name;
			$this->mail2->Body = "<p style='font-size: 24px;'>Hi ".$this->name.", this is Samaresh Adak,
							Thank You for your response to 
							<a href='https://www.samareshadakportfolio.epizy.com'> My Portfolio Website</a>.
							<br/> It means alot to me, please visit again.";
		}

		public function SendMails()
		{
			if(!$this->mail1->send() || !$this->mail2->send())
			{
				echo "Unfortunatly, we are unable to send your message.<br/>";
				echo "Mailer Error: ".$mail1->ErrorInfo."<br/>";
				echo "Mailer Error: ".$mail2->ErrorInfo.".";
			}
			else
			{
				echo "Message has been send.";
			}
		}
	}


// creating a object of this class and calling the functions
$mail1 = new PHPMailer;
$mail2 = new PHPMailer;
$MSE = $MailServerEmail;
$MSP = $MailServerPass;
$AE = $AdminEmail;
$decodedjson = (array)json_decode($_POST['jsonData']);

$obj1 = new Mailing($decodedjson, $mail1, $mail2, $MSE, $MSP, $AE);
$obj1->EmailGenerator1();
$obj1->EmailGenerator2();
$obj1->SendMails();
?>






