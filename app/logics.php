<?php
include('db.php');

// PHPMailer দিয়ে ইমেইল পাঠানো
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


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


// Update team  Logic

if (isset($_POST['update_team'])) {
  $team_update_id = $_POST['id'];
  $t_name = $_POST['t_name'];
  $t_designation = $_POST['t_designation'];
  $t_des = mysqli_real_escape_string($mysqli, $_POST['t_des']);
  $t_linkedln = mysqli_real_escape_string($mysqli, $_POST['t_linkedln']);
  $t_github = mysqli_real_escape_string($mysqli, $_POST['t_github']);


  $t_image = $_FILES['t_image']['name'];
  $old_image = $_POST['old_image'];

  if ($t_image != '') {
    $t_image = $_FILES['t_image']['name'];
  } else {
    $t_image = $old_image;
  }
  $tmpName = $_FILES['t_image']['tmp_name'];
  $folder = 'team_image/' . $t_image;


  $mysqli->query("UPDATE `teams` SET `t_name` = '$t_name', `t_designation` = '$t_designation', `t_des` = '$t_des', `t_linkedln` = '$t_linkedln', `t_github` = '$t_github', `t_image` = '$t_image' WHERE id=$team_update_id");

  move_uploaded_file($tmpName, $folder);
  $_SESSION['message'] = "Team has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:team.php');
}


// Delete team  Logic

if (isset($_GET['team_delete_id'])) {
  $id = $_GET['team_delete_id'];

  $mysqli->query("DELETE FROM teams WHERE id=$id");

  $_SESSION['message'] = "Team has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:team.php");
}




// Add contact  Logic
if (isset($_POST['contact_added'])) {
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $location = $_POST['location'];


  // Insert query
  $mysqli->query("INSERT INTO contact_table (email, phone, location ) VALUES ('$email', '$phone', '$location')");

  // Flash message
  $_SESSION['message'] = "Contact Informaiton has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:contact.php");
  exit();
}


// Delete team  Logic

if (isset($_GET['contact_delete_id'])) {
  $id = $_GET['contact_delete_id'];

  $mysqli->query("DELETE FROM contact_table WHERE id=$id");

  $_SESSION['message'] = "Contact has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:contact.php");
}








// Add job  Logic
if (isset($_POST['add_job'])) {
  $j_title = $_POST['j_title'];
  $j_company = $_POST['j_company'];
  $j_type = $_POST['j_type'];
  $j_des = $_POST['j_des'];


  // Insert query
  $mysqli->query("INSERT INTO career (j_title, j_company, j_type, j_des ) VALUES ('$j_title', '$j_company', '$j_type', '$j_des')");

  // Flash message
  $_SESSION['message'] = "Job has been added successfully!";
  $_SESSION['message_type'] = 'success';

  header("location:job.php");
  exit();
}


// Update job  Logic

if (isset($_POST['update_job'])) {
  $job_update_id = $_POST['id'];
  $j_title = $_POST['j_title'];
  $j_company = $_POST['j_company'];
  $j_type = $_POST['j_type'];
  $j_des = $_POST['j_des'];


  $mysqli->query("UPDATE `career` SET `j_title` = '$j_title', `j_title` = '$j_title', `j_company` = '$j_company', `j_type` = '$j_type', `j_des` = '$j_des' WHERE id=$job_update_id");

  move_uploaded_file($tmpName, $folder);
  $_SESSION['message'] = "Job has been updated";
  $_SESSION['message_type'] = 'warning';
  header('location:job.php');
}



// Delete job  Logic

if (isset($_GET['job_delete_id'])) {
  $id = $_GET['job_delete_id'];

  $mysqli->query("DELETE FROM career WHERE id=$id");

  $_SESSION['message'] = "Job has been deleted";
  $_SESSION['message_type'] = 'danger';
  header("location:job.php");
}




