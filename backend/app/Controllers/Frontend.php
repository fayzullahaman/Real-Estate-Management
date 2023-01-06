<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PropertyModel;
use CodeIgniter\API\ResponseTrait;

class Frontend extends BaseController
{
    use ResponseTrait;
    public function PropertyList()
    {
        $model = new PropertyModel();
        $property = $model->orderBy('property_name', "ASC")->findAll();
        return $this->respond($property);
    }
}
