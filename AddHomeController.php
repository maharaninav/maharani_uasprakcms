<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AddHomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('layouts.private.home.index', compact('homes'));
    }

    public function create()
    {
        return view('layouts.private.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'about' => 'required|string',
            'expertise' => 'required|string',
            'image' => 'nullable|image|max:2048', 
        ]);

        $home = new Home();
        $home->about = $request->input('about');
        $home->expertise = $request->input('expertise');

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');

            // Simpan path gambar yang valid untuk diakses
            $home->image = $imagePath;
        }

        $home->save();

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil ditambahkan.');
    }
    public function edit(Home $home)
    {
        return view('layouts.private.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'about' => 'required|string',
            'expertise' => 'required|string',
            'image' => 'nullable|image|max:2048', 
        ]);

        $home->about = $request->input('about');
        $home->expertise = $request->input('expertise');

        // Proses update gambar jika ada
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($home->image) {
                Storage::delete(str_replace('storage', 'public', $home->image));
            }

            $imagePath = $request->file('image')->store('public/images');
            // Simpan path gambar relatif ke dalam model
            $home->image = str_replace('public', 'storage', Storage::url($imagePath));
        }

        $home->save();

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil diperbarui.');
    }


    public function destroy(Home $home)
    {
        // Hapus gambar terkait sebelum menghapus data
        if ($home->image) {
            // Ubah path storage untuk menghapus file
            Storage::delete('public/' . $home->image);
        }

        $home->delete();

        return redirect()->route('home.index')
            ->with('success', 'Data Home berhasil dihapus.');
    }
}
