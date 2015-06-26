<html>
<head>
<title><? echo $title; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=cp-1251">
<script language="JavaScript">
<!--

function newImage(arg) {
if (document.images) {
rslt = new Image();
rslt.src = arg;
return rslt;
}
}

function changeImages() {
if (document.images && (preloadFlag == true)) {
for (var i=0; i<changeImages.arguments.length; i+=2) {
document[changeImages.arguments[i]].src = changeImages.arguments[i+1];
}
}
}

var preloadFlag = false;
function preloadImages() {
if (document.images) {
_13 = newImage("images/13.gif");
_14 = newImage("images/14.gif");
_15 = newImage("images/15.gif");
_16 = newImage("images/16.gif");
preloadFlag = true;
}
}

// -->
</script>
</head>
<body bgcolor=#FFF3E6 onLoad="preloadImages();" topmargin=0 rightmargin=0 leftmargin=0 marginheight=0 marginwidth=0>
<table border=0 cellpadding=0 cellspacing=0 width=100%>
<tr>
<td width=153 height=174>
<img src="images/01.gif" width=153 height=174></td>
<td width=153 height=174>
<img src="images/02.gif" width=153 height=174></td>
<td width=153 height=174>
<img src="images/03.gif" width=153 height=174></td>
<td width=153 height=174>
<img src="images/04.gif" width=153 height=174></td>
<td width=136 height=174>
<img src="images/05.gif" width=136 height=174></td>
<td width=100% height=212 rowspan=3 background="images/06.gif">&nbsp;
</td>
</tr>
<tr>
<td width=153 height=32>
<a href="index1.php"
   onmouseover="changeImages('_07', 'images/13.gif'); return true;"
   onmouseout="changeImages('_07', 'images/07.gif'); return true;">
<img name="_07" src="images/07.gif" width=153 height=32 border=0 title="������ 1"></a></td>
<td width=153 height=32>
<a href="index2.php"
   onmouseover="changeImages('_08', 'images/14.gif'); return true;"
   onmouseout="changeImages('_08', 'images/08.gif'); return true;">
<img name="_08" src="images/08.gif" width=153 height=32 border=0 title="������ 2"></a></td>
<td width=153 height=32>
<a href="index3.php"
   onmouseover="changeImages('_09', 'images/15.gif'); return true;"
   onmouseout="changeImages('_09', 'images/09.gif'); return true;">
<img name="_09" src="images/09.gif" width=153 height=32 border=0 title="������ 3"></a></td>
<td width=153 height=32>
<a href="index4.php"
   onmouseover="changeImages('_10', 'images/16.gif'); return true;"
   onmouseout="changeImages('_10', 'images/10.gif'); return true;">
<img name="_10" src="images/10.gif" width=153 height=32 border=0 title="������ 4"></a></td>
<td width=136 height=32>
<img src="images/11.gif" width=136 height=32></td>
</tr>
<tr>
<td width=748 height=6 colspan=5>
<img src="images/12.gif" width=748 height=6></td>
</tr>
</table>
<br>
<table border=0 cellpadding=5 cellspacing=0 width=100%>
 <tr>
  <td>
<font face=sans-serif,arial,helvetica size=2 color=#000000>
<h1><? echo $zagolovok;?></h1>
<? echo $body; ?>
    <?echo $name[0];?>
    <?echo $name[1];?>
    <?echo $name[2];?>
</font>
  </td>
 </tr>
</table>
</body>
</html>