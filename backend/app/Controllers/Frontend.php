<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PropertyModel;
use App\Models\PropertytypeModel;
use CodeIgniter\API\ResponseTrait;

class Frontend extends BaseController
{
    use ResponseTrait;
    public function PropertytypeList()
    {
        $typemodel = new PropertytypeModel();
        $propertytype = $typemodel->orderBy('type_name', "ASC")->findAll();
        return $this->respond($propertytype);
    }
    public function PropertyList()
    {
        $propmodel = new PropertyModel();
        $property = $propmodel->findAll();
        return $this->respond($property);
    }
}
