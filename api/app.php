<?php

$mhs = file_get_contents('data.json');

$data = json_decode($mhs, false);

var_dump($data);

?>