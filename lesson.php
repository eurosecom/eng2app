<?php
error_reporting(0);
//tymto sa spusta ponuka z ciselnika sluzieb
session_start(); 
$h5rtgh5 = include("tr45efgsf.php");
?>
<!doctype html>
<html>
<head>
<?php
require_once("../pswd/password.php");
@$spojeni = mysql_connect($mysqlhost, $mysqluser, $mysqlpasswd);
  if (!$spojeni):
    echo "Spojenie so serverom nedostupne.";
    exit;
  endif;
  mysql_select_db($mysqldb);


//cislo operacie
$copern = 1*$_REQUEST['copern'];
if ( $copern == 0 ) $copern = 1;
$ulozeneok=0;

//parametre uzivatela
$prmuziv = include("prmuziv.php");

//cislo operacie
$cislo_pid = 1*$_REQUEST['cislo_pid'];
$type = $_REQUEST['type'];
$name = $_REQUEST['name'];
$ckat = $_REQUEST['ckat'];
$paid = $_REQUEST['paid'];
$desx = $_REQUEST['desx'];
$exm1 = $_REQUEST['exm1'];
$exm2 = $_REQUEST['exm2'];
$exm3 = $_REQUEST['exm3'];
$exm4 = $_REQUEST['exm4'];
$important = $_REQUEST['important'];


$name_sk = $_REQUEST['name_sk'];
$desx_sk = $_REQUEST['desx_sk'];
$exm1_sk = $_REQUEST['exm1_sk'];
$exm2_sk = $_REQUEST['exm2_sk'];
$exm3_sk = $_REQUEST['exm3_sk'];
$exm4_sk = $_REQUEST['exm4_sk'];
$important_sk = $_REQUEST['important_sk'];

//ex1
$exc1_sa1ok1 = 1*$_REQUEST['exc1_sa1ok1'];
$exc1_sa1ok2 = 1*$_REQUEST['exc1_sa1ok2'];
$exc1_sa1ok3 = 1*$_REQUEST['exc1_sa1ok3'];
$exc1_sa1ok4 = 1*$_REQUEST['exc1_sa1ok4'];
$exc1_sa1ok=0;
if( $exc1_sa1ok4 == 1 ) { $exc1_sa1ok=4; }
if( $exc1_sa1ok3 == 1 ) { $exc1_sa1ok=3; }
if( $exc1_sa1ok2 == 1 ) { $exc1_sa1ok=2; }
if( $exc1_sa1ok1 == 1 ) { $exc1_sa1ok=1; }

$exc1_sb1ok1 = 1*$_REQUEST['exc1_sb1ok1'];
$exc1_sb1ok2 = 1*$_REQUEST['exc1_sb1ok2'];
$exc1_sb1ok3 = 1*$_REQUEST['exc1_sb1ok3'];
$exc1_sb1ok4 = 1*$_REQUEST['exc1_sb1ok4'];
$exc1_sb1ok=0;
if( $exc1_sb1ok4 == 1 ) { $exc1_sb1ok=4; }
if( $exc1_sb1ok3 == 1 ) { $exc1_sb1ok=3; }
if( $exc1_sb1ok2 == 1 ) { $exc1_sb1ok=2; }
if( $exc1_sb1ok1 == 1 ) { $exc1_sb1ok=1; }

$exc1_sa4x = $_REQUEST['exc1_sa4x'];
$exc1_sa3x = $_REQUEST['exc1_sa3x'];
$exc1_sa2x = $_REQUEST['exc1_sa2x'];
$exc1_sa1x = $_REQUEST['exc1_sa1x'];

$exc1_sb4x = $_REQUEST['exc1_sb4x'];
$exc1_sb3x = $_REQUEST['exc1_sb3x'];
$exc1_sb2x = $_REQUEST['exc1_sb2x'];
$exc1_sb1x = $_REQUEST['exc1_sb1x'];

$exc1_ta3 = $_REQUEST['exc1_ta3'];
$exc1_ta2 = $_REQUEST['exc1_ta2'];
$exc1_ta1 = $_REQUEST['exc1_ta1'];

//ex2
$exc2_sa1ok1 = 1*$_REQUEST['exc2_sa1ok1'];
$exc2_sa1ok2 = 1*$_REQUEST['exc2_sa1ok2'];
$exc2_sa1ok3 = 1*$_REQUEST['exc2_sa1ok3'];
$exc2_sa1ok4 = 1*$_REQUEST['exc2_sa1ok4'];
$exc2_sa1ok=0;
if( $exc2_sa1ok4 == 1 ) { $exc2_sa1ok=4; }
if( $exc2_sa1ok3 == 1 ) { $exc2_sa1ok=3; }
if( $exc2_sa1ok2 == 1 ) { $exc2_sa1ok=2; }
if( $exc2_sa1ok1 == 1 ) { $exc2_sa1ok=1; }

$exc2_sb1ok1 = 1*$_REQUEST['exc2_sb1ok1'];
$exc2_sb1ok2 = 1*$_REQUEST['exc2_sb1ok2'];
$exc2_sb1ok3 = 1*$_REQUEST['exc2_sb1ok3'];
$exc2_sb1ok4 = 1*$_REQUEST['exc2_sb1ok4'];
$exc2_sb1ok=0;
if( $exc2_sb1ok4 == 1 ) { $exc2_sb1ok=4; }
if( $exc2_sb1ok3 == 1 ) { $exc2_sb1ok=3; }
if( $exc2_sb1ok2 == 1 ) { $exc2_sb1ok=2; }
if( $exc2_sb1ok1 == 1 ) { $exc2_sb1ok=1; }

$exc2_sa4x = $_REQUEST['exc2_sa4x'];
$exc2_sa3x = $_REQUEST['exc2_sa3x'];
$exc2_sa2x = $_REQUEST['exc2_sa2x'];
$exc2_sa1x = $_REQUEST['exc2_sa1x'];

$exc2_sb4x = $_REQUEST['exc2_sb4x'];
$exc2_sb3x = $_REQUEST['exc2_sb3x'];
$exc2_sb2x = $_REQUEST['exc2_sb2x'];
$exc2_sb1x = $_REQUEST['exc2_sb1x'];

$exc2_ta3 = $_REQUEST['exc2_ta3'];
$exc2_ta2 = $_REQUEST['exc2_ta2'];
$exc2_ta1 = $_REQUEST['exc2_ta1'];

//ex3
$exc3_sa1ok1 = 1*$_REQUEST['exc3_sa1ok1'];
$exc3_sa1ok2 = 1*$_REQUEST['exc3_sa1ok2'];
$exc3_sa1ok3 = 1*$_REQUEST['exc3_sa1ok3'];
$exc3_sa1ok4 = 1*$_REQUEST['exc3_sa1ok4'];
$exc3_sa1ok=0;
if( $exc3_sa1ok4 == 1 ) { $exc3_sa1ok=4; }
if( $exc3_sa1ok3 == 1 ) { $exc3_sa1ok=3; }
if( $exc3_sa1ok2 == 1 ) { $exc3_sa1ok=2; }
if( $exc3_sa1ok1 == 1 ) { $exc3_sa1ok=1; }

