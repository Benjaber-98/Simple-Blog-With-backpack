<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{


    /**
     * Display the specified resource.
     *
     * @param $id
     * @return Category
     */
    public function show(Category $category)
    {
        $posts = $category->posts()->paginate(9);

        return view('category', compact(['category', 'posts']));
    }

}
