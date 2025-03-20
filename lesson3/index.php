<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $day = "e enjte";
    switch(day){
        case "e hene":
            echo "sot eshte dita e hene";
            break;
        case "e marte":
            echo "sot eshte dita e marte";
            break;
        case "e merkur":
            echo "sot eshte dita e merkur";
            break;
        case "e enjte":
            echo "sot eshte dita e enjte";
            break;
        case "e premte":
            echo "sot eshte dita e premte";
             break;
        case "e shtun":
            echo "sot eshte dita e shtun";
            break;
        case "e dielle":
            echo "sot eshte dita e dielle";
            break;
    }

    $whilevar = 1;
    while($whilevar <= 5){
        echo "<br> numri is $whilevar <br>";
        $whilevar++;
    }

    $dowhile =1;
    do{
        echo"<br> numri is $dowhile <br>";
        $dowhile++;
    }while($whilevar <= 5);
    for($forvar = 0;$forvar<= 10; $forvar++){
        echo"<br> numri is $forvar <br>";
    }
    ?>
    <?php 
    $cars = array("volvo","bmw","tesla");
    foreach($cars as $value){
        echo "$value <br>";
    }
    ?>
    <?php 
    $age3 = array("john" => "30", "mary"=> "25", "david"=> "10");
    foreach ($age3 as $x1 => $val){
        echo "name: $x1, age: $val <br>";
    }

</body>
</html>