$exc3_sb1ok1 = 1*$_REQUEST['exc3_sb1ok1'];
$exc3_sb1ok2 = 1*$_REQUEST['exc3_sb1ok2'];
$exc3_sb1ok3 = 1*$_REQUEST['exc3_sb1ok3'];
$exc3_sb1ok4 = 1*$_REQUEST['exc3_sb1ok4'];
$exc3_sb1ok=0;
if( $exc3_sb1ok4 == 1 ) { $exc3_sb1ok=4; }
if( $exc3_sb1ok3 == 1 ) { $exc3_sb1ok=3; }
if( $exc3_sb1ok2 == 1 ) { $exc3_sb1ok=2; }
if( $exc3_sb1ok1 == 1 ) { $exc3_sb1ok=1; }

$exc3_sa4x = $_REQUEST['exc3_sa4x'];
$exc3_sa3x = $_REQUEST['exc3_sa3x'];
$exc3_sa2x = $_REQUEST['exc3_sa2x'];
$exc3_sa1x = $_REQUEST['exc3_sa1x'];

$exc3_sb4x = $_REQUEST['exc3_sb4x'];
$exc3_sb3x = $_REQUEST['exc3_sb3x'];
$exc3_sb2x = $_REQUEST['exc3_sb2x'];
$exc3_sb1x = $_REQUEST['exc3_sb1x'];

$exc3_ta3 = $_REQUEST['exc3_ta3'];
$exc3_ta2 = $_REQUEST['exc3_ta2'];
$exc3_ta1 = $_REQUEST['exc3_ta1'];

//ex4
$exc4_sa1ok1 = 1*$_REQUEST['exc4_sa1ok1'];
$exc4_sa1ok2 = 1*$_REQUEST['exc4_sa1ok2'];
$exc4_sa1ok3 = 1*$_REQUEST['exc4_sa1ok3'];
$exc4_sa1ok4 = 1*$_REQUEST['exc4_sa1ok4'];
$exc4_sa1ok=0;
if( $exc4_sa1ok4 == 1 ) { $exc4_sa1ok=4; }
if( $exc4_sa1ok3 == 1 ) { $exc4_sa1ok=3; }
if( $exc4_sa1ok2 == 1 ) { $exc4_sa1ok=2; }
if( $exc4_sa1ok1 == 1 ) { $exc4_sa1ok=1; }

$exc4_sb1ok1 = 1*$_REQUEST['exc4_sb1ok1'];
$exc4_sb1ok2 = 1*$_REQUEST['exc4_sb1ok2'];
$exc4_sb1ok3 = 1*$_REQUEST['exc4_sb1ok3'];
$exc4_sb1ok4 = 1*$_REQUEST['exc4_sb1ok4'];
$exc4_sb1ok=0;
if( $exc4_sb1ok4 == 1 ) { $exc4_sb1ok=4; }
if( $exc4_sb1ok3 == 1 ) { $exc4_sb1ok=3; }
if( $exc4_sb1ok2 == 1 ) { $exc4_sb1ok=2; }
if( $exc4_sb1ok1 == 1 ) { $exc4_sb1ok=1; }

$exc4_sa4x = $_REQUEST['exc4_sa4x'];
$exc4_sa3x = $_REQUEST['exc4_sa3x'];
$exc4_sa2x = $_REQUEST['exc4_sa2x'];
$exc4_sa1x = $_REQUEST['exc4_sa1x'];

$exc4_sb4x = $_REQUEST['exc4_sb4x'];
$exc4_sb3x = $_REQUEST['exc4_sb3x'];
$exc4_sb2x = $_REQUEST['exc4_sb2x'];
$exc4_sb1x = $_REQUEST['exc4_sb1x'];

$exc4_ta3 = $_REQUEST['exc4_ta3'];
$exc4_ta2 = $_REQUEST['exc4_ta2'];
$exc4_ta1 = $_REQUEST['exc4_ta1'];

//uprava 18
if ( $copern == 18 )
  {
$cislo_pid = strip_tags($_REQUEST['cislo_pid']);
$copernx = 1*$_REQUEST['copernx'];

$uprtxt = "INSERT INTO lessons_zal SELECT * FROM  lessons WHERE pid='$cislo_pid' ";
$upravene = mysql_query("$uprtxt");

$uprtxt = "UPDATE lessons SET ".
" type='$type', ckat='$ckat', paid='$paid', name='$name', desx='$desx', important='$important', datm=now() ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

if( $copernx == 21 ) {

$uprtxt = "UPDATE lessons SET ".
" exc1_sa1ok='$exc1_sa1ok', exc1_sb1ok='$exc1_sb1ok', ".
" exc1_sa4x='$exc1_sa4x', exc1_sa3x='$exc1_sa3x', exc1_sa2x='$exc1_sa2x', exc1_sa1x='$exc1_sa1x', ".
" exc1_sb4x='$exc1_sb4x', exc1_sb3x='$exc1_sb3x', exc1_sb2x='$exc1_sb2x', exc1_sb1x='$exc1_sb1x', ".
" exc1_ta3='$exc1_ta3', exc1_ta2='$exc1_ta2', exc1_ta1='$exc1_ta1' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

                    }

if( $copernx == 22 ) {

$uprtxt = "UPDATE lessons SET ".
" exc2_sa1ok='$exc2_sa1ok', exc2_sb1ok='$exc2_sb1ok', ".
" exc2_sa4x='$exc2_sa4x', exc2_sa3x='$exc2_sa3x', exc2_sa2x='$exc2_sa2x', exc2_sa1x='$exc2_sa1x', ".
" exc2_sb4x='$exc2_sb4x', exc2_sb3x='$exc2_sb3x', exc2_sb2x='$exc2_sb2x', exc2_sb1x='$exc2_sb1x', ".
" exc2_ta3='$exc2_ta3', exc2_ta2='$exc2_ta2', exc2_ta1='$exc2_ta1' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

                    }

if( $copernx == 23 ) {

$uprtxt = "UPDATE lessons SET ".
" exc3_sa1ok='$exc3_sa1ok', exc3_sb1ok='$exc3_sb1ok', ".
" exc3_sa4x='$exc3_sa4x', exc3_sa3x='$exc3_sa3x', exc3_sa2x='$exc3_sa2x', exc3_sa1x='$exc3_sa1x', ".
" exc3_sb4x='$exc3_sb4x', exc3_sb3x='$exc3_sb3x', exc3_sb2x='$exc3_sb2x', exc3_sb1x='$exc3_sb1x', ".
" exc3_ta3='$exc3_ta3', exc3_ta2='$exc3_ta2', exc3_ta1='$exc3_ta1' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

                    }

if( $copernx == 24 ) {

$uprtxt = "UPDATE lessons SET ".
" exc4_sa1ok='$exc4_sa1ok', exc4_sb1ok='$exc4_sb1ok', ".
" exc4_sa4x='$exc4_sa4x', exc4_sa3x='$exc4_sa3x', exc4_sa2x='$exc4_sa2x', exc4_sa1x='$exc4_sa1x', ".
" exc4_sb4x='$exc4_sb4x', exc4_sb3x='$exc4_sb3x', exc4_sb2x='$exc4_sb2x', exc4_sb1x='$exc4_sb1x', ".
" exc4_ta3='$exc4_ta3', exc4_ta2='$exc4_ta2', exc4_ta1='$exc4_ta1' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

                    }

if( $copernx == 1 ){

$uprtxt = "UPDATE lessons SET ".
" exm1='$exm1', exm2='$exm2', exm3='$exm3', exm4='$exm4' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");


                    }


