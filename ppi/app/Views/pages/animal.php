<body>
    <div class="borda">
        <h4><?= $title_page ?></h4>


        <div class="pica">
            <div class="col-lg-12 col-xs-12">
                <div class="card-body">
                    <?php if ($msg) : ?>
                        <div class='p-3 my-3 alert-info'>
                            <?= $msg ?>
                        </div>
                    <?php endif; ?>
                    <div class="p-3 my-3 text-danger">
                        <?= \Config\Services::validation()->listErrors(); ?>
                    </div>

                    <form action="<?=base_url('animal/save')?>" method="post" enctype="multipart/form-data">
                        <h1>Animal:</h1>
                        <div class="form-group">
                            <label for="nomeAnimal">Nome:</label>
                            <input type="text" name="nomeAnimal" id="nomeAnimal" class="form-control" value="<?= isset($animal['nomeAnimal']) ? $animal['nomeAnimal'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="racaAnimal">Raça:</label>
                            <input type="text" name="racaAnimal" id="racaAnimal" class="form-control" value="<?= isset($animal['racaAnimal']) ? $animal['racaAnimal'] :  '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="generoAnimal">Sexo</label>
                            <select name="generoAnimal" class='form-control'>
                                <option value="" <?= (!isset($animal['ds_sexo']) ? 'selected' : '') ?>></option>
                                <option value="M" <?= (isset($animal['ds_sexo']) and $animal['ds_sexo'] == 'M' ? 'selected' : '') ?>>Masculino</option>
                                <option value="F" <?= (isset($animal['ds_sexo']) and $animal['ds_sexo'] == 'F' ? 'selected' : '') ?>>Femininino</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='img'>Imagem</label><br />
                            <!-- O TYPE PARA ENVIAR ARQUIVOS POR FORMULÁRIO É file -->
                            <input name='img' type='file' class='form-control'>
                        </div>
                        <div class="form-group">
                            <label for="corAnimal">Cor:</label>
                            <select name="corAnimal" class='form-control'>
                                <option value="" <?= !isset($animal['corAnimal']) ? 'selected' : '' ?>></option>
                                <option value="preto" <?= isset($animal['corAnimal']) and $animal['corAnimal'] == 'preto' ? 'selected' : '' ?>>Preto</option>
                                <option value="branco" <?= isset($animal['corAnimal']) and $animal['corAnimal'] == 'branco' ? 'selected' : '' ?>>Branco</option>
                                <option value="caramelo" <?= isset($animal['corAnimal']) and $animal['corAnimal'] == 'caramelo' ? 'selected' : '' ?>>Caramelo</option>
                                <option value="cinzento" <?= isset($animal['corAnimal']) and $animal['corAnimal'] == 'cinzento' ? 'selected' : '' ?>>Cinzento</option>
                                <option value="outro" <?= isset($animal['corAnimal']) and $animal['corAnimal'] == 'outro' ? 'selected' : '' ?>>Outro</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='observacoes'>Observações:</label>
                            <textarea name='observacoes' rows="10" class='form-control'><?= isset($noticias['observacoes']) ? $noticias['observacoes'] :  '' ?></textarea>
                        </div>
                        <h1>Proprietário:</h1>
                        <div class="form-group">
                            <label for="nomeProprietario">Nome:</label>
                            <input type="text" name="nomeProprietario" id="nomeProprietario" class="form-control" value="<?= isset($animal['nomeProprietario']) ? $animal['nomeProprietario'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="telefoneProprietario">Contato:</label>
                            <input type="text" name="telefoneProprietario" id="telefoneProprietario" class="form-control" value="<?= isset($animal['telefoneProprietario']) ? $animal['telefoneProprietario'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="enderecoProprietario">Endereço:</label>
                            <input type="text" name="enderecoProprietario" id="enderecoProprietario" class="form-control" value="<?= isset($animal['enderecoProprietario']) ? $animal['enderecoProprietario'] :  '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="cpfProprietario">CPF:</label>
                            <input type="text" name="cpfProprietario" id="cpfProprietario" class="form-control" value="<?= isset($animal['cpfProprietario']) ? $animal['cpfProprietario'] :  '' ?>">
                        </div>
                        <input type="hidden" value="<?=isset($animal['id']) ? $animal['id']: '0' ?>" name="id">
                        <input type="submit" value="Salvar" name="submit" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>


<script src="/js/tinymce/tinymce.min.js"></script>
<script>
    tinymce.init({ 
        language: 'pt_BR',
        selector:'textarea',
        theme: 'modern',
        plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount   imagetools contextmenu colorpicker textpattern code',
        toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat code',
        image_advtab: true,
        templates: [
            { title: 'Test template 1', content: 'Test 1' },
            { title: 'Test template 2', content: 'Test 2' }
        ],
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
        });
</script>