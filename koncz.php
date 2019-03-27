<?

$qu=$_GET["q"];

$plik2= fopen('koncz.txt','r');
$tekst2=fgets($plik2, 10000);
fclose($plik2);

if(!empty($qu)){


$fix2=intval($tekst2)+intval($qu);

$plik2 = fopen('koncz.txt','w');
fputs($plik2, $fix2);
fclose($plik2);


}
echo $qu;
echo $tekst2;

?>