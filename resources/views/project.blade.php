@include('layouts/partial.header')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">projects</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">projects</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Project Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Sponsers
            </h5>
            <h1 class="display-5">Our recently sponsers</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/warehouse.png" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Warehouse</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/office.png" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Office Tower</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/house.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">House</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/hospital.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Hospital Cleaning</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/mall.jpg" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Shopping Mall</a>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="project-item">
                    <div class="project-left bg-dark"></div>
                    <div class="project-right bg-dark"></div>
                    <img src="/frontend/img/res.png" class="img-fluid h-100" alt="img">
                    <a href="" class="fs-4 fw-bold text-center">Restaurant</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Project End -->
 @include('layouts.partial.footer')