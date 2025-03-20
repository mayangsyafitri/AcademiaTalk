<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kider - Preschool Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>

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
                <h1 class="display-2 text-white animated slideInDown mb-4">Classes</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">Classes</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Classes Start -->
        <<!-- Chat Diskusi Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Diskusi Terbaru</h1>
            <p>Bergabunglah dalam diskusi terbaru dari berbagai topik menarik. Mulai percakapan atau tanggapi pendapat lainnya!</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="chat-window">
                    <div class="chat-header">
                        <h5>Chat Diskusi</h5>
                    </div>
                    <div class="chat-messages" id="chat-messages">
                        <!-- Pesan akan ditampilkan di sini -->
                        <div class="message received">
                            <div class="message-content">
                                <strong>Mayang:</strong> Halo semua! Apa pendapat kalian tentang kegiatan seni di sekolah?
                            </div>
                            <div class="message-time">
                                <span>10:00 AM</span>
                            </div>
                        </div>
                        <div class="message sent">
                            <div class="message-content">
                                <strong>Jhon Doe:</strong> Saya rasa kegiatan seni sangat penting untuk perkembangan kreativitas anak.
                            </div>
                            <div class="message-time">
                                <span>10:01 AM</span>
                            </div>
                        </div>
                        <div class="message received">
                            <div class="message-content">
                                <strong>Anonym:</strong> Setuju! Kegiatan seni juga bisa membantu anak mengekspresikan diri mereka.
                            </div>
                            <div class="message-time">
                                <span>10:02 AM</span>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak pesan di sini -->
                    </div>
                    <div class="chat-input">
                        <input type="text" id="message-input" placeholder="Ketik pesan..." />
                        <button id="send-button">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Chat Diskusi End -->
        <!-- Classes End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                   
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="<?= base_url('cookies') ?>">Cookies</a>
                                <a href="<?= base_url('help') ?>">Help</a>
                                <a href="<?= base_url('faqs') ?>">FQAs</a>
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

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('lib/wow/wow.min.js') ?>"></script>
    <script src="<?= base_url('lib/easing/easing.min.js') ?>"></script>
    <script src="<?= base_url('lib/waypoints/waypoints.min.js') ?>"></script>
    <script src="<?= base_url('lib/owlcarousel/owl.carousel.min.js') ?>"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url('js/main.js') ?>"></script>
</body>

</html>