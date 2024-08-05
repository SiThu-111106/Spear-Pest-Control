@include('layouts.partial.header')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5">
    <div class="container text-center py-5">
        <h1 class="display-2 text-white mb-4 animated slideInDown">Blog Post</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center mb-0 animated slideInDown">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item text-white" aria-current="page">Blog Post</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-5 wow fadeInUp" data-wow-delay=".3s">
            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">Our Blog
            </h5>
            <h1 class="display-5">Latest Blog & News</h1>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay=".5s">
            <div class="blog-item">
                <img src="/frontend/img/mos_clean.png" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>Fogging</h4>
                        <p>Fogging is a sterilization technique where sanitizing products are mixed with water and
                            emitted as a fine mist or spray. It is commonly used to fumigate large areas that are near
                            impossible to sterilize by hand.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/rodent_clean.png" class="img-fluid w-100 rounded-top" alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-6 pb-2" style="margin: 15px;">
                        <h4>Rodent bait station deployment</h4>
                        <p>These poisons reduce the ability of the rat's blood to clot, causing internal hemorrhaging
                            and death. Multiple dose poisons cause the death of rats over a 4-8 day period of continuous
                            feeding, while single dose poisons cause death in 4-7 days and a single feed is enough to be
                            a lethal dose.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/files_clean.png" class="img-fluid w-100 rounded-top" style="height: 250px;"
                    alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>ULV misting</h4>
                        <p>Ultra Low Volume (ULV) fogging is one of the widely practiced methods of applying liquid
                            pesticides, disinfectants, or other chemicals in the form of fine mist. The technique is
                            basically the dispersion of droplets with sizes ranging from 5 to 50 microns.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/indoor_clean.png" style="height: 250px;" class="img-fluid w-100 rounded-top"
                    alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>How Indoor residual spraying</h4>
                        <p>Indoor residual spraying involves coating the walls and other surfaces of the house with an
                            effective residual insecticide, where mosquito vectors are known to rest. The insecticide
                            will kill adult mosquitoes that come in contact with these treated surfaces for several
                            months.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                    </div>
                </div>
            </div>
            <div class="blog-item">
                <img src="/frontend/img/termite_clean.png" style="height: 250px;" class="img-fluid w-100 rounded-top"
                    alt="">
                <div class="rounded-bottom bg-light">
                    <div class="d-flex justify-content-between p-4 pb-2">
                        <span class="pe-2 text-dark"><i class="fa fa-user me-2"></i>By Admin</span>
                        <span class="text-dark"><i class="fas fa-calendar-alt me-2"></i>10 Feb, 2023</span>
                    </div>
                    <div class="px-4 pb-0">
                        <h4>Termite bait systems</h4>
                        <p>Termite bait systems (also known as termite baiting systems) can be used as a home's sole
                            prevention and control method, or in conjunction with liquid soil treatments to control
                            known termite colonies.</p>
                    </div>
                    <div class="p-4 py-2 d-flex justify-content-between bg-primary rounded-bottom blog-btn">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@include('layouts.partial.footer')