<html>
<head><title>Разряды</title></head>

<body>
	<?php

 
  if (file_exists('number.txt')) 
  {
      if(isset($_POST['num']))
      {
	     $str=$_POST['num'];
	    
         $a=preg_replace('/[^0-9]/','', $str);
         if ($str=='' || $a=='') 
         {
    	    $format='';
         }else{ $format=$a;
           // $format=number_format($a,0,'.',' ');
         }
      }  else{
       	 $format=file_get_contents('number.txt');
       	 }
  }else
  {
  	$format='';
  }
file_put_contents('number.txt', $format);



?>
<FORM  method="POST" >
 <INPUT NAME="num"  VALUE ="<?php  
  if (is_numeric($format)) {
echo number_format($format,0,'.',' ');
}
       //   echo  $format;
  

    ?>" SIZE=20 MAXLEGNTH=20>
  <p><input type="submit" value="Отправить"> 
 </FORM>
 </body>

</html>