<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('dashboard.category.all', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('dashboard.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'category name is required.',
            'name.unique' => 'category name must be unique.',
            'name.min' => 'category name must be at least 4 characters.',
            'name.max' => 'category name may not be greater than2 55 characters.',
            'status.required' => 'status field is required.',
        ];

        $request->validate([
            'name' => 'required|unique:categories|min:4|max:255',
            'status' => 'required',
        ], $messages);
        $data = $request->except('_token');
        $data['slug'] = Str::slug($request->input('name'), '-');
        dd($data);
        Category::create($data);
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findorFail($id);
        return view('dashboard.category.edit', compact( 'category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'name.required' => 'category name is required.',
            'name.unique' => 'category name must be unique.',
            'name.min' => 'category name must be at least 4 characters.',
            'name.max' => 'category name may not be greater than2 55 characters.',
            'status.required' => 'status field is required.',
        ];

        $request->validate([
            'name' => 'required|unique:categories|min:4|max:255',
            'status' => 'required',
        ], $messages);
        $data = $request->except('_token');
        Category::create($data);
        return redirect()->back()->with('success', 'Category added successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
