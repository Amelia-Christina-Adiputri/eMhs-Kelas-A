<?php

require_once "env_conf.php";

$artikel = mysqli_query($driver, "SELECT * FROM artikel");

while($r=mysqli_fetch_array($artikel)){
    $data[] = array(
        "judul"=>$r['judul'],
        "deskripsi"=>$r['deskripsi']
    );
}

$json=array(
    "success"=>true,
    "message"=>"Data Berhasil ditampilkan",
    "data"=>$data 
);

echo json_encode($json)
?>
