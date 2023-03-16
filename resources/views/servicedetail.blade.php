@extends('layouts.main.master')
@section('title')
{{($detail_service->name)}}
@endsection
@section('description')
{{($detail_service->description)}}
@endsection
@section('image')
{{url(''.$detail_service->image)}}
@endsection
@section('css')
@endsection
@section('js')
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
            <li class="list-inline-item"><a href="{{route('listService')}}">Báo giá </a></li>
            </ul>
        </div>
    </div>
</section>
<section id="service">
    <div class="container">
        <div class="content">
			<div class="row">
				<div class="col-lg-3 col-small">
				<div class="box-menu-left pos-sticky">
					<div class="hd-box-col"><a><span>Đăng ký tư vấn dịch vụ</span></a></div>
					<div class="form-order">
						<form action="{{route('postcontact')}}" method="post" id="formorder" onsubmit="return check_contact('formorder');">
							@csrf
							<div class="intro-frm">Quý khách vui lòng để lại thông tin, chúng tôi sẽ liên hệ ngay!</div>
							<div class="frm-reg-col">
							<div class="mb-3">
								<input type="text" placeholder="Họ tên" name="name" class="form-control notNull">
							</div>
							<div class="mb-3">
								<input type="text" name="phone" placeholder="Điện thoại" class="form-control notNull">
							</div>
							<div class="mb-3">
								<input type="email" name="email" placeholder="Địa chỉ Email" class="form-control">
							</div>
							<div class="mb-3">
								<textarea name="mess" type="text" placeholder="Ghi chú thêm" class="form-control"></textarea>
							</div>
							<div class="form-group input-group">
								<button type="submit" class="btn btn-warning btn-frm">Nhận báo giá</button>
							</div>
							</div>
						</form>
					</div>
				</div>
				</div>
				<div class="col-lg-9 col-md-12">
				<h1 class="news-detail-name">{{($detail_service->name)}}</h1>
				<div class="c20"></div>
				<div class="content-detail">
					{!!languageName($detail_service->content)!!}
				</div>
				<div class="c20"></div>
				<!-- I got these buttons from simplesharebuttons.com -->
				<div class="share-buttons">
					<!-- Facebook -->
					<a href="http://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank">
					<img src="{{url('frontend/images/facebook.png')}}" alt="Facebook">
					</a>
					<!-- Twitter -->
					<a href="https://twitter.com/share?url={{url()->current()}}&amp;text={!!languageName($detail_service->description)!!}&amp;hashtags={{$detail_service->name}}" target="_blank">
					<img src="{{url('frontend/images/twitter.png')}}" alt="Twitter">
					</a>
					<!-- Email -->
					<a href="mailto:?Subject={{$detail_service->name}};Body={!!languageName($detail_service->description)!!}{{url()->current()}}">
					<img src="{{url('frontend/images/email.png')}}" alt="Email">
					</a>
					<!-- Google+ -->
					<a href="https://plus.google.com/share?url={{url()->current()}}" target="_blank">
					<img src="{{url('frontend/images/google.png')}}" alt="Google">
					</a>
					<!-- Pinterest -->
					<a style="display:none" href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());">
					<img src="{{url('frontend/images/pinterest.png')}}" alt="Pinterest">
					</a>
					<!-- Print -->
					<a href="javascript:;" onclick="window.print()">
					<img src="{{url('frontend/images/print.png')}}" alt="Print">
					</a>
				</div>
				<div class="c20"></div>
				<div class="c20"></div>
				</div>
			</div>
        </div>
    </div>
</section>
</main>
@endsection