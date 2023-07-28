@extends('layouts.master')
@section('title')Ecommerce @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/nouislider/nouislider.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/gridjs/gridjs.min.css">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial;
            font-size: 17px;
        }

        /* Adiciona estilo para tornar o vídeo responsivo */
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        #myVideo {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            transform: translateX(-50%) translateY(-50%);
            
            background-size: cover;
            transition: 1s opacity;
        }

        .content {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #f1f1f1;
        }

        .content h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #fff;
        }

        .content .btn-start {
            font-size: 24px;
            padding: 10px 20px;
            border: none;
            background-color: #00BFFF;
            color: #fff;
            cursor: pointer;

        }
    </style>
@endsection
@section('content')
    <!-- Adiciona o contêiner para o vídeo -->
    <div class="video-container">
        <video autoplay muted loop id="myVideo">
            <source src="videos/WELCOME.mp4" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <div class="content">
        <a class="btn-start" href="{{ route('nova.ordem') }}">Iniciar</a>
    </div>

    <script>
        var video = document.getElementById("myVideo");
        var btn = document.querySelector(".btn-start");

        btn.addEventListener("click", function() {

        });
    </script>
@endsection
@section('script')
    <script src="{{ URL::asset('assets/js/pages/ecommerce-product-list.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection
