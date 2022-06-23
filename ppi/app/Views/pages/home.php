<body>
    <div class="borda">
        <h4>Cadastro Animais de Rua</h4>
        <div class="alinhamento">
            <button type="button" class="btn btn-primary"  style="height: 50px;" onclick="location.href='/animal/add'"><img src="/icons/soma.png" alt="" /></button>
            <div class="teste">
                <input style="font-size: 20px" />
                <button>
                    <img src="/icons/lupa2.png" style="height: 35px" />
                    <img />
                </button>
            </div>
        </div>

        <div class="pica">
            <div class="col-lg-12 col-xs-12">
                <?php if(!empty($animais) and is_array($animais)) : ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">NOME</th>
                                <th scope="col">GÊNERO</th>
                                <th scope="col">OBSERVAÇÃO</th>
                                <th scope="col" colspan="2"></th>
                            </tr>
                        </thead>
                        <tbody class="borda">
                            <?php foreach ($animais as $id => $animal) : ?>
                                <tr>
                                    <th scope="row"><?= $animal['cd_animal'] ?></th>
                                    <td><?= $animal['ds_nome_animal'] ?></td>
                                    <td><?= $animal['ds_nome_proprietario'] ?></td>
                                    <td><?= $animal['ds_observacoes'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" id='<?=$animal['cd_animal']?>' data-toogle='modal' data-target='#modal<?=$animal['cd_animal']?>'>
                                            <img src="/icons/lapis.png" alt="editar" />
                                        </button>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-danger">
                                            <img src="/icons/lixo.png" alt="excluir" />
                                        </button>
                                    </td>
                                </tr>
                                <div class="modal fade left" id='modal<?=$animal['cd_animal']?>'>
                                    <h2>Editar cachorro</h2>
                                    <form class='form-horizontal' role='form' action="" method="post"></form>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <h2>Nenhum cachorro encontrado</h2>
                <?php endif; ?>
            </div>
            <div>
                <?= $pager->links() ?>
            </div>

        </div>
    </div>
</body>