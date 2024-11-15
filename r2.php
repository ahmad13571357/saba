<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $dd=$_SESSION['x'];
 $dd1=$_SESSION['y'];
 $dd2=$_SESSION['z'];
}
else{
	//echo "fdhfghfghfg";
	header("LOCATION:r1.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="kool2.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>

<body>
<div class="kool2">
<div class="nav1"></div>
  <div class="menu">
    <div class="user"><table width="200" border="1">
  <tr>
    <td height="46" align="center" valign="middle" bgcolor="#FFCCCC"><?php echo " سلام "   , $dd, " خوش آمدید "; ?></td>
  </tr>
</table>
</div>
    <div class="menu1">
  <p>&nbsp;</p>
  <ul>
        <li> <a href="r2-1-1.php">مشاهده کالا</a></li>
        <li> <a href="r2-2.php">مدیریت کالا</a></li>
        <li > <a href="r2-1.php">خرید جدید</a></li>
		<li><a href="r2-3.php">فاکتورهای خرید </a></li>
        <li><a href="r2-4.php">صورتحساب </a></li>
        <li><a href=""> تماس با واحد فروش</a></li>
		<li><a href="out.php">خروج</a></li>
   </ul> 
</div>
</div>
  <div class="main">
    <div class="a7"> </div>
  <div class="a1"><table width="174" height="186" border="1">
  <tr>
    <td height="127" colspan="2" align="center"><img src="113.jpg" width="163" height="121" border="1" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center">موس بی سیم لاجیتک</td>
    </tr>
  <tr>
    <td width="61">120000ت</td>
    <td width="90"><form id="form3" name="form3" method="post" action="">
      <label for="t3">تعداد</label>
      <input type="text" name="t3" id="t3" size="3" />
    </form></td>
  </tr>
</table>
</div> 
    <div class="a2">
      <table width="154" height="171" border="1" dir="ltr">
        <tr>
          <td height="100" colspan="2" align="center"><img src="11.jpg" alt="" width="154" height="115" border="1" align="texttop" /></td>
        </tr>
        <tr>
          <td height="20" colspan="2" align="center">موس بی سیم اج پی</td>
        </tr>
        <tr>
          <td width="71" height="38" align="center"><form id="form1" name="form1" method="post" action="">
            <label for="t2">تعداد</label>
            <input name="t1" type="text" id="t2" size="3" />
          </form></td>
          <td width="67">108000ت</td>
        </tr>
      </table>
    </div>
    <div class="a3">
      <table width="180" height="190" border="1">
        <tr>
          <td height="131" colspan="2"><img src="114.jpg" width="170" height="129" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2" align="center">موس ایکس پی</td>
        </tr>
        <tr>
          <td width="91" height="26">35000ت</td>
          <td width="73"><form id="form4" name="form4" method="post" action="">
            <label for="t4">تعداد</label>
            
            <input type="text" name="t4" id="t4" size="3" />
          </form></td>
        </tr>
      </table>
    </div>
    <div class="a4">
      <table width="151" height="193" border="1">
        <tr>
          <td height="123" colspan="2" align="center"><img src="112.jpg" width="142" height="124" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2" align="center">موس ایکس پی</td>
        </tr>
        <tr>
          <td width="51">95000ت</td>
          <td width="75"><form id="form2" name="form2" method="post" action="">
            <label for="t2">تعداد</label>
            
            <input name="t2" type="text" id="t2" size="3" />
          </form></td>
        </tr>
      </table>
    </div>
    <div class="a5">
      <table width="169" height="191" border="1" dir="rtl">
        <tr>
          <td height="135" colspan="2"><img src="115.jpg" width="159" height="125" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center">موس ای نت</td>
        </tr>
        <tr>
          <td>55000ت</td>
          <td><form id="form5" name="form5" method="post" action="">
            <label for="t5">تعداد</label>
            <input type="text" name="t5" id="t5" size="3" />
          </form></td>
        </tr>
      </table>
    </div>
    <div class="a6">
      <table width="173" height="191" border="1">
        <tr>
          <td height="135" colspan="2" align="center"><img src="116.jpg" width="159" height="129" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2" align="center">موس گیم ایکس پی</td>
        </tr>
        <tr>
          <td width="73" height="23">455000 ت</td>
          <td width="84"><form id="form6" name="form6" method="post" action="">
            <label for="t6">تعداد</label>
            <input type="text" name="t6" id="t6" size="3"/>
          </form></td>
        </tr>
      </table>
    </div>
    <div class="a7"><table width="161" height="174" border="1">
  <tr>
    <td height="118" colspan="2"><img src="117.jpg" width="160" height="113" /></td>
    </tr>
  <tr>
    <td height="23" colspan="2">&nbsp;</td>
    </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</div>
    <div class="a8">
      <table width="167" height="176" border="1">
        <tr>
          <td height="118" colspan="2"><img src="119.jpg" width="155" height="115" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a9">
      <table width="176" height="177" border="1">
        <tr>
          <td height="118" colspan="2"><img src="120.jpg" width="175" height="111" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="24">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a10">
      <table width="169" height="171" border="1">
        <tr>
          <td height="112" colspan="2"><img src="121.jpg" width="158" height="107" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="23">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a11">
      <table width="170" height="172" border="1">
        <tr>
          <td height="112" colspan="2"><img src="122.jpg" width="160" height="105" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="29">&nbsp;</td>
          <td width="107">&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a12">
      <table width="171" height="174" border="1">
        <tr>
          <td height="113" colspan="2"><img src="123.jpg" width="162" height="108" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a13">
      <table width="168" height="172" border="1">
        <tr>
          <td height="116" colspan="2"><img src="124.jpg" width="186" height="98" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a14">
      <table width="169" height="170" border="1">
        <tr>
          <td height="116" colspan="2"><img src="125.jpg" width="203" height="89" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a15">
      <table width="170" height="173" border="1">
        <tr>
          <td height="112" colspan="2"><img src="127.jpg" width="205" height="108" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a16">
      <table width="165" height="171" border="1">
        <tr>
          <td height="115" colspan="2"><img src="126.jpg" width="211" height="105" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="82">&nbsp;</td>
          <td width="136">&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a17">
      <table width="166" height="170" border="1">
        <tr>
          <td height="111" colspan="2"><img src="128.jpg" width="207" height="99" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="23">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a18">
      <table width="168" height="165" border="1">
        <tr>
          <td height="109" colspan="2"><img src="129.jpg" width="205" height="100" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a19">
      <table width="207" height="169" border="1">
        <tr>
          <td height="109" colspan="2"><img src="130.jpg" width="210" height="78" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a20">
      <table width="208" height="169" border="1">
        <tr>
          <td height="111" colspan="2"><img src="133.jpg" width="214" height="94" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a21">
      <table width="176" height="161" border="1">
        <tr>
          <td height="103" colspan="2"><img src="131.png" width="207" height="87" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a22">
      <table width="174" height="157" border="1">
        <tr>
          <td height="101" colspan="2"><img src="128.jpg" width="187" height="102" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a23">
      <table width="202" border="1">
        <tr>
          <td height="107" colspan="2"><img src="135.jpg" width="195" height="122" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="90">&nbsp;</td>
          <td width="96">&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a24">
      <table width="169" height="163" border="1">
        <tr>
          <td height="105" colspan="2"><img src="136.jpg" width="183" height="123" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a25">
      <table width="172" height="167" border="1">
        <tr>
          <td colspan="2"><img src="137.jpg" width="162" height="122" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td height="23">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a26">
      <table width="148" height="175" border="1">
        <tr>
          <td height="113" colspan="2"><img src="138.jpg" width="155" height="113" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="70">&nbsp;</td>
          <td width="72">&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a27">
      <table width="168" height="173" border="1">
        <tr>
          <td height="110" colspan="2"><img src="134.jpg" width="174" height="124" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a28">
      <table width="166" height="171" border="1">
        <tr>
          <td height="112" colspan="2"><img src="139.jpg" width="156" height="123" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a29">
       <table width="170" height="184" border="1">
         <tr>
           <td height="130" colspan="2"><img src="140.jpg" width="162" height="149" border="1" /></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
       </table>
     </div>
    <div class="a30">
      <table width="176" height="211" border="1">
        <tr>
          <td height="149" colspan="2"><img src="141.jpg" width="160" height="146" border="1" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a31">
      <table width="170" height="210" border="1">
        <tr>
          <td height="148" colspan="2"><img src="142.jpg" width="162" height="143" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a32">
      <table width="165" height="210" border="1">
        <tr>
          <td height="128" colspan="2"><img src="143.jpg" width="155" height="144" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a33">
      <table width="155" border="1">
        <tr>
          <td height="127" colspan="2"><img src="144.jpg" width="174" height="150" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a34">
      <table width="152" border="1">
        <tr>
          <td height="125" colspan="2"><img src="145.jpg" width="168" height="154" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    
    
     <div class="a35">
       <table width="176" height="220" border="1">
         <tr>
           <td height="158" colspan="2"><img src="146.jpg" width="167" height="155" border="1" /></td>
         </tr>
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td width="73">&nbsp;</td>
           <td width="87">&nbsp;</td>
         </tr>
       </table>
     </div>
    <div class="a36">
      <table width="175" height="217" border="1">
        <tr>
          <td height="159" colspan="2"><img src="147.jpg" width="176" height="153" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a37">
      <table width="176" height="216" border="1">
        <tr>
          <td height="159" colspan="2"><img src="148.jpg" width="173" height="153" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="78">&nbsp;</td>
          <td width="82">&nbsp;</td>
        </tr>
      </table>
    </div>
     <div class="a38">
       <table width="176" height="215" border="1">
         <tr>
           <td height="158" colspan="2"><img src="149.jpg" width="177" height="151" border="1" /></td>
         </tr>
         <tr>
           <td colspan="2">&nbsp;</td>
         </tr>
         <tr>
           <td width="78">&nbsp;</td>
           <td width="82">&nbsp;</td>
         </tr>
       </table>
     </div>
    <div class="a39">
      <table width="174" border="1">
        <tr>
          <td height="149" colspan="2"><img src="150.jpg" width="175" height="145" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a40">
      <table width="179" border="1">
        <tr>
          <td height="144" colspan="2"><img src="151.jpg" width="161" height="138" border="1" /></td>
        </tr>
        <tr>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div>
    <div class="a41">
      <table width="169" height="218" border="1" align="center">
        <tr>
          <td height="146" colspan="3"><img src="350.jpg" width="160" height="160" /></td>
        </tr>
        <tr>
          <td width="60" height="23">&nbsp;</td>
          <td width="52">&nbsp;</td>
          <td height="23">&nbsp;</td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
          <td width="10"><form id="form7" name="form7" method="post" action="">
            <label for="textfield"></label>
            <input type="text" name="textfield" id="textfield"  size="3" value="0"/>
          </form></td>
        </tr>
      </table>
    </div>
    <div class="a42">
     <table width="169" height="218" border="1" align="center">
        <tr>
          <td height="146" colspan="2"><img src="033.jpg" width="160" height="160" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="66" height="23">&nbsp;</td>
          <td width="100">&nbsp;</td>
        </tr>
    </table>
    </div>
   
    <div class="a43">
    <table width="169" height="218" border="1" align="center">
        <tr>
          <td height="146" colspan="2"><img src="031.jpg" width="160" height="160" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="66" height="23">&nbsp;</td>
          <td width="100">&nbsp;</td>
        </tr>
    </table>
    </div>
    <div class="a44">
    <table width="169" height="218" border="1" align="center">
        <tr>
          <td height="146" colspan="2"><img src="33.jpg" width="160" height="160" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="66" height="23">&nbsp;</td>
          <td width="100">&nbsp;</td>
        </tr>
    </table>
    
    </div>
    <div class="a45">
    <table width="169" height="218" border="1" align="center">
        <tr>
          <td height="146" colspan="2"><img src="03.jpg" width="160" height="160" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="66" height="23">&nbsp;</td>
          <td width="100">&nbsp;</td>
        </tr>
    </table>
    </div>
    <div class="a46"> 
    <table width="169" height="218" border="1" align="center">
        <tr>
          <td height="146" colspan="2"><img src="21.jpg" width="160" height="160" /></td>
        </tr>
        <tr>
          <td height="23" colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td width="66" height="23">&nbsp;</td>
          <td width="100">&nbsp;</td>
        </tr>
    </table>
    </div>
  </div>
</div>
</body>
<style>

	.menu1 ul{
	padding: 0px 0px;
	position: relative;
	list-style: none;
	z-index: 99;
	text-align: center;
		}
	
	.menu1 ul li:hover > ul {
		
	display: block;
		
}
	.menu1 ul li {
	float:none;
	position: relative;
	background-color: #FC6;
	border: 1px ridge #003;
}
	
	.menu1 ul li:hover > a {
	color: #fff;
	font-size: 17px;
	background-color: #096;
	text-align: center;
}
	
	.menu1 ul li a {
	display: block;
	width:150px;
	border:#00CC99;
	color: #4e4e4e;
	font-size:17px;
	text-decoration:none;
	float: none;
	padding-top: 15px;
	padding-right: 23px;
	padding-bottom: 15px;
	padding-left: 25px;
}
	

</style>
</html>