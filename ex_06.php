<?php
function sum_rec(int $nbr, int $iteration) {
    if (!is_int($nbr) || !is_int($iteration)) {
        return NULL;
    }
    if ($iteration == 0) {
        return $nbr;
    }
    $step = $iteration > 0 ? -1 : 1;
    return $nbr + sum_rec($nbr + $step, $iteration + $step);
}

// Test
var_dump(sum_rec(5, 3));  // Devrait retourner 11
var_dump(sum_rec(5, -3)); // Devrait retourner -1
?>
