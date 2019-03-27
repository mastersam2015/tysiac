<?

$plik = fopen('bank1.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

echo $tekst;
?>