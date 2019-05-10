<html>
<title>Query</title>
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
<div id="isi">   
<center>
<form enctype="multipart/form-data" method="POST" action="hasilquery.php"><font color="white">
Keyword : </font><br>
<input type="text" name="katakunci"><br>
<input type=submit>
</form>
</center>
</div>
<div id="footer">Copyright &copy 2019-A2 by Tasya,Adhe,Fitri </div>
</body>
</html>