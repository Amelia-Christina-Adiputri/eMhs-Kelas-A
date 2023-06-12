<?php

$driver = mysqli_connect('localhost', 'root', '', 'emhs');

if($driver){
    echo "terkoneksi";
}else{
    echo "gagal terkoneksi";
}

?>
