<?php
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

$exc1_sa1ok = $_REQUEST['exc1_sa1ok'];
$exc1_sb1ok = $_REQUEST['exc1_sb1ok'];

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

//uprava 18
if ( $copern == 18 )
  {
$cislo_pid = strip_tags($_REQUEST['cislo_pid']);
$copernx = 1*$_REQUEST['copernx'];

$uprtxt = "UPDATE lessons SET ".
" type='$type', ckat='$ckat', paid='$paid', name='$name', desx='$desx', important='$important' ".
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

if( $copernx == 1 ){

$uprtxt = "UPDATE lessons SET ".
" exm1='$exm1', exm2='$exm2', exm3='$exm3', exm4='$exm4' ".
" WHERE pid='$cislo_pid'";

//echo $uprtxt;
$upravene = mysql_query("$uprtxt");

                    }

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

$exc1_sa1ok = $riadok->exc1_sa1ok;
$exc1_sb1ok = $riadok->exc1_sb1ok;

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

  }
    }
//koniec nacitanie

$uloz="NO";
$zmaz="NO";
$uprav="NO";


?>
 <meta charset="cp1250">
 <link rel="stylesheet" href="../css/global.css">
 <title>Lesson | English2App</title>
<style>
div.top-bar {
  overflow: auto;
  width: 100%;
  height: 30px;
  background-color: lightblue;
}
dl.breadcrumb-nav > dd {
  font-size: 14px;
  float: left;
  margin-top: 8px;
}
dl.breadcrumb-nav > dd:before {
  content: '/';
}
dl.breadcrumb-nav > dt > a {
  display: block;
  height: 17px;
  line-height: 17px;
  font-size: 10px;
  text-transform: uppercase;
  padding: 7px 7px 6px 7px;
}
.x24-icon-arrow58back {
  position: absolute;
  left: 50%;
  margin-left: -12px;
  padding: 3px 5px;
  background-color: blue;
  display: none;
}
ul.ilogin-nav {
  margin-right: 1%;
}
ul.ilogin-nav > li {
  float: right;
  font-size: 12px;
}


div.content {
  width: 1200px;
  margin: 0 auto;
}
div.wrap-content-col {
  width: 50%;
  overflow: auto;
  float: left;
  padding-bottom: 10px;
  padding-top: 10px;
}
div.col-slovak {
  /* background-color: #2196F3; */

}
div.col-english {
  /* background-color: #F44336; */

}


div.content-col {
  width: 600px;
  background-color: ;
  min-height: 300px;
  background-color: #eee; /* dopyt, bude triede na fill a nofill cel�ho formu */
  border-radius: 4px;
  float: left;
  padding-top: 12px;
  padding-left: 15px;
  padding-bottom: 10px;
  box-sizing: border-box;
}
form input[type=text] {
  display: inline-block;
  height: 18px;
  text-indent: 4px;
  border: 0;
  border-radius: 2px;
  font-size: 14px;
}
textarea {
  border: 0;
  border-radius: 2px;
  font-size: 14px;
  height: 42px;
}

h1 {
  padding-bottom: 5px;
}
h1 > label {
  font-size: 16px;
  padding-right:12px;
}
h1 > input[type=text] {
  font-size: 16px;
  padding-top: 2px;
  width: 300px;
}
p {
  margin-top: 7px;
}

fieldset {
  margin: 15px 10px 0px 5px;
  background-color: ;
}

select {
  margin-right: 30px;
  font-size: 14px;
  padding: 1px 0;
}
fieldset label {
  font-size: 12px;
  padding-right: 7px;
}
p > label {
  display: block;

}

fieldset > legend {
  overflow: auto;
  line-height: 16px;
  width: 100%;
}
fieldset > legend > *:first-child {
  margin-right: 15px;
}

fieldset > legend > * {
  display: block;
  text-transform: uppercase;
  font-size: 12px;
}
fieldset > legend > a {
border-bottom:2px solid lightblue;
}
fieldset > legend > h4 {
  font-weight: bold;
}

