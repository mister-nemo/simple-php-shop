<?php

namespace App\Http\Controllers\Products;

use App\Products;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $Products = null;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Products = new Products();
    }

    /**
     * Return products list.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return $this->Products->list();
    }
}
