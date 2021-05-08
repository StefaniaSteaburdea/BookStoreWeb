<?php
session_start();
//verific daca e logat
if(!isset($_SESSION['user'])){
      header("Location: log_in.html");
      exit();
   }

$con = mysql_connect("localhost", "SSteaburdea", " ");
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}

// selectarea bazei de date curente
$db_selected = mysql_select_db("SSteaburdea", $con);
      
if(isset($_POST['send']))
     {
       $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
      $titlu=$_POST['titlu'];
      $autor=$_POST['autor'];
      $pret=$_POST['pret'];
      $descriere=$_POST['descriere'];
      $user=$_SESSION['user'];
      $gen=$_POST['gen'];
      $sql=mysql_query("INSERT INTO carti (titlu, autor, pret, descriere, user, poza,  gen) 
	  VALUES ('$titlu', '$autor', '$pret','$descriere', '$user', '$file', '$gen')");
      if(!$sql) {
        echo '<sript type="text/javascript"> alert("Cartea nu a putut fi adaugata ")</script>';
        } 
      else {
		 echo '<sript type="text/javascript"> alert( "CARTEA A FOST Inserata! VA MULTUMIM !")</script>';
                 header("Location: modifica.php");

        }
}
$result = mysql_query("SELECT * FROM carti");

?>
