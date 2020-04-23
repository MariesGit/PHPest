<?PHP
echo "Meine Rechnungen:<br><br>";
for ($i =1; $i<10; $i++) {
	$ergebnis = $i*$i;
	echo "$i*$i=", $i*$i;
	echo "<br>";
	$inhalt = "$i*$i=$ergebnis\n";
	//$text = $i."*".$i."=".$i*$i; //
	$neue_datei = fopen ("for_echo.txt", "a");
	fwrite ($neue_datei, $inhalt);
	fclose ($neue_datei);
	};
echo "<br>";
echo "Der Inhalt der Tabelle wurde in der Datei for_echo.txt gespeichert.<br>";
echo date('l\, j\. F Y\, H:i:s');
$datum = date('l\, j\. F Y\, H:i:s');
$date_inhalt = "$datum\n\n";
$neue_datei2 = fopen ("for_echo.txt", "a");
fwrite ($neue_datei2, $date_inhalt);
fclose ($neue_datei2);

// Besucherzähler: Lesen der Datei
$dateinamen = "besucherzaehler.txt";
$handle = fopen ($dateinamen, "r");
$besucherzahl = fread ($handle, filesize ($dateinamen));
fclose ($handle);
 
$besucherzahl = $besucherzahl + 1;
echo "<p>bisher waren  <b>$besucherzahl</b> Besucher hier</p>";
 
// Schreiben des neuen Wertes
$handle = fopen ("besucherzaehler.txt", "w");
fwrite ($handle, $besucherzahl);
fclose ($handle);
?>
