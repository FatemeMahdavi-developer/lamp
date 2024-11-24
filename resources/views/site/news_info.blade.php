@extends('site.layout.base')
@section('content')
<div class="content-wrap ">
    <div class="py-240 position-relative">
        <div class="background">
            <div class="background-image jarallax" data-jarallax data-speed="0.8">
                @if(isset($news['pic_banner']) && !empty($news['pic_banner']))
                <img class="jarallax-img" loading="lazy" src="{{asset('upload/thumb1/'.$news['pic_banner'])}}" alt="{{$news["title"]}}">
                @else
                <img class="jarallax-img" loading="lazy" src="{{asset('site/assets/img/blog/single-post-hero-1920x1080.jpg')}}" alt="{{$news["title"]}}">
                @endif
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-120 pb-60">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div class="subtitle mb-15 font-size-15 fw-medium text-gray-dark">{{$news->news_cat->title ?? ''}} <span class="sep-dot"></span> {{$news->date_site}}</div>
                <h1 class="m-0 ps-30">{{$news->h1()}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                {{$news->note}}
            </div>
        </div>
        @if(isset($news_pic[0]))
        <div class="row py-90 gy-30 gallery-wrapper">
            @foreach ($news_pic as $pic)
            <div class="col-12 col-sm-6">
                <!-- Gallery item--><a class="gallery-item rounded-4 overflow-hidden" href="{{asset('upload/thumb1/'.$pic['pic'])}}" style="--img-height: 87%;" data-img-height><img loading="lazy" src="{{asset('upload/thumb1/'.$pic['pic'])}}" alt=""></a>
            </div>
            @endforeach
        </div>
        @endif
        @if(isset($news->note_more) && !empty($news->note_more))
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                {!!$news->note_more!!}
            </div>
        </div>
        @endif
        @if (isset($news_note[0]))
            @foreach ($news_note as $note)
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3 text-center"><svg class="text-accent-1" xmlns="http://www.w3.org/2000/svg" width="28" height="24" fill="none">
                            <path fill="currentColor" d="M7.111 11.65 10.333 0h-5L0 12.932V24h11.778V11.65H7.11Zm16.222 0L26.556 0h-5l-5.334 12.932V24H28V11.65h-4.667Z" />
                        </svg>
                        <blockquote class="mt-40 mb-90 px-lg-60">{{$note['note']}}</blockquote>
                    </div>
                </div>
            @endforeach
        @endif
        @if (isset($news_video[0]))
        @foreach ($news_video as $video)
        <div class="unique-video-container">
            <video data-video-id="{{$video['id']}}" poster="{{asset("upload/".$video['pic_video'])}}" controls>
                <source src="{{asset("upload/".$video['video'])}}" type="video/mp4">
                مرورگر شما از ویدیو پشتیبانی نمی‌کند.
            </video>
            <div class="poster-overlay" data-video-id="{{$video['id']}}" style="background-image: url('{{asset("upload/".$video['pic_video'])}}');"></div>
            <div class="unique-play-icon" data-video-id="{{$video['id']}}" onclick="playVideo(this)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z"/>
                </svg>
            </div>
        </div>
        @endforeach
        @endif
        <div class="row mb-130">
            <div class="col-12 col-lg-8 offset-lg-2">
                <hr class="mt-0 mb-25">
                <div class="row justify-content-between gy-10">
                    @if(!empty($news['news_keyword'][0]))
                    <div class="col-auto">
                        <span class="fw-medium font-size-16 ms-8">برچسب:</span>
                        @foreach($news['news_keyword'] as $key => $keyword)
                            <a class="text-decoration-none text-hover-accent-1" href="javascript:void(0)">{{$keyword}}</a>@if($key!=(count($news['news_keyword'])-1)),@endif
                        @endforeach
                    </div>
                    @endif
                    <div class="col-auto"><span class="fw-medium font-size-16 ms-10">اشتراک:</span>
                        <ul class="nav nav-gap-md d-inline-flex">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.facebook.com/sharer.php?u={{$news['url']}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="7" height="13" fill="none"><path fill="currentColor" d="M5.15 2.158H6.3V.091C6.102.063 5.42 0 4.625 0 2.966 0 1.83 1.077 1.83 3.054v1.821H0v2.31h1.83V13h2.244V7.186H5.83l.28-2.311H4.073V3.283c0-.668.174-1.125 1.076-1.125Z" /></svg>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://twitter.com/share?text={{$news['title']}}&url={{$news['url']}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" fill="none"><path fill="currentColor" d="M14.324 3.849c.01.13.01.262.01.393 0 3.991-3.155 8.59-8.922 8.59a9.11 9.11 0 0 1-4.814-1.355c.252.028.495.038.757.038a6.434 6.434 0 0 0 3.892-1.29c-1.378-.028-2.533-.898-2.931-2.094.194.028.388.046.592.046.281 0 .563-.037.825-.103C2.296 7.794 1.22 6.58 1.22 5.111v-.037a3.25 3.25 0 0 0 1.417.383c-.844-.542-1.398-1.468-1.398-2.515 0-.56.156-1.075.427-1.524C3.21 3.251 5.53 4.448 8.13 4.578a3.288 3.288 0 0 1-.077-.692c0-1.664 1.398-3.02 3.135-3.02.903 0 1.718.365 2.291.954a6.32 6.32 0 0 0 1.99-.729 3.035 3.035 0 0 1-1.378 1.664 6.477 6.477 0 0 0 1.805-.467 6.61 6.61 0 0 1-1.572 1.56Z" /></svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(isset($news['related_news']))
    <div class="bg-linear-gradient py-120">
        <div class="container">
            <h3 class="text-center">وبلاگ های مرتبط</h3>
            <div class="swiper mt-90" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3" data-swiper-gap="30" data-swiper-grabcursor="true">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($news['related_news'] as $item)
                        <div class="swiper-slide">
                            <div data-filters="company">
                                <!-- Blog-->
                                <div class="card card-blog  card-vertical card-hover-zoom">
                                    <a class="card-img rounded-4" href="{{$item['url']}}" data-img-height style="--img-height: 90%;">
                                        <span class="badge bg-dark text-white position-absolute top-0 end-0 z-index-1 mt-20 me-20">مسکن</span>
                                        @if(isset($item['pic']) && !empty($item['pic']))
                                            <img loading="lazy" src="{{asset('upload/thumb1/'.$item['pic'])}}" alt="{{$item['alt_image']}}">
                                        @else
                                            <img loading="lazy" src="{{asset('site/img/no_image/no_image(900x900).jpg')}}" alt="{{$item['alt_image']}}">
                                        @endif
                                    </a>
                                    <div class="card-body pt-30">
                                        <div class="card-date text-gray-dark">25 خرداد، 1400</div><a class="card-title h5" href="{{$item['url']}}">{{$item['title']}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev swiper-button-position-1 swiper-button-white shadow mt-n90"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                        <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                    </svg></div>
                <div class="swiper-button-next swiper-button-position-1 swiper-button-white shadow mt-n90"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                        <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                    </svg></div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@section("footer")
<script>
    function playVideo(icon) {
        var videoId = icon.getAttribute("data-video-id");
        var video = document.querySelector("video[data-video-id='" + videoId + "']");
        var playIcon = document.querySelector(".unique-play-icon[data-video-id='" + videoId + "']");
        var posterOverlay = document.querySelector(".poster-overlay[data-video-id='" + videoId + "']");

        video.style.display = "block";
        video.play();

        playIcon.style.display = "none";
        posterOverlay.style.display = "none";
    }
</script>
@endsection

