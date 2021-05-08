<?php
    session_start();
$con = mysql_connect("localhost", "SSteaburdea", " ");
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}

// selectarea bazei de date curente
$db_selected = mysql_select_db("SSteaburdea", $con);
      
if(isset($_GET['delete'])){
   $ID=$_GET['delete'];
   
   $sql=mysql_query("DELETE FROM carti WHERE ID=$ID");
   if(!sql)
       echo "nu s-a putut sterge";
   else
  {
     header('location: modifica.php');
   }
}

if(isset($_GET['edit'])){
   $ID=$_GET['edit'];
   $_SESSION['id']=$ID;
   header('location: edit.php');
}

if(isset($_POST['update'])){
    $ID=$_SESSION['id'];
    $titlu=$_POST['titlu'];
    $autor=$_POST['autor'];
    $pret=$_POST['pret'];
    $gen=$_POST['gen'];
    if(empty($_FILES["newimage"]["tmp_name"]))
    {
          $sql=mysql_query("SELECT * FROM carti WHERE ID=$ID");
             $row=mysql_fetch_array($sql);
             $file=$row['poza']; 
    }
    else
    {
         $file=addslashes(file_get_contents($_FILES["newimage"]["tmp_name"]));
    }
    if(isset($_Post['descriere'])){
           $descriere=$_POST['descriere'];
    }
    else
       {
             $sql=mysql_query("SELECT * FROM carti WHERE ID=$ID");
             $row=mysql_fetch_array($sql);
             $descriere=$row['descriere'];     

        }
    $sql=mysql_query("UPDATE `carti` SET `titlu`='$titlu',`autor`='$autor', `poza`='$file',`gen`='$gen', `descriere`='$descriere', `pret`='$pret' WHERE `ID`='$ID'");
    header('location: modifica.php');

}
?>