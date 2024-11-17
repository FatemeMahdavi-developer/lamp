@extends("site.layout.base")

@section('content')
<div class="content-wrap ">
    <div class=" pb-130">
        <div class="container">
            @if(isset($page["pic"]) && !empty($page["pic"]))
            <img class="d-block mx-auto my-4" src="{{asset("upload/".$page["pic"])}}" alt="{{$page["alt_image"]}}">
                @endif
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h3 class="mt-0 mb-25 animated" data-show="startbox" style="transform: translateY(0px); transition-duration: 500ms; opacity: 1;">{{$page["seo_h1"] ?? $page["title"]}}</h3>
                    <div class="pt-50">
                        {!! $page["note"] !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
