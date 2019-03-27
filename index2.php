
<meta name="viewport" content="width=530">
<center>player2<br>
<?
function wagak($karta){



if ($karta=='2'){return 'w';}
if ($karta=='8'){return 'r';}
if ($karta=='14'){return 'd';}
if ($karta=='20'){return 'c';}
if ($karta=='4'){return 'w';}
if ($karta=='10'){return 'r';}
if ($karta=='16'){return 'd';}
if ($karta=='22'){return 'c';}
if ($karta=='5'){return 'w';}
if ($karta=='11'){return 'r';}
if ($karta=='17'){return 'd';}
if ($karta=='23'){return 'c';}
if ($karta=='6'){return 'w';}
if ($karta=='12'){return 'r';}
if ($karta=='18'){return 'd';}
if ($karta=='24'){return 'c';}
if ($karta=='3'){return 'w';}
if ($karta=='9'){return 'r';}
if ($karta=='15'){return 'd';}
if ($karta=='21'){return 'c';}
if ($karta=='1'){return 'w';}
if ($karta=='7'){return 'r';}
if ($karta=='13'){return 'd';}
if ($karta=='19'){return 'c';}



}

function wagaf($karta){

if ($karta=='2'){return 1;}
if ($karta=='8'){return 1;}
if ($karta=='14'){return 1;}
if ($karta=='20'){return 1;}
if ($karta=='4'){return 2;}
if ($karta=='10'){return 2;}
if ($karta=='16'){return 2;}
if ($karta=='22'){return 2;}
if ($karta=='5'){return 3;}
if ($karta=='11'){return 3;}
if ($karta=='17'){return 3;}
if ($karta=='23'){return 3;}
if ($karta=='6'){return 4;}
if ($karta=='12'){return 4;}
if ($karta=='18'){return 4;}
if ($karta=='24'){return 4;}
if ($karta=='3'){return 5;}
if ($karta=='9'){return 5;}
if ($karta=='15'){return 5;}
if ($karta=='21'){return 5;}
if ($karta=='1'){return 6;}
if ($karta=='7'){return 6;}
if ($karta=='13'){return 6;}
if ($karta=='19'){return 6;}

}

function wagap($karta){



if ($karta=='2'){return 0;}
if ($karta=='8'){return 0;}
if ($karta=='14'){return 0;}
if ($karta=='20'){return 2;}
if ($karta=='4'){return 2;}
if ($karta=='10'){return 2;}
if ($karta=='16'){return 2;}
if ($karta=='22'){return 2;}
if ($karta=='5'){return 3;}
if ($karta=='11'){return 3;}
if ($karta=='17'){return 3;}
if ($karta=='23'){return 3;}
if ($karta=='6'){return 4;}
if ($karta=='12'){return 4;}
if ($karta=='18'){return 4;}
if ($karta=='24'){return 4;}
if ($karta=='3'){return 10;}
if ($karta=='9'){return 10;}
if ($karta=='15'){return 10;}
if ($karta=='21'){return 10;}
if ($karta=='1'){return 11;}
if ($karta=='7'){return 11;}
if ($karta=='13'){return 11;}
if ($karta=='19'){return 11;}




}






?>
<script language="Javascript" type="text/javascript" src="jquery.js"></script>
<script>




function checkm(karta){


if(karta==5){
for (i=0;i<=10;i++){
if ($('#s'+i).val()=='6'){

				
$.get("meldunek2.php", { q : 40 },  function(data) {

		
});

}
}
}


if(karta==11){
for (i=0;i<=10;i++){
if ($('#s'+i).val()=='12'){

$.get("meldunek2.php", { q : 60 },  function(data) {

		
});
}
}
}


if(karta==17){
for (i=0;i<=10;i++){
if ($('#s'+i).val()=='18'){

$.get("meldunek2.php", { q : 80 },  function(data) {

		
});
}
}
}

if(karta==23){
for (i=0;i<=10;i++){
if ($('#s'+i).val()=='24'){

$.get("meldunek2.php", { q : 100 },  function(data) {

		
});
}
}
}
}


