<html>
<head>
<title> REGISTRAZIONE </title>
</head>
<body>
<H1> BENVENUTO NELLA PAGINA DI REGISTRAZIONE</H1>
<?php
session_start();
if(isset($_POST['uname'])){
	//recupero dati form
	$username=$_POST["uname"];
	$cognome=$_POST["cognome"];
	$email=$_POST["email"];
	$pass=MD5$_POST["pass"];
	
	
	$_SESSION["uname"]=$username
	$_SESSION["pass"]=$pass
}
?>
<?php
//connetto db
 $db_host="localhost";
	  $db_user="admin";
	  $db_pass="admin";
      $database="primoDB"	
	
	$link= mysqli_connect("$db_host","$db_user","$db_pass")
	or die ("Non mi riesco a collegare ad" <b>"$db_host");
	
	mysqli_select_db($link ,$databse)
	or die ( " NOn riesco a selezionare il Db $database<br>");
	
	//query di inserimento dati nel db
	$query1= INSERT INTO utenti VALUES('$username',
									   '$cognome',
									   '$email',
									   MD5('$pass'),
									   );
	mysqli_query($link,$query1)
	or die(" non riesco ad eseguire query $query1<br>" .mysqli_error($link)); //funzione utile pe ril debug
	
	Echo " <H1>$username<br></H1> 
	           <h2>dati archiviati con successo </h2>";


mysqli_close($link); 
session_unset(); 
session_destroy(); 
?>

