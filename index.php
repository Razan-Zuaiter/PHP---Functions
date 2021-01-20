<?php
//Question no.1

function factorial($var){
 $fact=1;
   if ($var>0){
      for($i=$var; $i>1 ; $i--){
      $fact*=$i;
     
      }
      echo "The factorial is ".$fact;
 }
 else 
 echo "You can not find factorial for negative number";
}
factorial(5);
echo "<br>".str_repeat("*",30)."<br>";


//Question no.2

function prime($var){
  if ($var>0)
  {
  if(($var%2 ==0) || ($var%3 ==0) || ($var%5 ==0)  )
    echo "The number {$var} is not prime";
  else
    echo "The number {$var} is prime";
 }
 else 
 echo "You can not find prime for negative number";
}
 prime(20);
 echo "<br>".str_repeat("*",30)."<br>";


//Question no.3

function stringRx($var){
  echo $var;
 }
 stringRx("Razan Zuaiter");
 echo "<br>".str_repeat("*",30)."<br>";

 
//Question no.4
$alphabet = array("A","U","L","W","X","S","O","Q","C","P");

function Sorting($var){
 
   sort($var);
   echo "Array after sorting =>  ";
   for ( $i =0 ; $i< count($var); $i++){
    echo $var[$i]." ";
   }
 }

 Sorting($alphabet);
 echo "<br>".str_repeat("*",30)."<br>";

 
//Question no.5

$string2 ="maEam";
function checkLower($string2){

  if ($string2 == strtolower($string2))
  echo "yes it is all lower";
  else
  echo "No, There is a capital letters";

}
checkLower($string2);
echo "<br>".str_repeat("*",30)."<br>";

//Question no.6

$string3 ="madam";
function checkPalindrome($string3){
  if ($string3 == strrev($string3))
  echo "yes it is Palindrome";
  else
  echo "No, it is not Palindrome";

}
checkPalindrome($string2);
echo "<br>".str_repeat("*",30)."<br>";


//Question no.7

$arr = array(2,8,7,7,2,7,1,8,2);
$var =16;

function findThree($arr , $var){
  $ass_array=array_chunk($arr, 3);
  print_r(array_chunk($arr, 3));
  $sum=0;
 for($i=0; $i< 3 ; $i++ ){
  for($j=0; $j< 3 ; $j++ ){
    $sum +=$ass_array[$i][$j];
    if($sum == $var)
     echo "<br>"."<br>"." yes there is a match {$sum}";
 }
 $sum=0;

  }
}
findThree($arr , $var);
echo "<br>".str_repeat("*",30)."<br>";
?>
