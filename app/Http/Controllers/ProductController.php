<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return("Barcha mahsulotlar");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return("Yangi mahsulot qoshish");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "Mahsulot ID:".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function search($request)
    // {
    //     return "Qidiruv Narijalari";
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    { 
        return "Mahsulot ochirildi ID:".$id;
    
    }

    public function search(Request $request)
    {
        return "Qidiruv natijalari".$request;
    
    }

}
