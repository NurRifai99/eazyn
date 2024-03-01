<?php

$username = "root";
$password = "";
$host = 'localhost';
$db = "izin_db";

$is_connect = mysqli_connect($host,$username,$password,$db); // mysql -u phpmyadmin -p -h localhost

if(!$is_connect){
    die ("ciu");
    //mysqli_select_db($is_connect,"izin_db"); //sama dengan use izin_db di mysql
    }
//else{
//     echo "yah gagal ";
// }