<?php

namespace App\Http\Controllers;

use App\Models\HisabKitab;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hisabKitabs = Auth::user()->admin == 1 ? HisabKitab::all() : HisabKitab::where('user_id', Auth::id())->get();
        $income = 0;
        $expense = 0;
        $lend = 0;
        $borrow = 0;
        foreach ($hisabKitabs as $hisabKitab) {
            $amount = $hisabKitab->amount;
            $type = $hisabKitab->type;
            if ($type == 'income') {
                $income += $amount;
            } elseif ($type == 'expense') {
                $expense += $amount;
            } elseif ($type == 'lend') {
                $lend += $amount;
            } else {
                $borrow += $amount;
            }
        }
        return view('dashboard')->with(compact(['income', 'expense', 'lend', 'borrow']));
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
