<?php

class Solution {

    /**
     * https://leetcode-cn.com/problems/longest-substring-without-repeating-characters/
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $ret = 0;

        if (!empty($s)) {      
            $b = 0; //初始化滑动窗口的开始位置
            $chars = [];

            for ($i = 0; $i < strlen($s); $i++) {
                if (array_key_exists($s[$i], $chars)) {
                    $b = max($chars[$s[$i]] + 1, $b);
                }

                $chars[$s[$i]] = $i;
                $ret = max($ret, $i - $b + 1);
            }
        }

        return $ret;
    }
}
