<?php
/*
Write a PHP script that adds/subtract n days to a given date. Also, it should calculate time.
the difference in days and years, months, days, hours, minutes, seconds between two dates
*/
$givenDate = readline("Enter a date: ");
$nOfDays = readline("\nEnter the number of days to be added: ");
$addedDate = date("d-m-Y", strtotime($givenDate. '- '.$nOfDays.' days')); 
echo "The given gate is ".$givenDate." and the date after adding days is ". $addedDate;
$oldDate = date_create($givenDate);
$newDate = date_create($addedDate);
$diff = date_diff($oldDate,$newDate);
echo $diff->format("\n%y Year %m Month %d Day %h Hours %i Minute %s Seconds");