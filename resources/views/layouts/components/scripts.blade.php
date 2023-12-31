<!-- Bootstrap core JavaScript-->
<script src="{{ asset('assets/bootstrap/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Core plugin JavaScript-->
<script src="{{ asset('assets/bootstrap/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

<!-- Custom scripts for all pages-->
<script src="{{ asset('assets/bootstrap/js/sb-admin-2.min.js') }}"></script>

<!-- Page level plugins -->
<script src="{{ asset('assets/bootstrap/vendor/chart.js/Chart.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/bootstrap/js/demo/chart-area-demo.js') }}"></script>
<script src="{{ asset('assets/bootstrap/js/demo/chart-pie-demo.js') }}"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- datatable-->
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
@include('sweetalert::alert')

@stack('js')