<?
session_start();
$_SESSION['licznik']=0;
//-------------------------------------------tasowanie


function foo($x){
if($x==2){
return 1;
}
if($x==4){
return 2;
}

if($x==5){
return 3;
}

if($x==6){
return 4;
}

if($x==3){
return 5;
}

if($x==1){
return 6;
}

if($x==8){
return 7;
}

if($x==10){
return 8;
}

if($x==11){
return 9;
}

if($x==12){
return 10;
}

if($x==9){
return 11;
}

if($x==7){
return 12;
}

if($x==14){
return 13;
}

if($x==16){
return 14;
}

if($x==17){
return 15;
}

if($x==18){
return 16;
}

if($x==15){
return 17;
}

if($x==13){
return 18;
}

if($x==20){
return 19;
}

if($x==22){
return 20;
}

if($x==23){
return 21;
}

if($x==24){
return 22;
}

if($x==21){
return 23;
}

if($x==19){
return 24;
}




}

//--------------------------------------SEGREGACJA
/*

$tekst="";
$plik = fopen('talia.txt','w');
fputs($plik, $tekst);
fclose($plik);
$z=1;
$p=1;
$talia=",";
while($z==1){
$zm=rand(1,24);
$por=",".$zm.",";
if (strstr($talia,$por)){
}else{
$talia.=$zm.",";
$p++;


}
if ($p==24){
$z=0;
}
}

$tekst=$talia;
$plik = fopen('talia.txt','w');
fputs($plik, $tekst);
fclose($plik);

$talia2=explode(",", $talia);
for ($i=0;$i<=10;$i++){
	
	$kupka1[$i]=$talia2[$i];
}



 for($j = 0; $j <= 10; $j++)
  {
    for($i = $j ; $i <= 10; $i++){
      if(foo($kupka1[$i]) < foo($kupka1[$j])){
	  $w = $kupka1[$i]; $kupka1[$i] = $kupka1[$j]; $kupka1[$j] = $w;
	  }
   }
  }
  $kupka1i=implode(",", $kupka1);
$plik = fopen('kupka1.txt','w');
fputs($plik, $kupka1i);
fclose($plik);



$cos=0;
for ($i=11;$i<=20;$i++){
	$cos++;
	$kupka2[$cos]=$talia2[$i];
}


 for($j = 0; $j <= 9; $j++)
  {
    for($i = $j ; $i <= 10; $i++){
      if(foo($kupka2[$i]) < foo($kupka2[$j])){
	  $w = $kupka2[$i]; $kupka2[$i] = $kupka2[$j]; $kupka2[$j] = $w;
	  }
   }
  }

$kupka2i=implode(",", $kupka2);
$plik = fopen('kupka2.txt','w');
fputs($plik, $kupka2i);
fclose($plik);

*/

//var_dump($kupka2);


//----------------------------------------------punkty

$karta=$_GET["karta"];
$meldunki=$_GET["meldunki"];
$punkty=$_GET["punkty"];
$kolejg=$_GET["kolejg"];
$pierwszak=$_GET["pierwszak"];
$kolejp=$_GET["kolejp"];
$bank=$_GET["bank"];



//kolej parti
/*
if($kolejp=="player1"){

$str="player2";
$plik = fopen('kolejp.txt','w');
fputs($plik, $str);
fclose($plik);
}else{
	
	
$str="player1";
$plik = fopen('kolejp.txt','w');
fputs($plik, $str);
fclose($plik);

}
*/
//---------bank
$plik2= fopen('bank2.txt','r');
$tekst2=fgets($plik2, 10000);
fclose($plik2);

$str=$tekst2+$meldunki+$punkty;
$plik = fopen('bank2.txt','w');
fputs($plik, $str);
fclose($plik);


//-----------kolej gracza
/*
if($kolejp=="player1"){
$str="player2";
$plik = fopen('kolejg.txt','w');
fputs($plik, $str);
fclose($plik);

}else{
	
$str="player1";
$plik = fopen('kolejg.txt','w');
fputs($plik, $str);
fclose($plik);
	
	
	
}
*/


$str="0";
$plik = fopen('meldunek1.txt','w');
fputs($plik, $str);
fclose($plik);


$str="0";
$plik = fopen('meldunek2.txt','w');
fputs($plik, $str);
fclose($plik);

/*
if($kolejp=="player1"){
$str="player2";
$plik = fopen('pierwszak.txt','w');
fputs($plik, $str);
fclose($plik);
}else{
	
$str="player1";
$plik = fopen('pierwszak.txt','w');
fputs($plik, $str);
fclose($plik);	
	
}
*/
$str="0";
$plik = fopen('punkty1.txt','w');
fputs($plik, $str);
fclose($plik);


$str="0";
$plik = fopen('punkty2.txt','w');
fputs($plik, $str);
fclose($plik);


$str="";
$plik = fopen('stul.txt','w');
fputs($plik, $str);
fclose($plik);
/*
$str="0";
$plik = fopen('koncz.txt','w');
fputs($plik, $str);
fclose($plik);
*/

/*
$plik2= fopen('kupka2.txt','r');
$tekst2=fgets($plik2, 10000);
fclose($plik2);

$fix2=",".$tekst2.",";

$plik2 = fopen('kupka2.txt','w');
fputs($plik2, $fix2);
fclose($plik2);
*/
//echo $bank." bank<br>";
//echo $meldunki." meldunki<br>";
//echo $punkty." punkty<br>";
?>
loading....

<meta http-equiv="refresh" content="1; url=index2.php" />
