<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pra C1</title>
	<link rel="stylesheet" href="css/main.css">
	
</head>
<body>
	<header>
		<?php
			require_once 'header.php';
		?>
	</header>
	<main>
		<div class="style">
			<div id="vakken" class="vakken">
				<h1>VAKKEN</h1>
				<div class="standaard">
					<p>Je hebt verschillende vakken bij de opleinding Software Developer je hebt standaard vakken zoals:</p>
					<li>Nederlands</li>
					<li>Engels</li>
					<li>Rekenen</li>	
				</div>
				<div class="bijzonder">
					<p>Maar je hebt ook vakken speciaal voor deze opleiding waar je ook echt gaat werken met code</p>
					<p>WIN: Bij het vak Windows development ga je leren code te schrijven voor apps voor je computer in het eerste jaar begin je eerst met de mirco bit en later ga je beginnen met de code taal Python waar je echt code gaat schrijven. Na blok A stop je met python en ga je verder werken met C# en XAML</p>
					<p>WEB: Bij web development ga je werken met HTML CSS en PHP deze talen gebruik je voor het maken van Websites in het eerste blok ga je vooral aan de slag met HTML CSS en maar een beetje met php. Vanaf blok B ga je meer focussen op PHP en de website echt dingen te laten doen.</p>
					<p>PRA: Bij praktijk krijg je verschillende opdrachten die je moet maken met de stof die je leert bij de WEB en WIN lessen je wekrt vaak in groepjes maar soms ook alleen.</p>
				</div>
			</div>
		</div>
		<div class="style">
			<div id="rooster" class="rooster">
				<h1>ROOSTER</h1>
				<img src="img/rooster.png" alt="rooster">
			</div>
		</div>
		<div class="style">
			<div id="blokken" class="blokken">
				<h1>BLOKKEN</h1>
				<div class="info">
					<p>Elk school jaar heb je 2 blokken. In het eerste jaar het je blok A en B om het half jaar wissel je van blok maar het kan ook zijn dat je een blok over nieuw moet doen je doet dan een half jaar over nieuw inplaats van een heel jaar. in blok A leer je een beetje het begin van code. Bij WEB leer je een statische website te kunnen bouwen en bij WIN leer je door middel van de mirco bit makkelijk te denken met code en ga je uiteindelijk met PYTHON werken. in blok B ga je overal dieper op in bij de WEB lessen ga je werken aan de backend met PHP en bij WIN ga je werken met C#.</p>
				</div>
					<img src="img/blokken.png" alt="">
			</div>
		</div>
		<div class="style">
			<div id="versnellen" class="versnellen">
				<h1>VERSNELLEN</h1>
				<h2>Hoe Werkt versnellen?</h2>
				<div class="bijzonder">
					<p>Als je blok A hebt afgerond ga je naar blok B, maar als je blok A zo goed hebt afgerond kan je het advies krijgen om te gaan versnellen. Als je gaat versnellen doe je de opleiding in 3 jaar in plaats van 4 jaar. Je kan als het goed is nog wel terug gaan naar de 4 jarige opleiding.</p>
				</div>
			</div>
		</div>
		<div class="style">
			<div id="docenten" class="docenten">
			<h1>DOCENTEN</h1>
			<div class="docenten-img">
				<?php
					$docenten = array('Elton', 'Joost', 'Corne', 'Ine', 'Fedde', 'Wicher', 'Joep');
					$random_keys=array_rand($docenten,4);?>
					<img src="img/<?php echo $docenten[$random_keys[0]]?>.png" alt="">
					<img src="img/<?php echo $docenten[$random_keys[1]]?>.png" alt="">
					<img src="img/<?php echo $docenten[$random_keys[2]]?>.png" alt="">
					<img src="img/<?php echo $docenten[$random_keys[3]]?>.png" alt="">
				
				
			</div>
			<div class="docenten-tekst">
					
					<p><?php echo $docenten[$random_keys[0]]; ?></p>
					<p><?php echo $docenten[$random_keys[1]]; ?></p>
					<p><?php echo $docenten[$random_keys[2]]; ?></p>
					<p><?php echo $docenten[$random_keys[3]]; ?></p>
					

				
			</div>
		</div>
		</div>
		
	</main>
	<footer>
		<?php require_once 'footer.php'  ?>
	</footer>
</body>

</html>