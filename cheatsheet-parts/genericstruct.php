




<div class="post-content">
              <!-- <img src="images/gobanner.awebp" alt="post-image" class="img-responsive post-image"> -->
              <div class="post-container">
                <img src="images/avatar.png" alt="user" class="profile-photo-md pull-left">
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="/" class="profile-link">Anshuman Patil</a></h5>
                    <p class="text-muted">Generic parameters to Go struct</p>
                  </div>
                  <div class="reaction">
                    <a class="btn text-green" style="cursor: pointer;"><i class="fa fa-thumbs-up"></i> 13</a>
                    <a class="btn text-red" style="cursor: pointer;"><i class="fa fa-thumbs-down"></i> 0</a>
                  </div>
                  <div class="line-divider"></div>
                  
                  

                  <pre><code class="language-go">
// Generic Structs in Go
package main

import "fmt"

type Family[U any] struct {
	val U
}

func (f Family[U]) setValue(it U) Family[U] {
	f.val = it
	return f
}

func main() {

	fString := Family[string]{}
	fString = fString.setValue("Anshuman")

	fmt.Println(fString)

	fInt := Family[int]{}
	fInt = fInt.setValue(56)

	fmt.Println(fInt)
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