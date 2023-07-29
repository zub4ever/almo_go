@extends('layouts.master')

@section('content')

    <!-- Conteúdo da página de compra finalizada -->
    @if($result)
        <div class="text-center mt-5">
            <div class="alert alert-success">
                Similaridade: {{ $result[0]['Similarity'] }}
            </div>
            <p class="mt-3">Biometria facial aprovada, compra efetivada...</p>
        </div>
    @endif

@endsection

@section('script')
    <script>
        // Redirecionar para a rota "logout" após 3 segundos
        setTimeout(function() {
            document.getElementById('logout-form').submit();
        }, 6000);// Aqui voce coloca o tempo que desejar
    </script>
@endsection
