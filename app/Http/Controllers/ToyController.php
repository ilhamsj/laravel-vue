<?php

namespace App\Http\Controllers;

use App\Http\Resources\ToyResource;
use App\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    public function index()
    {
        return ToyResource::collection(Toy::orderBy('updated_at', 'desc')->paginate(10));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'color' => ['required'],
        ]);
        $item = Toy::create($request->all());
        return new ToyResource($item);
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
        $request->validate([
            'name' => ['required'],
            'color' => ['required'],
        ]);

        $item = Toy::find($id);
        $item->update($request->all());
        return new ToyResource($item);
    }

    public function destroy($id)
    {
        $item = Toy::find($id);
        $item->delete();
        return new ToyResource($item);
    }
}
