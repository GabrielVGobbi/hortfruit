<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiProductsController extends Controller
{
    protected $repository;

    public function __construct(Product $products, Category $categories)
    {
        $this->repository = $products;
        $this->categories = $categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $products = Product::get()->toJson(JSON_PRETTY_PRINT);

        foreach ($products as $product) {

            $product['price_formater'] = $product->price;

        }

        return response($products, 200);
    }

    public function homeCategorie(){

        $categories = DB::select('SELECT * FROM categories WHERE id NOT IN (4,5,6,7,8,9) ORDER BY `order` DESC');

        if (!$categories) {
            return redirect()
                ->route('')
                ->with('message', 'Registro não encontrado!');
        }

        $productsByCategory = [];

        $categories[] = (object)[
            'name' => 'Empório e Mercearia',
            'id' => '9',
            'color' => '#942840',
            'url' => 'mercearia-e-emporio'
        ];

        $categories[] = (object)[
            'name' => 'Orgânicos',
            'id' => '5,6,7,8',
            'color' => '#A07B37',
            'url' => 'organicos'
        ];

        foreach ($categories as $category) {

            $all = [
                'categorie_name' => $category->name,
                'ulr' => $category->url,
                'products' => (object) $this->getProductsByCategory($category->id),
                'color' => $category->color
            ];

            $productsByCategory[] = (object) $all;
        }


        return response($productsByCategory, 200);

    }

    public function getProductsByCategory($category_id)
    {

        $products = [];

        $categorie = $this->categories->wherein('id', [$category_id])->first();

        if (!$categorie) {
            return [];
        }

        $products = $categorie->products()->get();


        foreach ($products as $product) {

            $product['price_formater'] = number_format($product->price, 2, ',', '.');
        }

        return $products;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\teste  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = $this->repository->where('id', $id)->first();

        if (!$product) {
            return response()->json(['message' => 'Product Not Found'], 404);
        }

        $product['price_formater'] = 'R$ '.number_format($product->price, 2, ',', '.'). ' / ' . $product->type;

        $product->toJson(JSON_PRETTY_PRINT);

        return response($product, 200);
    }


}
