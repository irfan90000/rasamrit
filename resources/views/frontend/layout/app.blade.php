<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="@yield('description')" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <meta content="" name="keywords"> --}}

    <link href="{{ asset('storage/website_setup/' . websiteSetupValue('favicon')) }}" rel="icon">
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    @include('frontend.layout.header')
    @isset($slot)
        {{ $slot }}
    @else
        @yield('content')
    @endisset
    @include('frontend.layout.footer')
    @if (websiteSetupValue('whatsapp'))
        <a href="https://wa.me/+91{{ websiteSetupValue('whatsapp') }}" target="_blank" class="back-to-top"><i
                class="fab fa-whatsapp"></i></a>
    @endif
    <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Experience how we serve you?</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (websiteSetupValue('video'))
                        <div class="ratio ratio-16x9">
                            <iframe id="video" class="embed-responsive-item" src="" allowfullscreen
                                allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    @else
                        <p class="m-0 text-center p-2">No video available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {

         
            var $videoSrc;

            $('.btn-play').click(function() {
                $videoSrc = $(this).data("src");
            });

            $('#videoModal').on('shown.bs.modal', function(e) {
                if ($videoSrc) {
                    var embedUrl = $videoSrc.replace("watch?v=", "embed/").replace("shorts/", "embed/");
                    $("#video").attr('src', embedUrl + "?autoplay=1&modestbranding=1&showinfo=0");
                }
            });

            $('#videoModal').on('hide.bs.modal', function(e) {
                $("#video").attr('src', '');
            });
        });
    </script>
</body>

</html>
