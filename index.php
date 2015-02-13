<html>
<head><title>Разряды</title></head>

<body>
<FORM  method="POST">
 <INPUT NAME="num" VALUE ="<?php
if (is_writable('number.txt')) {
	echo file_get_contents('number.txt');
}else{echo "";}

 ?>" SIZE=20 MAXLEGNTH=20>
  <p><input type="submit" value="Отправить">
  
 </FORM>
 </body>

<?php
$str=$_POST['num'];

$a=preg_replace('/[^0-9]/','', $str);
$format=number_format($a,0,'',' ');
file_put_contents('number.txt', $format);


?>

</html>