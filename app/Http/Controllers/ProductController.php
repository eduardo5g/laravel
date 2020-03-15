<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Request $request)
    {
        //$this->middleware('auth')->only(['create','edit','update','delete']);
        //$this->middleware('auth')->except(['index','show']);
    }
    public function index(){
        $teste = 'Titulo da página em ProductController::teste';
        $teste2 = [1,2,3,4,5];
        return view('admin.pages.products.index', compact('teste','teste2'));
    }
    public function show($id){
        return "exibindo produto de id:{$id}";
    }
    public function edit($id){
        return view('admin.pages.products.edit', compact('id'));
    }
    public function update($id){
        return "Salvando edição produto de id:{$id}";
    }
    public function create(){
        return view('admin.pages.products.create');
    }
    public function store($id){
        dd( $request->all());
        dd( $request->only('name','description'));
        dd( $request->except('name','description'));
        dd( $request->name);
        dd( $request->has('name'));
        dd( $request->input('name','value Default'));
        if( $request->file('filephoto')->isValid()){
            // Default name
            dd( $request->file('filephoto')->store('products'));
            // Personal name
            $nameFile = $request->name . '.' . $request->filephoto->extesion();
            dd($request->file('filephoto')->storeAs('products',$nameFile));
        }

    }
    public function delete($id){
        return "Deletando produto de id:{$id}";
    }


}
