<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صيدلية المعتز</title>
    <!--css link-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--Boxicon cdn-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>


@extends('layout.master')

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


@section('content')
    <nav aria-label="breadcrumb">
        <div class="container-fluid">
            <ol class="d-flex justify-content-start align-items-center breadcrumb bg-light py-2">
                <li><a href="/" class="text-secondary">الرئيسية</a></li>
                <li class="px-2"><span>/</span></li>
                <li><a href="/products" class="text-secondary">المنتجات</a></li>
                <li class="px-2"><span>/</span></li>
                <li aria-current="page">{{ $product->name }}</li>
            </ol>
        </div>
    </nav>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ Voyager::image($product->image) }}" alt="{{ $product->name }}" class="img-fluid" id="productImage">
                </div>
                <div class="col-md-6">
                    <h1>{{ $product->name }}</h1>
                    <p class="text-muted text-secondary">شيكل{{ $product->price }}</p>
                    <p>{{ $product->description }}</p>
                    <div class="d-flex justify-content-start gap-3 align-items-center mt-4">
                        <button class="btn btn-primary" onclick="sendWhatsAppMessage()">التواصل على الوتساب للاستفسار عن هذا المنتج</button>
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#orderModal"> <i class='bx bx-cart'></i> طلب المنتج</button>
                        </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal for Order Form -->
    <div class="modal fade" id="orderModal" role="dialog" aria-labelledby="orderModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="orderModalLabel">طلب المنتج</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Order Form -->
                    <form id="orderForm" action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                        <!-- Full Name -->
                        <div class="form-group">
                            <label for="name">الاسم الكامل</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Age (Optional) -->
                        <div class="form-group">
                            <label for="age">العمر (اختياري)</label>
                            <input type="number" min="20" max="100" class="form-control" id="age" name="age">
                            @error('age')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Phone Number -->
                        <div class="form-group">
                            <label for="phone">رقم الهاتف (مع مفتاح الدولة)</label>
                            <input type="text" class="form-control" id="phone" name="phone"  maxlength="13" required>
                            <small class="form-text text-muted">Example: +9705981234567</small>
                            @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Notes -->
                        <div class="form-group">
                            <label for="notes">ملاحظات</label>
                            <textarea class="form-control" id="notes" name="notes"></textarea>
                        </div>

                        <!-- Address -->
                        <div class="form-group">
                            <label for="address">العنوان</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                            @error('address')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">إرسال الطلب</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

<script>
    function sendWhatsAppMessage() {
        var productName = "{{ $product->name }}";
        var productPrice = "شيكل{{ $product->price }}";
        var productDescription = "{{ $product->description }}";

        // Construct the message
        var message = "مرحباً! أود الاستفسار عن المنتج التالي:\n\n";
        message += "المنتج: " + productName + "\n";
        message += "السعر: " + productPrice + "\n";
        message += "الوصف: " + productDescription + "\n\n";
        message += "مشكورين!";

        // URL-encode the message
        var encodedMessage = encodeURIComponent(message);

        // WhatsApp URL
        var phoneNumber = "+970598048149"; 
        var whatsappURL = "https://wa.me/" + phoneNumber + "?text=" + encodedMessage;

        // Open WhatsApp (in the browser or app)
        window.open(whatsappURL, "_blank");
    }
</script>

 <!-- Bootstrap JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>