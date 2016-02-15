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
			<h2>Onkunde</h2>
				<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]; ?>. Neem nou <?php echo $_POST["persoon"]; ?>.
				Zelfs met de hulp van een <?php echo $_POST["vakantie"]; ?> of zelfs <?php echo $_POST["getal"]; ?> kan <?php echo $_POST["persoon"]; ?> niet <?php echo $_POST["kunnen"]; ?>.
				Dat heeft niet te maken met een gebrek aan <?php echo $_POST["beste"]; ?>, maar met een te veel aan <?php echo $_POST["slechste"]; ?>.
				Te veel <?php echo $_POST["slechste"]; ?> leidt tot <?php echo $_POST["ergste"]; ?> en dat is niet goed als je wilt <?php echo $_POST["kunnen"]; ?>.
				Helaas voor <?php echo $_POST["persoon"]; ?>.</p>
			</div>
			<div class="footer">
				<p>STZ</p>
			</div>
		</div>
	</body>
</html>