if( $copernx == 1 ){

$uprtxt = "INSERT INTO lessons_sk_zal SELECT * FROM  lessons_sk WHERE pid='$cislo_pid' ";
$upravene = mysql_query("$uprtxt");

$uprtxt = "DELETE FROM lessons_sk WHERE pid='$cislo_pid' ";
$upravene = mysql_query("$uprtxt");

$uprtxt = "INSERT INTO lessons_sk (pid) VALUES ('$cislo_pid') ";
$upravene = mysql_query("$uprtxt");

$uprtxt = "UPDATE lessons_sk SET name='$name_sk', desx='$desx_sk', important='$important_sk', ".
" exm1='$exm1_sk', exm2='$exm2_sk', exm3='$exm3_sk', exm4='$exm4_sk', datm=now() ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

                    }

if($upravene) { $ulozeneok=1; }

$copern=$copernx;
  }

//nacitanie 
if ( $copern >= 1 )
    {

$sqltt = "SELECT * FROM lessons WHERE pid = $cislo_pid ";
$sql = mysql_query("$sqltt"); 
  if (@$zaznam=mysql_data_seek($sql,0))
  {
  $riadok=mysql_fetch_object($sql);

$type = $riadok->type;
$name = $riadok->name;
$ckat = $riadok->ckat;
$paid = $riadok->paid;
$desx = $riadok->desx;
$exm1 = $riadok->exm1;
$exm2 = $riadok->exm2;
$exm3 = $riadok->exm3;
$exm4 = $riadok->exm4;
$important = $riadok->important;

//ex1
$exc1_sa4x = $riadok->exc1_sa4x;
$exc1_sa3x = $riadok->exc1_sa3x;
$exc1_sa2x = $riadok->exc1_sa2x;
$exc1_sa1x = $riadok->exc1_sa1x;

$exc1_sb4x = $riadok->exc1_sb4x;
$exc1_sb3x = $riadok->exc1_sb3x;
$exc1_sb2x = $riadok->exc1_sb2x;
$exc1_sb1x = $riadok->exc1_sb1x;

$exc1_ta3 = $riadok->exc1_ta3;
$exc1_ta2 = $riadok->exc1_ta2;
$exc1_ta1 = $riadok->exc1_ta1;

$exc1_sa1ok = 1*$riadok->exc1_sa1ok;
$exc1_sa1ok1=0;$exc1_sa1ok2=0; $exc1_sa1ok3=0; $exc1_sa1ok4=0;
if( $exc1_sa1ok == 1 ) { $exc1_sa1ok1=1; }
if( $exc1_sa1ok == 2 ) { $exc1_sa1ok2=1; }
if( $exc1_sa1ok == 3 ) { $exc1_sa1ok3=1; }
if( $exc1_sa1ok == 4 ) { $exc1_sa1ok4=1; }

$exc1_sb1ok = 1*$riadok->exc1_sb1ok;
$exc1_sb1ok1=0;$exc1_sb1ok2=0; $exc1_sb1ok3=0; $exc1_sb1ok4=0;
if( $exc1_sb1ok == 1 ) { $exc1_sb1ok1=1; }
if( $exc1_sb1ok == 2 ) { $exc1_sb1ok2=1; }
if( $exc1_sb1ok == 3 ) { $exc1_sb1ok3=1; }
if( $exc1_sb1ok == 4 ) { $exc1_sb1ok4=1; }

//ex2
$exc2_sa4x = $riadok->exc2_sa4x;
$exc2_sa3x = $riadok->exc2_sa3x;
$exc2_sa2x = $riadok->exc2_sa2x;
$exc2_sa1x = $riadok->exc2_sa1x;

$exc2_sb4x = $riadok->exc2_sb4x;
$exc2_sb3x = $riadok->exc2_sb3x;
$exc2_sb2x = $riadok->exc2_sb2x;
$exc2_sb1x = $riadok->exc2_sb1x;

$exc2_ta3 = $riadok->exc2_ta3;
$exc2_ta2 = $riadok->exc2_ta2;
$exc2_ta1 = $riadok->exc2_ta1;

$exc2_sa1ok = 1*$riadok->exc2_sa1ok;
$exc2_sa1ok1=0;$exc2_sa1ok2=0; $exc2_sa1ok3=0; $exc2_sa1ok4=0;
if( $exc2_sa1ok == 1 ) { $exc2_sa1ok1=1; }
if( $exc2_sa1ok == 2 ) { $exc2_sa1ok2=1; }
if( $exc2_sa1ok == 3 ) { $exc2_sa1ok3=1; }
if( $exc2_sa1ok == 4 ) { $exc2_sa1ok4=1; }

$exc2_sb1ok = 1*$riadok->exc2_sb1ok;
$exc2_sb1ok1=0;$exc2_sb1ok2=0; $exc2_sb1ok3=0; $exc2_sb1ok4=0;
if( $exc2_sb1ok == 1 ) { $exc2_sb1ok1=1; }
if( $exc2_sb1ok == 2 ) { $exc2_sb1ok2=1; }
if( $exc2_sb1ok == 3 ) { $exc2_sb1ok3=1; }
if( $exc2_sb1ok == 4 ) { $exc2_sb1ok4=1; }

//ex3
$exc3_sa4x = $riadok->exc3_sa4x;
$exc3_sa3x = $riadok->exc3_sa3x;
$exc3_sa2x = $riadok->exc3_sa2x;
$exc3_sa1x = $riadok->exc3_sa1x;

$exc3_sb4x = $riadok->exc3_sb4x;
$exc3_sb3x = $riadok->exc3_sb3x;
$exc3_sb2x = $riadok->exc3_sb2x;
$exc3_sb1x = $riadok->exc3_sb1x;

$exc3_ta3 = $riadok->exc3_ta3;
$exc3_ta2 = $riadok->exc3_ta2;
$exc3_ta1 = $riadok->exc3_ta1;

$exc3_sa1ok = 1*$riadok->exc3_sa1ok;
$exc3_sa1ok1=0;$exc3_sa1ok2=0; $exc3_sa1ok3=0; $exc3_sa1ok4=0;
if( $exc3_sa1ok == 1 ) { $exc3_sa1ok1=1; }
if( $exc3_sa1ok == 2 ) { $exc3_sa1ok2=1; }
if( $exc3_sa1ok == 3 ) { $exc3_sa1ok3=1; }
if( $exc3_sa1ok == 4 ) { $exc3_sa1ok4=1; }

$exc3_sb1ok = 1*$riadok->exc3_sb1ok;
$exc3_sb1ok1=0;$exc3_sb1ok2=0; $exc3_sb1ok3=0; $exc3_sb1ok4=0;
if( $exc3_sb1ok == 1 ) { $exc3_sb1ok1=1; }
if( $exc3_sb1ok == 2 ) { $exc3_sb1ok2=1; }
if( $exc3_sb1ok == 3 ) { $exc3_sb1ok3=1; }
if( $exc3_sb1ok == 4 ) { $exc3_sb1ok4=1; }


//ex4
$exc4_sa4x = $riadok->exc4_sa4x;
$exc4_sa3x = $riadok->exc4_sa3x;
$exc4_sa2x = $riadok->exc4_sa2x;
$exc4_sa1x = $riadok->exc4_sa1x;

$exc4_sb4x = $riadok->exc4_sb4x;
$exc4_sb3x = $riadok->exc4_sb3x;
$exc4_sb2x = $riadok->exc4_sb2x;
$exc4_sb1x = $riadok->exc4_sb1x;

$exc4_ta3 = $riadok->exc4_ta3;
$exc4_ta2 = $riadok->exc4_ta2;
$exc4_ta1 = $riadok->exc4_ta1;

$exc4_sa1ok = 1*$riadok->exc4_sa1ok;
$exc4_sa1ok1=0;$exc4_sa1ok2=0; $exc4_sa1ok3=0; $exc4_sa1ok4=0;
if( $exc4_sa1ok == 1 ) { $exc4_sa1ok1=1; }
if( $exc4_sa1ok == 2 ) { $exc4_sa1ok2=1; }
if( $exc4_sa1ok == 3 ) { $exc4_sa1ok3=1; }
if( $exc4_sa1ok == 4 ) { $exc4_sa1ok4=1; }

$exc4_sb1ok = 1*$riadok->exc4_sb1ok;
$exc4_sb1ok1=0;$exc4_sb1ok2=0; $exc4_sb1ok3=0; $exc4_sb1ok4=0;
if( $exc4_sb1ok == 1 ) { $exc4_sb1ok1=1; }
if( $exc4_sb1ok == 2 ) { $exc4_sb1ok2=1; }
if( $exc4_sb1ok == 3 ) { $exc4_sb1ok3=1; }
if( $exc4_sb1ok == 4 ) { $exc4_sb1ok4=1; }

  }

$sqltt = "SELECT * FROM lessons_sk WHERE pid = $cislo_pid ";
$sql = mysql_query("$sqltt"); 
  if (@$zaznam=mysql_data_seek($sql,0))
  {
  $riadok=mysql_fetch_object($sql);

$type_sk = $riadok->type;
$name_sk = $riadok->name;
$ckat_sk = $riadok->ckat;
$paid_sk = $riadok->paid;
$desx_sk = $riadok->desx;
$exm1_sk = $riadok->exm1;
$exm2_sk = $riadok->exm2;
$exm3_sk = $riadok->exm3;
$exm4_sk = $riadok->exm4;
$important_sk = $riadok->important;


  }
    }
