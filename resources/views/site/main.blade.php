@extends("site.layout.base")
@section('head')
    <link rel="stylesheet" href="{{asset('site/assets/css/pages/page-01.css')}}">
@endsection

@section('content')
<div class="content-wrap ">
    <div class="pt-90 pb-90 bg-dark shape-parent">
        <!-- Shape-->
        <div class="shape justify-content-start align-items-end"><img loading="lazy" src="{{asset('site/assets/img/root/home-1-shape-364x300.png')}}" alt="" width="364" height="300"></div>
        <div class="background start-custom">
            <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset('site/assets/img/root/call-to-action-1920x1080.jpg ')}}" alt=""></div>
            <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
        </div>
        <div class="container">
            @if(isset($pages_main_title))
            <div class="row gy-70">
                <div class="col-lg-6 offset-lg-1 order-lg-2">
                    @if(isset($pages_main_pic) && !empty($pages_main_pic))
                    <img class="w-100 rounded-4 shadow mb-lg-n210 rellax no-transform-lg" loading="lazy" src="{{asset('upload/'.$pages_main_pic)}}" alt="">
                    @else
                    <img class="w-100 rounded-4 shadow mb-lg-n210 rellax no-transform-lg" loading="lazy" src="{{asset('site/assets/img/home-1-900x900.jpg ')}}" alt="">
                    @endif
                </div>
                <div class="col-lg-5 wrapperMain">
                    <h1 class="text-white mb-45">{{$pages_main_title}}</h1>
                    {!!$pages_main_note!!}<a class="btn btn-accent-1" href="{{route('contact')}}" target="_self">تماس با ما <svg class="me-15 align-self-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 15">
                            <path fill="currentColor" d="M15 11.23v2.259a1.501 1.501 0 0 1-1.026 1.432c-.199.067-.41.092-.619.073a14.944 14.944 0 0 1-6.508-2.31A14.692 14.692 0 0 1 2.32 8.166 14.877 14.877 0 0 1 .006 1.641 1.503 1.503 0 0 1 .9.13 1.51 1.51 0 0 1 1.507 0H3.77a1.51 1.51 0 0 1 1.508 1.295c.095.722.273 1.432.528 2.115a1.503 1.503 0 0 1-.34 1.588l-.957.956a12.055 12.055 0 0 0 4.525 4.516l.958-.956a1.51 1.51 0 0 1 1.591-.338 9.7 9.7 0 0 0 2.12.527 1.509 1.509 0 0 1 1.296 1.527Z" />
                        </svg></a>
                </div>
            </div>
            @else
            <div class="alert alert-danger">@lang("common.page_error",["name"=>"main"])</div>
            @endif
        </div>
    </div>
    <div class="pt-120 pt-lg-210 pb-130">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6 offset-lg-3 text-center"><span class="badge bg-light text-dark mb-20" data-show="startbox">معرفی شرکت</span>
                    <h3 class="m-0 px-lg-70" data-show="startbox" data-show-delay="100">مدیریت کسب و کار خود با بهترین خدمات</h3>
                </div>
            </div>
            <div class="row gy-30">
                <div class="col-12 col-md-6 col-lg-3" data-show="startbox">
                    @if(isset($pages_customize_title))
                    <!-- Service box-->
                    <div class="service-box lift position-relative rounded-4 bg-gray-light text-center">
                        <!-- Circle icon-->
                        <div class="circle-icon text-white bg-accent-2 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="28" height="31" fill="none">
                                <path fill="currentColor" d="M15.556 0 0 18.6h14L12.444 31 28 12.4H14L15.556 0Z" />
                            </svg></div>
                        <h5 class="service-box-title mb-15 ff-custom fw-normal">{{$pages_customize_title}}</h5>
                        <p class="service-box-text font-size-15 mb-30">{{$pages_customize_short_note}}</p>
                        <a class="service-box-arrow stretched-link mt-30" href="/pages/customize">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6"></path>
                            </svg>
                        </a>
                    </div>
                    @else
                    <div class="alert alert-danger">@lang("common.page_error",["name"=>"customize"])</div>
                    @endif
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="100">
                    @if(isset($pages_freeConsultation_title))
                    <!-- Service box-->
                    <div class="service-box lift position-relative rounded-4 bg-gray-light text-center">
                        <!-- Circle icon-->
                        <div class="circle-icon text-white bg-accent-2 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="29" fill="none">
                                <path fill="currentColor" d="M13.002 0C8.852 0 5.46 3.387 5.46 7.53c0 4.142 3.392 7.529 7.542 7.529s7.542-3.387 7.542-7.53C20.544 3.387 17.15 0 13.002 0ZM25.944 21.076a7.017 7.017 0 0 0-.757-1.381c-1.515-2.236-3.853-3.715-6.488-4.077-.329-.033-.691.033-.955.23a7.942 7.942 0 0 1-4.742 1.545 7.942 7.942 0 0 1-4.742-1.545 1.237 1.237 0 0 0-.955-.23 9.308 9.308 0 0 0-6.488 4.077c-.296.427-.56.92-.757 1.381-.1.197-.066.427.033.625.263.46.592.92.889 1.315.46.625.955 1.184 1.515 1.71.46.46.988.887 1.515 1.315A14.936 14.936 0 0 0 12.969 29c3.228 0 6.356-1.02 8.958-2.96a14.47 14.47 0 0 0 1.515-1.314c.526-.526 1.053-1.085 1.515-1.71.329-.427.625-.855.889-1.315.164-.198.197-.428.098-.625Z" />
                            </svg></div>
                        <h5 class="service-box-title mb-15 ff-custom fw-normal">{{$pages_freeConsultation_title}}</h5>
                        <p class="service-box-text font-size-15 mb-30">{{$pages_freeConsultation_short_note}}</p>
                        <a class="service-box-arrow stretched-link mt-30" href="/pages/freeConsultation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6"></path>
                            </svg>
                        </a>
                    </div>
                    @else
                    <div class="alert alert-danger">@lang("common.page_error",["name"=>"freeConsultation"])</div>
                    @endif
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="200">
                    @if(isset($pages_dataSecurity_title))
                    <!-- Service box-->
                    <div class="service-box lift position-relative rounded-4 bg-gray-light text-center">
                        <!-- Circle icon-->
                        <div class="circle-icon text-white bg-accent-2 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="29" fill="none">
                                <path fill="currentColor" fill-rule="evenodd" d="M7.988 4.955a5.25 5.25 0 0 1 8.962 3.712v5.2H6.45v-5.2a5.25 5.25 0 0 1 1.538-3.712ZM3.95 13.867v-5.2a7.75 7.75 0 1 1 15.5 0v5.2h1.35a2.6 2.6 0 0 1 2.6 2.6v9.1a2.6 2.6 0 0 1-2.6 2.6H2.6a2.6 2.6 0 0 1-2.6-2.6v-9.1a2.6 2.6 0 0 1 2.6-2.6h1.35Z" clip-rule="evenodd" />
                            </svg></div>
                        <h5 class="service-box-title mb-15 ff-custom fw-normal">{{$pages_dataSecurity_title}}</h5>
                        <p class="service-box-text font-size-15 mb-30">{{$pages_dataSecurity_short_note}}</p>
                        <a class="service-box-arrow stretched-link mt-30" href="/pages/dataSecurity"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6"></path>
                            </svg></a>
                    </div>
                    @else
                    <div class="alert alert-danger">@lang("common.page_error",["name"=>"dataSecurity"])</div>
                    @endif
                </div>
                <div class="col-12 col-md-6 col-lg-3" data-show="startbox" data-show-delay="300">
                    @if(isset($pages_returnPay_title))
                    <!-- Service box-->
                    <div class="service-box lift position-relative rounded-4 bg-gray-light text-center">
                        <!-- Circle icon-->
                        <div class="circle-icon text-white bg-accent-2 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="29" height="27" fill="none">
                                <path fill="currentColor" d="m14.5 0 4.48 8.886L29 10.32l-7.25 6.913L23.461 27 14.5 22.386 5.539 27l1.711-9.767L0 10.32l10.02-1.434L14.5 0Z" />
                            </svg></div>
                        <h5 class="service-box-title mb-15 ff-custom fw-normal">{{$pages_returnPay_title}}</h5>
                        <p class="service-box-text font-size-15 mb-30">{{$pages_returnPay_short_note}}</p>
                        <a class="service-box-arrow stretched-link mt-30" href="/pages/returnPay">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="14" fill="none">
                                <path stroke="currentColor" stroke-width="1.7" d="M0 7h18m0 0-6.75-6M18 7l-6.75 6"></path>
                            </svg>
                        </a>
                    </div>
                    @else
                    <div class="alert alert-danger">@lang("common.page_error",["name"=>"returnPay"])</div>
                    @endif
                </div>
            </div>
            <div class="text-center mt-80">
                <div data-show="startbox">
                    <!-- Button--><a class="btn btn-accent-1" href="{{route('contact')}}" target="_self">اطلاعات بیشتر</a>
                </div>
                <p class="fw-medium font-size-15 mt-25 mb-0" data-show="startbox" data-show-delay="100">آیا می خواهید یک مشاوره رایگان دریافت کنید؟ <a href="{{route('contact')}}">تماس با ما</a></p>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            @if(isset($pages_main1_title))
            <div class="row gy-50">
                <div class="col-lg-5">
                    <h3 class="mb-45" data-show="startbox">{{$pages_main1_title}}</h3>
                    <p class="mb-40" data-show="startbox" data-show-delay="100">
                        {!!$pages_main1_note!!}
                    </p>
                    <div data-show="startbox" data-show-delay="200">
                        <!-- Button--><a class="btn btn-accent-1 btn-link btn-clean" href="{{route('about')}}" target="_self">بیشتر بدانید</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="position-relative shape-parent mt-80">
                        <!-- Shape-->
                        <div class="shape justify-content-start mt-n40 ms-n45 text-dark" data-jarallax-element="40"><svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="86" height="85" fill="none">
                                <path fill="currentColor" fill-rule="evenodd" d="M80.607 25.302h-.731c-.226-.173-.001-.45-.172-.65l-.504-.027c-.167.343-.285.84-.879.676-.227-.053-.046-.348-.21-.422-.347-.114-.584.077-.907.254-.42-.59-1.186-.73-1.697-1.258-.1-.406.078-.86-.237-1.256-.098-.124-.065-.51.054-.622.365-.345-.077-.698.04-.933.174-.349.036-.625.104-.894-.314-.13-.425.038-.63.253-.04-.83-.174-1.579.258-2.307l.6-.066c-.1-.364.243-.63.229-.99-.022-.594.163-1.13.465-1.615.253-.406.211-.834.218-1.28l1.073-.983.152.127c.157-.13.313-.354.512-.404.274-.068.46-.357.808-.258.244.07.524.018.787.012.22-.006.457.02.657-.05.26-.091.482-.348.74-.382.48-.064.976-.018 1.505-.018.265.504.846.624 1.31.83.569.254.838.693 1.017 1.168.181.485-.133.986-.361 1.41-.293.542-.673 1.05-1.197 1.406.381.613.73 1.2.226 1.884-.145 1.987-1.385 3.497-2.272 5.156-.235.44-.811.645-.958 1.239ZM6.124 63.859l.2-.241c-.055-.176-.234-.095-.36-.16-.208-.154.062-.442-.176-.629-.076.008-.218-.02-.272.037-.69.724-.816.423-1.428-.124-.073-.065-.11-.066-.212-.075-1.41-.123-1.957-.674-2.116-2.064-.183-.023-.24.272-.5.158-.138-.456-.717-.744-.589-1.394.027-.136-.259-.333-.4-.501.542-.452-.504-1.08.147-1.519-.014-.29-.342-.342-.404-.593-.072-.29.155-.465.23-.698.258-.813.815-1.467 1.217-2.2.34-.62 1.097-.881 1.679-1.217.313.061.413.336.628.463l.202-.513.382.556c.306-.2.094-.472.254-.687h1.54l.422.422c.538-.521.997-.108 1.481.198.64-.648 1.292.338 1.951-.031.283.312.71.472.642.985-.007.056.055.173.094.177.765.078.695.83.992 1.26-.188.468-.538.834-.912 1.182-.082.076-.16.227-.24.228-1.004.004-1.045.951-1.488 1.5-.384.476-.527 1.072-.688 1.632a6.994 6.994 0 0 0-.282 1.705c-.02.637.015 1.427-.876 1.687-.158.046-.277.247-.401.388-.213.24-.446.2-.717.068ZM28.791 48.175c.375-.162.764-.302 1.22-.281.863.038 1.732.048 2.594-.004.43-.026.873.038 1.24.134.292.076.487-.355.722-.03.192.266.498.06.729.145.26.096.48.338.823.165.154-.065-.1-.417.25-.389.683.047.284.933.853 1.1.04-.117.087-.247.136-.386.179-.035.294.15.302.22.067.57.38 1.09.316 1.682-.024.213-.056.399-.158.614-.3.635-.575 1.322-.501 2.037.045.44-.318.716-.269 1.153.043.373.203.828-.204 1.146 0 .677-.04 1.357.01 2.03.066.892-.457 1.422-1.069 1.907-.09.071-.286.01-.422.01-.17-.374-.371-.708-.355-1.285-.207.405-.312.65-.527.839-.294.258-.55.336-.86.05-.129-.12-.215-.304-.446-.285-.649.055-1.11-.301-1.486-.76-.36-.437-.916-.683-1.003-1.399-.064-.516-.52-.976-.753-1.482-.628-1.358-1.262-2.714-1.826-4.097-.273-.667.01-1.34.268-1.973.119-.29.271-.564.416-.86ZM22.87 33.667c-.033-.41.06-.85-.114-1.041-.289-.314.338-.508-.03-.75-.578.446-.551 1.28-1.089 1.752-.38-.165-.752-.343-.935-.614-.308-.053-.35.146-.545.231-.58-.324-1.286-.583-1.708-1.165-.535-.738-1.039-1.526-1.035-2.503.002-.452.038-.907-.006-1.355-.147-1.477.306-2.843.75-4.21.185-.571.492-1.088.854-1.553.257-.158.523-.053.846-.092l.467.467c.316.04.37-.405.669-.46.183-.032.253.125.368.22l.256-.233.139.402c.052.074.092.052.161-.03.507-.603 1.194-.633 1.918-.574.461.296.731.811 1.393.971.682.165.961 1.277.647 1.96-.257.559-.57 1.073-.122 1.704.125.175.104.552.004.769-.277.594-.22 1.251-.43 1.854-.196.561-.31 1.152-.53 1.702-.067.167-.147.312-.157.5-.037.7-.447 1.247-.786 1.818-.216.365-.592.214-.985.23ZM50.532 50.867l.24.205.16-.439c.703.3 1.275-.207 1.916-.326.254-.048 1.214-.208 1.462-.185.07.007.176.064.203.037.301-.309.693-.158 1.036-.236.295-.068.555.397.834.02.56.463 1.216.132 1.823.212.37.049.75.01 1.118.01l.326.325c-.083.15-.3.238-.205.485.318.22.713-.004 1.054.139.315.277.478.572.109.93-.08.078-.206.146-.232.241-.244.883-1.007.922-1.7 1.035-.712.114-1.323.44-1.877.687-.293.772.149 1.372.162 2.026.013.61-.145 1.24.199 1.834.081.142.137.478-.076.621-.352.24-.316.776-.722.925-.182.067-.401.022-.615-.139-.204-.153-.027-.477-.32-.524-.23-.036-.34.146-.442.284-.171.231-.42.214-.607.152-.257-.085-.478-.277-.715-.423-.337.403-.592-.064-.762-.169-.236-.144-.51-.26-.723-.446-.226-.197-.426-.424-.642-.633a.833.833 0 0 1-.26-.462c-.03-.143-.179-.189-.044-.418.144-.247-.303-.054-.398-.317-.381-1.048-1.051-1.962-1.473-2.998a.843.843 0 0 1-.035-.616c.221-.735.55-1.395 1.206-1.837ZM54.604 84.51c-.975-.056-.975-.056-1.134-1.114-.564.526-.564.526-1.137.676-.161-.428-.384-.845-.984-.705-.082.02-.205-.057-.282-.121-.45-.381-.624-.994-1.119-1.34.024-.732-.473-1.449-.203-2.155.286-.75.358-1.557.768-2.28.502-.884 1.043-1.717 1.813-2.458.416.041.858.02 1.096-.462l.261.232c.735-.738.922-1.884 1.828-2.464.357-.171.568.287.825.194.337-.122.557.307.871.104.273-.177.557-.074.808-.05.262.344-.377.498-.104.81.202.042.307-.32.58-.106.159.745-.103 1.419-.386 2.133-.307.774-.735 1.539-.697 2.418.014.316-.204.524-.32.772-.345.729-.587 1.49-.864 2.24-.347.944-.451 1.976-1.014 2.857-.179.279-.387.515-.606.819ZM47.369 22.139c.195-.227-.03-.502.2-.66.324-.053.572.193.55.403-.085.78.432 1.132.934 1.524.148.114.268.262.401.396.207.461-.109.823-.233 1.222-.168.118-.353.046-.532.047-.18-.096 0-.493-.387-.433-.254.088-.35.462-.352.574a3.744 3.744 0 0 1-.487 1.842c.326.704-.208 1.307-.234 1.974-.027.706-.382 1.275-.852 1.79-.199.217-.415.087-.62.168.015-.387-.463-.509-.214-1.146-.407.444-.39.913-.765.881-.602-.05-1.297-.03-1.765-.33-.452-.291-1.258-.416-1.203-1.256a.255.255 0 0 0-.09-.184c-.863-.67-.928-1.721-1.252-2.64-.26-.737-.481-1.485-.477-2.291.001-.45.464-.787.215-1.227.252-.4.719-.59.792-1.172.917.755 1.82-.173 2.694.093.2-.099.12-.283.206-.41.151-.144.353-.007.347-.005.377-.135.166-.44.416-.482.122.072.084.193.092.312.23.265.566.014.83.156l.396.397c.386-.247.455-.685.655-1.097.273.145.41.336.382.662-.03.333-.05.681.353.892ZM53.912.885c.137.215.056.397.23.471.233-.243.007-.575.14-.86l.398-.04v1.088c.209-.643 1.139-.417 1.25-1.082.172.265.432.238.692.215.229-.158 0-.435.166-.62.241-.095.497-.046.757-.029.177.235.042.506.087.758.245.261.461.567.853.642-.112.184.034.478-.027.539-.272.273-.044.743-.454.96-.38.202.073.748-.326.986.433.474-.202.885-.073 1.381.117.451.025.957.025 1.41.2.1.213-.068.316-.106.3-.018.005.344.227.387.049-.033.129-.057.15-.107.277-.657.569-1.32.386-2.057-.192-.772-.24-.78.066-1.749.087-.275-.439-.367-.082-.641.198-.152-.076-.536.252-.685-.133-.233-.169-.52-.393-.702.043-.12.137-.128.247-.135.345-.019.564.128.636.467.061.285-.104.592.089.868.138.197-.102.468.13.668.056.047.056.277.001.319-.382.295-.075.545-.018.844.055.292.089.62-.108.96-.243.418-.07.888.116 1.34.104.255.33.106.434.261-.304.375-.178.8-.171 1.18.121.137.321.106.323.081.036-.337.464-.632.121-1.01.295-.26.502-.682 1.064-.53a4.844 4.844 0 0 1-.208.735c-.084.235-.224.445-.188.71.043.306-.328.484-.23.81.1.336-.186.364-.38.514-.196.15.044.561-.277.732.184.161.376.06.565.086.191-.253.054-.611.37-.873.466-.384.401-.446.692-1.547.105-.4.309-.774.479-1.186.521.38.44.872.242 1.344-.164.396-.251.814-.383 1.2-.123.362-.058.9-.56 1.127-.34.153-.276.67-.648.83-.123-.13-.238-.293-.537-.149l.424.526c-.3.181-.559.146-.776-.14-.388.604-1.206.419-1.613.912-.354-.01-.436-.319-.67-.468l-.138.401c-.153.105-.3-.35-.503.01-.058.104-.43.089-.633.036-.159-.042-.293-.215-.416-.349-.176-.192-.438.004-.626-.14.249-.37-.061-.61-.182-.878-.173-.386-.773-.014-.96-.62-.009-.05.32-.133.2-.306-.434-.635-.22-1.47-.665-2.1-.036-.05.023-.163-.011-.219-.238-.394.612-.781.005-1.17 0-.414-.104-.864.024-1.235.198-.573.194-1.14.2-1.721 0-.07-.024-.14-.041-.235-.221-.037-.275.183-.388.285-.08.07.05.287-.238.321-.006-.943-.157-1.89.566-2.715ZM31.878 76.44c-.009.193-.008.303.1.374.312.192.375-.418.7-.184.078.025.1.08.049.13-.258.259-.646.557-.308.914.39.412-.237.565-.115.866-.355.097-.64.521-1.074.235-.089-.06-.144-.176-.373-.12-.918.724-1.463 1.812-1.883 2.933-.143.385-.395.592-.598.88-1.34-.906-1.34-.906-1.83-.683-.412-.555-.83-1.114-.765-1.87.027-.314-.068-.565-.233-.809.388-.478.065-.938-.107-1.346-.217-.512-.024-1.023-.144-1.519-.015-.063-.1-.108-.172-.178.31-.492.44-1.104 1.035-1.5.501.098 1.093-.157 1.664.126.548.273 1.176.248 1.744.42.525.16.998.492 1.529.765.479-.099.762-.541 1.124-.857.683-.035 1.355-.284 1.773-.653.562-.117 1.181.159 1.71-.26l.456.594c-.926-.196-.877-.088-2.152.5-.787.36-1.268 1.144-2.13 1.242ZM62.335 27.374l.07-.617c.07-.102.109-.082.18.002.116.14.263.236.248.466-.026.413.006.829-.01 1.242-.014.335.009.661.233.92.333.385.172.832.236 1.23-.455.408-.618.875-.726 1.442-.111.578-.09 1.196-.397 1.752-.127.23-.02.588-.02.877-.237.243-.508.442-.557.789h-.47c-.244-.244.008-.582-.16-.85-.176-.077-.389-.124-.383.153.006.297-.523.302-.11.765-.81-.172-1.397-.402-1.955-.286-.33-.042-.123-.361-.412-.484-.801-.34-1.105-.96-1.159-1.782-.064-.997.18-1.929.457-2.865.213-.715.598-1.153 1.41-1.217.736-.059 1.06-.51 1.078-1.27.007-.297 0-.594 0-.88.229-.163.228.13.342.126.3.133.397-.383.726-.178.197.144-.064.43.14.602.048-.029.142-.057.142-.087.006-.328.34-.554.266-.917-.02-.098.178-.087.288-.091.21.122.116.327.127.499.013.183.003.367.003.487.108.197.236.12.413.172ZM76.219 53.438l-.478-.177c-.075-.177-.007-.284.09-.411.177-.228.19-.48-.05-.685-.445-.381-.37-.695.012-1.11.21-.23.38-.62.174-1.031.207-.309.451.182.562.075.27-.262.564-.132.846-.156.261-.022.526-.005.79-.005h.823c.25.325.587.635.747 1.018.116.275.23.59.31.895.094.356-.428.503-.123.883.17.213.078.635.105.963.523.428 1.41.124 1.754.897l-.185.184c.123.186.44.172.507.493.035.17.082.517.342.626l-.268.558c-.047-.028-.136-.053-.14-.088-.018-.147.03-.315-.025-.443s-.201-.217-.306-.322c-.178.063-.097.242-.17.373-.255-.04-.545-.435-.753.13l-.2-.526c-.162.015-.405-.036-.503.06-.496.486-1.102.9-1.358 1.575-.197.516-.606.786-.96 1.15-.342-.222-.326-.494-.174-.685.192-.244.193-.452.052-.761-.206.228-.447.409-.567.65-.135.276-.234.521-.587.5-.227-.263-.024-.59-.129-.857-.292-.008-.167.187-.21.31-.276.195-.552.173-.755-.11-.165-.23-.226-.529-.483-.704-.19-.13-.158-.377-.096-.512.311-.672.428-1.404.641-2.103.121-.398.366-.492.765-.654ZM17.405 76.827c-.226.005-.258-.251-.454-.31l.232-.258a.244.244 0 0 0-.28-.11c-.255.072-.319.41-.628.452-.327-.02-.487-.358-.777-.506-.742-.378-1.162-1.83-.91-2.659.198-.643.19-1.276-.066-1.998.021-.102.206-.001.327-.073.254-.326-.03-.584-.153-.868.08-.318.41-.421.547-.685.335.281.634.425 1.095.257.405-.148.58.323.838.54l-.199.248c.29.24.434.007.562-.154.243-.302.159-.826.704-.944.175-.038.058-.337.072-.515.026-.349.227-.507.524-.566.32.161.004.53.27.688.522-.381.287-1.236 1.033-1.595-.211.738-.453 1.388-.574 2.06-.122.676-.801 1.211-.485 2.085.432-.862.658-1.71.96-2.538a2.16 2.16 0 0 1-.122 1.344c-.373.897-.62 1.847-.926 2.772-.165.494-.326.992-.53 1.47-.054.13-.13.235-.155.39-.13.811-.18.877-.905 1.473Z" clip-rule="evenodd" />
                            </svg></div>
                        <div class="position-absolute start-0 top-0 mt-n80" data-img-height style="--img-height: 100%; width: 230px;">
                            @if(isset($pages_main2_pic))
                            <img class="rounded-4" loading="lazy" src="{{asset('upload/'.$pages_main2_pic)}}" @if($pages_main2_alt_pic)alt="{{$pages_main2_alt_pic}}"@else alt="{{$pages_main2_title}}" @endif>
                            @else
                            <img class="rounded-4" loading="lazy" src="{{asset('site/assets/img/about-us-4-900x990.jpg ')}}" @if($pages_main2_alt_pic)alt="{{$pages_main2_alt_pic}}"@else alt="{{$pages_main2_title}}" @endif>
                            @endif
                        </div>
                        <div class="ms-100" data-img-height style="--img-height: 70%;" data-show="startbox">
                            @if($pages_main2_title)
                            <a class="image-link" href="javascript:void(0)">
                                @if(isset($pages_main1_pic))
                                <img class="rounded-4" loading="lazy" src="{{asset('upload/'.$pages_main1_pic)}}" @if($pages_main1_alt_pic)alt="{{$pages_main1_alt_pic}}"@else alt="{{$pages_main1_title}}" @endif>
                                @else
                                <img class="rounded-4" loading="lazy" src="{{asset('site/assets/img/about-us-4-900x990.jpg ')}}" alt="">
                                @endif
                            </a>
                            @else
                            <div class="alert alert-danger">@lang("common.page_error",["name"=>"main2"])</div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="alert alert-danger">@lang("common.page_error",["name"=>"main1"])</div>
            @endif
        </div>
    </div>
    <div class="pb-130">
        <div class="container">
            <hr class="mt-100 mb-60">
            <div class="row gy-40">
                <div class="col-12 col-sm-6 col-lg-3" data-show="startbox">
                    <div class="h1 m-0 text-accent-2">{{app('setting')['project_success_count']}}</div>
                    <div class="h6 mb-15 ff-custom fw-normal">{{app('setting')['project_success_title']}}</div>
                    <p class="font-size-15 m-0 ps-20">{{app('setting')['project_success_note']}}</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="100">
                    <div class="h1 m-0 text-accent-2">{{app('setting')['project_year_count']}}</div>
                    <div class="h6 mb-15 ff-custom fw-normal">{{app('setting')['project_year_title']}}</div>
                    <p class="font-size-15 m-0 ps-20">{{app('setting')['project_year_note']}}</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="200">
                    <div class="h1 m-0 text-accent-2">{{app('setting')['project_refund_count']}}</div>
                    <div class="h6 mb-15 ff-custom fw-normal">{{app('setting')['project_refund_title']}}</div>
                    <p class="font-size-15 m-0 ps-20">{{app('setting')['project_refund_note']}}</p>
                </div>
                <div class="col-12 col-sm-6 col-lg-3" data-show="startbox" data-show-delay="300">
                    <div class="h1 m-0 text-accent-2">{{app('setting')['project_support_count']}}</div>
                    <div class="h6 mb-15 ff-custom fw-normal">{{app('setting')['project_support_title']}}</div>
                    <p class="font-size-15 m-0 ps-20">{{app('setting')['project_support_note']}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-120 pb-130">
        <div class="container">
            <div class="row mb-90">
                <div class="col-lg-6 offset-lg-3 text-center"><span class="badge bg-light text-dark mb-20" data-show="startbox">نمونه کارها</span>
                    <h3 class="m-0 px-lg-70" data-show="startbox" data-show-delay="100">آخرین پروژه های موفق</h3>
                </div>
            </div><!-- Slider-->
            <div class="swiper mt-90" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:4" data-swiper-loop="true" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Industry-->
                            <div class="industry position-relative rounded-4 overflow-hidden"><a class="industry-link stretched-link" href="#"></a>
                                <div class="industry-image" data-img-height style="--img-height: 114%;"><img loading="lazy" src="{{asset('site/assets/img/industry-1-810x930.jpg ')}}" alt=""></div>
                                <div class="industry-body">
                                    <div class="industry-icon ms-20 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="none">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 4c0 1.657-4.03 3-9 3S1 5.657 1 4m18 0c0-1.657-4.03-3-9-3S1 2.343 1 4m18 0v14c0 1.66-4 3-9 3s-9-1.34-9-3V4m18 7c0 1.66-4 3-9 3s-9-1.34-9-3" />
                                        </svg></div>
                                    <h5 class="industry-title m-0 text-white ff-custom fw-normal">بانک داده</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- Industry-->
                            <div class="industry position-relative rounded-4 overflow-hidden"><a class="industry-link stretched-link" href="#"></a>
                                <div class="industry-image" data-img-height style="--img-height: 114%;"><img loading="lazy" src="{{asset('site/assets/img/industry-2-810x930.jpg ')}}" alt=""></div>
                                <div class="industry-body">
                                    <div class="industry-icon ms-20 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="22" fill="none">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 21V11h6v10M1 8l9-7 9 7v11a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8Z" />
                                        </svg></div>
                                    <h5 class="industry-title m-0 text-white ff-custom fw-normal">توسعه برنامه</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- Industry-->
                            <div class="industry position-relative rounded-4 overflow-hidden"><a class="industry-link stretched-link" href="#"></a>
                                <div class="industry-image" data-img-height style="--img-height: 114%;"><img loading="lazy" src="{{asset('site/assets/img/industry-3-810x930.jpg ')}}" alt=""></div>
                                <div class="industry-body">
                                    <div class="industry-icon ms-20 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M12 1v2m0 18v2M4.22 4.22l1.42 1.42m12.72 12.72 1.42 1.42M1 12h2m18 0h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42M17 12a5 5 0 1 1-10 0 5 5 0 0 1 10 0Z" />
                                        </svg></div>
                                    <h5 class="industry-title m-0 text-white ff-custom fw-normal">برنامه نویسی موبایل</h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <!-- Industry-->
                            <div class="industry position-relative rounded-4 overflow-hidden"><a class="industry-link stretched-link" href="#"></a>
                                <div class="industry-image" data-img-height style="--img-height: 114%;"><img loading="lazy" src="{{asset('site/assets/img/industry-4-810x930.jpg ')}}" alt=""></div>
                                <div class="industry-body">
                                    <div class="industry-icon ms-20 text-white"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="none">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 19v-7m0-4V1m8 18v-9m0-4V1m8 18v-5m0-4V1M1 12h6m2-6h6m2 8h6" />
                                        </svg></div>
                                    <h5 class="industry-title m-0 text-white ff-custom fw-normal">مدیریت پروژه</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-70 justify-content-center">
                    <div class="swiper-button-prev swiper-button-position-2 swiper-button-gray shadow"><svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                        </svg></div>
                    <div class="swiper-button-next swiper-button-position-2 swiper-button-gray shadow"><svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-linear-gradient pt-120 pb-130">
        <div class="container">
            <div class="justify-content-center d-flex align-items-center" data-show="startbox">
                <h3 class="m-0">دیدگاه مشتریان</h3>
                <div class="d-inline-flex flex-column me-20"><svg class="d-block" xmlns="http://www.w3.org/2000/svg" width="84" height="15" fill="none">
                        <path fill="#FFBB38" d="m8.022 0 2.48 4.937 5.543.796-4.011 3.841L12.98 15l-4.958-2.563L3.065 15l.946-5.426L0 5.734l5.544-.797L8.022 0ZM25.01 0l2.48 4.937 5.543.796-4.011 3.841.947 5.426-4.958-2.563L20.053 15 21 9.574l-4.012-3.84 5.544-.797L25.01 0ZM42 0l2.479 4.937 5.544.796-4.012 3.841.947 5.426L42 12.437 37.042 15l.947-5.426-4.011-3.84 5.543-.797L42 0ZM58.988 0l2.48 4.937 5.543.796L63 9.574 63.945 15l-4.958-2.563L54.03 15l.947-5.426-4.011-3.84 5.543-.797L58.99 0ZM75.978 0l2.479 4.937L84 5.733l-4.011 3.841.946 5.426-4.957-2.563L71.02 15l.946-5.426-4.01-3.84 5.543-.797L75.978 0Z" />
                    </svg><span class="fw-medium font-size-13">امتیازات امروز</span></div>
            </div><!-- Slider-->
            <div class="swiper mt-90" data-swiper-slides="1" data-swiper-breakpoints="828:2, 1024:3" data-swiper-gap="30" data-swiper-grabcursor="true" data-show="startbox" data-show-delay="200">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-auto">
                            <!-- Feedback-->
                            <div class="feedback bg-white rounded-4 h-100 shadow">
                                <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                        <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                    </svg></div>
                                <div class="feedback-header d-flex align-items-center mb-35">
                                    <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="{{asset('site/assets/img/root/avatar-1-200x200.jpg ')}}" alt="" height="64" width="64"></div>
                                    <div class="flex-grow-1 me-20">
                                        <h6 class="feedback-author mb-5">علی حسینی</h6>
                                        <p class="feedback-position text-gray-dark font-size-14 m-0">کارشناس بازاریابی</p>
                                    </div>
                                </div>
                                <p class="feedback-text fw-medium text-dark m-0">“ زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد. ”</p>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto">
                            <!-- Feedback-->
                            <div class="feedback bg-white rounded-4 h-100 shadow">
                                <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                        <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                    </svg></div>
                                <div class="feedback-header d-flex align-items-center mb-35">
                                    <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="{{asset('site/assets/img/root/avatar-2-200x200.jpg ')}}" alt="" height="64" width="64"></div>
                                    <div class="flex-grow-1 me-20">
                                        <h6 class="feedback-author mb-5">نیلوفر علیزاده</h6>
                                        <p class="feedback-position text-gray-dark font-size-14 m-0">مدیر عامل</p>
                                    </div>
                                </div>
                                <p class="feedback-text fw-medium text-dark m-0">“ لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است 🔥 ”</p>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto">
                            <!-- Feedback-->
                            <div class="feedback bg-white rounded-4 h-100 shadow">
                                <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                        <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                    </svg></div>
                                <div class="feedback-header d-flex align-items-center mb-35">
                                    <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="{{asset('site/assets/img/root/avatar-3-200x200.jpg ')}}" alt="" height="64" width="64"></div>
                                    <div class="flex-grow-1 me-20">
                                        <h6 class="feedback-author mb-5">مهرداد افخمی</h6>
                                        <p class="feedback-position text-gray-dark font-size-14 m-0">برنامه نویس</p>
                                    </div>
                                </div>
                                <p class="feedback-text fw-medium text-dark m-0">“ طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.”</p>
                            </div>
                        </div>
                        <div class="swiper-slide h-auto">
                            <!-- Feedback-->
                            <div class="feedback bg-white rounded-4 h-100 shadow">
                                <div class="feedback-stars lh-1 mb-30"><svg xmlns="http://www.w3.org/2000/svg" width="90" height="16" fill="none">
                                        <path fill="#FFBB38" d="m8.595 0 2.656 5.266 5.94.85-4.298 4.096L13.907 16l-5.312-2.734L3.283 16l1.015-5.788L0 6.116l5.94-.85L8.594 0ZM26.798 0l2.656 5.266 5.94.85-4.299 4.096L32.11 16l-5.312-2.734L21.486 16l1.014-5.788-4.298-4.096 5.94-.85L26.798 0ZM45 0l2.656 5.266 5.94.85-4.298 4.096L50.312 16 45 13.266 39.688 16l1.014-5.788-4.298-4.096 5.94-.85L45 0ZM63.202 0l2.656 5.266 5.94.85-4.298 4.096L68.514 16l-5.312-2.734L57.89 16l1.014-5.788-4.298-4.096 5.94-.85L63.202 0ZM81.404 0l2.656 5.266 5.94.85-4.298 4.096L86.716 16l-5.312-2.734L76.092 16l1.014-5.788-4.297-4.096 5.94-.85L81.403 0Z" />
                                    </svg></div>
                                <div class="feedback-header d-flex align-items-center mb-35">
                                    <div class="flex-shrink-0"><img class="rounded-circle" loading="lazy" src="{{asset('site/assets/img/root/avatar-1-200x200.jpg ')}}" alt="" height="64" width="64"></div>
                                    <div class="flex-grow-1 me-20">
                                        <h6 class="feedback-author mb-5">علی حسینی</h6>
                                        <p class="feedback-position text-gray-dark font-size-14 m-0">کارشناس ارشد بازاریابی</p>
                                    </div>
                                </div>
                                <p class="feedback-text fw-medium text-dark m-0">“ زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.  ”</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex mt-70 justify-content-center">
                    <div class="swiper-button-prev swiper-button-position-2 swiper-button-white shadow"><svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m3.96 6.15 5.08-4.515L7.91.365.445 7l7.465 6.635 1.13-1.27L3.96 7.85h15.765v-1.7H3.96Z" clip-rule="evenodd" />
                        </svg></div>
                    <div class="swiper-button-next swiper-button-position-2 swiper-button-white shadow"><svg xmlns="http://www.w3.org/2000/svg" class="img-svg" width="20" height="14" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="m16.21 6.15-5.08-4.515 1.13-1.27L19.725 7l-7.465 6.635-1.13-1.27 5.08-4.515H.445v-1.7H16.21Z" clip-rule="evenodd" />
                        </svg></div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-120 pb-130 overflow-hidden footerPrev">
        <div class="container">
            @if(isset($pages_customermain_title))
            <div class="row align-items-center gy-90">
                <div class="col-lg-6 shape-parent">
                    <!-- Shape-->
                    <div class="shape justify-content-start mt-n40 ms-n45 text-dark" data-jarallax-element="40"><svg xmlns="http://www.w3.org/2000/svg" width="86" height="85" fill="none">
                            <path fill="currentColor" fill-rule="evenodd" d="M80.607 25.302h-.731c-.226-.173-.001-.45-.172-.65l-.504-.027c-.167.343-.285.84-.879.676-.227-.053-.046-.348-.21-.422-.347-.114-.584.077-.907.254-.42-.59-1.186-.73-1.697-1.258-.1-.406.078-.86-.237-1.256-.098-.124-.065-.51.054-.622.365-.345-.077-.698.04-.933.174-.349.036-.625.104-.894-.314-.13-.425.038-.63.253-.04-.83-.174-1.579.258-2.307l.6-.066c-.1-.364.243-.63.229-.99-.022-.594.163-1.13.465-1.615.253-.406.211-.834.218-1.28l1.073-.983.152.127c.157-.13.313-.354.512-.404.274-.068.46-.357.808-.258.244.07.524.018.787.012.22-.006.457.02.657-.05.26-.091.482-.348.74-.382.48-.064.976-.018 1.505-.018.265.504.846.624 1.31.83.569.254.838.693 1.017 1.168.181.485-.133.986-.361 1.41-.293.542-.673 1.05-1.197 1.406.381.613.73 1.2.226 1.884-.145 1.987-1.385 3.497-2.272 5.156-.235.44-.811.645-.958 1.239ZM6.124 63.859l.2-.241c-.055-.176-.234-.095-.36-.16-.208-.154.062-.442-.176-.629-.076.008-.218-.02-.272.037-.69.724-.816.423-1.428-.124-.073-.065-.11-.066-.212-.075-1.41-.123-1.957-.674-2.116-2.064-.183-.023-.24.272-.5.158-.138-.456-.717-.744-.589-1.394.027-.136-.259-.333-.4-.501.542-.452-.504-1.08.147-1.519-.014-.29-.342-.342-.404-.593-.072-.29.155-.465.23-.698.258-.813.815-1.467 1.217-2.2.34-.62 1.097-.881 1.679-1.217.313.061.413.336.628.463l.202-.513.382.556c.306-.2.094-.472.254-.687h1.54l.422.422c.538-.521.997-.108 1.481.198.64-.648 1.292.338 1.951-.031.283.312.71.472.642.985-.007.056.055.173.094.177.765.078.695.83.992 1.26-.188.468-.538.834-.912 1.182-.082.076-.16.227-.24.228-1.004.004-1.045.951-1.488 1.5-.384.476-.527 1.072-.688 1.632a6.994 6.994 0 0 0-.282 1.705c-.02.637.015 1.427-.876 1.687-.158.046-.277.247-.401.388-.213.24-.446.2-.717.068ZM28.791 48.175c.375-.162.764-.302 1.22-.281.863.038 1.732.048 2.594-.004.43-.026.873.038 1.24.134.292.076.487-.355.722-.03.192.266.498.06.729.145.26.096.48.338.823.165.154-.065-.1-.417.25-.389.683.047.284.933.853 1.1.04-.117.087-.247.136-.386.179-.035.294.15.302.22.067.57.38 1.09.316 1.682-.024.213-.056.399-.158.614-.3.635-.575 1.322-.501 2.037.045.44-.318.716-.269 1.153.043.373.203.828-.204 1.146 0 .677-.04 1.357.01 2.03.066.892-.457 1.422-1.069 1.907-.09.071-.286.01-.422.01-.17-.374-.371-.708-.355-1.285-.207.405-.312.65-.527.839-.294.258-.55.336-.86.05-.129-.12-.215-.304-.446-.285-.649.055-1.11-.301-1.486-.76-.36-.437-.916-.683-1.003-1.399-.064-.516-.52-.976-.753-1.482-.628-1.358-1.262-2.714-1.826-4.097-.273-.667.01-1.34.268-1.973.119-.29.271-.564.416-.86ZM22.87 33.667c-.033-.41.06-.85-.114-1.041-.289-.314.338-.508-.03-.75-.578.446-.551 1.28-1.089 1.752-.38-.165-.752-.343-.935-.614-.308-.053-.35.146-.545.231-.58-.324-1.286-.583-1.708-1.165-.535-.738-1.039-1.526-1.035-2.503.002-.452.038-.907-.006-1.355-.147-1.477.306-2.843.75-4.21.185-.571.492-1.088.854-1.553.257-.158.523-.053.846-.092l.467.467c.316.04.37-.405.669-.46.183-.032.253.125.368.22l.256-.233.139.402c.052.074.092.052.161-.03.507-.603 1.194-.633 1.918-.574.461.296.731.811 1.393.971.682.165.961 1.277.647 1.96-.257.559-.57 1.073-.122 1.704.125.175.104.552.004.769-.277.594-.22 1.251-.43 1.854-.196.561-.31 1.152-.53 1.702-.067.167-.147.312-.157.5-.037.7-.447 1.247-.786 1.818-.216.365-.592.214-.985.23ZM50.532 50.867l.24.205.16-.439c.703.3 1.275-.207 1.916-.326.254-.048 1.214-.208 1.462-.185.07.007.176.064.203.037.301-.309.693-.158 1.036-.236.295-.068.555.397.834.02.56.463 1.216.132 1.823.212.37.049.75.01 1.118.01l.326.325c-.083.15-.3.238-.205.485.318.22.713-.004 1.054.139.315.277.478.572.109.93-.08.078-.206.146-.232.241-.244.883-1.007.922-1.7 1.035-.712.114-1.323.44-1.877.687-.293.772.149 1.372.162 2.026.013.61-.145 1.24.199 1.834.081.142.137.478-.076.621-.352.24-.316.776-.722.925-.182.067-.401.022-.615-.139-.204-.153-.027-.477-.32-.524-.23-.036-.34.146-.442.284-.171.231-.42.214-.607.152-.257-.085-.478-.277-.715-.423-.337.403-.592-.064-.762-.169-.236-.144-.51-.26-.723-.446-.226-.197-.426-.424-.642-.633a.833.833 0 0 1-.26-.462c-.03-.143-.179-.189-.044-.418.144-.247-.303-.054-.398-.317-.381-1.048-1.051-1.962-1.473-2.998a.843.843 0 0 1-.035-.616c.221-.735.55-1.395 1.206-1.837ZM54.604 84.51c-.975-.056-.975-.056-1.134-1.114-.564.526-.564.526-1.137.676-.161-.428-.384-.845-.984-.705-.082.02-.205-.057-.282-.121-.45-.381-.624-.994-1.119-1.34.024-.732-.473-1.449-.203-2.155.286-.75.358-1.557.768-2.28.502-.884 1.043-1.717 1.813-2.458.416.041.858.02 1.096-.462l.261.232c.735-.738.922-1.884 1.828-2.464.357-.171.568.287.825.194.337-.122.557.307.871.104.273-.177.557-.074.808-.05.262.344-.377.498-.104.81.202.042.307-.32.58-.106.159.745-.103 1.419-.386 2.133-.307.774-.735 1.539-.697 2.418.014.316-.204.524-.32.772-.345.729-.587 1.49-.864 2.24-.347.944-.451 1.976-1.014 2.857-.179.279-.387.515-.606.819ZM47.369 22.139c.195-.227-.03-.502.2-.66.324-.053.572.193.55.403-.085.78.432 1.132.934 1.524.148.114.268.262.401.396.207.461-.109.823-.233 1.222-.168.118-.353.046-.532.047-.18-.096 0-.493-.387-.433-.254.088-.35.462-.352.574a3.744 3.744 0 0 1-.487 1.842c.326.704-.208 1.307-.234 1.974-.027.706-.382 1.275-.852 1.79-.199.217-.415.087-.62.168.015-.387-.463-.509-.214-1.146-.407.444-.39.913-.765.881-.602-.05-1.297-.03-1.765-.33-.452-.291-1.258-.416-1.203-1.256a.255.255 0 0 0-.09-.184c-.863-.67-.928-1.721-1.252-2.64-.26-.737-.481-1.485-.477-2.291.001-.45.464-.787.215-1.227.252-.4.719-.59.792-1.172.917.755 1.82-.173 2.694.093.2-.099.12-.283.206-.41.151-.144.353-.007.347-.005.377-.135.166-.44.416-.482.122.072.084.193.092.312.23.265.566.014.83.156l.396.397c.386-.247.455-.685.655-1.097.273.145.41.336.382.662-.03.333-.05.681.353.892ZM53.912.885c.137.215.056.397.23.471.233-.243.007-.575.14-.86l.398-.04v1.088c.209-.643 1.139-.417 1.25-1.082.172.265.432.238.692.215.229-.158 0-.435.166-.62.241-.095.497-.046.757-.029.177.235.042.506.087.758.245.261.461.567.853.642-.112.184.034.478-.027.539-.272.273-.044.743-.454.96-.38.202.073.748-.326.986.433.474-.202.885-.073 1.381.117.451.025.957.025 1.41.2.1.213-.068.316-.106.3-.018.005.344.227.387.049-.033.129-.057.15-.107.277-.657.569-1.32.386-2.057-.192-.772-.24-.78.066-1.749.087-.275-.439-.367-.082-.641.198-.152-.076-.536.252-.685-.133-.233-.169-.52-.393-.702.043-.12.137-.128.247-.135.345-.019.564.128.636.467.061.285-.104.592.089.868.138.197-.102.468.13.668.056.047.056.277.001.319-.382.295-.075.545-.018.844.055.292.089.62-.108.96-.243.418-.07.888.116 1.34.104.255.33.106.434.261-.304.375-.178.8-.171 1.18.121.137.321.106.323.081.036-.337.464-.632.121-1.01.295-.26.502-.682 1.064-.53a4.844 4.844 0 0 1-.208.735c-.084.235-.224.445-.188.71.043.306-.328.484-.23.81.1.336-.186.364-.38.514-.196.15.044.561-.277.732.184.161.376.06.565.086.191-.253.054-.611.37-.873.466-.384.401-.446.692-1.547.105-.4.309-.774.479-1.186.521.38.44.872.242 1.344-.164.396-.251.814-.383 1.2-.123.362-.058.9-.56 1.127-.34.153-.276.67-.648.83-.123-.13-.238-.293-.537-.149l.424.526c-.3.181-.559.146-.776-.14-.388.604-1.206.419-1.613.912-.354-.01-.436-.319-.67-.468l-.138.401c-.153.105-.3-.35-.503.01-.058.104-.43.089-.633.036-.159-.042-.293-.215-.416-.349-.176-.192-.438.004-.626-.14.249-.37-.061-.61-.182-.878-.173-.386-.773-.014-.96-.62-.009-.05.32-.133.2-.306-.434-.635-.22-1.47-.665-2.1-.036-.05.023-.163-.011-.219-.238-.394.612-.781.005-1.17 0-.414-.104-.864.024-1.235.198-.573.194-1.14.2-1.721 0-.07-.024-.14-.041-.235-.221-.037-.275.183-.388.285-.08.07.05.287-.238.321-.006-.943-.157-1.89.566-2.715ZM31.878 76.44c-.009.193-.008.303.1.374.312.192.375-.418.7-.184.078.025.1.08.049.13-.258.259-.646.557-.308.914.39.412-.237.565-.115.866-.355.097-.64.521-1.074.235-.089-.06-.144-.176-.373-.12-.918.724-1.463 1.812-1.883 2.933-.143.385-.395.592-.598.88-1.34-.906-1.34-.906-1.83-.683-.412-.555-.83-1.114-.765-1.87.027-.314-.068-.565-.233-.809.388-.478.065-.938-.107-1.346-.217-.512-.024-1.023-.144-1.519-.015-.063-.1-.108-.172-.178.31-.492.44-1.104 1.035-1.5.501.098 1.093-.157 1.664.126.548.273 1.176.248 1.744.42.525.16.998.492 1.529.765.479-.099.762-.541 1.124-.857.683-.035 1.355-.284 1.773-.653.562-.117 1.181.159 1.71-.26l.456.594c-.926-.196-.877-.088-2.152.5-.787.36-1.268 1.144-2.13 1.242ZM62.335 27.374l.07-.617c.07-.102.109-.082.18.002.116.14.263.236.248.466-.026.413.006.829-.01 1.242-.014.335.009.661.233.92.333.385.172.832.236 1.23-.455.408-.618.875-.726 1.442-.111.578-.09 1.196-.397 1.752-.127.23-.02.588-.02.877-.237.243-.508.442-.557.789h-.47c-.244-.244.008-.582-.16-.85-.176-.077-.389-.124-.383.153.006.297-.523.302-.11.765-.81-.172-1.397-.402-1.955-.286-.33-.042-.123-.361-.412-.484-.801-.34-1.105-.96-1.159-1.782-.064-.997.18-1.929.457-2.865.213-.715.598-1.153 1.41-1.217.736-.059 1.06-.51 1.078-1.27.007-.297 0-.594 0-.88.229-.163.228.13.342.126.3.133.397-.383.726-.178.197.144-.064.43.14.602.048-.029.142-.057.142-.087.006-.328.34-.554.266-.917-.02-.098.178-.087.288-.091.21.122.116.327.127.499.013.183.003.367.003.487.108.197.236.12.413.172ZM76.219 53.438l-.478-.177c-.075-.177-.007-.284.09-.411.177-.228.19-.48-.05-.685-.445-.381-.37-.695.012-1.11.21-.23.38-.62.174-1.031.207-.309.451.182.562.075.27-.262.564-.132.846-.156.261-.022.526-.005.79-.005h.823c.25.325.587.635.747 1.018.116.275.23.59.31.895.094.356-.428.503-.123.883.17.213.078.635.105.963.523.428 1.41.124 1.754.897l-.185.184c.123.186.44.172.507.493.035.17.082.517.342.626l-.268.558c-.047-.028-.136-.053-.14-.088-.018-.147.03-.315-.025-.443s-.201-.217-.306-.322c-.178.063-.097.242-.17.373-.255-.04-.545-.435-.753.13l-.2-.526c-.162.015-.405-.036-.503.06-.496.486-1.102.9-1.358 1.575-.197.516-.606.786-.96 1.15-.342-.222-.326-.494-.174-.685.192-.244.193-.452.052-.761-.206.228-.447.409-.567.65-.135.276-.234.521-.587.5-.227-.263-.024-.59-.129-.857-.292-.008-.167.187-.21.31-.276.195-.552.173-.755-.11-.165-.23-.226-.529-.483-.704-.19-.13-.158-.377-.096-.512.311-.672.428-1.404.641-2.103.121-.398.366-.492.765-.654ZM17.405 76.827c-.226.005-.258-.251-.454-.31l.232-.258a.244.244 0 0 0-.28-.11c-.255.072-.319.41-.628.452-.327-.02-.487-.358-.777-.506-.742-.378-1.162-1.83-.91-2.659.198-.643.19-1.276-.066-1.998.021-.102.206-.001.327-.073.254-.326-.03-.584-.153-.868.08-.318.41-.421.547-.685.335.281.634.425 1.095.257.405-.148.58.323.838.54l-.199.248c.29.24.434.007.562-.154.243-.302.159-.826.704-.944.175-.038.058-.337.072-.515.026-.349.227-.507.524-.566.32.161.004.53.27.688.522-.381.287-1.236 1.033-1.595-.211.738-.453 1.388-.574 2.06-.122.676-.801 1.211-.485 2.085.432-.862.658-1.71.96-2.538a2.16 2.16 0 0 1-.122 1.344c-.373.897-.62 1.847-.926 2.772-.165.494-.326.992-.53 1.47-.054.13-.13.235-.155.39-.13.811-.18.877-.905 1.473Z" clip-rule="evenodd" />
                        </svg></div>
                    <div class="gallery-wrapper ms-lg-70" data-show="startbox">
                        <!-- Gallery item-->
                        <a class="gallery-item rounded-4 overflow-hidden" href="javascript:void(0)" style="--img-height: 110%;" data-img-height>
                            @if(isset($pages_customermain_pic))
                            <img loading="lazy" src="{{asset('upload/'.$pages_customermain_pic)}}" @if($pages_customermain_alt_pic)alt="{{$pages_customermain_alt_pic}}"@else alt="{{$pages_customermain_title}}" @endif>
                            @else
                            <img loading="lazy" src="{{asset('site/assets/img/home-1-900x990.jpg ')}}" @if($pages_customermain_alt_pic)alt="{{$pages_customermain_alt_pic}}"@else alt="{{$pages_customermain_title}}" @endif>
                            @endif
                        </a>
                    </div>
                </div>
                <div class="col-lg-6"><span class="badge bg-light text-dark mb-20" data-show="startbox">مشتریان</span>
                    <h3 class="mb-30" data-show="startbox" data-show-delay="100">{{$pages_customermain_title}}</h3>
                    <p class="mb-45 ms-lg-70" data-show="startbox" data-show-delay="200">{{$pages_customermain_short_note}}</p>
                    <div data-show="startbox" data-show-delay="300">
                        <!-- Button--><a class="btn btn-accent-1 btn-link btn-clean" href="/pages/customermain" target="_self">بیشتر بدانید</a>
                    </div>
                </div>
            </div>
            @else
            <div class="alert alert-danger">@lang("common.page_error",["name"=>"customermain"])</div>
            @endif
        </div>
    </div><!-- Call to action-->
    <div class="position-relative">
        @if($pages_advicemain_title)
        <div class="half-section-block container position-absolute top-50 start-0 end-0" data-prev-id=".footerPrev" data-next-id=".footerNext">
            <div class="shape-parent">
                <div class="pt-120 pb-130 px-30 position-relative rounded-4 overflow-hidden z-index-1">
                    <div class="background">
                        <div class="background-image jarallax" data-jarallax data-speed="0.8"><img class="jarallax-img" loading="lazy" src="{{asset('site/assets/img/root/call-to-action-1920x1080.jpg ')}}" alt=""></div>
                        <div class="background-color" style="--background-color: #481FA0; opacity: .9;"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3 text-center">
                            <h3 class="mb-25 text-white" data-show="startbox">{{$pages_advicemain_title}}</h3>
                            <p class="mb-50 text-white" data-show="startbox" data-show-delay="100">{{$pages_advicemain_short_note}}</p>
                            <div data-show="startbox" data-show-delay="200">
                                <!-- Button--><a class="btn btn-accent-1" href="{{route('contact')}}" target="_self">تماس با ما <svg class="me-15 align-self-center" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 15 15">
                                        <path fill="currentColor" d="M15 11.23v2.259a1.501 1.501 0 0 1-1.026 1.432c-.199.067-.41.092-.619.073a14.944 14.944 0 0 1-6.508-2.31A14.692 14.692 0 0 1 2.32 8.166 14.877 14.877 0 0 1 .006 1.641 1.503 1.503 0 0 1 .9.13 1.51 1.51 0 0 1 1.507 0H3.77a1.51 1.51 0 0 1 1.508 1.295c.095.722.273 1.432.528 2.115a1.503 1.503 0 0 1-.34 1.588l-.957.956a12.055 12.055 0 0 0 4.525 4.516l.958-.956a1.51 1.51 0 0 1 1.591-.338 9.7 9.7 0 0 0 2.12.527 1.509 1.509 0 0 1 1.296 1.527Z" />
                                    </svg></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="alert alert-danger">@lang("common.page_error",["name"=>"advicemain"])</div>
        @endif
    </div>
</div>
@endsection
@section('footer')
    <script type="text/javascript" src="{{asset('site/assets/js/pages/page-01.js')}}"></script>
@endsection
