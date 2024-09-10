<?php

namespace Modules\Shop\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Shop\App\Models\Category;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Category::all();
        return view('shop::page.home',['title'=>'index']);
    
    }

    public function home()
    {
        $products = Category::all();
        return view('shop::page.home',['title'=>'Home']);
    }

    public function toko(){
        return view('shop::page.toko');
    }

    public function transaksi()
    {
        $products = Category::all();
        return view('shop::page.transaksi',['title'=>'Transaksi']);
    }

    public function kontak(){
        return view('shop::page.kontak');
    }

    public function checkout(){
        return view('shop::page.checkOut');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('shop::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request): RedirectResponse
    // {
    //     //
    // }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('shop::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('shop::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request, $id): RedirectResponse
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
