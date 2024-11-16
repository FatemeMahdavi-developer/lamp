@extends("site.layout.base")
@section('seo')
    @include("site.layout.partials.seo",["seo"=>$seo,"module"=>$module])
@endsection

@section('content')
<div class="content-wrap ">
    <!-- Page title-->
    <div class="position-relative py-210">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                @if(@$news_cat->pic_banner)
                <img class="jarallax-img" loading="lazy" src="{{asset('upload/'.$news_cat->pic_banner)}}" alt="{{$module_title}}">
                @else
                @if(isset($module_pic) && !empty($module_pic))
                <img class="jarallax-img" loading="lazy" src="{{asset('upload/'.$module_pic)}}" alt="{{$module_title}}">
                @else
                <img class="jarallax-img" loading="lazy" src="{{asset('site/assets/img/blog/blog-hero-1920x1080.jpg')}}" alt="{{$module_title}}">
                @endif
                @endif

            </div>
            <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
        </div>
        <div class="container">
            <h1 class="text-white mb-0 text-center">@if(@$news_cat){{$news_cat->h1()}}@else {{$module_title}} @endif</h1>
        </div>
    </div>
    <div class="pt-80 pb-130">
        <div class="container">
            <!-- Isotope-->
            <div class="isotope">
                <ul class="nav justify-content-center mb-60 isotopeNews">
                    @php $id_selected=$news_cat->id ?? ''; @endphp
                    @foreach ($news_cats as $news_cat)
                    <li class="nav-item isotopeNews @if($news_cat['id']==$id_selected)active @endif"><a class="nav-link" href="{{route('news.index_cat',['news_cat'=>$news_cat['seo_url']])}}">{{$news_cat['title']}}</a></li>
                    @endforeach
                </ul>
                @if(isset($news[0]))
                <div class="row isotope-grid gy-30">
                    @foreach ($news as $item)
                    <div class=" isotope-item col-12 col-md-6 col-lg-4" data-filters="architecture">
                        <div class="card card-blog  card-vertical card-hover-zoom card-blog-bordered rounded-4 overflow-hidden bg-white">
                            <a class="card-img rounded-0" href="{{$item->url}}" data-img-height style="--img-height: 72%;"><span class="badge bg-dark text-white position-absolute top-0 end-0 z-index-1 mt-20 me-20">{{$item->news_cat->title}}</span>
                                @if(isset($item['pic']) && !empty($item['pic']))
                                <img loading="lazy" src="{{asset('upload/thumb1/'.$item['pic'])}}" alt="{{$item['alt_image']}}">
                                @else
                                <img loading="lazy" src="{{asset('site/img/no_image/no_image(900x900).jpg')}}" alt="{{$item['alt_image']}}">
                                @endif
                            </a>
                            <div class="card-body py-40 px-50 pb-50"><a class="card-title h5" href="{{$item->url}}">{{$item['title']}}</a>
                                <p class="card-text">{{$item["note"]}}</p><a class="btn btn-accent-1 btn-link btn-clean" href="{{$item->url}}" target="_self">بیشتر بخوانید</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="alert alert-danger">نتیجه ای یافت نشد</div>
                @endif
             {{$news->links()}}
            </div>
        </div>
    </div>
</div>
    <!--/ pagination -->
    </div>

@endsection
@section('footer')
    <script>

        var keyword = '';
        var query_string = '';
        $("#form_news select").on('change', function () {
            $("#form_news").trigger('submit')
        })
        $("#form_news").on('submit', function (e) {
            keyword = $("[name='keyword']").val()
            query_string = $("#form_news select").val();
            e.preventDefault();
            if (keyword.length != '0') {
                query_string += "?keyword=" + keyword
            }
            window.location.href = query_string
        })
    </script>
@endsection
