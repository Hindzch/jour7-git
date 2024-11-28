<?php
function sum_it(int $nbr, int $iteration) {
    if (!is_int($nbr) || !is_int($iteration)) {
        return NULL;
    }
    $result = $nbr;
    $step = $iteration > 0 ? -1 : 1;
    for ($i = abs($iteration); $i > 0; $i--) {
        $result += $step * $i;
    }
    return $result;
}
?>
