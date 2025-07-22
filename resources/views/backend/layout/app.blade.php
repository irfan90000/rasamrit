<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('storage/website_setup/' . websiteSetupValue('favicon')) }}" type="image/png" />
    <title>{{ config('app.name') }} | {{ isset($page_title) ? $page_title : '' }}</title>
    <link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>


<body>
    <!--wrapper-->
    <div class="wrapper">

        @include('backend.layout.sidebar')

        @include('backend.layout.header')

        <div class="page-wrapper">
            @yield('content')
        </div>

        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

        <footer class="page-footer">
            <p class="mb-0">Copyright © 2024. All rights reserved.</p>
        </footer>
    </div>
    <script src="{{ asset('backend/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/pace.min.js') }}"></script>
    <script src="{{ asset('backend/js/app.js') }}"></script>
    <script src="{{ asset('backend/js/sweetalert2.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });

            $(document).ready(function() {
                var success_message = "{{ Session::get('success') }}";
                var error_message = "{{ Session::get('error') }}";

                if (success_message != "") {
                    success_sweet_alert(success_message);
                }
                if (error_message != "") {
                    error_sweet_alert(error_message)
                }

            });

            function success_sweet_alert(success_message) {
                Toast.fire({
                    icon: 'success',
                    title: success_message
                });
            }

            function error_sweet_alert(error_message) {
                Toast.fire({
                    icon: 'error',
                    title: error_message
                });
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select goals',
                closeOnSelect: false,
                width: '100%'
            });
        });
    </script>
    @stack('scripts')
</body>

</html>
