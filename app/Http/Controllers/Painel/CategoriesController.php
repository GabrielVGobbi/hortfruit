<?php

namespace App\Http\Controllers\Painel;

use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{

    protected $repository;

    public function __construct(Category $categories)
    {
        $this->middleware('auth');

        $this->repository = $categories;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->repository->get();

        return view('painel.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('painel.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $columns = $request->all();

        $categories = $this->repository->create($columns);

        return redirect()
            ->route('categories')
            ->with('message', 'Criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\categories  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = $this->repository->where('id', $id)->first();

        if (!$categories) {
            return redirect()
                ->route('categoriess')
                ->with('message', 'Registro não encontrado!');
        }

        return view('painel.categoriess.show', [
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit($categories)
    {
        return view('painel.categories.create');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $columns = $request->all();

        $categories = $this->repository->where('id', $id)->first();

        if (!$categories) {
            return redirect()
                ->route('categoriess')
                ->with('message', 'Registro não encontrado!');
        }

        $categories->update($columns);

        return redirect()
            ->back()
            ->with('message', 'Atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = $this->repository
            ->where('id', $id)
            ->first();

        if (!$employee) {
            return redirect()
                ->route('categoriess')
                ->with('message', 'Registro não encontrado!');
        }

        $employee->delete();

        return redirect()
            ->route('categoriess')
            ->with('message', 'Deletado com sucesso!');
    }
}

