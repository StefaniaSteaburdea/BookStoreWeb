<?php
    session_start();

    $sn= "localhost";
    $un= "SSteaburdea";
    $ps= " ";
    $db= "users";
    $con = mysql_connect($sn,$un,$ps);// selectarea bazei de date curente
    if (!$con) 
   	 die('Conexiune esuata '.mysql_error());
     mysql_select_db("SSteaburdea", $con);
     
    if (isset($_POST['USERNAME']) && isset($_POST['PASSWORD'])){
              function validate($data){
                  $data=trim($data);
                  $data=stripslashes($data);
                  $data=htmlspecialchars($data);
                  return $data;
     }

     $UNAME=validate($_POST['USERNAME']);
     $PASS=validate($_POST['PASSWORD']);
        
     $sql="SELECT * FROM users WHERE USERNAME='$UNAME' && PASSWORD='$PASS'";
     $result = mysql_query($sql);
     $row=mysql_fetch_array($result);
     if( $row['USERNAME']==$UNAME && $row['PASSWORD']==$PASS){
                $_SESSION['user']=$UNAME;
                header("Location: modifica.php");
      }
      else{    
                echo "parola sau user gresite";
     }
     }
     else{
             header("Location: index.php");	
             exit();
     }
     mysql_close($con);
?>