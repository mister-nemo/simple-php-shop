<?php

namespace App\Http\Controllers\Products;

use App\Products;
use App\ProductsImages;
use App\ProductsCategories;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $Products = null;
    private $ProductsImages = null;
    private $ProductsCategories = null;
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Products = new Products();
        $this->ProductsImages = new ProductsImages();
        $this->ProductsCategories = new ProductsCategories();
    }

    /**
     * Return products list.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $prod = collect(
            $this->Products->list()
        )->keyBy('id');

        $prod_varat = collect(
            $this->Products->group_and_join('variation', 'id', 'variation_list')
        )->keyBy('variation');

        $prod_cat = collect(
            $this->ProductsCategories->group_and_join('product_id', 'category_id', 'category_list')
        )->keyBy('product_id');

        $prod_img = collect(
            $this->ProductsImages->group_and_join('product_id', 'path', 'image_list')
        )->keyBy('product_id');

        return array_merge_by_int_key($prod, $prod_varat, $prod_cat, $prod_img);
    }
}
