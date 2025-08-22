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
    <style>
        body {
            font-family: "Lora", serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .font-bold,
        .font-extrabold {
            font-family: "Merriweather", serif;
        }

        .font-lora {
            font-family: "Lora", serif;
        }

        .title-gradient {
            background: linear-gradient(to right, #ff385c, #d37827);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .gallery-item img {
            transition: transform 0.3s ease;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .delete-icon-btn {
            position: absolute;
            top: 8px;
            right: 8px;
            z-index: 10;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 9999px;
            /* rounded-full */
            padding: 0.5rem;
            /* p-2 */
            color: #e74c3c;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .gallery-item:hover .delete-icon-btn {
            opacity: 1;
            visibility: visible;
        }

        .delete-icon-btn:hover {
            background-color: #e74c3c;
            color: white;
            transform: scale(1.1);
        }

        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 50;
        }

        .modal-content {
            background-color: white;
            padding: 2rem;
            border-radius: 0.75rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
            position: relative;
            transform: translateY(-20px);
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-overlay.active .modal-content {
            transform: translateY(0);
            opacity: 1;
        }

        input[type="file"] {
            display: none;
        }

        .custom-file-upload {
            border: 2px dashed #ced4da;
            border-radius: 0.5rem;
            padding: 2rem;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }

        .custom-file-upload:hover {
            background-color: #f8f9fa;
            border-color: #adb5bd;
        }

        .icon-add {
            background-color: #27ae60;
            color: white;
            transition: background-color 0.2s ease, transform 0.2s ease,
                box-shadow 0.2s ease;
        }

        .icon-add:hover {
            background-color: #2ecc71;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-dashboard-bg flex min-h-screen">

    <?php include('sidebar.php') ?>

    <div class="flex-1 flex flex-col transition-all duration-300 overflow-hidden" id="main-content">
        <?php include('header.php') ?>

        </header>

        <main class="flex-1 p-4 sm:p-6 overflow-y-auto">



            <div class="flex justify-end mb-6" data-aos="fade-left">
                <button onclick="openModal()"
                    class="bg-course-primary text-white px-5 py-2 rounded-lg shadow-md hover:bg-course-orange-light transition-colors duration-200 flex items-center space-x-2">
                    <i class="fas fa-image"></i>
                    <span>Add New Image</span>
                </button>
            </div>

            <?php if (isset($_SESSION['message'])): ?>
                <?php
                $type = $_SESSION['message_type'];
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
                ?>

                    <div class="w-full flex justify-center mt-4">
                        <div id="flash-message"
                            class="flex items-center gap-3 px-6 py-4 text-sm font-medium rounded-lg shadow-md w-[400px] text-center
                <?php if ($type == 'success') echo 'bg-green-100 text-green-800 border border-green-300'; ?>
                <?php if ($type == 'warning') echo 'bg-yellow-100 text-yellow-800 border border-yellow-300'; ?>
                <?php if ($type == 'danger')  echo 'bg-red-100 text-red-800 border border-red-300'; ?>">

                            <?php if ($type == 'success'): ?>
                                <i class="fas fa-check-circle text-green-600 text-lg"></i>
                            <?php elseif ($type == 'warning'): ?>
                                <i class="fas fa-exclamation-triangle text-yellow-600 text-lg"></i>
                            <?php elseif ($type == 'danger'): ?>
                                <i class="fas fa-times-circle text-red-600 text-lg"></i>
                            <?php endif; ?>

                            <span class="flex-1"><?= $message; ?></span>
                        </div>
                    </div>

                    <script>
                        setTimeout(function() {
                            var flashMessage = document.getElementById('flash-message');
                            if (flashMessage) {
                                flashMessage.style.display = 'none';
                            }
                        }, 3000);
                    </script>
            <?php endif; ?>



            <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php


                $gallery = $mysqli->query("SELECT * FROM gallery_images");


                // Fetch and display the titles
                while ($row = $gallery->fetch_assoc()):

                ?>

                    <div class="gallery-item rounded-xl shadow-md" data-aos="fade-up" data-aos-delay="100">
                        <!-- Dynamic Image Display -->

                        <img src="g_images/<?php echo ($row['g_image']) ?>" alt="Gallery Image"
                            class="w-full h-64 object-cover rounded-xl" />
                        <a href="logics.php?gallery_delete_id=<?php echo $row['id']; ?>" class="delete-icon-btn shadow-lg ">
                            <i class="fas fa-trash-alt"></i>

                        </a>

                    </div>
                <?php endwhile; ?>



            </section>
        </main>
    </div>

    <div id="uploadModal" class="modal-overlay">
        <div class="modal-content" onclick="event.stopPropagation()">
            <button onclick="closeModal()"
                class="absolute top-4 right-4 text-rental-gray-500 hover:text-rental-primary transition-colors">
                <i class="bx bx-x text-2xl"></i>
            </button>
            <h2 class="text-2xl font-bold text-rental-primary font-merriweather mb-6">Add New Image</h2>
            <form action="logics.php" method="POST" class="space-y-6" enctype="multipart/form-data">


                <div>
                    <label class="block text-sm font-medium text-rental-gray-700 font-lora mb-2">Upload Image</label>
                    <div
                        class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-rental-gray-200 border-dashed rounded-md custom-file-upload">
                        <div class="space-y-1 text-center">
                            <svg class="mx-auto h-12 w-12 text-rental-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48" aria-hidden="true">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m-4-4l-1.172 1.172a4 4 0 01-5.656 0L28 28m0 0L32 32m8-12v8m0-8a4 4 0 00-4-4h-4a4 4 0 00-4 4m8 0a4 4 0 004 4m0-4a4 4 0 01-4-4m-4-4a4 4 0 00-4 4m0-4a4 4 0 014-4m0 0a4 4 0 004-4v-4a4 4 0 00-4-4m-4 0a4 4 0 00-4 4v4a4 4 0 004 4"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="flex text-sm text-rental-gray-600">
                                <label for="file-upload"
                                    class="relative cursor-pointer rounded-md font-medium text-rental-accent hover:text-[#d37827] focus-within:outline-none">
                                    <span>Upload Image</span>
                                    <input id="file-upload" name="g_image" type="file" class="sr-only"
                                        onchange="previewImage(event)" />
                                </label>
                                <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs text-rental-gray-500">PNG, JPG, GIF up to 10MB</p>
                        </div>
                    </div>
                </div>

                <div id="image-preview" class="mt-4 text-center">
                    <!-- Image preview will be displayed here -->
                </div>

                <div class="pt-5">
                    <div class="flex justify-end space-x-4">
                        <button type="button" onclick="closeModal()"
                            class="px-6 py-3 border border-rental-gray-300 rounded-md shadow-sm text-sm font-medium text-rental-gray-700 bg-white hover:bg-rental-gray-100 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rental-accent font-merriweather">Cancel</button>
                        <button type="submit" name="gallery_add"
                            class="bg-course-primary text-white px-6 py-3 rounded-lg shadow-md hover:bg-course-orange-light transition-colors duration-200 flex items-center space-x-2 text-lg font-semibold">Submit
                            Image</button>

                        <div class="flex justify-end pt-6 border-t border-gray-200 mt-6">

                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
    <div id="sidebar-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden md:hidden"></div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('back/main.js') }}"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true,
        });

        function openModal() {
            const modal = document.getElementById('uploadModal');
            modal.classList.add('active');
        }

        function closeModal() {
            const modal = document.getElementById('uploadModal');
            modal.classList.remove('active');
        }

        // Close modal by clicking outside
        document.getElementById('uploadModal').addEventListener('click', (e) => {
            if (e.target.id === 'uploadModal') {
                closeModal();
            }
        });

        // Image Preview logic
        const fileUpload = document.getElementById('file-upload');
        const imagePreviews = document.getElementById('image-previews');

        fileUpload.addEventListener('change', (event) => {
            imagePreviews.innerHTML = ''; // Clear previous previews
            const files = event.target.files;
            if (files) {
                for (const file of files) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        const div = document.createElement('div');
                        div.className = 'relative w-full h-32 rounded-md overflow-hidden shadow-md';
                        div.innerHTML = `
                <img src="${e.target.result}" class="w-full h-full object-cover" />
                <button class="absolute top-1 right-1 p-1 bg-red-500 text-white rounded-full text-xs hover:bg-red-600 transition-colors">
                  <i class="bx bx-x"></i>
                </button>
              `;
                        div.querySelector('button').addEventListener('click', () => {
                            div.remove();
                        });
                        imagePreviews.appendChild(div);
                    };
                    reader.readAsDataURL(file);
                }
            }
        });
    </script>
</body>

</html>