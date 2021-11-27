<?php

namespace App\Models;
use CodeIgniter\Model;

class vendasModel extends Model{

    protected $table = 'vendas';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nome','descricao','valor_custo','valor_venda','quantidade'];

    protected $useTimestamps = true;
    protected $useSoftDeletes = true;

    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    public function getvendas($id = null){
        if($id === null){
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }

}