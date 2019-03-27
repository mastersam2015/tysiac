<?

$plik = fopen('kolejg.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

echo $tekst;
?>