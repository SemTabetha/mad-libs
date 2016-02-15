<!DOCTYPE html>
<html>
	<head>
		<title>Mad Libs</title>
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<div class="header">
			<h1>Mad Libs</h1>
		</div>
		<div class="container">
			<div class="nav">
				<ul>
					<li><a href="les2.php">Er heerst paniek...</a></li>
					<li><a href="les2-2.php">Onkunde</a></li>
				</ul>
			</div>
			<div class="content">
			<h2>Er heerst Paniek...</h2>
			
				<p>Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>.
				Koning <?php echo $_POST["spijbel"]; ?> is ten einde raad en als koning <?php echo $_POST["spijbel"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]; ?>.
				</p>
				<br>
				<p>"<?php echo $_POST["persoon"]; ?>! Het is een ramp! Het is een schande!"</p>
				<br>
				<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
				<br>
				<p>"Mijn <?php echo $_POST["dier"]; ?> is verdwenen! Zo maar, zonder waarschuwing.
				En ik had net <?php echo $_POST["speelgoed"]; ?> voor hem gekocht!"</p>
				<br>
				<p>"Majesteit, uw <?php echo $_POST["dier"]; ?> komt vast vanzelf weer terug?"</p>
				<br>
				<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd
				<?php echo $_POST["bezigheid"]; ?> leren?"</p>
				<br>
				<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["kopen"]; ?> voor gebruiken."</p>
				<br>
				<p>"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
				<br>
				<p>"<?php echo $_POST["verveel"]; ?>, Sire."</p>
			</div>
			<div class="footer">
				<p>STZ</p>
			</div>
		</div>
	</body>
</html>