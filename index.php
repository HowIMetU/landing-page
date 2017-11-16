<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://html5-templates.com/" />
	<!--
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css">
	-->
    <title>How i met U</title>
    <meta name="description" content="A brief page description">
	<!--
		<link rel="stylesheet" href="css/bulmra.css">
	-->
	
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
	<script type="text/javascript">
	function change()
	{
		var selectedobj=document.getElementById('mexOKSubmit');
	
			selectedobj.style.display = "block";
			selectedobj.readOnly=true;
			selectedobj.className ='show';
	}
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

<div>
	<ul id="menu">
		<li data-menuanchor="firstPage" ><a href="#firstPage">Chi siamo</a></li>
		<li data-menuanchor="secondPage"><a href="#secondPage">Cosa facciamo</a></li>
		<li data-menuanchor="3rdPage"><a href="#3rdPage">Rimani aggiornato</a></li>
	</ul>
</div>

<div id="fullpage">
    <div class="section active" id="section0">
		<div class="primaPagina">
			<h1>mate<big>S</big>lot</h1>
			<p>Il social che esce dal social</p>
			<p class="introimg">&darr;&#9636;&darr;</p>
		</div>
	</div>
    <div class="section " id="section1">
        <div class="slide" id="slide1">
			<p>Conosci chi ti assomiglia !</p>     
        </div>
        <div class="slide active" id="slide2">
			<h2>Vorrei andarci, ma con chi ?</h2>
			<p>Unisci nuovi e vecchi amici con cui</p>
			<p>andare nei posti che ami</p>
			<p>... o che vuoi scoprire!</p>
        </div>
        <div class="slide" id="slide3">

			<p class="soldi">Insieme a te costa meno !</p>
        </div>

    </div>
    <div class="section" id="section2">
        <div class="intro">
			<div class="form_container">
				<form action="index.php" method="post">
				<center>
					<div class="form_1">
						<table>
							<tr>
								<td class="celle"><label  class="lb">Nome</label></td><td class="celle"><input class="input" type="text" name="nome" placeholder="" required=""></td>
							</tr>
							<tr>
								<td class="celle"><label  class="lb">Email</label></td><td class="celle"><input class="input" type="text" name="email" placeholder="" required=""></td>
							</tr>
							<tr>
								<td class="celle" ><label class="lb">Puoi lasciarci un commento</label></td><td class="celle"><textarea  class="input"  name="commento" cols="24" rows="5"></textarea></td>
							</tr>				
					
						</table>
					</div>
				
					<input class="btn" type="submit" value="Invia" onclick="change();" >
					
				</center>
				</form>
				
				<label style="display:none" id="mexOKSubmit">Il tuo messaggio è stato inviato! Grazie!</label>
			   

			</div>
		</div>
	</div>

</body>

</html>