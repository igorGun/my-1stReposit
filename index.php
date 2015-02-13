<html>
<head><title>Разряды</title></head>

<body>
	<?php

 
  if (file_exists('number.txt')) {
  	
  
      if(isset($_POST['num'])){
	  $str=$_POST['num'];
      $a=preg_replace('/[^0-9]/','', $str);
      if ($str=='' || $a=='') {
    	  $format='';
     }else{
	       
     
         $format=number_format($a,0,'.',' ');
       }}else{$format=file_get_contents('number.txt');}}
       else{$format='';}
file_put_contents('number.txt', str_replace(' ','',$format));


?>
<FORM  method="POST" >
 <INPUT NAME="num"  VALUE ="<?php  
  //   if (is_readable('number.txt')) {
	    //echo file_get_contents('number.txt');
           echo  $format;
  //  }else{echo "";}

    ?>" SIZE=20 MAXLEGNTH=20>
  <p><input type="submit" value="Отправить"> 
 </FORM>
 </body>

</html>