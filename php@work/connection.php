<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name= "login_page";

if(!$con = mysqli_connect($db_host,$db_user,$db_password,$db_name))
{
    die("fail attempt to connect");
}