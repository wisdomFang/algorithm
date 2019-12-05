package main

import "fmt"

type ListNode struct {
	Val int
	Next *ListNode
}

/**
 * https://leetcode-cn.com/problems/add-two-numbers/
 */
func main(){
	l1 := &ListNode{Val:2, Next: &ListNode{Val:4, Next:&ListNode{Val:3, Next:nil}}}
	l2 := &ListNode{Val:5, Next: &ListNode{Val:6, Next:&ListNode{Val:4, Next:nil}}}
	cur := addTwoNumbers(l1, l2)

	for cur != nil {
		fmt.Printf("cur val %v", cur.Val)
		cur = cur.Next
	}
}

func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
	ret := new(ListNode)
	cur := ret
	carry := 0

	for l1 != nil || l2 != nil {
		val1, val2 := 0, 0
		if l1 != nil {val1 = l1.Val}
		if l2 != nil {val2 = l2.Val}
		sum := val1 + val2 + carry
		carry = sum / 10
		cur.Val = sum % 10
		if l1 != nil {l1 = l1.Next}
		if l2 != nil {l2 = l2.Next}

		if (l1 != nil || l2 != nil) {
			cur.Next = new(ListNode)
			cur = cur.Next
		}

	}
	if carry > 0 {
		cur.Next = new(ListNode)
		cur = cur.Next
		cur.Val = carry
	}

	return ret
}
