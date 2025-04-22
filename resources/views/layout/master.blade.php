<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيدلية المعتز</title>
    <link rel="icon" type="image/x-icon" href="/assets/img/favicon.ico">
</head>
<body>
    <header class="header">
       <div class="top-header border-bottom bg-light">
        <div class="container-fluid py-2">
            <div class="d-flex justify-content-between align-items-center">
            <div class="email"> <i class='bx bx-envelope'></i> support@example.com</div>
            <div class="phone"> <i class='bx bx-phone'></i> +970 99 - 567 - 8899</div>
            </div>
        </div>
       </div>

       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/assets/img/mlogo.png" alt="logo img" w1dth="50" height="40" class="d-inline-block align-text-top rounded-circle">
            </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="/about">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('products') ? 'active' : '' }}" href="/products">المنتجات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contact') ? 'active' : '' }}" href="/contact">تواصل معنا</a>
                    </li>
                </ul>

                </div>
            </div>
        </nav>
    </header>
    @yield('content')

    <footer class="bg-dark text-white text-center py-4">
    <div class="container d-flex justify-content-between align-items-center">
    <p>جميع الحقوق محفوظة &copy; 2025 صيدلية معتز</p>

    <ul class=" text-white d-flex justify-content-between align-items-center gap-3">
        <li>
            <a href="/" class="text-white">الرئيسية</a>
        </li>
        <li>
            <a href="/about" class="text-white">من نحن</a>
        </li>  
        <li>
            <a href="#" class="text-white">المنتجات</a>
        </li>
        <li>
            <a href="#" class="text-white">تواصل معنا</a>
        </li>
    </ul>
    </div>

    <a href="https://api.whatsapp.com/send?phone=972568660308&text=مرحبا!%20اريد%20الاستفسار%20عن%20المنتج%20من%20فضلك" id="fixedWhatsAppIcon" class="wow zoomIn" target="_blank">
    <i class='bx bxl-whatsapp'></i>
</a>
  </footer>

</body>
</html>