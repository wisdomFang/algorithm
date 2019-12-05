<?php

/**
 * https://leetcode-cn.com/problems/two-sum/
 */
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {

        // for ($i = 0; $i < count($nums); $i++) {
        //     $sub = $target - $nums[$i];
        //     $slice = array_slice($nums, $i + 1);

        //     if (in_array($sub, $slice)) {
        //         return [$i, array_keys($slice, $sub)[0] + $i + 1];
        //     }
        // }

        // return [];

        for ($i = 0; $i < count($nums); $i++) {
            $sub = $target - $nums[$i];

            for ($j = $i + 1; $j < count($nums); $j ++) {
                if ($nums[$j] == $sub) {
                    return [$i, $j];
                }
            }
        }

        return [];

        // $map = [];

        // for($i = 0; $i < count($nums); $i++) {
        //     $sub = $target - $nums[$i];

        //     if (array_key_exists($nums[$i], $map)) {
        //         return [$map[$nums[$i]], $i];
        //     } else {
        //         $map[$sub] = $i;
        //     }
        // }

        // return [];
    }
}
