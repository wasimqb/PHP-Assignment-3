<?php
$countryCode = readline("Enter the country code: ");
$i = 0;
$timezoneList = \DateTimeZone::listIdentifiers(\DateTimeZone::PER_COUNTRY, $countryCode);
foreach ($timezoneList as $zone) {
    $i++;
    echo $i.' - '.$zone.
    "\n";
}
$option = readline("\nEnter the option for time zone: ");
$timezone = $timezoneList[$option - 1];
date_default_timezone_set($timezone);
echo "The time in " . date_default_timezone_get() . " is " . date("H:i:s a d-m-Y");
