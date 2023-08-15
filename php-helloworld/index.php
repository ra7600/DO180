<?php
date_default_timezone_set('America/New_York');
print '<p style="font-size: 20px;">Hello World</p>';
print "<br>";
$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);
echo "Current date and local time on this server is $date_time";
# print "php version is " . PHP_VERSION . "<br>";
print "<br>";
print '<p style="font-size: 20px;">From Web2</p>';

?>
