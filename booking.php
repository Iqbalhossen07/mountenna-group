<?php include('app/db.php');

if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];
}

?>
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


        <div class="relative h-[50vh] min-h-[400px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1621036579842-9080c7119f67?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-navy-900/50"></div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="max-w-3xl mx-auto text-white space-y-6 animate-fade-in-up">
                    <h1 class="text-5xl lg:text-6xl font-bold font-heading">
                         Book Your Free Consultation
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-200 font-sans">
             Take the next step towards your goals. Fill out the form below, and one of our expert consultants will get in touch with you shortly.

                    </p>

                </div>
            </div>
        </div>
    </div>
    
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-5 gap-12">

                <div class="lg:col-span-3">
                    <div class="bg-white p-8 md:p-10 rounded-2xl shadow-xl border border-gray-100">
                        <h2 class="text-3xl font-bold font-heading text-navy-900 mb-8">Your Details</h2>
                        <form id="bookingForm" action="app/logics.php" class="space-y-6" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="j_id" value="<?php echo $booking_id ?>">

                         
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                                <input type="text" id="email" name="u_name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="john doe" required>
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                                <input type="email" id="email" name="u_email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="you@example.com" required>
                            </div>
                             <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                                <input type="tel" id="phone" name="u_phone"  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="+44 123 456 7890" required>
                            </div>
                             <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">CV/Resume</label>
                                <input type="file" id="phone" name="u_cv" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors"  required>
                            </div>

                          

                           
                            
                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Additional Information</label>
                                <textarea id="message" name="u_message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-royal-500 transition-colors" placeholder="Tell us a bit about what you're looking for..."></textarea>
                            </div>

                            <button type="submit" name="add_booking" class="w-full bg-royal-600 hover:bg-royal-700 text-white py-4 rounded-lg font-semibold text-lg transition-colors duration-300">
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
                                        <p class="text-gray-600">+44 7940 467142</p>
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