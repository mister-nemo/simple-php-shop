<?php

namespace App\Http\Controllers\Products;

use App\Categories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    private $Categories = null;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Categories = new Categories();
    }

    /**
     * Return categories list.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        return $this->Categories->list();
    }
}
