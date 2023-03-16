@extends('layouts.main.master')
@section('title')
Dịch vụ báo giá 
@endsection
@section('description')
@endsection
@section('image')
{{url(''.$banner[0]->image)}}
@endsection
@section('css')
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:700" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
<style>
    #breadcrumbs {
        margin-bottom: 0px;
    }
    #service {
        margin-top: 0px!important;
        padding-top: 50px;
        background-image: url({{url('frontend/images/gttk-bg.jpg')}});
        background-color: #ededed;
        background-position: 0px 0px;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
    }
    #service .container {
        max-width: 1320px;
    }
    #service .row {
        align-items: center;
    }
    #service .row::after {
        content: "";
        display: block;
        background: #36363b;
        height: 2px;
        width: 70%;
        margin: 50px auto 40px;
        border-radius: 3px;
    }
    .slideInUp {
        -webkit-animation-name: slideInUp;
        animation-name: slideInUp;
    }
    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }
    .zoomIn {
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn;
    }
    @keyframes zoomIn {
        0% {
        opacity: 0;
        -webkit-transform: scale3d(.3,.3,.3);
        transform: scale3d(.3,.3,.3);
        }
        50% {
        opacity: 1;
        }
    }
    @keyframes slideInUp {
        0% {
        -webkit-transform: translate3d(0,100%,0);
        transform: translate3d(0,100%,0);
        visibility: visible;
        }
        100% {
        -webkit-transform: translate3d(0,0,0);
        transform: translate3d(0,0,0);
        }
    }
    #service .title.is-4 {
        font-family: 'Roboto Slab', 'Roboto', Arial, Helvetica, sans-serif;
        font-weight: 700;
        font-size: 1.5rem;
        text-align: left;
    }
    #service .title h2 {
        margin-top: 0;
    }
    #service .title.is-3 {
        font-family: 'Roboto', Arial, Helvetica, sans-serif;
        font-size: 2rem;
        text-align: left;
        text-transform: none;
    }
    .color_main {
        color: #2b4c4b;
    }
    #service .content-desc {
        text-align: justify;
    }
    #service .content-desc p {
        margin-bottom: 10px !important;
    }
    #service img {
        max-height: 300px;
        max-width: 300px;
    }

    #service .service-content {
        padding-left: 40px;
    }

    @media only screen and (max-width: 768px) {
        #service .content div:nth-child(3n) .service-content {
            order: 1;
        }
        #service .content div:nth-child(3n) .service-image {
            order: 2;
        }
        #service .content div:nth-child(3n)::after {
            order: 3;
            background: #36363b;
            opacity: .6;
            height: 2px;
        }
        #service .title-service span:before {
            left: calc(50% - 16px);
        }
        #service .title-service span:after {
            left: calc(50% - 16px);
        }
    }
</style>
@endsection
@section('js')
<script>
    $(window).on('load scroll', function(){
        var elem = $('.service-content .animated');
        var zoomIn = $('.service-image .animated');
        elem.each(function () {
        var isAnimate = $(this).data('av-animation');
        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        if(scrollPos > elemOffset - wh){
            $(this).addClass(isAnimate);
        }
        });
        zoomIn.each(function () {
        var isAnimate = $(this).data('av-animation');
        var elemOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();
        if(scrollPos > elemOffset - wh){
            $(this).addClass(isAnimate);
        }
        });
    });
</script>
@endsection
@section('content')
<main id="w-cate" class="">
<section id="banner-cate">
    <div class="avarta"><img src="{{url('frontend/images/breadcrumb-lienhe.jpg')}}" class="img-fluid" width="100%" alt="">
    </div>
</section>
<section id="breadcrumbs">
    <div class="container">
        <div class="content">
            <ul class="list-inline">
            <li class="list-inline-item"><a href="{{route('home')}}"><img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{$setting->company}}"></a></li>
            <li>
                <i class="fa fa-angle-right"></i>
            </li>
            <li class="list-inline-item"><a href="{{url()->current()}}">Báo giá </a></li>
            </ul>
        </div>
    </div>
</section>
<section id="service">
    <div class="container">
        <div class="content">
            <div class="title">
                <h2 class="title-service"><span>Dịch vụ báo giá của Luxcons</span></h2>
            </div>
            @foreach ($list_service as $key=>$service)
            @if ( $key%2 == 0)
            <div class="row">
                <div class="col-lg-6 col-md-6 service-content">
                    <div class="aniview animated" data-av-animation="slideInUp" style="opacity: 1;">
                        <h3 class="title is-4 mb-2">{{$service->name}}</h3>
                        <div class="title is-3 color_main">{{number_format($service->price, 0, '', '.')}}/m²</div>
                        <div class="content-desc">
                            {!!languageName($service->content)!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 text-center service-image">
                    <div class="aniview animated" data-av-animation="zoomIn" style="opacity: 1;">
                        <img src="{{$service->image}}" alt="{{$service->name}}">
                    </div>
                </div>
            </div>
            @else
            <div class="row">
                <div class="col-md-6 col-lg-6 text-center service-image">
                    <div class="aniview animated" data-av-animation="zoomIn" style="opacity: 1;">
                        <img src="{{$service->image}}" alt="{{$service->name}}">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 service-content">
                    <div class="aniview animated" data-av-animation="slideInUp" style="opacity: 1;">
                        <h3 class="title is-4 mb-2">{{$service->name}}</h3>
                        <div class="title is-3 color_main">{{number_format($service->price, 0, '', '.')}}/m²</div>
                        <div class="content-desc">
                            {!!languageName($service->content)!!}
                        </div>
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
</main>
@endsection