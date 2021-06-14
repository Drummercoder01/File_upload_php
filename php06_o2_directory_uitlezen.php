<?php
//********** Initialisatie
require_once("../klassen/FileUpload.class.php");
$_output="";



//********** Verwerking 

//------- Instantiëring van $_file met dummy(null) waardes 
$_defaultFiles = NULL;
$_file = new FileUpload($_defaultFiles);

//------- directory uitlezen
$_filesIndirectory = $_file->readDirectory('../bestanden/uploadA');

foreach($_filesIndirectory as $_waarde)
{
	$_output.="<img src=../bestanden/uploadA/$_waarde.jpg> <br>";
}

//********* output 
echo $_output;
?>

