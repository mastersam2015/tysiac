<?

$plik = fopen('pierwszak.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

echo $tekst;
?>