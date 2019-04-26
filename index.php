<?php
$link = mysql_connect('mysql', 'root', 'TM1q2w3e.');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'EDITConnected successfully';
mysql_close($link);
echo "ESTO ESTA EDITADO, Y SUBIDO AUTOMATICAMENTE POR JENKINS";
echo "<br>E	dddddddddddddddddddddiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiiitttDSI DOG";
?>


