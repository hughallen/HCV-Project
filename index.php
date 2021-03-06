<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>HCV Resistance Project</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">HCV Project</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">Team</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">More Information</a>
                    </li>

                    <?php

                        if (isset($_SESSION['id']))
                        {
                            echo"
                            <li>
                                <a href='analytics.php'>Analytics</a>
                            </li>
                            <li>
                                <a href='logout_function.php'>Log Out</a>
                            </li>
                            ";
                        }

                        else 
                        {
                            echo"
                            <li>
                                <a href='login.php'>Log In</a>
                            </li>
                            ";
                        }
                    ?>



                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->

    <header>
        <div class="container">
            <div class="intro-text">
                <img class="img-responsive img-centered-logo" src="img/HCV-Logo.png" alt="Logo">
                
                <div class="intro-lead-in">The Hepatitis C Resistance Project seeks to understand why some people are naturally protected against viruses, and to develop new ways to combat viral infection. <br><br>We're looking for Irish Women who were exposed to HCV-contaminated Anti-D in the late 1970's. Some of these women were naturally protected from the virus and showed no sign of infection - these women hold the key to our study. If you think you were affected, or know of anyone who might have been, don't hesistate to get in touch! </div>
                
                <a href="#about" class="page-scroll btn btn-xl-opaque">Find out more</a>
                <a href="#contact" class="page-scroll btn btn-xl-opaque">Get in touch</a>

            <!-- TEMPORARILY TAKEN OUT VIDEO

            <video playsinline autoplay muted loop poster="img/videobg.jpg" id="bgvid">
                <source src="img/videobg.webm" type="video/webm">
                <source src="img/videobg.mp4" type="video/mp4">
            </video>

            -->

            </div>
        </div>
    </header>

    <!-- About Section -->

    <section id="about">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">The history of the project, and what we're trying to achieve.</h3>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-hospital-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="about-heading">What Happened</h4>
                    <p class="text-muted">In the late 1970’s and early 1990’s pregnant Irish women were exposed to the hepatitis C virus (HCV)-contaminated Anti-D, a medication to prevent rhesus disease. Hundreds of Irish women were exposed to HCV-contaminated Anti-D but never showed any sign of infection.<br><br><br></p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-graduation-cap fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="about-heading">What We Learned</h4>
                    <p class="text-muted">People are exposed to viruses, such as colds and flu, all the time but only a small number of people actually become infected. Understanding why some people seem to be naturally protected can help us design new ways to combat viral infection. We think that these women have ‘super’ immune systems that protected them from HCV – and may actually be still protecting them from all sorts of other viral infections.<br><br><br></p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-search fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="about-heading">The Project</h4>
                    <p class="text-muted">We are embarking on a study targeting all women who were exposed to HCV-contaminated Anti-D between the years of 1977 and 1979. This study aims to explore the reasons why some women were naturally protected from HCV and show no signs of infection. We believe these women may hold the key to fighting off this serious liver disease as well as other viral infections.<br><br><br></p>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-md-offset-3">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="about-heading">How You Can Help</h4>
                    <p class="text-muted">If you think that you were exposed to HCV-contaminated Anti-D in 1977-1979, but show no signs of infection, you could hold the key to our study. All you have to do is fill out the form in the contact section, or get in touch with us via telephone or email.</p><p class="text-accent large">087 791 3600<br><a href="mailto:tcdstudy2016@tcd.ie">TCDStudy2016@tcd.ie</a></p>
                </div>
            </div>

        </div>
	</section>
        

    <!-- Milestones Section

    <section id="timeline" class='bg-light-gray'>
    	<div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Milestones</h2>
                    <h3 class="section-subheading text-muted">Keep updated with the latest developments of the project.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1977-1979</h4>
                                    <h4 class="subheading">Anti-D</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1990</h4>
                                    <h4 class="subheading">Anti-D II</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2016</h4>
                                    <h4 class="subheading">The Research Begins</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>September 2016</h4>
                                    <h4 class="subheading">Reaching Out to Those Affected</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part of<br>Our Story,<br>Get In Touch!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    -->

    <!-- Team Section -->

    <section id="team" class='bg-light-gray'>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">The Team</h2>
                    <h3 class="section-subheading text-muted">The brains behind the operation.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/cliona.jpg" class="img-responsive img-circle img-centered-team-photo" alt="">
                        <h4>Prof. Cliona O’Farrelly</h4>
                        <h5>Principle Investigator</h5>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/placeholder_male.jpg" class="img-responsive img-circle img-centered-team-photo" alt="">
                        <h4>Dr. Mark Robinson</h4>
                        <h5>Postdoctoral Researcher</h5>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="img/team/placeholder_female.jpg" class="img-responsive img-circle img-centered-team-photo" alt="">
                        <h4>Dr. Lena Fischer</h4>
                        <h5>Postdoctoral Researcher</h5>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/placeholder_female.jpg" class="img-responsive img-circle img-centered-team-photo" alt="">
                        <h4>Ms. Mag Needham</h4>
                        <h5>Research Assistant</h5>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="team-member">
                        <img src="img/team/placeholder_female.jpg" class="img-responsive img-circle img-centered-team-photo" alt="">
                        <h4>Ms. Ilaina Khairulzaman</h4>
                        <h5>Research Assistant</h5>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Extra text space...

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Something about the team.</p>
                </div>
            </div>

            -->

        </div>
    </section>

    <!-- Clients Aside -->

    <aside class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <a href="https://www.tcd.ie/Biochemistry/research/cig_hepatitisc.php">
                        <img src="img/logos/trinity.jpg" class="img-responsive img-centered-company-logo" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-sm-6">
                    <a href="http://www.sfi.ie">
                        <img src="img/logos/sfi.jpg" class="img-responsive img-centered-company-logo" alt="">
                    </a>
                </div>
            </div>
        </div>
    </aside>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Be part of our story, get in touch!</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email Address *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone Number *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Do you have any questions for us?" id="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">More Information</h2>
                    <h3 class="section-subheading text-muted">Here you can find lots of helpful articles and additional information.</h3>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.who.int/mediacentre/factsheets/fs164/en/" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/WHO.jpg" class="img-responsive img-centered-preview" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Hepatitis C Fact Sheet</h4>
                        <p class="text-muted">The WHO</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="http://www.nmh.ie/_fileupload/Rhesus%20D%20and%20Transfusion/Rhesus%20Negative%20Blue%20May%202015.pdf" target="_blank" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/Rhesus.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Rhesus Negative</h4>
                        <p class="text-muted">What It Means</p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/portfolio/update-preview.png" class="img-responsive img-centered-preview" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Happy Friday</h4>
                        <p class="text-muted">A quick update</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <footer class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; HCV Resistance Project 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://www.facebook.com/HCVStudyIreland/"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://twitter.com/HCV_Project/"><i class="fa fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Happy Friday</h2>
                                <p class="item-intro text-muted">A quick update regarding the people who got in touch with the project.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/update.png" alt="">
                                <p>Happy Friday, ladies and gentlemen!<br><br>Here's a quick update from us: 600 people have gotten in touch with us and we've sent out over 200 study packets to our volunteers!</p>
                                <p><strong>This is bold text</strong><p>
                                <p>This is a <a href="https://google.com">link</a></p>
                                <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Happy Friday</h2>
                                <p class="item-intro text-muted">A quick update regarding the people who got in touch with the project.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/update.png" alt="">
                                <p>Happy Friday, ladies and gentlemen!<br><br>Here's a quick update from us: 600 people have gotten in touch with us and we've sent out over 200 study packets to our volunteers!</p>
                                <p><strong>This is bold text</strong><p>
                                <p>This is a <a href="https://google.com">link</a></p>
                                <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>Happy Friday</h2>
                                <p class="item-intro text-muted">A quick update regarding the people who got in touch with the project.</p>
                                <img class="img-responsive img-centered" src="img/portfolio/update.png" alt="">
                                <p>Happy Friday, ladies and gentlemen!<br><br>Here's a quick update from us: 600 people have gotten in touch with us and we've sent out over 200 study packets to our volunteers!</p>
                                <p><strong>This is bold text</strong><p>
                                <p>This is a <a href="https://google.com">link</a></p>
                                <button type="button" class="btn btn-xl" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

</body>

</html>
