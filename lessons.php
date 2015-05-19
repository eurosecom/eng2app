<?php
//tymto sa spusta ponuka z ciselnika sluzieb
session_start(); 
$h5rtgh5 = include("tr45efgsf.php");
?>
<!doctype html>
<HTML>
<?php
//zaciatok dokumentu
  do
  {
$copern = 1*$_REQUEST['copern'];
if( $copern == 0 ) { $copern=1; }

require_once("../pswd/password.php");
@$spojeni = mysql_connect($mysqlhost, $mysqluser, $mysqlpasswd);
  if (!$spojeni):
    echo "Spojenie so serverom nedostupne.";
    exit;
  endif;
  mysql_select_db($mysqldb);

$druhzoznamu = 1*$_REQUEST['druhzoznamu'];
$hladanie = 1*$_REQUEST['hladanie'];
$knc="";
if ( $druhzoznamu == 1 ) { $knc="_rgp"; }

$h_hladaj = $_REQUEST['h_hladaj'];
//echo $hladanie;echo $h_hladaj;

//datumove funkcie
$sDat = include("../funkcie/dat_sk_us.php");

//vytvor tabulku 
$sql = "SELECT exm4 FROM lessons";
$vysledok = mysql_query("$sql");
if ( !$vysledok )
{
$sql = "DROP TABLE lessons";
$vysledok = mysql_query("$sql");

$sqlt = <<<less
(
   pid         int not null auto_increment,
   type        VARCHAR(80) NOT NULL,
   name        VARCHAR(80) NOT NULL,
   ckat        DECIMAL(10,0) DEFAULT 0,
   paid        DECIMAL(10,0) DEFAULT 0,
   desx        TEXT NOT NULL,
   exm1        TEXT NOT NULL,
   exm2        TEXT NOT NULL,
   exm3        TEXT NOT NULL,
   konx        DECIMAL(10,0) DEFAULT 0,
   PRIMARY KEY(pid)
);
less;
$sql = "CREATE TABLE lessons".$sqlt;
$vysledek = mysql_query("$sql");
//echo $sql;
}

$sql = "SELECT important FROM lessons";
$vysledok = mysql_query("$sql");
if ( !$vysledok )
{

$sql = "ALTER TABLE lessons ADD exm5 TEXT NOT NULL AFTER exm3";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exm4 TEXT NOT NULL AFTER exm3";
$vysledek = mysql_query("$sql");


$sql = "ALTER TABLE lessons ADD exc2_sa1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc2_sa4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sa3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sa2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sa1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc2_ta2 VARCHAR(180) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_ta1 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");


$sql = "ALTER TABLE lessons ADD exc1_sa1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc1_sa4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sa3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sa2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sa1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc1_ta2 VARCHAR(180) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_ta1 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD important TEXT NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

}


//cislo operacie
$cislo_pid = 1*$_REQUEST['cislo_pid'];
$type = $_REQUEST['type'];
$name = $_REQUEST['name'];
$ckat = $_REQUEST['ckat'];
$paid = $_REQUEST['paid'];
$desx = $_REQUEST['desx'];
$exm1 = $_REQUEST['exm1'];
$exm2 = $_REQUEST['exm2'];
$important = $_REQUEST['important'];

//hladaj
if ( $copern == 9000 )
{
$hladanie=1;
$copern=1;
}
//koniec hladaj

//nove 
if ( $copern == 5011 )
{
$icouzje=0;

$sqty = "INSERT INTO lessons ( type, name, ckat) VALUES ( 'A', '', 1 );";
$ulozene = mysql_query("$sqty");

$pid=0;
$sqltt = "SELECT * FROM lessons WHERE pid > 0 ORDER BY pid DESC";
$sql = mysql_query("$sqltt");
  if (@$zaznam=mysql_data_seek($sql,0))
  {
  $riadok=mysql_fetch_object($sql);
$pid = 1*$riadok->pid;
  }

$cislo_pid=$pid;
$copern=8;

}
//koniec nove 

