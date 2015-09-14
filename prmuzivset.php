<?php
$h5rtgh5 = include("tr45efgsf.php");
// set the output content type as xml
header('Content-Type: text/xml; Accept-Charset: utf-8; ');
//header('Content-Type: text/xml ');
// create the new XML document
$dom = new DOMDocument();

// create the root <response> element
$response = $dom->createElement('response');
$dom->appendChild($response);

// create the <vety> element and append it as a child of <response>
$vety = $dom->createElement('vety');
$response->appendChild($vety);


require_once("../pswd/password.php");
@$spojeni = mysql_connect($mysqlhost, $mysqluser, $mysqlpasswd);
  if (!$spojeni):
    echo "Spojenie so serverom nedostupne.";
    exit;
  endif;
  mysql_select_db($mysqldb);

$uziv = 1*$_REQUEST['uziv'];
$setx = 1*$_REQUEST['setx'];
if( $setx > 0 )
  {

$premenna = 1*$_REQUEST['premenna'];
$hodnota = 1*$_REQUEST['hodnota'];

$sqltt = "UPDATE lesson_uzivset SET colx='$hodnota' WHERE uziv=".$uziv." ";
$sql = mysql_query("$sqltt");
//echo $sqltt;
  }

$txp01 = $retezec = iconv("CP1250", "UTF-8", $premenna); 
$txp02 = $retezec = iconv("CP1250", "UTF-8", $hodnota); 


// create the title element for the veta
$pol01 = $dom->createElement('pol01');
$pol01Text = $dom->createTextNode($txp01);
$pol01->appendChild($pol01Text);

// create the title element for the veta
$pol02 = $dom->createElement('pol02');
$pol02Text = $dom->createTextNode($txp02);
$pol02->appendChild($pol02Text);

// create the <veta> element 
$veta = $dom->createElement('veta');
$veta->appendChild($pol01);
$veta->appendChild($pol02);


// append <veta> as a child of <vety>
$vety->appendChild($veta);


//uloz xml strukturu
// build the XML structure in a string variable
$dom->encoding = 'utf-8';
$xmlString = $dom->saveXML();
// output the XML string
echo $xmlString;
//$dom->formatOutput = TRUE;
//$dom->encoding = 'utf-8';
//$dom->save('xxx.xml');


?>