<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@php
    @$slug = Request::segment(2);
   if(@$slug==null){
    @$slug = Request::segment(2)??'home';
    @$meta = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getMetaDetail/'.$slug);
   }
   elseif(@$slug)
   {
    @$slug = Request::segment(3);
    @$meta = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/blogDetail/'.$slug);
   }else
   {
    @$catSlug = Request::segment(3);
    @$subCateSlug = Request::segment(4);
    @$meta = Helper::getCurlRequest('https://asteriksdigital.com/admin/api/getServicesbyslug/'.$catSlug.'/'.$subCateSlug);
   }
@endphp
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{@$meta['meta_title']}}</title>
    <meta name="description" content="{{@$meta['meta_description']}}">
    <meta name="keywords" content="{{@$meta['meta_tags']}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/custom.css')}}">
</head>
<body>
    <div id="app">
  <div class="preloader-it">
    <div class="loader-pendulums"></div>
</div>
<div class="hk-wrapper hk-vertical-nav">
    @include('frontend.layouts.navbar')
    <div class="hk-pg-wrapper">
        <main class="">
            @yield('frontendcontent')
        </main>
        @include('frontend.layouts.footer')
    </div>
</div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script>
    <script>
        $(".hslider").owlCarousel({
            items: 1,
        });
   </script>
    @stack('scripts')
</body>
</html>
