{{-- <header style="background: linear-gradient(0deg,#828383 0%,rgb(197 197 197) 50%,#828383 100%);"> --}}
<header style="background-color: #444342;" >
   <div class="header-menu">
      <div class="container">
         <div class="content">
            <div class="row">
               <div class="col-md-2">
                  <div class="logo">
                     <a href="{{route('home')}}">
                        <img src="{{$setting->logo}}" style="width:300px:" class="img-fluid logo-scr" alt="{{$setting->logo}}">
                     </a>
                  </div>
               </div>
               <div class="col-md-10">
                  <ul>
                     <li class="">
                        <a href="{{route('home')}}" >Trang chủ</a>                                 
                     </li>
                     <li class="">
                        <a href="{{route('aboutUs')}}" >Giới thiệu</a>                                 
                     </li>
                     @foreach ($categoryhome as $item)
                     <li class="pages-services">
                        <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}">{{languageName($item->name)}}</a>                                     
                        @if (count($item->typeCate) > 0)
                        <ul>
                              @foreach ($item->typeCate as $type)
                           
                              <li>
                                 <a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>
                                 <ul>
                                    @foreach ($item->product as $pro)
                                    {{-- @dd($pro); --}}
                                @if($pro['type_slug'] == $type->slug)
                                    <li>
                                       <a href="{{route('detailProduct',['cate'=>$item['slug'],'slug'=>$pro['slug']])}}">{{languageName($pro['name'])}}</a>
                                       
                                    </li>
                                    @endif
                                    @endforeach
                              </ul>
                              </li>
                              @endforeach
                        </ul>
                        @endif
                     </li>
                     @endforeach
                     <li class="pages-news">
                        <a href="{{route('listService')}}" >Báo giá</a>
                     </li>
                     <li class="pages-news">
                        <a href="{{route('allListBlog')}}" >Góc tư vấn</a> 
                        <ul>
                           @foreach ($blogCate as $item)
                              <li class="">
                                 <a href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a>                                         
                              </li>
                           @endforeach
                        </ul>
                     </li>
                     <li class="">
                        <a href="{{route('lienHe')}}" >Liên hệ</a>                                 
                     </li>
                     <li>
                        <a href="javascript:0">
                           <img src="{{url('frontend/images/search.png')}}" class="img-fluid" alt="{{$setting->webname}}">
                        </a>
                        <div class="search">
                           <form action="{{route('search_result')}}" method="post">
                              @csrf
                              <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm ...">
                           </form>
                        </div>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- menu-mobile -->
   <div class="menu-mobile" style="display: none;">
      <div class="container">
         <div class="row">
            <div class="col-sm-3 hidden-lg hidden-md"></div>
            <div class="col-md-9 col-9 col-sm-6">
               <div class="logo"><a href="{{route('home')}}">
                  <img src="{{$setting->logo}}" class="img-fluid avarta-logo" alt="{{$setting->webname}}"></a>
               </div>
            </div>
            <div class="col-md-3 col-3 col-sm-3">
               <div class="header"><a href="#menu"><i class="fa fa-bars"></i></a></div>
            </div>
         </div>
      </div>
      <nav id="menu">
         <ul>
            <li>
               <form action="{{route('search_result')}}" method="post">
                  @csrf
                  <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm ...">
                  <button type="submit"><i class="fa fa-search"></i></button>
               </form>
            </li>
            <li><a href="{{route('home')}}" >Trang chủ</a>  </li>
            <li><a href="{{route('aboutUs')}}" >Giới thiệu</a>  </li>
            @foreach ($categoryhome as $item)
            <li>
               <a href="{{route('allListProCate',['danhmuc'=>$item->slug])}}" >{{languageName($item->name)}}</a>
               @if (count($item->typeCate) > 0)            
               <ul>
                  @foreach ($item->typeCate as $type)
                  <li>
                     <a href="{{route('allListType',['danhmuc'=>$item->slug,'loaidanhmuc'=>$type->slug])}}">{{languageName($type->name)}}</a>                                 
                  </li>
                  @endforeach
               </ul>
               @endif
            </li>
            @endforeach
            <li>
               <a href="{{route('listService')}}" >Báo giá</a>
            </li>
            <li>
               <a href="{{route('allListBlog')}}" >Góc tư vấn</a>
               <ul>
                  @foreach ($blogCate as $item)
                  <li>
                     <a href="{{route('listCateBlog',['slug'=>$item->slug])}}">{{languageName($item->name)}}</a>                             
                  </li>
                  @endforeach
               </ul>                 
            </li>
            <li><a href="{{route('lienHe')}}" >Liên hệ</a>  </li>
         </ul>
      </nav>
   </div>
   <!-- end menu-mobile -->
</header>