//koniec nacitanie

$uloz="NO";
$zmaz="NO";
$uprav="NO";
?>
 <meta charset="cp1250">
 <link rel="stylesheet" href="css/global.css">
 <link rel="stylesheet" href="css/layout_lesson.css">
 <title>Lesson | English2App</title>
<style>
div.wrap-content {
  width: 100%;

}




div.wrap-content-col {
  width: 50%;
  overflow: auto;
  float: left;

}


div.col-active {
/*   background-color: #E0E0E0; */
}

div.content-col {
  /* width: 600px; */
  width: 100%;
  min-height: 300px;
  /* background-color: #eee; */ /* dopyt, bude triede na fill a nofill cel�ho formu */
/*   border-radius: 3px; */
  float: left;
/*   padding-top: 5px;
  padding-left: 20px;
  padding-bottom: 10px; */
  /* box-sizing: border-box; */
  /* background-color:yellow; */
}
input[type=text] {
  display: inline-block;
  height: 16px;
  border-radius: 2px;
  border: 0;
  font-size: 12px;
  padding: 2px 0;
  text-indent: 4px;

}


input[type=text].header {
  font-size: 14px;
  padding: 3px 0;
  
}

fieldset {
  box-sizing: border-box;
  padding-top: 10px;
  padding-left: 20px;
  padding-bottom: 10px;
  margin-bottom:10px;
}
div.col-active fieldset {
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); /* dopyt, zlep�i� */
}



textarea {
  border: 0;
  border-radius: 2px;
  font-size: 12px;
  padding: 3px 3px;
  height: 60px;
  line-height: 15px;
  width: 90%;
  min-width: 450px;
}




div.col-noactive input[type=text], div.col-noactive select,
div.col-noactive textarea {
  background-color: #fff;
}

div.col-noactive fieldset {
  background-color: #f1f1f1;
}


div.col-active fieldset {
    background-color: #E0E0E0;
}
label {
  font-size: 12px;
  padding-right: 5px;
}

select {
  margin-right: 30px;
  font-size: 12px;
  padding: 1px 0;
  border-radius: 2px;
}


div.section-nav {
  overflow: auto;
}
div.section-nav > a {
  display: block;
  font-size: 12px;
  height: 12px;
  padding: 6px 10px 4px 10px;
  color: #000;
}
a.noactive {
/* border-bottom:2px solid lightblue; */
  background-color: #eee;
}
a.noactive:hover {
background-color: #fff;
}
a.active {
  background-color: #E0E0E0;
}
fieldset > p {
  margin-top: 10px;
}
fieldset > p > label {
  display: block;
}
fieldset > p > input[type=checkbox] {
  vertical-align: middle;
  margin-right: 15px;
}
div.alert-success {
  font-size:14px;
  color:#76FF03;
  padding: 7px;
  height: 18px;
  line-height: 18px;
  width:100px;
  position:absolute;
  top:0;
  left:50%;
  margin-left:-50px;
  text-align:center;
}
</style>
<script type="text/javascript">
//sirka a vyska okna
var sirkawin = screen.width-10;
var vyskawin = screen.height-175;
var sirkawin = screen.width-10;
var vyskawincel = screen.height;

