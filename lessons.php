<?php
error_reporting(0);
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

$sql = "SELECT exc4_ta1 FROM lessons";
$vysledok = mysql_query("$sql");
if ( !$vysledok )
{

$sql = "ALTER TABLE lessons ADD exm5 TEXT NOT NULL AFTER exm3";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exm4 TEXT NOT NULL AFTER exm3";
$vysledek = mysql_query("$sql");

//ex2
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

//ex1
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

//ex3
$sql = "ALTER TABLE lessons ADD exc3_sa1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sb1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc3_sa4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sa3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sa2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sa1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc3_sb4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sb3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sb2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_sb1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc3_ta3 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_ta2 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc3_ta1 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

//ex4
$sql = "ALTER TABLE lessons ADD exc4_sa1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sb1ok DECIMAL(10,0) DEFAULT 0 AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc4_sa4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sa3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sa2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sa1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc4_sb4x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sb3x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sb2x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_sb1x VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");

$sql = "ALTER TABLE lessons ADD exc4_ta3 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_ta2 VARCHAR(80) NOT NULL AFTER konx";
$vysledek = mysql_query("$sql");
$sql = "ALTER TABLE lessons ADD exc4_ta1 VARCHAR(80) NOT NULL AFTER konx";
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
 <link rel="stylesheet" href="css/layout_lesson.css">
<title>Lessons | English2App</title>
<style type="text/css">
div.search-bar {
  width: 230px;
  background-color: #fff;
  height: 32px;
  margin-right: 8px;
}
div.search-bar > input[type=search] {
  width: 120px;
  color: #000;
  height: 14px;
  padding: 4px 0 2px 3px;
  border: 0;
  border-bottom: 1px solid #1976d2;
  margin: 5px 0 0 15px;
}
div.search-bar > a {
  color: #757575;
  vertical-align: -1px;
  margin-left: 7px;
  display: inline-block;
}
div.search-bar > a:hover {
  text-decoration: underline;
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
   window.open('lessons.php?copern=5011&druhzoznamu=<?php echo $druhzoznamu; ?>&drupoh=1&page=1', '_self');
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

  function Tlac1PDF() //dopyt, budeme pouûÌvaù?
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
<ul class="toleft breadcrumb-nav">
 <li class="toleft">
  <a href="#" onclick="();" title="Go to" class="x16-icon-nav">English2App</a>
 </li>
 <li class="toleft" style="margin-top:9px;">/</li>
 <li class="toleft">
  <strong>Lessons</strong>
 </li>
 <li class="toright">
  <div class="toleft divider-ver">&nbsp;</div>
  <strong class="toleft">Login User</strong>
 </li>
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

<?php if ( $copern != 7 ) { ?>
  <a href="#" onclick="window.open('lessons.php?copern=7', '_self')"; class="toleft">
   <img src="img/x18_white_magnifier3.png"
    title="Search lessons" style="width:18px; height:18px;">
  </a>
<?php                     } ?>

<?php
//hladanie formular
if ( $copern == 7 OR $copern == 9 )
{
?>
<FORM name='fnewico' method='post' action="lessons.php?page=1&copern=9" class="toleft">
  <div class="search-bar">
   <input type="search" name="h_hladaj" id="h_hladaj" value='<?php echo $h_hladaj; ?>'/>
   <a href="#" onclick="Hladaj();" title="Find">Search</a>
   <a href="#" onclick="KonHladaj();" title="Obnoviù">X</a>
  </div>
</FORM> <!-- dopyt, rozbehaù ako v ckli.php = search, ktor˝ sa neschov· po vyhæadanÌ a po kliknutÌ na lupu nezmizne zoznam -->
<?php
}
?>
 </li>
</ul> <!-- .breadcrumb-nav -->
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