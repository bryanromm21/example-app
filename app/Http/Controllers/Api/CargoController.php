<?php

namespace App\Http\Controllers\Api;

use App\Models\Cargo;
use Illuminate\Http\Request;
use App\Http\Requests\CargoRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\CargoResource;

class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cargos = Cargo::paginate();

        return CargoResource::collection($cargos);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CargoRequest $request): Cargo
    {
        return Cargo::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Cargo $cargo): Cargo
    {
        return $cargo;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CargoRequest $request, Cargo $cargo): Cargo
    {
        $cargo->update($request->validated());

        return $cargo;
    }

    public function destroy(Cargo $cargo): Response
    {
        $cargo->delete();

        return response()->noContent();
    }
}
