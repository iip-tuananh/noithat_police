@extends('layouts.main.master')
@section('title')
{{languageName($product->name)}}
@endsection
@section('description')
{{languageName($product->description)}}
@endsection
@section('image')
@php
$img = json_decode($product->images);
@endphp
{{url(''.$img[0])}}
@endsection
@section('css')
@endsection
@section('js')
<script type="text/javascript">
   $('.slider-for').slick({
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      fade: true,
      asNavFor: '.slider-nav',
      prevArrow: '<span class="previous"><img src="{{url('frontend/images/left2.png')}}"></span>',
      nextArrow: '<span class="next"><img src="{{url('frontend/images/right2.png')}}"></span>',
   });
   $('.slider-nav').slick({
      autoplay: false,
      arrow: false,
      slidesToShow: 8,
      slidesToScroll: 1,
      responsive: [{
            breakpoint: 1024,
            settings: {slidesToShow: 3, slidesToScroll: 3, infinite: true, dots: true}
      }, {breakpoint: 600, settings: {slidesToShow: 2, slidesToScroll: 2}}, {
            breakpoint: 480,
            settings: {slidesToShow: 2, slidesToScroll: 1}
      }],
      asNavFor: '.slider-for',
      dots: false,
      centerMode: false,
      centerPadding: 0,
      focusOnSelect: true
   });
</script>
@endsection
@section('content')
<main id="product-detail">
   <section id="banner-cate">
      <div class="avarta"><img src="{{$img[0]}}" class="img-fluid" width="100%" alt="{{languageName($product->name)}}"></div>
   </section>
   <section id="breadcrumbs">
      <div class="container">
         <div class="content">
            <ul class="list-inline">
               <li class="list-inline-item"><a href="{{route('home')}}"><img
                  src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{languageName($product->name)}}"></a></li>
               <li>
                  <i class="fa fa-angle-right"></i>
               </li>
               <li class="list-inline-item"><a href="{{route('allListProCate', ['danhmuc'=>$product->cate_slug])}}">{{languageName($product->cate->name)}}</a></li>
               <li>
                  <i class="fa fa-angle-right"></i>
               </li>
               <li class="list-inline-item"><span>{{languageName($product->name)}}</span></li>
            </ul>
         </div>
      </div>
   </section>
   <section id="project-detail">
      <div class="container">
         <div class="content">
            <div id="carousel-thumbs" class="carousel-thumbnails">
               <div class="slider-for">
                  @foreach ($img as $item)
                  <div class="carousel-items ">
                        <img class="img-fluid" src="{{$item}}"
                        width="100%" alt="{{$item}}">
                     </div>
                  @endforeach
                  
               </div>
               <!--/.Slides-->
               <div class="slider-nav">
                  @foreach ($img as $key => $item)
                  <div class="clc {{$key == 0 ? 'active' : ''}} "><img
                        class="{{$key == 0 ? 'active' : ''}}"
                        src="{{$item}}"
                        alt="{{$item}}">
                  </div>
                  @endforeach
               </div>
            </div>
            <div class="info-project">
               <h1>{{languageName($product->name)}}</h1>
               <div class="desc">
                  {!!languageName($product->content)!!}
               </div>
               <div class="social">
                  <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                     <a class="a2a_button_facebook"></a>
                     <a class="a2a_button_twitter"></a>
                     <a class="a2a_button_pinterest"></a>
                     <a class="a2a_button_google_gmail"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @if (count($productlq) > 0)
   <section id="box-project">
      <div class="container">
         <div class="content">
            <div class="title">
               <h2><span>{{languageName($product->cate->name)}} liên quan</span></h2>
            </div>
         </div>
      </div>
      <div class="list-project desktop-project">
         <div class="container-fluid">
            @foreach ($productlq as $pro)
            @if ($product->id != $pro->id)
            @php
               $imgs = json_decode($pro->images);
            @endphp
            <div class="item">
               <div class="row mt-3">
                  <div class="col-md-6 col-small">
                     <div class="small">
                        <div class="row">
                           @foreach ($imgs as $key => $img)
                           @if ($key != 0 && $key < 5)
                           <div class="col-md-6 col-sm-6 col-6">
                              <div class="item-small wow fadeIn" data-wow-delay=".4s">
                                 <div class="avarta box first">
                                    <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}" >
                                    <img
                                    src="{{$img}}"
                                    class="img-fluid"
                                    width="100%"
                                    alt="{{languageName($pro->name)}}">
                                    </a>
                                 </div>
                              </div>
                           </div>
                           @endif
                           @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-big">
                     <div class="big wow fadeIn" data-wow-delay="2s">
                        <div class="avarta">
                           <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">
                              <img
                              src="{{$imgs[0]}}"
                              class="img-fluid"
                              width="100%" alt="{{languageName($pro->name)}}">
                           </a>
                        </div>
                        <div class="info box first">
                           <h3>
                              <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">{{languageName($pro->name)}}</a>
                           </h3>
                           <div class="linea">{!!languageName($pro->description)!!}</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endif
            @endforeach
         </div>
      </div>
      <div class="list-project mobile-project" data-pro="{{count($productlq)}}" > 
         <div class="container">
            @foreach ($productlq as $key=>$pro)
            @if ($product->id != $pro->id)
            @php
               $imgs = json_decode($pro->images);
            @endphp
            <div class="item">
               <div class="row">
                  <div class="col-12">
                     <div class="project-album-image">
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiperPro2{{$key}}" >
                           <div class="swiper-wrapper">
                              @foreach ($imgs as $img)
                              <a class="swiper-slide" href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">
                                 <img src="{{$img}}" />
                              </a>
                              @endforeach
                           </div>
                           <div class="swiper-button-next"></div>
                           <div class="swiper-button-prev"></div>
                        </div>
                        <div thumbsSlider="" class="swiper mySwiper mySwiperPro{{$key}}">
                           <div class="swiper-wrapper">
                              @foreach ($imgs as $img)
                              <div class="swiper-slide">
                                 <img src="{{$img}}" />
                              </div>
                              @endforeach
                           </div>
                        </div>
                        <div class="info">
                           <h3>
                              <a href="{{route('detailProduct',['cate'=>$pro->cate_slug,'slug'=>$pro->slug])}}">{{languageName($pro->name)}}</a>
                           </h3>
                           <div class="linea">{!!languageName($pro->description)!!}</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endif
            @endforeach
         </div>
      </div>
   </section>
   @endif
</main>

@endsection

