<?php include('app/db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mountenna Group - Empowering Futures, Driving Growth</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- New Font Imports -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Parkinsans:wght@300..800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://unpkg.com/img-comparison-slider@8/dist/index.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/img-comparison-slider@8/dist/style.css" />

    <?php include "tsconfig.php" ?>

    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-screen bg-white">
    <?php include "nav.php" ?>

    <!-- Hero Slider -->
    <div class="relative h-[60vh] min-h-[500px] overflow-hidden">
        <!-- Slide Container -->
        <div id="slider-container" class="relative w-full h-full">

            <!-- Slide 1: Education -->
            <div class="slide active absolute inset-0 bg-cover bg-center" style="background-image: url('img/sl3.jpg');">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative z-10 h-full flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-3xl text-white space-y-8 animate-fade-in-up">
                            <div class="space-y-4">
                                <span
                                    class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium font-sans">Mountenna
                                    Edu</span>
                                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight font-heading">
                                    Shaping Academic Futures</h1>
                                <p class="text-xl lg:text-2xl text-gray-100 font-sans">Your trusted partner in
                                    navigating UK higher education and unlocking your potential.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button onclick="scrollToSection('divisions')"
                                    class="bg-white text-navy-900 hover:bg-gray-100 px-8 py-4 text-lg font-semibold shadow-xl rounded-lg transition-all duration-300">
                                    Explore The opportunities <i class="fas fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2: Technology -->
            <div class="slide absolute inset-0 bg-cover bg-center" style="background-image: url('img/sl1.jpg');">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative z-10 h-full flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-3xl text-white space-y-8">
                            <div class="space-y-4">
                                <span
                                    class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium font-sans">Mountenna
                                    Tech</span>
                                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight font-heading">
                                    Building Digital Innovation</h1>
                                <p class="text-xl lg:text-2xl text-gray-100 font-sans">Delivering cutting-edge software
                                    solutions that drive growth and efficiency.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button onclick="scrollToSection('divisions')"
                                    class="bg-white text-navy-900 hover:bg-gray-100 px-8 py-4 text-lg font-semibold shadow-xl rounded-lg transition-all duration-300">
                                    Discover Our Solutions <i class="fas fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3: Recruitment -->
            <div class="slide absolute inset-0 bg-cover bg-center" style="background-image: url('img/sl2.jpg');">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative z-10 h-full flex items-center">
                    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="max-w-3xl text-white space-y-8">
                            <div class="space-y-4">
                                <span
                                    class="bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-medium font-sans">Mountenna
                                    Recruitment</span>
                                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight font-heading">
                                    Connecting Top Talent</h1>
                                <p class="text-xl lg:text-2xl text-gray-100 font-sans">Bridging the gap between
                                    exceptional professionals and leading organizations.</p>
                            </div>
                            <div class="flex flex-col sm:flex-row gap-4">
                                <button onclick="scrollToSection('divisions')"
                                    class="bg-white text-navy-900 hover:bg-gray-100 px-8 py-4 text-lg font-semibold shadow-xl rounded-lg transition-all duration-300">
                                    Find Your Next Role <i class="fas fa-arrow-right ml-2"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation arrows -->
        <button onclick="prevSlide()"
            class="absolute left-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-200 z-20">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button onclick="nextSlide()"
            class="absolute right-4 top-1/2 transform -translate-y-1/2 w-12 h-12 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center text-white hover:bg-white/30 transition-all duration-200 z-20">
            <i class="fas fa-chevron-right"></i>
        </button>

        <!-- Slide indicators -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex space-x-3 z-20">
            <button onclick="goToSlide(0)"
                class="slide-indicator w-3 h-3 rounded-full transition-all duration-300"></button>
            <button onclick="goToSlide(1)"
                class="slide-indicator w-3 h-3 rounded-full transition-all duration-300"></button>
            <button onclick="goToSlide(2)"
                class="slide-indicator w-3 h-3 rounded-full transition-all duration-300"></button>
        </div>
    </div>

    <!-- Divisions Section -->
    <section id="divisions" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-16">
                <!-- Header -->
                <div class="text-center max-w-4xl mx-auto">
                    <div class="inline-block mb-4">
                        <span class="bg-royal-100 text-royal-800 px-4 py-2 rounded-full text-sm font-semibold">
                            Our Specialized Divisions
                        </span>
                    </div>
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6 gradient-text">
                        Three Pillars of Excellence
                    </h2>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Each division represents our commitment to specialized expertise, delivering tailored solutions
                        that drive measurable results across Education, Technology, and Recruitment sectors.
                    </p>
                </div>

                <!-- Divisions Grid -->
                <div class="grid lg:grid-cols-3 gap-8 items-stretch">

                    <!-- Education Division Card -->
                    <div
                        class="bg-white shadow-lg border border-gray-100 rounded-2xl overflow-hidden card-hover group flex flex-col">
                        <!-- White Top Section -->
                        <div class="p-8">
                            <a href="https://mountennaedu.co.uk/" target="_blank" rel="noopener noreferrer"
                                class="block h-32 flex items-center justify-center mb-4">
                                <img src="img/s1.png" alt="Mountenna Edu Logo" class="h-30 w-auto">
                            </a>
                            <p class="text-navy-700 font-semibold text-lg mb-2">Shaping Academic Futures</p>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Empowering students with pathway programs, university admissions support, and
                                comprehensive educational consultancy services.
                            </p>
                        </div>

                        <div class="p-8 flex flex-col flex-grow bg-gray-50/50 border-t border-gray-100">
                            <!-- Services List -->
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-university text-lg text-navy-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">University Admissions</h4>
                                        <p class="text-xs text-gray-500">Expert guidance for top UK universities</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-users text-lg text-navy-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Pathway Programs</h4>
                                        <p class="text-xs text-gray-500">Foundation and pre-masters courses</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-book text-lg text-navy-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Academic Support</h4>
                                        <p class="text-xs text-gray-500">Tutoring and study assistance</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow"></div>

                            <a href="mountenna-edu.php"
                                class="block w-full text-center bg-gradient-to-r from-navy-600 to-royal-600 hover:from-navy-700 hover:to-royal-700 text-white py-3 rounded-lg font-semibold transition-all duration-300">
                                Learn More <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Technology Division Card -->
                    <div
                        class="bg-white shadow-lg border border-gray-100 rounded-2xl overflow-hidden card-hover group flex flex-col">
                        <!-- White Top Section -->
                        <div class="p-8">
                            <a href="http://mountennatech.co.uk/" target="_blank" rel="noopener noreferrer"
                                class="block h-32 flex items-center justify-center mb-4">
                                <img src="img/s2.png" alt="Mountenna Group Logo" class="h-30 w-auto">
                            </a>
                            <p class="text-royal-700 font-semibold text-lg mb-2">Digital Innovation Partners</p>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Delivering cutting-edge technology solutions, custom software development, and digital
                                transformation services.
                            </p>
                        </div>

                        <div class="p-8 flex flex-col flex-grow bg-gray-50/50 border-t border-gray-100">
                            <!-- Services List -->
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-mobile-alt text-lg text-royal-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Software Development</h4>
                                        <p class="text-xs text-gray-500">Custom applications and platforms</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-database text-lg text-royal-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Digital Solutions</h4>
                                        <p class="text-xs text-gray-500">Data management and analytics</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-cloud text-lg text-royal-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Cloud Services</h4>
                                        <p class="text-xs text-gray-500">Migration and infrastructure</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow"></div>

                            <a href="mountenna-tech.php" target="_blank" rel="noopener noreferrer"
                                class="block w-full text-center bg-gradient-to-r from-royal-600 to-teal-600 hover:from-royal-700 hover:to-teal-700 text-white py-3 rounded-lg font-semibold transition-all duration-300">
                                Learn More<i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Recruitment Division Card -->
                    <div
                        class="bg-white shadow-lg border border-gray-100 rounded-2xl overflow-hidden card-hover group flex flex-col">
                        <!-- White Top Section -->
                        <div class="p-8">
                            <a href="http://mountennarecruitment.co.uk/" target="_blank" rel="noopener noreferrer"
                                class="block h-32 flex items-center justify-center mb-4">
                                <img src="img/s3.png" alt="Mountenna Recruitment Logo" class="h-30 w-auto">
                            </a>
                            <p class="text-teal-700 font-semibold text-lg mb-2">Connecting Excellence</p>
                            <p class="text-gray-600 leading-relaxed text-sm">
                                Bridging the gap between exceptional talent and leading organizations through strategic
                                recruitment solutions.
                            </p>
                        </div>

                        <div class="p-8 flex flex-col flex-grow bg-gray-50/50 border-t border-gray-100">
                            <!-- Services List -->
                            <div class="space-y-4 mb-6">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-search text-lg text-teal-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Executive Search</h4>
                                        <p class="text-xs text-gray-500">C-level and senior management roles</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-bullseye text-lg text-teal-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Talent Acquisition</h4>
                                        <p class="text-xs text-gray-500">Specialized recruitment services</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-heart text-lg text-teal-600 mt-1 w-5 text-center"></i>
                                    <div>
                                        <h4 class="font-semibold text-sm text-gray-800">Career Placement</h4>
                                        <p class="text-xs text-gray-500">Professional development support</p>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-grow"></div>

                            <a href="mountenna-recruitment.php" target="_blank" rel="noopener noreferrer"
                                class="block w-full text-center bg-gradient-to-r from-teal-600 to-gold-600 hover:from-teal-700 hover:to-gold-700 text-white py-3 rounded-lg font-semibold transition-all duration-300">
                                Learn More <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-gradient-to-br from-gray-50 to-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="space-y-20">

                <!-- About Text & Video Section -->
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Left Side: Text Content -->
                    <div>
                        <div class="inline-block mb-4">
                            <span
                                class="bg-navy-100 text-navy-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                                About Mountenna Group
                            </span>
                        </div>
                        <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                            Building Futures, Creating Success Stories
                        </h2>
                        <p class="text-xl text-gray-700 leading-relaxed font-sans mb-6">
                            For over a decade, we've been the catalyst for transformation, connecting dreams with
                            reality through our expertise in education, technology, and recruitment. Our journey is
                            defined by the success of those we serve.
                        </p>
                        <p class="font-sans text-gray-600 leading-relaxed">
                            We believe in a partnership approach, taking the time to understand your unique goals and
                            crafting tailored strategies to help you achieve them. Watch our story to learn more about
                            our commitment to excellence.
                        </p>
                    </div>

                    <!-- Right Side: YouTube Video -->
                    <div>
                        <div
                            class="aspect-w-16 aspect-h-9 rounded-2xl shadow-2xl overflow-hidden border-4 border-white">
                            <!-- Replace 'YOUR_YOUTUBE_VIDEO_ID' with your actual video ID -->
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen class="w-full h-full">
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Mission, Vision, Values -->
                <div class="grid lg:grid-cols-3 gap-8">
                    <div
                        class="bg-white shadow-lg border border-gray-100 rounded-xl p-8 card-hover text-center group relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-navy-500 to-royal-600 opacity-0 group-hover:opacity-5 transition-opacity duration-500">
                        </div>
                        <div class="relative z-10">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-navy-500 to-royal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 icon-hover shadow-lg">
                                <i class="fas fa-bullseye text-white text-2xl"></i>
                            </div>
                            <h3
                                class="text-2xl font-bold font-heading mb-4 group-hover:text-navy-700 transition-colors duration-300">
                                Our Mission
                            </h3>
                            <p
                                class="text-gray-600 font-sans leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                To empower individuals and organizations to achieve their full potential through
                                innovative solutions in education, technology, and recruitment.
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-white shadow-lg border border-gray-100 rounded-xl p-8 card-hover text-center group relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-royal-500 to-teal-600 opacity-0 group-hover:opacity-5 transition-opacity duration-500">
                        </div>
                        <div class="relative z-10">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-royal-500 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-6 icon-hover shadow-lg">
                                <i class="fas fa-star text-white text-2xl"></i>
                            </div>
                            <h3
                                class="text-2xl font-bold font-heading mb-4 group-hover:text-navy-700 transition-colors duration-300">
                                Our Vision
                            </h3>
                            <p
                                class="text-gray-600 font-sans leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                To be the most trusted partner in shaping futures, driving growth, and creating lasting
                                positive impact in communities worldwide.
                            </p>
                        </div>
                    </div>

                    <div
                        class="bg-white shadow-lg border border-gray-100 rounded-xl p-8 card-hover text-center group relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-gradient-to-br from-teal-500 to-gold-600 opacity-0 group-hover:opacity-5 transition-opacity duration-500">
                        </div>
                        <div class="relative z-10">
                            <div
                                class="w-20 h-20 bg-gradient-to-br from-teal-500 to-gold-600 rounded-2xl flex items-center justify-center mx-auto mb-6 icon-hover shadow-lg">
                                <i class="fas fa-heart text-white text-2xl"></i>
                            </div>
                            <h3
                                class="text-2xl font-bold font-heading mb-4 group-hover:text-navy-700 transition-colors duration-300">
                                Our Values
                            </h3>
                            <p
                                class="text-gray-600 font-sans leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
                                Integrity, Excellence, Innovation, Empowerment, and Client-centricity guide every
                                decision we make and relationship we build.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Mountenna Group Section -->
    <section id="why-us" class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-navy-100 text-navy-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Our Core Strengths
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    Why Choose Mountenna Group?
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    We are more than a service provider; we are your dedicated partner in growth. Our foundation is
                    built on principles that ensure your success.
                </p>
            </div>

            <!-- Animated Cards Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1: Trust -->
                <div
                    class="group p-8 bg-royal-50 border border-royal-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-white border border-royal-200 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-shield-alt text-3xl text-royal-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Unwavering Trust</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        Our relationships are built on a foundation of integrity and transparency, ensuring you have a
                        reliable partner every step of the way.
                    </p>
                </div>

                <!-- Card 2: Innovation -->
                <div
                    class="group p-8 bg-teal-50 border border-teal-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-white border border-teal-200 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-3xl text-teal-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Driven by Innovation</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        We constantly adapt and innovate, leveraging the latest technologies and strategies to provide
                        you with forward-thinking solutions.
                    </p>
                </div>

                <!-- Card 3: Proven Results -->
                <div
                    class="group p-8 bg-gold-50 border border-gold-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-white border border-gold-200 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-trophy text-3xl text-gold-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Proven Results</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        Our success is measured by yours. We have a track record of delivering tangible, impactful
                        results for our clients and partners.
                    </p>
                </div>

                <!-- Card 4: Global Reach -->
                <div
                    class="group p-8 bg-red-50 border border-red-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-white border border-red-200 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-globe-americas text-3xl text-red-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Global Reach</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        With a worldwide network and perspective, we connect you to global opportunities and talent,
                        broadening your horizons.
                    </p>
                </div>

                <!-- Card 5: Client-Centricity -->
                <div
                    class="group p-8 bg-purple-50 border border-purple-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-white border border-purple-200 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-users text-3xl text-purple-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Client-Centric Approach</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        Your goals are our priority. We offer personalized service and tailored strategies to meet your
                        unique needs and aspirations.
                    </p>
                </div>

                <!-- Card 6: Expert Team -->
                <div
                    class="group p-8 bg-green-50 border border-green-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div
                        class="w-16 h-16 bg-white border border-green-200 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-user-tie text-3xl text-green-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Expert Team</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        Our team of industry experts brings years of experience and deep knowledge to guide you toward
                        success.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Goals & Commitment Section -->
    <section id="goals" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-teal-100 text-teal-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Our Goal
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    Shaping the Future Together
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    Our commitment extends beyond services. We are dedicated to fostering growth, empowering
                    communities, and building a sustainable future through clear and actionable goals.
                </p>
            </div>

            <!-- Animated Infographics Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Goal 1: Empowering Talent -->
                <div class="text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 card-hover">
                    <div class="w-20 h-20 bg-navy-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-user-graduate text-4xl text-navy-600"></i>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3 text-navy-900">Empowering Talent</h3>
                    <p class="text-gray-600 font-sans leading-relaxed text-sm">
                        To connect over 10,000 students and professionals with life-changing opportunities by 2030.
                    </p>
                </div>

                <!-- Goal 2: Driving Innovation -->
                <div class="text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 card-hover">
                    <div class="w-20 h-20 bg-royal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-rocket text-4xl text-royal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3 text-navy-900">Driving Innovation</h3>
                    <p class="text-gray-600 font-sans leading-relaxed text-sm">
                        To launch and support 50+ tech startups, fostering a new generation of digital pioneers.
                    </p>
                </div>

                <!-- Goal 3: Sustainable Growth -->
                <div class="text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 card-hover">
                    <div class="w-20 h-20 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-leaf text-4xl text-teal-600"></i>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3 text-navy-900">Sustainable Growth</h3>
                    <p class="text-gray-600 font-sans leading-relaxed text-sm">
                        To achieve carbon-neutral operations across all divisions, promoting a greener future.
                    </p>
                </div>

                <!-- Goal 4: Community Impact -->
                <div class="text-center p-8 bg-white rounded-2xl shadow-lg border border-gray-100 card-hover">
                    <div class="w-20 h-20 bg-gold-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-hands-helping text-4xl text-gold-600"></i>
                    </div>
                    <h3 class="text-xl font-bold font-heading mb-3 text-navy-900">Community Impact</h3>
                    <p class="text-gray-600 font-sans leading-relaxed text-sm">
                        To invest 5% of our annual profits into educational grants and community development projects.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <section id="gallery" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-royal-100 text-royal-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Our Gallery
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    Moments We Cherish
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    A glimpse into our vibrant culture, collaborative events, and the milestones we've achieved together.
                </p>
            </div>

            <div class="swiper myGallerySwiper">
                <div class="swiper-wrapper">
                    <?php


                    $gallery = $mysqli->query("SELECT * FROM gallery_images");


                    // Fetch and display the titles
                    while ($row = $gallery->fetch_assoc()):

                    ?>
                        <div class="swiper-slide">
                            <div class="group relative overflow-hidden rounded-2xl shadow-lg h-80">
                                <img src="app/g_images/<?php echo ($row['g_image']) ?>" alt="Team Collaboration" class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-105">

                            </div>
                        </div>
                    <?php endwhile; ?>


                </div>

                <!-- <div class="flex items-center justify-center mt-8 space-x-6">
                    <div class="swiper-button-prev static w-12 h-12 after:text-base"></div>
                    <div class="swiper-pagination !static !w-auto"></div>
                    <div class="swiper-button-next static w-12 h-12 after:text-base"></div>
                </div> -->
            </div>
        </div>
    </section>







    <!-- Testimonials Section -->
    <section id="testimonials" class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-royal-100 text-royal-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Client Voices
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    What Our Partners Say
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    Real stories from students, businesses, and professionals who have achieved their goals with
                    Mountenna Group.
                </p>
            </div>

            <!-- Testimonial Carousel -->
            <div class="relative max-w-4xl mx-auto">
                <div id="testimonial-slider" class="overflow-hidden">
                    <div id="testimonial-track" class="flex transition-transform duration-500 ease-in-out">
                        <?php


                        $testimonial = $mysqli->query("SELECT * FROM testimonials");


                        // Fetch and display the titles
                        while ($row = $testimonial->fetch_assoc()):

                        ?>
                            <!-- Testimonial 1: Student -->
                            <div class="testimonial-slide flex-shrink-0 w-full p-4">
                                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-8 md:p-12 text-center">
                                    <img src="app/testimonial_image/<?php echo ($row['t_image']) ?>"
                                        alt="Portrait of Aisha Khan" class="w-24 h-24 rounded-full mx-auto mb-6 shadow-lg">
                                    <div class="flex justify-center text-yellow-400 mb-4">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <blockquote
                                        class="text-lg font-sans italic text-gray-700 leading-relaxed max-w-2xl mx-auto">
                                        <?php echo ($row['t_des']) ?>
                                    </blockquote>
                                    <div class="mt-6">
                                        <p class="font-heading font-bold text-lg text-navy-900"><?php echo ($row['t_name']) ?></p>
                                        <p class="font-sans text-sm text-gray-500"><?php echo ($row['t_desgination']) ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>

                <!-- Carousel Navigation -->
                <button onclick="prevTestimonial()"
                    class="absolute top-1/2 left-0 -translate-y-1/2 -translate-x-8 w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chevron-left"></i>
                </button>
                <button onclick="nextTestimonial()"
                    class="absolute top-1/2 right-0 -translate-y-1/2 translate-x-8 w-12 h-12 bg-white rounded-full shadow-md flex items-center justify-center text-gray-600 hover:bg-gray-100 transition-colors">
                    <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>






    <!-- Blog Section -->
    <section id="blog" class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-teal-100 text-teal-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Our Insights
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    From Our Blog
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    Stay informed with the latest trends, expert advice, and success stories from the worlds of
                    education, technology, and recruitment.
                </p>
            </div>

            <!-- Blog Posts Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php


                $blog = $mysqli->query("SELECT * FROM blogs ORDER BY id DESC LIMIT 3");



                // Fetch and display the titles
                while ($row = $blog->fetch_assoc()):

                ?>
                    <!-- Blog Post 1: Education -->
                    <div
                        class="group bg-white rounded-2xl shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:shadow-2xl hover:-translate-y-2 flex flex-col">
                        <div class="overflow-hidden">
                            <a href="#">
                                <img src="app/blogImage/<?php echo ($row['b_image']) ?>"
                                    alt="A student studying in a modern library"
                                    class="w-full h-56 object-cover transition-transform duration-300 group-hover:scale-105">
                            </a>
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div>
                                <span
                                    class="inline-block bg-royal-100 text-royal-800 text-xs font-semibold font-sans px-3 py-1 rounded-full mb-4"><?php echo ($row['b_category']) ?></span>
                                <a href="#" class="block">
                                    <h3
                                        class="font-heading text-xl font-bold text-navy-900 mb-3 group-hover:text-royal-600 transition-colors">
                                        <?php echo ($row['b_title']) ?></h3>
                                </a>
                                <p class="font-sans text-gray-600 text-sm leading-relaxed mb-4">
                                    <?php echo ($row['b_des']) ?>
                                </p>
                            </div>
                            <div class="flex-grow"></div>
                            <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                                <div class="flex items-center">
                                    <img src="https://placehold.co/40x40/f0f4f8/334e68?text=EJ" alt="Author Emily Jones"
                                        class="w-8 h-8 rounded-full mr-3">
                                    <span class="font-sans text-xs text-gray-500"><?php echo ($row['b_author']) ?></span>
                                </div>
                                <a href="blog-details.php?blog_id=<?php echo ($row['id']) ?>" class="font-sans text-sm font-semibold text-royal-600 hover:text-navy-900">
                                    Read More <i class="fas fa-arrow-right ml-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>

            </div>
        </div>
    </section>


    <!-- Partners & Accreditations Section -->
    <section id="partners" class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Section Header -->
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-navy-100 text-navy-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Our Network
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    Partners & Accreditations
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    We are proud to collaborate with a network of esteemed universities, leading technology firms, and
                    accredited bodies to deliver excellence.
                </p>
            </div>

            <!-- Scrolling Marquee -->
            <div class="marquee-container group">
                <div class="marquee-track group-hover:pause-animation">
                    <!-- First set of logos -->
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=University+A"
                            alt="Partner University A"></a>
                    <a href="#" class="logo-item"><img src="https://placehold.co/200x100/f0f4f8/627d98?text=Tech+Firm+B"
                            alt="Partner Tech Firm B"></a>
                    <a href="#" class="logo-item"><img src="https://placehold.co/200x100/f0f4f8/627d98?text=NHS+Trust"
                            alt="NHS Trust Partner"></a>
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=Accreditation+C"
                            alt="Accreditation Body C"></a>
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=Global+Partner+D"
                            alt="Global Partner D"></a>
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=University+E"
                            alt="Partner University E"></a>
                    <a href="#" class="logo-item"><img src="https://placehold.co/200x100/f0f4f8/627d98?text=Startup+F"
                            alt="Partner Startup F"></a>

                    <!-- Duplicated set for seamless loop -->
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=University+A"
                            alt="Partner University A"></a>
                    <a href="#" class="logo-item"><img src="https://placehold.co/200x100/f0f4f8/627d98?text=Tech+Firm+B"
                            alt="Partner Tech Firm B"></a>
                    <a href="#" class="logo-item"><img src="https://placehold.co/200x100/f0f4f8/627d98?text=NHS+Trust"
                            alt="NHS Trust Partner"></a>
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=Accreditation+C"
                            alt="Accreditation Body C"></a>
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=Global+Partner+D"
                            alt="Global Partner D"></a>
                    <a href="#" class="logo-item"><img
                            src="https://placehold.co/200x100/f0f4f8/627d98?text=University+E"
                            alt="Partner University E"></a>
                    <a href="#" class="logo-item"><img src="https://placehold.co/200x100/f0f4f8/627d98?text=Startup+F"
                            alt="Partner Startup F"></a>
                </div>
            </div>
        </div>
    </section>



    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <div class="inline-block mb-4">
                    <span class="bg-navy-100 text-navy-800 px-4 py-2 rounded-full text-sm font-semibold">
                        Get in Touch
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 gradient-text">
                    Ready to Start Your Journey?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Contact our expert team today and discover how Mountenna Group can help you achieve your goals.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <!-- Contact Form -->
                <div class="bg-white rounded-2xl shadow-xl p-8">
                    <h3 class="text-2xl font-bold mb-6">Send us a Message</h3>
                    <form class="space-y-6" action="app/logics.php" method="post">
                       
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" name="user_name"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 focus:border-transparent transition-colors duration-200"
                                    placeholder="Enter your full name" required>
                            </div>
                         
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" name="user_email"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 focus:border-transparent transition-colors duration-200"
                                placeholder="Enter your email address" required>
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                            <input type="text" name="user_address"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 focus:border-transparent transition-colors duration-200"
                                placeholder="Enter your email address" required>
                        </div>
                      
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea rows="4" name="user_message"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 focus:border-transparent transition-colors duration-200"
                                placeholder="Tell us about your requirements..." required></textarea>
                        </div>
                        <button type="submit" name="contact_form_submit"
                            class="w-full bg-royal-600 hover:bg-royal-700 text-white py-3 rounded-lg font-semibold transition-colors duration-300">
                            Send Message
                            <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold mb-6">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-royal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-map-marker-alt text-royal-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-navy-900 mb-1">Office Address</h4>
                                    <p class="text-gray-600">
                                        123 Business Center<br>
                                        London, United Kingdom<br>
                                        SW1A 1AA
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-royal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-phone text-royal-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-navy-900 mb-1">Phone</h4>
                                    <p class="text-gray-600">+44 20 1234 5678</p>
                                    <p class="text-gray-600">+44 20 8765 4321</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-royal-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <i class="fas fa-envelope text-royal-600"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-navy-900 mb-1">Email</h4>
                                    <p class="text-gray-600">info@mountenna.com</p>
                                    <p class="text-gray-600">support@mountenna.com</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gray-100 rounded-lg p-6">
                        <h4 class="font-semibold text-navy-900 mb-3">Office Hours</h4>
                        <div class="space-y-2 text-sm text-gray-600">
                            <div class="flex justify-between">
                                <span>Monday - Friday</span>
                                <span>9:00 AM - 6:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Saturday</span>
                                <span>10:00 AM - 4:00 PM</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Sunday</span>
                                <span>Closed</span>
                            </div>
                        </div>
                    </div>

                    <!-- CTA for Consultation -->
                    <div id="consultation"
                        class="bg-gradient-to-r from-navy-600 to-royal-700 rounded-2xl p-8 text-white">
                        <h4 class="text-xl font-bold mb-4">Book a Free Consultation</h4>
                        <p class="text-gray-200 mb-6">
                            Ready to take the next step? Schedule a personalized consultation with our experts.
                        </p>
                        <button
                            class="bg-white text-navy-900 hover:bg-gray-100 px-6 py-3 rounded-lg font-semibold transition-colors duration-300">
                            <i class="fas fa-calendar-alt mr-2"></i>
                            Book Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include "footer.php" ?>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.myGallerySwiper', {
                slidesPerView: 1,
                spaceBetween: 20,
                loop: true,

                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },

                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                    }
                }
            });
        });
    </script>

    <script src="main.js"></script>
</body>

</html>