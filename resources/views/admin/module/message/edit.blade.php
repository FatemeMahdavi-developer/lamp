@extends("admin.layout.base")
@php $module_name=" ویرایش ". $module_title @endphp
@section("title")
    {{$module_name}}
@endsection
@section("content")
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{$module_name}}</h4>
                        </div>
                        <div class="card-body">
                            <div style="padding: 15px;">
                                <table class="table text-center contact_table">
                                    <tr>
                                        <td width="150px"> نام و نام خانوادگی:</td>
                                        <td>{{$message['name']}}</td>
                                    </tr>
                                    <tr>
                                        <td>شماره موبایل:</td>
                                        <td>{{$message['mobile']}}</td>
                                    </tr>
                                    <tr>
                                        <td>ایمیل:</td>
                                        <td>{{$message['email']}}</td>
                                    </tr>
                                    <tr>
                                        <td>واحد مربوطه:</td>
                                        <td>{{$message['catid']}}</td>
                                    </tr>
                                    <tr>
                                        <td>متن پیام:</td>
                                        <td>{{$message['note']}}</td>
                                    </tr>
                                </table>
                            </div>
                            @component($prefix_component.".form",['action'=>route('admin.message.update',['message'=>$message['id']]),'method'=>'post'])
                                @slot("content")
                                    @method("put")
                                    @component($prefix_component."input",['name'=>'answer_title','title'=>'عنوان ایمیل','value'=>$message['answer_title'] ?? old('answer_title'),'class'=>'w-50'])@endcomponent
                                    @component($prefix_component."textarea",['name'=>'answer_note','class'=>'my-2 ','title'=>'متن ایمیل','value'=>$message['answer_note'] ?? old('answer_note')])@endcomponent
                                    @component($prefix_component."button",['title'=>'ارسال'])@endcomponent
                                @endslot
                            @endcomponent
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