//uprava
<?php if ( $copern >= 1 ) { ?>
  function ObnovUI()
  {
   document.formv1.type.value = '<?php echo "$type";?>';
   document.formv1.name.value = '<?php echo "$name";?>';
   document.formv1.ckat.value = '<?php echo "$ckat";?>';
   document.formv1.paid.value = '<?php echo "$paid";?>';

<?php if ( $vyb_colx == 2 ) { ?>
ColsUkaz();
<?php } ?>
<?php if ( $vyb_colx != 2 ) { ?>
RightColZhasni();
<?php } ?>

<?php if ( $ulozeneok == 1 ) { ?>
alert_success.style.display="";
<?php } ?>
<?php if ( $ulozeneok != 1 ) { ?>
alert_success.style.display="none";
<?php } ?>

<?php
if ( $copern == 21 )
   {


if( $exc1_sa1ok1 == 1 ) { echo "document.formv1.exc1_sa1ok1.checked = \"checked\";"."\n\r"; }
if( $exc1_sa1ok2 == 1 ) { echo "document.formv1.exc1_sa1ok2.checked = \"checked\";"."\n\r"; }
if( $exc1_sa1ok3 == 1 ) { echo "document.formv1.exc1_sa1ok3.checked = \"checked\";"."\n\r"; }
if( $exc1_sa1ok4 == 1 ) { echo "document.formv1.exc1_sa1ok4.checked = \"checked\";"."\n\r"; }

if( $exc1_sb1ok1 == 1 ) { echo "document.formv1.exc1_sb1ok1.checked = \"checked\";"."\n\r"; }
if( $exc1_sb1ok2 == 1 ) { echo "document.formv1.exc1_sb1ok2.checked = \"checked\";"."\n\r"; }
if( $exc1_sb1ok3 == 1 ) { echo "document.formv1.exc1_sb1ok3.checked = \"checked\";"."\n\r"; }
if( $exc1_sb1ok4 == 1 ) { echo "document.formv1.exc1_sb1ok4.checked = \"checked\";"."\n\r"; }

   }
?>

<?php
if ( $copern == 22 )
   {


if( $exc2_sa1ok1 == 1 ) { echo "document.formv1.exc2_sa1ok1.checked = \"checked\";"."\n\r"; }
if( $exc2_sa1ok2 == 1 ) { echo "document.formv1.exc2_sa1ok2.checked = \"checked\";"."\n\r"; }
if( $exc2_sa1ok3 == 1 ) { echo "document.formv1.exc2_sa1ok3.checked = \"checked\";"."\n\r"; }
if( $exc2_sa1ok4 == 1 ) { echo "document.formv1.exc2_sa1ok4.checked = \"checked\";"."\n\r"; }

if( $exc2_sb1ok1 == 1 ) { echo "document.formv1.exc2_sb1ok1.checked = \"checked\";"."\n\r"; }
if( $exc2_sb1ok2 == 1 ) { echo "document.formv1.exc2_sb1ok2.checked = \"checked\";"."\n\r"; }
if( $exc2_sb1ok3 == 1 ) { echo "document.formv1.exc2_sb1ok3.checked = \"checked\";"."\n\r"; }
if( $exc2_sb1ok4 == 1 ) { echo "document.formv1.exc2_sb1ok4.checked = \"checked\";"."\n\r"; }

   }
?>

<?php
if ( $copern == 23 )
   {


if( $exc3_sa1ok1 == 1 ) { echo "document.formv1.exc3_sa1ok1.checked = \"checked\";"."\n\r"; }
if( $exc3_sa1ok2 == 1 ) { echo "document.formv1.exc3_sa1ok2.checked = \"checked\";"."\n\r"; }
if( $exc3_sa1ok3 == 1 ) { echo "document.formv1.exc3_sa1ok3.checked = \"checked\";"."\n\r"; }
if( $exc3_sa1ok4 == 1 ) { echo "document.formv1.exc3_sa1ok4.checked = \"checked\";"."\n\r"; }

if( $exc3_sb1ok1 == 1 ) { echo "document.formv1.exc3_sb1ok1.checked = \"checked\";"."\n\r"; }
if( $exc3_sb1ok2 == 1 ) { echo "document.formv1.exc3_sb1ok2.checked = \"checked\";"."\n\r"; }
if( $exc3_sb1ok3 == 1 ) { echo "document.formv1.exc3_sb1ok3.checked = \"checked\";"."\n\r"; }
if( $exc3_sb1ok4 == 1 ) { echo "document.formv1.exc3_sb1ok4.checked = \"checked\";"."\n\r"; }

   }
?>

<?php
if ( $copern == 24 )
   {


if( $exc4_sa1ok1 == 1 ) { echo "document.formv1.exc4_sa1ok1.checked = \"checked\";"."\n\r"; }
if( $exc4_sa1ok2 == 1 ) { echo "document.formv1.exc4_sa1ok2.checked = \"checked\";"."\n\r"; }
if( $exc4_sa1ok3 == 1 ) { echo "document.formv1.exc4_sa1ok3.checked = \"checked\";"."\n\r"; }
if( $exc4_sa1ok4 == 1 ) { echo "document.formv1.exc4_sa1ok4.checked = \"checked\";"."\n\r"; }

if( $exc4_sb1ok1 == 1 ) { echo "document.formv1.exc4_sb1ok1.checked = \"checked\";"."\n\r"; }
if( $exc4_sb1ok2 == 1 ) { echo "document.formv1.exc4_sb1ok2.checked = \"checked\";"."\n\r"; }
if( $exc4_sb1ok3 == 1 ) { echo "document.formv1.exc4_sb1ok3.checked = \"checked\";"."\n\r"; }
if( $exc4_sb1ok4 == 1 ) { echo "document.formv1.exc4_sb1ok4.checked = \"checked\";"."\n\r"; }

   }
?>

  }
<?php                     } ?>



  function Povol_uloz()
  {
  }

//preskakovanie ENTER-om
  function ucezmlEnter(e)
  {
   var k = (navigator.appName=="Netscape") ? e : event.keyCode;
   if ( k == 13 ){
        document.forms.formv1.strzml.focus();
        document.forms.formv1.strzml.select();
                 }
  }
  function strzmlEnter(e)
  {
   var k = (navigator.appName=="Netscape") ? e : event.keyCode;
   if ( k == 13 ){
        document.forms.formv1.faktkedy.focus();
        document.forms.formv1.taktako.select();
                 }
  }
  function succesoff()
  {
   alert_success.style.display="none";

  }


//Z ciarky na bodku
  function CiarkaNaBodku(Vstup)
  {
   if ( Vstup.value.search(/[^0-9.-]/g) != -1 ) { Vstup.value=Vstup.value.replace(",","."); }
  }

  function RightColZhasni()
  {
   wrapcolleft.style.width='80%';
   wrapcolleft.style.float='none';
   wrapcolleft.style.margin='0 auto';
   wrapcolright.style.display='none';
  }
  function ColsUkaz()
  {
   wrapcolleft.style.width='50%';
   wrapcolleft.style.float='left';
   wrapcolright.style.display='block';
  }


</script>
<script type="text/javascript" src="prmuzivset.js"></script>
</head>
<body onload="ObnovUI();">
<FORM name="formv1" method="post" action="lesson.php?copern=18&cislo_pid=<?php echo $cislo_pid;?>&copernx=<?php echo $copern;?>">

