<head>
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap');

        body {
            font-family: 'Nunito', sans-serif;
            background-color: #faf7f5;
            margin: 0;
        }

        header {
            position: sticky;
            top: 0;
            z-index: 50;
        }

        .nav-link {
            position: relative;
            transition: all 0.3s;
        }

        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: #4a90e2;
            transition: width 0.3s;
        }

        .nav-link:hover:after {
            width: 100%;
        }

        /* Dropdown (desktop only) */
        .dropdown {
            position: relative;
        }

        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 200px;
            background: #fff;
            border: 1px solid #eee;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .dropdown-menu a {
            display: block;
            padding: 10px 15px;
            color: #333;
            text-decoration: none;
            transition: background 0.3s;
        }

        .dropdown-menu a:hover {
            background: #fce7f3;
            color: #d63384;
        }

        .dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Arrow rotation for mobile */
        details summary i {
            transition: transform 0.3s;
        }

        details[open] summary i {
            transform: rotate(180deg);
        }

        /* Adjust logo size */
        .logo-img {
            width: 80px;
            height: auto;
        }

        @media (min-width: 1024px) {
            .logo-img {
                width: 100px;
            }
        }

        /* Sticky bottom nav for mobile */
        .mobile-bottom-nav {
            display: none;
        }

        @media (max-width: 1023px) {
            .mobile-bottom-nav {
                display: flex;
                position: fixed;
                bottom: 0;
                left: 0;
                width: 100%;
                background: #fff;
                border-top: 1px solid #ddd;
                justify-content: space-around;
                align-items: center;
                padding: 8px 0;
                box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
                z-index: 9999;
            }

            .mobile-bottom-nav a {
                flex: 1;
                text-align: center;
                color: #555;
                font-size: 12px;
                text-decoration: none;
                display: flex;
                flex-direction: column;
                align-items: center;
                transition: color 0.3s;
            }

            .mobile-bottom-nav a i {
                font-size: 18px;
                margin-bottom: 2px;
            }

            .mobile-bottom-nav a.active,
            .mobile-bottom-nav a:hover {
                color: #d63384;
            }
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <!-- Main navigation -->
        <nav class="container mx-auto px-4 py-2 flex justify-between items-center">
            <a href="{{ route('home') }}" class="flex items-center kidzee-logo-container">
                <img src="{{ asset('gallery/Kidzee-logo.png') }}" alt="Kidzee Logo" class="logo-img object-contain">
                <div class="ml-3">
                    <h1 class="text-2xl md:text-3xl font-extrabold kidzee-logo-text leading-none select-none">
                        <span class="kidzee-wrapper kidzee-wrapper-1"><span class="kidzee-letter">K</span></span>
                        <span class="kidzee-wrapper kidzee-wrapper-2"><span class="kidzee-letter">I</span></span>
                        <span class="kidzee-wrapper kidzee-wrapper-3"><span class="kidzee-letter">D</span></span>
                        <span class="kidzee-wrapper kidzee-wrapper-4"><span class="kidzee-letter">Z</span></span>
                        <span class="kidzee-wrapper kidzee-wrapper-5"><span class="kidzee-letter">E</span></span>
                        <span class="kidzee-wrapper kidzee-wrapper-6"><span class="kidzee-letter">E</span></span>
                    </h1>
                    <p class="text-xs text-gray-600">A pre-primary Play school</p>
                </div>
            </a>


            <!-- Desktop Navigation -->
            <div class="hidden lg:flex space-x-8 items-center">
                <a href="{{ route('home') }}" class="text-gray-700 font-medium nav-link hover:text-blue-600">Home</a>

                <!-- About Us Dropdown -->
                <div class="dropdown">
                    <a href="#" class="text-gray-700 font-medium nav-link hover:text-blue-600 flex items-center">
                        About Us <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('ourstory') }}">Our Story</a>
                        <a href="{{ route('missionvision') }}">Vision & Mission</a>
                        <a href="{{ route('principalmessage') }}">Prinicipal Message</a>
                        <a href="{{ route('directormessage') }}">Director Message</a>
                        <a href="{{ route('team') }}">Our Team</a>
                        <a href="{{ route('admissionenquiry') }}">Admission</a>
                    </div>
                </div>

                <!-- Programs Dropdown -->
                <div class="dropdown">
                    <a href="#" class="text-gray-700 font-medium nav-link hover:text-blue-600 flex items-center">
                        Programs <i class="fas fa-chevron-down ml-1 text-xs"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a href="{{ route('playgroup') }}">Play Group</a>
                        <a href="{{ route('nursery') }}">Nursery</a>
                        <a href="{{ route('kindergartencollins') }}">Kindergarten</a>
                    </div>
                </div>

                <!-- Facilities Dropdown -->
                <div class="dropdown">
                    <a href="{{ route('facilitiescollinskids') }}"
                        class="text-gray-700 font-medium nav-link hover:text-blue-600 flex items-center">
                        Facilities
                    </a>

                </div>

                <a href="{{route('gallerycollins')}}"
                    class="text-gray-700 font-medium nav-link hover:text-blue-600">Gallery</a>
                <!-- <a href="{{ route('franchise') }}"
                    class="text-gray-700 font-medium nav-link hover:text-blue-600">Franchise</a> -->
                <a href="{{ route('contact') }}"
                    class="text-gray-700 font-medium nav-link hover:text-blue-600">Contact</a>

                <button class="bg-pink-600 text-white font-medium py-2 px-6 rounded-lg">
                    Enroll Now
                </button>
            </div>

            <!-- Mobile menu button -->
            <div class="lg:hidden">
                <button id="menu-toggle" class="text-blue-600 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Drawer Menu -->
        <div id="mobile-drawer"
            class="fixed top-0 left-0 h-full w-64 bg-white shadow-lg transform -translate-x-full transition-transform duration-300 ease-in-out z-[9999] lg:hidden">
            <div class="p-6 space-y-4 relative">
                <!-- Close Button -->
                <button id="close-drawer" class="text-gray-600 text-2xl absolute top-4 right-4">
                    <i class="fas fa-times"></i>
                </button>

                <a href="{{ route('home') }}" class="block py-2 text-gray-700 font-medium hover:text-blue-600">Home</a>

                <details>
                    <summary
                        class="py-2 text-gray-700 font-medium cursor-pointer hover:text-blue-600 flex items-center justify-between">
                        About Us <i class="fas fa-chevron-down text-xs"></i>
                    </summary>
                    <div class="pl-4 space-y-1">
                        <a href="{{ route('ourstory') }}" class="block text-gray-600">Our Story</a>
                        <a href="{{ route('missionvision') }}" class="block text-gray-600">Vision & Mission</a>
                        <a href="{{ route('principalmessage') }}">Prinicipal Message</a>
                        <a href="{{ route('directormessage') }}">Director Message</a>
                        <a href="{{ route('team') }}" class="block text-gray-600">Our Team</a>
                        <a href="{{ route('admissionenquiry') }}">Admission</a>
                    </div>
                </details>

                <details>
                    <summary
                        class="py-2 text-gray-700 font-medium cursor-pointer hover:text-blue-600 flex items-center justify-between">
                        Programs <i class="fas fa-chevron-down text-xs"></i>
                    </summary>
                    <div class="pl-4 space-y-1">
                        <a href="{{ route('playgroup') }}" class="block text-gray-600">Play Group</a>
                        <a href="{{ route('nursery') }}" class="block text-gray-600">Nursery</a>
                        <a href="{{ route('kindergartencollins') }}" class="block text-gray-600">Kindergarten</a>
                    </div>
                </details>

                <!--<details>-->
                <!--    <summary-->
                <!--        class="py-2 text-gray-700 font-medium cursor-pointer hover:text-blue-600 flex items-center justify-between">-->
                <!--        Facilities <i class="fas fa-chevron-down text-xs"></i>-->
                <!--    </summary>-->
                <!--    <div class="pl-4 space-y-1">-->
                <!--        <a href="#" class="block text-gray-600">Play Area</a>-->
                <!--        <a href="#" class="block text-gray-600">Smart Classroom</a>-->
                <!--        <a href="#" class="block text-gray-600">Transport</a>-->
                <!--    </div>-->
                <!--</details>-->

                <a href="{{ route('facilitiescollinskids') }}"
                    class="block py-2 text-gray-700 font-medium hover:text-blue-600">Facilities</a>

                <a href="{{route('gallerycollins')}}"
                    class="block py-2 text-gray-700 font-medium hover:text-blue-600">Gallery</a>
                <a href="{{ route('franchise') }}"
                    class="block py-2 text-gray-700 font-medium hover:text-blue-600">Franchise</a>
                <a href="{{ route('contact') }}"
                    class="block py-2 text-gray-700 font-medium hover:text-blue-600">Contact</a>

                <button class="mt-4 bg-pink-600 text-white font-medium py-2 px-6 rounded-lg w-full">
                    Enroll Now
                </button>
            </div>
        </div>

        <!-- Mobile Bottom Nav -->
        <nav class="mobile-bottom-nav">
            <a href="{{ route('home') }}" class="active"><i class="fas fa-home"></i>Home</a>
            <a href="{{ route('ourstory') }}"><i class="fas fa-users"></i>About</a>
            <!-- <a href="{{ route('franchise') }}"><i class="fas fa-chalkboard-teacher"></i>Franchise</a> -->
            <a href="{{route('gallerycollins')}}"><i class="fas fa-image"></i>Gallery</a>


        </nav>
    </header>

    <script>
        const menuToggle = document.getElementById('menu-toggle');
        const drawer = document.getElementById('mobile-drawer');
        const closeDrawer = document.getElementById('close-drawer');

        // Open drawer
        menuToggle.addEventListener('click', () => {
            drawer.classList.remove('-translate-x-full');
        });

        // Close drawer
        closeDrawer.addEventListener('click', () => {
            drawer.classList.add('-translate-x-full');
        });

        // Close if clicked outside
        document.addEventListener('click', (event) => {
            if (!drawer.contains(event.target) && !menuToggle.contains(event.target)) {
                drawer.classList.add('-translate-x-full');
            }
        });
    </script>
</body>