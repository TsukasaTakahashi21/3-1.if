<?php

$num = mt_rand(1, 10);
if ($num <= 3) {
    echo "凶";
} elseif ($num <= 7) {
    echo "吉";
} else {
    echo "大吉";
}
?>
