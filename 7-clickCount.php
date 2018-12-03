<?php
$clickinfo = explode(":",file_get_contents("clicks.txt"));    
echo "John - ".(int)$clickinfo[1]."<br />Doe - ".(int)$clickinfo[2]."<br />Alex - ".(int)$clickinfo[3]."<br />Megan - ".(int)$clickinfo[4]."<br />Roy - ".(int)$clickinfo[5];
?>
