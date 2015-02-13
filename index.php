<html>
<head><title>Разряды</title></head>

<body>
	<?php

$str=$_POST['num'];
$a=preg_replace('/[^0-9]/','', $str);
  if ($a=="") {
	       if (file_get_contents('number.txt')!=0) {
		   $format=file_get_contents('number.txt');
	       }else{
    $format="";
   }}else{
  $format=number_format($a,0,'.',' ');}

file_put_contents('number.txt', $format);


?>
<FORM  method="POST" >
 <INPUT NAME="num" VALUE ="<?php  
  //   if (is_readable('number.txt')) {
	    echo file_get_contents('number.txt');
  //  }else{echo "";}

    ?>" SIZE=20 MAXLEGNTH=20>
  <p><input type="submit" value="Отправить"> 
 </FORM>
 </body>

</html>