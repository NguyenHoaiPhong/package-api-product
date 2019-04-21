<?php

namespace Foostart\Product\Controlers\Admin;

use App\Http\Controllers\Controller;
use Foostart\Product\Models\Product;
use Illuminate\Http\Request;

use URL,
    Route,
    Redirect;

class ProductUserController extends Controller
{
    public $data = array();
    public function __construct() {

    }

    public function index(Request $request)
    {

        $obj_product = new Product();
        $products = $obj_product->get_products();
        $this->data = array(
            'request' => $request,
            'products' => $products
        );
        return view('product::product.index', $this->data);
    }

}