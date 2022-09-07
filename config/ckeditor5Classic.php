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
            '|',
            'FontSize',
            'fontFamily',
            'fontColor',
            'fontBackgroundColor',
        ],
        'table' => [
            'contentToolbar' => [
                'tableColumn',
                'tableRow',
                'mergeTableCells',
            ],
        ],
        'image' => [
            'toolbar' => [
                'imageTextAlternative', '|',
                'imageStyle:alignLeft',
                'imageStyle:full',
                'imageStyle:alignRight',
            ],
            'styles' => [
                // This option is equal to a situation where no style is applied.
                'full',
                // This represents an image aligned to the left.
                'alignLeft',
                // This represents an image aligned to the right.
                'alignRight',
            ],
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
        'fontFamily' => [
            'options' => [
                'default',
                'Ubuntu, Arial, sans-serif',
                'Ubuntu Mono, Courier New, Courier, monospace',
                'Arial, Helvetica, sans-serif',
                'Courier New, Courier, monospace',
                'Georgia, serif',
                'Lucida Sans Unicode, Lucida Grande, sans-serif',
                'Tahoma, Geneva, sans-serif',
                'Times New Roman, Times, serif',
                'Trebuchet MS, Helvetica, sans-serif',
                'Verdana, Geneva, sans-serif',
            ],

        ],

        'fontSize' => [
            'options' => [
                'tiny',
                'small',
                'default',
                'big',
                'huge',
                9,
                11,
                13,
                17,
                19,
                21,
            ],
        ],

        'fontColor' => [
            'columns' => 5,

            // And 12 document colors (2 rows of them).
            'documentColors' => 12

            //or use any colors
            //
            //            'colors'=> [
            //                        [
            //                            'color'=>'hsl(0, 0%, 0%)',
            //                            'label'=>'Black'
            //                        ],
            //
            //                        [
            //                            'color'=> 'hsl(0, 0%, 30%)',
            //                            'label'=> 'Dim grey'
            //                        ],
            //                        [
            //                            'color'=> 'hsl(0, 0%, 60%)',
            //                            'label'=> 'Grey'
            //                        ],
            //                        [
            //                            'color'=> 'hsl(0, 0%, 90%)',
            //                            'label'=> 'Light grey'
            //                        ],
            //                        [
            //                            'color'=> 'hsl(0, 0%, 100%)',
            //                            'label'=> 'White',
            //                            'hasBorder'=> true
            //                        ],
            //
            //
            //                [
            //                    'color'=> 'hsl(0, 75%, 60%)',
            //                    'label'=> 'Red'
            //                ],
            //                [
            //                    'color'=> 'hsl(30, 75%, 60%)',
            //                    'label'=> 'Orange'
            //                ],
            //                [
            //                    'color'=> 'hsl(60, 75%, 60%)',
            //                    'label'=> 'Yellow'
            //                ],
            //                [
            //                    'color'=> 'hsl(90, 75%, 60%)',
            //                    'label'=> 'Light green'
            //                ],
            //                [
            //                    'color'=> 'hsl(120, 75%, 60%)',
            //                    'label'=> 'Green'
            //                ],
            //
            //                    ],

        ],

        'fontBackgroundColor' => [
            //               'columns'=> 5,
            //
            //               // And 12 document colors (2 rows of them).
            //               'documentColors'=> 12,
            //
            'colors' => [
                [
                    'color' => 'hsl(0, 0%, 0%)',
                    'label' => 'Black',
                ],

                [
                    'color' => 'hsl(0, 0%, 30%)',
                    'label' => 'Dim grey',
                ],
                [
                    'color' => 'hsl(0, 0%, 60%)',
                    'label' => 'Grey',
                ],
                [
                    'color' => 'hsl(0, 0%, 90%)',
                    'label' => 'Light grey',
                ],
                [
                    'color' => 'hsl(0, 0%, 100%)',
                    'label' => 'White',
                    'hasBorder' => true,
                ],

                //                [
                //                    'color'=> 'hsl(0, 75%, 60%)',
                //                    'label'=> 'Red'
                //                ],
                //                [
                //                    'color'=> 'hsl(30, 75%, 60%)',
                //                    'label'=> 'Orange'
                //                ],
                //                [
                //                    'color'=> 'hsl(60, 75%, 60%)',
                //                    'label'=> 'Yellow'
                //                ],
                //                [
                //                    'color'=> 'hsl(90, 75%, 60%)',
                //                    'label'=> 'Light green'
                //                ],
                //                [
                //                    'color'=> 'hsl(120, 75%, 60%)',
                //                    'label'=> 'Green'
                //                ],

            ],

        ],
        'highlight' => [
            'options' => [
                [
                    'model' => 'greenMarker',
                    'class' => 'marker-green',
                    'title' => 'Green marker',
                    'color' => 'var(--ck-highlight-marker-green)',
                    'type' => 'marker',
                ],
                [
                    'model' => 'redPen',
                    'class' => 'pen-red',
                    'title' => 'Red pen',
                    'color' => 'var(--ck-highlight-pen-red)',
                    'type' => 'pen',
                ],
            ],
        ],
],

 ];
