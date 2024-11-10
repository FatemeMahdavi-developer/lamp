@props(['title'=>'','name'=>'','placeholder'=>'','value'=>'','class'=>''])
<div class="form-group {{$class}}">
    <label for="{{$name}}">{{$title}}</label>
    <textarea name="{{$name}}" id="{{$name}}" class="form-control summernote">{{$value}}</textarea>
    @error($name)<span class="text text-danger">{{$errors->first($name)}}</span>@enderror

</div>


<script>
    ClassicEditor.create(document.querySelector("#{{$name}}"), {
        language: {
            ui: 'fa',
            content: 'fa'
        },
        toolbar: ['heading','bold','italic','link','bulletedList','numberedList','blockQuote','codeBlock'],
    })
    .then(editor => {
        editorInstance = editor;
    })
</script>
