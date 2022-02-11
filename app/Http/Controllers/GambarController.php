<?php

namespace App\Http\Controllers;

use App\Models\Gambar;
use Illuminate\Http\Request;

class GambarController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $nama = time().'.'.request()->file->getClientOriginalExtension();
        $request->file->move(public_path('uploads'), $nama);

        $file = new Gambar();
        $file->nama = $nama;
        $file->save();

        return response()->json([
            'message' => 'Gambar berhasil ditambahkan.',
            'data'    => $file->id,
        ]);
    }
}
