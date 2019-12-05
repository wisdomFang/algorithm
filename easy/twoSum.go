func twoSum(nums []int, target int) []int {
    len := len(nums)
    ret := make([]int, 2)

    for i := 0; i < len; i++ {
        sub := target - nums[i]
        
        for j := i + 1; j < len; j++ {
            if nums[j] == sub {
                ret[0] = i
                ret[1] = j
                return ret
            }
        }
    }

    return ret
}

// func twoSum(nums []int, target int) []int {
//     subMap := make(map[int]int)
//     len := len(nums)
//     ret := make([]int, 2)

//     for i := 0; i < len; i++ {
//         v,ok := subMap[nums[i]] 

//         if ok {
//             ret[0] = v
//             ret[1] = i
//             return ret
//         } else {
//             subMap[target - nums[i]] = i
//         }
//     }
//     return ret
// }
