<?php
print '<p style="font-size: 20px;">Hello World</p>';
# print "Hello, World! <br>";
print "<br>";
$timestamp = time();
$date_time = date("d-m-Y (D) H:i:s", $timestamp);
echo "Current date and local time on this server is $date_time";
# print "php version is " . PHP_VERSION . "<br>";
print "<br>";
print '<p style="font-size: 20px;">From Web1</p>';

?>
