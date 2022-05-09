<?php

class HomeController extends BaseController
{
    public function __construct()
    {
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        return $this->view('fontend.homes.index', [
            "products" => $products,
        ]);
    }
}
