<?php
/* 
Write a PHP script that displays a given date in a format selected by the user. 
The script should display all the formats and ask a user to enter a date which is displayed 
in the selected format.
*/
$date = readline("Enter a date: ");
$sec = strtotime($date);
echo "\nChoose a format.
Please choose one from each day, month and year.
Date	d	day of the month, 2 digits with leading zeros; i.e. '01' to '31'
        j	day of the month without leading zeros; i.e. '1' to '31'
Day     D	day of the week, textual, 3 letters; i.e. 'Fri'
        l	day of the week, textual, long; i.e. 'Saturday'
        w	day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
        z	day of the year; i.e. '0' to '365'
        r	RFC 822 formatted date; i.e. 'Thu, 21 Dec 2000 16:01:07 +0200' (added in PHP 4.0.4)
        S	Suffix for day of the month in 2 chrs ( with j )
        z	Day of the year ( from 0 to 365 )
Month	m	month; With leading zeros; i.e. '01' to '12'
        n	month without leading zeros; i.e. '1' to '12'
        M	month, textual, 3 letters; i.e. 'Jan'
        F	month, textual, long; i.e. 'January'
        t	Number of days in the month ( 28 to 31 )
Year	L	1 for Leap year, 0 if not
        o	ISO-8601 week-numbering year.
        Y	year, 4 digits; i.e. '2018'
        y	year, 2 digits; i.e. '19'

Please type the format using separators(eg: Y-m-d): ";
$format = readline();
$newDate = date($format,$sec);
echo "The date in the given format is ".$newDate;