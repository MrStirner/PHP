<?php  //dati db
      $db_host="localhost";
	  $db_user="admin";
	  $db_pass="admin";
      $database="primoDB"
?>
<?php
//apro sessione php
 session_start();
echo "<p> CONNESIONE AL DATABASE IN CORSO. . .<P>" 
$link_mysqli_connect("$db_host","$db_user","$db_pass")
or die( "non riesco a connetermi a <b>"$db_host");

//selezione db

mysqli_select_db ($link,$database)
or die("NOn Riesco a collegarmi ad <b>"$database");


//preparazione_QUERY	
$Query1=" SELECT..
          FROM..
		  WHERE.."
		  // usare MD5 per criptare i campi
//esecuzione_QUERY
$risultato_query = mysqli_query($link,$Query1)
or die ("OOOPS problema esecuzione Query  $Query1");

//recupero Campi
<?php
$numrighe=mysqli_num_rows($risultato_query) // funzione che mi restituisce il numeor di righe
if($numrighe !=0) {
	for($i=0; $i<$numrighe ; $i++){
		$riga=mysqli_fetch_assoc($risultato_query) //recupero riga (lista) corrente del risultato, $riga[nomecampo] per accedere ai dati
}
}else { 
      echo "nesssun record trovato"
}
?>
<?php //CHIUDO SESSIONE 
mysqli_close($link); 
session_unset(); 
session_destroy(); 
?>



                                                         	


