@extends('layouts.master')

@section('content')
<h1>Comparando imagens</h1><b><br></b>
<form action="{{ route('check') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="file" name="target_image" accept="image/*" />
    <button type="submit">Comparar</button>
</form>
@endsection
