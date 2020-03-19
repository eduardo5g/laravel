<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\RequestStoreUpdateProduct;

class ProductController extends Controller
{
    /**
     * @param \App\Http\Requests\RequestStoreUpdateProduct $request
     * @return \Illuminate\Http\Response
     */
    public function __construct(Request $request)
    {
        //$this->middleware('auth')->only(['create','edit','update','delete']);
        //$this->middleware('auth')->except(['index','show']);
    }
    public function index()
    {
        $title = 'Titulo da página em ProductController::teste';
        // $products = Product::last()->paginate(10);
        $products = Product::paginate(10);
        return view(
            'admin.pages.products.index',
            compact('title', 'products')
        );
    }
    public function show($id)
    {
        // $product =Product::where('id',$id)->first();
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back();
        } else {
            return view('admin.pages.products.show', [
                'product' => $product,
            ]);
        }
    }
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
    }
    public function update($id)
    {
        return "Salvando edição produto de id:{$id}";
    }
    public function create()
    {
        return view('admin.pages.products.create');
    }
    public function store(RequestStoreUpdateProduct $request)
    {
        dd('ok');
        // dd( $request->all());
        // dd( $request->only('name','description'));
        // dd( $request->except('name','description'));
        // dd( $request->name);
        // dd( $request->has('name'));
        // dd( $request->input('name','value Default'));
        if ($request->file('filephoto')->isValid()) {
            // Default name
            // dd( $request->file('filephoto')->store('products'));
            // Personal name
            $nameFile = $request->name . '.' . $request->filephoto->extension();
            dd($request->file('filephoto')->storeAs('products', $nameFile));
        }
    }
    public function delete($id)
    {
        return "Deletando produto de id:{$id}";
    }
}
