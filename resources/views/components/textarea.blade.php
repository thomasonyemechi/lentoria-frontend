<style>
    .ck-editor__editable_inline {
        min-height: 80px;
    }
</style>

@props(['id', 'name', 'type' => 0])

<textarea class="form-control" id="{{ $id }}" type="{{ $type }}" name="{{ $name }}" rows="3" style="resize: none"></textarea>

<script>
    $(function() {
        if (@js($type) == 0) {
            ClassicEditor
                .create(document.querySelector('#{{ $id }}'), {
                    toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList',
                        'blockQuote'
                    ],
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            },
                            {
                                model: 'heading3',
                                view: 'h3',
                                title: 'Heading 3',
                                class: 'ck-heading_heading3'
                            }
                        ]
                    }
                }).then(editor => {
                    window.editor = editor;
                    {{ $name }} = editor;
                }).catch(error => {
                    console.log(error);
                });
        } else if (@js($type) == 1) {
            ClassicEditor
                .create(document.querySelector('#{{ $id }}'), {
                    toolbar: ['bold', 'italic'],
                    heading: {
                        options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        }]
                    }
                }).then(editor => {
                    window.editor = editor;
                    {{ $name }} = editor;
                }).catch(error => {
                    console.log(error);
                });
        }


    })
</script>
