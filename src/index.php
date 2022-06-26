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

<?php
    //first task

    $arr = [5, -6, 2, -15, 0, 8, 16, 25, -69];
    $positive = [];
    foreach($arr as $el){
        if($el > 0){
            $positive[] = $el;
        }
    }
    var_dump($positive);

    //second task
    echo "<br>";

    $arr2 = [5, 9, -1, 8, 1, 11];
    $avrg = round(array_sum($arr2) / count($arr2));
    var_dump($avrg);
    echo "<br>";
    foreach($arr2 as $el){
        if($el > $avrg){
            echo "$el,  ";
        }
    }
    echo "<br>";

    //task 3
        $att = [5, 9, -1, 8, 1, 11];
        $i = 0;
        foreach($att as $el){
            $i++;
            if($el > $att[$i]){
                echo "$el,  ";
            }
        }
    

    echo "</br>";
    //task 4
    $arr3 = [6, 9, 8, 9, 7, 99, 11];
    $nums = array_count_values($arr3);
    $i = 0;
        foreach($nums as $elem){
            if($elem > 1){
                $i++;
                echo " repeated ";
                break;
            }
        }
        if($i <= 0){
            echo " not repeated ";
        }
    echo "</br>";
    //task 5
    echo "</br>";

    $arr5 = [5, 6, 8, 8, 6, 8, 7, 9, 11];
    echo "with duplicate</br>";
    var_dump($arr5);
    echo "</br>";
    $countDuplicate = array_count_values($arr5);
    foreach($countDuplicate as $key => $dup){
        if($dup > 2){
            foreach($arr5 as $arrKey => $ar){
                if($key == $ar){
                    unset($arr5[$arrKey]);
                }
            }
        }
    }
    echo "without duplicate</br>";
    var_dump($arr5);

    echo "</br>";
    //task 6
    echo "</br>";

    $twodimensional = [99, [25, 66], 55, 49, 78];
    $i = 0;
    foreach($twodimensional as $el){
        $i++;
        if(is_array($el)){
            echo " twodimensional ";
            break;
        }
        if($i == (count($twodimensional) - 1)){
            echo " not twodimensional "; 
        }
    }

    echo "</br>";
    //task 7
    echo "</br>";

    for ($i = 1; $i <= 10; $i++ ) {
        for ($j = 1; $j <= 10; $j++) {
          echo "$i x $j = " . $i * $j;
          echo "</br>";
        }
        echo "</br>";
      }
?>