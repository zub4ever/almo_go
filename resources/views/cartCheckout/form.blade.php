<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-nowrap" id="tabelaLeituras">
                        <thead class="table-light">
                        <tr>
                            <th>TAG</th>
{{--                            <th>Descrição</th>--}}
{{--                            <th>Preço</th>--}}
{{--                            <th>Quantidade</th>--}}
{{--                            <th colspan="2">Total</th>--}}
                        </tr>
                        </thead>
                        <tbody>
                        <!-- Aqui os dados serão adicionados dinamicamente pela atualização em tempo real -->
                        </tbody>
                    </table>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <a href="{{ url('ecommerce-products') }}" class="btn btn-secondary">
                            <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                    </div> <!-- end col -->
                    <div class="col-sm-6">
                        <div class="text-sm-end mt-2 mt-sm-0">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cameraModal">
                                Checkout
                            </button>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row-->
            </div>
        </div>
    </div>
</div>



<script src="https://js.pusher.com/7.0/pusher.min.js"></script>

<script>
    const pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        encrypted: true
    });

    const channel = pusher.subscribe('leituras');

    channel.bind('nova-leitura-event', function (leitura) {
        // 'leitura' contém os dados enviados pelo evento NovaLeituraEvent

        // Adicionar os dados na tabela
        const tabela = document.getElementById('tabelaLeituras').getElementsByTagName('tbody')[0];

        // Criar uma nova linha na tabela
        const novaLinha = tabela.insertRow();

        // Preencher as células da nova linha com os dados da leitura
        novaLinha.insertCell(0).innerHTML = leitura.id;
        novaLinha.insertCell(1).innerHTML = leitura.tag_rfid;

        // Adicionar outras colunas, se necessário

        // Scroll automático para mostrar a leitura mais recente
        document.getElementById('tabelaLeituras').scrollTop = document.getElementById('tabelaLeituras').scrollHeight;
    });
</script>
