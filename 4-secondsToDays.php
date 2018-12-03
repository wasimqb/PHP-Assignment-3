<?php
/*
Write a PHP script to convert seconds into days, hours, minutes and seconds.
*/
$seconds = readline("Enter the seconds: ");
$dt1 = new DateTime("@0");
$dt2 = new DateTime("@$seconds");
echo $dt1->diff($dt2)->format('%a days, %h hours, %i minutes and %s seconds');

