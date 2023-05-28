<?php
$host = "127.0.0.1";
$username = "u245532721_midadcom";
$password = "Midadcomail2023/"; 
$dbname = "u245532721_midadcomcom";
try {
    $conn = mysqli_connect($host,$username,$password, $dbname);
} catch (\Throwable $th) {
    echo "erreur de :" .$th->getMessage();
}

    
  ?>