// Add booking  Logic
if (isset($_POST['add_booking'])) {
  $u_name = $_POST['u_name'];
  $u_email = $_POST['u_email'];
  $u_phone = $_POST['u_phone'];
  $u_message = $_POST['u_message'];
  $booking_id = $_POST['j_id'];

  $uniqueId = date("YmdHis");
    // Image upload
  $u_cv = $_FILES['u_cv']['name'];
  $tmpName = $_FILES['u_cv']['tmp_name'];
  $folder  = 'user_cv/' . $u_cv;





  // Insert query
  $mysqli->query("INSERT INTO booking (u_name, u_email, u_phone, u_message, u_cv,j_id ) VALUES ('$u_name', '$u_email', '$u_phone', '$u_message', '$u_cv', '$booking_id')");


  move_uploaded_file($tmpName, $folder);

 try {
        require '../vendor/autoload.php';
        require '../vendor/phpmailer/phpmailer/src/Exception.php';
        require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require '../vendor/phpmailer/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'stonebridgeofficial01@gmail.com';  
        $mail->Password   = 'dsagmuhyivobtouo'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;

        // ================= USER MAIL =================
        $mail->setFrom('stonebridgeofficial01@gmail.com', 'Mountenna Group');
        $mail->addAddress($u_email, $u_name);
        $mail->isHTML(true);
        $mail->Subject = "Your Application has been Received - Mountenna Group [ID: $uniqueId]";
        $mail->Body = "
            <h2>Thank you for your application!</h2>
            <p>Dear <strong>$u_name</strong>,</p>
            <p>We have successfully received your application for your desired course. Below are the details we have received:</p>
            <ul>
                <li><strong>Email:</strong> $u_email</li>
            </ul>
          
            <p>Your application is currently under review, and we will get back to you with the next steps shortly.</p>
            <p>Thank you for choosing Mountenna Group. We look forward to assisting you with your educational journey.</p>
            <br>
            <p>Best regards,<br>Mountenna Group Team</p>
        ";
        $mail->send();

        // ================= ADMIN MAIL =================
        $mail->clearAddresses();
        $mail->addAddress('stonebridgeofficial01@gmail.com', 'Admin');

        // CV attach
        $mail->addAttachment($folder, $newFileName);

        $mail->Subject = "New Application Received - Mountenna Group [ID: $uniqueId]";
        $mail->Body = "
            <h2>New Application Received</h2>
            <p>Dear Admin,</p>
            <p>A new application has been submitted. Below are the details provided by the applicant:</p>
            <ul>
                <li><strong>Applicant Name:</strong> $u_name</li>
                <li><strong>Email:</strong> $u_email</li>
                <li><strong>Phone Number:</strong> $u_phone</li>
                <li><strong>Message:</strong> $u_message</li>
            </ul>
            <p>The application status is currently marked as <strong>'pending'</strong>.</p>
            <p>Kindly review the application details and proceed with the necessary actions.</p>
            <p>Thank you for your attention to this matter.</p>
            <br>
            <p>Best regards,<br>Mountenna Group Team</p>
        ";
        $mail->send();

        $_SESSION['message'] = "Application has been successfully added, and emails have been sent.";
        $_SESSION['message_type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = "Application has been added, but email sending failed: " . $mail->ErrorInfo;
        $_SESSION['message_type'] = 'warning';
    }

    // Flash message
    $_SESSION['message'] = "Application has been added successfully!";
    $_SESSION['message_type'] = 'success';

    header("location:../confirmation.php");
    exit();
}

 
// contact_form_submit

if (isset($_POST['contact_form_submit'])) {
  $user_name = $_POST['user_name'];
  $user_email = $_POST['user_email'];
  $user_address = $_POST['user_address'];
  $user_message = $_POST['user_message'];

  $uniqueId = date("YmdHis");




  // Insert query
  $mysqli->query("INSERT INTO user_message (user_name, user_email, user_address, user_message ) VALUES ('$user_name', '$user_email', '$user_address', '$user_message')");



 try {
        require '../vendor/autoload.php';
        require '../vendor/phpmailer/phpmailer/src/Exception.php';
        require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require '../vendor/phpmailer/phpmailer/src/SMTP.php';

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'stonebridgeofficial01@gmail.com';  
        $mail->Password   = 'dsagmuhyivobtouo'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->isHTML(true);


  

        // ================= ADMIN MAIL =================
        $mail->clearAddresses();
        $mail->addAddress('stonebridgeofficial01@gmail.com', 'Admin');

   

        $mail->Subject = "New User message - Mountenna Group [ID: $uniqueId]";
        $mail->Body = "
            <h2>New user message Received</h2>
            <p>Dear Admin,</p>
            <p>A new message has been submitted. Below are the details provided by the applicant:</p>
            <ul>
                <li><strong>Applicant Name:</strong> $user_name</li>
                <li><strong>Email:</strong> $user_email</li>
                <li><strong>Address:</strong> $user_address</li>
                <li><strong>Message:</strong> $user_message</li>
            </ul>
            <p>Kindly review the application details and proceed with the necessary actions.</p>
            <p>Thank you for your attention to this matter.</p>
            <br>
            <p>Best regards,<br>Mountenna Group Team</p>
        ";
        $mail->send();

        $_SESSION['message'] = "Application has been successfully added, and emails have been sent.";
        $_SESSION['message_type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = "Application has been added, but email sending failed: " . $mail->ErrorInfo;
        $_SESSION['message_type'] = 'warning';
    }

    // Flash message
    $_SESSION['message'] = "Application has been added successfully!";
    $_SESSION['message_type'] = 'success';

    header("location:../confirmations.php");
    exit();
}