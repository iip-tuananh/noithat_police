<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <link rel="icon" href="{{url(''.$setting->favicon)}}"
         type="image/x-icon" />
      <link rel="apple-touch-icon"
         href="{{url(''.$setting->favicon)}}">
      <meta name="robots" content="noodp,index,follow" />
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
      <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
      <title>@yield('title')</title>

      <link rel="canonical" href="{{\Request::url()}}" />
      <meta property="og:locale" content="vi_VN" />
      <meta property="og:type" content="article" />
      <meta property="og:title" content="@yield('title')" />
      <meta property="og:description" content="@yield('description')" />
      <meta property="og:url" content="{{\Request::url()}}" />
      <meta property="og:site_name" content="JicaFood" />
      <meta property="og:image" content="@yield('image')" />
      <meta property="og:image:secure_url" content="@yield('image')" />
      <meta property="og:image:width" content="548" />
      <meta property="og:image:height" content="343" />
      <meta name="twitter:card" content="summary_large_image" />
      <meta name="twitter:description" content="@yield('description')" />
      <meta name="twitter:title" content="@yield('title')" />
      <meta name="twitter:image" content="@yield('image')" />
      <!--link css-->
      <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/fancybox.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/style-freedom.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/swiper.min.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/jquery.mmenu.all.css')}}">
      <link rel="stylesheet" href="{{asset('frontend/css/cust.css')}}"/>
      <link rel="stylesheet" href="{{asset('frontend/css/loban.css')}}"/>
      <link rel="stylesheet" href="{{asset('frontend/css/slick.min.css')}}"/>
      @yield('css')
   </head>
   <body>
      @include('layouts.header.index')
      @yield('content')
      @include('layouts.footer.index')
      <div class="box-fix">
         <a href="tel:{{$setting->phone1}}"><i class="fa fa-phone" aria-hidden="true"></i> <span>{{$setting->phone1}}</span></a>
         <a href="mailto:{{$setting->email}}"><i class="fa fa-envelope" aria-hidden="true"></i> <span>{{$setting->email}}</span></a>
         <a href="{{route('lienHe')}}"><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Liên hệ với chúng tôi</span></a>
      </div>
      <!--Link js-->
   </body>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
   <script>
      $(document).ready(function() {
         $('.active').closest('ul').closest('li').find('> a').addClass('active');
         $('.active').closest('ul').closest('ul').closest('li').find('> a').addClass('active');
      });
   </script>
   <script type="text/javascript" src="{{asset('frontend/js/bootstrap.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/slick.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/jquery.mmenu.all.js')}}"></script>
   <script src="{{asset('frontend/js/swiper.min.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/main.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/iscroll.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/functions.js')}}"></script>
   <script type="text/javascript" src="{{asset('frontend/js/lazysizes.min.js')}} " async></script>
   <div id="fb-root"></div>
   <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="Gxkd7dGO"></script>
   @yield('js')
   <script>
      function init() {
         var vidDefer = document.getElementsByTagName('iframe');
         for (var i=0; i<vidDefer.length; i++) {
            if(vidDefer[i].getAttribute('data-src')) {
                  vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
            } } }
      window.onload = init;
   </script>
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
   <script>
      var swiper = new Swiper(".mySwiperPrize", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      });
      var swiper2 = new Swiper(".mySwiperPrize2", {
      spaceBetween: 10,
      navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
      },
      thumbs: {
         swiper: swiper,
      },
      });
   </script>
   <script>
      var prod = $('.mobile-project').data('pro');
      for (let j = 0; j < prod; j++) {
         var swiper4 = new Swiper(".mySwiperPro2"+j, {
         loop: false,
         spaceBetween: 10,
         navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
         },
         thumbs: {
            swiper: new Swiper(".mySwiperPro"+j, {
                     loop: false,
                     spaceBetween: 10,
                     slidesPerView: 4,
                     freeMode: true,
                     watchSlidesProgress: true,
                     }),
         },
         });
      }
   </script>
   <script>
      const arr = [];
      var cate = $('.mobile-project').data('cate');
      for (let n = 0; n < cate; n++) {
         var pro = $(".box-project-"+n+" "+".mobile-project").data('pro');
         arr.push(pro)
      }
      arr.sort(function(a, b){return b-a});
      console.log(arr);
      for (let i = 0; i < cate; i++) {
         var project = ".box-project-"+i;
         for (let j = 0; j < arr[0]; j++) {
            console.log(project+" "+".mySwiper2"+j);
            var swiper2 = new Swiper(project+" "+".mySwiper2"+j, {
            loop: false,
            spaceBetween: 10,
            navigation: {
               nextEl: ".swiper-button-next",
               prevEl: ".swiper-button-prev",
            },
            thumbs: {
               swiper: new Swiper(project+" "+".mySwiper"+j, {
                        loop: false,
                        spaceBetween: 10,
                        slidesPerView: 4,
                        freeMode: true,
                        watchSlidesProgress: true,
                        }),
            },
            });
         }
      }
   </script>
   <style>
      .swiper {
      width: 100%;
      height: 100%;
      }

      .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      }

      .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      }

      .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
      }

      .swiper-slide {
      background-size: cover;
      background-position: center;
      }

      .mySwiper2 {
      height: 80%;
      width: 100%;
      }

      .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
      }

      .mySwiper .swiper-slide {
      width: 25%;
      height: 80px;
      opacity: 1;
      }

      .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
      }

      .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
      }
   </style>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   </body>
</html>