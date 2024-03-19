<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('albums.index', compact('albums'));
    }

    public function create()
    {
        return view('albums.create');
    }

    public function show(Album $album)
    {
        // Menggunakan model binding, tidak perlu mencari ulang dengan findOrFail
        if (!$album) {
            abort(404); // Atau handle sesuai kebutuhan Anda
        }

        return view('albums.show', compact('album'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'cover_image' => 'required|image|max:1999',
            'description' => 'required'
        ]);

        // Upload dan simpan gambar
        $fileNameToStore = $this->uploadImage($request->file('cover_image'));

        // Buat album baru
        Album::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'cover_image' => $fileNameToStore,
        ]);

        return redirect('/albums')->with('success', 'Album created');
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);

        // Hapus gambar terkait sebelum menghapus album
        $this->deleteImage($album->cover_image);

        // Hapus album
        $album->delete();

        return redirect('/albums')->with('success', 'Album deleted');
    }

    // Fungsi untuk mengupload gambar
    private function uploadImage($image)
    {
        $filenameWithExt = $image->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $image->getClientOriginalExtension();
        $fileNameToStore = $filename . '_' . time() . '.' . $extension;

        $path = $image->storeAs('public/album_covers', $fileNameToStore);

        return $fileNameToStore;
    }

    // Fungsi untuk menghapus gambar
    private function deleteImage($filename)
    {
        if ($filename != 'noimage.jpg') {
            Storage::delete('public/album_covers/' . $filename);
        }
    }
}
