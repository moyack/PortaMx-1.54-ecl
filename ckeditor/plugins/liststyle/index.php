<?php
/**
* \file index.php
* Supress direct acceess to the directory.
*
* \author PortaMx - Portal Management Extension
* \author Copyright 2008-2020 by PortaMx corp. - http://portamx.com
* \version 1.54.1
* \date 03.01.2020
*/

if(file_exists(realpath('../../../Settings.php')))
{
	require(realpath('../../../Settings.php'));
	header('Location: ' . $boardurl);
}
else
	exit;
?>
