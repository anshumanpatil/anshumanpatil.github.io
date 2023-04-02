




<div class="post-content">
              <!-- <img src="images/gobanner.awebp" alt="post-image" class="img-responsive post-image"> -->
              <div class="post-container">
                <img src="images/avatar.png" alt="user" class="profile-photo-md pull-left">
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="/" class="profile-link">Anshuman Patil</a></h5>
                    <p class="text-muted">Functors Pattern in Go</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green" style="cursor: pointer;"><i class="fa fa-thumbs-up"></i> 13</a>
                    <a class="btn text-red" style="cursor: pointer;"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  
                  

                  <pre><code class="language-go">
// Functors Pattern in Go
package main

import "fmt"

// The `IntSlice` type represents a functor that maps over a slice of integers.
type IntSlice struct {
	slice []int
}

// The `Map` method applies a given function to each element of the slice and returns a new slice with the transformed elements.
func (s IntSlice) Map(f func(int) int) IntSlice {
	var result []int
	for _, x := range s.slice {
		result = append(result, f(x))
	}
	return IntSlice{result}
}

func main() {
	// Define a functor.
	numbers := IntSlice{[]int{1, 2, 3, 4, 5}}

	squares := numbers.Map(func(x int) int {
		return x * x
	})

	fmt.Println(squares.slice) // Output: [1 4 9 16 25]

	squaresSum := squares.Map(func(x int) int {
		return x + 1
	})

	fmt.Println(squaresSum.slice) // Output: [2 8 18 32 50]
}




</code></pre>

                  <div class="line-divider"></div>
                  <div class="post-comment">
                    <img src="images/avatar1.png" alt="" class="profile-photo-sm">
                    <input type="text" class="form-control" placeholder="Post a comment">
                  </div>
                </div>
              </div>
            </div>