<?php
function minimumSwaps($arr) {
    
    $total = count($arr);
    $count = 0;
    $sorted = $arr;
    sort($sorted);
	
	$sorted_flipped = array_flip($sorted);

	for( $i = 0; $i < $total; $i++ ) {
		if( !isset($arr[$i]) ) { continue; }
		$v = $arr[$i];
		$correct_val = $sorted[$i];
        if( $v != $correct_val ) {
            $count++;
			$to_swap_idx = $sorted_flipped[$v];
			$to_swap_val = $arr[$to_swap_idx];
			
			$tmp = $arr[$i];
			$arr[$i] = $to_swap_val;
			$arr[$to_swap_idx] = $tmp;
			$i--;
        }
    }
    return $count;
}