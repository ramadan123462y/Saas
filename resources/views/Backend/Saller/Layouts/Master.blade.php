<!DOCTYPE html>
<html lang="en">


@include('Backend.Saller.Layouts.Head')

<body>

    <!-- ======= Header ======= -->
    @include('Backend.Saller.Layouts.Header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('Backend.Saller.Layouts.Sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @include('Backend.Saller.Layouts.Breadcramb')<!-- End Page Title -->

            <!-- عنصر الـ loader -->
            <div class="loader-container">
                <div class="loader"></div>
            </div>
    
            <!-- محتوى الصفحة -->
        @yield('content')


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('Backend.Saller.Layouts.Footers')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- ======= Scribts ======= -->
    @include('Backend.Saller.Layouts.Scribts')
    <!-- =======End Scribts ======= -->

</body>

</html>