function karta(ob,num){
num=parseInt(num);


if (num==1){
$("#"+ob).attr('src', 'aswino.jpg');

}

if (num==2){
$("#"+ob).attr('src', 'dziewiecwino.jpg');
}
if (num==3){
$("#"+ob).attr('src', 'dziesiecwino.jpg');
}
if (num==4){
$("#"+ob).attr('src', 'jopekwino.jpg');
}
if (num==5){
$("#"+ob).attr('src', 'damawino.jpg');
}
if (num==6){
$("#"+ob).attr('src', 'krolwino.jpg');
}
if (num==7){
$("#"+ob).attr('src', 'asrzaledz.jpg');
}
if (num==8){
$("#"+ob).attr('src', 'dziewiecrzaledz.jpg');
}
if (num==9){
$("#"+ob).attr('src', 'dziesiecrzaledz.jpg');
}
if (num==10){
$("#"+ob).attr('src', 'jopekrzaledz.jpg');
}
if (num==11){
$("#"+ob).attr('src', 'damarzaledz.jpg');
}
if (num==12){
$("#"+ob).attr('src', 'krolrzaledz.jpg');
}
if (num==13){
$("#"+ob).attr('src', 'asdzwon.jpg');
}
if (num==14){
$("#"+ob).attr('src', 'dziewiecdzwon.jpg');
}
if (num==15){
$("#"+ob).attr('src', 'dziesiecdzwon.jpg');
}
if (num==16){
$("#"+ob).attr('src', 'jopekdzwon.jpg');
}
if (num==17){
$("#"+ob).attr('src', 'damadzwon.jpg');
}
if (num==18){
$("#"+ob).attr('src', 'kroldzwon.jpg');
}
if (num==19){
$("#"+ob).attr('src', 'asczerwo.jpg');
}
if (num==20){
$("#"+ob).attr('src', 'dziewiecczerwo.jpg');
}
if (num==21){
$("#"+ob).attr('src', 'dziesiecczerwo.jpg');
}
if (num==22){
$("#"+ob).attr('src', 'jopekczerwo.jpg');
}
if (num==23){
$("#"+ob).attr('src', 'damaczerwo.jpg');
}
if (num==24){
$("#"+ob).attr('src', 'krolczerwo.jpg');
}
//alert('www');
}

function reflesh(){
	
				last_update = new Date().getTime();
$.get("punkty2.php", { lastfetch : last_update },  function(data) {
$("#punkty").val(data);

		
});
	

	
				last_update = new Date().getTime();
$.get("kolejp.php", { lastfetch : last_update },  function(data) {
$("#kolejp").val(data);

		
});	

				last_update = new Date().getTime();
$.get("kolejg.php", { lastfetch : last_update },  function(data) {
$("#kolejg").val(data);

		
});	

	
				last_update = new Date().getTime();
$.get("pierwszak.php", { lastfetch : last_update },  function(data) {
$("#pierwszak").val(data);

		
});

			last_update = new Date().getTime();
$.get("meldunek2.php", { lastfetch : last_update },  function(data) {
$("#meldunek1").val(data);

		
});	

			last_update = new Date().getTime();
$.get("meldunek1.php", { lastfetch : last_update },  function(data) {
$("#meldunek2").val(data);

		
});

			last_update = new Date().getTime();
$.get("bank2.php", { lastfetch : last_update },  function(data) {
$("#bank1").val(data);

		
});

			last_update = new Date().getTime();
$.get("bank1.php", { lastfetch : last_update },  function(data) {
$("#bank2").val(data);

		
});
		


}
setInterval(reflesh, 1000);
function ready(){

						last_update = new Date().getTime();
$.get("koncz.php", { lastfetch : last_update },  function(data) {
if(data==3){
	location.href='sumuj2.php?meldunki='+$('#meldunek1').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s1').val()+'&reset=2&bank='+$('#bank1').val();	
}
if(data==1 || data==2){
$("#koncz").val("ready");
}	
});
				  
				  
$.get( "ready.php", function( data ) {
  //$( ".result" ).html( data );
  //alert( "Load was performed." );
	//alert(data);
		  	if(data==2){
				//$("#ready").val("ready");
				
				
				//window.location.href="index2.php?kolor=n&x="+gox+"&y="+goy+"&ostring="+ostring;	
				window.location.href="index2.php?reset=4";
				}else if(data==4){
						$("#ready").val("reflesh");
					//$("#re").show();
				
						// ostring != 0
						//window.location.href="index2.php?reset=1;
					
					//alert(gox);
				}
	
});
				
					  
 
		
	
		
		}
		
		
		setInterval(ready, 1000);
		
		
		function koncz(){
			
			$.get("koncz.php", { q : 2 },  function(data) {


		
});
			
		}
</script>
<center>
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<img  width="50" src="talia.jpg" >
<br><br><br>
<img  width="50" src="talia.jpg" id="st1" style="width:50;display:none;">
<img  width="50" src="talia.jpg" id="st2" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st3" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st4" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st5" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st6" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st7" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st8" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st9" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st10" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st11" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st12" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st13" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st14" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st15" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st16" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st17" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st18" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st19" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st20" style="width:50;display:none;">  
<img  width="50" src="talia.jpg" id="st21" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st22" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st23" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st24" style="width:50;display:none;"> 
<img  width="50" src="talia.jpg" id="st25" style="width:50;display:none;"> 
<br><br><br>
<img width="50" src="talia.jpg" id="k1" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s1').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k2" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s2').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k3" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s3').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k4" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s4').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k5" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s5').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k6" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s6').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k7" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s7').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k8" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s8').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k9" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s9').val()+'&reset=1';}"> 
<img  width="50" src="talia.jpg" id="k10" onclick="if($('#kolejg').val()=='player2' ){location.href='index2.php?meldunki='+$('#meldunki').val()+'&punkty='+$('#punkty').val()+'&kolejg='+$('#kolejg').val()+'&pierwszak='+$('#pierwszak').val()+'&kolejp='+$('#kolejp').val()+'&karta='+$('#s10').val();}"> 


