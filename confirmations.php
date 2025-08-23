<?php include('app/db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation - Mountenna Group</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Libertinus+Sans:ital,wght@0,400;0,700;1,400&family=Parkinsans:wght@300..800&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <?php include "tsconfig.php" ?>

    <link rel="stylesheet" href="style.css">
</head>

<body class="min-h-screen bg-gray-50">
    <?php include "nav.php" ?>

    <section class="py-24 md:py-32">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto bg-white p-8 md:p-12 rounded-2xl shadow-xl text-center border border-gray-100">
                
                <div class="w-24 h-24 bg-teal-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-5xl text-teal-600"></i>
                </div>
                
                <h1 class="text-4xl lg:text-5xl font-bold font-heading gradient-text">
                    Thank You!
                </h1>
              
                
                <hr class="my-8 border-gray-200">

            


                <div class="space-y-4">
                    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
                        <a href="index.php" class="w-full sm:w-auto bg-royal-600 hover:bg-royal-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-300">
                            <i class="fas fa-home mr-2"></i> Return to Home
                        </a>
                      
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php 
    // We add a div to push the footer down on pages with less content
    echo '<div class="flex-grow"></div>';
    include "footer.php";
    ?>
    <script src="main.js"></script>
</body>

</html>