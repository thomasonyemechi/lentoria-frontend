<style>
    .ck-editor__editable_inline {
        min-height: 80px;
    }

    .ck-content {
        color: black;
    }
</style>

@props(['id', 'name', 'type' => 0])

<textarea class="form-control" id="{{ $id }}" type="{{ $type }}" name="{{ $name }}" rows="3"
          style="resize: none"></textarea>
@if ($type == 0)
    <script>
        const watchdog{{$id}} = new CKSource.EditorWatchdog();

        window.watchdog = watchdog{{$id}};

        watchdog{{$id}}.setCreator((element, config) => {
            return CKSource.Editor
                .create(element, config)
                .then(editor => {
                    {{ $name }} = editor;
                    return editor;
                });
        });

        watchdog{{$id}}.setDestructor(editor => {
            return editor.destroy();
        });

        watchdog{{$id}}.on('error', handleError);

        function handleError(error) {
            console.error(error);
        }

        watchdog{{$id}}.create(document.querySelector('#{{$id}}'), {
            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor', '|', 'undo', 'redo'
            ],
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
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
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
        })
            .catch(handleError);
    </script>
@elseif ($type == 1)
    <script>
        const watchdog{{$id}} = new CKSource.EditorWatchdog();

        window.watchdog = watchdog{{$id}};

        watchdog{{$id}}.setCreator((element, config) => {
            return CKSource.Editor
                .create(element, config)
                .then(editor => {
                    {{ $name }} = editor;
                    return editor;
                });
        });

        watchdog{{$id}}.setDestructor(editor => {
            return editor.destroy();
        });

        watchdog{{$id}}.on('error', handleError);

        function handleError(error) {
            console.error('Oops, something went wrong!');
            console.error(error);
        }

        watchdog{{$id}}.create(document.querySelector('#{{$id}}'), {
            toolbar: ['bold', 'italic'],
            heading: {
                options: [{
                    model: 'paragraph',
                    title: 'Paragraph',
                    class: 'ck-heading_paragraph'
                }]
            },
        }).catch(handleError);
    </script>
@elseif($type == 2)
    <script>
        const watchdog{{$id}} = new CKSource.EditorWatchdog();

        window.watchdog = watchdog{{$id}};

        watchdog{{$id}}.setCreator((element, config) => {
            return CKSource.Editor
                .create(element, config)
                .then(editor => {
                    {{ $name }} = editor;
                    return editor;
                });
        });

        watchdog{{$id}}.setDestructor(editor => {
            return editor.destroy();
        });

        watchdog{{$id}}.on('error', handleError);

        function handleError(error) {
            console.error(error);
        }

        watchdog{{$id}}.create(document.querySelector('#{{$id}}'), {
            toolbar: {
                items: [
                    'findAndReplace', 'selectAll', '|', 'heading', '|', 'bold', 'italic', 'strikethrough', 'underline', 'removeFormat', '|', 'bulletedList', 'numberedList', '|', 'outdent', 'indent', '|', 'undo', 'redo', '-', 'fontSize', 'fontFamily', 'fontColor','fontBackgroundColor', 'highlight', '|','alignment', '|', 'link', 'blockQuote', 'insertTable',
                ],
                shouldNotGroupWhenFull: false
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
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
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
        }).catch(handleError);
    </script>

@elseif($type == 3)
    <script>
        const watchdog{{$id}} = new CKSource.EditorWatchdog();

        window.watchdog = watchdog{{$id}};

        watchdog{{$id}}.setCreator((element, config) => {
            return CKSource.Editor
                .create(element, config)
                .then(editor => {
                    {{ $name }} = editor;
                    return editor;
                });
        });

        watchdog{{$id}}.setDestructor(editor => {
            return editor.destroy();
        });

        watchdog{{$id}}.on('error', handleError);

        function handleError(error) {
            console.error('Oops, something went wrong!');
            console.error(error);
        }

        watchdog{{$id}}.create(document.querySelector('#{{$id}}'), {
            toolbar: {
                items: [
                    'exportPDF', 'exportWord', '|',
                    'findAndReplace', 'selectAll', '|',
                    'heading', '|',
                    'bold', 'italic', 'strikethrough', 'underline',
                    'removeFormat', '|',
                    'bulletedList', 'numberedList', '|',
                    'outdent', 'indent', '|',
                    'undo', 'redo',
                    '-',
                    'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                    'alignment', '|',
                    'link', 'blockQuote', 'insertTable',
                ],
                shouldNotGroupWhenFull: false
            },
            list: {
                properties: {
                    styles: true,
                    startIndex: true,
                    reversed: true
                }
            },
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
                    },
                    {
                        model: 'heading4',
                        view: 'h4',
                        title: 'Heading 4',
                        class: 'ck-heading_heading4'
                    },
                    {
                        model: 'heading5',
                        view: 'h5',
                        title: 'Heading 5',
                        class: 'ck-heading_heading5'
                    },
                    {
                        model: 'heading6',
                        view: 'h6',
                        title: 'Heading 6',
                        class: 'ck-heading_heading6'
                    }
                ]
            },
            fontFamily: {
                options: [
                    'default',
                    'Arial, Helvetica, sans-serif',
                    'Courier New, Courier, monospace',
                    'Georgia, serif',
                    'Lucida Sans Unicode, Lucida Grande, sans-serif',
                    'Tahoma, Geneva, sans-serif',
                    'Times New Roman, Times, serif',
                    'Trebuchet MS, Helvetica, sans-serif',
                    'Verdana, Geneva, sans-serif'
                ],
                supportAllValues: true
            },
            fontSize: {
                options: [10, 12, 14, 'default', 18, 20, 22],
                supportAllValues: true
            },
            htmlSupport: {
                allow: [{
                    name: /.*/,
                    attributes: true,
                    classes: true,
                    styles: true
                }]
            },
            htmlEmbed: {
                showPreviews: true
            },
            link: {
                decorators: {
                    addTargetToExternalLinks: true,
                    defaultProtocol: 'https://',
                    toggleDownloadable: {
                        mode: 'manual',
                        label: 'Downloadable',
                        attributes: {
                            download: 'file'
                        }
                    }
                }
            },
            mention: {
                feeds: [{
                    marker: '@',
                    feed: [
                        '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes',
                        '@chocolate', '@cookie', '@cotton', '@cream',
                        '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread',
                        '@gummi', '@ice', '@jelly-o',
                        '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding',
                        '@sesame', '@snaps', '@soufflé',
                        '@sugar', '@sweet', '@topping', '@wafer'
                    ],
                    minimumCharacters: 1
                }]
            },
        }).catch(handleError);
    </script>
@endif
