<div class="container">
    @foreach ($posts as $post)   
    
    <!--Grid row-->
    <div class="row">
        <!--Grid column-->
        <div class="col-md-8 mb-4">
            <!--Section: Post data-mdb-->
            <section class="border-bottom mb-4">
                <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg"
                    class="img-fluid shadow-2-strong rounded mb-4" alt="" />

                <div class="row align-items-center mb-4">
                    <div class="col-lg-6 text-center text-lg-start mb-3 m-lg-0">
                        <img src="https://mdbootstrap.com/img/Photos/Avatars/img (23).jpg"
                            class="rounded shadow-1-strong me-2" height="35" alt="" loading="lazy" />
                        <span> Published <u>{{$post->created_at}}</u> by</span>
                        <a href="" class="text-dark">Faisal Mehmood</a>
                    </div>

                    <div class="col-lg-6 text-center text-lg-end">
                        <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init
                            style="background-color: #3b5998;">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init
                            style="background-color: #55acee;">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init
                            style="background-color: #0082ca;">
                            <i class="fab fa-linkedin"></i>
                        </button>
                        <button type="button" class="btn btn-primary px-3 me-1" data-mdb-ripple-init>
                            <i class="fas fa-comments"></i>
                        </button>
                    </div>
                </div>
            </section>
            <!--Section: Post data-mdb-->

            <!--Section: Text-->
            <section>
                <h1 class="text-center"><strong>{{$post->title}}</strong></h1>
                <p>{{$post->description}}</p> 

                <p class="note note-light">
                    <strong>Note:</strong> {{$post->title}}
                </p>

                <img src="https://mdbootstrap.com/img/new/slides/041.jpg" class="img-fluid shadow-1-strong rounded mb-4"
                    alt="" />

                <ul>
                    <li>Lorem</li>
                    <li>Ipsum</li>
                    <li>Dolor</li>
                    <li>Sit</li>
                    <li>Amet</li>
                </ul>

                <p>{{$post->description}}</p>
            </section>
            <!--Section: Text-->

            <!--Section: Share buttons-->
            <section class="text-center border-top border-bottom py-4 mb-4">
                <p><strong>Share with your friends:</strong></p>

                <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init
                    style="background-color: #3b5998;">
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init
                    style="background-color: #55acee;">
                    <i class="fab fa-twitter"></i>
                </button>
                <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init
                    style="background-color: #0082ca;">
                    <i class="fab fa-linkedin"></i>
                </button>
                <button type="button" class="btn btn-primary me-1" data-mdb-ripple-init>
                    <i class="fas fa-comments me-2"></i>Add comment
                </button>
            </section>
            <!--Section: Share buttons-->            

            <!--Section: Reply-->
            <section>
                <p class="text-center"><strong>Leave a reply</strong></p>

                <form>
                    <!-- Name input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="text" id="form4Example1" class="form-control" />
                        <label class="form-label" for="form4Example1">Name</label>
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <input type="email" id="form4Example2" class="form-control" />
                        <label class="form-label" for="form4Example2">Email address</label>
                    </div>

                    <!-- Message input -->
                    <div class="form-outline mb-4" data-mdb-input-init>
                        <textarea class="form-control" id="form4Example3" rows="4"></textarea>
                        <label class="form-label" for="form4Example3">Text</label>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
                        <label class="form-check-label" for="form4Example4">
                            Send me a copy of this comment
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4" data-mdb-ripple-init>
                        Publish
                    </button>
                </form>
            </section>
            <!--Section: Reply-->
        </div>
        <!--Grid column-->
    </div>
    <!--Grid row-->
    @endforeach

    {{-- Here we are calling the Loadmore function post class to load more posts with Alpinejs --}}
    <button x-intersect = "$wire.loadMore()" class="btn hidden"></button>

</div>
