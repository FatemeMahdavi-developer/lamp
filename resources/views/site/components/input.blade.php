@props(['name'=>'','title'=>'','col_class'=>'','placeholder'=>'','value'=>'','class'=>'','autocomplete'=>'','type'=>'text'])
<div @if($col_class) class="{{$col_class}}" @else class="col-12 col-md-6" @endif>
    <input name="{{$name}}" class="form-control {{$class}}" type="{{$type}}" @if($placeholder) placeholder="{{$placeholder}}" @endif @if($autocomplete) autocomplete="off" @endif value="{{$value}}">
    @error($name)<span class="text text-danger">{{$errors->first($name)}}</span>@enderror
</div>
