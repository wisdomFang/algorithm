package main

import "fmt"

/**
 * https://leetcode-cn.com/problems/longest-substring-without-repeating-characters/
 */
func main(){
	ret := lengthOfLongestSubstring("pwwkew")
	fmt.Printf("ret  %v", ret)
}

func lengthOfLongestSubstring(s string) int {
	if s == "" {
		return 0
	}

	b, ret := 0, 0
	chars := make(map[rune] int)

	for k,v := range s {
		i, ok := chars[v]

		if ok {
			if i + 1 > b {
				b = i + 1
			}
		}

		chars[v] = k

		if k - b + 1 > ret {
			ret = k - b + 1
		}
	}

	return ret
}
