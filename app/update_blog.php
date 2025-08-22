<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['blog_update_id'])) {
    $blog_update_id = $_GET['blog_update_id'];
    $blog_update_id_result = $mysqli->query("SELECT * FROM blogs WHERE id='$blog_update_id' ");
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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mountenna Tech</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="{{asset('img/logo.webp')}}" type="image/x-icon">

    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "course-primary": "#f97316",
                        "course-secondary": "#fff7ed",
                        "course-accent": "#ef4444",
                        "course-red": "#ef4444",
                        "course-orange": "#f97316",
                        "course-orange-light": "#fb923c",
                        "course-blue": "#0E2A47", // Dark blue from your original palette
                        topbar: "#f97316",
                        "topbar-foreground": "#ffffff",
                        "dashboard-bg": "#F9FAFB" /* Very light gray for background to make cards pop */ ,
                        "sidebar-bg": "#1F2937" /* Darker Slate for sidebar (gray-800) */ ,
                        "sidebar-item-hover": "#374151" /* Darker Slate for hover (gray-700) */ ,
                        "sidebar-item-active": "#f97316" /* course-primary */ ,
                        "card-bg": "#ffffff",
                        "text-light": "#6B7280" /* Gray 500 for subtle text */ ,
                        "text-dark": "#1F2937" /* Gray 900 for main text */ ,
                        "metric-green": "#10B981" /* Emerald Green (for positive metrics) */ ,
                        "metric-red-dark": "#DC2626" /* Red 600 (for negative metrics/accents) */ ,
                        "metric-blue-light": "#60A5FA" /* Blue 400 */ ,
                        "metric-purple": "#a855f7" /* Purple 500 */ ,
                        "metric-gray": "#9CA3AF" /* Gray 400 */ ,
                        "icon-bg-orange": "#FEE2E2" /* Light Red/Orange for icon background (so primary accent text shows) */ ,
                        "icon-bg-green": "#D1FAE5" /* Light Emerald */ ,
                        "icon-bg-blue": "#DBEAFE" /* Light Blue */ ,
                        "icon-bg-red": "#FEE2E2" /* Light Red */ ,
                        "chart-color-1": "#f97316",
                        /* primary */
                        "chart-color-2": "#ef4444",
                        /* accent */
                        "chart-color-3": "#3b82f6",
                        /* blue */
                        "chart-color-4": "#10B981",
                        /* green */
                        "chart-color-5": "#a855f7",
                        /* purple */
                    },
                    animation: {
                        "pulse-slow": "pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                        float: "floatAnim 3s ease-in-out infinite",
                    },
                    keyframes: {
                        floatAnim: {
                            "0%, 100%": {
                                transform: "translateY(0)"
                            },
                            "50%": {
                                transform: "translateY(-10px)"
                            },
                        },
                    },
                },
            },
        };
    </script>
</head>

<body class="bg-dashboard-bg flex min-h-screen">
   <?php include('sidebar.php') ?>


    <div class="flex-1 flex flex-col transition-all duration-300 overflow-hidden" id="main-content">
          <?php include('header.php')?>

        <main class="flex-1 p-4 sm:p-6 overflow-y-auto">
            <div class="mb-6 flex justify-between items-center">
                <a href="blog.php"
                    class="inline-flex items-center text-course-primary hover:text-course-orange-light transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Blog List
                </a>
            </div>

            <div class="bg-card-bg rounded-xl shadow-lg p-6 max-w-8xl mx-auto" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-text-dark mb-6 text-center">
                   Update Blog Post
                </h2>

                <form id="addBlogPostForm" action="logics.php" class="space-y-6" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $blog_update_id ?>">

              
                    <div>
                        <label for="blogTitle" class="block text-sm font-medium text-gray-700">
                            Blog Post Title
                        </label>
                        <input type="text" name="b_title" value="<?php echo $b_title ?>" id="blogTitle"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                            placeholder="e.g., Safe Driving Tips for City Traffic" required />
                    </div>

                    <div class="w-full">
                        <label for="featuredImage" class="block text-sm font-medium text-gray-700 mb-2">
                            Featured Image
                        </label>
                        <div
                            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-md hover:border-course-primary transition-colors duration-200 relative">
                            <div class="space-y-1 text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                    viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H16c-1.1 0-2 .9-2 2v10m-2-10V9c0-1.1.9-2 2-2h10l4 4v8m-4-8h-8m-2 4h.01M32 34v-8m4 4h-8m0-20H16a2 2 0 00-2 2v12a2 2 0 002 2h8l-4 4v2h10v-2l-4-4h8a2 2 0 002-2V12a2 2 0 00-2-2z"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                                <div class="flex text-sm text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer bg-white rounded-md font-medium text-course-primary hover:text-course-orange-light focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-course-primary">
                                        <span>Upload a file</span>
                                        <input id="file-upload" name="b_image" type="file" class="sr-only"
                                            accept="image/*" />
                                                    <input type="hidden" name="old_image" value="<?php echo $b_image ?>">

                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                            <img id="image-preview" src="#" alt="Image Preview"
                                class="absolute inset-0 w-full h-full object-cover rounded-md hidden" />
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="author" class="block text-sm font-medium text-gray-700">
                                Author
                            </label>
                            <input type="text" name="b_author" id="author" value="<?php echo $b_author ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                                placeholder="e.g., Instructor David" required />
                        </div>

                        <div>
                            <label for="publishDate" class="block text-sm font-medium text-gray-700">
                                Publish Date
                            </label>
                            <input type="date" name="b_date" id="publishDate" value="<?php echo $b_date ?>"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                                required />
                        </div>
                    </div>

                    <div>
                        <label for="blogContent" class="block text-sm font-medium text-gray-700">
                            Blog Content
                        </label>
                        <textarea name="b_des" id="blogContent" rows="10"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                            placeholder="Write your blog post content here..." required><?php echo $b_des ?></textarea>
                    </div>

                    <div>
                        <label for="categories" class="block text-sm font-medium text-gray-700">
                            Categories / Tags (Comma separated)
                        </label>
                        <input type="text" name="b_category" id="categories" value="<?php echo $b_category ?>"
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                            placeholder="e.g., safety, maintenance, tips, beginner" />
                        <p class="text-xs text-text-light mt-1">Separate each tag with a comma (e.g., tag1, tag2)</p>
                    </div>

                    <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
                        <button type="submit" name="update_blog"
                            class="bg-course-primary text-white px-6 py-3 rounded-lg shadow-md hover:bg-course-orange-light transition-colors duration-200 flex items-center space-x-2 text-lg font-semibold">
                            <i class="fas fa-paper-plane mr-2"></i>
                            <span>Submit blog</span>
                        </button>
                    </div>
                </form>
            </div>
        </main>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden"></div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="main.js"></script>
</body>

</html>
