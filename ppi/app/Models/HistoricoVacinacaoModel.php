<?php 

namespace App\Models;
use CodeIgniter\Model;

class HistoricoVacinacaoModel extends Model {
    protected $table = 'historico_carteira_vacinacao';
    protected $primaryKey = 'cd_historico_vacinacao';
    protected $allowedFields = [
        'ds_nome_medicamento',
        'dt_vacinacao',
        'nr_peso',
        'ds_nome_responsavel',
        'dt_proxima_vacinacao'
    ];

    protected $useSoftDeletes = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function getHistoricoVacinacao($id = false){
        if($id === false){
            return $this->orderBy('cd_carteira_vacinacao', 'desc')->findAll();
        } else {
            return $this->asArray()
                ->where('cd_carteira_vacinacao', $id)
                ->first();
        }
    }
}