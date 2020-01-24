<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Talent Connects Notice System</title>

    <!-- Custom fonts for this theme -->
    <link href="{{URL::to('/frontendLib/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- Theme CSS -->
    <link href="{{URL::to('/frontendLib/css/freelancer.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Notice System</a>
        <button
            class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
            type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Admit Card</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Information</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Masthead -->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">

        <!-- Masthead Avatar Image -->
        <img class="masthead-avatar mb-5" style="width: 300px" src="{{URL::to('/uploads/logo-01.png')}}" alt="">

        <!-- Masthead Heading -->
        <h1 class="masthead-heading text-uppercase mb-0">Notice System</h1>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Masthead Subheading -->
        <p class="masthead-subheading font-weight-light mb-0">Notice System - Talent Connects - HR Company</p>

    </div>
</header>


<!-- Portfolio Section -->
<section class="page-section portfolio" id="portfolio">
    <br><br><br>
    <div class="row">
        <div class="col-md-6">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">How to:</h2>

            <!-- Icon Divider -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto">
                    <h4>Trainee Assistant Exam:</h4>
                    <p class="lead">
                        <b>Read the information</b>, print it in white A4 size print paper, paste the photos
                        and
                        sign
                        it, bring this Written Test Admit Card abd your original valid ID card During the Written Test.
                    </p>
                </div>
                <div class="col-lg-4 mr-auto">
                    <ul>
                        <li><i>Step1:</i> <b> Read</b> the Information</li>
                        <li><i>Step2:</i> <b>Print</b> your Written Test Admit Card in white
                            <b>A4 size print paper</b></li>
                        <li><i>Step3:</i> <b>Paste</b> your recent <b>Passport size Photograph</b>
                            & Sign it <b>on both the Written
                                Test Admit Card</b></li>
                        <li><i>Step4:</i> <b>Bring this Written Test Admit card and
                                your Original Valid Identity Card during
                                Written
                                Test at Written Test Venue</b>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Portfolio Section Heading -->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Admit Card</h2>

            <!-- Icon Divider -->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon">
                    <i class="fas fa-star"></i>
                </div>
                <div class="divider-custom-line"></div>
            </div>

            <!-- Portfolio Grid Items -->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    @if($errors->all())
                    <div class="alert alert-danger">
                        ERROR: <br>
                        @foreach($errors->all() as $value)
                            -{{$value}}<br>
                        @endforeach
                    </div>
                    @endif
                    @if(session('fail'))
                        <div class="alert alert-danger">
                            {{session('fail')}}
                        </div>
                        @endif
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <form method="post" action="{{route('downloadAdmitCard')}}" >
                        {{csrf_field()}}
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Email Address</label>
                                <input name="email" id="myEmail" class="form-control" type="email"
                                       placeholder="Email Address"
                                       required="required"
                                       data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Phone Number</label>
                                <input name="mobileNumber" id="mobileNumber" class="form-control" type="tel"
                                       placeholder="Phone Number"
                                       required="required"
                                       data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <br><br>
                                <select class="form-control" name="position" id="position">
                                    <option value="">---Position---</option>
                                    <option>TRAINEE ASSISTANT</option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <br><br>
                                <select class="form-control" id="bankName" name="bankName">
                                    <option value="">---Choose Bank---</option>
                                    <option>Best Finance</option>
                                    <option>Banglamukhi Finance</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" id="downloadAdmitCard" class="btn btn-primary btn-xl">Download Admit
                                Card
                            </button>
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.row -->
        </div>
    </div>
</section>

<!-- About Section -->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">

        <!-- About Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-white">Information:</h2>

        <!-- Icon Divider -->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- About Section Content -->
        <div class="row">
            <div class="col-lg-4 ml-auto">
                <ul>
                    <li>You must bring this Admit Card and Original Valid ID card to attend the Written Test</li>
                    <li>You should bring Black Pen and Calculator for the test purpose.</li>
                    <li>
                        All information and the documents provided during the recruitment & selection process are true,
                        original and correct.
                        I agree that, if the provided information is found false or misleading , my application may lead
                        to disqualification at any stage of selection process.
                        I also accept to bear all the incurred losses causes to the bank/Recruitment Agency and strive
                        to uphold the highest standards of human Resource policies
                        of the company.
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 mr-auto">
                <ul>
                    <li><i>Date of written test </i>: <b>Shrawan 9, 2072 (July 25, 2015); Saturday </b></li>
                    <li><i>Reporting Time </i>: <b>7:30Am Sharp</b></li>
                    <li><i>Written Test Start Time</i> : <b>8:00Am Sharp</b></li>
                    <li><i>Written Test Venue </i>: <b>GoldenGate International College Battisputali, Kathmandu</b>
                    </li>
                </ul>
            </div>
        </div>


    </div>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container">

        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Us</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>

        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" type="text" placeholder="Name" required="required"
                                   data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" type="email" placeholder="Email Address"
                                   required="required"
                                   data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" type="tel" placeholder="Phone Number"
                                   required="required"
                                   data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" rows="5" placeholder="Message"
                                      required="required"
                                      data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl">Send</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>

<!-- Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">

            <!-- Footer Location -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Location</h4>
                <p class="lead mb-0">Talent Connects
                    <br>Lalitpur, Arunthapa Chowk</p>
            </div>

            <!-- Footer Social Icons -->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Around the Web</h4>
                <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/TalentConnects/">
                    <i class="fab fa-fw fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-light btn-social mx-1"
                   href="https://www.linkedin.com/company/talent-connects-pvt-ltd">
                    <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
            </div>

            <!-- Footer About Text -->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">About Talent Connects</h4>
                <p class="lead mb-0">
                    We the fastest growing recruitment and career advancement resources website in the Job sector for
                    employers, recruiters, freelancers and job seekers.
                    <a href="https://www.talentconnects.com.np/">View Talent Connects</a>.</p>
            </div>

        </div>
    </div>
</footer>

<!-- Copyright Section -->
<section class="copyright py-4 text-center text-white">
    <div class="container">
        <small>Copyright &copy; Talent Connects 2020</small>
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Bootstrap core JavaScript -->
<script src="{{URL::to('/frontendLib/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{URL::to('/frontendLib/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Plugin JavaScript -->
<script src="{{URL::to('/frontendLib/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Contact Form JavaScript -->
<script src="{{URL::to('/frontendLib/js/jqBootstrapValidation.js')}}"></script>
<script src="{{URL::to('/frontendLib/js/contact_me.js')}}"></script>

<!-- Custom scripts for this template -->
<script src="{{URL::to('/frontendLib/js/freelancer.min.js')}}"></script>




</body>

</html>
