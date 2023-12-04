<?php

namespace App\Http\Controllers;

use App\Models\Showroom;
use App\Http\Requests\StoreShowroomRequest;
use App\Http\Requests\UpdateShowroomRequest;

class ShowroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('showroom.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreShowroomRequest $request)
    {
        $this->validate($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(Showroom $showroom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Showroom $showroom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShowroomRequest $request, Showroom $showroom)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Showroom $showroom)
    {
        //
    }
}
