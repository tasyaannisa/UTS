
<?php 

    $con = mysqli_connect('localhost', 'id9563875_tadefi', '12345', 'id9563875_tadefi');
    $query = "SELECT * FROM dokumen LIMIT 50";
    $result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">


<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Information Retrieval</title>

  <link rel="stylesheet" type="text/css"
  media="all" href="style.css">

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
        <h1 class="font-weight-bold text-center"><font color="white">Hasil Tokenisasi LIMIT 50</font></h1>
       
            <thead class="text-center">
                <tr style="background-color: white;">
                      <th class="font-weight-bold">Nama File</th>
                      <th class="font-weight-bold">Tokenisasi</th>
                      <th class="font-weight-bold">TokenStem</th>
                </tr>
            </thead>
            </div>

        <?php

            while($row = mysqli_fetch_array($result)){
                echo '<tbody>
                        <tr style="background-color: white;">
                            <td> '.$row['nama_file'].'</td>
                            <td> '.$row['token'].'</td>
                            <td> '.$row['tokenstem'].'</td>
                        </tr>
                       </tbody';
 
            }
        ?>


      </center>
    </div>
    </body>
        </table>
        

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
</center>
<div id="footer">Copyright &copy 2019-A2 by Tasya,Adhe,Fitri </div>
</body>
</head>
</html>
