<?php 
    // phpinfo();

   
    
    // $x = 5;
    // echo gettype($x) . "<br>";
    // double 10.5

    $x = 10.5;
    echo gettype($x) . "<br>";
    // string

    $x = "hello";
    echo gettype($x) . "<br>";
?>
<?php
//     function displayPhpVersion(){
//         echo "this is PHP" .phpversion();
//         echo "\n";
//     }

//     displayPhpVersion();
 ?>

 <?php

    //   function hello(){
    //     echo "hello world";
    //   }

    //   hello();
 ?>
 <?php 
// function sum(){
//     $value = 120+20;
//     echo $value;
// }
// sum();
 ?>

 <?php
    //   function maximum($x, $y){
    //     if ($x > $y){
    //         return $x;
    //     }
    //     else{
    //         return $y;
    //     }
    //   }

    //   $a = 20;
    //   $b = 30;
    
    //   $test = "the max of $a and $b is $test";
?>
<!-- 
<?php 
    function divisible($n){
        if(($n % 2) == 0){
            return"$n eshte e plotpjestueshme me 2";
        }
        else{
            return"$n nuk eshte e plotpjestueshme me 2";
        }
    }

    print_r(divisible(4). "<br>");
    print_r(divisible(35). "<br>");
    print_r(divisible(16). "<br>");
    print_r(divisible(3). "<br>");
?>
<?php
    // function draw(){
    //      $y = 10;
    //      echo $x;
    //      echo $y;
    //   }
    //   draw();
?>  
<?php
    // $x=5;
    // function draw(){
    //      $y = 10;
    //      echo $y;
    //   }
    //   echo "\n, $x";
    //   draw();
?>  
<?php 
    // $x = 5;
    // $y = 11;

    // function sum(){
    //     global $x,$y;
    //     $y = $x + $y;
    // }
    // sum();
    // echo $y;
?>
<?php 
    // function counter(){
    //     static $count = 0;
    //     $count++;
    //     echo "vlera e count is : $count <br>";
    // }
    // counter();
    // counter();
 
?>
<?php
    // $sports = array('real madrid','benfico','besiktas');

    $sport = ['real madrid','benfico','besiktas'];

    $len=count($sports);
    for($i=0; $i<=$len; $i++){
        echo $sports[$i],"\n";
    }
?>
 -->
 <!-- <?php 
    // $sports = array('real madrid','barcelona','benfica');
    // array_shift($sports);
    // var_dump($sports);
 ?> -->
 <?php
//     $sports = ['real madrid','benfica','chelsea','besiktas'];

//     $output = array_slice($sports, 2);
//     $output = array_slice($sports, 3);
//     $output = array_slice($sports, -2,1);

// var_dump($output, $output1, $output2);
 ?>
 <?php 
    $sports = [12,24,36,48];

    var_dump(array_sum($sports));
 ?>
 25 30 25 26 20 28 25
 <?php
 $sports = [25, 30, 25, 26, 20, 28, 25];
 $average_temp = array_sum($temp)/7;

 echo($average_temp)
 ?>