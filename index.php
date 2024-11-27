<?php
include 'admin/contentEditable.php';
?>

<!doctype html>

<html lang="en">


<head>


    <!-- META -->
    <meta charset="utf-8">
    <meta name="robots" content="noodp">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- PAGE TITLE -->
    <title>Elizabeth Wood</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/img/favicon.png">

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface%7CArapey&amp;subset=latin-ext" rel="stylesheet">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">

</head>


<body>


    <!-- PRELOADER -->
    <div class="preloader">

        <div class="spinner"></div>

    </div>
    <!-- /PRELOADER -->


    <!-- IMAGE CONTAINER -->
    <div class="image-container">

        <div class="background-img uploadbg-image" data-filename="background.jpg" style="background-image: url('./assets/img/background.jpg?version=<?= time() ?>');"></div>

        <img src="./assets/img/background.jpg" alt="" srcset="" class="mainphoto">

    </div>
    <!-- /IMAGE CONTAINER -->


    <!-- CONTENT AREA -->
    <div class="content-area">


        <!-- CONTENT AREA INNER -->
        <div class="content-area-inner">


            <!-- INTRO -->
            <section id="intro">
                <!-- CONTAINER MID -->
                <div class="container-mid">
                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-down" data-animation-delay="0">
                        <h1 contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="intro-text-1"><?= $text['intro-text-1'] ?></h1>
                    </div>
                    <!-- /ANIMATION CONTAINER -->

                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-left" data-animation-delay="300">
                        <p class="subline" contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="intro-text-2"><?= $text['intro-text-2'] ?></p>
                    </div>
                    <!-- /ANIMATION CONTAINER -->

                    <!-- ANIMATION CONTAINER -->
                    <div class="animation-container animation-fade-up" data-animation-delay="600">
                        <a href="#about" class="smooth-scroll">Learn More<i class="fa fa-angle-down" aria-hidden="true"></i></a>
                    </div>
                    <!-- /ANIMATION CONTAINER -->
                </div>
                <!-- /CONTAINER MID -->
            </section>
            <!-- /INTRO -->


            <!-- ABOUT -->
            <section id="about">

                <h3 class="headline scroll-animated-from-right" contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="about-text-1"><?= $text['about-text-1'] ?></h3>
                <p class="scroll-animated-from-right" contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="about-text-2"><?= $text['about-text-2'] ?></p>
                <p class="scroll-animated-from-right" contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="about-text-3"><?= $text['about-text-3'] ?></p>

            </section>
            <!-- /ABOUT -->



            <section id="service">


                <h3 class="headline scroll-animated-from-right" contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="service-text-1"><?= $text["service-text-1"] ?></h3>


                <ul class="services-list">


                    <li class="scroll-animated-from-right">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        <span contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="service-text-2"><?= $text["service-text-2"] ?></span>
                    </li>
                    <!-- <li class="scroll-animated-from-right"><i class="fa fa-eye" aria-hidden="true"></i>Small turnkey
                        home construction projects
                    </li> -->
                    <!-- <li class="scroll-animated-from-right"><i class="fa fa-database" aria-hidden="true"></i>Turnkey
                        Website Development</li> -->
                    <li class="scroll-animated-from-right">
                        <i class="fa fa-television" aria-hidden="true"></i>
                        <span contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="service-text-3"><?= $text["service-text-3"] ?></span>
                    </li>
                </ul>
            </section>

            <!-- /SERVICE -->

            <!-- CONTACT -->
            <section id="contact">


                <h3 class="headline scroll-animated-from-right" contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="contacts-text-1"><?= $text["contacts-text-1"] ?></h3>


                <!-- CONTACT LIST -->
                <ul class="contact-list">

                    <li class="scroll-animated-from-right">
                        <i class="fa fa-mobile" aria-hidden="true"></i>
                        <span contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="contacts-text-2"><?= $text["contacts-text-2"] ?></span>

                    </li>
                    <li class="scroll-animated-from-right">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span contentEditable="<?= ($admin) ? 'true' : 'false' ?>" data-text-key="contacts-text-3"><?= $text["contacts-text-3"] ?></span>
                    </li>

                </ul>
                <!-- /CONTACT LIST -->


                <!-- CONTACT FORM -->
                <form id="contact-form">


                    <input id="contact-form-name" type="text" name="name"
                        class="form-control scroll-animated-from-right" placeholder="* Your Name" required>

                    <input id="contact-form-email" type="text" name="email"
                        class="form-control scroll-animated-from-right" placeholder="* Your Email" required>


                    <textarea id="contact-form-message" name="message"
                        class="form-control scroll-animated-from-right" placeholder="* Your Message"></textarea>

                    <button type="submit" class="form-control scroll-animated-from-right">Send Mail</button>

                </form>
                <div class="success-message hide" id="contact-form-success">* The Email was Sent Successfully!
                </div>
                <!-- /CONTACT FORM -->


            </section>
            <!-- /CONTACT -->


            <!-- FOOTER -->
            <section id="footer">


                <!-- SOCIAL ICONS -->
                <ul class="social-icons scroll-animated-from-right">


                    <!-- <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                    <li>
                        <a href="https://www.linkedin.com/in/elizabeth-wood-323737152/">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="" class="theme-switch">
                            <svg class="icon-light hide" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="12" cy="12" r="5"></circle>
                                <line x1="12" y1="1" x2="12" y2="3"></line>
                                <line x1="12" y1="21" x2="12" y2="23"></line>
                                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                <line x1="1" y1="12" x2="3" y2="12"></line>
                                <line x1="21" y1="12" x2="23" y2="12"></line>
                                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                            </svg>

                            <svg class="icon-dark" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                            </svg>

                        </a>
                    </li>

                </ul>
                <!-- /SOCIAL ICONS -->


                <p class="scroll-animated-from-right">© 2024 Branded by E | Design by Template Foundation</p>


            </section>
            <!-- /FOOTER -->


        </div>
        <!-- /CONTENT AREA INNER -->


    </div>
    <!-- /CONTENT AREA -->



    <!-- JAVASCRIPTS -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>

    <?php if ($admin == true) { ?>
        <button class="button-save-text">Save text</button>
        <script type="module" src="./assets/js/contentEditable.js"></script>
    <?php } ?>

</body>


</html>