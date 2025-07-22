<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} | {{ isset($page_title) ? $page_title : '' }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/website_setup/' . websiteSetupValue('favicon')) }}" />
    <link rel="icon" href="{{ asset('backend/images/icon.ico') }}" type="image/png" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('backend/css/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
</head>

<body>
    <div class="login-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-12 form-right mx-auto">
                    <div class="form-section">
                        <div class="logo">
                            <a href="{{ route('front.index') }}">
                                <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}"
                                    class="img-fluid">
                            </a>
                        </div>
                        <h4>Welcome Admin! Login to your account.</h4>
                        <div class="login-inner-form">
                            <form action="{{ route('admin.login.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="email" class="form-label">Email address</label>
                                    <div class="form-box">
                                        <input name="email" type="email" id="email" value="{{ old('email') }}"
                                            class="form-control" placeholder="Email Address">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    @error('email')
                                        <div class="error">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="form-box">
                                        <input name="password" type="password" id="password" class="form-control"
                                            placeholder="Password">
                                        <i class="fas fa-lock"></i>
                                    </div>
                                    @error('password')
                                        <div class="error">
                                            <span>{{ $message }}</span>
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="btn submit-btn">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('backend/js/sweetalert2.min.js') }}"></script>
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
</body>

</html>
