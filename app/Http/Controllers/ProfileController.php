<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::latest()->paginate(5);
        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('profiles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles',
            'phone' => 'nullable',
            'address' => 'nullable',
            'bio' => 'nullable'
        ]);
        
        Profile::create($request->all());
        
        return redirect()->route('profiles.index')
            ->with('success', 'Profile created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::findOrFail($id);
        return view('profiles.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::findOrFail($id);
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:profiles,email,' . $id,
            'phone' => 'nullable',
            'address' => 'nullable',
            'bio' => 'nullable'
        ]);
        
        $profile->update($request->all());
        
        return redirect()->route('profiles.index')
            ->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        
        return redirect()->route('profiles.index')
            ->with('success', 'Profile deleted successfully.');
    }
}
