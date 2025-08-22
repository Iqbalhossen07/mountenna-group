<?php include('app/db.php');



if (isset($_GET['blog_id'])) {
    $blog_id = $_GET['blog_id'];
    $blog_update_id_result = $mysqli->query("SELECT * FROM blogs WHERE id='$blog_id' ");
    if (!empty($blog_update_id_result)) {
        $row = $blog_update_id_result->fetch_array();

        $b_title = $row['b_title'];
        $b_author = $row['b_author'];
        $b_date = $row['b_date'];
        $b_des = $row['b_des'];
        $b_category = $row['b_category'];
        $b_image = $row['b_image'];
    }

   
}
?>
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
                            <img src="app/blogImage/<?php echo ($row['b_image']) ?>"
                                alt="Featured blog post image"
                                class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105">
                        </a>
                        <div>
                            <span
                                class="inline-block bg-royal-100 text-royal-800 text-xs font-semibold font-sans px-3 py-1 rounded-full mb-4"><?php echo ($row['b_category']) ?></span>
                            <a href="#">
                                <h2
                                    class="text-3xl font-bold font-heading text-navy-900 mb-4 group-hover:text-royal-600 transition-colors">
                                   <?php echo ($row['b_title']) ?></h2>
                            </a>
                            <p class="font-sans text-gray-600 leading-relaxed mb-6"><?php echo ($row['b_des']) ?></p>
                            <div class="flex items-center text-sm">
                              
                                <div>
                                    <p class="font-sans font-semibold text-navy-900">By <?php echo ($row['b_author']) ?></p>
                                    <p class="font-sans text-gray-500"><?php echo ($row['b_date']) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <hr class="my-12 border-gray-200">

                    <!-- Latest Posts Grid -->
                    <!-- <div class="grid md:grid-cols-2 gap-8">
                  
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
                    </div> -->

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