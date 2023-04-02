package main

import "fmt"

type place []int

func (p place) getNextPlace() place {
	p[0] -= 2
	p[1] -= 1

	fmt.Println(p)
	return p
}

func findIfOnSamePosition(p1, p2 place) bool {
	return p1[0] == p2[0] && p1[1] == p2[1]
}

func main() {
	// board := []place{}

	// for i := 1; i < 8; i++ {
	// 	for ix := 1; ix < 8; ix++ {
	// 		board = append(board, []int{ix, i})

	// 	}
	// }
	h := place{8, 2}
	t := place{2, 5}
	findIfCanKKill(h, t)

	// 8,2 = place of horse	(h)
	// 2,5 = target	= (t)

	// fmt.Println(board)

}

func findIfCanKKill(horse place, target place) {
	// reduce x by 2digit
	// reduce y by 1digit
	// chck with target

	for {
		n := horse.getNextPlace()

		res := findIfOnSamePosition(n, target)
		if res {
			fmt.Println("horse - ", horse, "target - ", target)
			break
		}
	}
}

// map

// 1	2	3	5	5	6	7	8
// 2							h
// 3
// 4
// 5	t
// 6
// 7
// 8
