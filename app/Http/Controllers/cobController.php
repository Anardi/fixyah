<?php

namespace App\Http\Controllers;

use App\Models\cob;
use Illuminate\Http\Request;

class cobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.cob.cob');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cob $cob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cob $cob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cob $cob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cob $cob)
    {
        //
    }
}
