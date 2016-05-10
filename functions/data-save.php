<?php
header('Content-type: text/html; charset=UTF-8');
	include_once ("connection.php");
	include_once ("clean_url.php");

	$mmMyanmar3		= clean_input($_GET['mm-Myanmar3']);
	$mmMyanmarCensus		= clean_input($_GET['mm-MyanmarCensus']);
	$mmUnicode 	= clean_input($_GET['mm-Unicode']);
	$mmPadauk		= clean_input($_GET['mm-Padauk']);
	$mmZawgyiOne		= clean_input($_GET['mm-ZawgyiOne']);

	$sqlNewText = "INSERT INTO tblMyanmarTypefaces (Myanmar3, MyanmarCensus, Unicode, Padauk, ZawgyiOne)
								VALUES ('$mmMyanmar3','$mmMyanmarCensus', '$mmUnicode', '$mmPadauk', '$mmZawgyiOne')";

	mysqli_query($con, $sqlNewText) or die('Error: ' . mysqli_error($con));
	echo '<meta http-equiv=refresh content=0;url=../page-with-data.php>';

?>
