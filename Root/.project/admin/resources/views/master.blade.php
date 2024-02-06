<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('views::assets.style')
    <script src="/assets/js/jquery.min.js"></script>
    
</head>

<body>

    @yield('header')
    @yield('sidebar')
    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20" id="body">
            @yield('content')

        </div>
    </div>
    <h1> ادمین سایت</h1>
    @include('views::assets.javascript')

    <?php
    $folder = 'slider';
    ?>
    @if (request()->segment(1) == 'ad')
        @php
            $upload_url = '/ad/upload';
        @endphp
    @else
        @php
            $upload_url = '/ad/upload';
        @endphp
    @endif
    <script>
        // Dropzone.autoDiscover = false;
        console.log($("#dropzone"));
        $("#dropzone").dropzone({
            // previewTemplate: document.querySelector('#imgDr').value,
            // previewTemplate: file.previewElement.querySelector('imgDr'),
            url: "{{ $upload_url }}",
            // data: {
            //      folder : "{{ $folder }}",
            // },
            success: function(file, response) {
                var imgName = response.imgName;

                $('#imgDr').val(imgName);

                file.previewElement.classList.add("dropzone");
                var previewImg = file.previewElement.querySelector('imgDr');
            },
            addRemoveLinks: true,
            error: function(file, response) {
                file.previewElement.classList.add("dz-error");
            },
            sending: function(file, xhr, formData) {
                formData.append('folder', "{{ $folder }}");
            }
        });
    </script>

</body>

</html>
