<?php

$localhost = "localhost" ;
$user = "root";
$pass = "";
$bd = "bdcurso";

$con = mysqli_connect($localhost,$user,$pass,$bd);


if (!$con) {
     echo "Não conectou";
}





