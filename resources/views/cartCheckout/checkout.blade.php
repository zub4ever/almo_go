@extends('layouts.master')

@section('content')
    <form action="{{ route('check') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div id="camera-container">
            <video id="camera-preview" autoplay playsinline></video>
            <canvas id="captured-image" style="display: none;"></canvas>
            <button type="button" id="take-photo">Tirar Foto</button>
        </div>

        <input type="hidden" name="target_image" id="target-image-input">
        <button type="submit" id="submit-btn" style="display: none;">Enviar</button>
    </form>







@endsection
