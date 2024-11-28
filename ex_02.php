<?php
function my_facto_rec(int $nbr) {
    if (!is_int($nbr) || $nbr < 0) {
        return NULL;
    }
    if ($nbr === 0) {
        return 1;
    }
    return $nbr * my_facto_rec($nbr - 1);
}
?>

