```go

package main

import (
	"fmt"
	"strconv"
	_ "strings"
)

func add(a, b int) int {
	return a + b
}

func test_base_syntax() {
	for i := 0; i < 10; i++ {
		fmt.Println(i)
	}

	a := 0
	for {

		if a < 100 {
			a = a + 1
			// 			fmt.Println("xxxxxx", a)
		} else if a >= 100 {
			break
		}
	}

	for index, c := range "hello wold" {
		fmt.Println(index, c)
	}

	arr := []int{1, 2, 3, 4, 5, 6, 7}

	m := make(map[string]string)

	for _, v := range arr {

		m[strconv.Itoa(v)] = strconv.Itoa(v)

	}

	for k, v := range m {

		fmt.Println(k, v)
	}

	fmt.Println("xxxxxx", a)

	switch {

	case a == 100:
		fmt.Println(a)
	default:
		fmt.Println("default")

	}

	switch a {

	case 100:
		fmt.Println(a)
	default:
		fmt.Println("default")

	}

}

func main() {
	// 	fmt.Println(add(3, 4))
	// 	fmt.Println("Hello, 世界")

	test_base_syntax()

}


```