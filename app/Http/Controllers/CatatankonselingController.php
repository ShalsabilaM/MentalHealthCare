<?php

namespace App\Http\Controllers;

// Menggunakan nama model PascalCase sesuai konvensi Laravel
use App\Models\CatatanKonseling;
use App\Models\sesi_konseling;
use App\Models\SesiKonseling; // Diperlukan untuk relasi
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CatatanKonselingController extends Controller
{
    /**
     * Menampilkan daftar semua catatan konseling.
     */
    public function index()
    {
        // Mengambil data catatan dengan relasi 'sesiKonseling' dan 'user'
        // untuk menampilkan detail sesi dan user yang terkait.
        $catatanKonselings = CatatanKonseling::with('sesiKonseling.user')->latest()->paginate(10);

        // Mengembalikan view 'catatan_konseling.index' dengan data
        return view('catatan_konseling.index', compact('catatanKonselings'));
    }

    /**
     * Menampilkan form untuk membuat catatan konseling baru.
     */
    public function create()
    {
        // Mengambil semua sesi konseling untuk ditampilkan di dropdown form
        $sesiKonselings = sesikonseling::all();
        
        // Mengembalikan view 'catatan_konseling.create' dengan data sesi
        return view('catatan_konseling.create', compact('sesiKonselings'));
    }

    /**
     * Menyimpan catatan konseling baru ke dalam database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validator = Validator::make($request->all(), [
            'sesi_id'       => 'required|exists:sesi_konselings,id', // Memastikan sesi_id ada
            'diagnosa'      => 'required|string',
            'rekomendasi'   => 'required|string',
            'isi_catatan'   => 'required|string',
        ]);

        // Jika validasi gagal, kembali dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Buat data baru
        CatatanKonseling::create($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('catatan-konseling.index')->with('success', 'Catatan konseling berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu catatan konseling.
     */
    public function show(CatatanKonseling $catatanKonseling)
    {
        // Laravel akan otomatis mencari data berdasarkan ID (Route Model Binding)
        // Mengembalikan view 'catatan_konseling.show' dengan data yang ditemukan
        return view('catatan_konseling.show', compact('catatanKonseling'));
    }

    /**
     * Menampilkan form untuk mengedit data catatan konseling.
     */
    public function edit(CatatanKonseling $catatanKonseling)
    {
        // Mengambil semua sesi konseling untuk ditampilkan di dropdown form
        $sesiKonselings = sesikonseling::all();
        
        // Mengembalikan view 'catatan_konseling.edit' dengan data catatan dan daftar sesi
        return view('catatan_konseling.edit', compact('catatanKonseling', 'sesiKonselings'));
    }

    /**
     * Memperbarui data catatan konseling di dalam database.
     */
    public function update(Request $request, CatatanKonseling $catatanKonseling)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'sesi_id'       => 'required|exists:sesi_konselings,id',
            'diagnosa'      => 'required|string',
            'rekomendasi'   => 'required|string',
            'isi_catatan'   => 'required|string',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Update data
        $catatanKonseling->update($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('catatan-konseling.index')->with('success', 'Catatan konseling berhasil diperbarui.');
    }

    /**
     * Menghapus data catatan konseling dari database.
     */
    public function destroy(CatatanKonseling $catatanKonseling)
    {
        // Hapus data
        $catatanKonseling->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('catatan-konseling.index')->with('success', 'Catatan konseling berhasil dihapus.');
    }
}
