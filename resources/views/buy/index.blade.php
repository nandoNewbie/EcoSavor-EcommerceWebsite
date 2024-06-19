<!DOCTYPE html>
<html lang="en">

    <head>
        @include('buy.css')
    </head>

    <body>

        <!-- Navbar Start -->
        @include('buy.navbar')
        <!-- Navbar End -->

        <!-- Modal Search Start (yang ada di navbar) -->
        @include('buy.search')
        <!-- Modal Search End -->

        <!-- Single Page Header start -->
        @include('buy.header')
        <!-- Single Page Header End -->

        <!-- Fruits Shop Start-->
        @include('buy.shop')


        <!-- Footer Start -->
        @include('buy.footer')
        <!-- Footer End -->





        <!-- Back to Top -->
        <a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>

</html>