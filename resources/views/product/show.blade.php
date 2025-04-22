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

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ Voyager::image($product->image) }}" alt="{{ $product->title }}" class="img-fluid" id="productImage">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->title }}</h1>
            <p class="text-muted">شيكل{{ $product->price }}</p>
            <p>{{ $product->description }}</p>
            <button class="btn btn-primary" onclick="sendWhatsAppMessage()">التواصل على الوتساب للاستفسار عن هذا المنتج</button>
        </div>
    </div>
</div>

<script>
    function sendWhatsAppMessage() {
        const productName = "{{ $product->title }}";
        const message = `مرحبًا، أود الاستفسار عن المنتج: ${productName}`;
        const phoneNumber = "+972568660308";
        const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
        
        window.open(whatsappURL, "_blank");
    }
</script>
@endsection




 <!-- Bootstrap JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>