<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Mountenna Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Parkinsans:wght@300..800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php include "tsconfig.php" ?>
    <link rel="stylesheet" href="style.css">
    <style>
    .hero-bg-contact {
        background-image: url('https://images.unsplash.com/photo-1586769852836-bc069f19e1b6?q=80&w=1920&auto=format&fit=crop');
    }
    </style>
</head>

<body class="bg-white">

    <?php include "nav.php" ?>

    <!-- Page Header -->
    <section class="relative h-[450px] bg-cover bg-center hero-bg-contact">
        <div class="absolute inset-0 bg-navy-900/60"></div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="text-center text-white max-w-4xl mx-auto px-4">
                <h1 class="text-5xl lg:text-6xl font-bold font-heading">Get in Touch</h1>
                <p class="text-xl font-sans mt-4">We're here to help. Contact us today to start your journey.</p>
            </div>
        </div>
    </section>

    <!-- Main Contact Section -->
    <main class="py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12">

                <!-- Left Column: Contact Form -->
                <div class="lg:col-span-3 bg-gray-50 p-8 rounded-2xl border border-gray-100">
                    <h2 class="text-3xl font-bold font-heading text-navy-900 mb-2">Send Us a Message</h2>
                    <p class="font-sans text-gray-600 mb-8">Have a question or a project in mind? Fill out the form
                        below.</p>

                    <form action="app/logics.php" method="POST" class="space-y-6">
                        <div>
                                <label for="first_name"
                                    class="block text-sm font-semibold font-sans text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="user_name" name="user_name" required
                                    class="w-full px-4 py-3 bg-gray-100 border-0 border-b-2 border-gray-300 focus:border-royal-500 focus:ring-0 focus:outline-none transition">
                            </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold font-sans text-gray-700 mb-2">Email
                                Address</label>
                            <input type="email" id="email" name="user_email" required
                                class="w-full px-4 py-3 bg-gray-100 border-0 border-b-2 border-gray-300 focus:border-royal-500 focus:ring-0 focus:outline-none transition">
                        </div>
                        <div>
                            <label for="subject"
                                class="block text-sm font-semibold font-sans text-gray-700 mb-2">Address</label>
                            <input type="text" id="subject" name="user_address" required
                                class="w-full px-4 py-3 bg-gray-100 border-0 border-b-2 border-gray-300 focus:border-royal-500 focus:ring-0 focus:outline-none transition">
                        </div>
                        <div>
                            <label for="message"
                                class="block text-sm font-semibold font-sans text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="user_message" rows="5" required
                                class="w-full px-4 py-3 bg-gray-100 border-0 border-b-2 border-gray-300 focus:border-royal-500 focus:ring-0 focus:outline-none transition"></textarea>
                        </div>
                        <div>
                            <button type="submit" name="contact_form_submit"
                                class="w-full bg-royal-600 hover:bg-royal-700 text-white py-3 rounded-lg font-semibold font-sans transition-colors duration-300">
                                Send Message <i class="fas fa-paper-plane ml-2"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Contact Details -->
                <div class="lg:col-span-2 space-y-8">
                    <div>
                        <h3 class="text-2xl font-bold font-heading text-navy-900 mb-4">Contact Information</h3>
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-map-marker-alt text-2xl text-royal-600 w-6 text-center"></i>
                                <div>
                                    <h4 class="font-sans font-semibold text-navy-900">Our Address</h4>
                                    <p class="font-sans text-gray-600">64 Broadway, Boardman House, London, E15 1NT, UK
                                    </p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-phone text-2xl text-royal-600 w-6 text-center"></i>
                                <div>
                                    <h4 class="font-sans font-semibold text-navy-900">Phone</h4>
                                    <p class="font-sans text-gray-600"><a href="tel:02033936789"
                                            class="hover:text-royal-600">02033936789</a></p>
                                    <p class="font-sans text-gray-600"><a href="tel:+447940467142"
                                            class="hover:text-royal-600">+44 7940 467142</a></p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-4">
                                <i class="fas fa-envelope text-2xl text-royal-600 w-6 text-center"></i>
                                <div>
                                    <h4 class="font-sans font-semibold text-navy-900">Email</h4>
                                    <p class="font-sans text-gray-600"><a href="mailto:info@mountenna.com"
                                            class="hover:text-royal-600">info@mountenna.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.996538136378!2d-0.005162684228966555!3d51.5323859796393!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761d5561061c45%3A0x26aa712a588b227c!2s64%20The%20Broadway%2C%20London%20E15%201NT%2C%20UK!5e0!3m2!1sen!2sus!4v1663412345678!5m2!1sen!2sus"
                            width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include "footer.php" ?>

    <script src="main.js"></script>
</body>

</html>