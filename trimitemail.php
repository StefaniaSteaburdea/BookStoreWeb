<?php
//include "conectare.php";
$con = mysql_connect("localhost","SSteaburdea"," ");// selectarea bazei de date curente
if (!$con) 
    die('Conexiune esuata '.mysql_error());
    
 mysql_select_db("SSteaburdea", $con);

 if(isset($_POST['send']))
     {
      $nume=$_POST['nume'];
      $email=$_POST['email'];
      $mesaj=$_POST['mesaj'];
	  
      $sql=mysql_query("INSERT INTO Mesaje (nume, email, mesaj) 
	  VALUES ('$nume', '$email', '$mesaj')");
	  
      if(!$sql) {
        echo "Error: " . $sql . "<br>" . $con->error;
        } else {
		echo "<br><br>"."Mesaj trimis"."<br>";
        }
}
$result = mysql_query("SELECT * FROM Mesaje");

mysql_close($con);
?>
