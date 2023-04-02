




<div class="post-content">
              <!-- <img src="images/gobanner.awebp" alt="post-image" class="img-responsive post-image"> -->
              <div class="post-container">
                <img src="images/avatar.png" alt="user" class="profile-photo-md pull-left">
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="/" class="profile-link">Anshuman Patil</a></h5>
                    <p class="text-muted">Generic parameters to Go functions</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green" style="cursor: pointer;"><i class="fa fa-thumbs-up"></i> 13</a>
                    <a class="btn text-red" style="cursor: pointer;"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  
                  

                  <pre><code class="language-go">
// Generic Functions in Go
package main

import "fmt"

func squareSlice[T any, M any](a []T, f func(T) M) []M {
	n := make([]M, len(a))
	for i, e := range a {
		n[i] = f(e)
	}
	return n
}

func main() {

	numbers := []int{1, 2, 3, 4, 5}
	squaresInts := squareSlice(numbers, squareInt[int])

	// input in `int` format
	fmt.Println("numbers = ", numbers)
	// output in `int` format
	fmt.Println("squaresInts = ", squaresInts)

	floats := []float64{1.9, 2.6, 3.4, 4.2, 5.1}
	squaresFloats := squareSlice(floats, squareFloat[float64])

	// input in `float64` format
	fmt.Println("floats = ", floats)
	// output in `float64` format
	fmt.Println("squaresFloats = ", squaresFloats)

}

// The `squareInt` function returns the square of an integer.
func squareInt[T int](x T) T {
	return x * x
}

// The `squareFloat` function returns the square of an integer.
func squareFloat[T float64](x T) T {
	return T(int(x) * int(x))
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