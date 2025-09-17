<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::with('children')
            ->whereNull('parent_id')
            ->orderBy('precedence')
            ->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'precedence' => 'integer',
            'image' => 'nullable|string',
            'is_active' => 'boolean',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        $category = Category::create($data);

        return response()->json($category->load('children'), 201);
    }

    public function show(Category $category)
    {
        return $category->load('children');
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'string',
            'precedence' => 'integer',
            'image' => 'nullable|string',
            'is_active' => 'boolean',
            'description' => 'nullable|string',
            'parent_id' => 'nullable|exists:categories,id'
        ]);

        $category->update($data);

        return response()->json($category->load('children'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