<!-- horna lista -->
<div class="top-bar">
<ul class="toleft breadcrumb-nav">
 <li class="toleft">
  <a href="#" onclick="();" title="Go to" class="x16-icon-nav">English2App</a>
 </li>
 <li class="toleft" style="margin-top:9px;">/</li>
 <li class="toleft">
  <strong>Lesson <?php echo $cislo_pid;?></strong>
 </li>
 <li class="toright">
  <a href="lessons.php?copern=1" title="Back" class="toleft">
   <img src="img/x16_white_arrow20.png" style="width:16px; height:16px;">
  </a>
  <button type="submit" title="Save form" class="toleft"
   style="height:32px; display:block; background-color:#64B5F6;">
   <img src="img/x16_white_save4.png" style="width:16px; height:16px;">
  </button>
  <a href="lessons.php?copern=1" title="No Save" class="toleft">
   <img src="img/x16_white_xmark16.png" style="width:16px; height:16px;">
  </a>
  <div class="toleft divider-ver">&nbsp;</div>

<a href="#" onclick="volajUzivSet(<?php echo $vyb_uziv;?>, 1, 1); RightColZhasni();" title="Only left col" class="toleft"
   style="padding:7px 7px; margin-left:5px;">
 <img src="img/x16_white_stop.png" style="width:16px; height:16px;">
</a>
<a href="#" onclick="volajUzivSet(<?php echo $vyb_uziv;?>, 1, 2); ColsUkaz();" title="Display cols" class="toleft"
   style="padding:7px 7px; margin-right:5px;">
 <img src="img/x16_white_pause.png" style="width:16px; height:16px;">
</a>
  <div class="toleft divider-ver">&nbsp;</div>
  <strong class="toleft">Login User</strong> <!-- dopyt, nie je funk�n� -->
 </li>
</ul>

<div id="alert_success" class="alert-success" >Saved OK</div> <!-- dopyt, pr�padne nahradi� symbolom �ipky -->


</div> <!-- .top-bar -->

<!-- telo stranky -->
<div class="wrap-content">
<div class="content">




<div id="wrapcolleft" class="wrap-content-col" style="">
<div class="content-col col-active"> <!-- dopyt, prep�na� na "col-active" -->
<fieldset>
 <label for="name">Name</label>
 <input type="text" name="name" id="name" class="header" style="width:90%; min-width:400px;" onclick="succesoff();"/>
</fieldset>

<fieldset>
 <label for="type">Type</label>
 <select size="1" name="type" id="type" onkeydown="faktkedyEnter(event.which);">
  <option value="0"></option>
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
 </select>
 <label for="ckat">Category</label>
 <select size="1" name="ckat" id="ckat" onkeydown="faktkedyEnter(event.which);">
  <option value="0"></option>
  <option value="1">Cat 1</option>
  <option value="2">Cat 2</option>
  <option value="3">Cat 3</option>
  <option value="4">Cat 4</option>
 </select>
 <label for="paid">Paid</label>
 <select size="1" name="paid" id="paid">
  <option value="0">free</option>
  <option value="1">paid 1</option>
  <option value="2">paid 2</option>
  <option value="3">paid 3</option>
 </select>
<p style="margin-top:12px;">
 <label for="desx" style="margin-bottom:3px;">Rule</label>
 <textarea name="desx" id="desx"><?php echo $desx; ?></textarea>
</p>
</fieldset>


<div class="section-nav">
<?php if ( $copern == 1 ) { ?>
 <a href="#" class="toleft active">Example</a>
 <a href="#" onclick="window.open('../eng2app/lesson.php?copern=21&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
    class="toleft noactive">Exercise</a>
<?php                     } ?>
<?php if ( $copern == 2 OR $copern == 21 OR $copern == 22 OR $copern == 23 OR $copern == 24 ) { ?>
 <a href="#" onclick="window.open('../eng2app/lesson.php?copern=1&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
    class="toleft noactive">Example</a>
 <a href="#" class="toleft active">Exercise</a>


<?php
$clas1="noactive"; $clas2="noactive"; $clas3="noactive"; $clas4="noactive";
if ( $copern == 21 OR $copern == 2 ) $clas1="active"; if ( $copern == 22 ) $clas2="active";
if ( $copern == 23 ) $clas3="active"; if ( $copern == 24 ) $clas4="active";
?>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=24&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="toright <?php echo $clas4; ?>">d.</a>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=23&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="toright <?php echo $clas3; ?>">c.</a>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=22&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="toright <?php echo $clas2; ?>">b.</a>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=21&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="toright <?php echo $clas1; ?>">a.</a>
<?php                     } ?>
</div>

<fieldset>
<?php if ( $copern == 1 ) { ?>
<p>
 <label for="exm1" class="toleft">1</label>
 <textarea name="exm1" id="exm1"><?php echo $exm1; ?></textarea>
</p>
<p>
 <label for="exm2" class="toleft">2</label>
 <textarea name="exm2" id="exm2"><?php echo $exm2; ?></textarea>
</p>
<p>
 <label for="exm3" class="toleft">3</label>
 <textarea name="exm3" id="exm3"><?php echo $exm3; ?></textarea>
</p>
<p>
 <label for="exm4" class="toleft">4</label>
 <textarea name="exm4" id="exm4"><?php echo $exm4; ?></textarea>
</p>
<?php                     } ?>


<?php if ( $copern == 21 ) { ?>
<p style="margin-top:0;">
 <input type="text" name="exc1_ta1" id="exc1_ta1" value="<?php echo $exc1_ta1; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc1_sa1x" id="exc1_sa1x" value="<?php echo $exc1_sa1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sa1ok1" value="1">
 <input type="text" name="exc1_sa2x" id="exc1_sa2x" value="<?php echo $exc1_sa2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok2" value="1">
 <input type="text" name="exc1_sa3x" id="exc1_sa3x" value="<?php echo $exc1_sa3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok3" value="1">
 <input type="text" name="exc1_sa4x" id="exc1_sa4x" value="<?php echo $exc1_sa4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok4" value="1">
 <input type="text" name="exc1_sa5x" id="exc1_sa5x" value="<?php echo $exc1_sa5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sa1ok5" value="1">
 <input type="text" name="exc1_sa6x" id="exc1_sa6x" value="<?php echo $exc1_sa6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok6" value="1">
 <input type="text" name="exc1_sa7x" id="exc1_sa7x" value="<?php echo $exc1_sa7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok7" value="1">
 <input type="text" name="exc1_sa8x" id="exc1_sa8x" value="<?php echo $exc1_sa8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok8" value="1">
 <input type="text" name="exc1_sa9x" id="exc1_sa9x" value="<?php echo $exc1_sa9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok9" value="1">
 <input type="text" name="exc1_sa10x" id="exc1_sa10x" value="<?php echo $exc1_sa10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok10" value="1">
</p>
<p>
 <input type="text" name="exc1_ta2" id="exc1_ta2" value="<?php echo $exc1_ta2; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc1_sb1x" id="exc1_sb1x" value="<?php echo $exc1_sb1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sb1ok1" value="1">
 <input type="text" name="exc1_sb2x" id="exc1_sb2x" value="<?php echo $exc1_sb2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok2" value="1">
 <input type="text" name="exc1_sb3x" id="exc1_sb3x" value="<?php echo $exc1_sb3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok3" value="1">
 <input type="text" name="exc1_sb4x" id="exc1_sb4x" value="<?php echo $exc1_sb4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok4" value="1">
 <input type="text" name="exc1_sa5x" id="exc1_sb5x" value="<?php echo $exc1_sb5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sb1ok5" value="1">
 <input type="text" name="exc1_sa6x" id="exc1_sb6x" value="<?php echo $exc1_sb6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok6" value="1">
 <input type="text" name="exc1_sa7x" id="exc1_sb7x" value="<?php echo $exc1_sb7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok7" value="1">
 <input type="text" name="exc1_sa8x" id="exc1_sb8x" value="<?php echo $exc1_sb8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok8" value="1">
 <input type="text" name="exc1_sa9x" id="exc1_sb9x" value="<?php echo $exc1_sb9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok9" value="1">
 <input type="text" name="exc1_sb10x" id="exc1_sb10x" value="<?php echo $exc1_sb10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok10" value="1">
</p>
<p>
 <input type="text" name="exc1_ta3" id="exc1_ta3" value="<?php echo $exc1_ta3; ?>" style="width:90%; min-width:400px;"/>
</p>
<?php                      } ?>

