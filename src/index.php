<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Write a PHP script to calculate and display average temperature, five lowest and highest temperatures</h3>
<?php

  $rt=array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

  $c=count($rt);
  $avg =0 ;
  foreach ($rt as $key => $value) 
  {
   $avg=$avg+$value;
  }

  $avg=$avg/$c;
  echo "Average of Tempratures : $avg";
  echo "<br>";
  sort($rt);
  echo "<br>";
  echo "List of 7 lowest Tempratures:";
  for ($l=0;$l<7;$l++){
    echo $rt[$l];
    echo "&nbsp;";
  }
  rsort($rt);
  echo"<br>";
  echo "List of 7 highest Tempratures:";
  for ($l=0;$l<7;$l++){
    echo $rt[$l];
    echo "&nbsp;";
  }
?>

<h3>Write a PHP program to filter out some elements with certain key-name.</h3>

<?php

  $dataArray =array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
  $keyArray=array('c2', 'c4');


  foreach ($keyArray as $key => $val1) {
    
    echo ("$val1 => $dataArray[$val1]");
    echo"<br>";

  }
?>

<h3>Write a PHP script to delete a specific value from an array using array_filter() function.</h3>
<?php
$a=array(0,1,2,3,4,5);


function filter_val(){
  $random_keys=rand(0,5);
return ($random_keys);
}
$a= array_filter($a , "filter_val");
print_r($a);
?>

<h3>Write a PHP script that inserts a new item in an array in any position</h3>
<?php 
  $arr =array(31,41,5,3,2,55,6,111);
  $random_position =rand(0 , (count($arr)-1));
  $insert_elment = 69;
  array_splice($arr , $random_position , 0 , $insert_elment);
  print_r($arr);
?>
</body>
</html>  