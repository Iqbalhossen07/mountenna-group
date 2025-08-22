<?php include('app/db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Mountenna Group Moments</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Parkinsans:wght@300..800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php include "tsconfig.php" ?>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Additional styles for gallery and lightbox */
        .hero-bg-gallery {
            background-image: url('https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=1920&auto=format&fit=crop');
        }

        .gallery-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            aspect-ratio: 1 / 1;
            /* Creates a square aspect ratio */
        }

        .gallery-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }

        .lightbox {
            transition: opacity 0.3s ease-in-out;
        }

        .lightbox-content {
            transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
        }
    </style>
</head>

<body class="bg-white">

    <?php include "nav.php" ?>

    <!-- Page Header -->
    <section class="relative h-[450px] bg-cover bg-center hero-bg-gallery">
        <div class="absolute inset-0 bg-navy-900/60"></div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="text-center text-white max-w-4xl mx-auto px-4">
                <h1 class="text-5xl lg:text-6xl font-bold font-heading">Our Gallery</h1>
                <p class="text-xl font-sans mt-4">A Glimpse into Our Journey, Partnerships, and Successes</p>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <main class="py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Image Grid -->
            <div id="gallery-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <?php


                $gallery = $mysqli->query("SELECT * FROM gallery_images");


                // Fetch and display the titles
                while ($row = $gallery->fetch_assoc()):

                ?>
                    <!-- All images are now in a single grid for uniform layout -->                    <div class="gallery-item">
                        <img src="app/g_images/<?php echo ($row['g_image']) ?>" alt="Graduation Day"
                            class="rounded-lg cursor-pointer w-full h-full object-cover">
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </main>

    <!-- Lightbox Modal -->
    <div id="lightbox"
        class="lightbox fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center p-4 z-[100] opacity-0 pointer-events-none">
        <div class="relative">
            <button onclick="closeLightbox()"
                class="absolute -top-12 right-0 w-10 h-10 text-white text-2xl">&times;</button>
            <img id="lightbox-img" src="" alt="Enlarged gallery image"
                class="lightbox-content max-w-[90vw] max-h-[85vh] rounded-lg opacity-0 transform scale-95">
        </div>
    </div>

    <?php include "footer.php" ?>

    <script src="main.js"></script>
    <script>
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');

        // Lightbox functionality
        galleryItems.forEach(item => {
            item.addEventListener('click', () => {
                const imgSrc = item.querySelector('img').src;
                lightboxImg.src = imgSrc;
                lightbox.classList.remove('opacity-0', 'pointer-events-none');
                setTimeout(() => {
                    lightboxImg.classList.remove('opacity-0', 'scale-95');
                }, 50); // Small delay for transition
            });
        });

        function closeLightbox() {
            lightboxImg.classList.add('opacity-0', 'scale-95');
            setTimeout(() => {
                lightbox.classList.add('opacity-0', 'pointer-events-none');
            }, 300); // Match transition duration
        }

        // Close lightbox on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeLightbox();
            }
        });
    </script>
</body>

</html>