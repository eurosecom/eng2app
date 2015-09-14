<?php

$sql = "SELECT colx FROM lesson_uzivset ";
$vysledok = mysql_query("$sql");
//echo $sql;
if (!$vysledok)
{

$vsql = "DROP TABLE lesson_uzivset";
$vytvor = mysql_query("$vsql");

$sqlt = <<<statistika_p1304
(
   uziv         DECIMAL(8,0) DEFAULT 0,
   colx         DECIMAL(8,0) DEFAULT 0,
   ucm1         VARCHAR(10) not null,
   ucm2         VARCHAR(10) not null,
   ucm3         VARCHAR(10) not null,
   ucm4         VARCHAR(10) not null,
   ucm5         VARCHAR(10) not null,
   ico1         DECIMAL(8,0) DEFAULT 0,
   ico2         DECIMAL(8,0) DEFAULT 0,
   ico3         DECIMAL(8,0) DEFAULT 0,
   ico4         DECIMAL(8,0) DEFAULT 0,
   ico5         DECIMAL(8,0) DEFAULT 0
);
statistika_p1304;

$vsql = "CREATE TABLE lesson_uzivset ".$sqlt;
$vytvor = mysql_query("$vsql");

}


$sqlhh = "SELECT * FROM lesson_uzivset ";
$sql = mysql_query("$sqlhh");
$cpol = 1*mysql_num_rows($sql);
if( $cpol == 0 ) {

$sqlhh = "INSERT INTO lesson_uzivset (uziv, colx) VALUES ( '".$_SESSION['kli_uziv']."', '1') ";
$sql = mysql_query("$sqlhh");
//echo $sqlhh;
}else{

  $riadok = mysql_fetch_object($sql);
  $vyb_uziv = $riadok->uziv;
  $vyb_colx = $riadok->colx;

  mysql_free_result($sql);

}

?>