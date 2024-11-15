<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $dd=$_SESSION['x'];
 $dd1=$_SESSION['y'];
 
}
else{
	//echo "fdhfghfghfg";
	header("LOCATION:r1.php");
	}
?>

<?php
$val1="";
$name2="";
$user2="";
$pass2="";
$mobil2="";
$adress2="";
$adress3="";
$link="";
$z="";
$ddd=0;
$user6="";
$user7="";
$user8="";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <html dir="rtl">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <link href="kool23.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
  </head>
      <style type="text/css">
body {
	background-color: #FCF;
}
  </style>  
  <body>
 
		

        
  <div class="kool2">
  <div class="nav1"> </div>
    <div class="menu">
      <div class="user">
        <table width="200" border="1">
          <tr>
            <td height="46" align="center" valign="middle" bgcolor="#FFCCCC"><?php echo " سلام "   , $dd, " خوش آمدید "; ?></td>
          </tr>
  </table>
        
  </div>
      <div class="menu1">
        <p>&nbsp;</p>
        <ul>
          <li> <a href="r2-0.php">مشاهده کالا</a></li>
          <li> <a href="r2-2.php">جستجوی کالا</a></li>
          <li > <a href="r2-1.php">خرید جدید</a></li>
          <li><a href="r2-3.php">فاکتورهای خرید </a></li>
          <li><a href="r2-4.php">صورتحساب </a></li>
          <li><a href=""> تماس با واحد فروش</a></li>
          <li><a href="out.php">خروج</a></li>
        </ul> 
    </div>
 </div>
  <div class="main10">
    
    
   
  
    <form action="" method="post" id="form2">

<p>
  <?php
  $row4="";
	$link4="";
	$link3="";
	$tab4="";
	$val4="";
	$resalt4="";
	$rec4="";
	$p1="";
	$pp1="";
	$pp2="";
   $pp3=0;
	$pp4=0;
    $pp5=0;
	$pp6=0;
	   $recc2="";
	   $rec2="";
	   $recc=0;
	   $res12="";
	   $hh1="";
		$z1=array("bb1","bb2","bb3","bb4","bb5","bb6","bb7","bb8","bb9","bb10","bb11","bb12","bb13","bb14","bb15","bb16",
"bb17","bb18","bb19","bb20","bb21","bb22","bb23","bb24","bb25","bb26","bb27","bb28","bb29","bb30","bb31","bb32"
,"bb33","bb34","bb35","bb36","bb37","bb38","bb39","bb40","bb41","bb42"
,"bb43","bb44","bb45","bb46","bb47","bb48","bb49","bb50","bb51","bb52"
,"bb53","bb54","bb55","bb56","bb57","bb58","bb59","bb60","bb61","bb62");   
$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
$res12=mysqli_query($link2,"select * from faktor");
$rec2=mysqli_num_rows($res12);
//echo"fsdfgdsgfdsg";
?>
</p>
     <table width="481" height="32" border="1" align="center">
       <tr>
         <td colspan="4" align="center" bgcolor="#FFCCCC">مشاهده  کل  فاکتورها</td>
        </tr>
       <tr>
         <td width="117" align="center" bgcolor="#FF66CC">شماره فاکتور</td>
         <td width="105" align="center" bgcolor="#FF66CC">نام خریدار</td>
         <td width="112" align="center" bgcolor="#FF66CC">تاریخ خرید</td>
         <td width="204" align="center" bgcolor="#FF66CC">جمع کل</td>
         
       </tr>
        <?php
		$jam=0;
   for( $recc2=1  ; $recc2 <= $rec2 ; $recc2++){
	   $row2=mysqli_fetch_array($res12);
	   if($dd1==$row2[3]){
	   echo "<tr>";
	        echo "<td  align='center' bgcolor='yellow'> $row2[0]  </td>";
			echo "<td align='center'> $row2[2] </td>";
			echo "<td align='center'> $row2[1] </td>";
			echo "<td align='center' > $row2[4] </td>";
			echo "<td>";
		
			echo "<input name='$z1[$recc]' type='submit' value='مشاهده فاکتور'  />";
			
			
		   
			
			echo "</td>";
			$jam=$row2[4]+$jam;
			$recc++;
	   echo "</tr>";
	   }}
////////////////////////////////////////////////////////////////////
function n($hh1,$dd1){
  $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $GLOBALS['p1']=$row40[0];}
	$ddd++;
	}
	}
