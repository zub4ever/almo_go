<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-nowrap" id="tabelaLeituras">
                        <thead class="table-light">
                        <tr>
                            <th>TAG</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th colspan="2">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Aqui os dados serão adicionados dinamicamente pela atualização em tempo real -->
                        </tbody>
                    </table>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <a href="{{ url('ecommerce') }}" class="btn btn-secondary">
                            <i class="mdi mdi-arrow-left me-1"></i>Voltar</a>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2 mt-sm-0">
                            <a href="{{ route('opcaopagamento') }}" class="btn btn-primary">
                                <i class="mdi mdi-account-multiple-outline me-1"></i>Checkout</a>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
</div>

