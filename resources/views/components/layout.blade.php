<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    {{-- -- swiper CDN -- --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    {{-- inizio google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;600&family=Raleway:ital,wght@0,200;0,500;0,900;1,300&display=swap" rel="stylesheet">
    {{-- fine google fonts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    <title>{{$title ?? 'Presto.it'}}</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{$style ?? ''}}
</head>

<body class="bg-primary text-white">
    <div class="">
        <x-navbar/>
        {{$slot}}
        <div class="container-fluid p-3">
            <x-footer/>
        </div>
    @livewireScripts
    </div>
    <div class="fixed-bottom m-5">
        <x-btn-up/>
    </div>
</body>


{{-- swiper --}}
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</html>
