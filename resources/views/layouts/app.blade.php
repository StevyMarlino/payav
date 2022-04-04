<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ auth()->user()->name .' Homepage' }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <!-- Nucleo Icons -->
        <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
        <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet"/>
        <!-- CSS Files -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link href="{{ asset('assets/css/chartist.min.css') }}" rel="stylesheet"/>
        <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.min.css') }}">

        <script src="https://unpkg.com/feather-icons"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        <wireui:scripts />
        <script src="//unpkg.com/alpinejs" defer></script>

        <style type="text/css">
            .profile-sm {
                height: 32px;
                width: 32px;
            }

            .iti__flag {
                background-image: url("{{ asset('build/img/flags.png') }}");
            }

            @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
                .iti__flag {
                    background-image: url("{{ asset('build/img/flags@2x.png') }}");
                }
            }

            .hide {
                display: none;
            }
        </style>
    </head>
    <body class="font-sans antialiased" style="background-color: #f8f9fa;">
        <x-jet-banner></x-jet-banner>

        {{-- Side Menu nav component --}}

{{--       @if(!request()->routeIs('profile.show'))  @endif--}}

        <div class="">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-2.5 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        <!--   Core JS Files   -->
        <script src="{{ asset('assets/js/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/perfect-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/smooth-scrollbar.min.js') }}"></script>
        <script src="{{ asset('assets/js/chartist.min.js') }}"></script>
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="{{ asset('build/js/intlTelInput.js') }}"></script>

        <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset('assets/js/soft-ui-dashboard.min.js') }}?v=1.0.3"></script>
        <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>


        @livewireScripts
        @wireUiScripts
        <script src="//unpkg.com/alpinejs" defer></script>
        @yield('js')

    </body>
</html>
