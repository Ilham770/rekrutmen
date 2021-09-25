<?php

namespace App\Models;

use CodeIgniter\Model;

class LowonganModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'lowongan';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['judul', 'id_jobdesc', 'deskripsi', 'jobdesk', 'gambar', 'tanggal_upload'];

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

	public function getLowongan()
	{
		return $this->db->table('lowongan')
			->join('jobdesc', 'jobdesc.id_jobdesc = lowongan.id_jobdesc')
			->get()->getResultArray();
	}
}
