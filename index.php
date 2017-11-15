<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://html5-templates.com/" />
    <title>How i met U</title>
    <meta name="description" content="A brief page description">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/styleForm.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
	<link rel="icon" href=".\img\thumbnail.png">
    <script src="js/script.js"></script>
	<script src="js/returns.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
              sectionsColor: ['#ffcc00', '#4BBFC3', '#7BAABE', 'whitesmoke', '#ccddff'],
              anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
              menu: '#menu',
            });
        });
    </script>
</head>

<body>
<?php
include("security/connectiondb.php");
if(isset($_POST["nome"]) && isset($_POST["email"]) ){	
	aggiungiUser($_POST["nome"],$_POST["email"],$_POST["commento"]);	
}
include("security/Analytics.php");

?>
<noscript>
	<p> Please enable Javascript on your browser (settings at up right corner) </p>
</noscript>	

<ul id="menu">
    <li data-menuanchor="firstPage" class="active"><a href="#firstPage">Chi siamo</a></li>
    <li data-menuanchor="secondPage"><a href="#secondPage">Cosa facciamo</a></li>
    <li data-menuanchor="3rdPage"><a href="#3rdPage">Rimani aggiornato</a></li>
</ul>

<div id="fullpage">
    <div class="section " id="section0">
        <h1>How i met U</h1>
        <p>Join new groups of friends to obtain discounts</p>
        <p class="introimg">&darr;&#9636;&darr;</p>
    </div>
    <div class="section active" id="section1">
        <div class="slide" id="slide1">
                <h1>Novità</h1>
                <p>Vorresti provare il nuovo pub appena aperto, ma non conosci nessuno con cui andarci?</p>
        </div>
        <div class="slide active" id="slide2">
            <h1>Divertimento</h1>
			<p>Vorresti conoscere nuovi persone con i tuoi stessi interessi?</p>
        </div>
        <div class="slide" id="slide3">
            <h1>Risparmio</h1>
			<p>Ti piacerebbe risparmiare qualcosa quando esci?</p>
        </div>

    </div>
    <div class="section" id="section2">
        <div class="intro">
			<form action="index.php" method="post">
			<div class="form_1">
				<table  >
					<tr>
						<td class="celle"><label>Nome</label></td><td class="celle"><input class="input" type="text" name="nome" placeholder="" required=""></td>
					</tr>
					<tr>
						<td class="celle"><label >Email</label></td><td class="celle"><input class="input" type="text" name="email" placeholder="" required=""></td>
					</tr>
					<tr>
						<td class="celle" ><label >Puoi lasciarci un commento</label></td><td class="celle"><textarea  class="input"  name="commento" cols="22" rows="5"></textarea></td>
					</tr>				
			
				</table>
			</div>
				<input class="btn" type="submit" value="Invia">
		
			</form>
		   
		   
        </div>
    </div>
</div>

</body>

</html>