<!DOCTYPE html>
<html lang="en">
<head>
   <!-- <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="description" content="Be-one is a clean HTML5/CSS3 template suitable for Business, Corporate, Taxes, Broker, Ad..."> -->
   <meta name="viewport" content="width=device-width, initial-scale=1">


<!-- Title -->
<title>BIT-TBI</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="assets/img/logo1.png">


<!-- CSS Here -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
<!-- MagnificPopup.css -->
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <!-- SlickNav.css -->
   <!-- <link rel="stylesheet" href="assets/css/slicknav.min.css"> -->
   <!-- Owl.carousel.css -->
   <link rel="stylesheet" href="assets/css/owl.carousel-2.3.4.min.css">
   <!-- Fontawesome.css -->
   <link rel="stylesheet" href="assets/css/fontawesome-free-5.12.0.min.css">
   <!-- Bootstrap.css -->
   <link rel="stylesheet" href="assets/css/bootstrap-4.3.1.min.css">
   <!-- Default.css -->
   <link rel="stylesheet" href="assets/css/default.css">
   <!-- Style.css -->
   <link rel="stylesheet" href="assets/css/style.css">
   <!-- Responsive.css -->
   <link rel="stylesheet" href="assets/css/responsive.css">

   <!-- ColorNip.css -->
   <link rel="stylesheet" href="assets/css/colornip.min.css">
   <link id="theme" rel="stylesheet" href="assets/css/theme-colors/theme-default.css">


   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-fz/z9mFFT9DR6P85Ug7l1rYGi4RduZhouM2aWrD6/TtWIlCZF1N66d5dF5Fc1DTi" crossorigin="anonymous">
   <!-- Jquery -->
   <script src="assets/js/jquery-3.4.1.min.js"></script>

</head>
<style>
.pettis {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    column-gap: 40px;
}

.petti {
    position: relative;
    display: flex;
    align-items: center;
    background-color: #f5f5f5;
    border: 1px solid #ddd;
    padding: 20px;
    text-align: left;
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: transparent;
    background-image: none;
}



.petti i {
    font-size: 40px;
    margin-right: 70px;
    margin-left: 50px;
    color: #333;
}



.text-content {
    display: flex;
    flex-direction: column;
}

.text-content h2 {
    margin-bottom: 5px;
}

.text-content p {
    margin-top: 5px;
    color: #333;
    font-size: 18px;
}

.petti:hover {
    transform: scale(1.05);
    
}

.petti:hover h2,
.petti:hover p {
    color: #fff;
}

