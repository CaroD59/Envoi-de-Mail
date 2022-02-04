<link rel="stylesheet" href="form.css">
<body>
	

<form method="post" action="Envoie_mail_action.php">

 	<input type="email" name="email_to" maxlength="255" placeholder="Email du destinataire" class="to"/>

	<input type="email" name="email_from" maxlength="255" placeholder="Email de l'emetteur" class="from" />

	<input type="text" name="object" maxlength="255" placeholder="Objet de l'email" class="subject" />

  <textarea name="body"></textarea>
	<input type="submit" value="Submit" class="submit" />
</form>

</body>