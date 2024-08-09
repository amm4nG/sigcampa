<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::all();
        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $deskripsi = $request->deskripsi;
        $dom = new DOMDocument();
        $dom->loadHTML($deskripsi, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
            $image_name = '/upload/' . time() . $key . '.png';
            file_put_contents(public_path() . $image_name, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }
        $deskripsi = $dom->saveHTML();
        Artikel::create([
            'judul' => $request->judul,
            'deskripsi' => $deskripsi,
        ]);

        return back()->with([
            'pesan' => 'Artikel berhasil ditambahkan',
        ]);
    }

    public function show($id){
        $artikel = Artikel::findOrFail($id);
        return view('artikel', compact('artikel'));
    }

    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);

        $deskripsi = $request->deskripsi;

        $dom = new DOMDocument();
        $dom->loadHTML($deskripsi, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            // Check if the image is a new one
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = '/upload/' . time() . $key . '.png';
                file_put_contents(public_path() . $image_name, $data);

                $img->removeAttribute('src');
                $img->setAttribute('src', $image_name);
            }
        }
        $deskripsi = $dom->saveHTML();

        $artikel->update([
            'judul' => $request->judul,
            'deskripsi' => $deskripsi,
        ]);

        return back()->with([
            'pesan' => 'Artikel berhasil diupdate',
        ]);
    }

    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);

        $dom = new DOMDocument();
        $dom->loadHTML($artikel->deskripsi, 9);
        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $src = $img->getAttribute('src');
            $path = Str::of($src)->after('/');

            if (File::exists($path)) {
                File::delete($path);
            }
        }

        $artikel->delete();
        return back()->with([
            'pesan' => 'Artikel berhasil dihapus',
        ]);
    }
}
