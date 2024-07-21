<!DOCTYPE html>
<html lang="en">


@include('Backend.Admin.Layouts.Head')

<body>

    <!-- ======= Header ======= -->
    @include('Backend.Admin.Layouts.Header')
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    @include('Backend.Admin.Layouts.Sidebar')
    <!-- End Sidebar-->

    <main id="main" class="main">

        @include('Backend.Admin.Layouts.Breadcramb')<!-- End Page Title -->

            <!-- عنصر الـ loader -->
            <div class="loader-container">
                <div class="loader"></div>
            </div>

            <!-- محتوى الصفحة -->
        @yield('content')


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('Backend.Admin.Layouts.Footers')
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- ======= Scribts ======= -->
    @include('Backend.Admin.Layouts.Scribts')
    <!-- =======End Scribts ======= -->

</body>

</html>
