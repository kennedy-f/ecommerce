<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Facade\FlareClient\Http\Response;

class CartController extends Controller {

    public function index() {
        return response()->json($this->cart, 200);
    }

    public function store($id) {
        $products = new Products();
        $product = $products->where('id', $id)->first();

        if (session()->has("cart.products.$id")){
            $qntd = session("cart.products.$id.qntd") + 1 ;
            $total = $product->priceper * $qntd;
            session(["cart.products.$id" => $product->toArray()]);
            session(["cart.products.$id.qntd" => $qntd]);
            session(["cart.products.$id.total" => $total]);
        } else {
            session(["cart.products.$id" => $product->toArray()]);
            session(["cart.products.$id.qntd" =>  1]);
            session(["cart.products.$id.total" => $product->priceper]);
        }

        $cart_total = 0 ;
        foreach ( session('cart.products') as $cart_iten ){
            $cart_total = $cart_iten['total'] + $cart_total;
        }
        session(['cart.total' => $cart_total]);
        session(['cart.quantity' => sizeof(session('cart.products'))]);
        return response()->json(session('cart')); 
        // to-do criar view
        // return view("");

    }

    public function delete (Response $response){
        return response()->json($this->cart, 200);
    }
    public function addMoreItens ($id, $qntd){
        return response()->json($this->cart, 200);
    }
}
