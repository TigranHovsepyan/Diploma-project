<?php

include 'include/functions.php';

$data = check($_GET['path']);

foreach ($data[1] as $v)
{
	echo "'<i>'$v'</i>'";
	echo '<br /> <br />';
}
?>