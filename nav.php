<!-- Topbar -->
<div class="bg-navy-900 text-white py-2 text-sm">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center lg:justify-between items-center">
            <div class="flex flex-wrap items-center justify-center lg:justify-start lg:space-x-6 text-navy-200">
                <div class="flex items-center space-x-2 hover:text-white transition-colors duration-200">
                    <i class="fas fa-phone text-xs"></i>
                    <span>02033936789</span>
                </div>
                <div class="hidden lg:flex items-center space-x-2 hover:text-white transition-colors duration-200">
                    <i class="fas fa-mobile-alt text-xs"></i>
                    <span>+44 7940 467142</span>
                </div>
                <div class="hidden lg:flex items-center space-x-2 hover:text-white transition-colors duration-200">
                    <i class="fas fa-map-marker-alt text-xs"></i>
                    <span>64 Broadway, Boardman House, London, E15 1NT, UK</span>
                </div>
            </div>

            <div class="hidden lg:flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <span class="text-navy-300 text-xs">Follow us:</span>
                    <div class="flex space-x-2">
                        <a href="#"
                            class="w-6 h-6 bg-navy-800 rounded-full flex items-center justify-center hover:bg-royal-600 transition-colors duration-200"
                            aria-label="Facebook">
                            <i class="fab fa-facebook-f text-xs"></i>
                        </a>
                        <a href="#"
                            class="w-6 h-6 bg-navy-800 rounded-full flex items-center justify-center hover:bg-royal-600 transition-colors duration-200"
                            aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in text-xs"></i>
                        </a>
                        <a href="#"
                            class="w-6 h-6 bg-navy-800 rounded-full flex items-center justify-center hover:bg-royal-600 transition-colors duration-200"
                            aria-label="Twitter">
                            <i class="fab fa-twitter text-xs"></i>
                        </a>
                        <a href="#"
                            class="w-6 h-6 bg-navy-800 rounded-full flex items-center justify-center hover:bg-royal-600 transition-colors duration-200"
                            aria-label="Instagram">
                            <i class="fab fa-instagram text-xs"></i>
                        </a>
                    </div>
                </div>
                <div class="hidden lg:block w-px h-4 bg-navy-700"></div>
            </div>
        </div>
    </div>
</div>

<!-- Navigation (set to relative for dropdown positioning) -->
<nav class="bg-white shadow-sm border-b border-gray-100 sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main nav bar -->
        <div class="flex justify-between items-center h-16">
            <a href="index.php">
                <img src="img/logo.png" alt="Mountenna Group Logo" class="w-auto h-12">
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="index.php"
                    class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200">Home</a>
                <a href="about.php"
                    class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200">About</a>

                <!-- Services Dropdown -->
                <div class="relative group">
                    <button
                        class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200 flex items-center py-5">
                        Services
                        <i
                            class="fas fa-chevron-down text-xs ml-2 transition-transform duration-300 group-hover:rotate-180"></i>
                    </button>
                    <div
                        class="absolute top-full left-1/2 -translate-x-1/2 w-56 bg-white rounded-lg shadow-xl opacity-0 group-hover:opacity-100 transition-all duration-300 pointer-events-none group-hover:pointer-events-auto z-10">
                        <div class="py-2">
                            <a href="mountenna-edu.php"
                                class="block px-4 py-2 font-sans text-gray-700 hover:bg-gray-100 hover:text-navy-900">Mountenna
                                Edu</a>
                            <a href="mountenna-tech.php"
                                class="block px-4 py-2 font-sans text-gray-700 hover:bg-gray-100 hover:text-navy-900">Mountenna
                                Tech</a>
                            <a href="mountenna-recruitment.php"
                                class="block px-4 py-2 font-sans text-gray-700 hover:bg-gray-100 hover:text-navy-900">Mountenna
                                Recruitment</a>
                        </div>
                    </div>
                </div>

                <a href="career.php"
                    class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200">Career</a>
                <a href="gallery.php"
                    class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200">Gallery</a>
                <a href="blog.php"
                    class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200">Blog</a>
                <a href="contact.php"
                    class="text-gray-700 hover:text-navy-900 font-medium transition-colors duration-200">Contact</a>
                <a href="contact.php"
                    class="bg-royal-600 hover:bg-royal-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                    Book Consultation
                </a>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button onclick="toggleMobileMenu()" class="text-gray-700 hover:text-navy-900" id="mobile-menu-btn">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Dropdown Menu -->
    <div id="mobile-menu" class="mobile-menu absolute top-full left-0 w-full bg-white shadow-xl md:hidden">
        <div class="p-4 space-y-2">
            <a href="index.php"
                class="block text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">Home</a>
            <a href="about.php"
                class="block text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">About</a>

            <!-- Mobile Services Accordion -->
            <div>
                <button onclick="toggleServiceMenu(event)"
                    class="w-full flex justify-between items-center text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">
                    <span>Services</span>
                    <i class="fas fa-chevron-down text-sm transition-transform duration-300"></i>
                </button>
                <div id="mobile-service-menu" class="pl-6 mt-1"
                    style="max-height: 0; overflow: hidden; transition: max-height 0.5s ease-in-out;">
                    <a href="mountenna-edu.php"
                        class="block text-gray-700 hover:text-navy-900 font-medium py-2">Mountenna Edu</a>
                    <a href="mountenna-tech.php"
                        class="block text-gray-700 hover:text-navy-900 font-medium py-2">Mountenna Tech</a>
                    <a href="mountenna-recruitment.php"
                        class="block text-gray-700 hover:text-navy-900 font-medium py-2">Mountenna Recruitment</a>
                </div>
            </div>
              <a href="career.php"
                class="block text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">Career</a>

            <a href="gallery.php"
                class="block text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">Gallery</a>
            <a href="blog.php" class="block text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">Blog</a>
            <a href="contact.php"
                class="block text-gray-700 hover:text-navy-900 font-medium py-2 px-3 rounded-md">Contact</a>
            <a href="contact.php"
                class="block w-full text-center bg-royal-600 hover:bg-royal-700 text-white px-4 py-3 rounded-lg font-medium transition-colors duration-200 mt-2">
                Book Consultation
            </a>
        </div>
    </div>
</nav>