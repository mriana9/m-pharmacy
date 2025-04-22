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
        <!--main-content-->
        <section class="main-section">
            <div class="container h-100 d-flex justify-content-center align-items-center">
            <div class="py-5 text-center text-dark">
                <h1 class="">مرحباً بكم في صيدلية المعتز</h1>
                <p class="lead">وجهتك الأولى لكل ما تحتاجه من أدوية، مكملات غذائية، ومستحضرات التجميل.</p>
                <a href="#" class="btn btn-light btn-lg mt-3">تصفح المنتجات</a>
            </div>
            </div>
        </section>
        <!--/main-content-->

        <!--services-->
        <section class="services my-2 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-1 col-md-2 col-lg-3">
                        <div class="service-box">
                        <img src="/assets/img/home-serv1.jpg" alt="home service img">
                        <h2>الأدوية في مكان واحد</h2>
                        </div>
                    </div>

                    <div class="col-sm-1 col-md-2 col-lg-3">
                        <div class="service-box">
                        <img src="/assets/img/home-serv2.jpg" alt="home service img">
                        <h2>بشكل طبيعي جيد</h2>
                        </div>
                    </div>

                    <div class="col-sm-1 col-md-2 col-lg-3">
                        <div class="service-box">
                        <img src="/assets/img/home-serv3.jpg" alt="home service img">
                        <h2>منتجات متنوعة</h2>
                        </div>
                    </div>

                    
                    <div class="col-sm-1 col-md-2 col-lg-3">
                        <div class="service-box">
                        <img src="/assets/img/home-serv4.jpg" alt="home service img">
                        <h2>منتجات شائعة</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/services-->

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
                    <a href="{{ route('product.show', $product->id) }}" class="text-decoration-none text-dark">
                    <div class="product-box border-bottom">
                                <img src="{{ Voyager::image($product->image) }}" alt="{{ $product->title }}">
                                <div class="card-body">
                                    <h5 class="title">{{ Str::limit($product->title, 20) }}</h5>
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