<?php
if(isset($_POST["submit"])){
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $dbname = 'kd';

    $conn = mysqli_connect($host,$user,$pass,$dbname);

    $sql = "insert into contact_us(f_name,l_name,email,phone,message) values ('$f_name','$l_name','$email','$phone','$message')";
    mysqli_query($conn,$sql);

    
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KENIT DESIGN</title>
    <!-- fav icon -->
    <link href="assets/images/favicon.png" rel="shortcut icon" type="image/png">

    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- animated-css -->
    <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css">
    <!-- font-awesome-css -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- owl-carrosel-css -->
    <link href="assets/owl-carrosel/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="assets/owl-carrosel/owl.theme.default.min.css" rel="stylesheet" type="text/css">
    <!-- Slick-Slider-css -->
    <link href="assets/slick-slider/slick.css" rel="stylesheet" type="text/css">
    <link href="assets/slick-slider/slick-theme.css" rel="stylesheet" type="text/css">
    <!-- Revulation Slider CSS -->
    <link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />
    <!-- offcanvas-menu-css -->
    <link href="assets/css/offcanvas-menu.css" rel="stylesheet" type="text/css">
    <!-- style-css -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body class="contactPage">

    <header class="header-section">
        <nav class="navbar navbar-inverse hidden-sm hidden-xs">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php"><img src="assets/images/logov.png" alt="image" height="100" width="250"></a>
                </div>

                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>

                        <li><a href="about.php">About</a></li>

                        <li class="dropdown"><a href="dg.php">Design Gallery<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="dg1.php">Modular kitchen</a></li>
                                <li><a href="dg2.php">Wardrobe</a></li>
                                <li><a href="dg3.php">Bedroom</a></li>
                                <li><a href="dg4.php">Living Room</a></li>
                                <li><a href="dg5.php">Bathroom</a></li>
                                <li><a href="dg6.php">SpaceSaving Furnit.</a></li>
                                <li><a href="dg7.php">Home Office</a></li>
                            </ul>
                        </li>


                        <li class="active"><a href="#">Contact</a></li>

                    </ul>
                </div>

            </div>

        </nav>


    </header>




    <section class="header-title">
        <h2 class="title">Contact</h2>
    </section>

    <section class="contact-icon-section section-padding">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-4 col-md-offset-0 col-sm-6">
                    <div class="contact-wrapper wow fadeInLeft">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>

                        <h4>ADDRESS</h4>

                        <p>Gondal, Gujarat, INDIA.</p>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-0 col-sm-6">
                    <div class="contact-wrapper wow fadeIn">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>

                        <h4>EMAIL</h4>

                        <p>me@viralgautami.in <br> vkinfinity9@gmail.com</p>
                    </div>
                </div>

                <div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
                    <div class="contact-wrapper last-wrapper wow fadeInRight">
                        <i class="fa fa-phone" aria-hidden="true"></i>

                        <h4>PHONE</h4>

                        <p>+918000181284</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="map-section">
        <h2 class="hidden">title</h2>
        <div id="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5840.237396570184!2d70.78380364408407!3d21.95638816955359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395838901ba8770d%3A0x68605fcbbea8c63b!2sGondal%2C%20Gujarat%20360311!5e0!3m2!1sen!2sin!4v1685613453737!5m2!1sen!2sin" width="2000" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        
    </section>
    <section class="connect-section section-padding">
        <div class="container">
            <div class="title text-center">
                <h2>Contact Us</h2>
            </div>

            <div class="form-section">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form class="support-form text-left" action="#" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="name" name="f_name" type="text" class="form-control" required="" placeholder="First name..">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="last-name" name="l_name" type="text" class="form-control" required="" placeholder="Last name..">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="domainSearchBar form-control" id="email" name="email" type="email" required="" placeholder="Email">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input id="phone" name="phone" class="form-control" required="" placeholder="Phone..">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea id="message" name="message" class="form-control form-message" rows="6" required="" placeholder="Tell us what you want.."></textarea>
                            </div>

                            <div class="form-group form-button text-center wow fadeInUp">

                                <div class="button">
                                    <a href="#">
                                        <button type="submit" name="submit" class="btn subscribeBtn btn-default">
                                        <span class="default-text">Send</span>


                                            <span class="hover-text">Send</span>
                                        </button>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</from>
<footer class="footer">
		    <div class="container-fluid">
			   <div class="footer-in">
			      <p class="mb-0">&copy 2023 KENIT DESIGN . All Rights Reserved.</p>
			   </div>
			</div>
		 </footer>



    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/slick-slider/slick.min.js"></script>
    <script src="assets/owl-carrosel/owl.carousel.min.js"></script>
    <script type="text/javascript"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>