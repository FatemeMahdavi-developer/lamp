@extends('site.layout.base')
@section('seo')
    @include("site.layout.partials.seo",["seo"=>$seo,"module"=>$module])
@endsection
@section('content')
<div class="content-wrap ">
    <div class="pt-270 pb-300 text-center position-relative align-items-center d-flex">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                <img class="jarallax-img" loading="lazy"
                    @if(@$project['pic_banner'])
                        src="{{asset("upload/thumb1/".$project["pic_banner"])}}"
                    @else
                        src="{{asset("site/assets/img/portfolio/project-single-hero-1920x1080.jpg")}}"
                    @endif
                alt="{{$project->alt_image_banner}}">
            </div>
            <div class="background-color" style="--background-color: #000; opacity: .25;"></div>
            <div class="background-color" style="background-image: linear-gradient(180deg, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0) 150px);"></div>
        </div>
        <div class="container">
            <div class="subtitle mb-15 font-size-15 fw-medium text-white">{{$module_title}} <span class="sep-dot"></span> 18 آبان، 1400</div>
            <h1 class="m-0 text-white">{{$project->title}}</h1>
        </div>
        <a class="down-arrow position-absolute start-50 bottom-0 translate-middle-x mb-50" href="#next">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="17" fill="none">
                <path stroke="currentColor" stroke-width="1.7" d="M6.143 0v15m0 0 5.143-5.625M6.143 15 1 9.375" />
            </svg>
        </a>
    </div>
    <div class="pt-120 pb-130" id="next">
        <div class="container">
            <div class="row gy-100">
                <div class="col-lg-7">
                    <h3 class="mb-45" data-show="startbox">{{$project->title}}</h3>
                    {!! $project->note !!}
                </div>
                <div class="col-lg-4 offset-lg-1" data-show="startbox" data-show-delay="400">
                    <div class="bg-gray-light rounded-4 py-50 px-60">
                        <h5 class="mb-10 ff-custom fw-normal">تکنولوژی ها</h5>
                        <p class="m-0">Angular <br>JavaScript <br>ASP.Net</p>
                        <h5 class="mb-10 ff-custom fw-normal mt-35">دسته بندی پروژه</h5>
                        <p class="m-0">{{$project->project_cat->title}}</p>
                        <h5 class="mb-10 ff-custom fw-normal mt-35">تاریخ تحویل</h5>
                        <p class="m-0">28 خرداد، 1400</p>
                    </div>
                </div>
            </div>
        </div>
        @if(!$content_pics->isEmpty())
            <div class="container mt-130">
                <div class="row gy-30 gallery-wrapper">
                    @foreach ($content_pics->slice(0,3) as $item)
                    <div @if($loop->index==2) class="col-md-12" @else class="col-md-6" @endif data-show="startbox" @if($loop->index==1) data-show-delay="100" @endif >
                        <a class="gallery-item rounded-4 overflow-hidden" href="{{asset("upload/".$item->pic)}}" @if($loop->index==2) style="--img-height: 49%;" @else style="--img-height: 100%;"  @endif data-img-height>
                            <img loading="lazy" @if($loop->index==2) src="{{asset("upload/thumb3/".$item->pic)}}"
                                @else  src="{{asset("upload/thumb2/".$item->pic)}}" @endif alt="{{$item->title}}">
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
    <div class="pb-130">
        @if($content_note_more)
        <div class="container overflow-hidden">
            <div class="row gy-50 gx-100">
                <div class="col-lg-12 note_project">
                    {!! $content_note_more->note_more !!}
                </div>
            </div>
        </div>
        @endif
        @if(@$content_pics[4])
            <div class="container-fluid mt-130 p-0" data-show="startbox">
                <div class="swiper" data-swiper-slides="auto" data-swiper-center="true" data-swiper-loop="true" data-swiper-gap="30" data-swiper-grabcursor="true">
                    <div class="swiper-container">
                        <div class="swiper-wrapper gallery-wrapper">
                            @foreach ($content_pics->slice(3,10) as $item)
                            <div class="swiper-slide" style="max-width: 770px;">
                                <a class="gallery-item rounded-4 overflow-hidden" href="{{asset("upload/".$item->pic)}}" style="--img-height: 61%;" data-img-height>
                                    <img loading="lazy" src="{{asset("upload/thumb1/".$item->pic)}}" alt="{{$item->title}}">
                                </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-flex mt-70 justify-content-center">
                        <div class="swiper-button-prev swiper-button-position-2 swiper-button-gray shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                            </svg></div>
                        <div class="swiper-button-next swiper-button-position-2 swiper-button-gray shadow"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                            </svg></div>
                    </div>
                </div>
            </div>
        @endif
    </div>
    <div class="pb-130">
        <div class="container">
            {{-- <div class="position-relative py-235 text-center rounded-4 overflow-hidden mt-90" data-show="startbox">
                <div class="background">
                    <div class="background-image jarallax" data-jarallax data-speed="0.8">
                        <img class="jarallax-img" loading="lazy" src="{{asset("site/assets/img/portfolio/project-video-1920x900.jpg")}}" alt="">
                    </div>
                </div>
                <a class="btn-video video-link btn btn-accent-1" href="https://www.aparat.com/video/video/embed/videohash/qY0i1/vt/frame" rel="nofollow">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 18">
                        <path fill="currentColor" d="M15.191 10.393 2.466 17.776C1.386 18.402 0 17.644 0 16.382V1.616C0 .356 1.384-.404 2.466.225L15.19 7.608a1.605 1.605 0 0 1 0 2.785Z" />
                    </svg>
                </a>
            </div>
             <hr class="mt-100 mb-60">
            --}}

            @if($count_arr_project)
            <div class="row gy-40">
                @foreach ($arr_project as $item_key=>$item_val)
                    @if(app("setting")->get('project_'.$item_key.'_title'))
                        <div class="col-12 col-sm-6 col-lg-{{12/$count_arr_project}}" data-show="startbox" data-show-delay="{{$loop->index * 100}}">
                            <div class="h2 m-0 text-accent-2">{{app("setting")->get('project_'.$item_key.'_count')}}</div>
                            <div class="h6 mb-15 ff-custom fw-normal">{{app("setting")->get('project_'.$item_key.'_title')}}</div>
                            <p class="font-size-15 m-0 ps-20">{{app("setting")->get('project_'.$item_key.'_note')}}</p>
                        </div>
                    @endif
                @endforeach
            </div>
            @endif

            {{-- <div data-show="startbox">
                <div class="page-navigation mt-130">
                <a class="page-navigation-prev h4 rounded-3 bg-light" href="project-single-03.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                        <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6" />
                    </svg>
                    <span class="d-none d-lg-block">طراحی محصول</span>
                </a>
                <a class="page-navigation-all shadow" href="projects-01.html">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none">
                            <path fill="currentColor" d="M0 0h7v7H0V0ZM11 0h7v7h-7V0ZM11 11h7v7h-7v-7ZM0 11h7v7H0v-7Z" />
                    </svg>
                </a>
                <a class="page-navigation-next h4 rounded-3 bg-light" href="project-single-02.html">
                    <span class="d-none d-lg-block">بازسازی ساختمان</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                        <path stroke="currentColor" stroke-width="1.7" d="M20 7H2m0 0 6.75-6M2 7l6.75 6" />
                    </svg>
                </a>
                </div>
            </div> --}}
        </div>
    </div>
    <div class="bg-linear-gradient py-120 footerPrev">
        @if(isset($all_project[0]))
        <div class="container">
            <h3 class="text-center" data-show="startbox">نمونه کارهای مرتبط</h3>
            <div class="swiper mt-90" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" data-show-delay="100">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach ($all_project as $project)
                        <div class="swiper-slide">
                            <div data-filters="marketing">
                                <a href="{{$project->url}}" class="card card-portfolio  card-overlay card-hover-appearance text-white text-center rounded-4">
                                    <span class="card-img" data-img-height style="--img-height: 92%;">
                                        @if($project->pic)
                                            <img loading="lazy" src="{{asset("upload/thumb1/".$project->pic)}}" alt="{{$project->alt_image}}">
                                        @else
                                            <img loading="lazy" src="{{asset("site/img/no_image/no_image(1170x605).jpg")}}" alt="{{$project->alt_image}}">
                                        @endif
                                        <span class="background-color" style="--background-color:#2e3c58e6;"></span>
                                    </span>
                                    <span class="card-img-overlay">
                                        <span class="card-title h5">{{$project->title}}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
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
            </div>
        </div>
        @endif
    </div>

    <!-- Call to action-->
    <div class="position-relative">
        <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".footerPrev" data-next-id=".footerNext">
            <div class="shape-parent">

                <div class="pt-120 pb-130 px-30 position-relative rounded-4 overflow-hidden z-index-1">
                    <div class="background">
                        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy"
                            src="{{asset("site/assets/img/root/call-to-action-1920x1080.jpg")}}" alt=""></div>
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
