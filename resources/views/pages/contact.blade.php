@extends('layouts.app')

@section('content')
    <section class="relative py-20 px-6 md:px-20 overflow-hidden">

        <!-- Background Shapes -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-[var(--secondary)] opacity-20 rounded-full blur-3xl -z-10"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-[var(--primary)] opacity-20 rounded-full blur-3xl -z-10"></div>

        <!-- Title -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-gray-800 mb-4">Get in <span
                    class="text-[var(--primary)]">Touch</span></h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
                We would love to hear from you. Reach out to us for admissions, queries, or to schedule a visit.
            </p>
        </div>

        <!-- Contact Container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">

            <!-- Contact Info -->
            <div class="glass-box rounded-3xl p-10 flex flex-col justify-center text-gray-700 shadow-lg">
                <h3 class="text-2xl font-semibold text-[var(--secondary)] mb-6">Our Address & Contact</h3>
                <p class="mb-4">
                    <strong>Address:</strong><br>
                    Kidzee Kids Play School,<br>
                    patna Road,<br>
                    kidzee school Campus,<br>
                    Patna, Bihar
                </p>

                <div class="space-y-5">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[var(--primary)]/20">
                            <i class="fas fa-phone text-[var(--primary)]"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Phone</h4>
                            <p>+91-7808007208, 6204751840</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[var(--secondary)]/20">
                            <i class="fas fa-envelope text-[var(--secondary)]"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Email</h4>
                            <p>kidzee@gmail.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 flex items-center justify-center rounded-full bg-[var(--accent)]/20">
                            <i class="fas fa-clock text-[var(--accent)]"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">School Hours</h4>
                            <p>
                                Monday - Friday: 9:00 AM - 1:00 PM<br>
                                Saturday: Closed for students (Office Open 10:00 AM - 12:00 PM)<br>
                                Sunday: Closed
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-8">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.301607436771!2d85.1640783!3d25.5948922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed589757809975%3A0x44e98f0bd05bce62!2sKidzee%20Chitragupt%20Nagar%20Kankarbagh%20-%20Best%20Pre%20School%20in%20Kankarbagh%20Patna!5e0!3m2!1sen!2sin!4v1783322355905!5m2!1sen!2sin"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div <!-- Contact Form -->
            <div class="glass-box rounded-3xl p-10 shadow-lg">
                <h3 class="text-2xl font-semibold text-[var(--primary)] mb-6">Send Us a Message</h3>
                <form class="space-y-6" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Full Name</label>
                        <input type="text" placeholder="Enter your name" name="fullname"
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-[var(--secondary)] transition">
                        @error('fullname')
                            <span style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Email Address</label>
                        <input type="email" placeholder="Enter your email" name="email"
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-[var(--secondary)] transition">
                        @error('email')
                            <span style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Phone Number</label>
                        <input type="tel" placeholder="Enter your phone number" name="phone"
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-[var(--secondary)] transition">
                        @error('phone')
                            <span style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label class="block text-gray-700 mb-2 font-medium">Message</label>
                        <textarea rows="5" placeholder="Write your message..." name="message"
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-[var(--secondary)] transition"></textarea>
                        @error('message')
                            <span style="color:red;">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full bg-[var(--secondary)] hover:bg-[var(--primary)] transition text-white font-semibold py-3 rounded-xl shadow-md">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </section>

    @if(session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

@endsection