.petti::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    border-radius: 5px;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.petti:hover {
    background-color: transparent;
    background-image: linear-gradient(90deg, #321575 0%, #FF057C 100%);
}

.petti h2,
.petti p {
    position: relative;
    z-index: 1;
}



.petti:hover i{
    color: #ffff;
}

@media (max-width:768px){
    .pettis {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    }
}

@media (max-width:400px){
    .pettis {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
    column-gap: 40px;
    margin-right: 50px;
    }

    .petti {
        width: 350px;
        padding-top: 20px;
        padding-bottom: 20px;        
    }

    .petti i {
        font-size: 40px;
        margin-right: 40px;
        margin-left: 10px;
        color: #333;
    }
}

@media (max-width:360px){
    .pettis {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
    column-gap: 40px;
    margin-right: 50px;
    }

    .petti {
        width: 300px;
        padding-top: 20px;
        padding-bottom: 20px;        
    }

    .petti i {
        font-size: 40px;
        margin-right: 40px;
        margin-left: 10px;
        color: #333;
    }
}

@media (max-width:320px){
    .pettis {
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 20px;
    column-gap: 40px;
    margin-right: 50px;
    }

    .petti {
        width: 250px;
        padding-top: 20px;
        padding-bottom: 20px;        
    }

    .petti i {
        font-size: 40px;
        margin-right: 20px;
        margin-left: 10px;
        color: #333;
    }

    .petti h2{
        font-size: 30px;
    }

    .petti p{
        font-size: 15px;
    }
}

.bemax-area{
    padding-bottom: 500px;
}
</style>
<body>
    <div class="search-overlay"></div>
    <!-- Search Modal -->
    <div class="modal fade" id="search-modal">
        <div class="modal-dialog">
             <div class="modal-content">
                 <form action="index.html" class="search-popup-wrapper">
                     <input type="search" placeholder="Search here...">
                     <i class="fas fa-search"></i>
                 </form>
             </div>
         </div>
     </div>
     <!-- End Search Modal -->
   <?php include("header.php")?>
    <!-- Start Slider Area -->
    <div class="slider-area">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-12">
                <div class="slider-carousel owl-carousel">
                    <div class="single-slider">
                        <div class="slider-inner">
                            <img src="assets/img/1.jpg" alt="Slider Image 1">
                        </div>
                    </div>
                    <div class="single-slider">
                        <div class="slider-inner">
                            <img src="assets/img/2.jpg" alt="Slider Image 2">
                        </div>
                    </div>
                    <div class="single-slider">
                        <div class="slider-inner">
                            <img src="assets/img/3.jpg" alt="Slider Image 3">
                        </div>
                    </div>
                    <div class="single-slider">
                        <div class="slider-inner">
                            <img src="assets/img/4.jpg" alt="Slider Image 4">
                        </div>
                    </div>
                    <div class="single-slider">
                        <div class="slider-inner">
                            <img src="assets/img/5.jpg" alt="Slider Image 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- End Slider Area -->
    
    <!-- Start Icon Box Area -->
   
    <div class="icon-box-arRead Moreea pt-70 pb-70" id="feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center feature-heading">
                <h2 class="feature-heading">Explore Our Features</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="single-icon-box icon-box-img-1">
                    <div class="icon-box-content">
                        <h6 class="iconbox-content-heading">
                            <i class="fas fa-print"></i> 3D Printing
                        </h6>
                        <div class="iconbox-content-body">
                            <p>3D printing is a process that builds objects layer by layer using materials like plastics or metals, enabling efficient and precise creation of physical items from digital designs.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="single-icon-box icon-box-img-2">
                    <div class="icon-box-content">
                        <h6 class="iconbox-content-heading"><i class="fas fa-wifi"></i> IOT</h6>
                        <div class="iconbox-content-body">
                            <p>IoT is a network of smart devices with sensors and connectivity, enabling seamless data exchange for improved automation and efficiency in diverse applications.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="single-icon-box icon-box-img-3">
                    <div class="icon-box-content">
                        <h6 class="iconbox-content-heading"><i class="fas fa-robot"></i> Robotics</h6>
                        <div class="iconbox-content-body">
                            <p>Robotics encompasses designing and operating robots for autonomous or guided tasks, integrating engineering and technology to achieve functions ranging from manufacturing to exploration.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Additional Section -->
        <div class="row" style="margin-top: 20px;">
            <div class="col-lg-4">
                <div class="single-icon-box icon-box-img-4">
                    <div class="icon-box-content">
                        <h6 class="iconbox-content-heading"><i class="fas fa-vr-cardboard"></i>ARVR</h6>
                        <div class="iconbox-content-body">
                            <p>ARVR combines Augmented Reality (AR) and Virtual Reality (VR) to enhance or alter users' real-world perception, offering immersive experiences in gaming, education, and training.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="single-icon-box icon-box-img-5">
                    <div class="icon-box-content">
                        <h6 class="iconbox-content-heading"><i class="fas fa-shield-alt"></i>Cyber Security</h6>
                        <div class="iconbox-content-body">
                            <p>"Cybersecurity is the practice of protecting computer systems, networks, and data from digital threats, integrity, and availability of information in the increasingly interconnected and technologically reliant world."</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4">
                <div class="single-icon-box icon-box-img-6">
                    <div class="icon-box-content">
                        <h6 class="iconbox-content-heading"><i class="fas fa-mobile-alt"></i>Mobile Application</h6>
                        <div class="iconbox-content-body">
                            <p>"Mobile applications, are software designed to run on smartphones and tablets, offering diverse functionalities ranging from communication and productivity to entertainment, enhancing the user experience in the mobile environment."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Additional Section -->
    </div>
</div>

    <!-- End Icon Box Area -->
    <!---count---->
    <div class="bemax-area gray-bg pt-65 pb-25">
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mb-70">
                <div class="section-title">
                    <h4>Our Achievements</h4>
                </div>
            </div>
        </div>
        <div class="pettis">
            <div class="petti">
                <i class="fas fa-chart-line"></i>
                <div class="text-content">
                    <h2>100+</h2>
                    <p>Ventures Engaged</p>
                </div>
            </div>
            <div class="petti">
                <i class="fas fa-money-bill"></i>
                <div class="text-content">
                    <h2>6crores+</h2>
                    <p>Funded</p>
                </div>
            </div>
            <div class="petti">
                <i class="fas fa-users"></i>
                <div class="text-content">
                    <h2>27</h2>
                    <p>Current Incubatees</p>
                </div>
            </div>
            <div class="petti">
                <i class="fas fa-graduation-cap"></i>
                <div class="text-content">
                    <h2>84</h2>
                    <p>Graduated Incubatees</p>
                </div>
            </div>
        </div>
    </div>

</div>

    </div>

    <!-- End We are Bemax Area -->
    <!-- Start Latest Project Area -->
    <div class="latest-project-area black-bg pt-70 pb-70" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-70">
                    <div class="section-title">
                        <h4>Latest Projects</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-carousel owl-carousel text-center">
                        <div class="single-project project-bg-1">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> BIT</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-2">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> BIT</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-3">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> TBI</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-4">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> TBI</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-5">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> TBI</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-6">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> TBI</a></p>
                            </div>
                        </div>
                        <div class="single-project project-bg-7">
                            <div class="project-inner">
                                <h5><a href="#">TBI Growth Solutions</a></h5>
                                <p><a href="#">BIT</a>,<a href="#"> TBI</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Latest Project Area -->
    <!-- End Working With Us Area -->
    <!-- Start Carousel Area -->
    <div class="carousel-area pt-80 pb-80" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4>Linkedin Posts</h4>
                    </div>
                    <div class="blog-carousel owl-carousel">
                    <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="assets/img/la1.jpeg" alt="" style="margin-top: 0px;">
                                <span>April 21, 2023</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#"> HACKATHON</a> </h5>
                                <p class="post-content-text">BIT Special Laboratories hosted a one-day hardware hackathon event On April 21, 2023. The hackathon was divided into four domains, namely Mech Hack, BioHack, Electronic Hack, and Fashion Hack, and the same were judged by external jury panels from reputed industries. </p>
                                
                            </div>
                        </div>
                        <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="assets/img/la2.jpeg" alt="" style="margin-top: 0px;">
                                <span>Jan 20, 2023</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#">MEMS Technology</a> </h5>
                                <p class="post-content-text">Our faculty member Mr. S K Dhinesh initiated a talk on the topic of Micro and Nano Electronics and MEMS (Micro-Electro-Mechanical Systems) Technology during his visit to Erfurt, Germany. </p>
                                
                            </div>
                        </div>
                        <div class="single-blog-item">
                            <div class="single-blog-img">
                                <img src="assets/img/la3.jpeg" alt="" style="margin-top: 0px;">
                                <span>Dec 15, 2022</span>
                            </div>
                            <div class="blog-content">
                                <h5 class="post-heading"><a href="#">Coimbatore Visits Thuringia</a> </h5>
                                <p class="post-content-text">Our Faculty member Mr. DHINESH SK represented BIT at the "Coimbatore Visits Thuringia'' business mission in GIRT, Thuringia to continue and expand our global reach and foster international partnerships.</p>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h4>Testimonials</h4>
                    </div>
                    <div class="testimonial-carousel owl-carousel">
                        <div class="single-testimonial-item ">
                            <div class="testimonial-content d-flex">
                                <i class="fas fa-quote-left"></i>
                                <p> The survival strategy has been changed from fitter to fittest. I am happy to note that this institute is growing steadily with professionalism at a fastest mode</p>
                            </div>
                            <div class="author-details d-flex">
                                <div class="author-img">
                                    <img src="assets/img/user_01.png" alt="" style="margin-top: 0px;">
                                </div>
                                <div class="author-content">
                                   <a href="#">SIVAM AMBATTU</a>
                                   <span>EDI of India</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item ">
                            <div class="testimonial-content d-flex">
                                <i class="fas fa-quote-left"></i>
                                <p> It is a pleasant atmosphere with potential young minds at ready to take off as an entrepreneur. This is an occasion to ignite their mind for their better future. Thanks to TBI of BIT</p>
                            </div>
                            <div class="author-details d-flex">
                                <div class="author-img">
                                    <img src="assets/img/user_02.png" alt="" style="margin-top: 0px;">
                                </div>
                                <div class="author-content">
                                   <a href="#">R MANIVEL</a>
                                   <span>BAS UNIT-I, Sathyamangalam</span>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-item ">
                            <div class="testimonial-content d-flex">
                                <i class="fas fa-quote-left"></i>
                                <p>I am happy to note that TBI conducted the programme on student entrepreneurship awareness camp to students to take up the challenges to become the nation building entrepreneurs</p>
                            </div>
                            <div class="author-details d-flex">
                                <div class="author-img">
                                    <img src="assets/img/user_03.png" alt="" style="margin-top: 0px;">
                                </div>
                                <div class="author-content">
                                   <a href="#">P DEVARAJ</a>
                                   <span>Branch Manager, SBI, Sathyamangalam</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Carousel Area -->
       <?php include("footer.php")?>
<!-- JS -->
   <!-- Popper.js -->
   <script src="assets/js/popper.min.js"></script>
   <!-- Bootstrap.js -->
   <script src="assets/js/bootstrap-4.3.1.min.js"></script>
   <!-- Modernizr.js -->
   <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
   <!-- Owl.Carousel.js -->
   <script src="assets/js/vendor/owl.carousel-2.3.4.min.js"></script>
   <script src="assets/js/vendor/owl.carousel2.thumbs.min.js"></script>
   <!-- Waypoints.js -->
   <script src="assets/js/vendor/waypoints-4.0.1.min.js"></script>
   <!-- ColorNip.js -->
   <script src="assets/js/vendor/colornip.min.js"></script>
   <!-- SlickNav.js -->
   <script src="assets/js/vendor/slicknav.min.js"></script>
   <!-- ScrollUp.js -->
   <script src="assets/js/vendor/jquery.scrollUp.min.js"></script>
   <!-- MagnificPopup.js -->
   <script src="assets/js/vendor/magnific-popup.min.js"></script>

   <!-- Main.js -->
   <script src="assets/js/main.js"></script>
</body>
</html>
