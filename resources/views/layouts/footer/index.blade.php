<footer class="footer-hb">
   <div class="click-top"> <a href="javascript:0"><i class="fa fa-angle-double-up"></i></a> </div>
   <div class="container">
      <div class="content">
         {{-- <div class="logo">
            <div class="row">
               <div class="col-md-4 mb-4">
                  <a href="{{route('home')}}">
                     <img style="width: 100%" src="{{$setting->logo}}" class="img-fluid" alt="{{$setting->company}}">
                  </a>
               </div>
               <div class="col-md-8">
                  <form action="{{route('postcontact')}}" method="post" id="contactform" class="contactform">
                     <div class="row">
                        <div class="col-md-12">
                           <h4 class="text-center text-uppercase">Gửi yêu cầu tư vấn</h4>
                        </div>
                        <div class="col-md-6">
                           <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                              <input type="text" placeholder="Họ tên *" name="name" class="form-control form-control-lg notNull">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text"><i class="fa fa-phone" aria-hidden="true"></i></span>
                              <input type="text" name="phone" placeholder="Điện thoại *" class="form-control form-control-lg notNull">
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="input-group mb-3">
                              <span class="input-group-text"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                              <input type="text" name="email" placeholder="Email *" class="form-control form-control-lg">
                           </div>
                           <div class="input-group mb-3">
                              <span class="input-group-text"><i class="fa fa-comments-o" aria-hidden="true"></i></span>
                              <textarea name="mess" type="text" placeholder="Cần tư vấn ..." class="form-control form-control-lg"></textarea>
                           </div>
                        </div>
                        <div class="form-group input-group">
                           <button type="submit" class="btn btn-warning btn-frm">Gửi</button>
                           <div class="msgbox"></div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div> --}}
         <div class="info-footer">
            <div class="row">
               <div class="col-lg-5">
                  <div class="item">
                     <div class="title-footer">{{$setting->company}}</div>
                     <div class="list-place">
                        <p>
                           <img src="https://nadudesign.com/public/frontend/images/place1.png" class="img-fluid" alt="Địa chỉ">Địa chỉ: {{$setting->address1}}</p>
                        <p><img src="https://nadudesign.com/public/frontend/images/place2.png" class="img-fluid" alt="Số điện thoại">Hotline: {{$setting->phone1}}</p>
                        @if (isset($setting->phone2))
                        <p><img src="https://nadudesign.com/public/frontend/images/place2.png" class="img-fluid" alt="Số điện thoại">Số điện thoại: {{$setting->phone1}}</p>
                        @endif
                        <p><img src="https://nadudesign.com/public/frontend/images/place3.png" class="img-fluid" alt="Email">{{$setting->email}}</p>
                        <p><img src="https://nadudesign.com/public/frontend/images/place4.png" class="img-fluid" alt="Website">{{route('home')}}</p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3">
                  <div class="item">
                     <div class="title-footer">chính sách chung</div>
                     <div class="list-pol">
                        <ul>
                           <li>
                              <a href="{{route('home')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Trang chủ</a>
                           </li>
                           <li>
                              <a href="{{route('aboutUs')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Giới thiệu</a>
                           </li>
                           @foreach ($categoryhome as $cate)
                              <li>
                                 <a href="{{route('allListProCate',['danhmuc'=>$cate->slug])}}"><i class="fa fa-caret-right" aria-hidden="true"></i> {{languageName($cate->name)}}</a>
                              </li>
                           @endforeach
                           <li>
                              <a href="{{route('listService')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Báo giá</a>
                           </li>
                           <li>
                              <a href="{{route('allListBlog')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Góc tư vấn</a>
                           </li>
                           <li>
                              <a href="{{route('lienHe')}}"><i class="fa fa-caret-right" aria-hidden="true"></i> Liên hệ</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="item">
                     <div class="col-item-3">
                        <div class="title-footer">Fanpage</div>
                        <div class="list-new-ft">
                           <div class="fb-page" 
                           data-href="{{$setting->facebook}}"
                           data-width="380" 
                           data-hide-cover="false"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="reserved"> <span>© Luxcons Design 2022. Design by <a class="text-white" href="https://sbtsoftware.vn/">SBT Software</a></span> </div>
</footer>