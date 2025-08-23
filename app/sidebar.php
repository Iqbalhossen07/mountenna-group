<aside
    class="w-64 bg-sidebar-bg text-white flex-shrink-0 min-h-screen flex flex-col fixed md:relative z-40 transition-all duration-300 -translate-x-full md:translate-x-0 shadow-lg"
    id="sidebar">
    <div class="bg-white p-6 border-b border-gray-700">
        <a href="index.php" class="flex items-center space-x-3 group text-white">
          
            <span class="text-2xl font-bold tracking-wide"><img class="w-3/4" src="../img/logo.png" alt=""></span>
        </a>
    </div>
<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="flex-1 overflow-y-auto sidebar-nav py-6">
    <ul class="space-y-2 px-3">

        <li>
            <a href="index.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'index.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-tachometer-alt text-lg fa-fw"></i>
                <span class="font-medium">Dashboard</span>
            </a>
        </li>

        <!-- <li>
            <a href="about.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'about.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-address-card text-lg fa-fw"></i>
                <span class="font-medium">About</span>
            </a>
        </li> -->

        <li>
            <a href="user_message.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'user_message.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-message text-lg fa-fw"></i>
                <span class="font-medium">Users Message</span>
            </a>
        </li>

        <li>
            <a href="team.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'team.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-users-cog text-lg fa-fw"></i>
                <span class="font-medium">Our Team</span>
            </a>
        </li>

        <li>
            <a href="job.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'job.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-code text-lg fa-fw"></i>
                <span class="font-medium">Job</span>
            </a>
        </li>

        <li>
            <a href="gallery.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'gallery.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-image fa-fw"></i>
                <span class="font-medium">Gallery</span>
            </a>
        </li>

        <li>
            <a href="testimonial.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'testimonial.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-star text-lg fa-fw"></i>
                <span class="font-medium">Testimonials</span>
            </a>
        </li>

        <li>
            <a href="blog.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'blog.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-blog text-lg fa-fw"></i>
                <span class="font-medium">Our Blog</span>
            </a>
        </li>

        <li>
            <a href="contact.php"
               class="flex items-center space-x-3 px-4 py-2 rounded-lg text-sidebar-text hover:bg-primary/20 hover:text-white transition-colors duration-200
               <?php echo ($current_page == 'contact.php') ? 'bg-sidebar-item-active text-white shadow-custom-sm hover:shadow-custom-md' : ''; ?>">
                <i class="fas fa-phone text-lg fa-fw"></i>
                <span class="font-medium">Contact</span>
            </a>
        </li>

    </ul>
</nav>


    <div class="p-6 border-t border-gray-700 mt-auto">
       <!-- <a href="{{ route('admin.logout') }}"
            class="flex items-center px-4 py-2 rounded-lg font-medium text-gray-300 hover:text-white hover:bg-sidebar-item-hover transition-colors duration-200">
            <i class="fas fa-sign-out-alt mr-3"></i> Logout
        </a>  -->

        <form action="logout.php" method="POST">
  
    <button type="submit"><i class="fas fa-sign-out-alt mr-3"></i>Logout</button>
</form>

    

    </div>
</aside>
