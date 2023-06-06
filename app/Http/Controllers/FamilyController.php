<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Family;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {$families = Family::all();
    
        return view('family.index', compact('families'));
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $family = Family::create();
      
       return view('students.create', compact('family'));
   }
    

    /**
     * Store a newly created resource in storage.
     */
    public function createwithaddress(Request $request)
    {
        $adress = Adress::pluc('name', 'id');
        return view('students.createwithaddress', compact('$adress'));
    }




    public function store(){ {
        $validated = $request->validate([
            'full_name' => 'required',
            'phone' => 'required|exists:groups,id',
            'init' => 'required',
            'id_address'=>'required|exists:adress,id',
        ]);

        $family = new Family();
        $family->full_name = $validated['full_name'];
        $family->phone = $validated['phone'];
        $family->init = $validated['init'];
        $family->id_address = $validated['id_address'];
        // $student->course_id = $validated['course_id'];
        $family->save();

        return redirect()->route('family.index')->with('success', 'familyh created successfully');
    }




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
