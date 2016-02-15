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
				<form action="les2onkunde.php" method="post">
					<ul>
						<li><span>Wat zou je graag willen kunnen?					</span><input type="text" name="kunnen" size="40"></li>
						<li><span>Met welke persoon kun je goed opschieten?			</span><input type="text" name="persoon" size="40"></li>
						<li><span>Wat is je favoriete getal?						</span><input type="text" name="getal" size="40"></li>
						<li><span>Wat heb je altijd bij je als je op vakantie gaat?	</span><input type="text" name="vakantie" size="40"></li>
						<li><span>Wat is je beste persoonlijke eigenschap?			</span><input type="text" name="beste" size="40"></li>
						<li><span>Wat is je slechste persoonlijke eigenschap?		</span><input type="text" name="slechste" size="40"></li>
						<li><span>Wat is het ergste dat je kan overkomen?			</span><input type="text" name="ergste" size="40"></li>
					</ul>
					<input class="Submit" type="submit" value="verzenden">
				</form>
				<br>
			</div>
			<div class="footer">
				<p>STZ</p>
			</div>
		</div>
	</body>
</html>
