<?php 
$a = -15;
$b = 105;
$c = 24;

//first task

if($a > $b){
    if($a > $c){
        echo "max - $a";
    }else{
        echo "max - $c";
    }
}elseif($b > $c) {
    echo "max - $b";
}else{
    echo "max - $c";
}

echo "<br>";
//second task

if($a == $b || $b == $c || $c == $a){
    echo "Error";
}else{
    if($a > $b && $b > $c){
        echo "middle - $b";
    }elseif($b > $c && $c > $a){
        echo "$c in the middle";
    }else{
        echo "$a - middle";
    }
}

echo "<br>";
//third task
$x = rand(-100, 100);
$y = rand(-100, 100);
echo "$x and $y <br>";

if($x == 0 || $y == 0){
    echo "Точка находится на оси Х или Y";
}else{
    if($x < 0){
        if($y > 0){
            echo "first quarter";
        }else{
            echo "fourth quarter"; 
        }
    }else{
        if($y > 0){
            echo "second quarter";
        }else{
            echo "third quarter"; 
        }
    }
}
?>