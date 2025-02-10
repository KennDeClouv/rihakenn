<!DOCTYPE html>
<html data-wf-domain="kenndeclouv.my.id" data-wf-page="654cc7a05cd506180512678f" data-wf-site="64a6bba2e0302dee48f779ae"
    lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Kenn & Rihaa')</title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="{{ asset('assets/img/64ae9ef32581060221e80c19_favicon.svg') }}" rel="shortcut icon" type="image/x-icon">
    <link href="{{ asset('assets/img/64ae9ef6f8cbcbba6b4a06f8_webicon.svg') }}" rel="apple-touch-icon">

    <script defer="" src="{{ asset('assets/vendors/attributes/selectcustom.js') }}"></script>
    <script defer="" src="{{ asset('assets/vendors/attributes/scrolldisable.js') }}"></script>
    <script defer="" src="{{ asset('assets/vendors/attributes/mirrorclick.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    <!-- Split Type Styling -->
    <style>

        [gsap-textscroll-title] {
            display: block;
        }
    </style>
    @yield('style')
</head>

<body>
    <!-- AWWWARDS -->
    {{-- <script src="{{ asset('assets/components/awwwards.js') }}"></script> --}}
    <!-- /AWWWARDS -->
    <!-- PAGE TRANSITION -->
    <div class="pointer-events-off">
        <div class="page-transition_wrapper">
            <div page-transition-time="100" page-transition="component" class="page-transition">
                <div class="page-transition_content">
                    <div class="page-transition_bg"></div>
                    <div data-preserve-aspect-ratio="none" data-is-ix2-target="1" class="page-transition_bg-lottie"
                        data-w-id="b3e32723-1a0d-a92b-bba3-c2ba1df7e219" data-animation-type="lottie"
                        data-src="https://cdn.prod.website-files.com/64a6bba2e0302dee48f779ae/64be2efab2a38d8caecd9341_mhrw-page-transition%20(1).json"
                        data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-duration="0"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /PAGE TRANSITION -->
    <div class="safari-color-theme w-embed">
        <meta name="theme-color" content="#F2EDE9">
    </div>
    <!-- GLOBAL STYLES -->
    <div id="global-styles">
        <script src="{{ asset('assets/js/global-style.js') }}"></script>
    </div>
    <!-- GLOBAL STYLES -->
    <!-- CURSOR -->
    <div class="cursor">
        <div class="cursor-item_group">
            <div custom-cursor-main="true" class="cursor-main"></div>
            <div custom-cursor-item="pointer" class="cursor-item style-pointer"><img
                    src="{{ asset('assets/img/64b7ef0dabfdbc5d91cef6a8_cursor-hand.svg') }}" loading="lazy" alt=""
                    class="cursor-item_img is-pointer"></div>
        </div>

        <div class="cursor-embed w-embed">
            <style>
                /* Pointer Events */
                .cursor {
                    pointer-events: none;
                }

                /* Cursor Visibility */
                @media (pointer: fine) {
                    body:hover .cursor {
                        opacity: 1;
                    }
                }
            </style>
        </div>
    </div>
    @yield('content')
    <!-- JQUERY; GSAP: Libraries, observer, scrollTrigger; LENIS; SPLIT TYPE; SWEETALERT2 -->
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/vendors/gsap/3.11.4/gsap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/3.10.4/Observer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/gsap/3.11.4/ScrollTrigger.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/lenis/lenis.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/split-type/split-type.min.js') }}"></script>
    <script src="{{ asset('assets/js/mhw.js') }}" type="text/javascript"></script>
    {{-- <script type="text/javascript" src="https://player.vimeo.com/api/player.js"></script> --}}
    <!-- APP JS -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('script')
</body>
</html>

<!-- <div class="card-button is-primary">
<div class="card-button_spacing">
  <div custom-cursor-trigger="pointer" class="button is-v2">
    <div class="btn_content">
      <div class="btn-content_wrap">
        <div class="btn-content_spacing">
          <div class="btn-item">
            <div class="btn-item_back is-icon"></div>
            <div class="btn-item_front is-icon is-sand">
              <div class="btn-item_track">
                <div class="btn_item_track-item is-01"><img loading="lazy"
                    src="64a6bba2e0302dee48f779ae/64b65380b595f06019fdd473_icon-arrow.svg"
                    alt="" class="icon-16"></div>
                <div class="btn_item_track-item is-02"><img loading="lazy"
                    src="64a6bba2e0302dee48f779ae/64b65380b595f06019fdd473_icon-arrow.svg"
                    alt="" class="icon-16"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-item">
        <div class="btn-item_back"></div>
        <div class="btn-item_front is-sand">
          <div>lees meer</div>
        </div>
      </div>
    </div>
  </div>
</div>
</div> -->