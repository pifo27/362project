<?php
$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db('teamcoco', $link) or die("Cannot select the Database");

?>