<?php if ( $copern == 22 ) { ?>
<p style="margin-top:0;">
 <input type="text" name="exc2_ta1" id="exc2_ta1" value="<?php echo $exc2_ta1; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc2_sa1x" id="exc2_sa1x" value="<?php echo $exc2_sa1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc2_sa1ok1" value="1">
 <input type="text" name="exc2_sa2x" id="exc2_sa2x" value="<?php echo $exc2_sa2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok2" value="1">
 <input type="text" name="exc2_sa3x" id="exc2_sa3x" value="<?php echo $exc2_sa3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok3" value="1">
 <input type="text" name="exc2_sa4x" id="exc2_sa4x" value="<?php echo $exc2_sa4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok4" value="1">
 <input type="text" name="exc2_sa5x" id="exc2_sa5x" value="<?php echo $exc2_sa5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sa1ok5" value="1">
 <input type="text" name="exc2_sa6x" id="exc2_sa6x" value="<?php echo $exc2_sa6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok6" value="1">
 <input type="text" name="exc2_sa7x" id="exc2_sa7x" value="<?php echo $exc2_sa7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok7" value="1">
 <input type="text" name="exc2_sa8x" id="exc2_sa8x" value="<?php echo $exc2_sa8x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sa1ok8" value="1">
 <input type="text" name="exc2_sa9x" id="exc2_sa9x" value="<?php echo $exc2_sa9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sa1ok9" value="1">
 <input type="text" name="exc2_sa10x" id="exc2_sa10x" value="<?php echo $exc2_sa10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok10" value="1">
</p>
<p>
 <input type="text" name="exc2_ta2" id="exc2_ta2" value="<?php echo $exc2_ta2; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc2_sb1x" id="exc2_sb1x" value="<?php echo $exc2_sb1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc2_sb1ok1" value="1">
 <input type="text" name="exc2_sb2x" id="exc2_sb2x" value="<?php echo $exc2_sb2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sb1ok2" value="1">
 <input type="text" name="exc2_sb3x" id="exc2_sb3x" value="<?php echo $exc2_sb3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sb1ok3" value="1">
 <input type="text" name="exc2_sb4x" id="exc2_sb4x" value="<?php echo $exc2_sb4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sb1ok4" value="1">
 <input type="text" name="exc2_sb5x" id="exc2_sb5x" value="<?php echo $exc2_sb5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc2_sa1ok5" value="1">
 <input type="text" name="exc2_sb6x" id="exc2_sb6x" value="<?php echo $exc2_sb6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok6" value="1">
 <input type="text" name="exc2_sb7x" id="exc2_sb7x" value="<?php echo $exc2_sb7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok7" value="1">
 <input type="text" name="exc2_sb8x" id="exc2_sb8x" value="<?php echo $exc2_sb8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok8" value="1">
 <input type="text" name="exc2_sb9x" id="exc2_sb9x" value="<?php echo $exc2_sb9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sa1ok9" value="1">
 <input type="text" name="exc2_sb10x" id="exc2_sb10x" value="<?php echo $exc2_sb10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc2_sb1ok10" value="1">
</p>
<p>
 <input type="text" name="exc2_ta3" id="exc2_ta3" value="<?php echo $exc2_ta3; ?>" style="width:90%; min-width:400px;"/>
</p>
<?php                      } ?>

<?php if ( $copern == 23 ) { ?>
<p style="margin-top:0;">
 <input type="text" name="exc3_ta1" id="exc3_ta1" value="<?php echo $exc3_ta1; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc3_sa1x" id="exc3_sa1x" value="<?php echo $exc3_sa1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc3_sa1ok1" value="1">
 <input type="text" name="exc3_sa2x" id="exc3_sa2x" value="<?php echo $exc3_sa2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok2" value="1">
 <input type="text" name="exc3_sa3x" id="exc3_sa3x" value="<?php echo $exc3_sa3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok3" value="1">
 <input type="text" name="exc3_sa4x" id="exc3_sa4x" value="<?php echo $exc3_sa4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok4" value="1">
 <input type="text" name="exc3_sa5x" id="exc3_sa5x" value="<?php echo $exc3_sa5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc3_sa1ok5" value="1">
 <input type="text" name="exc3_sa6x" id="exc3_sa6x" value="<?php echo $exc3_sa6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok6" value="1">
 <input type="text" name="exc3_sa7x" id="exc3_sa7x" value="<?php echo $exc3_sa7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok7" value="1">
 <input type="text" name="exc3_sa8x" id="exc3_sa8x" value="<?php echo $exc3_sa8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok8" value="1">
 <input type="text" name="exc3_sa9x" id="exc3_sa9x" value="<?php echo $exc3_sa9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok9" value="1">
 <input type="text" name="exc3_sa10x" id="exc3_sa10x" value="<?php echo $exc3_sa10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sa1ok10" value="1">
</p>
<p>
 <input type="text" name="exc3_ta2" id="exc3_ta2" value="<?php echo $exc3_ta2; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc3_sb1x" id="exc3_sb1x" value="<?php echo $exc3_sb1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc3_sb1ok1" value="1">
 <input type="text" name="exc3_sb2x" id="exc3_sb2x" value="<?php echo $exc3_sb2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sb1ok2" value="1">
 <input type="text" name="exc3_sb3x" id="exc3_sb3x" value="<?php echo $exc3_sb3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sb1ok3" value="1">
 <input type="text" name="exc3_sb4x" id="exc3_sb4x" value="<?php echo $exc3_sb4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sb1ok4" value="1">
 <input type="text" name="exc3_sb5x" id="exc3_sb5x" value="<?php echo $exc3_sb5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc1_sb1ok5" value="1">
 <input type="text" name="exc3_sb6x" id="exc3_sb6x" value="<?php echo $exc3_sb6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok6" value="1">
 <input type="text" name="exc3_sb7x" id="exc3_sb7x" value="<?php echo $exc3_sb7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc1_sb1ok7" value="1">
 <input type="text" name="exc3_sb8x" id="exc3_sb8x" value="<?php echo $exc3_sb8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sb1ok8" value="1">
 <input type="text" name="exc3_sb9x" id="exc3_sb9x" value="<?php echo $exc3_sb9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sb1ok9" value="1">
 <input type="text" name="exc3_sb10x" id="exc3_sb10x" value="<?php echo $exc3_sb10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc3_sb1ok10" value="1">
</p>
<p>
 <input type="text" name="exc3_ta3" id="exc3_ta3" value="<?php echo $exc3_ta3; ?>" style="width:90%; min-width:400px;"/>
</p>
<?php                      } ?>

