<?

$plik = fopen('meldunek1.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

echo $tekst;

$q=$_GET["q"];
if(!empty($q)){
	$fix=$tekst+$q;
	$plik = fopen('meldunek1.txt','w');
fputs($plik, $fix);
fclose($plik);
	
}
?>