@extends('layouts.master')

@section('content')

    <!-- Conteúdo da página de compra finalizada -->
    @if($result)
        <div class="alert alert-success">
            Similaridade : {{ $result[0]['Similarity'] }}
        </div>
    @endif

@endsection
