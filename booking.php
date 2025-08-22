<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Consultation - Mountenna Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Parkinsans:wght@300..800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <?php include "tsconfig.php" ?>

    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-screen bg-white">
    <?php include "nav.php" ?>

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-block mb-4">
                <span class="bg-royal-100 text-royal-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                    Get Started
                </span>
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold font-heading gradient-text">
                Book Your Free Consultation
            </h1>
            <p class="mt-4 text-xl text-gray-600 max-w-3xl mx-auto">
                Take the next step towards your goals. Fill out the form below, and one of our expert consultants will get in touch with you shortly.
            </p>
        </div>
    </section>
    
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12">

                <div class="lg:col-span-3">
                    <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100">
                        <h2 class="text-3xl font-bold font-heading text-navy-900 mb-8">Your Details</h2>
                        <form id="bookingForm" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                    <input type="text" id="firstName" name="firstName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="e.g., John" required>
                                </div>
                                <div>
                                    <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                    <input type="text" id="lastName" name="lastName" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="e.g., Doe" required>
                                </div>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="you@example.com" required>
                            </div>
                             <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="+44 123 456 7890" required>
                            </div>

                            <hr class="my-8">
                             <h3 class="text-xl font-bold font-heading text-navy-900">Consultation Details</h3>

                            <div>
                                <label for="division" class="block text-sm font-medium text-gray-700 mb-2">Service of Interest</label>
                                <select id="division" name="division" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" required>
                                    <option value="">Select a service</option>
                                    <option value="education">Mountenna Edu (Student Consultancy)</option>
                                    <option value="technology">Mountenna Tech (Software & IT)</option>
                                    <option value="recruitment">Mountenna Recruitment (Career & Staffing)</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="prefDate" class="block text-sm font-medium text-gray-700 mb-2">Preferred Date</label>
                                    <input type="date" id="prefDate" name="prefDate" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" required>
                                </div>
                                <div>
                                    <label for="prefTime" class="block text-sm font-medium text-gray-700 mb-2">Preferred Time</label>
                                    <input type="time" id="prefTime" name="prefTime" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" required>
                                </div>
                            </div>
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Additional Information</label>
                                <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="Tell us a bit about what you're looking for..."></textarea>
                            </div>

                            <button type="submit" class="w-full bg-royal-600 hover:bg-royal-700 text-white py-4 rounded-lg font-semibold text-lg transition-colors duration-300">
                                Confirm Booking
                                <i class="fas fa-calendar-check ml-2"></i>
                            </button>
                        </form>
                    </div>
                </div>

                <div class="lg:col-span-2">
                    <div class="space-y-8 lg:sticky top-24">
                        <div class="bg-gray-50/70 border border-gray-200 rounded-lg p-6">
                            <h3 class="text-xl font-bold font-heading text-navy-900 mb-4">What to Expect</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold">Step 1: Confirmation</h4>
                                        <p class="text-sm text-gray-600">We'll review your request and email you to confirm the date and time.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold">Step 2: Preparation</h4>
                                        <p class="text-sm text-gray-600">Our team will prepare based on your needs to make our session productive.</p>
                                    </div>
                                </li>
                                <li class="flex items-start">
                                    <i class="fas fa-check-circle text-teal-500 mt-1 mr-3"></i>
                                    <div>
                                        <h4 class="font-semibold">Step 3: The Consultation</h4>
                                        <p class="text-sm text-gray-600">Meet with one of our experts to discuss your goals and how we can help you achieve them.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg p-6">
                             <h3 class="text-xl font-bold font-heading text-navy-900 mb-4">Contact Us Directly</h3>
                             <div class="space-y-4">
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-phone text-royal-600 mt-1"></i>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Phone</h4>
                                        <p class="text-gray-600">+44 20 1234 5678</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <i class="fas fa-envelope text-royal-600 mt-1"></i>
                                    <div>
                                        <h4 class="font-semibold text-gray-800">Email</h4>
                                        <p class="text-gray-600">info@mountenna.com</p>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
    <script src="main.js"></script>
</body>

</html>