<?php $__env->startSection('content'); ?>
    <style>
        /* Estilo para centralizar horizontalmente e verticalmente */
        body, html {
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .validate-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .camera-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;

        }
        .button-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        /* Estilos para a modal de carregamento */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #f1f1f1;
            padding: 20px;
            border-radius: 5px;
        }

        /* Estilo para o GIF de carregamento */
        .loading-gif {
            display: block;
            max-width: 100px;
            margin: 0 auto;
        }

        /* Estilo para a visualização da imagem */
        #image-preview img {
            max-width: 300px; /* Ajuste o tamanho máximo da imagem, se necessário */
        }
    </style>

    <form action="<?php echo e(route('check')); ?>" method="post" enctype="multipart/form-data" id="camera-form">
        <?php echo csrf_field(); ?>
        <div class="button-container">
            <label for="target_image" class="camera-button">Validar Face</label>
            <input type="file" name="target_image" id="target_image" accept="image/*" capture="camera" style="display: none;">
            <br>

            <div id="image-preview"></div>


            <br>
            <button type="submit" class="validate-button">Realizar pagamento</button>
        </div>
    </form>

    <!-- Modal de carregamento -->
    <div class="modal" id="loadingModal">
        <div class="modal-content">
            <img src="<?php echo e(asset('images/loading.gif')); ?>" alt="Carregando..." class="loading-gif">
        </div>
    </div>

    <script>
        document.querySelector('.camera-button').addEventListener('click', function() {
            document.getElementById('target_image').click();
        });

        // Captura o evento de alteração do input de arquivo
        document.getElementById('target_image').addEventListener('change', function(e) {
            const fileInput = e.target;
            const imagePreview = document.getElementById('image-preview');

            // Limpa qualquer visualização anterior
            imagePreview.innerHTML = '';

            // Verifica se um arquivo foi selecionado
            if (fileInput.files && fileInput.files[0]) {
                const reader = new FileReader();

                // Quando o leitor de arquivos terminar de ler o arquivo
                reader.onload = function(e) {
                    // Cria um elemento de imagem e define o atributo src para o URL da imagem carregada
                    const imageElement = document.createElement('img');
                    imageElement.src = e.target.result;

                    // Adiciona a imagem à div de visualização
                    imagePreview.appendChild(imageElement);
                };

                // Lê o arquivo como um URL de dados
                reader.readAsDataURL(fileInput.files[0]);
            }
        });

        // Exibir a modal de carregamento quando o formulário é enviado
        document.getElementById('camera-form').addEventListener('submit', function() {
            const loadingModal = document.getElementById('loadingModal');
            loadingModal.style.display = 'flex';
        });

        // Exemplo de como ocultar a modal de carregamento após o retorno da rota "check"
        // Aqui, você deve substituir esta parte pelo código real do seu backend
        // Neste exemplo, estamos simulando um tempo de espera de 3 segundos antes de ocultar a modal
        setTimeout(function() {
            const loadingModal = document.getElementById('loadingModal');
            loadingModal.style.display = 'none';
        }, 3000);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\almo_go\resources\views/cartCheckout/checkout.blade.php ENDPATH**/ ?>