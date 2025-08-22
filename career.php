<?php include('app/db.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers - Mountenna Group</title>
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

    <section id="why-join" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <div class="inline-block mb-4">
                    <span class="bg-royal-100 text-royal-800 px-4 py-2 rounded-full text-sm font-semibold font-sans">
                        Our Culture
                    </span>
                </div>
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    More Than a Job, It's a Mission
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    We foster a collaborative and inclusive environment where every team member is empowered to grow and make an impact.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="group p-8 bg-white border border-gray-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-navy-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-chart-line text-3xl text-navy-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Continuous Learning</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        We invest in your professional development with access to courses, workshops, and mentorship programs.
                    </p>
                </div>

                <div class="group p-8 bg-white border border-gray-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-teal-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-3xl text-teal-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Innovative Projects</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        Work on cutting-edge projects that challenge you and redefine industry standards. Your ideas matter here.
                    </p>
                </div>

                <div class="group p-8 bg-white border border-gray-100 rounded-2xl transition-all duration-300 hover:shadow-xl hover:-translate-y-2">
                    <div class="w-16 h-16 bg-gold-100 rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-3xl text-gold-600"></i>
                    </div>
                    <h3 class="text-2xl font-bold font-heading mb-4 text-navy-900">Health & Wellness</h3>
                    <p class="text-gray-600 font-sans leading-relaxed">
                        We prioritize your well-being with comprehensive health benefits and a focus on work-life balance.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="open-positions" class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-4xl mx-auto mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6 font-heading gradient-text">
                    Current Openings
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed font-sans">
                    Find the role that's right for you and take the next step in your career journey with Mountenna Group.
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="space-y-6">
                    <?php


                    $team = $mysqli->query("SELECT * FROM career");


                    // Fetch and display the titles
                    while ($row = $team->fetch_assoc()):

                    ?>
                        <div class="bg-white border border-gray-200 rounded-lg p-6 transition-shadow duration-300 hover:shadow-lg">
                            <div class="flex flex-col sm:flex-row justify-between sm:items-center">
                                <div>
                                    <h3 class="text-xl font-bold font-heading text-navy-900 hover:text-royal-700">
                                        <a href="#">   <?php echo $row['j_title']; ?></a>
                                    </h3>
                                    <div class="flex items-center space-x-4 text-sm text-gray-500 mt-2">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-briefcase text-teal-600"></i>
                                            <span><?php echo $row['j_company']; ?></span>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-map-marker-alt text-teal-600"></i>
                                            <span><?php echo $row['j_type']; ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 sm:mt-0">
                                    <a href="booking.php?booking_id=<?php echo $row['id']; ?>" class="bg-royal-100 text-royal-800 hover:bg-royal-200 px-6 py-2 rounded-lg font-semibold transition-colors duration-200">
                                        Apply Now
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </section>




    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-gradient-to-r from-navy-700 to-royal-800 rounded-2xl p-12 text-center text-white max-w-4xl mx-auto">
                <h2 class="text-3xl lg:text-4xl font-bold font-heading mb-4">
                    Don't See a Role For You?
                </h2>
                <p class="text-lg text-gray-300 mb-8 max-w-2xl mx-auto">
                    We are always looking for passionate and talented individuals. If you believe you have what it takes, send us your CV and let's start a conversation.
                </p>
                <a href="mailto:careers@mountenna.com"
                    class="bg-white text-navy-900 hover:bg-gray-100 px-8 py-4 text-lg font-semibold shadow-xl rounded-lg transition-all duration-300 inline-block">
                    Submit Your CV <i class="fas fa-paper-plane ml-2"></i>
                </a>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
    <script src="main.js"></script>
</body>

</html>