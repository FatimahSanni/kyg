<?php

namespace App\Http\Controllers;

use App\Models\Official;
use Illuminate\Http\Request;

class OfficialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('officials.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $official = new Official();
        $official->create($request->all());
        if ($official->save()) {
            dd('Saved!');
//            notify()->flash('<i class="fa fa-thumbs-up"></i>', 'success', [
//                'text' => 'Official added successfully'
//            ]);
//            return redirect('/officials/'.$official->id);
        } else {
            notify()->flash('<i class="fa fa-frown-o"></i>', 'error', [
                'text' => 'Something went wrong! Official could not be added. Please try again'
            ]);
            return back()->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Official $official
     * @return \Illuminate\Http\Response
     */
    public function show(Official $official)
    {
        $name = $official->name;
        return view('officials.show', compact('name'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Official $official
     * @return \Illuminate\Http\Response
     */
    public function edit(Official $official)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Official $official
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Official $official)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Official $official
     * @return \Illuminate\Http\Response
     */
    public function destroy(Official $official)
    {
        //
    }
}
