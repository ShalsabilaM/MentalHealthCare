<?php

namespace App\Http\Controllers;

// Menggunakan nama model PascalCase sesuai konvensi Laravel
use App\Models\Artikel;
use App\Models\User; // Diperlukan untuk relasi author
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    /**
     * Menampilkan daftar semua artikel.
     */
    public function index()
    {
        // Mengambil data artikel dengan relasi 'author' untuk menampilkan nama penulis
        // Diurutkan berdasarkan tanggal publish terbaru, dan menggunakan pagination
        $artikels = Artikel::with('author')->latest('tanggal_publish')->paginate(10);

        // Mengembalikan view 'artikel.index' dengan data artikel
        return view('artikel.index', compact('artikels'));
    }

    /**
     * Menampilkan form untuk membuat artikel baru.
     */
    public function create()
    {
        // Mengambil semua user untuk ditampilkan sebagai pilihan author di form
        $authors = User::all();
        
        // Mengembalikan view 'artikel.create' dengan data authors
        return view('artikel.create', compact('authors'));
    }

    /**
     * Menyimpan artikel baru ke dalam database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validator = Validator::make($request->all(), [
            'judul'           => 'required|string|max:255',
            'isi'             => 'required|string',
            'tanggal_publish' => 'required|date',
            'author_id'       => 'required|exists:users,id', // Memastikan author_id ada di tabel users
        ]);

        // Jika validasi gagal, kembali dengan pesan error dan input lama
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Buat data baru
        Artikel::create($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu artikel.
     */
    public function show(Artikel $artikel)
    {
        // Laravel akan otomatis mencari data berdasarkan ID (Route Model Binding)
        // Mengembalikan view 'artikel.show' dengan data artikel yang ditemukan
        return view('artikel.show', compact('artikel'));
    }

    /**
     * Menampilkan form untuk mengedit data artikel.
     */
    public function edit(Artikel $artikel)
    {
        // Mengambil semua user untuk ditampilkan sebagai pilihan author
        $authors = User::all();

        // Mengembalikan view 'artikel.edit' dengan data artikel dan daftar author
        return view('artikel.edit', compact('artikel', 'authors'));
    }

    /**
     * Memperbarui data artikel di dalam database.
     */
    public function update(Request $request, Artikel $artikel)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'judul'           => 'required|string|max:255',
            'isi'             => 'required|string',
            'tanggal_publish' => 'required|date',
            'author_id'       => 'required|exists:users,id',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Update data artikel
        $artikel->update($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    /**
     * Menghapus artikel dari database.
     */
    public function destroy(Artikel $artikel)
    {
        // Hapus data artikel
        $artikel->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('artikel.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
