<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/gifMaker/main.css') }}">
    <!-- <meta name="_token" content="{{ csrf_token() }}"> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style-home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imageCropper/cropper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/imageCropper/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/twitter-style.css') }}">
    <script src="{{ asset('js/urlAnaliser/urlAnalyser.js') }}" defer></script>
    {{-- @livewireStyles
    <link rel="stylesheet" media="all" href="{!! mix('css/main.css') !!}" />
    <link rel="stylesheet" media="all" href="{!! mix('css/frontend.css') !!}" /> --}}
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    {{-- <script src="https://unpkg.com/jquery@3/dist/jquery.slim.min.js" crossorigin="anonymous"></script> --}}
    <script src="https://unpkg.com/bootstrap@4/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropper/2.3.4/cropper.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>WizBrand Online Digital Marketing Software</title>
</head>
<style>


</style>

<body>
    <!-- -- navbar start here  -- -->
    @include('layouts.navbar')
    <!-- {{-- navbar start close --}} -->
    @yield('content')
     <script src="{!! mix('js/manifest.js') !!}"></script>
    <script src="{!! mix('js/vendor.js') !!}"></script>
    <script src="{!! mix('js/frontend.js') !!}"></script>
    @livewireScripts
    <!-- product end here  -->
    @include('layouts.footer')

    <script src="{{ asset('js/imageCropper/cropper.js') }}"></script>
    <script src="{{ asset('js/imageCropper/main.js') }}"></script>
    <script src="{{ asset('js/imageProcessor/imageProcessor.js') }}"></script>
    <script src="{{ asset('js/socialImages/socialImage.js') }}"></script>
    <script src="{{ asset('js/SynonymReplacer/synonymReplacer.js') }}"></script>
    <script src="{{ asset('js/textCorrection/textCorrection.js') }}"></script>
    <script src="{{ asset('js/checkRobotText/checkRobotText.js') }}"></script>
    <script src="{{ asset('js/bulkImageCompress/bulkImageCompress.js') }}"></script>
    <script src="{{ asset('js/PdfPagesDelete/PdfPagesDelete.js') }}"></script>
    <script src="{{ asset('js/ImgToPdf/ImgToPdf.js') }}"></script>


</body>

</html>