div.section-nav > a {
  display: block;
  float: left;
  width: 20px;
}
a.active {
  font-weight: bold;

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

</script>
</head>
<body onload="ObnovUI();">

<!-- horna lista -->
<div class="top-bar">
<dl class="toleft breadcrumb-nav">
 <dt class="toleft">
  <a href="#" onclick="();" title="Prejs� na" class="toleft">English2App</a>
 </dt>
 <dd></dd>
 <dt class="toleft" style="font-size:14px;">lesson <?php echo $cislo_pid;?></dt>
</dl>
<a href="#" onclick="();" title="Sp� na zoznam" class="x24-icon-arrow58back">sp�</a>

<ul class="toright ilogin-nav">
 <li style="margin:9px 0 0 8px;">Login User</li>
</ul>

</div> <!-- .top-bar -->

<!-- telo stranky -->
<div class="wrap-content" style="width:100%;">
<div class="content">
<FORM name="formv1" method="post" action="lesson.php?copern=18&cislo_pid=<?php echo $cislo_pid;?>&copernx=<?php echo $copern;?>">
<div class="wrap-content-col col-english">
<div class="content-col">
<h1>
 <label for="name" style="">Name</label>
 <input type="text" name="name" id="name" />
</h1>

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
<p >
 <label for="desx" style="margin-bottom:3px;">Rule</label>
 <textarea name="desx" id="desx" style="width:500px;"><?php echo $desx; ?></textarea>
</p>
</fieldset>


<fieldset style="">
<legend>
<?php if ( $copern == 1 ) { ?>
 <h4 class="toleft" style="">Example</h4>
 <a href="#" onclick="window.open('../eng2app/lesson.php?copern=21&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
  class="toleft" style="">Exercise</a>
<?php                     } ?>
<?php if ( $copern == 2 OR $copern == 21 OR $copern == 22 OR $copern == 23 OR $copern == 24 ) { ?>
 <a href="#" onclick="window.open('../eng2app/lesson.php?copern=1&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
   class="toleft" style="">Example</a>
 <h4 class="toleft">Exercise</h4>
 <div class="section-nav toright">
<?php
$clas1="noactive"; $clas2="noactive"; $clas3="noactive"; $clas4="noactive";
if ( $copern == 21 OR $copern == 2 ) $clas1="active"; if ( $copern == 22 ) $clas2="active";
if ( $copern == 23 ) $clas3="active"; if ( $copern == 24 ) $clas4="active";
?>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=21&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="<?php echo $clas1; ?>">a.</a>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=22&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="<?php echo $clas2; ?>">b.</a>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=23&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="<?php echo $clas3; ?>">c.</a>
  <a href="#" onclick="window.open('../eng2app/lesson.php?copern=24&cislo_pid=<?php echo $cislo_pid; ?>', '_self');"
     class="<?php echo $clas4; ?>">d.</a>
 </div>
<?php                     } ?>
</legend>

<?php if ( $copern == 1 ) { ?>
<p>
 <label for="exm1" class="toleft" style="">1</label>
 <textarea name="exm1" id="exm1" style="width:470px;"><?php echo $exm1; ?></textarea>
</p>
<p>
 <label for="exm2" class="toleft">2</label>
 <textarea name="exm2" id="exm2" style="width:470px;"><?php echo $exm2; ?></textarea>
</p>
<p>
 <label for="exm3" class="toleft">3</label>
 <textarea name="exm3" id="exm3" style="width:470px;"><?php echo $exm3; ?></textarea>
</p>
<p>
 <label for="exm4" class="toleft">4</label>
 <textarea name="exm4" id="exm4" style="width:470px;"><?php echo $exm4; ?></textarea>
</p>
<?php                     } ?>



<?php if ( $copern == 2 OR $copern == 21 OR $copern == 22 OR $copern == 23 OR $copern == 24 ) { ?>
<p>
 <input type="text" name="exc1_ta1" id="exc1_ta1" value="<?php echo $exc1_ta1; ?>" placeholder="" style="width:200px;"/>
</p>
<p>
   <input type="text" name="exc1_sa1x" id="exc1_sa1x" value="<?php echo $exc1_sa1x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
   <input type="text" name="exc1_sa2x" id="exc1_sa2x" value="<?php echo $exc1_sa2x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
   <input type="text" name="exc1_sa3x" id="exc1_sa3x" value="<?php echo $exc1_sa3x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
   <input type="text" name="exc1_sa4x" id="exc1_sa4x" value="<?php echo $exc1_sa4x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
</p>
<p>
 <input type="text" name="exc1_ta2" id="exc1_ta2" value="<?php echo $exc1_ta2; ?>" placeholder="" style="width:200px;"/>
</p>
<p>
   <input type="text" name="exc1_sb1x" id="exc1_sb1x" value="<?php echo $exc1_sb1x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
   <input type="text" name="exc1_sb2x" id="exc1_sb2x" value="<?php echo $exc1_sb2x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
   <input type="text" name="exc1_sb3x" id="exc1_sb3x" value="<?php echo $exc1_sb3x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
   <input type="text" name="exc1_sb4x" id="exc1_sb4x" value="<?php echo $exc1_sb4x; ?>" placeholder="" style="width:120px;"/>
   <input type="checkbox" name="" value="1">
</p>
<p>
 <input type="text" name="exc1_ta3" id="exc1_ta3" value="<?php echo $exc1_ta3; ?>" placeholder="" style="width:200px;"/>
</p>

<?php                                                                         } ?>
</fieldset>

<fieldset>
<p>
 <label for="important" class="toleft" style="">Important</label>
 <textarea name="important" id="important" style="width:350px; height:28px;"><?php echo $important; ?></textarea>
</p>
</fieldset>

<div style="position:fixed; bottom: 10px; left:45%;">
<button type="submit" title="Save form">Save</button>
<a href="lessons.php?copern=1">NoSave</a>
</div>















</div> <!-- koniec .content-col -->
</div> <!-- koniec .wrap-content-col -->



<div class="wrap-content-col col-slovak">
<div class="content-col" style="">

</div>
</div>




</FORM>
</div> <!-- .content -->
</div> <!-- .wrap-content -->

































</body>
</html>







