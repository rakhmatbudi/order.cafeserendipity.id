<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Cafe Serendipity - Online Ordering System</title>

<!-- Favicons -->
<link rel="shortcut icon" href="assets/img/favicon.png">
<link rel="apple-touch-icon" href="assets/img/favicon_60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon_76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon_120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon_152x152.png">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Raleway:wght@100;200;400;500&display=swap" rel="stylesheet">

<!-- CSS Core -->
<link rel="stylesheet" href="dist/css/core.css" />

<!-- CSS Theme -->
<link id="theme" rel="stylesheet" href="dist/css/theme-beige.css" />

<!-- Custom CSS for slimmer header -->
<style>
.page-title {
    padding: 40px 0 !important; /* Reduced from default padding */
    min-height: auto !important; /* Remove minimum height constraints */
}

.page-title h1 {
    font-size: 2.5rem !important; /* Smaller font size */
    margin-bottom: 0.5rem !important; /* Reduced margin */
    line-height: 1.2 !important; /* Tighter line height */
}

.page-title h4 {
    font-size: 1rem !important; /* Smaller subtitle */
    margin-bottom: 0 !important;
    line-height: 1.3 !important;
}

/* Optional: Further reduce on mobile */
@media (max-width: 768px) {
    .page-title {
        padding: 30px 0 !important;
    }
    
    .page-title h1 {
        font-size: 2rem !important;
    }
    
    .page-title h4 {
        font-size: 0.9rem !important;
    }
}
</style>

</head>

<body>

<!-- Body Wrapper -->
<div id="body-wrapper" class="animsition">

    <!-- Header -->
    <header id="header" class="light">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <!-- Logo -->
                    <div class="module module-logo dark">
                        <a href="index.html">
                            <img src="assets/img/logo-light.svg" alt="" width="88">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header / End -->

    <!-- Header -->
    <header id="header-mobile" class="light">

        <div class="module module-logo" style="display: flex; align-items: center; justify-content: center; height: 60px;">
            <h4 style="font-weight: bold; margin: 0;">Cafe Serendipity</h4>
        </div>

    </header>
    <!-- Header / End -->

    <!-- Content -->
    <div id="content">

        <!-- Page Title - SLIMMER VERSION -->
        <div class="page-title bg-dark dark">
            <!-- BG Image -->
            <div class="bg-image bg-parallax"><img src="assets/img/static/bg-croissant.jpg" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-4">
                        <h1 class="mb-0">Self-Ordering System</h1>
                        <h4 class="text-muted mb-0">Silakan mendaftar dahulu</h4>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <section class="section bg-light">

            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-7 order-lg-first">
                        <div class="bg-white p-4 p-md-5 mb-4">
                            <h4 class="border-bottom pb-4"><i class="ti ti-user mr-3 text-primary"></i>Informasi Pelanggan</h4>
                            <div class="row mb-5">
                                <div class="form-group col-sm-6">
                                    <label>Nama:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Nomor Telepon:</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label>Alamat E-mail:</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg"><span>Daftar</span></button>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
    <!-- Content / End -->

   

    <!-- Body Overlay -->
    <div id="body-overlay"></div>

</div>

<
<!-- Cookies Bar -->
<div id="cookies-bar" class="body-bar cookies-bar">
    <div class="body-bar-container container">
        <div class="body-bar-text">
            <h4 class="mb-2">Cookies & GDPR</h4>
            <p>This is a sample Cookies / GDPR information. You can use it easily on your site and even add link to <a href="#">Privacy Policy</a>.</p>
        </div>
        <div class="body-bar-action">
            <button class="btn btn-primary" data-accept="cookies"><span>Accept</span></button>
        </div>
    </div>
</div>

<!-- JS Core -->
<script src="dist/js/core.js"></script>

</body>

</html>