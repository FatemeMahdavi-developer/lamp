@props(['name'=>'','title'=>'','placeholder'=>'','value'=>''])
<div class="col-12 mb-10">
    <textarea name="{{$name}}" class="form-control" placeholder="{{$placeholder}}">{{$value}}</textarea>
    @error($name) <span class="text text-danger">{{$errors->first($name)}}</span> @enderror
</div>
