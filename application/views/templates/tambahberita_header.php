<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>
    <script type="text/javascript" src="<?= base_url('assets/') ?>tinymce/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
        // tinymce.init({
        //     selector: "textarea",
        // });
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
            automatic_uploads: true,
            image_advtab: true,
            images_upload_url: "<?php echo base_url("berita/tinymce_upload") ?>",
            file_picker_types: 'image',
            paste_data_images: true,
            relative_urls: true,
            remove_script_host: true,
            //     file_picker_callback: function(cb, value, meta) {
            //     var input = document.createElement('input');
            //     input.setAttribute('type', 'file');
            //     input.setAttribute('accept', 'image/*');
            //     input.onchange = function() {
            //         var file = this.files[0];
            //         var reader = new FileReader();
            //         reader.readAsDataURL(file);
            //         reader.onload = function() {
            //             var id = 'post-image-' + (new Date()).getTime();
            //             var blobCache = tinymce.activeEditor.editorUpload.blobCache;
            //             var blobInfo = blobCache.create(id, file, reader.result);
            //             blobCache.add(blobInfo);
            //             cb(blobInfo.blobUri(), {
            //                 title: file.name
            //             });
            //         };
            //     };
            //     input.click();
            // }
        });
        // theme: 'modern',
        // width: 800,  
        //     height: 300,
        //     paste_data_images: true,
        //     plugins: [
        //         "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        //         "searchreplace wordcount visualblocks visualchars code fullscreen",
        //         "insertdatetime media nonbreaking save table contextmenu directionality",
        //         "emoticons template paste textcolor colorpicker textpattern"
        //     ],
        //     toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        //     toolbar2: "print preview media | forecolor backcolor emoticons",
        //     image_advtab: true,
        //     file_picker_callback: function(callback, value, meta) {
        //         if (meta.filetype == 'image') {
        //             $('#upload').trigger('click');
        //             $('#upload').on('change', function() {
        //                 var file = this.files[0];
        //                 var reader = new FileReader();
        //                 reader.onload = function(e) {
        //                     callback(e.target.result, {
        //                         alt: ''
        //                     });
        //                 };
        //                 reader.readAsDataURL(file);
        //             });
        //         }
        //     },
        //     templates: [{
        //         // title: 'Test template 1',
        //         // content: 'Test 1'
        //         // }, {
        //         // title: 'Test template 2',
        //         // content: 'Test 2'
        //     }]
        // });
    </script>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">


    <!-- Page Wrapper 
        -->
    <div id="wrapper">