<?php if ( $copern == 24 ) { ?>
<p style="margin-top:0;">
 <input type="text" name="exc4_ta1" id="exc4_ta1" value="<?php echo $exc4_ta1; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc4_sa1x" id="exc4_sa1x" value="<?php echo $exc4_sa1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px"/>
 <input type="checkbox" name="exc4_sa1ok1" value="1">
 <input type="text" name="exc4_sa2x" id="exc4_sa2x" value="<?php echo $exc4_sa2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok2" value="1">
 <input type="text" name="exc4_sa3x" id="exc4_sa3x" value="<?php echo $exc4_sa3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok3" value="1">
 <input type="text" name="exc4_sa4x" id="exc4_sa4x" value="<?php echo $exc4_sa4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok4" value="1">
 <input type="text" name="exc4_sa5x" id="exc4_sa5x" value="<?php echo $exc4_sa5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc4_sa1ok5" value="1">
 <input type="text" name="exc4_sa6x" id="exc4_sa6x" value="<?php echo $exc4_sa6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok6" value="1">
 <input type="text" name="exc4_sa7x" id="exc4_sa7x" value="<?php echo $exc4_sa7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok7" value="1">
 <input type="text" name="exc4_sa8x" id="exc4_sa8x" value="<?php echo $exc4_sa8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok8" value="1">
 <input type="text" name="exc4_sa9x" id="exc4_sa9x" value="<?php echo $exc4_sa9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok9" value="1">
 <input type="text" name="exc4_sa10x" id="exc4_sa10x" value="<?php echo $exc4_sa10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sa1ok10" value="1">


</p>
<p>
 <input type="text" name="exc4_ta2" id="exc4_ta2" value="<?php echo $exc4_ta2; ?>" style="width:90%; min-width:400px;"/>
</p>
<p>
 <input type="text" name="exc4_sb1x" id="exc4_sb1x" value="<?php echo $exc4_sb1x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc4_sb1ok1" value="1">
 <input type="text" name="exc4_sb2x" id="exc4_sb2x" value="<?php echo $exc4_sb2x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok2" value="1">
 <input type="text" name="exc4_sb3x" id="exc4_sb3x" value="<?php echo $exc4_sb3x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok3" value="1">
 <input type="text" name="exc4_sb4x" id="exc4_sb4x" value="<?php echo $exc4_sb4x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok4" value="1">
 <input type="text" name="exc4_sb5x" id="exc4_sb5x" value="<?php echo $exc4_sb5x; ?>" style="width:20%; min-width:100px; margin-bottom:10px;"/>
 <input type="checkbox" name="exc4_sb1ok5" value="1">
 <input type="text" name="exc4_sb6x" id="exc4_sb6x" value="<?php echo $exc4_sb6x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok6" value="1">
 <input type="text" name="exc4_sb7x" id="exc4_sb7x" value="<?php echo $exc4_sb7x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok7" value="1">
 <input type="text" name="exc4_sb8x" id="exc4_sb8x" value="<?php echo $exc4_sb8x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok8" value="1">
 <input type="text" name="exc4_sb9x" id="exc4_sb9x" value="<?php echo $exc4_sb9x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok9" value="1">
 <input type="text" name="exc4_sb10x" id="exc4_sb10x" value="<?php echo $exc4_sb10x; ?>" style="width:20%; min-width:100px;"/>
 <input type="checkbox" name="exc4_sb1ok10" value="1">
</p>
<p>
 <input type="text" name="exc4_ta3" id="exc4_ta3" value="<?php echo $exc4_ta3; ?>" style="width:90%; min-width:400px;"/>
</p>
<?php                      } ?>
</fieldset>

<fieldset>
<p style="margin-top:0px;">
 <label for="important" style="margin-bottom:3px;">Important</label>
 <textarea name="important" id="important"><?php echo $important; ?></textarea>
</p>
</fieldset>





</div> <!-- .content-col left -->
</div> <!-- .wrap-content-col left -->



<div id="wrapcolright" class="wrap-content-col" style="">
<div class="content-col col-noactive" > <!-- dopyt, prep�na� na "col-active" -->
<fieldset>
 <label for="name">N�zov</label>
 <input type="text" name="name_sk" id="name_sk" class="header" value="<?php echo $name_sk; ?>" style="width:400px;"/>
</fieldset>


<fieldset>
<p style="margin-top:30px;">
 <label for="desx" style="margin-bottom:3px;">Popis</label>
 <textarea name="desx_sk" id="desx_sk"><?php echo $desx_sk; ?></textarea>
</p>
</fieldset>

<div class="section-nav">
 <a href="#" class="toleft">Pr�klady</a>
</div>

<fieldset>
<p>
 <label for="exm1" class="toleft">1</label>
 <textarea name="exm1_sk" id="exm1_sk"><?php echo $exm1_sk; ?></textarea>
</p>
<p>
 <label for="exm2" class="toleft">2</label>
 <textarea name="exm2_sk" id="exm2_sk"><?php echo $exm2_sk; ?></textarea>
</p>
<p>
 <label for="exm3" class="toleft">3</label>
 <textarea name="exm3_sk" id="exm3_sk"><?php echo $exm3_sk; ?></textarea>
</p>
<p>
 <label for="exm4" class="toleft">4</label>
 <textarea name="exm4_sk" id="exm4_sk"><?php echo $exm4_sk; ?></textarea>
</p>
</fieldset>

<fieldset>
<p style="margin-top:0px;">
 <label for="important" style="margin-bottom:3px;">D�le�it�</label>
 <textarea name="important_sk" id="important_sk"><?php echo $important_sk; ?></textarea>
</p>
</fieldset>

</div> <!-- .content-col right -->
</div> <!-- .wrap-content-col right -->

</FORM>
</div> <!-- .content -->
</div> <!-- .wrap-content -->

</body>
</html>