<?php include('app/db.php');


if (isset($_GET['booking_id'])) {
    $booking_id = $_GET['booking_id'];
    $job_update_id_result = $mysqli->query("SELECT * FROM career WHERE id='$booking_id' ");
    if (!empty($job_update_id_result)) {
        $row = $job_update_id_result->fetch_array();

        $j_title = $row['j_title'];
        $j_company = $row['j_company'];
        $j_type = $row['j_type'];
        $j_des = $row['j_des'];
       
     
    }

   
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
 

    <title><?php echo $j_title; ?> - Mountenna Group</title>
    
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

<body class="min-h-screen bg-white">
    <?php include "nav.php" ?>

   

       <div class="relative h-[50vh] min-h-[400px] bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1621036579842-9080c7119f67?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="absolute inset-0 bg-navy-900/50"></div>
        <div class="relative z-10 h-full flex items-center justify-center">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <div class="max-w-3xl mx-auto text-white space-y-6 animate-fade-in-up">
                    <h1 class="text-5xl lg:text-6xl font-bold font-heading">
                        Build Your Future With Us
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-200 font-sans">
                        Join a team of innovators, thinkers, and builders dedicated to shaping the future.
                    </p>

                </div>
            </div>
        </div>
    </div>

    <section class="py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-2">
                    <div class="prose max-w-none font-sans text-gray-700 leading-relaxed space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold font-heading text-navy-900 mb-4">Job Description</h2>
                            <p><?php echo $j_des ?></p>
                        </div>

                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="lg:sticky top-24 space-y-6">
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                            <h3 class="text-xl font-bold font-heading text-navy-900 mb-4">Ready to Apply?</h3>
                            <a href="booking.php?booking_id=<?php echo $booking_id ?>" class="w-full bg-royal-600 hover:bg-royal-700 text-white py-3 rounded-lg font-semibold transition-colors duration-300 inline-block">
                                Apply Now <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg p-6">
                            <h3 class="text-lg font-bold font-heading text-navy-900 mb-4 border-b pb-3">Job Summary</h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="font-semibold text-gray-600">Job Name:</span>
                                    <span class="text-gray-800"><?php echo $j_title; ?></span>

                                </div>
                             
                                <div class="flex justify-between">
                                    <span class="font-semibold text-gray-600">Job Type:</span>
                                    <span class="text-gray-800"><?php echo $j_type; ?></span>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
    <script src="main.js"></script>
</body>

</html>