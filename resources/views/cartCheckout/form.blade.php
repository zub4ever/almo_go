<div class="row">
    <div class="col-xl-8">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-middle mb-0 table-nowrap" id="data-table">
                        <thead class="table-light">
                        <tr>
                            <th>Produto</th>
                            <th>Descrição</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th colspan="2">Total</th>
                        </tr>
                        </thead>

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        function atualizarTabela() {
            // Faz a requisição GET para a API usando AJAX
            $.ajax({
                type: 'GET',
                url: 'URL_DA_API',
                dataType: 'json',
                success: function(response) {
                    // 'response' contém os dados retornados pela API

                    // Limpa a tabela antes de adicionar os novos dados
                    $('#data-table tbody').empty();

                    // Adiciona os dados retornados da API na tabela
                    $.each(response, function(index, data) {
                        $('#data-table tbody').append(
                            '<tr>' +
                            '<td>' + data.id + '</td>' +
                            '<td>' + data.nome + '</td>' +
                            '<td>' + data.email + '</td>' +
                            // Adicione outras colunas conforme necessário
                            '</tr>'
                        );
                    });
                },
                error: function() {
                    // Caso ocorra algum erro na requisição
                    console.error('Ocorreu um erro ao obter os dados da API.');
                }
            });
        }

        // Atualizar a tabela a cada 5 segundos (5000 milissegundos)
        setInterval(atualizarTabela, 5000);
    });
</script>

