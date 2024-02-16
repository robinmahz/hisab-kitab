<?php

namespace App\Http\Controllers;

use App\Models\HisabKitab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HisabKitabController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::id() == 1)
            $hisabKitabs = HisabKitab::all();
        else
            $hisabKitabs = HisabKitab::where('user_id', Auth::id())->get();

        return view('hisabkitab.index', compact('hisabKitabs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hisabkitab.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HisabKitab::create([
            'amount' => $request->amount,
            'particular' => $request->particular,
            'type' => $request->type,
            'user_id' => Auth::id(),
        ]);
        return redirect('/hisabkitab');
    }

    /**
     * Display the specified resource.
     */
    public function show(HisabKitab $hisabKitab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HisabKitab $hisabKitab)
    {
        return view('hisabkitab.edit', compact('hisabKitab'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HisabKitab $hisabKitab)
    {
        $hisabKitab->update($request->all());
        return redirect('/hisabkitab');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hisabKitab = HisabKitab::find($id);
        $hisabKitab->delete();
        return redirect('/hisabkitab');
    }
}
