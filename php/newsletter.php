<?php

$name = $_POST['name'];

$email = $_POST['email'];

$country = $_POST['country'];

$mail_to = 'contact@aloty.ai';

$subject = 'Message from a site visitor '.$name;

$body_message = 'From: '.$name."\n";

$body_message .= 'E-mail: '.$email."\n";

$body_message .= 'Country: '.$country."\n";

$headers = 'From: '.$email."\r\n";

$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);


if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		//alert('Thank you for the message. We will contact you shortly.');
		window.location = '/';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		//alert('Message failed. Please, send an email to gordon@template-help.com');
		window.location = '/';
	</script>
<?php
}
?>