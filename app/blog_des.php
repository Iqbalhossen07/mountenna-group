<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['blog_des_id'])) {
    $blog_des_id = $_GET['blog_des_id'];
    $blog_update_id_result = $mysqli->query("SELECT * FROM blogs WHERE id='$blog_des_id' ");
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
            

            <div class="bg-card-bg rounded-xl shadow-lg p-6 max-w-5xl mx-auto" data-aos="fade-up">
                <div class="w-full h-72 sm:h-96 rounded-lg overflow-hidden shadow-md mb-8">
                    <img src="blogImage/<?php echo $b_image ?>"
                        alt="Safe Driving Tips for City Traffic" class="w-full h-full object-cover" />
                </div>

                <div class="px-2 md:px-6">
                    <h1 class="text-4xl lg:text-5xl font-extrabold text-text-dark leading-tight mb-4">
                                 <?php echo $b_title ?>
                    </h1>
                    <p class="text-text-light text-sm mb-6 flex items-center space-x-2">
                        <span class="font-semibold text-text-dark"><i class="fas fa-user-circle mr-1"></i> By <?php echo $b_author ?></span>
                        <span><i class="fas fa-calendar-alt mr-1"></i>   <?php echo $b_date ?></span>
                        <span class="text-course-primary"> <i class="fas fa-tags ml-2 mr-1"></i>   <?php echo $b_category ?></span>
                    </p>

                    <div
                        class="prose max-w-none text-text-dark leading-relaxed text-lg mb-8 border-b border-gray-200 pb-8">
                        <p class="mb-4">
                              <?php echo $b_des ?>
                        </p>

                     
                    </div>

                    <div class="pt-6 mt-6 border-t border-gray-200">
                        <h3 class="text-2xl font-bold text-text-dark mb-4">Share This Post</h3>
                        <div class="flex space-x-3">
                            <a href="#"
                                class="w-10 h-10 bg-blue-600 text-white rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors"
                                title="Share on Facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"
                                class="w-10 h-10 bg-blue-400 text-white rounded-full flex items-center justify-center hover:bg-blue-500 transition-colors"
                                title="Share on Twitter"><i class="fab fa-twitter"></i></a>
                            <a href="#"
                                class="w-10 h-10 bg-red-600 text-white rounded-full flex items-center justify-center hover:bg-red-700 transition-colors"
                                title="Share on Pinterest"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"
                                class="w-10 h-10 bg-green-600 text-white rounded-full flex items-center justify-center hover:bg-green-700 transition-colors"
                                title="Share via WhatsApp"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden"></div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="main.js"></script>
</body>

</html>
