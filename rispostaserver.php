<!doctype html>
<html>
<head>
<title> Registrazione utente </title>
</head>
<body>
Il tuo Indirizzo IP:
<?php echo $_SERVER['REMOTE_ADDR']. "<BR />" ?> <br>
Il tuo broswer Web:
<?php echo $_SERVER['HTTP_USER_AGENT']. "<BR />" ?><br>
Il tuo server Web:
<?php echo ($_SERVER['SERVER_SOFTWARE']). "<BR />" ?>
Il tuo Server:
<?php echo $_SERVER['SERVER_NAME']. "<BR />" ?>
</body>
</html>