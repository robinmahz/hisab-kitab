<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ImageTraits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    use ImageTraits;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', Auth::id())->first();
        return view('hisabkitab.account.index', compact('user'));
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
        return view('hisabkitab.account.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = User::where('id', Auth::id())->first();
        // deleting the existing file
        if (isset($user->profile)) {
            $this->delete('/images', $user->getRawOriginal('profile'));
        }

        //if only one fiend in given
        if ($request->file('profile') != null) {
            $request = [
                'profile' => $this->set('/images', $request->file('profile')),
                'bio' => $request->bio,
            ];
        } else {
            $request = $request->all();
        }

        $user->update($request);
        return Redirect('/account');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
