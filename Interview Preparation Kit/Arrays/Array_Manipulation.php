<?php    
$_fp = fopen("php://stdin", "r");

fscanf($_fp, "%d %d", $n, $m);
$max = 0;
$arA = array();
$arB = array();
while($m>0){
    fscanf($_fp, "%d %d %d", $a, $b, $k);
    if (isset($arA[$a])){
        $arA[$a]+=$k;
    }else{
        $arA[$a] = $k;
    }
    if (isset($arB[$b])){
        $arB[$b]+=$k;
    } else {
        $arB[$b] = $k;
    }
    $m--;
}
ksort($arA);
ksort($arB);
reset($arA);
reset($arB);
$currSum = 0;
while(key($arA)!= null && key($arB)!=null){
    if (key($arA) < key($arB)){
        $currSum+=current($arA);
        if ($currSum > $max) $max = $currSum;
        next($arA);
    } elseif (key($arA) > key($arB)){
        $currSum-=current($arB);
        next($arB);
    } else {
        
        $currSum+=current($arA);
        if ($currSum > $max) $max = $currSum;
        next($arA);
        $currSum-=current($arB);
        next($arB); 
    }
}
while(key($arA)!=null){
        $currSum+=current($arA);
        if ($currSum > $max) $max = $currSum;
        next($arA);    
}


echo $max;
?>