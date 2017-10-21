<html>
<head>
<title> Pagina </title>
<link href="stile1.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<header>
<center> <img src="tps.jpg" /> </center>
</header>
<center>
<nav>
<ul> 
<li><link a href ="cosastudiamo.html" title="cosastudiamo"> Cosa Studiamo </a></li>
<li><link a href ="linguaggio.html" title="linguaggio"> Linguaggio </a></li>
<li><link a href ="esercizio.html" title="esercizio"> Esercizio </a></li>
</ul>
</nav>
</center>
<h2> modulo di iscrizione al corso di TPS </h2>
<h4>Inserisci i tuoi dati personali e invia il modulo</h4><br />
<form action="rispostapost.php" method="post">
Nome <input type="text" name="nome" size ="20" /> <br />
Cognome <input type="text" name="cognome" size ="20" /><br />
Indirizzo<input type="text" name="indirizzo" size ="20" /><br />
Email <input type="text" name="email" size ="20" /><br />
Codice fiscale<input type="text" name="codicefiscale" size ="50" /><br />
<br />
<input type="submit" name="invio" value="Invia" />
<input type="submit" name="annulla" value="Annulla" />
</form>


</body>
</html>