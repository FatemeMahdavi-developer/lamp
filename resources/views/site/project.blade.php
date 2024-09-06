@extends("site.layout.base")
@section('seo')
    @include("site.layout.partials.seo",["seo"=>$seo,"module"=>$module])
@endsection
@section('content')
<div class="content-wrap ">
    <div class="pt-115 pb-110 shape-parent footerPrev">
        <div class="shape justify-content-end"><img loading="lazy" src="{{asset("site/assets/img/root/project-5-shape-1-568x706.png")}} " alt="" width="568" height="706"></div><!-- Shape-->
        <div class="shape align-items-end justify-content-start"><img loading="lazy" src="{{asset("site/assets/img/root/project-5-shape-2-536x706.png")}} " alt="" width="536" height="706"></div>
        <div class="container">
            <h1 class="mb-0 text-center">پروژه ها</h1>
            <div class="row mt-130">
                <div class="col-lg-10 offset-lg-1">
                    <div class="isotope">
                    @if(isset($project[0]))
                        <div class="row isotope-grid gy-60">
                            @foreach($project as  $item)
                                <div class="isotope-item col-12" data-filters="branding">
                                    <a class="card card-portfolio  card-overlay card-hover-zoom card-bg-show text-white rounded-4" href="{{$item->url}}">
                                        <span class="card-img" data-img-height style="--img-height: 52%;">
                                            @if($item->pic)
                                            <img loading="lazy" src="{{asset("upload/thumb1/".$item->pic)}} " alt="{{$item->alt_image}}">
                                            @else
                                            <img loading="lazy" src="{{asset("site/img/no_image/no_image(1170x605).jpg")}} " alt="{{$item->alt_image}}">
                                            @endif
                                            <span class="background-color" style="--background-color: rgba(23, 22, 26, .40); --background-color-hover: rgba(23, 22, 26, .45);"></span>
                                        </span>
                                        <span class="card-img-overlay card-img-overlay-lg">
                                            <span class="card-location">
                                                @if($item->project_cat->path_svg)
                                                    {!! $item->project_cat->path_svg !!}
                                                    @else
                                                    @if($item->project_cat->pic)
                                                        <img src="{{asset("upload/thumb1/".$item->project_cat->pic)}}" >
                                                    @endif
                                                @endif
                                                {{$item->project_cat->title}}
                                            </span>
                                            <span class="card-title h4">{{$item->title}}</span>
                                            <span class="card-category subtitle mt-10">{!! $item->note !!}</span>
                                        </span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="text-center mt-80">
                            {{$project->links('site.layout.paginate.paginate')}}
                        </div>
                    @else
                        <div class="alert alert-danger">نتیجه ای یافت نشد</div>
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="position-relative">
        <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".footerPrev" data-next-id=".footerNext">
            <div class="shape-parent">
                <div class="py-70 pe-md-100 pe-50 position-relative rounded-4 overflow-hidden z-index-1">
                    <div class="background">
                        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset("site/assets/img/root/call-to-action-1920x1080.jpg")}} " alt=""></div>
                        <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
                    </div>
                    <div class="row d-flex align-items-center gy-40">
                        <div class="col-lg-5">
                            <h3 class="text-white m-0" data-show="startbox">ارتباط رایگان با مشاورین</h3>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <ul class="list-group borderless d-inline-flex">
                                <li class="list-group-item d-flex" data-show="startbox" data-show-delay="100"><svg class="ms-15 align-self-center text-accent-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none">
                                        <path fill="currentColor" d="M16 11.98v2.408a1.604 1.604 0 0 1-1.094 1.527 1.613 1.613 0 0 1-.66.079 15.941 15.941 0 0 1-6.943-2.465A15.672 15.672 0 0 1 2.476 8.71a15.869 15.869 0 0 1-2.47-6.96A1.603 1.603 0 0 1 .96.136C1.163.047 1.384 0 1.607 0h2.414A1.61 1.61 0 0 1 5.63 1.381c.102.77.29 1.528.563 2.256a1.603 1.603 0 0 1-.362 1.694l-1.022 1.02a12.86 12.86 0 0 0 4.827 4.817l1.022-1.02a1.61 1.61 0 0 1 1.697-.36c.73.271 1.489.46 2.26.561A1.61 1.61 0 0 1 16 11.98Z" />
                                    </svg><a class="text-white" href="tel:02188888888">02188888888</a></li>
                                <li class="list-group-item d-flex mt-15" data-show="startbox" data-show-delay="200"><svg class="ms-15 align-self-center text-accent-3" xmlns="http://www.w3.org/2000/svg" width="14" height="11" fill="none">
                                        <path fill="currentColor" d="M14 0H0l7 4.583L14 0Z" />
                                        <path fill="currentColor" d="M14 9.821V2L7 6.5 0 2v7.821C0 10.47.63 11 1.4 11h11.2c.77 0 1.4-.53 1.4-1.179Z" />
                                    </svg><a class="text-white" href="mailto:help@startbox.com">help@startbox.com</a></li>
                            </ul>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 text-end text-lg-start">
                            <div data-show="startbox" data-show-delay="300">
                                <!-- Button--><a class="btn btn-accent-3 ms-lg-70" href="contact-02.html" target="_self">دریافت مشاوره</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



