<?php 

$connect = new mysqli("localhost","root","","onlinetest");
session_start();

function redirect($page){
    echo "<script>window.open('$page', '_self')</script>";
}

function msg($page){
    echo "<script>alert('$page')</script>";
}
?>