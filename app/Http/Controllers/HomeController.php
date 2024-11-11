<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        $produk = Produk::all();
        return view('index', compact('produk'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Produk::create($request->all());

        return redirect()->route('index.index');
    }

    public function destroy(Produk $id)
    {
        $id->delete();

        return redirect()->route('index.index');
    }

    public function edit(Produk $id)
    {
        //
        return view('edit', compact('id'));
    }
    
    public function update(Request $request, string $id){
        $product = Produk::findOrFail($id);

        $product->update([
            'nama_depan'         => $request->nama_depan,
            'nama_belakang'   => $request->nama_belakang
        ]);
 
        return redirect()->route('index.index');
    }
}
