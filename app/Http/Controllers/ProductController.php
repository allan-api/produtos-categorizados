<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = (new Product())->index();
        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = (new Category())->activeCategory();
        return view('product.create', compact('categories'));
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
            $product = new Product();
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category;
            if ($product->save()) {
                return redirect()->route('products');
            } else {
                dd("Desculpe, houve algum erro ao inserir");
            }
        } catch (\Throwable $th) {
            dd("Desculpe, houve algum erro ao inserir");
        }
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

        $product = (new Product())->findOrFail($id);

        return view('product.edit', compact('product', 'categories'));
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

            $product = (new Product())->findOrFail($id);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->category_id = $request->category;
            if ($product->save()) {
                return redirect()->route('products');
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

            Product::destroy($id);
            return redirect()->route('products');
        } catch (\Throwable $th) {
            dd("Houve um erro ao excluir");
        }
    }
}
