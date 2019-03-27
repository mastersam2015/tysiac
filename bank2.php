<?

$plik = fopen('bank2.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

echo $tekst;
?>