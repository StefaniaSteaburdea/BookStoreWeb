<?php 
    session_start();
    if(!isset($_SESSION['user'])){
      header("Location: log_in.html");
      exit();
   }

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />



</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<img src="images/logo.png" width="330" height="186" alt="a" />
		</div>
		<div id="menu">
			<ul>	
				<li><a href="Homepage.html" accesskey="5" title="">Pagina principală</a></li>
				<li><a href="index.php" accesskey="5" title="">Carti</a></li>
				<li><a href="contact.html" accesskey="5" title="">Contact</a></li>
				<li><a href="comanda.html" accesskey="5" title=""><img src="images/cart.png" width="50" height="50" /></a></li>
				<li class="current_page_item"><a href="#" accesskey="1" title=""><img src="images/log_in.png" width="50" height="50" /></a></li>
			</ul>
		</div>
	</div>
</div>

<div id="header-wrapper2" >
        <li><a href="data.php" accesskey="5" title="">Adaugati o carte</a></li>

</div>
<div id="footer" class="container">
<form action="UD.php" method="POST" enctype="multipart/form-data">
       <table>
       <thead>
          <tr>
             <th> Titlu </th>
             <th> Autor </th>
             <th> Pret </th>
             <th> Poza </th>
             <th> Gen </th>
             <th> Descriere </th>
	  </tr>
       </thead>
       <?php
           $con = mysql_connect("localhost", "SSteaburdea", " ");
            if (!$con) {
                      die('Conexiune esuata ' . mysql_error());
             }
             
             // selectarea bazei de date curente
             $db_selected = mysql_select_db("SSteaburdea", $con);
             $uname=$_SESSION['user'];
             $sql="SELECT * FROM carti WHERE user='$uname'";
             $qr= mysql_query($sql);
             while($row=mysql_fetch_array($qr))
             {
                   ?>
                     <tr>
                         <td> <?php echo $row['titlu']?> </td>
                         <td> <?php echo $row['autor']?> </td>
                         <td>   <?php echo $row['pret']?>lei    </td>
                         <td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poza']).'" style ="width:100px;"/>';?> </td>
                         <td> <?php echo $row['gen']?>  </td>
                         <td> <?php echo $row['descriere']?> </td>
                         <td>  <a href="UD.php?edit=<?php echo $row['ID'];?>" class="button">Editare</a> </td>
                         <td> <a href="UD.php?delete=<?php echo $row['ID'];?>" class="button">Stergere</a></td>

       <?php
             }
       ?>
      </table>
</form>
</div>
<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
