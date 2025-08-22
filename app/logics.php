<?php
include('db.php');




// admin lawyer logic

if (isset($_POST['adminlogin'])) {


  $email = $_POST['email'];
  $password = $_POST['password'];

  // ডাটাবেজ থেকে ইউজারের তথ্য যাচাই
  $login_query = "SELECT * FROM `admin_table` WHERE email = '$email'";
  $login_run = mysqli_query($mysqli, $login_query);

  if (mysqli_num_rows($login_run) > 0) {
    $login_row = mysqli_fetch_array($login_run);

    // ডাটাবেজ থেকে পাওয়া পাসওয়ার্ড ও অন্যান্য তথ্য
    $db_pass = $login_row['password'];
    $user_id = $login_row['id'];
    $user_type = $login_row['user_type'];

    // পাসওয়ার্ড ভেরিফিকেশন
    if ($password == $db_pass) {
      // সেশন সেট করা
      $_SESSION['email'] = $email;
      $_SESSION['user_id'] = $user_id;
      $_SESSION['user_type'] = $user_type;

      // user_type অনুসারে রিডিরেক্ট
      if ($user_type == 'applicant') {
        header('Location: ../index.php');
        exit();
      } elseif ($user_type == 'admin' || $user_type == 'lawyer') {
        header('Location: index.php');
        exit();
      }
    } else {
      // পাসওয়ার্ড ভুল হলে এরর মেসেজ সেট করে লগইন পেজে পাঠানো
      $_SESSION['error'] = "Incorrect password!";
      header('Location: login.php');
      exit();
    }
  } else {
    // ইমেইল না থাকলে এরর মেসেজ সেট করে লগইন পেজে পাঠানো
    $_SESSION['error'] = "Email not found!";
    header('Location: login.php');
    exit();
  }
}




// Add gallery  Logic

if (isset($_POST['gallery_add'])) {

  $g_image = $_FILES['g_image']['name'];
  $tmpName = $_FILES['g_image']['tmp_name'];
  $folder = 'g_images/' . $g_image;



  $mysqli->query("INSERT INTO gallery_images (g_image) VALUES ('$g_image')");

  move_uploaded_file($tmpName, $folder);


  $_SESSION['message'] = "Gallery has been added";
  $_SESSION['message_type'] = 'success';
  header("location:gallery.php");
}


// delete gallery logic 

if (isset($_GET['gallery_delete_id'])) {
  $id = $_GET['gallery_delete_id'];

  $mysqli->query("DELETE FROM gallery_images WHERE id=$id");

  $_SESSION['message'] = "Gallery has been Deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:gallery.php");
}





// Add Blog  Logic
if (isset($_POST['add_blog'])) {
  $b_title = $_POST['b_title'];
  $b_author = $_POST['b_author'];
  $b_date = $_POST['b_date'];
  $b_des = mysqli_real_escape_string($mysqli, $_POST['b_des']);
  $b_category = $_POST['b_category'];

  // Image upload
  $b_image = $_FILES['b_image']['name'];
  $tmpName = $_FILES['b_image']['tmp_name'];
  $folder  = 'blogImage/' . $b_image;

  // Insert query
  $mysqli->query("INSERT INTO blogs (b_title, b_author, b_date, b_des, b_category, b_image) 
                  VALUES ('$b_title', '$b_author', '$b_date', '$b_des', '$b_category', '$b_image')");

  // Move uploaded file
  move_uploaded_file($tmpName, $folder);

  // Flash message
  $_SESSION['message'] = "Blog has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:blog.php");
  exit();
}


// Update Blog  Logic

if (isset($_POST['update_blog'])) {
  $blog_update_id = $_POST['id'];

  $b_title    = $_POST['b_title'];
  $b_author   = $_POST['b_author'];
  $b_date     = $_POST['b_date'];
  $b_des      = mysqli_real_escape_string($mysqli, $_POST['b_des']);
  $b_category = $_POST['b_category'];


  $b_image = $_FILES['b_image']['name'];
  $old_image = $_POST['old_image'];

  if ($b_image != '') {
    $b_image = $_FILES['b_image']['name'];
  } else {
    $b_image = $old_image;
  }
  $tmpName = $_FILES['b_image']['tmp_name'];
  $folder = 'blogImage/' . $b_image;


  $mysqli->query("UPDATE `blogs` SET `b_title` = '$b_title', `b_author` = '$b_author', `b_date` = '$b_date', `b_des` = '$b_des', `b_category` = '$b_category', `b_image` = '$b_image' WHERE id=$blog_update_id");

  move_uploaded_file($tmpName, $folder);
  $_SESSION['message'] = "Blog has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:blog.php');
}


// Delete Blog  Logic

