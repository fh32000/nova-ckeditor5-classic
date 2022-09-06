<?php
return [

    /*
    |--------------------------------------------------------------------------------
    | CKEditor Model
    |--------------------------------------------------------------------------------
    |
    | The fully qualified class name of models.
    |
    */

    'attachment_model' => \NumaxLab\NovaCKEditor5Classic\Models\Attachment::class,
    'pending_attachment_model' => \NumaxLab\NovaCKEditor5Classic\Models\PendingAttachment::class,

    /*
    |--------------------------------------------------------------------------------
    | CKEditor Options
    |--------------------------------------------------------------------------------
    |
    | To view a list of all available options checkout the CKEditor API documentation
    | https://ckeditor.com/docs/ckeditor5/latest/builds/guides/integration/configuration.html
    |
    */

    'options' => [
        'language' => 'en',
        'toolbar' => [
            'Undo',
            'Redo',
            '|',
            'Heading',
            '|',
            'Bold',
            'Italic',
            '|',
            'Link',
            '|',
            'NumberedList',
            'BulletedList',
            'BlockQuote',
            '|',
            'MediaEmbed',
            'imageUpload',
            '|',
            'insertTable',
            'tableColumn',
            'tableRow',
            'mergeTableCells',
            '|',
            'alignment:left',
            'alignment:center',
            'alignment:right',
            'alignment:justify',
            //'alignment',//or in one line
            '|'
        ],
        'table' => [
            'contentToolbar' => [
                'tableColumn',
                'tableRow',
                'mergeTableCells',
            ]
        ],
        'image' => [
            'toolbar' => [
                'imageTextAlternative', '|',
                'imageStyle:alignLeft',
                'imageStyle:full',
                'imageStyle:alignRight'
            ],
            'styles' => [
                // This option is equal to a situation where no style is applied.
                'full',
                // This represents an image aligned to the left.
                'alignLeft',
                // This represents an image aligned to the right.
                'alignRight',
            ]
        ],
        'heading' => [
            'options' => [
                ['model' => 'paragraph', 'title' => 'Paragraph', 'class' => 'ck-heading_paragraph'],
                ['model' => 'heading1', 'view' => 'h1', 'title' => 'Heading 1', 'class' => 'ck-heading_heading1'],
                ['model' => 'heading2', 'view' => 'h2', 'title' => 'Heading 2', 'class' => 'ck-heading_heading2'],
                ['model' => 'heading3', 'view' => 'h3', 'title' => 'Heading 3', 'class' => 'ck-heading_heading3'],
                ['model' => 'heading4', 'view' => 'h4', 'title' => 'Heading 4', 'class' => 'ck-heading_heading4'],
                ['model' => 'heading5', 'view' => 'h5', 'title' => 'Heading 5', 'class' => 'ck-heading_heading5'],
                ['model' => 'heading6', 'view' => 'h6', 'title' => 'Heading 6', 'class' => 'ck-heading_heading6'],
            ],
        ],
    ]

];
