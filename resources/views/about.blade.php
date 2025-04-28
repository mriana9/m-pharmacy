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
    <!--main-content-->
    <main>

        <nav aria-label="breadcrumb">
            <div class="container-fluid">
            <ol class="d-flex justify-content-start align-items-center breadcrumb bg-light py-2">
                <li><a href="/" class="text-secondary">الرئيسية</a></li>
                <li class="px-2"><span>/</span></li>
                <li aria-current="page">من نحن</li>
            </ol>
            </div>
        </nav>

        <!--about-us-->
        <section class="about-us py-5">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <img src="/assets/img/about.png" alt="about img">
                    </div>
                    <div class="col-lg-6">
                        <div class="info">
                            <h3>مرحباً بكم في صيدلية المعتز</h3>
                            <p>نقدم لكم منصة إلكترونية تلبي جميع احتياجاتكم الصحية. نسعى جاهدين لجعل الرعاية الصحية تجربة مريحة لكم. احصلوا على أدويتكم الطبية التقليدية، والمثلية، والفيتامينات، والمكملات الغذائية، وغيرها من المنتجات الصحية، مع خدمة التوصيل إلى منازلكم.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/about-us-->

        <!--banner-->
        <div class="banner">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6">
                        <h3>الأدوية والمنتجات التي لا تستلزم وصفة طبية</h3>
                    </div>
                    <div class="col-lg-6">
                        <img src="/assets/img/banner-img.png" alt="home banner img">
                    </div>
                </div>
            </div>
        </div>
        <!--/banner-->

        
        <!--products-->
        <section class="products py-5">
            <div class="container">
                <h2 class="text-center mb-5">+ 1,000 منتج صيدلي يوميًا!</h2>
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3 mb-4">
                        <a href="{{ route('product.details', $product->id) }}" class="text-decoration-none text-dark">
                            <div class="product-box border-bottom">
                                    <img src="{{ Voyager::image($product->image) }}" alt="{{ $product->title }}">
                                    <div class="card-body">
                                        <h5 class="title">{{ Str::limit($product->name, 25) }}</h5>
                                        <p class="price">شيكل{{ $product->price }}</p>
                                        <div class="d-flex justify-content-end align-items-center gap-2"> 
                                            <span> المزيد من التفاصيل </span>
                                            <i class='bx bx-right-arrow-alt' ></i>
                                        </div>
                                    </div>
                            </div>
                        </a>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex justify-content-center my-2">
                    <a href="/products" class="btn btn-primary mx-auto btn-lg mt-3">المزيد المنتجات</a>
                </div>
            </div>
        </section>
        <!--/products-->
        
    </main>
    <!--/main-content-->
@endsection


 <!-- Bootstrap JS-->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>