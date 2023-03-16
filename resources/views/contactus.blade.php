@extends('layouts.main.master')
@section('title')
Liên hệ với chúng tôi
@endsection
@section('description')
Liên hệ với chúng tôi
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
@endsection
@section('js')
@endsection
@section('content')
<main>
	<section id="banner-cate">
	<div class="avarta"><img src="{{url('frontend/images/breadcrumb-lienhe.jpg')}}" class="img-fluid" width="100%" alt="">
	</div>
	</section>
	<section id="breadcrumbs">
	<div class="container">
		<div class="content">
			<ul class="list-inline">
				<li class="list-inline-item"><a href="{{route('home')}}"><img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt=""></a></li>
				<li>
					<i class="fa fa-angle-right"></i>
				</li>
				<li class="list-inline-item"><a href="">Liên hệ</a></li>
			</ul>
		</div>
	</div>
	</section>
	<section id="contact">
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-6">
				<form action="{{route('postcontact')}}" method="post" id="contactform">
					@csrf
					<h2 class="hd-contact"><span>Gửi thông tin đến chúng tôi</span></h2>
					<div class="frm-contact">
					<div class="mes-frm">Các trường được đánh dấu * là bắt buộc</div>
					<div class="">
						<div class="waiting"></div>
						<div class="input-group mb-3">
							<span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" placeholder="Họ tên *" name="name" class="form-control form-control-lg notNull">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
							<input type="text" name="phone" placeholder="Điện thoại *" class="form-control form-control-lg notNull">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
							<input type="text" name="email" placeholder="Email *" class="form-control form-control-lg">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text"><i class="fa fa-comments-o" aria-hidden="true"></i></span>
							<textarea name="mess" type="text" placeholder="Ghi chú thêm" class="form-control form-control-lg"></textarea>
						</div>
						<div class="form-group input-group">
							<button type="submit" class="btn btn-warning btn-frm">Gửi</button>
							<div class="msgbox"></div>
						</div>
					</div>
					</div>
				</form>
				</div>
				<div class="col-md-6">
					<h3 class="hd-contact">Thông tin liên hệ</h3>
					<div class="frm-contact">
						<p>{{$setting->webname}}</p>
						<p><strong>Địa chỉ:</strong> {{$setting->address1}}</p>
						<p><strong>Hotline:</strong> <a href="tel:{{$setting->phone1}}">{{$setting->phone1}}</a></p>
						@if ($setting->phone2)
						<p><strong>Số điện thoại:</strong> <a href="tel:{{$setting->phone2}}">{{$setting->phone2}}</a></p>
						@endif
						<p><strong>Email:</strong> <a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
						<p><strong>Thời gian làm việc:</strong> 8h - 17h30 kể cả thứ 7.</p>
						<p><strong>Website:</strong> <a href="{{route('home')}}">{{route('home')}}</a></p>
					</div>
				</div>
				<div class="col-md-12">
					{!!$setting->iframe_map!!}
				</div>
			</div>
		</div>
	</div>
	</section>
</main>
@endsection