<?php

namespace App\Http\Controllers\Products;

use App\Categories;
use App\ProductsCategories;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    private $Categories = null;
    private $ProductsCategories = null;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Categories = new Categories();
        $this->ProductsCategories = new ProductsCategories();
    }

    /**
     * Return categories list.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $cat = collect(
            $this->Categories->list()
        )->keyBy('id');

        $count = collect(
            $this->ProductsCategories->count_and_group('product_id', 'category_id')
        )->keyBy('category_id');

        $cat_prod = collect(
            $this->ProductsCategories->group_and_join('category_id', 'product_id')
        )->keyBy('category_id');

        return array_merge_by_int_key($cat, $count);
    }
}