///////////**************************************************************////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($GLOBALS['p1']==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$GLOBALS['pp3'];  
	 }
   }
}	   
///////////////////////////////////////////////////////	   
	   if(isset($_POST['bb1'])){
		  $hh1=1;
 $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	

		  }
		if(isset($_POST['bb2'])){
		  $hh1=2;
		  $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 
	

		  
		//  header("LOCATION:r2-1-1.php");
		//  exit;
		  }
		  if(isset($_POST['bb3'])){
		 $hh1=3;
		 $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	}
		  }
          if(isset($_POST['bb4'])){
		  $hh1=4;
	   $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
		  }
		
		if(isset($_POST['bb5'])){
		  $hh1=5;
	    $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
		  }
		if(isset($_POST['bb6'])){
		  $hh1=6;
	      $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
		  }
		 if(isset($_POST['bb7'])){
			 $hh1=7;
		   $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
		  } 
		   if(isset($_POST['bb8'])){
		  $hh1=8;
		  $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 

		  } 
		   
		   if(isset($_POST['bb9'])){
		 $hh1=9;
		  $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 
		  } 
		   if(isset($_POST['bb10'])){
		  $hh1=10;
		  $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 
		  } 
		   if(isset($_POST['bb11'])){
		  $hh1=11;
	    
	 n($hh1,$dd1);
	

		  } 
		   if(isset($_POST['bb12'])){
		  $hh1=12;
	     n($hh1,$dd1);
	     
		  } 
		   if(isset($_POST['bb13'])){
		  $hh1=13;
	 n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb14'])){
		  $hh1=14;
         n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb15'])){
		  $hh1=15;
		  n($hh1,$dd1);
		   }
		    if(isset($_POST['bb16'])){
		  $hh1=16;
		   n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb17'])){
		  $hh1=17;
		   n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb18'])){
		  $hh1=18;
		  n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb19'])){
		   $hh1=19;
		   n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb20'])){
		 $hh1=20;
		  n($hh1,$dd1);
		  } 
		  
		  if(isset($_POST['bb21'])){
		  $hh1=21;
		  n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb22'])){
		  $hh1=22;
		  n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb23'])){
		  $hh1=23;
		  n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb24'])){
		  $hh1=24;
		  n($hh1,$dd1);
		  } 
		   if(isset($_POST['bb25'])){
		  $hh1=25;
		   n($hh1,$dd1); 
		  } 
		   if(isset($_POST['bb26'])){
		  $hh1=26;
	     $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]  ){ 
	
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 
		  } 
		   if(isset($_POST['bb27'])){
		  $hh1=27;
	      $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]  ){ 
	
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 
		  } 
		   if(isset($_POST['bb28'])){
		  $hh1=28;
	     $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]  ){ 
	
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}}
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($p1==$row4[0]  ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
	 
		  } 
		   if(isset($_POST['bb29'])){
		  $hh1=29;
	       $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
$link3= mysqli_connect("localhost","root","","saba");
mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($hh1==$row4[0] and $dd1 ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
		  } 
		   if(isset($_POST['bb30'])){
		  $hh1=30;
	       $link40="";
 $rcordnum40="";
 $rec40=0;
 $tab40="";
 $ddd=1;
	$link40= mysqli_connect("localhost","root","","saba");
mysqli_query($link40,"set character set utf8");
//$link3= mysqli_connect("localhost","root","","saba");
//mysqli_query($link3,"set character set utf8");
		   $tab40=mysqli_query($link40,"select * from faktor");
         $rcordnum40=mysqli_num_rows($tab40);
	//mysqli_query($link4,"select * from faktor");
	for($rec40=1 ; ($rec40<= $rcordnum40)  ; $rec40++){	
	$row40=mysqli_fetch_array($tab40);	
	if ($dd1==$row40[3]   ){ 
	if($ddd==$hh1){ $p1=$row40[0];}
	$ddd++;
	}
	}
	
	
	
	
	
	
/////////////////////////	
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
$link3= mysqli_connect("localhost","root","","saba");
mysqli_query($link3,"set character set utf8");
		   $tab4=mysqli_query($link4,"select * from kala1");
         $rcordnum4=mysqli_num_rows($tab4);
		 
	//mysqli_query($link4,"select * from faktor");
	for($rec4=1 ; ($rec4<= $rcordnum4)  ; $rec4++){	
	$row4=mysqli_fetch_array($tab4);
	if ($hh1==$row4[0] and $dd1 ){ 
	$pp1=$row4[0];
	$GLOBALS['pp2']=$row4[1];
	$GLOBALS['pp6']=$row4[3];
	  $pp4=$row4[7];
	  $pp5=$row4[8];
	//  $row4[10]=date();
	   $GLOBALS['pp3']= ($pp4 * $pp5)+$pp3;
	   
	   // mysqli_query($link3,"insert into faktor values('$pp1','$pp2','$dd','$pp3')");
	}
	
	 }
		  } 
		   if(isset($_POST['bb31'])){
		  $_SESSION['hh1']=31;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb32'])){
		  $_SESSION['hh1']=32;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb33'])){
		  $_SESSION['hh1']=33;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb34'])){
		  $_SESSION['hh1']=34;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb35'])){
		  $_SESSION['hh1']=35;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb36'])){
		  $_SESSION['hh1']=36;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb37'])){
		  $_SESSION['hh1']=37;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb38'])){
		  $_SESSION['hh1']=38;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		   if(isset($_POST['bb39'])){
		  $_SESSION['hh1']=39;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }  
		   if(isset($_POST['bb40'])){
		  $_SESSION['hh1']=40;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb41'])){
		  $_SESSION['hh1']=41;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb42'])){
		  $_SESSION['hh1']=42;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb43'])){
		  $_SESSION['hh1']=43;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb44'])){
		  $_SESSION['hh1']=44;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb45'])){
		  $_SESSION['hh1']=45;
	     header("LOCATION:r2-1-1.php");
		 exit;
		   }
	//  echo	"<input name='' type='text'  value='$ddd'/>";
   ?>
    <tr>
         <td></td>
         <td ></td>
         <td width="" align="center" bgcolor="#FF66CC">جمع کل فاکتورها</td>
         <td width="204" align="center" bgcolor="#FF66CC"><?php echo $jam ?></td>
         
       </tr>
 </table>
     </p>
     <table width="152" border="1" align="center">
  <tr>
    <td width="113">تعداد فاکتور ها</td>
    <td width="56"><input name="input" type="text" title=" "  value="<?php  echo $recc ?>"  size="3" readonly="readonly"/></td>
  </tr>
</table>
   </form>
    
  </div>
  <div class="main200">
        <div class="m100">
    <form action="form1" method="post" id="form2">

<p>
  <?php
	   $recc2="";
	   $rec2="";
$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
$res2=mysqli_query($link2,"select * from kala1");
$rec2=mysqli_num_rows($res2);
//echo"fsdfgdsgfdsg";
?>
</p>
     <table width="620" height="32" border="2" align="center">
     <tr>
         <td colspan="5" align="center" bgcolor="#FF66CC">مشاهده ریز فاکتور <?php echo $p1 ?></td>
         </tr>
       <tr>
       <td width="125" align="center" bgcolor="#FF66CC">شماره فاکتور</td>
         <td width="80" align="center" bgcolor="#FF66CC"><label for="textfield3"></label>
          <input name="textfield" type="text" id="textfield3" value="<?php echo $p1 ?>" size="15" readonly="readonly" /> </td>
          <td width="80" align="center" bgcolor="#FF66CC">نام خریدار</td>
         <td width="80" align="center" bgcolor="#FF66CC"><label for="textfield4"></label>
          <input name="textfield2" type="text" id="textfield4" value="<?php echo $dd  ?> " size="15" readonly="readonly" /></td>
         <td width="112" align="center" bgcolor="#FF66CC"><label for="textfield5" ></label>
          <input name="textfield3" type="text" id="textfield5" value="<?php echo $pp2?>" size="15" readonly="readonly"  /></td>
          
       </tr>
         <td width="125" align="center" bgcolor="#FF66CC">نام کالا</td>
         <td width="80" align="center" bgcolor="#FF66CC">برند</td>
         <td width="80" align="center" bgcolor="#FF66CC">مدل</td>
         <td width="80" align="center" bgcolor="#FF66CC">تعداد</td>
         <td width="112" align="center" bgcolor="#FF66CC"> مبلغ</td>
         
         <td width="110" align="center" bgcolor="#FF66CC"> جمع کل</td>
         
       </tr>
        <?php
		$e=0;
		$r=0;
		
   for( $recc2=1  ; $recc2 <= $rec2 ; $recc2++){
	   $row2=mysqli_fetch_array($res2);
	   if ($p1==$row2[0] and $pp6==$row2[3] ){
		   $r=($row2[8]*$row2[7]);
	   echo "<tr>";
	        echo "<td bgcolor='yellow'> $row2[4]  </td>";
			echo "<td align='center'> $row2[5] </td>";
			echo "<td align='center'> $row2[6] </td>";
			echo "<td align='center'> $row2[7] </td>";
			echo "<td align='center'> $row2[8] </td>";
			echo "<td align='center' >   $r </td>";
			$e++;
	   echo "</tr>";
	   }
	   }
	   
	   
   ?>
   
     <tr>
         <td></td>
         <td ></td>
         <td></td>
         <td ></td>
         <td width="" align="center" bgcolor="#FF66CC">جمع کل فاکتور</td>
         <td width="204" align="center" bgcolor="#FF66CC"><?php echo $pp3 ?></td>
         
       </tr>
 
         
           
  </table>
     </p>
     <table width="170" border="1" align="center">
  <tr>
    
   
    <td width="95">تعداد اقلام  فاکتور</td>
    <td width="50"><input name="input" type="text" title=" "  value="<?php  echo $e ?>"  size="6" readonly="readonly"/></td>
  </tr>
</table>
    </form>
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

.m ul{
	float:none;
	list-style:inside;
	}
	


  </style>
</html>
</div>
