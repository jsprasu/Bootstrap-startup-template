<?php

    namespace App\Repositories;

    use App\Models\Products;
    use App\Repositories\Interfaces\ProductsRepositoryInterface;

    class ProductsRepository implements ProductsRepositoryInterface {
        private $products;

        public function __construct(
            Products $products
        ) {
            $this->products = $products;
        }

        public function getAllProducts()
        {
            return $this->products->get();
        }
    }