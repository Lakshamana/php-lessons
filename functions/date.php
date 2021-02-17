<?php
echo 'Now: '.date('Y-m-d H:i', time() - 3 * 3600);

$secs_per_day = 60 * 60 * 24;
$d1 = strtotime('2020-01-05');
$d2 = strtotime('2020-02-05');

$diff_in_days = ($d2 - $d1) / $secs_per_day;

echo "<br>Difference in days: {$diff_in_days}d"
?>
