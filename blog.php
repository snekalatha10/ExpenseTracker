
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="One stop here to learn things about how to keep track on your money. View our blogs and keep your learnings. " />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title> Expense Tracker - Blog</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="blog-grid/css/mdb2.min.css" />
    <!-- Custom styles -->
    <!--    <link rel="stylesheet" href="blog/css/style.css" />-->
    <link rel="stylesheet" href="blog-grid/css/blog.css" />
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top bg-black" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header navbar">
            <a class="navbar-brand text-white"href="home"> PAISE POCKET !</a>
            <a class="navbar-brand text-white" href="home">HOME </a>
            <a class="navbar-brand text-white" href="register">REGISTER</a>
            <a class="navbar-brand text-white" href="blog">BLOG</a>
            <a class="navbar-brand text-white" href="dashboard">DASHBOARD</a>
            <a class="navbar-brand text-white" href="contact-us">CONTACT</a>

        </div>
    </div>
</nav>
<!--Main layout-->
<main class="my-5">
    <div class="container">
        <!--Section: Content-->
        <section class="text-center text-white">
            <h4 class="mb-5 text-white"><strong>LATEST BLOGS</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="assets/img/maintainexpense.jpg" class="img-fluid" />
                            <a href="maintain-your-expense.php">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body text-black">
                            <h5 class="card-title">HOW TO MAINTAIN YOUR EXPENSE IN EASIEST WAY</h5>
                            <p class="card-text text-black">
                                Here are the best ways to maintain your expenses and hold on your money.
                            </p>
                            <a href="maintain-your-expense.php" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="assets/img/emergencyexpense.jpg" class="img-fluid" />
                            <a href="save-your-money-for-emergency.php">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body text-black">
                            <h5 class="card-title"> SAVE YOUR MONEY FOR EMERGENCIES</h5>
                            <p class="card-text text-black">
                                Emergencies come when you least expect. Here are the some ways !
                            </p>
                            <a href="save-your-money-for-emergency.php" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="assets/img/trackmoney.jpg" class="img-fluid" />
                            <a href="how-to-keep-track-on-your-money.php">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                            </a>
                        </div>
                        <div class="card-body text-black">
                            <h5 class="card-title">HOW TO KEEP TRACK ON YOUR MONEY ?</h5>
                            <p class="card-text text-black">
                                Keep an control over your money or , the money will Control you !
                            </p>
                            <a href="how-to-keep-track-on-your-money.php" class="btn btn-primary">Read</a>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!--Section: Content-->
    </div>
</main>
<!--Main layout-->
<?php include('footer.php');?>
<!-- MDB -->
<script type="text/javascript" src="../blog/js/mdb.min.js"></script>
<!-- Custom scripts -->
<script type="text/javascript" src="../blog/js/script.js"></script>
</body>
</html>