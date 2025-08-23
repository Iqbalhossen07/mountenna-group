<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['testimonial_update_id'])) {
    $testimonial_update_id = $_GET['testimonial_update_id'];
    $testimonial_update_id_result = $mysqli->query("SELECT * FROM testimonials WHERE id='$testimonial_update_id' ");
    if (!empty($testimonial_update_id_result)) {
        $row = $testimonial_update_id_result->fetch_array();

        $t_name = $row['t_name'];
        $t_desgination = $row['t_desgination'];
        $t_des = $row['t_des'];
        $t_image = $row['t_image'];
     
    }

   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mountenna Group</title>
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
                <a href="testimonial.php"
                    class="inline-flex items-center text-course-primary hover:text-course-orange-light transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Testimonials List
                </a>
            </div>

            <div class="bg-card-bg rounded-xl shadow-lg p-6 max-w-8xl mx-auto" data-aos="fade-up">
                <h2 class="text-3xl font-bold text-text-dark mb-6 text-center">
                    Update Testimonial
                </h2>

                <form id="addTestimonialForm" action="logics.php" class="space-y-6" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $testimonial_update_id ?>">
            
                    <div class="w-full">
                        <label for="customerPicture" class="block text-sm font-medium text-gray-700 mb-2">
                            Customer Picture
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
                                        <input id="file-upload" name="t_image"  type="file" class="sr-only"
                                            accept="image/*" />
                                            <input type="hidden" name="old_image" value="<?php echo $t_image ?>">
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
                            <label for="customerName" class="block text-sm font-medium text-gray-700">
                                Customer Name
                            </label>
                            <input type="text" name="t_name" value="<?php echo $t_name ?>" id="customerName"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                                placeholder="e.g., Jane Doe" required />
                        </div>

                        <div>
                            <label for="customerRole" class="block text-sm font-medium text-gray-700">
                                Customer Designation 
                            </label>
                            <input type="text" name="t_desgination" value="<?php echo $t_desgination ?>"  id="customerRole"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                                placeholder="e.g., Developer" />
                        </div>

                       

                        <div class="md:col-span-2">
                            <label for="testimonialText" class="block text-sm font-medium text-gray-700">
                                Testimonial Text
                            </label>
                            <textarea name="t_des" id="testimonialText" rows="6"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-course-primary focus:border-course-primary sm:text-sm"
                                placeholder="Share your experience ..." required><?php echo $t_des ?></textarea>
                        </div>
                    </div>

                   

                    <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">
                        <button type="submit" name="update_testimonial"
                            class="bg-course-primary text-white px-6 py-3 rounded-lg shadow-md hover:bg-course-orange-light transition-colors duration-200 flex items-center space-x-2 text-lg font-semibold">
                            <i class="fas fa-plus-circle mr-2"></i>
                            <span>Update Testimonial</span>
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
