<?php


$x=22;
$y=30;
$i;
for($i=$x; $i<=$y;$i++){
    echo "$i  ";
//    echo "<br>";
}

for($i=$y; $i>=$x;$i--){
    echo "<br>";
    echo "$i  ";

}

for($i=$x; $i<=$y;$i++){
    if($i%2==0){
        echo "<br>";
        echo "Even :$i ";
        echo "<br>";
    }
    else{
        echo "Odd :$i ";
        echo "<br>";
    }
}