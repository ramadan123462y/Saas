  <!-- Vendor JS Files -->
  <script src="{{ URL::asset('Backend/assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/chart.js/chart.umd.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/echarts/echarts.min.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/quill/quill.min.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ URL::asset('Backend/assets/vendor/php-email-form/validate.js') }}"></script>

  {{-- <script src="{{ URL::asset('Backend/assets/vendor/php-email-form/validate.js') }}"></script> --}}
  <!-- Template Main JS File -->
  <script src="{{ URL::asset('Backend/assets/js/main.js') }}"></script>
   
  @stack('scripts')
  @yield('js')
