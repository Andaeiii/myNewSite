<!DOCTYPE html>
<html lang="en">
  
     <?php
        function rn($length = 40) {
            return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', $length)), 0, $length);
        }

      ?>

<head>
    <meta charset="utf-8">

    <title>Ande Caleb - FrontEnd Dev.</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
        Lavish HTML CSS Template
        https://templatemo.com/tm-458-lavish
        -->

    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- google font -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
    <!-- fullpage -->
    <link rel="stylesheet" href="css/jquery.fullPage.css">
    <!-- custom -->
    <link rel="stylesheet" href="css/styles.css?<?php echo rn(); ?>">
  
    <link rel="stylesheet" href="css/hystmodal.min.css">

</head>

<body>



    <div id="fullpage">

        <!-- start home -->
        <div id="home" class="section video-background">

            <video autoplay muted loop class="video">
                <source src="./vidx/bgvid_2.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="v-overlay"></div>
          
          
          
          
          <style>
            #home{
              overflow:hidden;
            }
            
          	    .video-background {
                  position: relative;
                  height: 100vh; /* Full viewport height */
                  width: 100vw; /* Full viewport width */
                  overflow: hidden; /* Prevent video overflow */
                }

                .v-overlay{
                  width:100%; 
                  height:100%; 
                  background-color:black;
                  position:absolute; 
                  top:0; 
                  left:0;
                  object-fit:cover; 
                  opacity:0.6
                }


                .video-background .video {
                  position: absolute;
                  top: 0;
                  left: 0;
                  width: 100%; /* Stretch to full width */
                  height: 100%; /* Stretch to full height */
                  object-fit: cover; /* Ensures the video fills the viewport */
                  z-index: -1; /* Sends the video behind other content */
                }
            
          </style>
          
          

            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div id="hcomps" class="col-md-8 wow fadeIn" data-wow-delay="0.9s">
                        <h3>Ande Caleb</h3>
                        <a href="javascript:;">Open for Remote</a>
                        <h2 class="rotate">Senior FrontEnd Developer, With Years of Experience in, Javascript + Typescript Development, CSS3(Tailwind + Bootstrap + Material), ThreeJS/GSAP(WebGL &amp; Canvas Animations), React + Redux + NextJS, with core front-end logic, + Designer(Photoshop / Figma / Fireworks ) </h2>
                        <p>Senior Frontend Developer - Javascript / React / Tailwind / Typescript Focused - Open for remote offers, here's all you need to know about me while you ready your phones/mails to reach me</p>
                        <a href="#work" class="btn btn-default smoothScroll wow fadeInUp" data-wow-delay="1s">Get started</a>
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <br/>
                <br/>
                <div class="row">
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
                        <ul class="social-icon front-icons" style="display: flex; justify-content: center;">
                            <li>
                                <a target="_blank" href="https://www.github.com/andaeiii" class="fa fa-github fa-2x"></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/in/ande-caleb" class="fa fa-linkedin fa-2x"></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://stackoverflow.com/users/2251071/ande-caleb" class="fa fa-stack-overflow fa-2x"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end home -->

        <!-- start work -->
        <div id="work" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow bounce">
                        <h2>WHAT I DO</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media">
                            <div class="media-object media-left">
                                <i class="fa fa-laptop"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">JS ES7 + Typescript</h3>
                                <p>an indepth understading of javascript ES6 and 7, React, Next, Jquery and Angular and OOP using Typescript
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media">
                            <div class="media-object media-left">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">ThreeJS + WebGL + GSAP</h3>
                                <p>Skilled in creating interactive 3D experiences with Three.js and WebGL, enhanced by smooth animations using GSAP.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media">
                            <div class="media-object media-left">
                                <i class="fa fa-link"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">CSS3 Templating</h3>
                                <p>A good understanding of CSS Grid Systems, CSS frameworks, CSS Preprocessors using Tailwind, Bootstrap Materialized or others.</p>
                            </div>
                        </div>
                    </div>

                  <!-- 

                     <div class="col-md-4 col-xs-11 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="media">
                            <div class="media-object media-left">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">UI &AMP; UX Design</h3>
                                <p>transforming UI/UX designs to working templates with interactive components to client satisfaction</p>
                            </div>
                        </div>
                    </div>

				   -->

                </div>
            </div>
        </div>
        <!-- end work -->

        <!-- start about -->
        <div id="about" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-11 wow fadeInLeft" data-wow-delay="0.9s">
                        <h2>ABOUT ME</h2>
                        <h4>SENIOR FRONTEND DEVELOPER</h4>
                        <p>I am a very creative person having the cutting edge skills to provide adequate and substantial solutions to current problems with using modern technologies in today’s society..</p>
                        <p>Having a strong Willingness to learn, work, build, collaborate and deliver, in essence a strong team-player.</p>
                    </div>
                    <div class="col-md-6 col-xs-11 wow fadeInRight" data-wow-delay="0.9s">
                        <span class="text-top">React / Redux / Typescript <small>90%</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                        <span>CSS3(Tailwind, Bootstrap++) <small>95%</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%;"></div>
                        </div>
                        <span>ThreeJS + WebGL + GSAP <small>80%</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
                        </div>
                        <span>UX Logic & State Management <small>99%</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 99%;"></div>
                        </div>
                        <span> SVG & HTML5 & CSS3 Animations <small>90%</small></span>
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end about -->

        <!-- start portfolio -->
        <div id="portfolio" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="wow bounce">A Few of Mine(Recent)</h2>
                    </div>
                    <div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                            <img src="images/portfolio-img1.jpg" class="img-responsive" alt="portfolio img">
                            <div class="portfolio-overlay">
                                <h4>Fidelity Bank FrontEnd</h4>
                                <h5>industry: Banking/Finance</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                            <img src="images/portfolio-img2.jpg" class="img-responsive" alt="portfolio img">
                            <div class="portfolio-overlay">
                                <h4>MumsBooth Impact</h4>
                                <h5>Industry: Humanitarian</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                            <img src="images/portfolio-img3.jpg" class="img-responsive" alt="portfolio img">
                            <div class="portfolio-overlay">
                                <h4>CDSL Official Website</h4>
                                <h5>Industry: Tech Services</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                            <img src="images/portfolio-img4.jpg" class="img-responsive" alt="portfolio img">
                            <div class="portfolio-overlay">
                                <h4>Oni Experess Trust</h4>
                                <h5>Industry: Construction</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6 wow fadeIn" data-wow-delay="0.6s">
                        <div class="portfolio-thumb">
                            <img src="images/portfolio-img5.jpg" class="img-responsive" alt="portfolio img">
                            <div class="portfolio-overlay">
                                <h4>Pay4Me Web App</h4>
                                <h5>Industry: Fintech</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <h2 class="wow">+ many more...</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- end portfolio -->

        <!-- start contact -->
        <div id="contact" class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <address>
							<p class="contact-title">FIND ME ON</p>
							<p><i class="fa fa-github"></i> <a target="_blank" href="https://www.github.com/andaeiii">Github</a></p>
							<p><i class="fa fa-linkedin"></i> <a target="_blank" href="https://www.linkedin.com/in/ande-caleb">LinkedIn</a></p>
							<p><i class="fa fa-stack-overflow"></i> <a target="_blank" href="https://stackoverflow.com/users/2251071/ande-caleb">Stackoverflow</a></p>
							<p><i class="fa fa-slack"></i> <a target="_blank" href="https://www.dev.to/andaeiii">Dev.to</a></p>
							<br/>
							<p>...CV available on request.</p>
						</address>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-10 wow fadeInUp" data-wow-delay="0.6s">
                        <form role="form" method="post" action="#">
                            <input name="name" type="text" class="form-control" id="name" placeholder="Your Name / Company's Name">
                            <input name="email" type="email" class="form-control" id="email" placeholder="Your Email (optional)">
                            <textarea name="message" rows="5" class="form-control" id="message" placeholder="Your Message / Request CV (Resume) Message"></textarea>
                            <input name="send" type="submit" class="form-control" id="send" value="SEND MESSAGE TO ME">
                        </form>
                    </div>
                    <div class="col-md-1 col-sm-1"></div>
                </div>
            </div>
        </div>
        <!-- end contact -->

        <style type="text/css">
            address a {
                color: white !important;
            }
            
            .front-icons li {
                margin: 0px 10px !important;
            }
            
            #hcomps>a {
                display: block;
                border: 2px solid #b7ba0f;
                font-weight: bolder;
                color: #ffffff;
                display: inline-block;
                letter-spacing: 6px;
                padding: 25px 35px;
                margin: 30px 0;
                font-size: 30px;
            }
            
            #hcomps>a:hover {
                border: none;
                border: 2px solid #eedb2e
            }
            
            .experiment {
                position: fixed;
                bottom: 10px;
                right: 20px;
                z-index: 10000;
            }
            
            .experiment .img {
                opacity: 0.3;
            }
            
            .experiment span {
                display: block;
            }
            
            .experiment:hover .img {
                opacity: 1;
            }
            
            #home .social-icon li a {
                color: #fff !important;
            }
        </style>

        <!-- start footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow fadeIn" data-wow-delay="0.9s">
                        <p>&copy;
                            <script type="text/javascript">
                                document.write(new Date().getFullYear());
                            </script> Ande Caleb - Senior FrontEnd Dev.
                        </p>
                        <hr>
                        <ul class="social-icon">
                            <li>
                                <a target="_blank" href="https://www.github.com/andaeiii" class="fa fa-github"></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.linkedin.com/in/ande-caleb" class="fa fa-linkedin"></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://stackoverflow.com/users/2251071/ande-caleb" class="fa fa-stack-overflow"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>


    <a href="/experiments" class="experiment" title="visit the css3 experiments page...">
        <span><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:none;display:block;" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
            <circle cx="18" cy="50" r="4" fill="#e15b64">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="0s" repeatCount="indefinite"></animate>
            </circle><circle cx="27" cy="61.31370849898476" r="4" fill="#f47e60">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.125s" repeatCount="indefinite"></animate>
            </circle><circle cx="36" cy="66" r="4" fill="#f8b26a">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.25s" repeatCount="indefinite"></animate>
            </circle><circle cx="45" cy="61.31370849898476" r="4" fill="#abbd81">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.375s" repeatCount="indefinite"></animate>
            </circle><circle cx="54" cy="50" r="4" fill="#e15b64">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.5s" repeatCount="indefinite"></animate>
            </circle><circle cx="63" cy="38.68629150101524" r="4" fill="#f47e60">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.625s" repeatCount="indefinite"></animate>
            </circle><circle cx="72" cy="34" r="4" fill="#f8b26a">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.75s" repeatCount="indefinite"></animate>
            </circle><circle cx="81" cy="38.68629150101523" r="4" fill="#abbd81">
              <animate attributeName="cy" values="34;66;34" times="0;0.5;1" dur="1s" calcMode="spline" keySplines="0.5 0 0.5 1;0.5 0 0.5 1" begin="-0.875s" repeatCount="indefinite"></animate>
            </circle>
            </svg></span>
        <span class="img"><img src="/images/exp.png" width="150"/></span>
    </a>


    <div class="hystmodal" id="mymodalBox" aria-hidden="true">
        <div class="hystmodal__wrap">
            <div class="hystmodal__window" role="dialog" aria-modal="true">
                <button data-hystclose class="hystmodal__close">Закрыть</button>


                <h1> my modal box...</h1>

            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- fullpage -->
    <script src="js/jquery.fullPage.js"></script>
    <!-- smoothScroll -->
    <script src="js/smoothscroll.js"></script>
    <!-- wow -->
    <script src="js/wow.min.js"></script>
    <!-- text rotater -->
    <script src="js/jquery.simple-text-rotator.js"></script>
    <!-- custom -->
    <script src="js/custom.js?<?php echo rn(); ?>"></script>
    <script src="js/hystmodal.min.js"></script>
    <script type="text/javasript">

    </script>
</body>

</html>