
<?php
$host = "localhost"; //nama host
$user = "root"; //username database
$password = ""; //password database
$database = "belajar1

"; //nama database
// koneksi data base
$conn = mysqli_connect($host, $user, $password, $database);
if ($conn)
echo "terhubung";
$sql= "insert into belajar11(email,password) value ('saldi.takka@gmail.com', 'sandikuat')"
$query= mysqli_query($conn, $sql);
if($query)
echo "dimasukan"
?>