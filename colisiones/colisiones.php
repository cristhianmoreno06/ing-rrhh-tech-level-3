<?php

/**
 * @param $sequence
 * @return string
 */
function robotCollisions($sequence): string
{
    $n = strlen($sequence);
    $collisions = array_fill(0, $n, 0);

    $i = 0;
    while ($i < $n - 1) {
        if ($sequence[$i] == 'R' && $sequence[$i + 1] == 'L') {
            $collisions[$i]++;
            $collisions[$i + 1]++;

            $sequence[$i] = 'L';
            $sequence[$i + 1] = 'R';

            if ($i > 0) {
                $i--;
            }
        } else {
            $i++;
        }
    }

    return implode(" ", $collisions);
}

echo robotCollisions('LR') . "<br>";
echo robotCollisions('RL') . "<br>";
echo robotCollisions('RRR') . "<br>";
echo robotCollisions('RRL') . "<br>";