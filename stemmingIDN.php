<?php

include_once 'IDNstemmer.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>UNISBANK</title>
	<link rel="stylesheet" type="text/css"
	media="all" href="style.css">
</head>
<body >
	<div id="layout">
		<div id="header">
		<img src="unisbank.png" class="header">
	</div>
      <div id="menu">
       <ul>
       	<li><a href="home.php">Home</a></li>
        <li><a href="upload.php">upload file PDF</a></li>
        <li><a href="stemmingIDN.php">stemming</a></li>
        <li><a href="hasil_tokenisasi.php">hasil token</a></li>
        <li><a href="query.php">pencarian kata kunci </a></li>
        
        </ul>
    </div>
 </div>   
</body>
</html>
</head>
<body>
<div id="isi">
	<center>
<h3><font color="white">PENCARIAN KATA DASAR</font></h3>
<form method="post" action="">
<input type="text" name="kata" id="kata" size="20" value="<?php if(isset($_POST['kata'])){ echo $_POST['kata']; }else{ echo '';}?>">
<input class="btnForm" type="submit" name="Cari" value="Submit"/>
</form>
<?php
if(isset($_POST['kata'])){
	$teksAsli = $_POST['kata'];
	echo "Teks asli : ".$teksAsli.'<br/>';
	$st = new IDNstemmer();
	$hasil=$st->doStemming($teksAsli);
	echo "Kata dasar : ".$hasil.'<br/>';
}
?>
</center>
</div>
<div id="footer">Copyright &copy 2019-A2 by Tasya,Adhe,Fitri </div>
</body>
</html>




