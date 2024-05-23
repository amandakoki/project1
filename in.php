<?php

date_default_timezone_set("Africa/Nairobi");

echo "this is my first php code";

print "<br>";

print "Today is <span style='colour: #ff4856; text-transform: uppercase;'>Thursday</span>";

print "<br>"; //Using HTML's <br> to break a line

print 1999; //This is an integer or a digit

print "<br>"; //Using HTML's <br> to break a line

print "5475"; //This is a string

print "<br>"; //Using HTML's <br> to break a line

print date('1'); //Displaying the current day of the week

print "<br>"; //Using HTML's <br> to break a line

print date('1, F jS Y', strtotime('+5 months'));

print "<br>"; //Using HTML's <br> to break a line


print date('1, F jS Y H:i:s');

?>