<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Kidzee</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    {{-- ✅ Custom CSS --}}


</head>

<body>

    <x-banner title="Kidzee Kankarbagh"
        para1="At Kidzee Kankarbagh, we nurture young minds through a perfect blend of love, care, creativity, and experiential learning. Our child-friendly campus, engaging activities, and dedicated educators create a happy environment where every child learns, explores, and grows with confidence."
        para2="Our classrooms are fully air-conditioned, ensuring comfort in every season, and equipped with the latest Smart Boards and Smart Class facilities to make learning interactive, engaging, and fun. With CCTV surveillance across the campus, we guarantee a safe and secure atmosphere for every child, giving parents complete peace of mind."
        secondImage="child-removebg-preview.png" />


    <!-- Two Column Section -->
    <section class="py-16 px-4 md:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Image Column -->
                <div class="fade-in">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <!-- Placeholder for image - using gradient as placeholder -->
                        <div
                            class="h-96 md:h-[500px] flex items-center justify-center bg-light-pink relative rounded-2xl overflow-hidden shadow-lg">
                            <!-- Background image -->
                            <img src="{{ asset('gallery/kidzee-4.jpeg') }}" alt="Kidzee Campus"
                                class="absolute inset-0 w-full h-full object-cover opacity-70">

                            <!-- Overlay content -->
                            <div class="relative text-center p-8 text-white">
                                <h3
                                    class="text-3xl md:text-4xl font-bold mb-2 bg-clip-text text-transparent bg-gradient-to-r from-[var(--primary)] to-[var(--secondary)]">
                                    Kidzee Campus
                                </h3>
                                <p class="text-lg md:text-xl">Our vibrant learning environment</p>
                            </div>
                        </div>


                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -left-4 w-24 h-24 rounded-full bg-[var(--accent1)]/30 z-0"></div>
                        <div class="absolute -bottom-4 -right-4 w-32 h-32 rounded-full bg-[var(--accent3)]/30 z-0">
                        </div>
                    </div>
                </div>

                <!-- About Content Column -->
                <div class="fade-in">
                    <h2 class="text-3xl font-bold mb-6">Our <span class="highlight-primary">Story</span></h2>
                    <p class="text-lg mb-4">At Kidzee Kankarbagh, we believe that the foundation years are the most
                        important
                        in shaping a child’s personality, creativity, and love for learning. Through playful activities,
                        innovative teaching methods, and personalized care, we create the perfect blend of learning and
                        enjoyment.</p>

                    <p class="text-lg mb-4">Recognized among the top schools in Patna, Kidzee School now brings its
                        trusted excellence to early childhood education with Kidzee World – truly one of the best places
                        for children to grow, learn, and shine.</p>

                    <p class="text-lg mb-4"> Here, every child is encouraged to explore, imagine, and develop essential
                        life skills that prepare them for a bright academic future.</p>



                    <!-- <p class="text-lg mb-6">Her philosophy was simple: <span
                            class="font-semibold highlight-accent2">"Where Little Steps Lead to Big Dreams."</span> </p> -->




                </div>
            </div>
        </div>
    </section>


</body>

</html>