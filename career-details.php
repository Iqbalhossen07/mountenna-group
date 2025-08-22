<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
    // In a real application, you would fetch this data from a database based on an ID (e.g., $_GET['id']).
    // For this example, we'll use a static PHP array to simulate dynamic data.
    $job = [
        'title' => 'Senior Software Engineer',
        'department' => 'Mountenna Tech',
        'location' => 'London, UK',
        'type' => 'Full-time',
        'salary' => '£65,000 - £80,000 per year',
        'summary' => 'We are seeking a highly skilled Senior Software Engineer to join our innovative Mountenna Tech division. You will be responsible for designing, developing, and deploying high-quality software solutions that drive our business forward. This is a fantastic opportunity to work on cutting-edge projects within a collaborative and forward-thinking team.',
        'responsibilities' => [
            'Lead the design and development of scalable, high-performance applications.',
            'Write clean, maintainable, and well-documented code.',
            'Collaborate with cross-functional teams including product managers and designers.',
            'Mentor junior engineers and contribute to code reviews.',
            'Troubleshoot, debug, and upgrade existing software.',
            'Participate in the full software development lifecycle (SDLC).',
        ],
        'qualifications' => [
            '5+ years of professional software development experience.',
            'Proficiency in one or more backend languages (e.g., PHP, Python, Java, Node.js).',
            'Strong experience with modern frontend frameworks (e.g., React, Vue, Angular).',
            'Experience with cloud platforms like AWS, Azure, or Google Cloud.',
            'Solid understanding of database design and SQL.',
            'Excellent problem-solving and communication skills.',
        ],
        'benefits' => [
            'Competitive salary and performance bonus.',
            'Comprehensive health, dental, and vision insurance.',
            'Generous pension scheme.',
            'Flexible working hours and hybrid work model.',
            'Professional development budget for courses and conferences.',
            'A vibrant and inclusive company culture.',
        ]
    ];
    ?>

    <title><?php echo htmlspecialchars($job['title']); ?> - Mountenna Group</title>
    
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

    <section class="pt-24 pb-12 bg-gray-50 border-b border-gray-200">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-4xl">
                <a href="career.php" class="text-royal-600 hover:text-royal-800 font-semibold text-sm mb-4 inline-block">
                    <i class="fas fa-arrow-left mr-2"></i>Back to all openings
                </a>
                <h1 class="text-4xl lg:text-5xl font-bold font-heading text-navy-900">
                    <?php echo htmlspecialchars($job['title']); ?>
                </h1>
                <div class="flex flex-wrap items-center space-x-6 text-gray-600 mt-4">
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-briefcase text-lg text-teal-600"></i>
                        <span class="font-medium"><?php echo htmlspecialchars($job['department']); ?></span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-map-marker-alt text-lg text-teal-600"></i>
                        <span class="font-medium"><?php echo htmlspecialchars($job['location']); ?></span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <i class="fas fa-clock text-lg text-teal-600"></i>
                        <span class="font-medium"><?php echo htmlspecialchars($job['type']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-3 gap-12">
                
                <div class="lg:col-span-2">
                    <div class="prose max-w-none font-sans text-gray-700 leading-relaxed space-y-8">
                        <div>
                            <h2 class="text-2xl font-bold font-heading text-navy-900 mb-4">Job Description</h2>
                            <p><?php echo htmlspecialchars($job['summary']); ?></p>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold font-heading text-navy-900 mb-4">Key Responsibilities</h2>
                            <ul class="space-y-3">
                                <?php foreach ($job['responsibilities'] as $item): ?>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-royal-500 mt-1 mr-3"></i>
                                        <span><?php echo htmlspecialchars($item); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        
                        <div>
                            <h2 class="text-2xl font-bold font-heading text-navy-900 mb-4">Qualifications & Skills</h2>
                            <ul class="space-y-3">
                                <?php foreach ($job['qualifications'] as $item): ?>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-royal-500 mt-1 mr-3"></i>
                                        <span><?php echo htmlspecialchars($item); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div>
                            <h2 class="text-2xl font-bold font-heading text-navy-900 mb-4">What We Offer</h2>
                            <ul class="space-y-3">
                                <?php foreach ($job['benefits'] as $item): ?>
                                    <li class="flex items-start">
                                        <i class="fas fa-check-circle text-royal-500 mt-1 mr-3"></i>
                                        <span><?php echo htmlspecialchars($item); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-1">
                    <div class="lg:sticky top-24 space-y-6">
                        <div class="bg-gray-50 border border-gray-200 rounded-lg p-6 text-center">
                            <h3 class="text-xl font-bold font-heading text-navy-900 mb-4">Ready to Apply?</h3>
                            <a href="#" class="w-full bg-royal-600 hover:bg-royal-700 text-white py-3 rounded-lg font-semibold transition-colors duration-300 inline-block">
                                Apply Now <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                        </div>
                        <div class="bg-white border border-gray-200 rounded-lg p-6">
                            <h3 class="text-lg font-bold font-heading text-navy-900 mb-4 border-b pb-3">Job Summary</h3>
                            <div class="space-y-3 text-sm">
                                <div class="flex justify-between">
                                    <span class="font-semibold text-gray-600">Department:</span>
                                    <span class="text-gray-800"><?php echo htmlspecialchars($job['department']); ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-semibold text-gray-600">Location:</span>
                                    <span class="text-gray-800"><?php echo htmlspecialchars($job['location']); ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-semibold text-gray-600">Job Type:</span>
                                    <span class="text-gray-800"><?php echo htmlspecialchars($job['type']); ?></span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="font-semibold text-gray-600">Salary:</span>
                                    <span class="text-gray-800"><?php echo htmlspecialchars($job['salary']); ?></span>
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