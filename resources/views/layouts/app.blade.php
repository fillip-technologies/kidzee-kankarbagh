<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'KIDZEE')</title>
    <link rel="icon" href="data:;base64,=">

    {{-- ✅ Tailwind CSS CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        pink: {
                            50: '#fdf4ff',
                            100: '#ebe1ff',
                            200: '#dcd0ff',
                            300: '#ca9df7',
                            400: '#b46df2',
                            500: '#883cb3',
                            600: '#752b9c',
                            700: '#631d85',
                            800: '#51106e',
                            900: '#3f0657',
                        },
                        purple: {
                            50: '#fdf4ff',
                            100: '#ebe1ff',
                            200: '#dcd0ff',
                            300: '#ca9df7',
                            400: '#b46df2',
                            500: '#883cb3',
                            600: '#752b9c',
                            700: '#631d85',
                            800: '#51106e',
                            900: '#3f0657',
                        },
                        yellow: {
                            50: '#fffbeb',
                            100: '#fefcbd',
                            200: '#fef87c',
                            300: '#fef000',
                            400: '#ffd000',
                            500: '#fef000',
                            600: '#e5cd00',
                            700: '#cca000',
                            800: '#b37800',
                        },
                        amber: {
                            50: '#fffbeb',
                            100: '#fefcbd',
                            200: '#fef87c',
                            300: '#fef000',
                            400: '#ffd000',
                            500: '#fef000',
                            600: '#e5cd00',
                            700: '#cca000',
                            800: '#b37800',
                        },
                        sky: {
                            50: '#f0f7ff',
                            100: '#ebe1ff',
                            200: '#dcd0ff',
                            300: '#b4beff',
                            400: '#883cb3',
                            500: '#752b9c',
                            600: '#631d85',
                        },
                        blue: {
                            50: '#eff6ff',
                            100: '#ebe1ff',
                            200: '#bfdbfe',
                            300: '#93c5fd',
                            400: '#60a5fa',
                            500: '#883cb3',
                            600: '#4a90e2',
                            700: '#1d4ed8',
                        }
                    }
                }
            }
        };
    </script>

    {{-- ✅ Nunito and Fredoka Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Nunito:wght@400;600;700;800&display=swap"
        rel="stylesheet">

    {{-- ✅ Font Awesome (for WhatsApp & Call icons) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyA0xT8UHZ3N2WozvG2G3D9CPr+dx8hjLSezfhBF3/fWV/3cxU2xkB0Dn1U9Qe5e6Xo9a+w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- ✅ Custom CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}?v=1.4">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .title-shadow {
            text-shadow: 2px 2px #fde68a, -2px -2px #fbcfe8;
        }
    </style>
</head>

<body class="bg-gradient-to-b from-[#ebe1ff] to-white">

    <!-- header -->
    @include('components.header')

    {{-- ✅ Page Content --}}
    <div class="min-h-screen">
        @yield('content')
    </div>

    {{-- ✅ Floating WhatsApp + Call Button --}}
    <div class="fixed bottom-20 sm:bottom-8 md:bottom-10 right-6 flex flex-col gap-3 z-50">
        {{-- WhatsApp Button --}}
        <a href="https://wa.me/919693743658" target="_blank"
            class="bg-green-500 hover:bg-green-600 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg">
            <i class="fab fa-whatsapp text-2xl"></i>
        </a>

        {{-- Call Button --}}
        <a href="tel:9693743658"
            class="bg-purple-600 hover:bg-purple-700 text-white w-14 h-14 rounded-full flex items-center justify-center shadow-lg">
            <i class="fas fa-phone text-2xl"></i>
        </a>
    </div>

    <!-- header -->
    @include('components.footer')

    {{-- ✅ Custom JS --}}
    <script src="{{ asset('js/app.js') }}"></script>

    {{-- ✅ Announcement Poster Popup --}}
    <x-poster-popup />
</body>

</html>