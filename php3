<html>
<head>
<meta charset="UTF-8">
<title>Asal Sayı</title>
</head>
 
<body>
 
Bir Sayı Giriniz : <input type="text" id="sayi1" />
<br />
<input type="button" value="Hesapla" onclick="asalHesapla()" />
<br />
<p id="demo"></p>
<script language="javascript" type="text/javascript">
var text="";
var sayi=0;
 
function asalHesapla()
{
var sayac=0;
sayi=document.getElementById('sayi1').value;
for(i=2; i<sayi; i++)
 {
	if(sayi%i==0)
	{
	sayac++;
	}
 }
	if(sayac==0)
	{
	text="Asal";
	}
	else
	{
	text="Asal değil.<br/> 1 ve Kendisi hariç <strong>"+sayac+"</strong> adet böleni var";
	}
 document.getElementById('demo').innerHTML = text;
 }
</script>
</body>
</html>
