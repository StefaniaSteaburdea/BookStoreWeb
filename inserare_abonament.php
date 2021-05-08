<?php
//include "conectare.php";
$con = mysql_connect("localhost","SSteaburdea"," ");// selectarea bazei de date curente
if (!$con) 
    die('Conexiune esuata '.mysql_error());
 
    
 mysql_select_db("SSteaburdea", $con);
 echo "<br><br><br>";

 if(isset($_POST['send']))
     {
      $cod_carte=$_POST['cod_carte'];
      $nume=$_POST['nume'];
      $adresa=$_POST['adresa'];
      $nr_exemplare=$_POST['nr_exemplare']; 
            $sql=mysql_query("INSERT INTO Carti (cod_carte, nume, adresa, nr_exemplare) 
	  VALUES ('$cod_carte', '$nume', '$adresa','$nr_exemplare')");
	  
      if(!$sql) {
        echo "Error: " . $sql . "<br>" . $con->error;
        } 
      else {
		echo "CARTEA A FOST COMANDATA! VA MULTUMIM !"."<br>";
        }
}
$result = mysql_query("SELECT * FROM Carti");

mysql_close($con);
?>