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

<body>
  <div id="isi"> 
	<center>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php"><font color="white">
File yang di upload : </font><input type="file" name="fupload"><br><font color="white">
Deskripsi File : <font color="white"><br>
<textarea name="deskripsi" rows="8" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>
</center>
</div>
<div id="footer">Copyright &copy 2019-A2 by Tasya,Adhe,Fitri </div>
</body>