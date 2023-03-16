<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\product\Category;
use App\models\product\Product;
use App\models\blog\Blog;
use Session;
use App\models\website\Partner;
use App\models\blog\BlogCategory;
use App\models\product\TypeProduct;
use App\models\BannerAds;
use App\models\website\Video;
use App\models\website\Founder;
use App\models\website\Prize;
use App\models\website\AlbumAffter;
use App\models\ReviewCus;
use App\models\PageContent;

class HomeController extends Controller
{
    public function home()
    {
        $data['bannerqc'] = BannerAds::where('status',1)->get(['name','image','id','content','description']);
        $data['hotnews'] = Blog::where(['status'=>1, 'home_status'=>1])->orderBy('id','DESC')->limit(6)->get(['id','title','slug','created_at','image','description']);
        $data['producthot'] = Product::where(['status'=>1, 'discountStatus'=>1])->orderBy('id','DESC')->get();
        $data['typePro'] = TypeProduct::with(['category'])->where('status',1)->get();
        $data['partner'] = Partner::where(['status'=>1])->get(['id','image','name','link']);
        $data['video'] = Video::where(['status'=>1])->get(['id','image','name','link']);
        $data['founder'] = Founder::where(['status'=>1])->get(['id','image','name']);
        $data['reviewcus'] = ReviewCus::where(['status'=>1])->get();
        $data['aboutUs'] = PageContent::where(['type'=>'ve-chung-toi','language'=>'vi', 'status'=>1])->first(['id','title','content','image','description']);
        return view('home',$data);
    }
}
