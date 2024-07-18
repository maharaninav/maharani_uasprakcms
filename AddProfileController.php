<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddProfileController extends Controller
{

    public function index()
    {
        $profiles = Profile::all();
        return view('layouts.private.profile.index', compact('profiles'));
    }


    public function create()
    {
        return view('layouts.private.profile.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'education' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'passion' => 'required|string',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profile = new Profile();
        $profile->education = $request->input('education');
        $profile->passion = $request->input('passion');

        if ($request->hasFile('image')) {
            $profile->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('image2')) {
            $profile->image2 = $request->file('image2')->store('images', 'public');
        }

        $profile->save();

        return redirect()->route('profile.index')
            ->with('success', 'Profile data successfully added.');
    }


    public function edit(Profile $profile)
    {
        return view('layouts.private.profile.edit', compact('profile'));
    }


    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'education' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'passion' => 'required|string',
            'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $profile->education = $request->input('education');
        $profile->passion = $request->input('passion');

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($profile->image);
            $profile->image = $request->file('image')->store('images', 'public');
        }

        if ($request->hasFile('image2')) {
            Storage::disk('public')->delete($profile->image2);
            $profile->image2 = $request->file('image2')->store('images', 'public');
        }

        $profile->save();

        return redirect()->route('profile.index')
            ->with('success', 'Profile data successfully updated.');
    }


    public function destroy(Profile $profile)
    {
        Storage::disk('public')->delete($profile->image);
        Storage::disk('public')->delete($profile->image2);
        $profile->delete();

        return redirect()->route('profile.index')
            ->with('success', 'Profile data successfully deleted.');
    }
}
