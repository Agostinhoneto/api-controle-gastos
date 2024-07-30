<?php

namespace App\Http\Controllers;

use App\Models\Despesas;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDespesasRequest;
use App\Http\Requests\UpdateDespesasRequest;

class DespesasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDespesasRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Despesas $despesas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Despesas $despesas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDespesasRequest $request, Despesas $despesas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Despesas $despesas)
    {
        //
    }
}
