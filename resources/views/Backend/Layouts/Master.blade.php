<!DOCTYPE html>
<html lang="en">

@include('Backend.Layouts.Head')
{{-- @include('Backend.Layouts.Head') --}}

<body>

    <!-- ======= Header ======= -->
    @include('Backend.Layouts.Header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('Backend.Layouts.Sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @include('Backend.Layouts.Breadcramb')<!-- End Page Title -->
    

        @yield('content')


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('Backend.Layouts.Footers')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- ======= Scribts ======= -->
    @include('Backend.Layouts.Scribts')
    <!-- =======End Scribts ======= -->

</body>

</html>
