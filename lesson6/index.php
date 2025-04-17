<?php

$my_filename = "ds.txt";
    $my_file = fopen($my_filename,"w");

    $size = filesize($my_filename);

   

// fclose($my_file); 

//  w- write only mode


// r - read only mode


// a - write only mode. Te dhenat ne files ruhen


// w+ , r+ , a+ 

// $file = fopen("ds.txt","r");

// while(!feof($file)){
//     echo fgets($file)."<br>";
// }
// fclose($file);

// $my_filev = fopen("ds.txt", "r");

// $my_text = "digital";

// fwrite($my_file, $my_text);

file_put_contents('ds.txt' , "add more text");

echo file_get_contents("ds.txt");
?>

