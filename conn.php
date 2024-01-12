<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'onlineshop';

$con = mysqli_connect($servername,$username,$password,$dbname);
if( !$con){
    echo "Connection failed";
}
else{
    echo "Connection Failed";
}

?>