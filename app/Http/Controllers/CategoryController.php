<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Resources\Test\TestResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return TestResource::collection(Category::orderBy('updated_at', 'desc')->get());
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
