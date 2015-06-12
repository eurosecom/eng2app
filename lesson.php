<!doctype html>
<html>
<head>
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
}
ul.ilogin-nav {
  margin-right: 1%;
}
ul.ilogin-nav > li {
  float: right;
  font-size: 12px;
}

div.wrap-content {
  width: 100%;
  overflow: auto;
  background-color: #eee;
  
}
div.wrap-content-col {
  width: 50%;
  overflow: auto;
  float: left;
}
div.col-slovak {
  background-color: ;

}
div.col-english {
  background-color: ;

}


div.content-col {
  width: 550px;
  overflow: auto;
  background-color: ;
  min-height: 300px;

}
table caption {
  text-align: left;
}
table td input[type=text] {
  width: 80px;
}
table td input[type=checkbox] {
  float: right;
}

tr.zero-line > td {
  height: 0;
}

</style>
</head>
<body>

<!-- horna lista -->
<div class="top-bar">
<dl class="toleft breadcrumb-nav">
 <dt class="toleft">
  <a href="#" onclick="();" title="Prejsť na" class="toleft">English2App</a>
 </dt>
 <dd></dd>
 <dt class="toleft">lesson 1</dt>
</dl>
<a href="#" onclick="();" title="Späť na zoznam" class="x24-icon-arrow58back"><</a>

<ul class="toright ilogin-nav">
 <li style="margin:9px 0 0 8px;">Login User</li>
</ul>

</div> <!-- .top-bar -->

<!-- telo stranky -->
<div class="wrap-content">
<div class="wrap-content-col col-english" >


<div class="content-col toright" style="border-right:2px solid #999; ">
<FORM>
<p> <!-- dopyt, alebo fieldset -->
 <label for="name">Name</label>
 <input type="text" name="name" id="name" value="<?php echo $name; ?>"/>
</p>
<p>
 <label for="type">Type</label>
 <select size="1" name="type" id="type" onkeydown="faktkedyEnter(event.which);">
  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>
  <option value="D">D</option>
 </select>
 <label for="ckat">Category</label>
 <select size="1" name="ckat" id="ckat" onkeydown="faktkedyEnter(event.which);">
  <option value="1">Cat 1</option>
  <option value="2">Cat 2</option>
  <option value="3">Cat 3</option>
  <option value="4">Cat 4</option>
 </select>
<br>
 <label for="paid">Paid</label>
 <select size="1" name="paid" id="paid" style="">
  <option value="0">free</option>
  <option value="1">paid 1</option>
  <option value="2">paid 2</option>
  <option value="3">paid 3</option>
 </select>
</p>
<fieldset>
<p>
 <label for="desx">Desc</label><br>
 <textarea name="desx" id="desx" style=""><?php echo $desx; ?></textarea>
</p>
<p>
 <label>Example</label><br>
 <label for="exm1">1</label>
 <textarea name="exm1" id="exm1" style=""><?php echo $exm1; ?></textarea>
 <label for="exm2">2</label>
 <textarea name="exm2" id="exm2" style=""><?php echo $exm2; ?></textarea>
 <label for="exm3">3</label>
 <textarea name="exm3" id="exm3" style=""><?php echo $exm3; ?></textarea>
 <label for="exm4">4</label>
 <textarea name="exm4" id="exm4" style=""><?php echo $exm4; ?></textarea>
</p>
</fieldset>
<fieldset>
<caption>Exercise</caption>
<p>
 <table>
 <caption>a.</caption>
 <tr class="zero-line">
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
 </tr>
 <tr>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 </table>
</p>
<p>
 <table>
 <caption>b.</caption>
 <tr class="zero-line">
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
 </tr>
 <tr>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 </table>
</p>
<p>
 <table>
 <caption>c.</caption>
 <tr class="zero-line">
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
 </tr>
 <tr>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 </table>
</p>
<p>
 <table>
 <caption>d.</caption>
 <tr class="zero-line">
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
  <td style="width:20%;"></td>
 </tr>
 <tr>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td><input type="text" name="" id="" value="" placeholder=""/></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 <tr>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
  <td>
   <input type="text" name="" id="" value="" placeholder=""/>
   <input type="checkbox" name="" value="1">
  </td>
  <td></td>
 </tr>
 </table>
</p>
</fieldset>
<p>
 <label for="important">Important</label>
 <textarea name="important" id="important"><?php echo $important; ?></textarea>
</p>

<button type="submit" title="Save form">Save</button>
<a href="#">NoSave</a>


</FORM>










</div>
</div>
<div class="wrap-content-col col-slovak">
<div class="content-col toleft" style="border-left:2px solid #999;">
slovak






</div>
</div>





</div> <!-- .wrap-content -->

 <div class="heading">



 </div>
































</body>
</html>