//vymazanie
if ( $copern == 16 )
    {
$cislo_pid = strip_tags($_REQUEST['cislo_pid']);

$zmazane = mysql_query("DELETE FROM lessons WHERE pid='$cislo_pid'");
$copern=1;
if (!$zmazane):
?>
<script type="text/javascript"> alert( " POLOéKA NEBOLA VYMAZAN¡ " ) </script>
<?php
endif;
if ($zmazane):
$zmaz="OK";
//echo "POLOéKA ico:$cislo_ico BOLA VYMAZAN¡ ";
endif;
    }
//koniec vymazania

//uprava 18
if ( $copern == 18 )
  {
$cislo_pid = strip_tags($_REQUEST['cislo_pid']);

$uprtxt = "UPDATE lessons SET ".
" type='$type', ckat='$ckat', paid='$paid', name='$name', desx='$desx', exm1='$exm1', exm2='$exm2', important='$important' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");
$copern=8;

  }

//uprava 
if ( $copern == 8 OR $copern == 88 )
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
$important = $riadok->important;

  }
    }
//koniec copern=8 nacitanie

$uloz="NO";
$zmaz="NO";
$uprav="NO";


?>
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=cp1250">
  <link rel="stylesheet" href="../css/reset.css" type="text/css">
<title>EuroSecom - Lessons</title>
<style type="text/css">
a { text-decoration: none; }
strong { font-weight: bold; }
body {
  min-width: 950px;
  background-color:  #e1f1f6;
  font-family: Arial, sans-serif;
}
.f16 { font-size: 16px; }
.f15 { font-size: 15px; }
.f14 { font-size: 14px; }
.f12 { font-size: 12px; }
.va20 {
  height: 20px !important;
  line-height: 20px !important;
}
.va16 {
  height: 16px !important;
  line-height: 16px !important;
}
#wrap-heading {
  overflow: auto;
  width: 98%;
  padding: 0 1%;
  background-color: #ffff90;
  -webkit-box-shadow: 1px 1px 6px 0px rgba(0, 0, 0, 0.298);
  -moz-box-shadow: 1px 1px 6px 0px rgba(0, 0, 0, 0.298);
  box-shadow: 1px 1px 6px 0px rgba(0, 0, 0, 0.298);
}
#heading {
  margin-top: 4px;
  width: 100%;
}
td.ilogin { font-size: 11px; }
td.header {
  height: 36px;
  line-height: 36px;
  font-size: 20px;
  font-weight: bold;
  font-family: Times, 'Times New Roman', Georgia, serif;
}
td.header > img {
  width: 15px;
  height: 15px;
  vertical-align: middle;
  cursor: pointer;
}
div.bar-btn-form-tool {
  position: absolute;
  top: 23px;
  right: 1%;
}
img.btn-form-tool {
  float: right;
  width: 20px;
  height: 20px;
  margin-left: 10px;
  cursor: pointer;
}
div.content {
  position: relative;
  width: 98%;
  margin: 10px 1% 0 1%;
}
div.search-bar {
  position: absolute;
  top: 0;
  right: 5%;
  left: 5%;
  width: 300px;
  margin: 0 auto;
  padding: 4px;
  background-color: #add8e6;
}
div.search-bar > input {
  width: 200px;
  height: 22px;
  line-height: 22px;
  border: 1px solid #39f;
  text-indent: 3px;
  font-size: 14px;
}
div.search-bar > a {
  margin-left: -4px;
  padding: 5px 10px;
  background-color: #39f;
  color: white;
  font-size: 13px;
  font-weight: bold;
}
div.search-bar > img {
  position: absolute;
  top: 7px;
  right: 10px;
  width: 20px;
  height: 20px;
  cursor: pointer;
}
div.newico-bar {
  position: absolute;
  top: 0;
  right: 0;
  width: 135px;
  padding: 4px;
  font-size: 14px;
  background-color: #7df16f;
}
div.newico-bar > input {
  width: 80px;
  height: 22px;
  line-height: 22px;
  border: 1px solid #27c513;
  text-indent: 3px;
  font-size: 14px;
}
div.newico-bar > a {
  margin-left: -5px;
  padding: 5px 8px;
  color: white;
  font-size: 13px;
  font-weight: bold;
  background-color: #27c513;
}
table.zakaznici {
  width: 100%;
  margin-top: 10px;
  font-size: 13px;
}
table.zakaznici th {
  height: 16px;
  line-height: 16px;
  font-size: 11px;
}
table.zakaznici td.poradove {
  padding-right: 13px;
  text-align: right;
  font-style: italic;
  font-size: 12px;
}
table.zakaznici tr.stripe-dark { background-color: #add8e6; }
table.zakaznici thead th a { color: #000; }
table.zakaznici thead th a > img {
  width: 8px;
  height: 8px;
}
table.zakaznici tbody td {
  height: 24px;
  line-height: 24px;
  text-align: center;
}
table.zakaznici tbody img {
  position: relative;
  top: 4px;
  width: 18px;
  height: 18px;
  cursor: pointer;
}
table.zakaznici tfoot th { border-top: 2px solid #add8e6; }
div.vymazico-btnbar {
  margin-top: 10px;
  text-align: center;
}
div.vymazico-btnbar input {
  width: 80px;
  padding: 4px 0;
  font-size: 14px;
}
a.faktury-btn {
  position: absolute;
  top: 21px;
  right: 1%;
  width: 80px;
  height: 25px;
  line-height: 25px;
  background-color: #39f;
  color: #fff;
  font-size: 13px;
  font-weight: bold;
  text-align: center;
}
#col-left {
  float: left;
  width: 37%;
  margin: 10px 0 0 1%;
}
#col-right {
  float: left;
  width: 54%;
  margin: 10px 4% 0 4%;
}
div.head-zakaznik {
  width: 80px;
  height: 20px;
  line-height: 22px;
  text-align: center;
  background-color: lightblue;
  font-size: 14px;
}
div.wrap-zakaznik {
  overflow: auto;
  width: 98%;
  padding: 1%;
  margin-bottom: 10px;
  background-color: lightblue;
}
input[type=text] {
  height: 16px;
  line-height: 16px;
  padding-left: 2px;
  border: 1px solid #39f;
  font-size: 13px;
}
img.editico-icon {
  width: 18px;
  height: 18px;
  vertical-align: middle;
  cursor: pointer;
}
div.wrap-faktura {
  width: 100%;
  min-width: 560px;
}
table.zakaznik {
  width: 100%;
}
table.zakaznik select, table.zakaznik textarea {
  border: 1px solid #39f;
}
table.zakaznik td, table.fahead td, table.fapol td {
  height: 24px;
  line-height: 24px;
}
table.zakaznik th {
  height: 24px;
  line-height: 24px;
  font-size: 11px;
  padding-right: 5px;
  text-align: right;
}
table.fahead {
  width: 430px;
  margin: 0 auto;
  font-size: 12px;
}
table.fapol {
  width: 430px;
  margin: 0 auto;
}
table.fapol th {
  height: 24px;
  line-height: 24px;
  font-size: 11px;
  text-align: left;
  text-indent: 10px;
}
table.fapol td { text-align: right; }
div.formsave-bar {
  overflow: auto;
  width: 100%;
  height: 46px;
  margin-top: -10px;
}
div.formsave-bar > a {
  float: right;
  width: 60px;
  height: 26px;
  line-height: 26px;
  margin-top: 10px;
  color: #39f;
  text-align: right;
  font-size: 13px;
  font-weight: bold;
}
div.formsave-bar > input {
  float: right;
  width: 100px;
  height: 26px;
  margin-top: 10px;
  font-size: 13px;
}
</style>

<script type="text/javascript">
//sirka a vyska okna
var sirkawin = screen.width-10;
var vyskawin = screen.height-175;
var sirkawin = screen.width-10;
var vyskawincel = screen.height;

//uprava
<?php if ( $copern == 8 ) { ?>
  function ObnovUI()
  {
   document.formv1.type.value = '<?php echo "$type";?>';
   document.formv1.name.value = '<?php echo "$name";?>';
   document.formv1.ckat.value = '<?php echo "$ckat";?>';
   document.formv1.paid.value = '<?php echo "$paid";?>';

  }
<?php                     } ?>

//uprava
<?php if ( $copern != 8 ) { ?>
  function ObnovUI()
  {
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



//Z ciarky na bodku
  function CiarkaNaBodku(Vstup)
  {
   if ( Vstup.value.search(/[^0-9.-]/g) != -1 ) { Vstup.value=Vstup.value.replace(",","."); }
  }

  function NewIco()
  {
   var h_icn = document.forms.fnewico.h_icn.value;
   window.open('lessons.php?h_icn=' + h_icn + '&copern=5011&druhzoznamu=<?php echo $druhzoznamu; ?>&drupoh=1&page=1', '_self');
  }
  function Hladaj()
  {
   var h_hladaj = document.forms.fnewico.h_hladaj.value;
   window.open('lessons.php?h_hladaj=' + h_hladaj + '&copern=9000&druhzoznamu=<?php echo $druhzoznamu; ?>&hladanie=1&drupoh=1&page=1', '_self');
  }
  function KonHladaj()
  {
   var h_hladaj = document.forms.fnewico.h_hladaj.value;
   window.open('lessons.php?h_hladaj=&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&hladanie=0&drupoh=1&page=1', '_self');
  }

  function Spat()
  {
   window.open('lessons.php?copern=1&drupoh=1&page=1&presun=1','_self');
  }
  function ZoznamFak()
  {
   window.open('../faktury/vstfak.php?copern=9&drupoh=1&page=1&rozuct=NIE&sysx=INE&hladaj_nai=<?php echo $cislo_ico; ?>', '_blank', 'width=1080, height=900, top=0, left=10, status=yes, resizable=yes, scrollbars=yes');
  }
  function UpravIco()
  {
   window.open('../cis/cico.php?copern=88&page=1&cislo_ico=<?php echo $cislo_ico; ?>', '_blank', 'width=1080, height=900, top=0, left=10, status=yes, resizable=yes, scrollbars=yes');
  }
  function Tlac1PDF()
  {
   window.open('najom_tlac.php?copern=1&page=1', '_blank', 'width=1080, height=900, top=0, left=10, status=yes, resizable=yes, scrollbars=yes');
  }
  function Export1FAK()
  {
   window.open('najom_export.php?copern=1&page=1', '_blank', 'width=1080, height=900, top=0, left=10, status=yes, resizable=yes, scrollbars=yes');
  }

  function UpravZml(pid)
  {
   var pidx = pid;
   window.open('lessons.php?sys=<?php echo $sys; ?>&copern=8&druhzoznamu=<?php echo $druhzoznamu; ?>&hladanie=<?php echo $hladanie; ?>&h_hladaj=<?php echo $h_hladaj; ?>&page=<?php echo $page;?>&cislo_pid=' + pidx + '&tt=1', '_self');
  }
  function ZmazZml(pid)
  {
   var pidx = pid;
   window.open('lessons.php?sys=<?php echo $sys; ?>&copern=6&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&cislo_pid=' + pidx + '&tt=1', '_self');
  }
</script>
</HEAD>
<BODY onload="ObnovUI();">

<div id="wrap-heading">
 <table id="heading">
 <tr>
  <td class="ilogin">EuroSecom</td>
  <td class="ilogin" align="right">
   
  </td>
 </tr>
 <tr>
  <td class="header">Lessons
<?php
$prev_oc=$cislo_pid-1; 
$next_oc=$cislo_pid+1;

if ( $copern == 8 ) {
$minpid=1;
$sqlico = mysql_query("SELECT pid FROM lessons WHERE pid > 0 ORDER BY pid LIMIT 1 ");
  if (@$zaznam=mysql_data_seek($sqlico,$i))
  {
  $riadico=mysql_fetch_object($sqlico);
  $minpid=$riadico->pid;
  }
$maxpid=1;
$sqlico = mysql_query("SELECT pid FROM lessons WHERE pid > 0 ORDER BY pid DESC LIMIT 1 ");
  if (@$zaznam=mysql_data_seek($sqlico,$i))
  {
  $riadico=mysql_fetch_object($sqlico);
  $maxpid=$riadico->pid;
  }

//echo $minpid;
//echo $maxpid;

$nasieloc=0;
$i=0;
while ($i <= 9999 AND $nasieloc == 0 AND $prev_oc > $minpid )
{
$sqlico = mysql_query("SELECT pid FROM lessons WHERE pid=$prev_oc ");
  if (@$zaznam=mysql_data_seek($sqlico,$i))
  {
  $riadico=mysql_fetch_object($sqlico);
  $nasieloc=1;
  $prev_oc=$riadico->pid;
  }
if ( $nasieloc == 0 ) $prev_oc=$prev_oc-1;

$i=$i+1;
}
$nasieloc=0;
$i=0;
while ($i <= 9999 AND $nasieloc == 0 AND $next_oc < $maxpid )
{
$sqlico = mysql_query("SELECT pid FROM lessons WHERE pid=$next_oc ");
  if (@$zaznam=mysql_data_seek($sqlico,$i))
  {
  $riadico=mysql_fetch_object($sqlico);
  $nasieloc=1;
  $next_oc=$riadico->pid;
  }
if ( $nasieloc == 0 ) $next_oc=$next_oc+1;

$i=$i+1;
}
if ( $prev_oc == 0 ) { $prev_oc=$minpid; }
if ( $next_oc == 0 ) { $next_oc=$maxpid; }
if ( $next_oc > $maxpid ) { $next_oc=$maxpid; }
if ( $prev_oc < $minpid ) { $prev_oc=$minpid; }

//echo $prev_oc."/";
//echo $next_oc;

$sqlico = mysql_query("SELECT pid,ico,ciszml FROM lessons WHERE pid=$next_oc ");
  if (@$zaznam=mysql_data_seek($sqlico,0))
  {
  $riadico=mysql_fetch_object($sqlico);
  $next_ico=$riadico->ico;
  $next_zml=$riadico->ciszml;
  }
$sqlico = mysql_query("SELECT pid,ico,ciszml FROM lessons WHERE pid=$prev_oc ");
  if (@$zaznam=mysql_data_seek($sqlico,0))
  {
  $riadico=mysql_fetch_object($sqlico);
  $prev_ico=$riadico->ico;
  $prev_zml=$riadico->ciszml;
  }
                    }
//koniec copern=8
?>

<?php
 if ( $copern == 5 ) echo "- nov·";
 if ( $copern == 6 ) echo "- vymazanie";
 if ( $copern == 8 ) { echo "- ˙prava";
?>
  <img src="../obr/prev.png" onclick="UpravZml(<?php echo "$prev_oc"; ?>);" title="I»O <?php echo "$prev_ico zmluva $prev_zml"; ?>">
  <img src="../obr/next.png" onclick="UpravZml(<?php echo "$next_oc"; ?>);" title="I»O <?php echo "$next_ico zmluva $next_zml"; ?>">
<?php                } ?>
  </td>
  <td>
<?php if ( $copern == 1 ) { ?>
   <div class="bar-btn-form-tool">
    <img src="../obr/ikony/upbox_blue_icon.png" onclick="Export1FAK();" title="Export lessons" class="btn-form-tool">
    <img src="../obr/ikony/printer_blue_icon.png" onclick="Tlac1PDF();" title="Zobraziù zoznam za <?php echo $kli_vume; ?> v PDF" class="btn-form-tool">
   </div>
<?php                     } ?>
  </td>
 </tr>
 </table>
</div>

<?php
//echo "cislo_ico ".$cislo_ico;
//toto je cast na zobrazenie tabulky a prechody medzi stranami
//1=volanie z menu.php
//2=dalsia strana
//3=predosla strana
//4=prejst na stranu
//5=nova polozka
//6=mazanie
//7=hladanie
//8=uprava
//9=hladanie
if ( $copern == 1 OR $copern == 2 OR $copern == 3 OR $copern == 4 OR $copern == 5 OR $copern == 6 OR $copern == 7 OR $copern == 8 OR $copern == 9 )
     {
if ( $copern != 1 AND $copern != 2 AND $copern != 3 AND $copern != 4 AND $copern != 5 AND $copern != 6 AND $copern != 7 AND $copern != 8 AND $copern != 9 ) break;
    do
    {
//zobraz vsetko co je v tabulke
if ( $copern == 1 OR $copern == 2 OR $copern == 3 OR $copern == 4 OR $copern == 5 OR $copern == 6 OR $copern == 8 OR $copern == 7 )
  {
$tried = 1*$_REQUEST['tried'];

$sqlttt = "SELECT * FROM lessons ORDER BY pid";
if ( $tried == 1 ) { $sqlttt = "SELECT * FROM lessons  ORDER BY pid"; }
if ( $tried == 2 ) { $sqlttt = "SELECT * FROM lessons  ORDER BY pid"; }

if ( $hladanie == 1 )
     {
$sqlttt = "SELECT * FROM lessons ORDER BY pid";
if ( $tried == 1 ) { $sqlttt = "SELECT * FROM lessons ORDER BY pid"; }
if ( $tried == 2 ) { $sqlttt = "SELECT * FROM lessons ORDER BY pid"; }
     }
$sql = mysql_query("$sqlttt");
//echo $sqlttt;
  }
//zobraz uprava a zmazanie
if ( $copern == 8 OR $copern == 6 )
  {
$sql = mysql_query("SELECT * FROM lessons ORDER BY pid");
  }
//celkom poloziek
$cpol = mysql_num_rows($sql);
?>

<?php
//zobraz zoznam
 if ( $copern == 1 )
 {
?>
<div class="content">
<FORM name='fnewico' method='post' action='#' style="display:block; height:25px;">
 <div class="search-bar">
  <input type="text" name="h_hladaj" id="h_hladaj" value='<?php echo $h_hladaj; ?>'/>
  <a href="#" onclick="Hladaj();">Hæadaù</a>
  <img src="../obr/ikony/reload_blue_icon.png" onclick="KonHladaj();" title="Obnoviù">
 </div>
 <div class="newico-bar">
  <input type="text" name="h_icn" id="h_icn" maxlength="10"/>
  <a href="#" onclick="NewIco();" title="Vytvoriù nov˙ lesson" >+NEW</a>
 </div>
</FORM>

<table class="zakaznici"> <!-- zoznam najomcov -->
<thead>
<tr>
 <th width="5%">
  <a href='lessons.php?sys=<?php echo $sys; ?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&tried=0' title="Zoradiù podæa poradia">
  <img src="../obr/ikony/arrowdown_black_icon.png"> #</a>
 </th>
 <th width="10%">
  <a href='lessons.php?sys=<?php echo $sys; ?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&tried=2' title="Zoradiù podæa I»O">
  <img src="../obr/ikony/arrowdown_black_icon.png"> type</a>
 </th>
 <th width="35%">
  <a href='lessons.php?sys=<?php echo $sys; ?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&tried=1' title="Zoradiù podæa n·zvu">
  <img src="../obr/ikony/arrowdown_black_icon.png"> name</a>
 </th>
 <th width="25%">ckat</th>
 <th width="15%">paid</th>
 <th width="10%"></th>
</tr>
</thead>

<?php while ( $i <= $cpol )
  {
  if (@$zaznam=mysql_data_seek($sql,$i))
{
$riadok=mysql_fetch_object($sql);
$stripe="stripe-dark";
if ( $par == 1 ) { $stripe="stripe-light"; }
?>
<tbody>
<tr class="<?php echo $stripe; ?>">
 <td class="poradove"><?php echo "$riadok->pid.";?></td>
 <td><?php echo $riadok->type;?></td>
 <td style="text-align:left;"><?php echo $riadok->name;?></td>
 <td><?php echo "$riadok->ckat";?></td>
 <td><?php echo $riadok->paid;?></td>
 <td>
  <img src="../obr/ikony/pencil_blue_icon.png" onclick="UpravZml(<?php echo "$riadok->pid";?>);" title="Upraviù">&nbsp;&nbsp;
  <img src="../obr/ikony/xmark_lred_icon.png" onclick="ZmazZml(<?php echo $riadok->pid;?>);" title="Vymazaù">
 </td>
</tr>
</tbody>
<?php
}
$i = $i + 1;
if ( $par == 0 ) { $par=1; }
else { $par=0; }
  }
?>
<tfoot>
<tr>
 <th><?php echo "= $cpol";?></th>
 <th colspan="5"></th>
</tr>
</tfoot>
</table>

</div> <!-- koniec .content -->
<?php
 }
//koniec zoznam
    } while (false);
//koniec 1,2,3,4,5,6,7,8,9
?>


<?php
//vymazanie polozky
if ( $copern == 6 )
  {
$cislo_pid = strip_tags($_REQUEST['cislo_pid']);
$page = strip_tags($_REQUEST['page']);
$sqlttt = "SELECT * FROM lessons  WHERE pid='$cislo_pid' ";
$sql = mysql_query("$sqlttt");
?>
<div class="content">

<table class="zakaznici">
<tr>
 <th width="5%">#</th>
 <th width="10%">type</th>
 <th width="35%">name</th>
 <th width="25%">ckat</th>
 <th width="15%">paid</th>
 <th width="10%"></th>
</tr>
<tr class="stripe-dark">
<?php while($zaznam=mysql_fetch_array($sql)):?>
 <td><?php echo $zaznam["pid"];?></td>
 <td><?php echo $zaznam["type"];?></td>
 <td><?php echo $zaznam["name"];?></td>
 <td><?php echo $zaznam["ckat"];?> / <?php echo $zaznam["xxx"];?></td>
 <td><?php echo $zaznam["paid"];?></td>
 <td></td>
<?php endwhile;?>
</tr>
</table>

<div class="vymazico-btnbar">
 <FORM name="formv2" method="post" action="lessons.php?sys=<?php echo $sys; ?>&page=<?php echo $page;?>&copern=16&druhzoznamu=<?php echo $druhzoznamu; ?>&cislo_pid=<?php echo $cislo_pid;?>&cislo_cis=<?php echo $cislo_cis;?>&cislo_cen=<?php echo $cislo_cen;?>">
  <INPUT type="submit" id="zmaz" name="zmaz" value="¡no">
 </FORM>&nbsp;
 <FORM name="formv3" method="post" action="lessons.php?sys=<?php echo $sys; ?>&page=<?php echo $page;?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>">
  <INPUT type="submit" id="stornom" name="stornom" value="Nie">
 </FORM>
</div>

</div>
<?php
  }
//koniec vymazanie
?>


<?php
//zobraz pre novu a upravu polozky
if ( $copern == 5 OR $copern == 8 )
     {
?>

<div id="col-left"> <!-- lavy stlpec -->
<div class="head-zakaznik"> </div>
<div class="wrap-zakaznik">
 <table class="zakaznik">
 <FORM name="formv1" method="post" action="lessons.php?sys=<?php echo $sys; ?>&page=<?php echo $page;?>&copern=18&druhzoznamu=<?php echo $druhzoznamu; ?>&cislo_pid=<?php echo $cislo_pid;?>&cislo_cis=<?php echo $cislo_cis;?>&cislo_cen=<?php echo $cislo_cen;?>">

 <tr>
 	<th>pid</th>
  <td colspan="2">
   <input type="text" name="pid" id="pid" value="<?php echo $cislo_pid; ?>" disabled="disabled" style="width:200px;"/>
  </td>
 </tr>
 </table>
</div>

<div class="head-zakaznik"></div>
<div class="wrap-zakaznik">
 <table class="zakaznik">

 <tr>
  <th>type</th>
  <td>
   <select size="1" name="type" id="type" onkeydown="faktkedyEnter(event.which);" style="width:74px;">
    <option value="A">A</option>
    <option value="B">B</option>
    <option value="C">C</option>
    <option value="D">D</option>
   </select>
  </td>

 </tr>

 <tr>
  <th>ckat</th>
  <td>
   <select size="1" name="ckat" id="ckat" onkeydown="faktkedyEnter(event.which);" style="width:74px;">
    <option value="1">Cat 1</option>
    <option value="2">Cat 2</option>
    <option value="3">Cat 3</option>
    <option value="4">Cat 4</option>
   </select>
  </td>

 </tr>
 </table>
</div>

<div class="head-zakaznik"></div>
<div class="wrap-zakaznik">
 <table class="zakaznik">
 <tr>
  <td>
   name <input type="text" name="name" id="name" value="<?php echo $name; ?>" style="width:400px;"/>
  </td>
 </tr>

 <tr>
  <th>paid</th>
  <td>
   <select size="1" name="paid" id="paid" style="width:74px;">
    <option value="0">free</option>
    <option value="1">paid 1</option>
    <option value="2">paid 2</option>
    <option value="3">paid 3</option>
   </select>
  </td>
 </tr>
 </table>
</div>

<div class="formsave-bar" onmouseover="document.formv1.uloz.disabled = false;">
 <a href="#" onclick="Spat();">Sp‰ù</a>
 <INPUT type="submit" id="uloz" name="uloz" value="Uloûiù zmeny">
</div>
</div> <!-- koniec lavy stlpec -->

<div id="col-right"> <!-- pravy stlpec -->
<div class="wrap-faktura">


 <table class="fapol">
 <tr>
  <th width="30%">desx</th>
  <td width="70%"><textarea name="desx" id="desx" style="width:98%; height:120px; margin-top:5px;"><?php echo $desx; ?></textarea></td>
 </tr>
 <tr>
  <th width="30%">exm1</th>
  <td width="70%"><textarea name="exm1" id="exm1" style="width:98%; height:120px; margin-top:5px;"><?php echo $exm1; ?></textarea></td>
 </tr>
 <tr>
  <th width="30%">exm2</th>
  <td width="70%"><textarea name="exm2" id="exm2" style="width:98%; height:120px; margin-top:5px;"><?php echo $exm2; ?></textarea></td>
 </tr>
 <tr>
  <th width="30%">important</th>
  <td width="70%"><textarea name="important" id="important" style="width:98%; height:120px; margin-top:5px;"><?php echo $important; ?></textarea></td>
 </tr>
 </table>
</div>
</div> <!-- koniec pravy stlpec -->

</FORM>
<?php
     }
//koniec pre novu a upravu polozky
?>

<?php
//toto je koniec casti na zobrazenie tabulky a prechody medzi stranami
     }
//celkovy koniec dokumentu
 } while (false);
?>
<!-- m·m rovnak˙ datab·zu s servis.php -->
</BODY>
</HTML>