@include('layouts.partial.header')        
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">About</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">About</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="about-img">
                    <div class="rotate-left bg-dark"></div>
                    <div class="rotate-right bg-dark"></div>
                    <img src="/frontend/img/about-img.jpg" class="img-fluid h-100" alt="img">
                    <div class="bg-white experiences">
                        <h1 class="display-3">20</h1>
                        <h6 class="fw-bold">Years Of Experiences</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                <div class="about-item overflow-hidden">
                    <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                        About PestKit</h5>
                    <h1 class="display-5 mb-2">World Best Pest Control Services Since 2008</h1>
                    <p class="fs-5" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipiscing elit
                        sed do eiu smod tempor incididunt ut labore dolore magna aliqua.Quis ipsum suspen disse ultrices
                        gravida Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="row">
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-city fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Building</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-school fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Education</h5>
                                    <h5>center</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-warehouse fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Warehouse</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="text-center">
                                <div class="p-4 bg-dark rounded d-flex"
                                    style="align-items: center; justify-content: center;">
                                    <i class="fas fa-hospital fa-4x text-primary"></i>
                                </div>
                                <div class="my-2">
                                    <h5>Hospital</h5>
                                    <h5>Cleaning</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" onclick="window.location.href='/service'" class="btn btn-primary border-0 rounded-pill px-4 py-3 mt-5">Find Services
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Call To Action Start -->
<div class="container-fluid py-5 call-to-action wow fadeInUp" data-wow-delay=".3s" style="margin: 6rem 0;">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-6">
                <img src="/frontend/img/action.jpg" class="img-fluid w-100 rounded-circle p-5" alt="">
            </div>
            <div class="col-lg-6 my-auto">
                <div class="text-start mt-4">
                    <h1 class="pb-4 text-white">Sign Up To Our Newsletter To Get The Latest Offers</h1>
                </div>
                <form method="post" action="index.html">
                    <div class="form-group">
                        <div class="d-flex call-btn">
                            <input type="search"
                                class="form-control py-3 px-4 w-100 border-0 rounded-0 rounded-end rounded-pill"
                                name="search-input" value="" placeholder="Enter Your Email Address"
                                required="Please enter a valid email" />
                            <button type="email" value="Search Now!"
                                class="btn btn-primary border-0 rounded-pill rounded rounded-start px-5">Subscribe</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Call To Action End -->

@include('layouts.partial.footer')        
