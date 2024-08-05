@include('layouts.partial.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Team Members</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Team Members</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Team
            </h5>
            <h1 class="display-5 w-50 mx-auto">Our Team Members</h1>
        </div>
        <div class="row g-5">
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".3s">
                <div class="rounded team-item">
                    <img src="/frontend/img/zaini.png" class="img-fluid w-100 rounded-top border border-bottom-0"
                        alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Muhammad Zaini Bin Abd Rashid</span>
                        <p class="text-muted mb-0">In-house entomologist</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".5s">
                <div class="rounded team-item">
                    <img src="/frontend/img/rupert.png" class="img-fluid w-100 rounded-top border border-bottom-0"
                        alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Rupert Alexander</span>
                        <p class="text-muted mb-0">CEO of Spear Pest Control Company</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".7s">
                <div class="rounded team-item">
                    <img src="/frontend/img/andrian.png" class="img-fluid w-100 rounded-top border border-bottom-0"
                        alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Adrian Meyer</span>
                        <p class="text-muted mb-0">Vertebrate Specialist</p>
                    </div>
                </div>
            </div>
            <div class="col-xxl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay=".9s">
                <div class="rounded team-item">
                    <img src="/frontend/img/clive.png" class="img-fluid w-100 rounded-top border border-bottom-0"
                        alt="">
                    <div class="team-content bg-primary text-dark text-center py-3">
                        <span class="fs-4 fw-bold">Clive Boase</span>
                        <p class="text-muted mb-0">Invertebrate Specialist</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@include('layouts.partial.footer')