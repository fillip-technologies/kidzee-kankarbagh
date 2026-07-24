<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Comic+Neue:wght@400;700&display=swap');



    .faq-container {
        transition: all 0.3s ease;
    }

    .faq-item {
        border-radius: 16px;
        overflow: hidden;
        margin-bottom: 1.5rem;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        background: white;
    }

    .faq-question {
        padding: 1.2rem;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-weight: bold;
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
        padding: 0 1.2rem;
    }

    .faq-active .faq-answer {
        max-height: 500px;
        padding: 1.2rem;
    }

    .faq-active .faq-arrow {
        transform: rotate(180deg);
    }

    .faq-arrow {
        transition: transform 0.3s ease;
    }

    .animal-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-right: 15px;
        flex-shrink: 0;
    }

    .cloud {
        position: absolute;
        border-radius: 50%;
        z-index: -1;
        opacity: 0.8;
        animation: float 8s ease-in-out infinite;
    }

    @keyframes float {

        0%,
        100% {
            transform: translateY(0) translateX(0);
        }

        25% {
            transform: translateY(-10px) translateX(5px);
        }

        50% {
            transform: translateY(-5px) translateX(10px);
        }

        75% {
            transform: translateY(-8px) translateX(5px);
        }
    }

    .header-animal {
        position: absolute;
        font-size: 2.5rem;
        z-index: 5;
    }

    .bounce {
        animation: bounce 2s ease-in-out infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .delay-1 {
        animation-delay: 0.5s;
    }

    .delay-2 {
        animation-delay: 1s;
    }

    .delay-3 {
        animation-delay: 1.5s;
    }
</style>
</head>

<body class="py-8 pt-20">
    <div class="container mx-auto px-4 max-w-4xl relative pt-20">
        <!-- Title Section -->
        <div class="text-center mb-16 relative mt-5">
            <!-- Decorative Animals -->
            <i class="header-animal fa-solid fa-panda-bear text-blue-500 bounce delay-1"
                style="left: 10%; top: -20px;"></i>
            <i class="header-animal fa-solid fa-giraffe text-yellow-500 bounce" style="right: 10%; top: -20px;"></i>
            <i class="header-animal fa-solid fa-kiwi-bird text-pink-500 bounce delay-2"
                style="left: 15%; bottom: -30px;"></i>
            <i class="header-animal fa-solid fa-fish text-blue-400 bounce delay-3"
                style="right: 15%; bottom: -30px;"></i>


            <div class="relative inline-block">
                <h2 class="text-3xl md:text-4xl font-bold text-pink-500 relative z-10">Frequently Asked Questions</h2>
                <div class="absolute -inset-4 bg-yellow-200 rounded-full transform -rotate-3 z-0"></div>
            </div>
        </div>

        <!-- FAQ Items -->
        <div class="faq-container relative z-10">
            <!-- FAQ Item 1 -->
            <div class="faq-item">
                <div class="faq-question text-blue-600 text-xl">
                    <div class="flex items-center">
                        <div class="animal-icon bg-blue-100">
                            <i class="fas fa-panda-bear text-blue-600 text-2xl"></i>
                        </div>
                        <span>What are the school hours?</span>
                    </div>
                    <span class="faq-arrow text-pink-500"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer bg-blue-50 text-blue-800">
                    <p>Our regular school hours are from 8:30 AM to 12:30 PM.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="faq-item">
                <div class="faq-question text-pink-600 text-xl">
                    <div class="flex items-center">
                        <div class="animal-icon bg-pink-100">
                            <i class="fas fa-cat text-pink-600 text-2xl"></i>
                        </div>
                        <span>What is the student-teacher ratio?</span>
                    </div>
                    <span class="faq-arrow text-pink-500"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer bg-pink-50 text-pink-800">
                    <p>We maintain a low student-teacher ratio of 10:1.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <!-- <div class="faq-item">
                <div class="faq-question text-yellow-600 text-xl">
                    <div class="flex items-center">
                        <div class="animal-icon bg-yellow-100">
                            <i class="fas fa-giraffe text-yellow-600 text-2xl"></i>
                        </div>
                        <span>Do you provide meals and snacks?</span>
                    </div>
                    <span class="faq-arrow text-pink-500"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer bg-yellow-50 text-yellow-800">
                    <p>Yes! We provide nutritious morning and afternoon snacks. Parents can choose to pack lunch or
                        purchase our hot lunch program, which offers balanced meals prepared daily.</p>
                </div>
            </div> -->

            <!-- FAQ Item 4 -->
            <div class="faq-item">
                <div class="faq-question text-blue-600 text-xl">
                    <div class="flex items-center">
                        <div class="animal-icon bg-blue-100">
                            <i class="fas fa-fish text-blue-600 text-2xl"></i>
                        </div>
                        <span>What extracurricular activities do you offer?</span>
                    </div>
                    <span class="faq-arrow text-pink-500"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer bg-blue-50 text-blue-800">
                    <p>We offer a variety of extracurricular activities including Dance, Art , Craft
                        and science explorers. Activities vary by season and age group.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="faq-item">
                <div class="faq-question text-pink-600 text-xl">
                    <div class="flex items-center">
                        <div class="animal-icon bg-pink-100">
                            <i class="fas fa-hippo text-pink-600 text-2xl"></i>
                        </div>
                        <span>How do you handle safety and security?</span>
                    </div>
                    <span class="faq-arrow text-pink-500"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer bg-pink-50 text-pink-800">
                    <p>Safety is our top priority. Our campus features secure entry systems, fenced play areas, and all
                        staff are trained in first aid and emergency procedures. We also conduct regular safety drills.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="faq-item">
                <div class="faq-question text-yellow-600 text-xl">
                    <div class="flex items-center">
                        <div class="animal-icon bg-yellow-100">
                            <i class="fas fa-kiwi-bird text-yellow-600 text-2xl"></i>
                        </div>
                        <span>What is your approach to learning?</span>
                    </div>
                    <span class="faq-arrow text-pink-500"><i class="fas fa-chevron-down"></i></span>
                </div>
                <div class="faq-answer bg-yellow-50 text-yellow-800">
                    <p>We use a play-based, child-centered approach that encourages curiosity and creativity. Our
                        curriculum combines structured activities with free play, ensuring development across cognitive,
                        social, emotional, and physical domains.</p>
                </div>
            </div>
        </div>

        <!-- Colorful Clouds -->
        <div class="cloud bg-blue-200" style="width: 100px; height: 40px; top: 40px; left: 40px; animation-delay: 0s;">
        </div>
        <div class="cloud bg-pink-200" style="width: 120px; height: 50px; top: 30px; right: 60px; animation-delay: 1s;">
        </div>
        <div class="cloud bg-yellow-200"
            style="width: 80px; height: 35px; bottom: 40px; left: 100px; animation-delay: 2s;"></div>
        <div class="cloud bg-blue-200"
            style="width: 90px; height: 38px; bottom: 60px; right: 120px; animation-delay: 3s;"></div>
        <div class="cloud bg-pink-200"
            style="width: 110px; height: 45px; top: 120px; left: 200px; animation-delay: 4s;"></div>
        <div class="cloud bg-yellow-200"
            style="width: 95px; height: 42px; top: 180px; right: 200px; animation-delay: 5s;"></div>

        <!-- Footer -->
        <div class="mt-16 text-center text-blue-500 relative z-10">
            <p class="text-lg">Have more questions? Contact us at <span
                    class="text-pink-500 font-bold">kidzee206@kidzee.com</span> or call <span
                    class="text-pink-500 font-bold">9693743658</span></p>
            <div class="mt-6 flex justify-center space-x-4">
                <div class="bg-blue-100 text-blue-600 px-4 py-2 rounded-full">Admissions Open!</div>
                <!-- <div class="bg-pink-100 text-pink-600 px-4 py-2 rounded-full">winter Program Available</div> -->
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                item.classList.toggle('faq-active');
            });
        });
    </script>
</body>