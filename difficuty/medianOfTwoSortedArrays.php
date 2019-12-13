<?php

class Solution {

    /**
     * url : https://leetcode-cn.com/problems/median-of-two-sorted-arrays/
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        // $merge = array_merge($nums1, $nums2);
        // sort($merge);
        // $len = count($merge);
        // $isEven = $len % 2 == 0 ? true : false;
        // $ret = 0;

        // if ($isEven) {
        //     $ret = ($merge[$len / 2] + $merge[$len / 2 - 1]) / 2;
        // } else {
        //     $ret = $merge[floor($len / 2)];
        // }

        // return $ret;

        // $len1 = count($nums1);
        // $len2 = count($nums2);
        // $left = $right = $pos1 = $pos2 = 0;
        // $circles = floor(($len1 + $len2) / 2) + 1;

        // for($i = 0; $i < $circles; $i++) {
        //     $left = $right;

        //     if ($pos1 < $len1 && ($pos2 >= $len2 || $nums1[$pos1] < $nums2[$pos2])) {
        //         $right = $nums1[$pos1++];
        //     }  else {
        //         $right = $nums2[$pos2++];
        //     }
        // }

        // return ($len1 + $len2) % 2 ? $right : ($left + $right) / 2;

        $len1 = count($nums1);
        $len2 = count($nums2);
        $left = floor(($len1 + $len2 + 1) / 2);
        $right = floor(($len1 + $len2 + 2)/ 2);

        return (
                $this->getPostionVal($nums1, 0, $len1 - 1, $nums2, 0, $len2 - 1, $left) + $this->getPostionVal($nums1, 0, $len1 - 1, $nums2, 0, $len2 - 1, $right)
            ) / 2;
    }

    function getPostionVal($arr1, $s1, $e1, $arr2, $s2, $e2, $k){
        $len1 = $e1 - $s1 + 1;
        $len2 = $e2 - $s2 + 1;
        //有可能先清空一个数组
        if ($len1 == 0) return $arr2[$s2 + $k - 1];
        if ($len2 == 0) return $arr1[$s1 + $k - 1];
        if ($key == 1) return min($arr2[$s2], $arr1[$s1]);

        $p = floor($k / 2);
        $ns1 = $s1 + min($len1, $p) - 1;
        $ns2 = $s2 + min($len2, $p) - 1;

        if ($arr1[$ns1] > $arr2[$ns2]) {
            return $this->getPostionVal($arr1, $s1, $e1, $arr2, $ns2 + 1, $e2, $k - $ns2 + $s2 + 1);
        } else {
            return $this->getPostionVal($arr1, $ns1 + 1, $e1, $arr2, $s2, $e2, $k - $ns1 + $s1 + 1);
        }
    }
}
