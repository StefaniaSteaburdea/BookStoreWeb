
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
<link href="styles.css" rel="stylesheet" type="text/css" media="all" />
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
				<li class="current_page_item"><a href="#" accesskey="1" title="">Cărți</a></li>
				<li><a href="contact.html" accesskey="5" title="">Contact</a></li>
				<li><a href="comanda.html" accesskey="5" title=""><img src="images/cart.png" width="50" height="50" /></a></li>
				<li><a href="log_in.html" accesskey="5" title=""><img src="images/log_in.png" width="50" height="50" /></a></li>
			</ul>
		</div>
	</div>
</div>
<div id="header-wrapper2" >
<ul>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>Beletristică</b></a>
    <div class="dropdown-content">
      <a href="index.php" >Literatura Romană</a>
      <a href="index2.php">Literatura Universală</a>
    </div>
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>Culegeri și manuale</b></a>
    <div class="dropdown-content">
      <a href="index3.php">Ciclul primar</a>
      <a href="index4.php">Gimnaziu</a>
      <a href="index5.php">Liceu</a>
    </div>
	<li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><b>Cărți pentru copii</b></a>
    <div class="dropdown-content">
      <a href="#">Cărți de colorat</a>
      <a href="index7.php">Basme</a>
      <a href="index8.php">Povestiri</a>
    </div>
  </li>
</ul>
</div>
<div id="footer" class="container">
      <form action="preia.php" method="POST">
       <div class="grid">
      <?php
           $con = mysql_connect("localhost", "SSteaburdea", " ");
            if (!$con) {
                      die('Conexiune esuata ' . mysql_error());
             }
             
             // selectarea bazei de date curente
             $db_selected = mysql_select_db("SSteaburdea", $con);
             $sql="SELECT * FROM carti WHERE gen='cco'";
             $qr= mysql_query($sql);
             while($row=mysql_fetch_array($qr))
             {
            ?>

		<div class="box" >
			<div class="grid2"><?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['poza']).'" style ="width:100px;"/>';?></div>
			<div class="grid3"><h3><b><?php echo $row['titlu']?></b></h3></div>
			<p> <?php echo $row['autor']?></p>
                        <p><?php echo $row['pret']?> lei</p>
			<a  class="button">Adauga in cos</a>
                
	     </div>
	   
         <?php
              
             }
       	?>
</div> 
 </form>
</div>

<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
