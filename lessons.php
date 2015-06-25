<?php
//tymto sa spusta ponuka z ciselnika sluzieb
session_start(); 
$h5rtgh5 = include("tr45efgsf.php");
?>
<!doctype html>
<html>
<?php
//zaciatok dokumentu
  do
  {
$copern = 1*$_REQUEST['copern'];
if ( $copern == 0 ) { $copern=1; }

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

$sql = "SELECT exc1_ta3 FROM lessons";
$vysledok = mysql_query("$sql");
if ( !$vysledok )
{

$sql = "ALTER TABLE lessons ADD exm5 TEXT NOT NULL AFTER exm3";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exm4 TEXT NOT NULL AFTER exm3";
$vysledek = mysql_query("$sql");


$sql = "ALTER TABLE lessons ADD exc2_sa1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sb1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc2_sa4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sa3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sa2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sa1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc2_sb4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sb3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sb2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_sb1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc2_ta3 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_ta2 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc2_ta1 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");


$sql = "ALTER TABLE lessons ADD exc1_sa1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sb1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc1_sa4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sa3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sa2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sa1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc1_sb4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sb3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sb2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_sb1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc1_ta3 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc1_ta2 VARCHAR(80) NOT NULL AFTER konx";
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
$copern=1;
?>
<script type="text/javascript">
 window.open('lesson.php?copern=1&cislo_pid=<?php echo $cislo_pid; ?>', '_self');
</script>
<?php
exit;
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
<script type="text/javascript"> alert( "POLOéKA NEBOLA VYMAZAN¡" ) </script>
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
<head>
 <meta charset="cp1250">
 <link rel="stylesheet" href="css/global.css">
<title>Lessons | English2App</title>
<style type="text/css">
body {
  background-color: #eee;
}
div.top-bar {
  overflow: auto;
  width: 99%;
  padding: 0 0.5%;
  clear: both;
  height: 32px;
  background-color: #1976d2;
  box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); /* prefixy */
}

dl.breadcrumb-nav > dd {
  font-size: 16px;
  float: left;
  margin-top: 9px;
  color: #fff;
}
dl.breadcrumb-nav > dt > a {
  display: block;
  line-height: 16px;
  font-size: 14px;
  color: #fff;
  padding: 8px 7px 8px 7px;
}
dl.breadcrumb-nav > dt > a:hover {
  background-color: #1565C0;
  color: #fff;
}

dl.breadcrumb-nav > dt > strong {
  display: block;
  color: #fff;
  padding: 8px 7px 8px 7px;
  font-size: 14px;
  line-height: 16px;
  
}


ul.breadcrumb-nav > li {
  font-size: 14px;
  color: #fff;
}
ul.breadcrumb-nav > li > a, ul.breadcrumb-nav > li > strong {
  display: block;
  padding: 8px 7px 8px 7px;
  font-size: 14px;
  color: #fff;

}
ul.breadcrumb-nav > li > a:hover {
  background-color: #1565C0;
  color: #fff;
}

ul.breadcrumb-nav > li > strong {
  display: block;
  color: #fff;
  font-size: 14px;
  line-height: 16px;
}





.x16-icon-nav:before {
  background-image: url(img/x16_white_menu.png);
  margin-right: 8px;
  width: 16px;
  height: 16px;
  display: inline-block; /* dopyt, zos˙ladiù s ostatn˝mi */
  content: '';
  background-repeat: no-repeat;
  vertical-align: -3px;
}




div.content {
  overflow: auto;
  width: 80%;
  margin: 24px auto 0 auto;
  max-width: 1200px;
  min-width: 950px;
}
div.wrap-list-item-bg {
  background-color: #fff;
  border-radius: 2px;
  padding: 10px 20px;
  overflow: auto;
}
div.wrap-list-item-bg > h3 {
  font-size: 20px;
  color: #757575;
  line-height: 50px;
  margin-bottom: 10px;

}

