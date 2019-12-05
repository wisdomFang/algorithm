<?php

/**
 * https://leetcode-cn.com/problems/add-two-numbers/
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $carry = 0;
        //$val $ret 初始化指向同一个对象
        $val = $ret = new ListNode(0);

        while($l1 || $l2) {
            $sum = $l1->val + $l2->val + $carry;
            $carry = intval($sum / 10);
            $ret->next = new ListNode($sum % 10);
            $ret = $ret->next;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }

        if ($carry) $ret->next = new ListNode($carry);

        return $val->next;
    }
}
