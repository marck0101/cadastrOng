<?php 

namespace App\Models;
use CodeIgniter\Model;

class StatusModel extends Model{
    protected $table = 'status';
    protected $primaryKey = 'cd_status';
    protected $allowedFields = [
        'ds_nome_status'
    ];
    protected $useSoftDeletes = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function getStatus($id = false){
        if($id === false){
            return $this->orderBy('cd_status', 'desc')->findAll();
        } else {
            return $this->asArray() 
                ->where('cd_status', $id)
                ->first();
        }
    }
}