table.list-item-bg {
 overflow: auto;
 width: 100%;
}
table.list-item-bg thead th, table.list-item-bg thead th > a {
  color: #bdbdbd;
}
table.list-item-bg thead th {
  height: 16px;
  font-size: 11px;
}
table.list-item-bg thead th > a:hover {
  border-bottom: 1px solid #bdbdbd;
  padding-bottom: 1px;
}
table.list-item-bg tbody tr {
  background-color: #fff;
}
table.list-item-bg tbody tr:first-child:hover {
  background-color: #E0E0E0;
  border-left: 4px solid #BDBDBD;
}
table.list-item-bg tbody td {
  line-height: 26px;
  font-size: 14px;
  color: #212121;
}
table.list-item-bg tbody td > a {
  padding: 2px 6px;
}
table.list-item-bg tbody td > a:hover {
  background-color: #fff;
}




a.btn-item-new {
  z-index: 10;
  position: fixed;
  right: 24px;
  width: 50px;
  height: 50px;
  line-height: 50px;
  text-align: center;
  border-radius: 50%;
  box-shadow: 0px 2px 10px rgba(0,0,0,.3),0px 0px 1px rgba(0,0,0,.1),inset 0px 1px 0px rgba(255,255,255,.25),inset 0px -1px 0px rgba(0,0,0,.15); /* prefixy */
  color: #fff;
  background-color: #4CAF50;
  font-size: 28px;
}
a.btn-item-new:hover {
  box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); /* prefixy */
}


a.btn-sort-slim:after {
  vertical-align: -1px;
  width: 10px;
  height: 10px;
  background-repeat: no-repeat;
  background-image: url(img/x10_grey400_arrow37down.png);
  margin-left: 3px;
  display: inline-block; /* dopyt, zos˙ladiù s ostatn˝mi */
  content: '';
  background-repeat: no-repeat;
}


input[type=text] {
  height: 16px;
  line-height: 16px;
  padding-left: 2px;
  border: 1px solid #39f;
  font-size: 13px;
}


div.btn-bar-bottom {
  overflow: auto;
  width: 162px;
  margin: 35px auto 25px auto;
  background-color:;
  
}

div.btn-bar-bottom button {
  padding: 8px 16px;
  text-transform: uppercase;
  font-size: 14px;
  float: left;
  margin-left: 15px;
  letter-spacing: 1px;
  border-radius: 3px;
  color:#42A5F5;
  background-color: #F5F5F5;
}
div.btn-bar-bottom button:hover {
  background-color: #eee;
}


</style>
<script type="text/javascript">
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

<?php if ( $copern != 8 ) { ?>
  function ObnovUI()
  {
  }
<?php                     } ?>

  function Povol_uloz() //dopyt, musÌ tu byù
  {
  }


  function NovaLekcia()
  {
   window.open('lesson.php?&copern=5011&druhzoznamu=<?php echo $druhzoznamu; ?>&drupoh=1&page=1', '_self');
  }
  function Hladaj()
  {
   var h_hladaj = document.forms.fnewico.h_hladaj.value;
   window.open('lessons.php?h_hladaj=' + h_hladaj + '&copern=9000&druhzoznamu=<?php echo $druhzoznamu; ?>&hladanie=1&drupoh=1&page=1', '_self');
  }
  function KonHladaj() //dopyt, Ëo je toto
  {
   var h_hladaj = document.forms.fnewico.h_hladaj.value;
   window.open('lessons.php?h_hladaj=&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&hladanie=0&drupoh=1&page=1', '_self');
  }

  function Spat()
  {
   window.open('lessons.php?copern=1&drupoh=1&page=1&presun=1','_self');
  }

  function Tlac1PDF()
  {
   window.open('najom_tlac.php?copern=1&page=1', '_blank', 'width=1080, height=900, top=0, left=10, status=yes, resizable=yes, scrollbars=yes');
  }

  function UpravZml(pid)
  {
   var pidx = pid;
   window.open('lesson.php?copern=1&cislo_pid=' + pidx, '_self');
  }
  function ZmazZml(pid)
  {
   var pidx = pid;
   window.open('lessons.php?sys=<?php echo $sys; ?>&copern=6&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&cislo_pid=' + pidx + '&tt=1', '_self');
  }
