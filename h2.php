<?php
function checknumber($num1,$num2,$num3,$num4){
    if($num1>$num2 && $num1>$num3 && $num1>$num4){
        echo"$num1 is Larger number";
        }
else{
    if($num2>$num1 && $num2>$num3 && $num2>$num4){
        echo"$num2 is larger number";
    }
    elseif($num3>$num1 && $num3>$num2 && $num3>$num4){
        echo"$num3 is Larger number";
    }
else{
    echo"$num4 is Larger number";
}
    
}
}
checknumber(30,50,100,90);
?>