<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class BaseCrudController extends Controller
{
    protected $model;

    public function index()
    {
        return response()->json($this->model::all(), 200);
    }

    public function show($id)
    {
        $item = $this->model::find($id);
        if (!$item) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        return response()->json($item, 200);
    }

    public function store(Request $request)
    {
        $item = $this->model::create($request->all());
        return response()->json($item, 201);
    }

    public function update(Request $request, $id)
    {
        $item = $this->model::find($id);
        if (!$item) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        $item->update($request->all());
        return response()->json($item, 200);
    }

    public function destroy($id)
    {
        $item = $this->model::find($id);
        if (!$item) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        $item->delete();
        return response()->json(['message' => 'Eliminado'], 200);
    }
}