if (isset($_GET['blog_delete_id'])) {
  $id = $_GET['blog_delete_id'];

  $mysqli->query("DELETE FROM blogs WHERE id=$id");

  $_SESSION['message'] = "Blog has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:blog.php");
}





// add_testimonial




// Add Testimonial  Logic
if (isset($_POST['add_testimonial'])) {
  $t_name    = $_POST['t_name'];
  $t_desgination   = $_POST['t_desgination'];
  $t_des      = mysqli_real_escape_string($mysqli, $_POST['t_des']);

  // Image upload
  $t_image = $_FILES['t_image']['name'];
  $tmpName = $_FILES['t_image']['tmp_name'];
  $folder  = 'testimonial_image/' . $t_image;

  // Insert query
  $mysqli->query("INSERT INTO testimonials (t_name, t_desgination, t_des, t_image ) 
                  VALUES ('$t_name', '$t_desgination', '$t_des', '$t_image')");

  // Move uploaded file
  move_uploaded_file($tmpName, $folder);

  // Flash message
  $_SESSION['message'] = "Testimonial has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:testimonial.php");
  exit();
}


// Update Testimonial  Logic

if (isset($_POST['update_testimonial'])) {
  $testimonial_update_id = $_POST['id'];
  $t_name = $_POST['t_name'];
  $t_desgination  = $_POST['t_desgination'];
  $t_des = mysqli_real_escape_string($mysqli, $_POST['t_des']);


  $t_image = $_FILES['t_image']['name'];
  $old_image = $_POST['old_image'];

  if ($t_image != '') {
    $t_image = $_FILES['t_image']['name'];
  } else {
    $t_image = $old_image;
  }
  $tmpName = $_FILES['t_image']['tmp_name'];
  $folder = 'testimonial_image/' . $t_image;


  $mysqli->query("UPDATE `testimonials` SET `t_name` = '$t_name', `t_desgination` = '$t_desgination', `t_des` = '$t_des', `t_image` = '$t_image' WHERE id=$testimonial_update_id");

  move_uploaded_file($tmpName, $folder);
  $_SESSION['message'] = "Testimonial has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:testimonial.php');
}


// Delete testimonial  Logic

if (isset($_GET['testimonial_delete_id'])) {
  $id = $_GET['testimonial_delete_id'];

  $mysqli->query("DELETE FROM testimonials WHERE id=$id");

  $_SESSION['message'] = "Testimonial has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:testimonial.php");
}




// add_team




// Add team  Logic
if (isset($_POST['add_team'])) {
  $t_name = $_POST['t_name'];
  $t_designation = $_POST['t_designation'];
  $t_des = mysqli_real_escape_string($mysqli, $_POST['t_des']);
  $t_linkedln = mysqli_real_escape_string($mysqli, $_POST['t_linkedln']);
  $t_github = mysqli_real_escape_string($mysqli, $_POST['t_github']);

  // Image upload
  $t_image = $_FILES['t_image']['name'];
  $tmpName = $_FILES['t_image']['tmp_name'];
  $folder  = 'team_image/' . $t_image;

  // Insert query
  $mysqli->query("INSERT INTO teams (t_name, t_designation, t_des, t_linkedln, t_github, t_image ) 
                  VALUES ('$t_name', '$t_designation', '$t_des', '$t_linkedln', '$t_github', '$t_image')");

  // Move uploaded file
  move_uploaded_file($tmpName, $folder);

  // Flash message
  $_SESSION['message'] = "Team has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:team.php");
  exit();
}


// Update Testimonial  Logic

if (isset($_POST['update_testimonial'])) {
  $testimonial_update_id = $_POST['id'];
  $t_name = $_POST['t_name'];
  $t_desgination  = $_POST['t_desgination'];
  $t_des = mysqli_real_escape_string($mysqli, $_POST['t_des']);


  $t_image = $_FILES['t_image']['name'];
  $old_image = $_POST['old_image'];

  if ($t_image != '') {
    $t_image = $_FILES['t_image']['name'];
  } else {
    $t_image = $old_image;
  }
  $tmpName = $_FILES['t_image']['tmp_name'];
  $folder = 'testimonial_image/' . $t_image;


  $mysqli->query("UPDATE `testimonials` SET `t_name` = '$t_name', `t_desgination` = '$t_desgination', `t_des` = '$t_des', `t_image` = '$t_image' WHERE id=$testimonial_update_id");

  move_uploaded_file($tmpName, $folder);
  $_SESSION['message'] = "Testimonial has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:testimonial.php');
}


// Delete testimonial  Logic

if (isset($_GET['testimonial_delete_id'])) {
  $id = $_GET['testimonial_delete_id'];

  $mysqli->query("DELETE FROM testimonials WHERE id=$id");

  $_SESSION['message'] = "Testimonial has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:testimonial.php");
}
