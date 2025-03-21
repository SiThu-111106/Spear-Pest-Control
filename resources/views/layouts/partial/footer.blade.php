<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay=".3s">
    <div class="container py-5">
        <div class="row g-4 footer-inner">
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">About PestKit.</h4>
                    <p>Nostrud exertation ullamco labor nisi aliquip ex ea commodo consequat duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore.</p>
                    <p class="mb-0"><a class="" href="#">PestKit </a> &copy; 2023 All Right Reserved.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">Usefull Link</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>About Us</a>
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Contact Us</a>
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Our Services</a>
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Terms & Condition</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">Services Link</h4>
                    <div class="d-flex flex-column align-items-start">
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Apartment Cleaning</a>
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Office Cleaning</a>
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Car Washing</a>
                        <a class="btn btn-link ps-0" href="#"><i class="fa fa-check me-2"></i>Green Cleaning</a>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-item">
                    <h4 class="text-white fw-bold mb-4">Contact Us</h4>
                    <a href="" class="btn btn-link w-100 text-start ps-0 pb-3 border-bottom rounded-0"><i
                            class="fa fa-map-marker-alt me-3"></i>123 Street, CA, USA</a>
                    <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i
                            class="fa fa-phone-alt me-3"></i>+012 345 67890</a>
                    <a href="" class="btn btn-link w-100 text-start ps-0 py-3 border-bottom rounded-0"><i
                            class="fa fa-envelope me-3"></i>info@example.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->



<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center text-md-start mb-3 mb-md-0">
                <a href="#" class="text-primary mb-0 display-6">Spear<span class="text-white">PestControl</span><i
                        class="fa fa-spider text-primary ms-2"></i></a>
            </div>
            <div class="col-md-4 copyright-btn text-center text-md-start mb-3 mb-md-0 flex-shrink-0">
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="https://twitter.com/?lang=en"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="https://www.facebook.com/"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-primary rounded-circle me-3 copyright-icon" href="https://www.linkedin.com/"><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-md-4 my-auto text-center text-md-end text-white">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-primary rounded-circle border-3 back-to-top"><i class="fa fa-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="/frontend/lib/wow/wow.min.js"></script>
<script src="/frontend/lib/easing/easing.min.js"></script>
<script src="/frontend/lib/waypoints/waypoints.min.js"></script>
<script src="/frontend/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="/frontend/js/main.js"></script>


<script>
    $(document).ready(function () {
        var path = window.location.pathname;
        var matchingLink = $('a[href="' + path + '"]');
        if (matchingLink.closest('.dropdown-menu').length) {
            matchingLink.addClass('active'); // Highlight the active link
            matchingLink.closest('.dropdown-menu').prev('.dropdown-toggle').addClass('show').attr('aria-expanded', 'true');
            matchingLink.closest('.dropdown-menu').addClass('show');
        } else {
            matchingLink.addClass('active'); // Highlight the active link
        }
    });
</script>

</body>

</html>