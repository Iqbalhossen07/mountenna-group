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
        <?php include('header.php') ?>

        <main class="flex-1 p-4 sm:p-6 overflow-y-auto">
            <div class="flex justify-end mb-6">
                <a href="{{ route('admin.add_service') }}"
                    class="bg-course-primary text-white px-5 py-2 rounded-lg shadow-md hover:bg-course-orange-light transition-colors duration-200 flex items-center space-x-2">
                    <i class="fas fa-plus"></i>
                    <span>Add New Service</span>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8">
                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition-shadow duration-300 hover:shadow-md">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">
                                Senior Software Engineer
                            </h3>
                            <div class="flex flex-wrap items-center space-x-4 text-sm text-gray-500 mt-2">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-briefcase text-teal-600"></i>
                                    <span>Mountenna Tech</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-map-marker-alt text-teal-600"></i>
                                    <span>London, UK (Hybrid)</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0">
                            <a href="#" class="bg-blue-100 text-blue-800 hover:bg-blue-200 px-6 py-2.5 rounded-lg font-semibold transition-colors duration-200 inline-block">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition-shadow duration-300 hover:shadow-md">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">
                                Education Consultant
                            </h3>
                            <div class="flex flex-wrap items-center space-x-4 text-sm text-gray-500 mt-2">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-briefcase text-blue-600"></i>
                                    <span>Mountenna Edu</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-map-marker-alt text-blue-600"></i>
                                    <span>Manchester, UK</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4 sm:mt-0">
                            <a href="#" class="bg-blue-100 text-blue-800 hover:bg-blue-200 px-6 py-2.5 rounded-lg font-semibold transition-colors duration-200 inline-block">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>

                <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm transition-shadow duration-300 hover:shadow-md">
                    <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                        <div>
                            <h3 class="text-xl font-bold text-gray-800">
                                Healthcare Recruitment Specialist
                            </h3>
                            <div class="flex flex-wrap items-center space-x-4 text-sm text-gray-500 mt-2">
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-briefcase text-yellow-600"></i>
                                    <span>Mountenna Recruitment</span>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <i class="fas fa-map-marker-alt text-yellow-600"></i>
                                    <span>Remote</span>
                                </div>
                            </div>
                        </div>
                        <div
                        class="flex justify-center space-x-2 py-4 mb-2 relative z-30  opacity-100 transition-opacity duration-300">
                        <a href="team_des.php?team_update_id=<?php echo $row['id']; ?>" class="action-button bg-metric-blue-light hover:bg-blue-600" title="View Profile">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="update_team.php?team_update_id=<?php echo $row['id']; ?>" class="action-button bg-course-primary hover:bg-course-orange-light"
                            title="Edit Profile">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="logics.php?team_delete_id=<?php echo $row['id']; ?>" onclick="alert('Are you sure? <?php echo ($row['t_name']) ?> has been deleted?')" class="action-button bg-metric-red-dark hover:bg-red-700" title="Delete Member">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                    </div>
                </div>


            </div>

        </main>
    </div>

    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden"></div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="main.js"></script>
</body>

</html>