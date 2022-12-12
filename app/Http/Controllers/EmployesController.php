<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class EmployesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employes = Employe::all();
        return view('employes.index')->with([
            'employes' => $employes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request, [
            'registration_number' => 'required|numeric',
            'full_name' => 'required',
            'depart'    => 'required',
            'hire_date' => 'required',
            'phone'     => 'required',
            'address'   => 'required',
            'city'      => 'required',
        ]);

        /*Employe::create($request->except('_token'));
        return redirect()->route('employes.index')->with([
            'success' => 'employe added suuccefully' 
        ]);

         Employe::create($request->except(['_token']));
        return redirect()->route("employes.index")->with([
            "success" => "Employe added successfully"
        ]);   */

        $employe = new Employe();

        $employe->registration_number = $request->input('registration_number');
        $employe->full_name      = $request->input('full_name');
        $employe->depart         = $request->input('depart');
        $employe->hire_date      = $request->input('hire_date');
        $employe->phone          = $request->input('phone');
        $employe->address        = $request->input('address');
        $employe->city           = $request->input('city');

        $save = $employe->save();
        if($save){
            return redirect()->route("employes.index")->with([
                "success" => "Employe added successfully"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
