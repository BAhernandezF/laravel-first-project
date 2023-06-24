<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\category\PutRequest;
use App\Http\Requests\category\StoreRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\ValidatedInput;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */

    


    public function index()
    {
        $categories = category::Paginate(2);
        return view('dashboard.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $category = new Category();

        echo view("dashboard/category/create", compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

        category::create($request->validated());

        return to_route('category.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        return view('dashboard.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {

        echo view("dashboard/category/edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, category $category)
    {

        $category->update($request->validated());
        return to_route('category.index')->with('status', 'Registro Actualizado.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        $category->delete();

        return to_route('category.index')->with('status', 'Registro eliminado');
    }
}
