<?php

namespace App\Http\Controllers\Api;

use App\Models\Personal;
use Illuminate\Http\Request;
use App\Http\Requests\PersonalRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\PersonalResource;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $personals = Personal::paginate();

        return PersonalResource::collection($personals);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalRequest $request): Personal
    {
        return Personal::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Personal $personal): Personal
    {
        return $personal;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalRequest $request, Personal $personal): Personal
    {
        $personal->update($request->validated());

        return $personal;
    }

    public function destroy(Personal $personal): Response
    {
        $personal->delete();

        return response()->noContent();
    }
}
