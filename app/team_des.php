<?php include('db.php');
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}


if (isset($_GET['team_update_id'])) {
    $team_update_id = $_GET['team_update_id'];
    $team_update_id_result = $mysqli->query("SELECT * FROM teams WHERE id='$team_update_id' ");
    if (!empty($team_update_id_result)) {
        $row = $team_update_id_result->fetch_array();

        $t_name = $row['t_name'];
        $t_designation = $row['t_designation'];
        $t_des = $row['t_des'];
        $t_linkedln = $row['t_linkedln'];
        $t_github = $row['t_github'];
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
   <?php include('header.php') ?>


        <main class="flex-1 p-4 sm:p-6 overflow-y-auto">
            <div class="mb-6 flex justify-between items-center">
                <a href="team.php"
                    class="inline-flex items-center text-course-primary hover:text-course-orange-light transition-colors duration-200">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Team List
                </a>
               
            </div>

            <div class="bg-card-bg rounded-xl shadow-lg p-6 max-w-4xl mx-auto" data-aos="fade-up">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                    <div
                        class="flex-shrink-0 w-48 h-48 md:w-56 md:h-56 rounded-full overflow-hidden shadow-xl border-4 border-course-primary">
                        <img src="team_image/<?php echo ($row['t_image']) ?>" alt="Dr. Sarah Johnson"
                            class="w-full h-full object-cover" />
                    </div>

                    <div class="flex-1 text-center md:text-left">
                        <h2 class="text-4xl lg:text-5xl font-extrabold text-text-dark leading-tight mb-2">
                         <?php echo ($row['t_name']) ?>
                        </h2>
                        <p class="text-xl font-semibold text-course-primary mb-4">
                         <?php echo ($row['t_designation']) ?>

                        </p>

                        <p class="text-text-light leading-relaxed mb-6 border-b border-gray-200 pb-6">
                         <?php echo ($row['t_des']) ?>

                        </p>

                      
                        <div>
                            <h3 class="text-2xl font-bold text-text-dark mb-3">Connect Online</h3>
                            <div class="flex flex-wrap items-center md:justify-start justify-center gap-4">
                               
                              
                                <a href="<?php echo ($row['t_linkedln']) ?>" target="_blank"
                                    class="w-12 h-12 bg-blue-700 text-white rounded-full flex items-center justify-center text-xl shadow-md hover:bg-blue-700/80 transition-colors"
                                    title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="<?php echo ($row['t_github']) ?>" target="_blank"
                                    class="w-12 h-12 bg-pink-500 text-white rounded-full flex items-center justify-center text-xl shadow-md hover:bg-pink-500/80 transition-colors"
                                    title="Instagram">
                                    <i class="fab fa-github"></i>
                                </a>
                            </div>
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
