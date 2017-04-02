<?php

    namespace App\Http\Controllers;

    use App\Repositories\Interfaces\ProductsRepositoryInterface;

    class ProductsController extends Controller {
        private $productsRepo;

        public function __construct(ProductsRepositoryInterface $productsRepo) {
            $this->productsRepo = $productsRepo;
        }

        public function getList()
        {
            return view('items.list');
        }

        public function index()
        {
            try {
                $products = $this->productsRepo->getAllProducts();

                return response($products, 200, ['Content-Type' => 'application/json']);
            } catch(\Exception $ex) {
                return response(['message' => $ex->getMessage()], 400, ['Content-Type' => 'application/json']);
            }
        }
    }