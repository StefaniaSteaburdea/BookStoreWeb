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
				<li><a href="index.html" accesskey="5" title="">Cărți</a></li>				
				<li class="current_page_item"><a href="#" accesskey="1" title="">Contact</a></li> 
				<li><a href="comanda.html" accesskey="5" title=""><img src="images/cart.png" width="50" height="50" /></a></li>
				<li><a href="log_in.html" accesskey="5" title=""><img src="images/log_in.png" width="50" height="50" /></a></li>

			</ul>
		</div>
	</div>
</div>
		<div class="container-contact100">
		<div class="wrap-contact100">
                <form action="adcarte.php" method="POST" enctype="multipart/form-data">
                  <span class="contact100-form-title">
					Carte
		  </span>
                 <div class="wrap-input100 validate-input" data-validate="Name is required">
                 <input class="input100" type="file" name="image" id="image"/>
                 </div>
                 <div class="wrap-input100 validate-input" data-validate="Name is required">
                 <input class="input100" id="titlu" type="varchar" name="titlu" placeholder="Titlu"/>
                 </div>
                 <div class="wrap-input100 validate-input" data-validate="Name is required">
                 <input class="input100" id="autor" type="varchar" name="autor" placeholder="Autor"/>
                 </div>
                 <div class="wrap-input100 validate-input" data-validate="Name is required">
		 <input class="input100" id="pret" type="int" name="pret" placeholder="Pret"/>
                 </div>
                 <div class="wrap-input100 validate-input" data-validate="Name is required">
                 <textarea class="input100" id="descriere" type="text" name="descriere" placeholder="Descriere"></textarea>
                 </div>
               
                 <label>
					  <select  name="gen">
					     <option value="">Selecta?i genul </option>
					     <option value="ro">Literatura rom?na </option>
					     <option value="univ">Literatura universala </option>
					     <option value="cpr">Culegeri I-IV </option>
                                             <option value="cgi">Culegeri V-VIII </option>
                                             <option value="cli">Culegeri IX-XII </option>
                                             <option value="cco">Car?i de colorat </option>
                                             <option value="basm">Basme </option>
                                             <option value="pov">Povestiri </option>
                                        </select>
		 </label>
                 <div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<input  name="send" type="submit" value="Trimite" class="auto-style1">
						</button>
					</div>
                </form>
           </div>
        </div>
      </body>
</html>



