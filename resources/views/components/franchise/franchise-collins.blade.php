<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collins Kids Franchise - No Royalty Model</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #883cb3;
            --secondary: #fef000;
            --accent1: #fef000;
            --accent2: #883cb3;
            --accent3: #ebe1ff;
            --light: #ebe1ff;
            --dark: #3b0764;
        }



        .bg-primary {
            background-color: var(--primary);
        }

        .bg-secondary {
            background-color: var(--secondary);
        }

        .bg-accent1 {
            background-color: var(--accent1);
        }

        .bg-accent2 {
            background-color: var(--accent2);
        }

        .bg-accent3 {
            background-color: var(--accent3);
        }

        .bg-light {
            background-color: var(--light);
        }

        .bg-dark {
            background-color: var(--dark);
        }

        .text-primary {
            color: var(--primary);
        }

        .text-secondary {
            color: var(--secondary);
        }

        .text-accent1 {
            color: var(--accent1);
        }

        .text-accent2 {
            color: var(--accent2);
        }

        .text-accent3 {
            color: var(--accent3);
        }

        .text-light {
            color: var(--light);
        }

        .text-dark {
            color: var(--dark);
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #ff5252;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-secondary {
            background-color: var(--secondary);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background-color: #3ebbb4;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .section-title {
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-title:after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60%;
            height: 4px;
            background-color: var(--accent1);
            border-radius: 2px;
        }

        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border-radius: 12px;
            overflow: hidden;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary) 0%, var(--accent3) 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='100' height='100' viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M11 18c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm48 25c3.866 0 7-3.134 7-7s-3.134-7-7-7-7 3.134-7 7 3.134 7 7 7zm-43-7c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm63 31c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM34 90c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zm56-76c1.657 0 3-1.343 3-3s-1.343-3-3-3-3 1.343-3 3 1.343 3 3 3zM12 86c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm28-65c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm23-11c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-6 60c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm29 22c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zM32 63c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm57-13c2.76 0 5-2.24 5-5s-2.24-5-5-5-5 2.24-5 5 2.24 5 5 5zm-9-21c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM60 91c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM35 41c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2zM12 60c1.105 0 2-.895 2-2s-.895-2-2-2-2 .895-2 2 .895 2 2 2z' fill='%23ffffff' fill-opacity='0.1' fill-rule='evenodd'/%3E%3C/svg%3E");
        }

        .no-royalty-badge {
            background: linear-gradient(45deg, var(--accent1), var(--secondary));
            color: var(--dark);
            font-weight: bold;
            padding: 8px 16px;
            border-radius: 20px;
            display: inline-block;
            margin-bottom: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .comparison-table {
            border-collapse: collapse;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .comparison-table th {
            background-color: var(--accent2);
            color: white;
            padding: 15px;
            text-align: center;
        }

        .comparison-table td {
            padding: 15px;
            text-align: center;
            border-bottom: 1px solid #eee;
        }

        .comparison-table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .checkmark {
            color: var(--secondary);
            font-weight: bold;
        }

        .crossmark {
            color: var(--primary);
            font-weight: bold;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section class="hero-section text-white py-20">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0">
                    <div class="no-royalty-badge">NO ROYALTY FEES</div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">Your Vision. Your Business. Your Profits.</h1>
                    <p class="text-xl mb-6">We've revolutionized the franchise model to put your success first. Keep
                        100% of your hard-earned profits with our unique no-royalty fee structure.</p>
                    <!--<div class="flex flex-wrap gap-4">-->
                    <!--    <button class="btn-primary px-6 py-3 rounded-lg font-semibold text-lg">Apply for Franchise</button>-->
                    <!--    <button class="bg-white text-primary px-6 py-3 rounded-lg font-semibold text-lg">Download Brochure</button>-->
                    <!--</div>-->
                </div>
                <div class="md:w-1/2 flex justify-center">
                    <div class="bg-white rounded-2xl p-2 shadow-2xl transform rotate-3">
                        <img src="{{asset('images/header2.jpeg')}}" alt="Happy children at Collins Kids"
                            class="rounded-xl w-full max-w-md">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- No Royalty Advantage -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-2 section-title">The No Royalty Advantage</h2>
            <p class="text-center text-gray-600 max-w-2xl mx-auto mb-12">Our commitment to a no royalty fee structure
                means you keep 100% of your hard-earned profits.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 rounded-full bg-accent1 flex items-center justify-center mb-4">
                        <i class="fas fa-money-bill-wave text-2xl text-dark"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Maximize Your Earnings</h3>
                    <p class="text-gray-600">Unlike traditional franchises that take a percentage of your revenue, we
                        operate on a one-time franchise fee.</p>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 rounded-full bg-secondary flex items-center justify-center mb-4">
                        <i class="fas fa-chart-line text-2xl text-dark"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">Reinvest in Your Growth</h3>
                    <p class="text-gray-600">With no royalty fees, you have the financial freedom to reinvest directly
                        into your school and staff.</p>
                </div>

                <div class="feature-card bg-white p-6 rounded-xl shadow-md">
                    <div class="w-16 h-16 rounded-full bg-accent3 flex items-center justify-center mb-4">
                        <i class="fas fa-handshake text-2xl text-dark"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-2">True Partnership</h3>
                    <p class="text-gray-600">Our success is tied to your success. We're committed to helping you grow
                        without taking a piece of the pie.</p>
                </div>
            </div>
        </div>
    </section>



    <!-- World-Class Advantage -->
    <section class="py-16 bg-accent2 text-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center mb-2 section-title">World-Class Quality</h2>
            <p class="text-center max-w-2xl mx-auto mb-12">Our brand isn't just a name; it's a promise of excellence
                with a curriculum on par with the best global standards.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
                <div class="bg-dark p-6 rounded-xl">
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-globe-americas mr-3 text-accent1"></i>
                        Globally-Inspired Curriculum
                    </h3>
                    <p class="mb-4">Our learning framework is built on research-backed principles from leading
                        educational philosophies including Montessori, Reggio Emilia, and Waldorf.</p>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent1 mr-2 mt-1"></i>
                            <span>Rich, engaging learning experiences</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent1 mr-2 mt-1"></i>
                            <span>Research-backed methodologies</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent1 mr-2 mt-1"></i>
                            <span>Holistic child development focus</span>
                        </li>
                    </ul>
                </div>

                <div class="bg-dark p-6 rounded-xl">
                    <h3 class="text-xl font-bold mb-4 flex items-center">
                        <i class="fas fa-tools mr-3 text-accent1"></i>
                        Cutting-Edge Resources
                    </h3>
                    <p class="mb-4">Access to a curated library of teaching aids, digital tools, and professionally
                        developed content that keeps your school at the forefront of early childhood education.</p>
                    <ul class="space-y-2">
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent1 mr-2 mt-1"></i>
                            <span>Modern teaching aids</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent1 mr-2 mt-1"></i>
                            <span>Digital learning tools</span>
                        </li>
                        <li class="flex items-start">
                            <i class="fas fa-check text-accent1 mr-2 mt-1"></i>
                            <span>Continuous curriculum updates</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Quotes Section -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <div class="mb-10">
                    <i class="fas fa-quote-left text-4xl text-primary mb-4"></i>
                    <p class="text-2xl italic mb-4">"We rise by lifting others."</p>
                    <p class="font-semibold">— Robert Ingersoll</p>
                </div>

                <div>
                    <i class="fas fa-quote-left text-4xl text-secondary mb-4"></i>
                    <p class="text-2xl italic mb-4">"The best investment you can make is an investment in yourself."</p>
                    <p class="font-semibold">— Warren Buffett</p>
                </div>
            </div>
        </div>
    </section>



    <!-- CTA Section -->
    <section class="py-16 bg-primary text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">Ready to Own a World-Class Play School and Keep 100% of Your Profits?
            </h2>
            <p class="text-xl mb-8 max-w-2xl mx-auto">Contact us today to learn more about our unique no royalty fee
                model and how you can join our network of successful entrepreneurs.</p>

            <div class="flex flex-col md:flex-row justify-center gap-4">
                <button class="btn-secondary px-8 py-3 rounded-lg font-semibold text-lg">Apply Now</button>
                <button class="bg-white text-primary px-8 py-3 rounded-lg font-semibold text-lg">Schedule a
                    Call</button>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 bg-light">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="md:flex">
                    <div class="md:w-1/2 bg-accent2 text-white p-8">
                        <h3 class="text-2xl font-bold mb-4">Get in Touch</h3>
                        <p class="mb-6">Our franchise team will contact you within 24 hours to discuss this unique
                            opportunity.</p>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <i class="fas fa-phone mt-1 mr-3"></i>
                                <div>
                                    <p class="font-semibold">Call Us</p>
                                    <p>+91-0000000000</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-envelope mt-1 mr-3"></i>
                                <div>
                                    <p class="font-semibold">Email Us</p>
                                    <p>kidzee@gmail.com</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <i class="fas fa-map-marker-alt mt-1 mr-3"></i>
                                <div>
                                    <p class="font-semibold">Visit Us</p>
                                    <p> kidzee Play School,<br>
                                        patna,<br>
                                        PATNA 8000024,<br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 p-8">
                        <h3 class="text-2xl font-bold mb-6 text-dark">Franchise Inquiry</h3>
                        <form id="franchiseForm">
                            <div class="space-y-4">
                                <div>
                                    <input type="text" placeholder="Full Name" class="form-input w-full" required>
                                </div>
                                <div>
                                    <input type="email" placeholder="Email Address" class="form-input w-full" required>
                                </div>
                                <div>
                                    <input type="tel" placeholder="Phone Number" class="form-input w-full" required>
                                </div>
                                <div>
                                    <select class="form-input w-full" required>
                                        <option value="">Select Investment Range</option>
                                        <option value="15-20">₹15-20 Lakhs (Standard)</option>
                                        <option value="25-35">₹25-35 Lakhs (Premium)</option>
                                    </select>
                                </div>
                                <div>
                                    <textarea placeholder="Message (Optional)"
                                        class="form-input w-full h-24"></textarea>
                                </div>
                                <button type="submit" class="btn-primary w-full py-3 rounded-lg font-semibold">Submit
                                    Inquiry</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Form submission handler
        document.getElementById('franchiseForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form values
            const name = this.querySelector('input[type="text"]').value;
            const email = this.querySelector('input[type="email"]').value;
            const phone = this.querySelector('input[type="tel"]').value;

            // Simple validation
            if (name && email && phone) {
                alert('Thank you for your interest in Collins Kids! Our franchise team will contact you within 24 hours.');
                this.reset();
            } else {
                alert('Please fill in all required fields.');
            }
        });

        // Apply Now button handlers
        document.querySelectorAll('.btn-primary, .btn-secondary').forEach(button => {
            if (button.textContent.includes('Apply')) {
                button.addEventListener('click', function () {
                    document.getElementById('franchiseForm').scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            }
        });
    </script>
</body>

</html>