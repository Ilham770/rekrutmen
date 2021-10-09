<?php

namespace App\Models;

use CodeIgniter\Model;

class CvModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'cv';
    protected $primaryKey           = 'id_cv';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ['id_cv', 'id_campus', 'id_user', 'id_title', 'id_major'];

    // Dates
    protected $useTimestamps        = true;
    protected $dateFormat           = 'datetime';
    protected $createdField         = 'created_at';
    protected $updatedField         = 'updated_at';
    protected $deletedField         = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks       = true;
    protected $beforeInsert         = [];
    protected $afterInsert          = [];
    protected $beforeUpdate         = [];
    protected $afterUpdate          = [];
    protected $beforeFind           = [];
    protected $afterFind            = [];
    protected $beforeDelete         = [];
    protected $afterDelete          = [];

    public function getCv(){
       return $this->db->table('cv')
        ->join('user', 'user.id = cv.id_user')
        ->join('campus', 'campus.id_campus = cv.id_campus')
        ->join('title', 'title.id = cv.id_title')
        ->join('major', 'major.id = cv.id_major')  
        ->get()->getResultArray();    
    }
}

