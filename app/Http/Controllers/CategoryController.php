<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = (new Category())->allCategory();

        return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("category.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {

            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->status = $request->status;
            if ($category->save()) {
                return redirect()->route('categories');
            } else {
                dd("Desculpe, houve algum erro ao inserir");
            }
        } catch (\Throwable $th) {
            dd("Desculpe, houve algum erro ao inserir");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //para listar categoria na tela product
        $categories = (new Category())->activeCategory();

        $category = (new Category())->findOrFail($id);

        return view('category.edit', compact('category', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {

            $category = (new Category())->findOrFail($id);
            $category->name = $request->name;
            $category->description = $request->description;
            $category->status = $request->status;
            if ($category->save()) {
                return redirect()->route('categories');
            } else {
                dd("Houve um erro ao editar");
            }
        } catch (\Throwable $th) {
            dd("Houve um erro ao editar");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Category::destroy($id);
            return redirect()->route('categories');
        } catch (\Throwable $th) {
            dd("Houve um erro ao excluir");
        }
    }
}
