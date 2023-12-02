<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
    public function loginPage()
    {
        return view('login');
    }


    public function registerPage()
    {
        return view('register');
    }

    public function addUser()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new \App\Models\User();

        $data = [
            'username' => $username,
            'password' => $password
        ];

        // Save data to user table
        $userModel->insert($data);

        return view('login', $data);
    }

    public function authUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $userModel = new \App\Models\User();


        $user = $userModel->where('username', $username)->first();

        if($user){
            if($user['password'] == $password){
                $ProductModel = new \App\Models\Product();
                $products = $ProductModel->findAll();

                $data = [
                    'loggedin' => $username,
                    'products' => $products
                ];

                return view('home', $data);
            }else{
                return redirect()->to('/login');
            }
        }else{
            return redirect()->to('/login');
        }
    }

    public function logout(){
        $ProductModel = new \App\Models\Product();
        $products = $ProductModel->findAll();
        $data = [
            'products' => $products
        ];
        return view('home', $data);
    }

    public function showOrder() {
        $username = $_GET['loggedin'];
    
        $userModel = new \App\Models\User();
        $userId = $userModel->where('username', $username)->first()['user_id'];
    
        $orderModel = new \App\Models\Order();
        $ProductModel = new \App\Models\Product();
    
        // Menggunakan query builder untuk mendapatkan produk berdasarkan user_id
        $products = $ProductModel
            ->select('product.*')
            ->join('order', 'product.product_id = order.product_id')
            ->where('order.user_id', $userId)
            ->get()
            ->getResult();
    
        $data = [
            'products' => $products,
            'loggedin' => $username
        ];
        return view('order', $data);
    }
}
