
<?php
$con = mysql_connect("localhost", "SSteaburdea", " ");
if (!$con) {
    die('Conexiune esuata ' . mysql_error());
}
 die('Conexiune realizata ');
// selectarea bazei de date curente
$db_selected = mysql_select_db("SSteaburdea", $con);
?>


