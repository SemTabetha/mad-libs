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
				<form action="les2paniek.php" method="post">
					<ul>
						<li><span>Welk dier zou je nooit als huisdier willen hebben?	</span><input type="text" name="dier" size="40"></li>
						<li><span>Wie is de belangrijkste persoon in je leven?			</span><input type="text" name="persoon" size="40"></li>
						<li><span>In welk land zou je graag willen wonen?				</span><input type="text" name="land" size="40"></li>
						<li><span>Wat doe je als je je verveelt?						</span><input type="text" name="verveel" size="40"></li>
						<li><span>Met welk speelgoed speelde je als kind het meest?		</span><input type="text" name="speelgoed" size="40"></li>
						<li><span>Bij welke docent spijbel je het liefst?				</span><input type="text" name="spijbel" size="40"></li>
						<li><span>Als je EUR 100.000,- had, wat zou je dan kopen?		</span><input type="text" name="kopen" size="40"></li>
						<li><span>Wat is je favoriete bezigheid?						</span><input type="text" name="bezigheid" size="40"></li>
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
