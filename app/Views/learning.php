<!DOCTYPE html>
<html lang="en">

<?=$this->include('/Component/head') ?>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?= $this->include('Component/navbar') ?>

        <!-- Page Header Start -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">Learning Materials</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('about'); ?>">About</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('classes'); ?>">Discussion</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Learning</li>
                        <li class="breadcrumb-item"><a href="<?= base_url('contact'); ?>">Contact</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Learning Categories Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Explore Our Learning Materials</h1>
                    <p>Expand your knowledge with our carefully curated learning materials. Watch video tutorials, read articles, and practice with interactive exercises.</p>
                </div>
                
                <!-- Learning Categories Tabs -->
                <ul class="nav nav-pills mb-4 justify-content-center wow fadeInUp" data-wow-delay="0.2s" id="pills-tab" role="tablist">
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-primary rounded-pill py-2 px-4 active" id="pills-english-tab" data-bs-toggle="pill" data-bs-target="#pills-english" type="button" role="tab" aria-controls="pills-english" aria-selected="true">English</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-primary rounded-pill py-2 px-4" id="pills-math-tab" data-bs-toggle="pill" data-bs-target="#pills-math" type="button" role="tab" aria-controls="pills-math" aria-selected="false">Mathematics</button>
                    </li>
                    <li class="nav-item mx-2" role="presentation">
                        <button class="btn btn-primary rounded-pill py-2 px-4" id="pills-science-tab" data-bs-toggle="pill" data-bs-target="#pills-science" type="button" role="tab" aria-controls="pills-science" aria-selected="false">Science</button>
                    </li>
                </ul>
                
                <!-- Learning Content -->
                <div class="tab-content" id="pills-tabContent">
                    <!-- English Content -->
                    <div class="tab-pane fade show active" id="pills-english" role="tabpanel" aria-labelledby="pills-english-tab">
                        <div class="row g-4">
                            <!-- English Module 1 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/english-1.jpg" class="card-img-top" alt="English Grammar">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">English Grammar Mastery</h5>
                                        <p class="card-text">Master the fundamentals of English grammar including parts of speech, tenses, and sentence structures.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal1">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">15 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- English Module 2 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/english-2.jpg" class="card-img-top" alt="Essay Writing">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Essay Writing Techniques</h5>
                                        <p class="card-text">Learn how to structure and write compelling essays with proper thesis statements and supporting arguments.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal2">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">12 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- English Module 3 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/english-3.jpg" class="card-img-top" alt="Literary Analysis">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Literary Analysis</h5>
                                        <p class="card-text">Develop skills to analyze classic and contemporary literature, focusing on themes, characters, and literary devices.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal3">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">18 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Mathematics Content -->
                    <div class="tab-pane fade" id="pills-math" role="tabpanel" aria-labelledby="pills-math-tab">
                        <div class="row g-4">
                            <!-- Math Module 1 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/math-1.jpg" class="card-img-top" alt="Algebra">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Algebra Fundamentals</h5>
                                        <p class="card-text">Learn the core concepts of algebra including equations, functions, and graphing techniques.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal4">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">20 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Math Module 2 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/math-2.jpg" class="card-img-top" alt="Geometry">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Geometry Essentials</h5>
                                        <p class="card-text">Master geometric principles, theorems, and problem-solving techniques for angles, shapes, and spatial reasoning.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal5">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">16 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Math Module 3 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/math-3.png" class="card-img-top" alt="Calculus">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Introduction to Calculus</h5>
                                        <p class="card-text">Explore the fundamentals of calculus, including limits, derivatives, and integrals with real-world applications.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal6">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">22 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Science Content -->
                    <div class="tab-pane fade" id="pills-science" role="tabpanel" aria-labelledby="pills-science-tab">
                        <div class="row g-4">
                            <!-- Science Module 1 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/science-1.jpg" class="card-img-top" alt="Biology">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Biology: Cellular Structure</h5>
                                        <p class="card-text">Understand cell structure, function, and the fundamental processes that govern living organisms.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal7">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">14 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Science Module 2 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/science-2.jpg" class="card-img-top" alt="Chemistry">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Chemistry Fundamentals</h5>
                                        <p class="card-text">Explore the basic principles of chemistry, including atomic structure, chemical bonding, and reactions.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal8">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">19 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Science Module 3 -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="card border-0 shadow-sm">
                                    <img src="img/science-3.jpg" class="card-img-top" alt="Physics">
                                    <div class="card-body p-4">
                                        <h5 class="card-title">Physics: Motion and Energy</h5>
                                        <p class="card-text">Learn the core concepts of physics, focusing on mechanics, motion, forces, and energy conservation.</p>
                                        <div class="d-flex justify-content-between">
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#videoModal9">
                                                <i class="fa fa-play-circle me-2"></i>Watch Video
                                            </button>
                                            <span class="text-muted">17 Lessons</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Learning Categories End -->

        <!-- Popular Courses Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; margin-bottom: 100px;">
                    <h1 class="mb-3">Most Popular Learning Materials</h1>
                    <p>Discover our most popular and highly-rated learning materials chosen by our community of learners.</p>
                </div>
                <div class="row g-4">
                    <!-- Popular Course 1 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="classes-item">
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Critical Thinking Skills</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Dr. Sarah Johnson</h6>
                                            <small>Philosophy Professor</small>
                                        </div>
                                    </div>
                                    <span class="bg-primary text-white rounded-pill py-2 px-3">Advanced</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Duration:</h6>
                                            <small>8 Weeks</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Rating:</h6>
                                            <small>4.9/5.0</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Students:</h6>
                                            <small>2,568</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular Course 2 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="classes-item">
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Data Analysis with Python</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Prof. Michael Chen</h6>
                                            <small>Data Scientist</small>
                                        </div>
                                    </div>
                                    <span class="bg-primary text-white rounded-pill py-2 px-3">Intermediate</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Duration:</h6>
                                            <small>10 Weeks</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Rating:</h6>
                                            <small>4.8/5.0</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Students:</h6>
                                            <small>3,752</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular Course 3 -->
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="classes-item">
                            <div class="bg-light rounded p-4 pt-5 mt-n5">
                                <a class="d-block text-center h3 mt-3 mb-4" href="">Creative Writing Workshop</a>
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle flex-shrink-0" src="img/user.jpg" alt="" style="width: 45px; height: 45px;">
                                        <div class="ms-3">
                                            <h6 class="text-primary mb-1">Emily Rodriguez</h6>
                                            <small>Published Author</small>
                                        </div>
                                    </div>
                                    <span class="bg-primary text-white rounded-pill py-2 px-3">All Levels</span>
                                </div>
                                <div class="row g-1">
                                    <div class="col-4">
                                        <div class="border-top border-3 border-primary pt-2">
                                            <h6 class="text-primary mb-1">Duration:</h6>
                                            <small>6 Weeks</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-success pt-2">
                                            <h6 class="text-success mb-1">Rating:</h6>
                                            <small>4.7/5.0</small>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="border-top border-3 border-warning pt-2">
                                            <h6 class="text-warning mb-1">Students:</h6>
                                            <small>1,925</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popular Courses End -->

        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/call-to-action.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Terimakasih Sudah Bergabung!</h1>
                                <p class="mb-4">Terima kasih sudah bergabung dalam diskusi di web kami! Dengan bergabung, kamu akan mendapatkan banyak manfaat, seperti menambah wawasan dari berbagai sudut pandang, melatih kemampuan berpikir kritis dan komunikasi, serta memperluas jaringan dengan orang-orang yang memiliki minat serupa. Selain itu, kamu juga bisa menemukan inspirasi dan ide-ide baru yang bermanfaat, sekaligus berkontribusi dalam membentuk komunitas yang aktif dan positif. Kehadiranmu sangat berarti dan kami senang bisa bertumbuh bersama!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-4">AcademiaTalk</h4>
                        <p>Platform diskusi interaktif yang mendukung pertukaran ide dan pembelajaran berbasis komunitas. Bergabunglah dengan komunitas kami untuk berbagi pengetahuan dan wawasan!</p>
                        <div class="d-flex pt-3">
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-outline-light me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-white mb-4">Quick Links</h4>
                        <a class="btn btn-link text-white-50" href="<?= base_url(); ?>">Home</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('about'); ?>">About Us</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('classes'); ?>">Discussions</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('contact'); ?>">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="<?= base_url('faqs'); ?>">FAQs</a>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h4 class="text-white mb-4">Contact Info</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Jakarta, Indonesia</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+62 345 6789</p>
                        <p><i class="fa fa-envelope me-3"></i>info@academiatalk.com</p>
                        <p><i class="fa fa-clock me-3"></i>Mon-Fri: 9AM - 5PM</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid copyright py-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">AcademiaTalk</a>, All Right Reserved.
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="<?= base_url('cookies') ?>">Cookies</a>
                                <a href="<?= base_url('help') ?>">Help</a>
                                <a href="<?= base_url('faqs') ?>">FAQs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- Video Modals -->
    <!-- English Video Modal 1 -->
    <div class="modal fade" id="videoModal1" tabindex="-1" aria-labelledby="videoModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal1Label">English Grammar Mastery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/WMXSV8vI3FE?si=wW5NW5-ygbJ_DeEE" title="English Grammar" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- English Video Modal 2 -->
    <div class="modal fade" id="videoModal2" tabindex="-1" aria-labelledby="videoModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal2Label">Essay Writing Techniques</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/GgkRoYPLhts" title="Essay Writing" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- English Video Modal 3 -->
    <div class="modal fade" id="videoModal3" tabindex="-1" aria-labelledby="videoModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal3Label">Literary Analysis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/3naf-KE0uvI?si=mR3-hENu1KsQTkIS" title="Literary Analysis" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Math Video Modal 4 -->
    <div class="modal fade" id="videoModal4" tabindex="-1" aria-labelledby="videoModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal4Label">Algebra Fundamentals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/NybHckSEQBI" title="Algebra Fundamentals" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Math Video Modal 5 -->
    <div class="modal fade" id="videoModal5" tabindex="-1" aria-labelledby="videoModal5Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal5Label">Geometry Essentials</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/302eJ3TzJQU" title="Geometry Essentials" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Math Video Modal 6 -->
    <div class="modal fade" id="videoModal6" tabindex="-1" aria-labelledby="videoModal6Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal6Label">Introduction to Calculus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/HfACrKJ_Y2w" title="Introduction to Calculus" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Science Video Modal 7 -->
    <div class="modal fade" id="videoModal7" tabindex="-1" aria-labelledby="videoModal7Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal7Label">Biology: Cellular Structure</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/URUJD5NEXC8" title="Biology: Cellular Structure" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Science Video Modal 8 -->
    <div class="modal fade" id="videoModal8" tabindex="-1" aria-labelledby="videoModal8Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal8Label">Chemistry Fundamentals</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/5iTOphGnCtg?si=Rfr1H-S9ltj2Zmtv" title="Chemistry Fundamentals" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Science Video Modal 9 -->
    <div class="modal fade" id="videoModal9" tabindex="-1" aria-labelledby="videoModal9Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="videoModal9Label">Physics: Motion and Energy</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ratio ratio-16x9">
                        <iframe src="https://www.youtube.com/embed/ZM8ECpBuQYE" title="Physics: Motion and Energy" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ?>"></script>
    
    <!-- Custom Learning Page Javascript -->
    <script>
        $(document).ready(function() {
            // Pause videos when modal is closed
            $('.modal').on('hidden.bs.modal', function () {
                var iframe = $(this).find('iframe');
                var src = iframe.attr('src');
                iframe.attr('src', '');
                iframe.attr('src', src);
            });
            
            // Initialize WOW.js
            new WOW().init();
            
            // Handle the tab changes
            $('.nav-pills button').on('click', function() {
                $('.nav-pills button').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>
</body>

</html>