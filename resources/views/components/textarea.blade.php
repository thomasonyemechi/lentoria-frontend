@props(['id','name'])


<textarea {{ $attributes }} class="form-control" id="{{ $id }}"></textarea>



<script>
    $(function() {
        ClassicEditor
            .create(document.querySelector('#{{ $id }}'))
            .then(editor => {
                window.editor = editor;
                {{ $name }} = editor;
            })
            .catch((err) => {
                console.error(err);
            });
    })
</script>
