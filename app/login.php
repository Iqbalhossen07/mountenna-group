<?php
include('db.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mountenna Tech - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap"
        rel="stylesheet" />
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{asset('img/logo.webp')}}" type="image/x-icon">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        "rental-primary": "#2C3E50",
                        "rental-accent": "#FF385C",
                        "rental-blue": "#3498DB",
                        "rental-bg": "#F8F9FA",
                        "rental-gray": {
                            50: "#F8F9FA",
                            100: "#E9ECEF",
                            200: "#DEE2E6",
                            300: "#CED4DA",
                            400: "#ADB5BD",
                            500: "#6C757D",
                            600: "#495057",
                            700: "#343A40",
                            800: "#212529",
                            900: "#0D1117",
                        },
                    },
                    fontFamily: {
                        lora: ["Lora", "serif"],
                        merriweather: ["Merriweather", "serif"],
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

        .btn-gradient {
            background: linear-gradient(to right, #ff385c, #d37827);
            color: white;
            border: none;
        }
    </style>
</head>

<body class="bg-rental-bg flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md mx-4" data-aos="zoom-in">
        <div class="text-center mb-6">
            <a href="index.php" class="inline-flex items-center space-x-2 mb-4">
                
                <span class="text-xl font-bold text-rental-primary font-merriweather"><img class="w-1/2 mx-auto" src="{{asset('img/logo.webp')}}" alt=""></span>
            </a>
            <h2 class="text-3xl font-bold font-merriweather text-rental-primary mb-2">
                Welcome <span class="title-gradient">Admin</span>
            </h2>
            <p class="text-rental-gray-600 font-lora">
                Enter your credentials to access your account.
            </p>
        </div>

              <?php 
                if (isset($_SESSION['error'])) {
                    echo "<p id='error-msg' style='color:red;'>".$_SESSION['error']."</p>";
                    unset($_SESSION['error']); // সেশন থেকে এরর মুছে ফেলা
                }
            ?>

        <form action="logics.php" method="POST" class="space-y-4">
         
            <div>
                <label for="email" class="block text-sm font-medium text-rental-gray-700 font-lora">Email
                    Address</label>
                <input type="email" name="email" id="email"
                    class="mt-1 block w-full rounded-md border border-rental-gray-200 shadow-sm p-3 focus:ring-rental-accent focus:border-rental-accent"
                    placeholder="you@example.com" />
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-rental-gray-700 font-lora">Password</label>
                <input type="password" name="password" id="password"
                    class="mt-1 block w-full rounded-md border border-rental-gray-200 shadow-sm p-3 focus:ring-rental-accent focus:border-rental-accent"
                    placeholder="••••••••" />
            </div>
          
            <div>
                <button type="submit" name="adminlogin"
                    class="w-full px-6 py-3 border border-transparent shadow-sm text-base font-medium rounded-md text-white btn-gradient hover:opacity-90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rental-accent font-merriweather">
                    Sign In
                </button>
            </div>
        </form>

    </div>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
        });
    </script>
</body>

</html>
