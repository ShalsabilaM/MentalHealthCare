<?php

namespace App\Http\Controllers;

// Menggunakan nama model PascalCase sesuai konvensi Laravel

use App\Models\sesi_konseling;
use App\Models\SesiKonseling;
use App\Models\User; // Diperlukan untuk mengambil daftar user
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SesiKonselingController extends Controller
{
    /**
     * Menampilkan daftar semua sesi konseling.
     */
    public function index()
    {
        // Mengambil data sesi konseling beserta relasi 'user' untuk menampilkan nama user
        // Diurutkan berdasarkan tanggal terbaru
        $sesiKonselings = sesikonseling::with('user')->latest('tanggal')->paginate(10);

        // Mengembalikan view 'sesi_konseling.index' dengan data
        return view('sesi_konseling.index', compact('sesiKonselings'));
    }

    /**
     * Menampilkan form untuk membuat sesi konseling baru.
     */
    public function create()
    {
        // Mengambil semua user untuk ditampilkan di dropdown form
        $users = User::all();
        
        // Mengembalikan view 'sesi_konseling.create' dengan data users
        return view('sesi_konseling.create', compact('users'));
    }

    /**
     * Menyimpan sesi konseling baru ke dalam database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id', // Memastikan user_id ada di tabel users
            'tanggal' => 'required|date',
            'jam'     => 'required|date_format:H:i', // Format jam (contoh: 14:30)
            'metode'  => 'required|string|max:255',
            'status'  => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembali dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Buat data baru
        sesikonseling::create($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('sesi-konseling.index')->with('success', 'Sesi konseling berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu sesi konseling.
     */
    public function show(sesikonseling $sesiKonseling)
    {
        // Laravel akan otomatis mencari data berdasarkan ID (Route Model Binding)
        // Mengembalikan view 'sesi_konseling.show' dengan data yang ditemukan
        return view('sesi_konseling.show', compact('sesiKonseling'));
    }

    /**
     * Menampilkan form untuk mengedit data sesi konseling.
     */
    public function edit(sesikonseling $sesiKonseling)
    {
        // Mengambil semua user untuk ditampilkan di dropdown form
        $users = User::all();
        
        // Mengembalikan view 'sesi_konseling.edit' dengan data sesi dan daftar user
        return view('sesi_konseling.edit', compact('sesiKonseling', 'users'));
    }

    /**
     * Memperbarui data sesi konseling di dalam database.
     */
    public function update(Request $request,sesikonseling $sesiKonseling)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|exists:users,id',
            'tanggal' => 'required|date',
            'jam'     => 'required|date_format:H:i',
            'metode'  => 'required|string|max:255',
            'status'  => 'required|string|max:255',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Update data
        $sesiKonseling->update($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('sesi-konseling.index')->with('success', 'Sesi konseling berhasil diperbarui.');
    }

    /**
     * Menghapus sesi konseling dari database.
     */
    public function destroy(sesikonseling $sesiKonseling)
    {
        // Hapus data
        $sesiKonseling->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('sesi-konseling.index')->with('success', 'Sesi konseling berhasil dihapus.');
    }
}
