<?php

namespace App\Http\Controllers\Admin;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormRequest;

class PropertyController extends Controller
{
   
    public function index()
    {
        return view('admin.properties.index' ,[
            'properties' => Property::orderBy('created_at','desc')->paginate(25)
        ]);
    }
    public function create()
    {
        $property = new Property();
        return view('admin.properties.form' ,[
            'property' => new Property()
        ]);
    }



    public function store(PropertyFormRequest $request)
    {
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
