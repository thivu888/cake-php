<?php

class ProductController extends BaseController
{
    private $productModel;

    public function __construct()
    {
        $this->loadModel('CategoryModel');
        $this->loadModel('ProductModel');
        $this->productModel = new ProductModel;
        $this->CategoryModel = new CategoryModel;
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        return $this->view('fontend.products.index', [
            "products" => $products,
        ]);
    }

    public function category()
    {
        if (isset($_GET['id'])) {
            $products = $this->productModel->getByCategory($_GET['id'] ?? '');
            $categories = $this->CategoryModel->getAll();
            return $this->view('fontend.products.category', [
                "products" => $products,
                "categories" => $categories
            ]);
        } else {
        }
    }

    public function detail()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        $products = ["data" => []];

        if ($product['data'] && count($product['data']) > 0) {
            $products = $this->productModel->getByCategory($product['data'][0]['category_id']);
        }


        return $this->view('fontend.products.detail', [
            "product" => $product,
            "products" => $products
        ]);
    }

    public function delete()
    {
        $id = $_GET['id'];
        $product = $this->productModel->deleteById($id);
        return $this->view('fontend.products.delete', [
            "product" => $product,
        ]);
    }

    public function create()
    {
        $data = [
            "name" => "quả táo",
            "price" => 7777,
            "image" => "adu.jpg",
            "category_id" => 1,
            "description" => "táo rất ngon",
        ];
        $product = $this->productModel->store($data);
        return $this->view('fontend.products.create', [
            "product" => $product,
        ]);
    }

    public function update()
    {
        $id = $_GET['id'];
        $data = [
            "name" => "quả táo",
            "price" => 7777,
            "image" => "adu.jpg",
            "category_id" => 1,
            "description" => "táo rất ngon",
        ];
        $product = $this->productModel->updateById($id, $data);
        return $this->view('fontend.products.update', [
            "product" => $product,
        ]);
    }
}
