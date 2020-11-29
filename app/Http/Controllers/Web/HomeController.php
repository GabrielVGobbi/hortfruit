<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Product $products, Category $categories)
    {
        $this->products = $products;
        $this->categories = $categories;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {

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

            $productsByCategory[] = $all;
        }


        return view('web.products', ['categories_products' => $productsByCategory]);
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

    public function categorias($nome_categoria)
    {

        if (!$categorie = Category::where('url', $nome_categoria)->first()) {
            return redirect()
                ->route('home')
                ->with('message', 'Registro não encontrado!');
        }

        $products = $categorie->products()->get();

        return view('web.categorie', [
            'products' => $products,
            'categorie' => $categorie
        ]);
    }
}
