<!DOCTYPE html>
<html>
<head>
    <title>Our Services</title>
    <style>
        .service {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            max-width: 600px;
        }
        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <h1>Our Services</h1>

    @foreach($services as $service)
        <div class="service">
            <h2>{{ $service->title }}</h2>
            <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}">
            <p>{{ $service->description }}</p>
        </div>
    @endforeach

</body>
</html>
