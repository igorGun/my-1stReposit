<html>
<head><title>Разряды</title></head>

<body>
	<?php
 if(isset($_POST['num']))

  {
       
	     $str=$_POST['num'];
	    
         $format=preg_replace('/[^0-9]/','', $str);
         
         	file_put_contents('number.txt', $format);
        
         
        
       	 
  }else{
         if (file_exists('number.txt')) {
  	         $format=file_get_contents('number.txt');
         }else{
  	         $format='';
         }
 } 

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