<?php

function sortListA($listA) {
    $listB = array();
    $operations = [];

    while (count($listA) > 1) {
        $minIndex = 0;
        for ($i = 1; $i < count($listA); $i++) {
            if ($listA[$i] < $listA[$minIndex]) {
                $minIndex = $i;
            }
        }

        for ($i = 0; $i < $minIndex; $i++) {
            array_push($listA, array_shift($listA));
            $operations[] = 'ra';
        }

        array_unshift($listB, array_shift($listA));
        $operations[] = 'pb';

        for ($i = 0; $i < $minIndex; $i++) {
            array_unshift($listA, array_pop($listA));
            $operations[] = 'rra';
        }
    }

    while (count($listB) > 0) {
        array_unshift($listA, array_shift($listB));
        $operations[] = 'pa';
    }

    print_r(implode(' ', $operations) . "\n");
}

array_shift($argv);

if (count($argv) < 51) {
    for ($i=0; $i < count($argv) - 1; $i++) { 
        if ($argv[$i] > $argv[$i + 1]) {
            sortListA($argv);
            exit;
        }
    }
        print_r("\n");
        exit;
} else{
    sortListA($argv);
}