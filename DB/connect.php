<?php

$HOSTNAME='localhost';
$USERNAME='root';
$PASSWORD='';
$DATABASE='projekti';


$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

/*
if($con){
    echo'connection successful.';
}else{
    die(mysqli_error($con));
}
*/


if(!$con){
    die(mysqli_error($con));
}




?>