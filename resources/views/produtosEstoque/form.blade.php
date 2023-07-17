<div class="row">
    <div class="col-sm-6">
        <div class="mb-3">
            <label for="productname">Código do produto</label>
            <input id="productname" name="productname" type="text" class="form-control" placeholder="Product Name">
        </div>
        <div class="mb-3">
            <label for="manufacturername">Descrição</label>
            <input id="manufacturername" name="manufacturername" type="text" class="form-control"
                   placeholder="Manufacturer Name">
        </div>
        <div class="mb-3">
            <label for="manufacturerbrand">Código RFID</label>
            <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control"
                   placeholder="Manufacturer Brand">
        </div>
        <div class="mb-3">
            <label for="price">Preço R$</label>
            <input id="price" name="price" type="text" class="form-control" placeholder="Price">
        </div>
    </div>

    <div class="col-sm-6">
        <div class="mb-3">
            <label class="control-label">Categoria</label>
            <select class="form-control select2">
                <option>Select</option>
                <option value="FA">Fashion</option>
                <option value="EL">Electronic</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="manufacturerbrand">Código de Barras</label>
            <input id="manufacturerbrand" name="manufacturerbrand" type="text" class="form-control"
                   placeholder="Manufacturer Brand">
        </div>
        <div class="mb-3">
            <label for="productdesc">Observações</label>
            <textarea class="form-control" id="productdesc" rows="5" placeholder="Product Description"></textarea>
        </div>
    </div>
</div>


<div class="card">
    <div class="card-header">
        <h4 class="card-title mb-0">Imagem do Produto</h4>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6">
                <div class="fallback">
                    <input name="file" type="file" id="imageInput" multiple/>
                </div>

                <div class="dz-message needsclick">
                    <div class="mb-3">
                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                    </div>
                    <h4>Solte os arquivos aqui ou clique para fazer o upload</h4>
                </div>
            </div>

            <div class="col-md-6">
                <div id="imagePreview" style="border: 1px solid #ccc;"></div>
            </div>
        </div>

    </div>
</div>

<style>
    #imagePreview img {
        max-width: 40%;
        max-height: 40%;
        display: block;
        margin: auto;
    }
</style>

<script>
    // Obtém o elemento de input de arquivo e a área de pré-visualização da imagem
    const imageInput = document.getElementById('imageInput');
    const imagePreview = document.getElementById('imagePreview');

    // Adiciona um ouvinte de evento para o input de arquivo
    imageInput.addEventListener('change', function() {
        // Verifica se um arquivo foi selecionado
        if (this.files && this.files[0]) {
            // Cria um objeto FileReader
            const reader = new FileReader();

            // Define a função de callback para o evento onload
            reader.onload = function(e) {
                // Cria um elemento de imagem para exibir a pré-visualização
                const img = document.createElement('img');
                img.src = e.target.result;

                // Adiciona a imagem à área de pré-visualização
                imagePreview.innerHTML = '';
                imagePreview.appendChild(img);
            };

            // Lê o conteúdo do arquivo como uma URL de dados
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>













<div class="d-flex flex-wrap gap-2">
    <button type="submit" class="btn btn-primary waves-effect waves-light">Salvar </button>
    <button type="submit" class="btn btn-secondary waves-effect waves-light">Cancel</button>
</div>
