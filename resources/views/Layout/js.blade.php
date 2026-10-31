<script src="{{ asset('/backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/backend/js/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('/backend/js/dataTable.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('/backend/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('/backend/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('/backend/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('/backend/js/demo/chart-bar-demo.js') }}"></script>

    <!--===============================================================================================-->
	<script src="{{ asset('/Login_v1/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('/Login_v1/vendor/bootstrap/js/popper.js') }}"></script>
        <script src="{{ asset('/Login_v1/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('/Login_v1/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
        <script src="{{ asset('/Login_v1/vendor/tilt/tilt.jquery.min.js') }}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
    <!--===============================================================================================-->
        <script src="{{ asset('/Login_v1/js/main.js') }}"></script>
{{-- <script>
    function togglePasswordVisibility(){
        var passwordInput =
        document.getElementById("password");
        var toggleIcon =
        document.querySelector(".input-grup-text i");
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleIcon.classList.remove("fa-eye-slash");
            toggleIcon.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            toggleIcon.classList.remove("fa-eye");
            toggleIcon.classList.add("fa-eye-slash");
        }
    }
</script> --}}
