<?php

class CartController extends BaseController
{

    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function store()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if($_POST['data']['id']) {
                $product = $this->productModel->getById($_POST['data']['id']);
                print_r($product);
            }
        }
    }
}
