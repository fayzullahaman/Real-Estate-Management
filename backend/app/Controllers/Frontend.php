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
        $db = db_connect('default');
        $typemodel = new PropertytypeModel();
        $propertytype = $typemodel->orderBy('type_name', "ASC")->findAll();
        return $this->respond($propertytype);
    }
    public function PropertyList()
    {
        $db = db_connect('default');
        $builder = $db->table('properties, propertytypes')->where('properties.property_type = propertytypes.id');
        $data = $builder->get()->getResult();
        // echo "<pre>";
        // print_r($data);
        // $propmodel = new PropertyModel();
        // $property = $propmodel->findAll();
        return $this->respond($data);
    }
}
