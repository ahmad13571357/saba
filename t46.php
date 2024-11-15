<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
$row2="";
	$res2="";
	$tabl="";
	$rec=1;
	$d1=0;
     $d2="";
	 $x1=0;
	 $y1=0;
	 $s=array("k1","k2","k3","k4","k5","k6");
	 $z="";
	 $rcordnum=count($s);
for($rec=0 ; ($rec< $rcordnum)  ; $rec++){
	$z=
	//$z=$s[$rec];
		$d1=1;
		$d2++;
		$x1=  250;
		$y1= $y1 + 100 ;
		//if($rec==$rec){ $z="$k[$rec]";}
        
	echo "<article class=$s[$rec]>";
//	echo "<ul>";
   echo   "<table width='196' height='202' border='1'>";
    echo    " <tr>";
     echo      "<td height='136' colspan='3'><img src='033.jpg' width='160' height='160' /></td>";
      echo   "</tr>";
       echo  "<tr>";
       echo    "<td width='66' height='23'>&nbsp;</td>";
   echo "<td width='55' height='23'>&nbsp;</td>";
 echo   "<td width='53' height='23'>&nbsp;</td>";
   echo      "</tr>";
   
    echo     "<tr>";
    echo     "<td height='23' colspan='2'>&nbsp;</td>";
   echo "<td height='23'>&nbsp;</td>";
     echo    "</tr>";
  echo  " </table>";
// echo    "</ul>";
echo "</article> ";
 echo("\$s[$rec] = $s[$rec]<br/>\n");
}
?>
<body>
<style>
.k1	{
			
	background-color:#CC6;
	height: 220px;
	width: 170px;
	position:absolute;
	top:50px;
	right:100px;
	
	
	
}
	.k2	{
			
	background-color:#CC6;
	height: 220px;
	width: 170px;
	position:absolute;
	top:50px;
	right:300px;
	
	
	
}
	.k3	{
			
	background-color:#CC6;
	height: 220px;
	width: 170px;
	position:absolute;
	top:50px;
	right:500px;
	
	
	
}
.k4	{
			
	background-color:#CC6;
	height: 220px;
	width: 170px;
	position:absolute;
	top:50px;
	right:700px;
	
}
.k5	{
			
	background-color:#CC6;
	height: 220px;
	width: 170px;
	position:absolute;
	top:50px;
	right:900px;
	
}
.k6	{
			
	background-color:#CC6;
	height: 220px;
	width: 170px;
	position:absolute;
	top:300px;
	right:100px;
	
}
</style>
</body>

</html>