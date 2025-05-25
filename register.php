<?php
// register.php
?>
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

/* Loading spinner */
.spinner {
    display: none;
    width: 20px;
    height: 20px;
    border: 2px solid #f3f3f3;
    border-top: 2px solid #3498db;
    border-radius: 50%;
    animation: spin 1s linear infinite;
    margin-left: 10px;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

.btn:disabled {
    opacity: 0.6;
    cursor: not-allowed;
}

.error-message {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.success-message {
    color: #28a745;
    font-size: 0.875rem;
    margin-top: 0.25rem;
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
                        <img src="assets/img/logo-light.svg" alt="" width="88">
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
                            
                            <!-- Registration Form -->
                            <form id="registrationForm">
                                <div class="row mb-5">
                                    <div class="form-group col-sm-6">
                                        <label>Nama: <span style="color: red;">*</span></label>
                                        <input type="text" id="customerName" name="name" class="form-control" required>
                                        <div class="error-message" id="nameError"></div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Nomor Telepon: <span style="color: red;">*</span></label>
                                        <input type="text" id="customerPhone" name="phone_number" class="form-control" required>
                                        <div class="error-message" id="phoneError"></div>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label>Alamat E-mail: <span style="color: red;">*</span></label>
                                        <input type="email" id="customerEmail" name="email" class="form-control" required>
                                        <div class="error-message" id="emailError"></div>
                                    </div>
                                </div>
                                
                                <!-- Error/Success Messages -->
                                <div id="formMessage" class="mb-3" style="display: none;"></div>
                                
                                <div class="text-center">
                                    <button type="submit" id="submitBtn" class="btn btn-primary btn-lg">
                                        <span>Daftar</span>
                                        <div class="spinner" id="loadingSpinner"></div>
                                    </button>
                                </div>
                            </form>
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

<!-- Registration Form Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registrationForm');
    const submitBtn = document.getElementById('submitBtn');
    const loadingSpinner = document.getElementById('loadingSpinner');
    const formMessage = document.getElementById('formMessage');
    
    // Clear error messages
    function clearErrors() {
        document.getElementById('nameError').textContent = '';
        document.getElementById('phoneError').textContent = '';
        document.getElementById('emailError').textContent = '';
        formMessage.style.display = 'none';
    }
    
    // Show error message
    function showError(message) {
        formMessage.className = 'error-message mb-3';
        formMessage.textContent = message;
        formMessage.style.display = 'block';
    }
    
    // Show success message
    function showSuccess(message) {
        formMessage.className = 'success-message mb-3';
        formMessage.textContent = message;
        formMessage.style.display = 'block';
    }
    
    // Validate form
    function validateForm() {
        let isValid = true;
        clearErrors();
        
        const name = document.getElementById('customerName').value.trim();
        const phone = document.getElementById('customerPhone').value.trim();
        const email = document.getElementById('customerEmail').value.trim();
        
        if (!name) {
            document.getElementById('nameError').textContent = 'Nama harus diisi';
            isValid = false;
        }
        
        if (!phone) {
            document.getElementById('phoneError').textContent = 'Nomor telepon harus diisi';
            isValid = false;
        } else if (!/^[0-9+\-\s()]+$/.test(phone)) {
            document.getElementById('phoneError').textContent = 'Format nomor telepon tidak valid';
            isValid = false;
        }
        
        if (!email) {
            document.getElementById('emailError').textContent = 'Email harus diisi';
            isValid = false;
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('emailError').textContent = 'Format email tidak valid';
            isValid = false;
        }
        
        return isValid;
    }
    
    // Handle form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        if (!validateForm()) {
            return;
        }
        
        // Show loading state
        submitBtn.disabled = true;
        loadingSpinner.style.display = 'inline-block';
        clearErrors();
        
        // Prepare payload
        const payload = {
            name: document.getElementById('customerName').value.trim(),
            phone_number: document.getElementById('customerPhone').value.trim(),
            email: document.getElementById('customerEmail').value.trim(),
            last_visit: null
        };
        
        try {
            // Call API
            const response = await fetch('https://api.pood.lol/customers', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(payload)
            });
            
            if (response.ok) {
                const result = await response.json();
                showSuccess('Pendaftaran berhasil! Mengalihkan ke menu...');
                
                // Store customer data if needed
                localStorage.setItem('customerData', JSON.stringify(result));
                
                // Redirect after 2 seconds
                setTimeout(() => {
                    window.location.href = 'menu-grid-collapse.php';
                }, 2000);
                
            } else {
                // Handle API errors
                const errorData = await response.json().catch(() => ({}));
                let errorMessage = 'Terjadi kesalahan saat mendaftar. ';
                
                if (response.status === 400) {
                    errorMessage += 'Data yang dimasukkan tidak valid.';
                } else if (response.status === 409) {
                    errorMessage += 'Email atau nomor telepon sudah terdaftar.';
                } else if (response.status >= 500) {
                    errorMessage += 'Server sedang mengalami gangguan. Silakan coba lagi nanti.';
                } else {
                    errorMessage += `Error ${response.status}: ${errorData.message || 'Silakan coba lagi.'}`;
                }
                
                showError(errorMessage);
            }
            
        } catch (error) {
            console.error('Registration error:', error);
            showError('Gagal terhubung ke server. Periksa koneksi internet Anda dan coba lagi.');
        } finally {
            // Reset loading state
            submitBtn.disabled = false;
            loadingSpinner.style.display = 'none';
        }
    });
    
    // Real-time validation
    document.getElementById('customerName').addEventListener('blur', function() {
        if (!this.value.trim()) {
            document.getElementById('nameError').textContent = 'Nama harus diisi';
        } else {
            document.getElementById('nameError').textContent = '';
        }
    });
    
    document.getElementById('customerPhone').addEventListener('blur', function() {
        const phone = this.value.trim();
        if (!phone) {
            document.getElementById('phoneError').textContent = 'Nomor telepon harus diisi';
        } else if (!/^[0-9+\-\s()]+$/.test(phone)) {
            document.getElementById('phoneError').textContent = 'Format nomor telepon tidak valid';
        } else {
            document.getElementById('phoneError').textContent = '';
        }
    });
    
    document.getElementById('customerEmail').addEventListener('blur', function() {
        const email = this.value.trim();
        if (!email) {
            document.getElementById('emailError').textContent = 'Email harus diisi';
        } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('emailError').textContent = 'Format email tidak valid';
        } else {
            document.getElementById('emailError').textContent = '';
        }
    });
});
</script>

</body>

</html>