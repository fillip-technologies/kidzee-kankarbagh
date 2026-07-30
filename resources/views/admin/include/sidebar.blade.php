 <nav class="mt-6 flex-1 overflow-y-auto">
        <div class="px-4 mb-4">
            <p class="text-xs uppercase text-gray-500 font-medium tracking-wider">Navigation</p>
        </div>

        <!-- <a href="#" class="sidebar-link active flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-chart-line mr-3 text-primary"></i>
            Dashboard
        </a> -->

        <a href="{{ route('admin.slider.index') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-building mr-3 text-blue-500"></i>
            Manage Slider
        </a>

        {{-- <a href="{{ route('admin.notice.index') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-users mr-3 text-green-500"></i>
            Manage  News
        </a> --}}

        {{-- <a href="{{route('admin.event.index')}}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Events
        </a> --}}

        {{-- <a href="{{route('admin.alumni.index')}}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Alumni Show
        </a> --}}

        <a href="{{route('admin.gallery.index')}}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Gallery
        </a>

        {{-- <a href="{{ url('/result') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Result
        </a> --}}

        {{-- <a href="{{route('admin.publications.index')}}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Download Section
        </a> --}}

        {{-- <a href="{{ url('student/transfer') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Transfer Certificate
        </a> --}}

        <!-- <a href="{{ url('/teachers/list') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-blog mr-3 text-indigo-500"></i>
            Manage Our Educators
        </a> -->

        {{-- <a href="{{ route('admin.achievers.index', ['type' => 'academic']) }}"
            class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
                <i class="fas fa-graduation-cap mr-3 text-indigo-500"></i>
                Manage Academic Achiever
        </a> --}}

        {{-- <a href="{{ route('admin.achievers.index', ['type' => 'star']) }}"
            class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
                <i class="fas fa-star mr-3 text-indigo-500"></i>
                Manage Star Achiever
        </a> --}}

        {{-- <div class="px-4 mb-4">
            <p class="text-xs uppercase text-gray-500 font-medium tracking-wider"> All Forms</p>
        </div> --}}
{{--
        <a href="" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-calendar-check mr-3 text-purple-500"></i>
            Alumini Request
        </a> --}}

        {{-- <a href="{{ url('enquery/list') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-tasks mr-3 text-yellow-500"></i>
           Enquiry Forms
        </a> --}}

        <a href="{{ url('career/list') }}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-blue-50 transition">
            <i class="fas fa-tasks mr-3 text-yellow-500"></i>
             Enquiry Forms
        </a>

       <a href="{{route('admin.password.change')}}" class="sidebar-link flex items-center px-6 py-3 text-dark hover:bg-yellow-50 transition">
            <i class="fas fa-cog mr-3 text-gray-500"></i>
            Settings
        </a>
    </nav>
