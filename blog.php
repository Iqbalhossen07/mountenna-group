<?php include('app/db.php') ?>
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
          <!-- Blog Section -->
    <section id="blog" class=" bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          

            <!-- Blog Posts Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php


                $blog = $mysqli->query("SELECT * FROM blogs");


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
    </main>

    <?php include "footer.php" ?>

    <script src="main.js"></script>
</body>

</html>