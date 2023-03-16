@extends('layouts.main.master')
@section('title')
Kết quả tìm kiếm
@endsection
@section('description')
Đã tìm thấy {{$countproduct}} kết quả phù hợp cho từ khóa "{{$keyword}}"
@endsection
@section('image')
{{url(''.$setting->logo)}}
@endsection
@section('css')
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
				<li class="list-inline-item"><a href="{{route('home')}}"><img src="{{url('frontend/images/home.png')}}" class="img-fluid" alt="{{$setting->company}}"></a></li>
				<li>
				<i class="fa fa-angle-right"></i>
				</li>
				<li class="list-inline-item"><span>Đã tìm thấy {{$countproduct}} kết quả phù hợp</span></li>
			</ul>
		</div>
	</div>
	</section>
	<section id="service">
	<div class="container">
		<div class="content">
			<div class="title">
				<h2><span>Kết quả tìm kiếm</span></h2>
			</div>
			<div class="desc-title">
				<div id="service">
				<div class="list-service list-ct list-tk">
					<div class="row">
						@if (count($resultPro)>0)
						@foreach ($resultPro as $item)
						@php
							$img = json_decode($item['images']);
						@endphp
						<div class="col-md-4">
							<div class="item">
								<div class="avarta">
									<a href="{{route('detailProduct',['cate'=>$item['cate_slug'],'slug'=>$item['slug']])}}">
										<img class="img-fluid lazyload" alt="{{languageName($item['name'])}}" width="100%" data-src="{{$img[0]}}">
									</a>
								</div>
								<div class="info">
								<p><strong>{{languageName($item['name'])}}</strong></p>
								<div class="line3">{!!languageName($item['description'])!!}</div>
								</div>
							</div>
						</div>
						@endforeach
						@else
						<h3>Không tìm thấy kết quả phù hợp</h3>
						@endif
					</div>
				</div>
				</div>
				<!----------End TOP dự án----------->
			</div>
		</div>
	</div>
	</section>
</main>
@endsection