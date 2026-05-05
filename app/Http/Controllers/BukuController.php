<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class BukuController extends Controller
{
    public function index()
    {
        // Eager loading 'kategori' agar efisien
        $data_buku = Buku::with('kategori')->get();
        return view('pages.buku', compact('data_buku'));
    }

    public function create()
    {
        // Ambil data kategori untuk dropdown
        $categories = Kategori::all();
        return view('pages.buku.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode'        => 'required|unique:buku,kode|max:20',
            'judul'       => 'required|max:100',
            'pengarang'   => 'required|max:100',
            'kategori_id' => 'exists:idkategori,id',
        ]);

        Buku::create($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id);
        $categories = Kategori::all();
        return view('pages.buku.edit', compact('buku', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode'        => 'required','max:20',Rule::unique('buku','kode')->ignore($id, 'idbuku'),
            'judul'       => 'required|max:100',
            'pengarang'   => 'required|max:100',
            'kategori_id' => 'exists:idkategori,id',
        ]);

        $buku = Buku::findOrFail($id);
        $buku->update($request->all());
        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui');
    }

    public function destroy($id)
    {
        $buku = Buku::findOrFail($id);
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus');
    }
}
=======

use Illuminate\Http\Request;
use App\Models\Buku;
use App\Models\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $buku = Buku::with('kategori')->get();
    return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('buku.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'kode'       => 'required|max:20',
        'judul'      => 'required|max:500',
        'pengarang'  => 'required|max:200',
        'idkategori' => 'required|exists:kategori,idkategori',
    ]);
    Buku::create($request->all());
    return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
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
    public function edit(Buku $buku)
    {
        $kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
        'kode'       => 'required|max:20',
        'judul'      => 'required|max:500',
        'pengarang'  => 'required|max:200',
        'idkategori' => 'required|exists:kategori,idkategori',
    ]);
    $buku->update($request->all());
    return redirect()->route('buku.index')->with('success', 'Buku berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();
        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }
}
>>>>>>> 572453d98a59b3961920483a9425a2b3ae6aa061
