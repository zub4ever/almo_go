@extends('layouts.master')
@section('title') Carrinho @endsection
@section('css')
    <link href="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Ecommerce @endslot
        @slot('title') Carrinho @endslot
    @endcomponent
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Informações do pedido</h4>
                </div>
                <div class="card-body">

                    <form action="" method="POST">
                        @csrf
                        @include('cartCheckout.form')
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
    <script src="{{ URL::asset('assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/pages/ecommerce-cart.init.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
@endsection

