<?php


require("../util/config.php");

$documentName = $_REQUEST["documentName"]; 

$separa=DIRECTORY_SEPARATOR;

$tmp = dirname(tempnam (null,'')); 

$archivo = $tmp.$separa."upload".$separa.$file_name.$documentName;

header('Content-Type: application/pdf');
header('Content-Disposition:attachment;filename="'.$documentName.'"');
readfile($archivo);

?>