@extends("site.layout.base")
@section('seo')
    @include("site.layout.partials.seo",["seo"=>$seo,"module"=>$module])
@endsection
@section('content')
<div class="content-wrap ">
    <div class="position-relative py-210">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                <img class="jarallax-img" loading="lazy" @if($module_pic) src="{{asset("upload/".$module_pic)}}" @else src="{{asset("site/assets/img/about-us-hero-1920x900.jpg")}}" @endif alt="{{$module_title}}">
            </div>
            <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
        </div>
        <div class="container">
            <h1 class="text-white mb-0 text-center">{{$module_title}}</h1>
        </div>
    </div>
    <div class="pt-120 pb-130">
        @if(isset($pages_about_title))
        <div class="container">
            <div class="row align-items-center gy-50">
                @if(!empty($pages_about_pic))
                <div class="col-lg-6">
                @else
                <div class="col-lg-12">
                @endif
                    <div class="ps-lg-70">
                        <h3 class="mb-30" data-show="startbox">{{$pages_about_title}}</h3>
                        <p data-show="startbox" data-show-delay="100">{!! $pages_about_note !!}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="position-relative shape-parent mt-80">
                        <div class="ms-100" data-img-height style="--img-height: 70%;" data-show="startbox">
                            <a class="image-link" href="assets/img/about-us-3-900x630.jpg">
                                @if(!empty($pages_about_pic))
                                    <img class="rounded-4" loading="lazy" src="{{asset("upload/".$pages_about_pic)}}" alt="{{$pages_about_alt_pic ?? $pages_about_title}}"/>
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
            <div class="alert alert-danger">@lang("common.page_error",["name"=>"about"])</div>
        @endif
    </div>
    @if($contents_about)
    <div class="py-100 position-relative">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                <img class="jarallax-img" loading="lazy" src="{{asset("site/assets/img/root/features-1920x450.jpg")}}">
            </div>
            <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
        </div>
        <div class="container">
            <div class="row gy-50">
                @foreach($contents_about as $content)
                <div class="col-12 col-lg-4" data-show="startbox">
                    <div class="d-flex align-items-center mb-20">
                        <h4 class="mb-0 me-20 text-white">{{$content->title}}</h4>
                    </div>
                    <p class="text-white font-size-15 m-0 ps-30">{{$content->note}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
    @if(isset($pages_about2_title))
        <div class="pt-120 pb-130 bg-linear-gradient">
            <div class="container">
                <div class="row align-items-center gy-90">
                    @if($pages_about2_pic || $sliders)
                    <div class="col-lg-6">
                        <div class="swiper ms-lg-70" data-swiper-slides="1" data-swiper-effect="fade" data-show="startbox">
                            <div class="swiper-container">
                                <div class="swiper-wrapper gallery-wrapper">
                                    @if(!empty($pages_about2_pic))
                                    <div class="swiper-slide">
                                        <a class="gallery-item rounded-4 overflow-hidden" href="{{asset("upload/".$pages_about2_pic)}}" style="--img-height: 110%;" data-img-height>
                                            <img loading="lazy" src="{{asset("upload/".$pages_about2_pic)}}" alt="{{$pages_about2_alt_pic ?? $pages_about2_title}}">
                                        </a>
                                    </div>
                                    @endif
                                    @foreach($sliders as $slider)
                                    <div class="swiper-slide">
                                        <a class="gallery-item rounded-4 overflow-hidden" @if($slider->pic) href="{{asset("upload/".$slider->pic)}}" @else href="{{asset("site/img/no_image/no_image(500x550).jpg")}}"  @endif style="--img-height: 110%;" data-img-height>
                                            @if($slider->pic)
                                                <img loading="lazy" src="{{asset("upload/thumb1/".$slider->pic)}}" alt="{{$slider->title}}">
                                            @else
                                                <img loading="lazy" src="{{asset("site/img/no_image/no_image(500x550).jpg")}}" alt="{{$slider->title}}">
                                            @endif
                                        </a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @if($sliders)
                                <div class="swiper-button-prev swiper-button-position-1 swiper-button-white shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="swiper-button-next swiper-button-position-1 swiper-button-white shadow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                        <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-lg-6">
                    @else
                    <div class="col-12">
                    @endif
                        <h3 class="mb-50" data-show="startbox" data-show-delay="100">{{$pages_about2_title}}</span></h3>
                        <p class="mb-60 ms-lg-70" data-show="startbox" data-show-delay="200">{!! $pages_about2_note !!}</p>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-danger">@lang("common.page_error",["name"=>"about2"])</div>
    @endif
    @if($count_arr_project)
    <div class="pt-110 pb-120 position-relative">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset("site/assets/img/root/numbers-1920x600.jpg")}}" alt=""></div>
            <div class="background-color" style="--background-color: #F01F4B; opacity: .88;"></div>
        </div>
        <div class="container">
            <div class="row gy-40">
                @foreach ($arr_project as $item_key=>$item_val)
                    @if(app("setting")->get('project_'.$item_key.'_title'))
                        <div class="col-12 col-sm-6 col-lg-{{12/$count_arr_project}}" data-show="startbox" data-show-delay="{{$loop->index * 100}}">
                            <div class="h1 m-0 text-white">{{app("setting")->get('project_'.$item_key.'_count')}}</div>
                            <div class="h6 mb-15 text-white ff-custom fw-normal">{{app("setting")->get('project_'.$item_key.'_title')}}</div>
                            <p class="font-size-15 m-0 text-white">{{app("setting")->get('project_'.$item_key.'_note')}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    @endif

    <div class="pt-120 pb-130 footerPrev">
        @if(!empty($teams[0]))
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4 text-center"><span class="badge bg-light text-dark mb-20" data-show="startbox">تیم ما</span>
                    <h3 class="m-0" data-show="startbox" data-show-delay="100">تیم حرفه ای ما</h3>
                </div>
            </div>
            <div class="swiper mt-90 shape-parent" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:4" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" data-show-delay="200">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($teams as $team)
                            <div class="swiper-slide">
                                <div class="member">
                                    <div class="member-image rounded-4" data-img-height style="--img-height: 114%;">
                                        @if($team->pic)
                                            <img loading="lazy" src="{{asset("upload/thumb1/".$team->pic)}}" alt="{{$team->alt_pic ?? $team->title}}">
                                        @else
                                            <img loading="lazy" src="{{asset("site/img/no_image/no_image(540x620).jpg")}}" alt="{{$team->alt_pic ?? $team->title}}">
                                        @endif
                                    </div>
                                    <div class="member-body"><a class="member-title h5" href="#">{{$team->title}}</a>
                                        <div class="member-subtitle font-size-15 text-gray-dark">{{$team->position}}</div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex mt-70 justify-content-center">
                    <div class="swiper-button-prev swiper-button-position-2 swiper-button-gray shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="swiper-button-next swiper-button-position-2 swiper-button-gray shadow">
                        <svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>


     <div class="position-relative">
        <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".footerPrev" data-next-id=".footerNext">
            <div class="shape-parent">

                <div class="pt-120 pb-130 px-30 position-relative rounded-4 overflow-hidden z-index-1">
                    <div class="background">
                        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset("site/assets/img/root/call-to-action-1920x1080.jpg")}}" alt=""></div>
                        <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h3 class="mb-25 text-white" data-show="startbox">مشاوره رایگان</h3>
                            <p class="mb-50 text-white" data-show="startbox" data-show-delay="100">زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                            <div data-show="startbox" data-show-delay="200">
                                <a class="btn btn-accent-1" href="contact-01.html" target="_self">تماس با ما <svg class="me-15 align-self-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 15">
                                        <path fill="currentColor" d="M15 11.23v2.259a1.501 1.501 0 0 1-1.026 1.432c-.199.067-.41.092-.619.073a14.944 14.944 0 0 1-6.508-2.31A14.692 14.692 0 0 1 2.32 8.166 14.877 14.877 0 0 1 .006 1.641 1.503 1.503 0 0 1 .9.13 1.51 1.51 0 0 1 1.507 0H3.77a1.51 1.51 0 0 1 1.508 1.295c.095.722.273 1.432.528 2.115a1.503 1.503 0 0 1-.34 1.588l-.957.956a12.055 12.055 0 0 0 4.525 4.516l.958-.956a1.51 1.51 0 0 1 1.591-.338 9.7 9.7 0 0 0 2.12.527 1.509 1.509 0 0 1 1.296 1.527Z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
