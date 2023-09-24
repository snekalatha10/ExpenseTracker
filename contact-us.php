<?php
require('vendor/autoload.php');
include('dbconnection.php');
include('mail.php');

if (isset($_POST['submit'])) {
    $mailto = "contactpaisepocket@gmail.com";  //My email address
    //getting customer data
    $name = $_POST['name']; //getting customer name
    $fromEmail = $_POST['email']; //getting customer email
    $phone = $_POST['phone']; //getting customer Phone number
    $subject = $_POST['message']; //getting subject line from client
    $subject2 = "Thakyou For Contact Us";

    //Email body I will receive
    $message = "Cleint Name: " . $name . "\n"
        . "Phone Number: " . $phone . "\n\n"
        . "Client Message: " . "\n" . $_POST['message'];

    //Message for client confirmation
    $message2 = "Dear " . $name . "\n"
        . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
        . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
        . "Regards," . "\n" . "PaisePocket";

    //Email headers
    $headers = "From: " . $fromEmail; // Client email, I will receive
    $headers2 = "From: " . $mailto; // This will receive client

    //PHP mailer function
    if(send_mail($mailto,$name,$subject,$message)){
        if(send_mail($fromEmail,"PaisePocketOnline",$subject2,$message2)){
            ?>
            <script>
                alert('Your message submitted Successfully!')
                window.location.href="contact-us";
            </script>
            <?php
        }else{
            ?>
            <script>
                alert('Submission Failed!')
                window.location.href="contact-us";
            </script>
            <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description"
          content="Save your Money by keep tracking your Expenses.Here are the best wasys to keep track on your cash flow."/>
    <meta name="author" content=""/>
    <title>Expense Tracker || Contact</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800"
          rel="stylesheet" type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/blogpost.css" rel="stylesheet"/>
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top bg-black" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header navbar">
            <a class="navbar-brand text-white" href="home"> PAISE POCKET !</a>
            <a class="navbar-brand text-white" href="home">HOME </a>
            <a class="navbar-brand text-white" href="register">REGISTER</a>
            <a class="navbar-brand text-white" href="blog">BLOG</a>
            <a class="navbar-brand text-white" href="dashboard">DASHBOARD</a>
            <a class="navbar-brand text-white" href="contact-us">CONTACT</a>

        </div>
    </div>
</nav>

<br><br><br>
<div class="container position-relative px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <div class="page-heading">
                <h1>Contact Us</h1>
                <span class="subheading">Having any questions? You can Contact us.</span>
            </div>
        </div>
    </div>
</div>

<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p> Fill out the form below to send us a message and we will get back to you as soon as possible!</p>
                <div class="my-5">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form id="contactForm" action="" role="form" method="post">
                        <div class="form-floating">
                            <input class="form-control" name="name" type="text" placeholder="Enter your name..."
                                   data-sb-validations="required"/>
                            <label for="name">Name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="email" type="email" placeholder="Enter your email..."
                                   data-sb-validations="required,email"/>
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                        <div class="form-floating">
                            <input class="form-control" name="phone" type="phone" placeholder="Enter your phone number..."
                                   data-sb-validations="required"/>
                            <label for="phone">Phone Number</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is
                                required.
                            </div>
                        </div>
                        <div class="form-floating">
                            <textarea class="form-control" name="message" placeholder="Enter your message here..."
                                      style="height: 12rem" data-sb-validations="required"></textarea>
                            <label for="message">Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.
                            </div>
                        </div>
                        <br>
                        <button type="submit" value="submit" name="submit" class="btn btn-warning">Submit</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<script src="js/scripts.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>


