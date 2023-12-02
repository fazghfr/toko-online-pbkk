<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function add($id)
    {
        if (!isset($_POST['loggedin'])) {
            return redirect()->to('/' . '?notification=' . urlencode('Login First!'));
        }
        $loggedin = $_POST['loggedin'];

        $userModel = new \App\Models\User();
        $user = $userModel->where('username', $loggedin)->first();
        $userId = $user['user_id'];

        $ProductModel = new \App\Models\Product();
        $product = $ProductModel->find($id);

        $OrderModel = new \App\Models\Order();
        $OrderModel->insert([
            'product_id' => $product['product_id'],
            'user_id' => $userId
        ]);

        $data = [
            'loggedin' => $loggedin
        ];

        // Redirect to home with the added notification query string and passing data
        return redirect()->to('/?notification=' . urlencode('added!'))->with('data', $data);
    }

}