<input type="hidden" id="s1">
<input type="hidden" id="s2">
<input type="hidden" id="s3">
<input type="hidden" id="s4">
<input type="hidden" id="s5">
<input type="hidden" id="s6">
<input type="hidden" id="s7">
<input type="hidden" id="s8">
<input type="hidden" id="s9">
<input type="hidden" id="s10">


<br><br><br>


<br>
bank:<input type="text" id="bank1" ><br>
bank przeciwnika:<input type="text" id="bank2" ><br>
meldunki:<input type="text" id="meldunek1" ><br>
meldunki przeciwnika:<input type="text" id="meldunek2" ><br>
punkty:<input type="text" id="punkty" ><br>
kolej gracza:<input type="text" id="kolejg"><br>
pierwsza karta:<input type="text" id="pierwszak"><br>

kolej partii:<input type="text" id="kolejp" ><br>
ready:<input type="text" id="ready"><br>

<input type="button" value="koncz partie" onclick="koncz();"><input type="text" id="koncz">



<script>

<?
//-----------------------------------skrypty
$reset=$_GET["reset"];
if(!empty($reset)){
$tekst4=$reset;
$plik = fopen('ready.txt','w');
fputs($plik, $tekst4);
fclose($plik); 
}

//-----------------------------------stul
$fp=fopen("kupka2.txt", "r");
while (!feof($fp)){
$str = fgets($fp);  
  }
  $str=str_replace(",,,",",",$str);
  $str=str_replace(",,",",",$str);
   
$tab=explode(",", $str);;
$pryk=count(array_filter($tab));
for ($i=1;$i<$pryk;$i++){
$cos++;
echo "karta('k".$i."',".$tab[$i].");";
echo "$('#s".$i."').val('".$tab[$i]."');";

}

$fp=fopen("stul.txt", "r");
while (!feof($fp)){
$str = fgets($fp);  
  }
$tab=explode(",", $str);;
$pryk=count(array_filter($tab));
for ($i=1;$i<=$pryk;$i++){
$cos++;
echo "karta('st".$i."','".$tab[$i]."');$('#st".$i."').show();";
}
//---------------------------------------------------po skryptach
?>

</script>

<?
//------------------------------------------sety
$karta=$_GET["karta"];
$meldunki=$_GET["meldunki"];
$punkty=$_GET["punkty"];
$kolejg=$_GET["kolejg"];
$pierwszak=$_GET["pierwszak"];
$kolejp=$_GET["kolejp"];
//--------------------------------dzialania na karcie
if (!empty($karta)){
		if($pierwszak=="player2"){ echo "<script>checkm('".$karta."');</script>";}

	$plik = fopen('stul.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);
	
	if($pierwszak=="player1"){
	
	$talia=explode(",", $tekst);
	$pryk=count(array_filter($talia));
	$ostatnia=$talia[$pryk];
	if (wagak($ostatnia)==wagak($karta)){
if (wagaf($ostatnia)<wagaf($karta)){
$zatar=1;

}
}
	}


if($zatar!=1){

$tekst="player1";
$plik = fopen('kolejg.txt','w');
fputs($plik, $tekst);
fclose($plik);



//-----------------------------karty z puli

$plik = fopen('stul.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

$fix=$tekst.",".$karta;

$plik = fopen('stul.txt','w');
fputs($plik, $fix);
fclose($plik);

$fp=fopen("kupka2.txt", "r");
while (!feof($fp)){
$str = fgets($fp);  
  }

fclose($fp);
$kartafix=",".$karta.",";
$nowa=str_replace($kartafix,",",$str);

$plik = fopen('kupka2.txt','w');
fputs($plik, $nowa);
fclose($plik);
}else{
	
	$fp=fopen("kupka2.txt", "r");
while (!feof($fp)){
$str = fgets($fp);  
  }

fclose($fp);
$kartafix=$karta.",";
$nowa=str_replace($kartafix,"",$str);

$plik = fopen('kupka2.txt','w');
fputs($plik, $nowa);
fclose($plik);
	
	
$plik = fopen('stul.txt','r');
$tekst=fgets($plik, 10000);
fclose($plik);

$fix=$tekst.",".$karta;

$plik = fopen('stul.txt','w');
fputs($plik, $fix);
fclose($plik);
$tekst="player2";
$plik = fopen('kolejg.txt','w');
fputs($plik, $tekst);
fclose($plik);

$tekst="player2";
$plik = fopen('pierwszak.txt','w');
fputs($plik, $tekst);
fclose($plik);

$zatar=0;


$punkty=$punkty+wagap($karta)+wagap($ostatnia);
$tekst=$punkty;
$plik = fopen('punkty2.txt','w');
fputs($plik, $tekst);
fclose($plik);
}
	
if($pierwszak=="player2"){
$punkty=$punkty+wagap($karta)+wagap($ostatnia);
$tekst=$punkty;
$plik = fopen('punkty2.txt','w');
fputs($plik, $tekst);
fclose($plik);
}
echo "<script>location.href='index2.php';</script>";


}

$str="0";
$plik = fopen('koncz.txt','w');
fputs($plik, $str);
fclose($plik);
?>


