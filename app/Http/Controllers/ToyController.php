<?php

namespace App\Http\Controllers;

use App\Http\Resources\ToyResource;
use App\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index()
    {
        return ToyResource::collection(Toy::all());
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
        return new ToyResource(Toy::find($id));
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
