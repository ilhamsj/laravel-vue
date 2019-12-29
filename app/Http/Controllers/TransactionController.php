<?php

namespace App\Http\Controllers;

use App\Http\Resources\Test\TestResource;
use App\Http\Resources\Transaction\TransactionCollection;
use App\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
    {
        return new TransactionCollection(Transaction::orderBy('updated_at', 'desc')->get());
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
        return new TestResource(Transaction::find($id));
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
