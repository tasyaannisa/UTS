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

<div id="isi">
 <table border="1" align="center">
        <h1 class="font-weight-bold text-center"><font color="white">Hasil Pencarian</font></h1>
       
            <thead class="text-center">

                <tr style="background-color: white;">
                      <th class="font-weight-bold">Nama File</th>
                      <th class="font-weight-bold">Tokenisasi</th>
                      <th class="font-weight-bold">TokenStem</th>
                </tr>
            </thead>
            </div>

 <?php
 ///
 ?>

 <?php
 //https://dev.mysql.com/doc/refman/5.5/en/fulltext-boolean.html
 //ALTER TABLE dokumen
//ADD FULLTEXT INDEX `FullText` 
//(`token` ASC, 
 //`tokenstem` ASC);
 
$servername = "localhost";
$username = "id9563875_tadefi";
$password = "12345";
$dbname = "id9563875_tadefi";
$katakunci="";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$hasil=$_POST['katakunci'];
//$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` where token like '%$hasil%'";
$sql = "SELECT distinct nama_file,token,tokenstem FROM `dokumen` WHERE MATCH (token,tokenstem) AGAINST ('$hasil' IN BOOLEAN MODE)";


//echo $sql . "<br";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<tbody>
                        <tr style="background-color: white;">
                            <td> '.$row['nama_file'].'</td>
                            <td> '.$row['token'].'</td>
                            <td> '.$row['tokenstem'].'</td>
                        </tr>
                       </tbody';

    }
} else {
    echo "hasil dengan kata ". $hasil . "  tidak ditemukan";
}
$conn->close();

?>
</table>
</div>
</body>
</html>