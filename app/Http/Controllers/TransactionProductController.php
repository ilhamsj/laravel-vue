<?php

namespace App\Http\Controllers;

use App\Http\Resources\Test\TestResource;
use App\TransactionProduct;
use Illuminate\Http\Request;

class TransactionProductController extends Controller
{
    public function index()
    {
        return TestResource::collection(TransactionProduct::orderBy('updated_at', 'desc')->get());
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
        return new TestResource(TransactionProduct::find($id));
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