</script>
</head>
<body onload="ObnovUI();">
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
<!-- horna lista -->
<div class="top-bar">

<!--
 <dl class="toleft breadcrumb-nav">
 <dt class="toleft">
  <a href="#" onclick="();" title="Prejsù na" class="x16-icon-nav">English2App</a>
 </dt>
 <dd>/</dd>
 <dt class="toleft"><strong>Lessons</strong></dt>
</dl>
-->

<ul class="toleft breadcrumb-nav" style="width:100%;">
 <li class="toleft">
  <a href="#" onclick="();" title="Prejsù na" class="x16-icon-nav">English2App</a>
 </li>
 <li class="toleft" style="margin-top:9px;">/</li>
 <li class="toleft">
  <strong>Lessons</strong>
 </li>
 <li class="toright"><strong>Login User</strong></li>
 <li class="toright" style="background-color:#fff; width:1px; height:16px;
  margin-left:8px; margin-top:8px;">&nbsp;</li>
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
if ( $copern == 1 OR $copern == 5 OR $copern == 6 OR $copern == 7 OR $copern == 8 OR $copern == 9 )
     {
if ( $copern != 1 AND $copern != 5 AND $copern != 6 AND $copern != 7 AND $copern != 8 AND $copern != 9 ) break;
    do
    {
//zobraz vsetko co je v tabulke
if ( $copern == 1 OR $copern == 5 OR $copern == 6 OR $copern == 8 OR $copern == 7 )
  {
$tried = 1*$_REQUEST['tried'];

$sqlttt = "SELECT * FROM lessons ORDER BY pid";
if ( $tried == 1 ) { $sqlttt = "SELECT * FROM lessons ORDER BY pid"; }
if ( $tried == 2 ) { $sqlttt = "SELECT * FROM lessons ORDER BY pid"; }

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
 <li class="toright">
  <img src="../obr/ikony/printer_blue_icon.png" onclick="Tlac1PDF();"
   title="Zobraziù zoznam za <?php echo $kli_vume; ?> v PDF"
   style="width:20px; height:20px; margin-left:10px;">
 </li>
 <li class="toright">
<FORM name='fnewico' method='post' action='#' style="display:block; height:25px;">
 <div class="search-bar hidden" style="width: 300px; padding: 4px; background-color: #add8e6;">
  <input type="text" name="h_hladaj" id="h_hladaj" value='<?php echo $h_hladaj; ?>'
   style="width: 200px; height: 22px; line-height: 22px; border: 1px solid #39f; text-indent: 3px; font-size: 14px;"/>
  <a href="#" onclick="Hladaj();" style="margin-left:-4px; padding: 5px 10px; background-color: #39f;
  color: white; font-size: 13px; font-weight: bold;" >Hæadaù</a>
  <img src="../obr/ikony/reload_blue_icon.png" onclick="KonHladaj();" title="Obnoviù"
   style="width: 20px; height: 20px; cursor: pointer;">
 </div>
</FORM>
 </li>

</ul>
</div> <!-- .top-bar -->

<div class="content">
<?php
//zobraz zoznam
 if ( $copern == 1 )
 {
?>
<a href="#" onclick="NovaLekcia();" title="New lesson" class="btn-item-new"
   style="top:50px;">+</a> <!-- dopyt, nie je funkËnÈ -->

<a href="#" onclick="NovaLekcia();" title="New lesson" class="btn-item-new"
   style="bottom:24px;">+</a> <!-- dopyt, nie je funkËnÈ, daù podmienku aby zobrazilo, ak bude viac ako 20 poloûiek -->



<!-- zoznam lekcii -->
<table class="list-item-bg">
<thead>
<tr>
 <th width="9%">
  <a href='lessons.php?sys=<?php echo $sys; ?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&tried=0'
     title="" class="btn-sort-slim">#</a>
 </th>
 <th width="7%" class="left">Type</th>
 <th width="40%" class="left">
  <a href='lessons.php?sys=<?php echo $sys; ?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>&page=<?php echo $page;?>&tried=1'
   title="" class="btn-sort-slim">Name</a>
 </th>
 <th width="14%" class="left">
  <a href="" title="" class="btn-sort-slim">Category</a>
 </th>
 <th width="15%">Paid</th>
 <th width="15%"></th>
</tr>
</thead>
<?php
  while ( $i <= $cpol )
  {
  if (@$zaznam=mysql_data_seek($sql,$i))
{
$riadok=mysql_fetch_object($sql);
?>
<tbody>
<tr>
 <td class="center"><?php echo "$riadok->pid."; ?></td>
 <td><?php echo $riadok->type; ?></td>
 <td><?php echo $riadok->name; ?></td>
 <td><?php echo $riadok->ckat; ?></td>
 <td class="center"><?php echo $riadok->paid; ?></td>
 <td class="center">
  <a href="#" onclick="UpravZml(<?php echo "$riadok->pid";?>);" title="Edit"
     style="color:#42A5F5;">EDIT</a>
  <a href="#" onclick="ZmazZml(<?php echo $riadok->pid;?>);" title="Delete"
     style="color:#F44336;">DELETE</a>
 </td>
</tr>
<tr>
 <td colspan="6" style="height:7px; background-color:#eee;"></td>
</tr>
</tbody>
<?php
}
$i = $i + 1;
  }
?>
<tfoot>
<tr>
 <th colspan="6" style="height:10px;"></th>
</tr>
</tfoot>
</table>
<?php
 }
//koniec zoznam
    } while (false);
//koniec 1,5,6,7,8,9
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
<div class="wrap-list-item-bg">
<h3>Delete lesson?</h3>
<table class="list-item-bg">
<thead>
<tr>
 <th width="9%">#</th>
 <th width="7%" class="left">Type</th>
 <th width="40%" class="left">Name</th>
 <th width="14%" class="left">Category</th>
 <th width="15%">Paid</th>
 <th width="15%"></th>
</tr>
</thead>
<tbody>
<tr style="border-top:1px solid #F44336; border-bottom:1px solid #F44336;">
<?php while($zaznam=mysql_fetch_array($sql)): ?>
 <td class="center"><?php echo $zaznam["pid"]; ?></td>
 <td><?php echo $zaznam["type"]; ?></td>
 <td><?php echo $zaznam["name"]; ?></td>
 <td><?php echo $zaznam["ckat"]; ?></td>
 <td class="center"><?php echo $zaznam["paid"]; ?></td>
 <td></td>
<?php endwhile; ?>
</tr>
</tbody>
<tfoot>
<tr>
 <td colspan="6"></td>
</tr>
</tfoot>
</table>
 <div class="btn-bar-bottom">
<FORM name="formv2" method="post" action="lessons.php?sys=<?php echo $sys; ?>&page=<?php echo $page;?>&copern=16&druhzoznamu=<?php echo $druhzoznamu; ?>&cislo_pid=<?php echo $cislo_pid;?>&cislo_cis=<?php echo $cislo_cis;?>&cislo_cen=<?php echo $cislo_cen;?>">
  <button type="submit" id="zmaz" name="zmaz" title="Delete">Yes</button>
</FORM>
<FORM name="formv3" method="post" action="lessons.php?sys=<?php echo $sys; ?>&page=<?php echo $page;?>&copern=1&druhzoznamu=<?php echo $druhzoznamu; ?>">
  <button type="submit" id="stornom" name="stornom" title="No delete">No</button>
</FORM>
 </div>
</div> <!-- .wrap-list-item-bg -->
<?php
     }
//koniec vymazanie
?>
</div> <!-- .content -->
<?php
//toto je koniec casti na zobrazenie tabulky a prechody medzi stranami
     }
//celkovy koniec dokumentu
  } while (false);
?>
</body>
</html>