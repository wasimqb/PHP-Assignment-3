<?php
session_start();
$john = array("John",21,"New York");
$doe = array("Doe",22,"London");
$alex = array("Alex",23,"Chicago");
$megan = array("Megan",24,"Los Angeles");
$roy = array("Roy",25,"Petersburg");

if($_POST['name']=="John") {
    echo $john[0]."\n".$john[1]."\n".$john[2];
$_SESSION['num']=1;
}

if($_POST['name']=="Doe"){
echo $doe[0]."\n".$doe[1]."\n".$doe[2];
$_SESSION['num']=2;
}

if($_POST['name']=="Alex") {
echo $alex[0]."\n".$alex[1]."\n".$alex[2];
$_SESSION['num']=3;
}

if($_POST['name']=="Megan") {
echo $megan[0]."\n".$megan[1]."\n".$megan[2];
$_SESSION['num']=4;
}

if($_POST['name']=="Roy") {
echo $roy[0]."\n".$roy[1]."\n".$roy[2];
$_SESSION['num']=5;
}

if(isset($_POST['name'])) 
{
    incrementClickCount($_SESSION['num']);
}

function getClickCount($num=0)
{
    $clickinfo = explode(":",file_get_contents("clicks.txt"));
    echo (int)$clickinfo[1];
}

function incrementClickCount($num)
{
    $clickinfo = explode(":",file_get_contents("clicks.txt"));
    $clickinfo[$num]++;
    file_put_contents("clicks.txt", implode(":",$clickinfo));
}

