<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUpdateProduct;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{

    protected $repository;

    public function __construct(Product $products)
    {
        $this->middleware('auth');

        $this->repository = $products;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->repository->get();

        return view('painel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUpdateProduct  $request)
    {
        $columns = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) {
            $columns['img_url'] = $request->image->store("products");
        }

        $products = $this->repository->create($columns);

        return redirect()
            ->route('products')
            ->with('message', 'Criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (!$product = $this->repository->find($id)) {
            return redirect()
                ->route('products')
                ->with('message', 'Registro não encontrado!');
        }

        return view('painel.products.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($products)
    {
        return view('painel.products.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUpdateProduct  $request, $id)
    {
        if (!$product = $this->repository->find($id)) {
            return redirect()
                ->route('products')
                ->with('message', 'Registro não encontrado!');
        }

        $columns = $request->all();

        if ($request->hasFile('image') && $request->image->isValid()) {

            if (Storage::exists($product->image)) {
                Storage::delete($product->image);
            }

            $columns['img_url'] = $request->image->store("products");
        }

        $product->update($columns);

        return redirect()
            ->back()
            ->with('message', 'Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->repository
            ->where('id', $id)
            ->first();

        if (!$employee) {
            return redirect()
                ->route('products')
                ->with('message', 'Registro não encontrado!');
        }

        $employee->delete();

        return redirect()
            ->route('products')
            ->with('message', 'Deletado com sucesso!');
    }

    public function all(Request $request)
    {

        //$tournaments = DB::table('tournaments')
        //    ->select('tournaments.*', 'games.banner as game_banner')
        //    ->join('games', function ($join) use ($request) {
        //        $join->on('tournaments.game_id', '=', 'games.id')
        //            ->where(function ($query) use ($request) {
        //                if ($request->search) {
        //                    $query->orWhere('games.slug', '=', $request->search);
        //                }
        //            });
        //    })->where(function ($query) use ($request) {
        //        if ($request->date) {
        //            switch ($request->date) {
        //                case 'now':
        //                    $query->whereDay('tournaments.tournament_end', date('d'));
        //                    break;
        //                case 'week':
        //                    $query->whereBetween('tournaments.tournament_end', [\Carbon\Carbon::now()->startOfWeek(), \Carbon\Carbon::now()->endOfWeek()]);
        //                    break;
        //                case 'month':
        //                    $query->whereMonth('tournaments.tournament_end', date('m'));
        //                    break;
        //                default:
        //                    break;
        //            }
        //        }
        //    })->limit($request->limit)->get()->toJson(JSON_PRETTY_PRINT);

        $products = $this->repository->get()->toJson(JSON_PRETTY_PRINT);

        return response($products, 200);
    }

    public function getProduct($id){

        if (!$product = $this->repository->find($id)) {
            return redirect()
                ->route('products')
                ->with('message', 'Registro não encontrado!');
        }

        $product = $product->toJson(JSON_PRETTY_PRINT);

        error_log(print_r($product,1));

        return response($product, 200);
    }
}
