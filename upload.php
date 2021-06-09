<?php
//****initialisatie
require_once("../klassen/FileUpload.class.php");

$_srv= $_SERVER['PHP_SELF'];
$_output= "";

if (!isset($_POST['submit']))
{
    //***Formulier

$_output="
    <form action='$_srv' method= post enctype='multipart/form-data'><br>
    <input type=file name='ourfile[]' multiple><br><br>
    <input type=submit name='submit'>
    </form>";
}
else
{
//******(Formlulier) verwerking
//------- Instantiering van $_file
    $_file = new FileUpload($_FILES['ourfile']);
    
// Beperkingen
// type (enkel jpg)
    $_file->addFileType('jpg', array('image/jpeg', 'image/pjpeg'));
    
// Size (4MB)
    $_file->setMaxSize(400000);
    
// extensies naar lowercase
    $_file->setLowerCaseExtension();
    
//----- verplaats files naar folder
    $_file->move('.../bestanden/uploadA');
    
    /*if ($_File->getErrors() === false)
{
    echo'<p>Succesvolle download</p>'
}
else
{
    die('<pre>'.var_dump($_File->getErrors()).'</pre>');
}*/
    
    $_output= "Files opgeladen";
}



//****** output

echo $_output;
?>