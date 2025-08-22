<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You | Mountenna Group</title>
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

    <!-- Thank You Section -->
    <main class="flex items-center justify-center" style="min-height: calc(100vh - 128px);">
        <!-- Adjust height based on nav/footer -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-gray-50 max-w-2xl mx-auto p-8 sm:p-12 rounded-2xl border border-gray-100">
                <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-5xl text-green-600"></i>
                </div>
                <h1 class="text-4xl lg:text-5xl font-bold font-heading text-navy-900 mb-4">Thank You!</h1>
                <p class="text-xl font-sans text-gray-700 leading-relaxed mb-8">
                    Your message has been sent successfully. Our team will review it and get back to you as soon as
                    possible.
                </p>
                <a href="index.php"
                    class="bg-royal-600 hover:bg-royal-700 text-white px-8 py-3 text-lg font-semibold shadow-xl rounded-lg transition-all duration-300 inline-block">
                    <i class="fas fa-arrow-left mr-2"></i> Return to Home
                </a>
            </div>
        </div>
    </main>

    <?php include "footer.php" ?>

    <script src="main.js"></script>
</body>

</html>