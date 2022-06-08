<?php
$username = $_POST['username'];
$password = $_POST['password'];

if($username == '19BIT0348' && $password == 'admin@1' || $username == '19BIT0189' && $password == 'admin@2' || $username == '19BIT0061' && $password == 'admin@3' ){
    include 'adminhome.html';
}
else{
    include 'admin.html';
}
?>