<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        "icon-bg-gray": "#E5E7EB" /* Light Gray */ ,
                        "icon-bg-blue": "#DBEAFE" /* Light Blue */ ,
                        "icon-bg-red": "#FEE2E2" /* Light Red */ ,
                        "chart-color-1": "#f97316" /* primary */ ,
                        "chart-color-2": "#ef4444" /* accent */ ,
                        "chart-color-3": "#3b82f6" /* blue */ ,
                        "chart-color-4": "#10B981" /* green */ ,
                        "chart-color-5": "#a855f7" /* purple */ ,
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-dashboard-bg flex min-h-screen">
    <?php include "sidebar.php" ?>



    <div class="flex-1 flex flex-col transition-all duration-300 overflow-hidden" id="main-content">

        <?php include "header.php" ?>


        <main class="flex-1 p-4 sm:p-6 overflow-y-auto">
            <div
                class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 gap-4 mb-8">



                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-icon-bg-gray"
                    data-aos="fade-up" data-aos-delay="300">
                    <div class="flex flex-col">
                        <?php

                        $result = $mysqli->query("SELECT * FROM booking");
                        $count = $result->num_rows;

                        ?>
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-gray-700 transition-colors duration-300">
                            <?php echo $count; ?></div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            All Bookings
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-icon-bg-gray text-gray-700 rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-box"></i>
                    </div>
                </div>

                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-icon-bg-blue"
                    data-aos="fade-up" data-aos-delay="400">
                    <div class="flex flex-col">
                        <?php

                        $result = $mysqli->query("SELECT * FROM teams");
                        $count = $result->num_rows;

                        ?>
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-blue-700 transition-colors duration-300">
                            <?php echo $count; ?></div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            Total Members
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-icon-bg-blue text-blue-700 rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-users"></i>
                    </div>
                </div>

                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-icon-bg-red"
                    data-aos="fade-up" data-aos-delay="500">
                    <div class="flex flex-col">
                        <?php

                        $result = $mysqli->query("SELECT * FROM testimonials");
                        $count = $result->num_rows;

                        ?>
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-blue-700 transition-colors duration-300">
                            <?php echo $count; ?></div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            Total Testimonials
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-icon-bg-red text-course-accent rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-icon-bg-green"
                    data-aos="fade-up" data-aos-delay="600">
                    <div class="flex flex-col">
                        <?php

                        $result = $mysqli->query("SELECT * FROM booking");
                        $count = $result->num_rows;

                        ?>
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-blue-700 transition-colors duration-300">
                            <?php echo $count; ?></div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                           Job
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-icon-bg-green text-metric-green rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-code"></i>
                    </div>
                </div>

                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-gray-200"
                    data-aos="fade-up" data-aos-delay="700">
                    <div class="flex flex-col">
                        <?php

                        $result = $mysqli->query("SELECT * FROM blogs");
                        $count = $result->num_rows;

                        ?>
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-blue-700 transition-colors duration-300">
                            <?php echo $count; ?></div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            Total Blogs
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-blog"></i>
                    </div>
                </div>


                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-gray-200"
                    data-aos="fade-up" data-aos-delay="800">
                    <div class="flex flex-col">
                        <?php

                        $result = $mysqli->query("SELECT * FROM gallery_images");
                        $count = $result->num_rows;

                        ?>
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-blue-700 transition-colors duration-300">
                            <?php echo $count; ?></div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            Total Gallery
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-image"></i>
                    </div>
                </div>

                <!-- <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-gray-200"
                    data-aos="fade-up" data-aos-delay="900">
                    <div class="flex flex-col">
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-gray-600 transition-colors duration-300">
                            -</div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            Coming Soon
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-spinner fa-spin"></i>
                    </div>
                </div>

                <div class="bg-card-bg rounded-xl shadow-lg p-5 flex items-center justify-between transform transition-transform duration-300 hover:scale-[1.02] group hover:bg-gray-200"
                    data-aos="fade-up" data-aos-delay="1000">
                    <div class="flex flex-col">
                        <div
                            class="text-4xl font-extrabold text-text-dark group-hover:text-gray-600 transition-colors duration-300">
                            -</div>
                        <div class="text-sm font-semibold text-text-light mt-1">
                            Coming Soon
                        </div>
                    </div>
                    <div
                        class="w-12 h-12 bg-gray-200 text-gray-600 rounded-full flex items-center justify-center text-xl shadow-md">
                        <i class="fas fa-clock"></i>
                    </div>
                </div>  -->
            </div>

            <div class="bg-card-bg rounded-xl shadow-lg p-4 sm:p-6" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-xl font-bold text-gray-800 hidden sm:block mb-4">All Messages</h2>

             <div class="bg-card-bg rounded-xl shadow-lg p-4 sm:p-6" data-aos="fade-up" data-aos-delay="200">
                <div class="table-responsive">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Booking ID
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User Email
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    User Address
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php


                            $gallery = $mysqli->query("SELECT * FROM user_message");


                            // Fetch and display the titles
                            while ($row = $gallery->fetch_assoc()):

                            ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        #BK-<?php echo ($row['id']) ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                      <?php echo ($row['user_name']) ?>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                    <?php echo ($row['user_email']) ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">
                                       <?php echo ($row['user_address']) ?>
                                    </td>


                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <div class="flex items-center justify-center space-x-2">

                                            <a href="logics.php?admin_user_delete_id=<?php echo ($row['id']) ?>" onclick="alert('Are you sure?<?php echo ($row['user_name']) ?> has been deleted?')" class="action-button bg-course-red"
                                                title="Delete Booking">
                                                <i class="fas fa-trash-alt text-base"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>

                        </tbody>
                    </table>
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