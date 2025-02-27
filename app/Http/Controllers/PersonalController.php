<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use App\Models\Cargo;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PersonalRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $personals = Personal::paginate();

        return view('personal.index', compact('personals'))
            ->with('i', ($request->input('page', 1) - 1) * $personals->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $personal = new Personal();
        $cargos = cargo ::pluck ('id','cargos');
        return view('personal.create', compact('personal','cargos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PersonalRequest $request): RedirectResponse
    {
        Personal::create($request->validated());

        return Redirect::route('personals.index')
            ->with('success', 'Personal created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $personal = Personal::find($id);

        return view('personal.show', compact('personal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $personal = Personal::find($id);

        return view('personal.edit', compact('personal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PersonalRequest $request, Personal $personal): RedirectResponse
    {
        $personal->update($request->validated());

        return Redirect::route('personals.index')
            ->with('success', 'Personal updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Personal::find($id)->delete();

        return Redirect::route('personals.index')
            ->with('success', 'Personal deleted successfully');
    }
}
