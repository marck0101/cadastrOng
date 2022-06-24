<body>
    <div class="borda">
        <h4><?= $title_page ?></h4>
        <button type="button" class="btn btn-primary"  onclick="location.href='/'">Voltar</button>
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

                    <form action="<?=base_url('animal/save')?>" method="post">
                        <h1>Animal:</h1>
                        <div class="form-group">
                            <label for="ds_nome_animal">Nome:</label>
                            <input type="text" name="ds_nome_animal" id="ds_nome_animal" class="form-control" value="<?= isset($animal['ds_nome_animal']) ? $animal['ds_nome_animal'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="ds_raca">Raça:</label>
                            <input type="text" name="ds_raca" id="ds_raca" class="form-control" value="<?= isset($animal['ds_raca']) ? $animal['ds_raca'] :  '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="ds_sexo">Gênero</label>
                            <select name="ds_sexo" class='form-control'>
                                <option value="" <?=(!isset($animal['ds_sexo']) ? '' : 'selected') ?>></option>
                                <option value="M" <?= (isset($animal['ds_sexo']) and $animal['ds_sexo'] == 'M' ? 'selected' : '') ?>>Masculino</option>
                                <option value="F" <?= (isset($animal['ds_sexo']) and $animal['ds_sexo'] == 'F' ? 'selected' : '') ?>>Femininino</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ds_cor">Cor:</label>
                            <select name="ds_cor" class='form-control'>
                                <option value="" <?= !isset($animal['ds_cor']) ? 'selected' : '' ?>></option>
                                <option value="preto" <?= isset($animal['ds_cor']) and $animal['ds_cor'] == 'preto' ? 'selected' : '' ?>>Preto</option>
                                <option value="branco" <?= isset($animal['ds_cor']) and $animal['ds_cor'] == 'branco' ? 'selected' : '' ?>>Branco</option>
                                <option value="caramelo" <?= isset($animal['ds_cor']) and $animal['ds_cor'] == 'caramelo' ? 'selected' : '' ?>>Caramelo</option>
                                <option value="cinzento" <?= isset($animal['ds_cor']) and $animal['ds_cor'] == 'cinzento' ? 'selected' : '' ?>>Cinzento</option>
                                <option value="outro" <?= isset($animal['ds_cor']) and $animal['ds_cor'] == 'outro' ? 'selected' : '' ?>>Outro</option>
                            </select>
                        </div>
                        <div class='form-group'>
                            <label for='ds_endereco'>Observações:</label>
                            <textarea name='ds_endereco' rows="10" class='form-control'><?= isset($noticias['ds_endereco']) ? $noticias['ds_endereco'] :  '' ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="cd_status">Status</label>
                            <select name="cd_status" class='form-control'>
                            <option value="1"></option>
                                <?php foreach($status as $status_item): ?>
                                    <option value="<?=$status_item['cd_status']?>" <?= isset($animal['cd_status']) and $animal['cd_status'] == $status_item['cd_status'] ? 'selected' : '' ?>><?=$status_item['ds_nome_status']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <h1>Proprietário:</h1>
                        <div class="form-group">
                            <label for="ds_nome_proprietario">Nome:</label>
                            <input type="text" name="ds_nome_proprietario" id="ds_nome_proprietario" class="form-control" value="<?= isset($animal['ds_nome_proprietario']) ? $animal['ds_nome_proprietario'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="nr_telefone">Contato:</label>
                            <input type="text" name="nr_telefone" id="nr_telefone" class="form-control" value="<?= isset($animal['nr_telefone']) ? $animal['nr_telefone'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="ds_endereco">Endereço:</label>
                            <input type="text" name="ds_endereco" id="ds_endereco" class="form-control" value="<?= isset($animal['ds_endereco']) ? $animal['ds_endereco'] :  '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="nr_cpf_proprietario">CPF:</label>
                            <input type="text" name="nr_cpf_proprietario" id="nr_cpf_proprietario" class="form-control" value="<?= isset($animal['nr_cpf_proprietario']) ? $animal['nr_cpf_proprietario'] :  '' ?>">
                        </div>
                        <input type="hidden" value="<?=isset($animal['id']) ? $animal['id']: '0' ?>" name="id">
                        <input type="submit" value="Salvar" name="submit" class="btn btn-primary">

                    </form>
                </div>
            </div>
        </div>
    </div>
</body>