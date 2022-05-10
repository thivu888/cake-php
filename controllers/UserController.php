<?php

class UserController extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->loadModel('userModel');
        $this->userModel = new userModel;
    }

    public function index()
    {
        $products = $this->productModel->getAll();
        return $this->view('fontend.products.index', [
            "products" => $products,
        ]);
    }

    public function show()
    {
        $id = $_GET['id'];
        $product = $this->productModel->getById($id);
        return $this->view('fontend.products.show', [
            "product" => $product,
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

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $password = isset($_POST['password']) ? $_POST['password'] : "";
            if (!$username || !$password) {
                if ($_SERVER["HTTP_REFERER"])
                    return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            $user = $this->userModel->login($username, $password);
            if ($user === null) {
                if ($_SERVER["HTTP_REFERER"])
                    return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            if (!$user['status']) {
                if ($_SERVER["HTTP_REFERER"])
                    return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            $_SESSION['user'] = $user['data'];
            if ($_SERVER["HTTP_REFERER"])
                return header("Location: " . $_SERVER["HTTP_REFERER"]);
            return header("Location: index.php ");
        } else {
            if ($_SERVER["HTTP_REFERER"])
                return header("Location: " . $_SERVER["HTTP_REFERER"]);
            return header("Location: index.php ");
        }
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = isset($_POST['username']) ? $_POST['username'] : "";
            $password = isset($_POST['password']) ? $_POST['password'] : "";
            $email = isset($_POST['email']) ? $_POST['email'] : "";
            $phone = isset($_POST['phone']) ? $_POST['phone'] : "";
            $confirmpassword = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : "";
            if (!$username || !$password || !$confirmpassword || !$phone || !$email) {
                if ($_SERVER["HTTP_REFERER"])
                    return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            $user = $this->userModel->register($username, $password, $confirmpassword,$email,$phone);
            if ($user === null) {
                if ($_SERVER["HTTP_REFERER"])
                    return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }   
            $user = $this->login($user, $password);
            if ($user === null) {
                if ($_SERVER["HTTP_REFERER"])
                return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            if (!$user['status']) {
                if ($_SERVER["HTTP_REFERER"])
                return header("Location: " . $_SERVER["HTTP_REFERER"]);
            }
            $_SESSION['user'] = $user['data'];
            if ($_SERVER["HTTP_REFERER"])
            return header("Location: " . $_SERVER["HTTP_REFERER"]);
            return header("Location: index.php ");
        } else {
            if ($_SERVER["HTTP_REFERER"])
                return header("Location: " . $_SERVER["HTTP_REFERER"]);
            return header("Location: index.php ");
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        return header("Location: index.php ");
    }
}
