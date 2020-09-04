<?php 

$host =  '127.0.0.1';
$user = 'root';
$password ='';
$db = 'dofus';
 
 $conn = mysqli_connect($host,$user,$password,$db);

if (!$conn) {
    die("error");
}
echo "conectado";


 ?>