<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>PHP_Auswerten</TITLE>
	</HEAD>
	<BODY>
		<?php
			$alter = $_GET['form_alter'];
			$inhaltArray = $_GET['form_textfeld'];
			$inhalt = "$inhaltArray\n\n";
			echo "<h2> Wilkommen auf der Auswertungsseite!</h2>";
			echo $alter," ist Ihr Alter.<br>";
			if	(isset($_GET['form_student'])&& $_GET['form_student']==true) {
				echo "Sie sind Student";
				if($_GET['form_radio'] == "ja") {
					echo " an der Hochschule fuer Wirtschaft und Recht (HWR).";
				}
				if($_GET['form_radio'] == "nein") {
					echo " an einer anderen Hochschule als der HWR.";
				}
				if($_GET['form_radio'] == "") {
					echo "";
				}
			}
			else
				echo "Sie sind kein Student.";
			$anzahlGETELemenete = count($_GET);
			echo "<br> Es gibt ",$anzahlGETELemenete," Elemente im GET Array.";
			$ersterGETArrayEintrag = $_GET['form_alter'];
			echo"<br> An Stelle 1 steht ",$ersterGETArrayEintrag;
			$neue_datei = fopen ("kommentare_phpTesting.txt", "a");
			fwrite ($neue_datei, $inhalt);
			fclose ($neue_datei);
		?>
	</BODY>
</HTML>