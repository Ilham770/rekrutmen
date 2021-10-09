<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CvModel;

class Cv extends BaseController
{
    protected $dataCv;

    public function __construct()
    {
        $this->dataCv = new CvModel();
    }
    public function index()
    {
        $curvi= $this->dataCv->getCv();
        $data = [
			'title' => 'Data Curicullum Vittae',
            'curvi' => $curvi, 
		];
		return view('administrator/data_cv/cvView', $data);
    }

    public function create()
    {

    }
}
