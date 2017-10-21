<html>
<head>
<title> Registrazione utente </title>
</head>
<body>
<h2> Conferma della registrazione con la funzione POST </h2>
<hr />
<?php
/*
* dati trasmessi dal form
*/
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$indirizzo = $_POST["indirizzo"];
$email = $_POST["email"];
$codicefiscale = $_POST["codicefiscale"];
echo "La richiesta di $nome $cognome è stata registrata. <br />";
echo "con l'indirizzo di casa $indirizzo. <br />";
echo "con l'indirizzo di posta elettronica $email. <br />";
echo "con il codice fiscale $codicefiscale. <br />";
echo " La rischietsa di accesso al servizio è arrivata <br / >";
echo " alle ore, date("H:i:s"), "del giorno: ", date ("d-m-Y")";
?>
</body>
</html>