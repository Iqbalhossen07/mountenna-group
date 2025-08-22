<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights | Mountenna Group Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Parkinsans:wght@300..800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php include "tsconfig.php" ?>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-white">

    <?php include "nav.php" ?>

    <!-- Page Header -->
    <section class="relative h-[450px] bg-cover bg-center hero-bg-blog">
        <div class="absolute inset-0 bg-navy-900/60"></div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="text-center text-white max-w-4xl mx-auto px-4">
                <h1 class="text-5xl lg:text-6xl font-bold font-heading">Our Insights</h1>
                <p class="text-xl font-sans mt-4">Expert analysis, industry trends, and success stories from our team.
                </p>
            </div>
        </div>
    </section>

    <!-- Main Blog Content -->
    <main class="py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">

                <!-- Main Content: Posts -->
                <div class="lg:col-span-2">
                    <!-- Featured Post -->
                    <div class="group mb-12">
                        <a href="#" class="block overflow-hidden rounded-2xl shadow-lg mb-6">
                            <img src="https://placehold.co/800x500/2563eb/FFFFFF?text=Featured+Article"
                                alt="Featured blog post image"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        </a>
                        <div>
                            <span
                                class="inline-block bg-royal-100 text-royal-800 text-xs font-semibold font-sans px-3 py-1 rounded-full mb-4">Education</span>
                            <a href="#">
                                <h2
                                    class="text-3xl font-bold font-heading text-navy-900 mb-4 group-hover:text-royal-600 transition-colors">
                                    Navigating UK University Admissions: A Complete 2025 Guide</h2>
                            </a>
                            <p class="font-sans text-gray-600 leading-relaxed mb-6">The landscape of UK higher education
                                is constantly evolving. In this comprehensive guide, our expert counselors break down
                                the key changes for the 2025 intake, offering invaluable tips for international students
                                on everything from personal statements to visa applications.</p>
                            <div class="flex items-center text-sm">
                                <img src="https://placehold.co/40x40/f0f4f8/334e68?text=EJ" alt="Author Emily Jones"
                                    class="w-10 h-10 rounded-full mr-4">
                                <div>
                                    <p class="font-sans font-semibold text-navy-900">By Emily Jones</p>
                                    <p class="font-sans text-gray-500">August 20, 2025 &bull; 7 min read</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-12 border-gray-200">

                    <!-- Latest Posts Grid -->
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Post 1 -->
                        <div class="group flex flex-col">
                            <a href="#" class="block overflow-hidden rounded-2xl shadow-md mb-4"><img
                                    src="https://placehold.co/600x400/14b8a6/FFFFFF?text=Technology"
                                    alt="Tech post image"
                                    class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"></a>
                            <div>
                                <span
                                    class="inline-block bg-teal-100 text-teal-800 text-xs font-semibold font-sans px-3 py-1 rounded-full mb-3">Technology</span>
                                <a href="#">
                                    <h3
                                        class="font-heading text-xl font-bold text-navy-900 mb-2 group-hover:text-teal-600 transition-colors">
                                        The Rise of AI in Business</h3>
                                </a>
                                <p class="font-sans text-sm text-gray-600">How artificial intelligence is reshaping
                                    industries and what you can do to stay ahead.</p>
                            </div>
                        </div>
                        <!-- Post 2 -->
                        <div class="group flex flex-col">
                            <a href="#" class="block overflow-hidden rounded-2xl shadow-md mb-4"><img
                                    src="https://placehold.co/600x400/ca8a04/FFFFFF?text=Careers"
                                    alt="Careers post image"
                                    class="w-full h-48 object-cover transition-transform duration-300 group-hover:scale-105"></a>
                            <div>
                                <span
                                    class="inline-block bg-gold-100 text-gold-800 text-xs font-semibold font-sans px-3 py-1 rounded-full mb-3">Careers</span>
                                <a href="#">
                                    <h3
                                        class="font-heading text-xl font-bold text-navy-900 mb-2 group-hover:text-gold-600 transition-colors">
                                        Crafting the Perfect CV</h3>
                                </a>
                                <p class="font-sans text-sm text-gray-600">Our recruitment experts share secrets for
                                    creating a CV that gets you noticed.</p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Sidebar -->
                <aside class="lg:col-span-1">
                    <div class="sticky top-24 space-y-12">
                        <!-- Categories -->
                        <div class="bg-gray-50 p-6 rounded-2xl border border-gray-100">
                            <h4 class="font-heading font-bold text-xl text-navy-900 mb-4">Categories</h4>
                            <ul class="space-y-3 font-sans">
                                <li><a href="#"
                                        class="flex justify-between items-center text-gray-700 hover:text-royal-600"><span>Education</span>
                                        <span
                                            class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">12</span></a>
                                </li>
                                <li><a href="#"
                                        class="flex justify-between items-center text-gray-700 hover:text-royal-600"><span>Technology</span>
                                        <span
                                            class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">8</span></a>
                                </li>
                                <li><a href="#"
                                        class="flex justify-between items-center text-gray-700 hover:text-royal-600"><span>Careers</span>
                                        <span
                                            class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">15</span></a>
                                </li>
                                <li><a href="#"
                                        class="flex justify-between items-center text-gray-700 hover:text-royal-600"><span>Company
                                            News</span> <span
                                            class="text-xs bg-gray-200 text-gray-600 px-2 py-1 rounded-full">5</span></a>
                                </li>
                            </ul>
                        </div>
                        <!-- Newsletter Signup -->
                        <div class="bg-navy-800 p-8 rounded-2xl text-white text-center">
                            <h4 class="font-heading font-bold text-2xl mb-3">Stay Informed</h4>
                            <p class="font-sans text-sm text-navy-300 mb-6">Subscribe to our newsletter to get the
                                latest insights delivered to your inbox.</p>
                            <form action="#" class="space-y-4">
                                <input type="email" placeholder="Your email address"
                                    class="w-full bg-navy-700 border border-navy-600 text-white px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-royal-500 placeholder-navy-400">
                                <button type="submit"
                                    class="w-full bg-royal-600 hover:bg-royal-700 text-white py-2 rounded-lg font-semibold transition-colors">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </main>

    <?php include "footer.php" ?>

    <script src="main.js"></script>
</body>

</html>