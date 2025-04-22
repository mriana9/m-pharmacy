<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيدلية المعتز</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>

@extends('layout.master')

@section('content')
    <main>
        @if(session('success'))
        <div id="success-alert" class="alert alert-success text-center">
            {{ session('success') }}
        </div>
        @endif
        <script>
            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 3000);
        </script>

        <nav aria-label="breadcrumb">
            <div class="container-fluid">
                <ol class="d-flex justify-content-start align-items-center breadcrumb bg-light py-2">
                    <li><a href="/" class="text-secondary">الرئيسية</a></li>
                    <li class="px-2"><span>/</span></li>
                    <li aria-current="page"> تواصل معنا</li>
                </ol>
            </div>
        </nav>

        <div class="about-banner">
            <h3>تواصل معنا</h3>
            <p>إذا كان لديك أي استفسارات أو تحتاج إلى مساعدة، لا تتردد في الاتصال بنا عبر المعلومات أدناه:</p>
        </div>

        <div class="contact-info">
            <div class="container py-5">
            <ul class="list-unstyled d-flex align-items-center justify-content-between text-center">
                <li class="d-flex flex-column gap-3"><i class='bx bx-envelope'></i>
                    <span>contact@example.com</span>
                </li>
                <li class="d-flex flex-column gap-3"><i class='bx bx-phone'></i>
                    <span>+970 594-567-890</span>
                </li>
                <li class="d-flex flex-column gap-3"><i class='bx bx-time'></i>
                    <span>يوميًا ما عدا الجمعة</span>
                </li>
            </ul>
        </div>
        </div>

        <div class="contact-form">
            <div class="container">
                <h3>تواصل معنا الان</h3>
                <form id="contactForm" method="POST" class="row g-3">
                    @csrf
                    <div class="col-md-6">
                        <label for="name" class="form-label">الاسم</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="phone" class="form-label">رقم الهاتف</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-12">
                        <label for="subject" class="form-label">الموضوع</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">الرسالة</label>
                        <textarea class="form-control" id="message" rows="4" name="message" required></textarea>
                    </div>
                    <div class="col-12 text-center my-4">
                        <button type="submit" class="btn btn-primary">إرسال</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>


</body>
</html>
