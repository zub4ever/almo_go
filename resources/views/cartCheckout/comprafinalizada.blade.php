@extends('layouts.master')

@section('content')

    <!-- Conteúdo da página de compra finalizada -->
    @if($result)
        <!-- Botão para abrir a modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#successModal">
            Exibir Modal de Sucesso
        </button>

        <!-- Modal -->
        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- Ícone de sucesso -->
                        <span class="modal-icon">&#10003;</span>
                        <h5 class="modal-title" id="successModalLabel">Compra Finalizada</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Conteúdo da modal -->
                        <div class="alert alert-success">
                            Similaridade: {{ $result[0]['Similarity'] }}
                            <p>Compra autorizada</p>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- Botão para fechar a modal -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection

