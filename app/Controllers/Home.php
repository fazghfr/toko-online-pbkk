<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        
        $ProductModel = new \App\Models\Product();
        $products = $ProductModel->findAll();
        $data = [
            'products' => $products
        ];

        $passeddata = session('data', []);

        if (!empty($passeddata)) {
            $data = array_merge($data, $passeddata);
        }

        return view('home', $data);
    }
}
