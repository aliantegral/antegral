  <?php
//مسئله اول
$color = array ("white" , "green" , "red" , "blue" , "black");
print_r ($color);

echo "<br>";
echo "<br>";
echo "<br>";

//مسئله دوم 
$color = array ("white" , "green" , "red" , "blue" , "black");
print_r ($color[0]);
echo "<br>";
echo "<br>";
print_r ($color[1]);
echo "<br>"; 
echo "<br>";
print_r ($color[2]);

echo "<br>";
echo "<br>";
echo "<br>";
    
//مسئله سوم
$capital = array ("NETHERLAN" => "AMESTERDAM" , "GREESES" => "ATHEN" , "GERMANY" => "BERLIN");

echo "<br>";
echo "<br>";
echo "<br>";

//مسئله چهارم
$number = array (1,2,3,4,5);
var_dump ($number);
echo "<br>";
unset ($number[3]);
var_dump ($number);

echo "<br>";
echo "<br>";
echo "<br>";

//مسئله پنجم
$cl = array (4 => "white" , 6 => "green" , 11 => "red");
print_r ($cl[4]);

echo "<br>";
echo "<br>";
echo "<br>";

//مسئله یازدهم
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
echo "Array ( [0] => Array)";
echo "<br>";
$array3 =(array_reverse($array1[0]));
print_r ($array3);
echo "<br>";
array_push ($array3,$array2[0 ]);
$array4 = (array_reverse($array3));
print_r ($array4);
echo "<br>";
echo "Array ( [1] => Array)";
echo "<br>";
 $array5 = array_reverse (($array1[1]));
 array_push ($array5,$array2[1]);
 print_r(array_reverse ($array5));
 
echo "<br>";
echo "<br>";  
echo "<br>";

//مسئله پانزدهم for  ($i=11; $i < 20; $i++);     
$number = array($i); 
print_r ($i); 

echo "<br>";
echo "<br>";
echo "<br>";

//مسئله پنجاه و نهم
 $e = array ("[20] =>" , "[21] =>" , "[22] =>" , "[23] =>" , "[24] =>" , "[25] =>");
 $u = array (2 , 3 , 4 , 5 , 6 ,7);
 echo $e[0] . $u[0];
 echo "<br>";
 echo $e[1] . $u[1];
 echo "<br>";
 echo $e[2] . $u[2];
 echo "<br>";
 echo $e[3] . $u[3];
 echo "<br>";                 
 echo $e[4] . $u[4];
 echo "<br>";
 echo $e[5] . $u[5];
 echo "<br>";
  
?>