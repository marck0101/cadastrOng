<?php

namespace App\Models;
use CodeIgniter\Model;

class AnimaisModel extends Model {
    protected $table = 'animais';
    protected $primaryKey = 'cd_animal';

    protected $allowedFields = [
        'ds_nome_animal',
        'dt_nascimento',
        'ds_raca',
        'ds_cor',
        'ds_sexo',
        'ds_nome_proprietario',
        'nr_cpf_proprietario',
        'ds_endereco',
        'nr_telefone',
        'ds_observacoes',
        'cd_carteira_vacinacao',
        'x_ativo',
        'x_castrado',
        'x_vivo',
        'cd_status',
        'dt_adocao',
        'dt_encontrado',
        'dt_morto',
        'dt_castrado'
    ];


    protected $useSoftDeletes = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    /**
     * Busca os registros dos animais
     */
    public function getAnimais( $cd_animal = false){
        if($cd_animal === false){
            return $this->select('animais.*, status.ds_nome_status')
                ->join('status', 'animais.cd_status = status.cd_status')
                ->orderBy('updated_at', 'desc')
                ->findAll();
        } else {
            return $this->asArray()
                ->where('cd_animal', $cd_animal)
                ->first();
        }
    }

}