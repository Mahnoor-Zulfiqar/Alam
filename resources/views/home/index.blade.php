
@include('partials.top')
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>AdriaTech IT 442 5th Avenue #1426 Manhattan, NY 10018 United States</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+1 (646) 322-7706</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@adriatechit.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    {!!menu('AdriaTech-Header','mymenu')!!}
   <div class="container-fluid bg-primary py-5 hero-header" style="margin-bottom: 90px;">
    <div class="container py-5">
        <div class="row justify-content-start">
            <div class="col-lg-8 pt-lg-5 mt-lg-5 text-center text-lg-start">
                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Creative & Innovative</h5>
                <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Digital Solution</h1>
                <a href="{{route('contact')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Contact Us</a>

            </div>
        </div>
    </div>
</div>
</div>

    <!-- Navbar & Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    @include('about.common')
    <!-- About End -->





    <!-- Features Start -->
  <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">

                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin-left:auto;margin-right:auto;">
                                <i class="fa fa-cubes text-white"></i>

                            </div>
                            <h4 style="margin-left:25%">Best In Industry</h4>
                            <p class="mb-0">{{-- Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor --}}</p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin-left:auto;margin-right:auto;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4 style="margin-left:25%">Award Winning</h4>
                            <p class="mb-0">{{-- Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor --}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="img/feature.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin-left:auto;margin-right:auto;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4 style="margin-left:25%"> Professional Staff</h4>
                            <p class="mb-0">{{-- Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor --}}</p>
                        </div>
                        <div class="col-md-6 col-lg-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; margin-left:auto;margin-right:auto;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4 style="margin-left:25%">24/7 Support</h4>
                            <p class="mb-0">{{-- Magna sea eos sit dolor, ipsum amet lorem diam dolor eos et diam dolor --}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    @include('services.common')
    <!-- Service End -->








    <!-- Quote Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title-2 position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                        <h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us</h1>
                    </div>
                    <div class="row gx-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>24 hrs telephone support</h5>
                        </div>
                    </div>
                    <p class="mb-4">{{-- Eirmod sed tempor lorem ut dolores. Aliquyam sit sadipscing kasd ipsum. Dolor ea et dolore et at sea ea at dolor, justo
                        ipsum duo rebum sea invidunt voluptua. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo invidunt lorem. Elitr ut dolores magna sit.
                         Sea dolore sanctus sed et. Takimata takimata sanctus sed. --}}</p>
                    <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Call to ask any question</h5>
                            <h4 class="text-primary mb-0">+1 (646) 322-7706</h4>
                        </div>
                    </div>
                </div>
               @include('contact.form')
            </div>
        </div>
    </div>
    <!-- Quote End -->





    <!-- Blog Start -->
{{--     <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-2 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                @foreach ($posts as $post )
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{env('APP_URL')}}\storage\{{$post->image}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">
                                @foreach($categories as $category)

                                @if($category->id==$post->category_id)
                                {{$category->name}}
                                @endif

                                @endforeach
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{$post->author_id}}</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{$post->created_at->format('d M,Y')}}</small>
                            </div>
                            <h4 class="mb-3">{{$post->title}}</h4>
                            <p>
                             {!! Str::limit($post->body,100)!!}
                            </p>
                            <a class="text-uppercase" href="{{route('blog_detail',$post->slug)}}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div> --}}
    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title-1 text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
            </div>
            <div class="row g-5">
                @foreach ($posts as $post )
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{$post->image}}" alt="">
                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">
                                @foreach($categories as $category)

                                @if($category->id==$post->category_id)
                                {{$category->name}}
                                @endif

                                @endforeach
                            </a>
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>{{$post->author_id}}</small>
                                <small><i class="far fa-calendar-alt text-primary me-2"></i>{{$post->created_at->format('d M,Y')}}</small>
                            </div>
                            <h4 class="mb-3">{{$post->title}}</h4>
                            {!! \Illuminate\Support\Str::words($post->body, 13,'....')  !!}
                            <a class="text-uppercase" href="{{route('blog_detail',$post->slug)}}">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
   @include('partials.footer')





   <!-- Back to Top -->
   <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

   @include('partials.bottom')

  </body>


  </html>
