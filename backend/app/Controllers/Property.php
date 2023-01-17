<?php

namespace App\Controllers;

use App\Models\PropertyModel;
use App\Models\PropertytypeModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use finfo;

class Property extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    function __construct()
    {
        helper(['form', 'url']);
    }
    use ResponseTrait;

    public function index()
    {
        // echo "Hello";
        $model = new PropertytypeModel();
        $data['types'] = $model->findAll();
        $model = new PropertyModel();
        $data['property'] = $model->orderBy('id', 'desc')->findAll();
        return view('property/property_list', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $model = new PropertytypeModel();
        $data['types'] = $model->orderBy('type_name', 'ASC')->findAll();
        return view('property/add_property', $data);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $rules = [
            'property_name' => 'required|min_length[5]|max_length[50]',
            'property_price' => 'required|numeric',
            'property_address' => 'required|min_length[10]',
            'property_size' => 'required|min_length[4]',
            'property_details' => 'required|min_length[5]',
            'prop_type' => 'required',
            'property_image' => [
                'uploaded[property_image]',
                'mime_in[property_image,image/jpg,image/jpeg,image/png]',
                'max_size[property_image,1024]',
            ]
        ];
        $errors =
            [
                'property_name' => [
                    'required' => 'Property Name must be fill',
                    'max_length' => 'Maximum length 50',
                    'min_length' => 'Minimum length 5',
                ],
                'property_price' => [
                    'required' => 'Property price must be fill',
                    'numeric' => 'Number only',
                ],
                'property_image' => [
                    'mime_in' => 'Only jpg, png and jpeg are allowed',
                    'max_size' => 'Not more than 1 MB'
                ],
                'property_address' => [
                    'required' => 'Property price must be fill',
                    'min_length' => 'Property Details Minimum length 10',
                ],
                'property_size' => [
                    'required' => 'Property size must be fill',
                    'numeric' => 'Number only',
                ],
                'property_details' => [
                    'required' => 'Property Name must be fill',
                    'min_length' => 'Property Details Minimum length 5',
                ],
            ];

        $validation = $this->validate($rules, $errors);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('property_image');
            $path = "assets/uploads/";
            $img->move($path);

            $data['property_name'] = $this->request->getPost('property_name');
            $data['property_price'] = $this->request->getPost('property_price');
            $data['property_address'] = $this->request->getPost('property_address');
            $data['property_size'] = $this->request->getPost('property_size');
            $data['property_details'] = $this->request->getPost('property_details');
            $namepath = $path . $img->getName();
            $data['property_image'] = $namepath;
            $data['property_type'] = $this->request->getPost('prop_type');

            $model = new PropertyModel();
            $model->save($data);
            return redirect()->to('property');
        }
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $model = new PropertyModel();
        $data['property'] = $model->find($id);
        $cmodel = new PropertytypeModel();
        $data['types'] = $cmodel->orderBy('type_name', 'ASC')->findAll();
        // dd($data);
        return view("property/edit_property", $data);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $validate = $this->validate([
            'property_name' => 'required|min_length[5]|max_length[50]',
            'property_price' => 'required|numeric',
            'property_address' => 'required|min_length[10]',
            'property_size' => 'required|min_length[4]',
            'property_details' => 'required|min_length[5]',
            'prop_type' => 'required',
            'property_image' => [
                'uploaded[property_image]',
                'mime_in[property_image,image/jpg,image/jpeg,image/png]',
                'max_size[property_image,1024]',
            ]
        ]);
        if (!$validate) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        } else {
            $img = $this->request->getFile('property_image');
            $path = "assets/uploads/";
            $img->move($path);

            $data['property_name'] = $this->request->getPost('property_name');
            $data['property_price'] = $this->request->getPost('property_price');
            $data['property_address'] = $this->request->getPost('property_address');
            $data['property_size'] = $this->request->getPost('property_size');
            $data['property_details'] = $this->request->getPost('property_details');
            $namepath = $path . $img->getName();
            $data['property_image'] = $namepath;
            $data['property_type'] = $this->request->getPost('prop_type');

            $model = new PropertyModel();
            $model->update($id, $data);
            return redirect()->to('property');
        }
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new PropertyModel();
        $model->delete($id);
        return redirect()->to("property")->with('dlmsg', "Delete Successfully");
        // echo "Delete";
    }
}
