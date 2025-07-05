<?php

namespace App\Http\Controllers;

// Menggunakan nama model PascalCase sesuai konvensi Laravel
use App\Models\Pembayaran;
use App\Models\sesi_konseling;
use App\Models\SesiKonseling; // Diperlukan untuk relasi
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PembayaranController extends Controller
{
    /**
     * Menampilkan daftar semua pembayaran.
     */
    public function index()
    {
        // Mengambil data pembayaran dengan relasi 'sesiKonseling'
        // untuk menampilkan detail sesi terkait. Diurutkan dari yang terbaru.
        $pembayarans = Pembayaran::with('sesiKonseling.user')->latest()->paginate(10);

        // Mengembalikan view 'pembayaran.index' dengan data
        return view('pembayaran.index', compact('pembayarans'));
    }

    /**
     * Menampilkan form untuk membuat pembayaran baru.
     */
    public function create()
    {
        // Mengambil semua sesi konseling untuk ditampilkan di dropdown form
        $sesiKonselings = sesikonseling::all();
        
        // Mengembalikan view 'pembayaran.create' dengan data sesi
        return view('pembayaran.create', compact('sesiKonselings'));
    }

    /**
     * Menyimpan pembayaran baru ke dalam database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validator = Validator::make($request->all(), [
            'sesi_id'            => 'required|exists:sesi_konselings,id', // Memastikan sesi_id ada
            'metode_pembayaran'  => 'required|string|max:255',
            'jumlah'             => 'required|numeric|min:0',
            'status_pembayaran'  => 'required|string|max:255',
        ]);

        // Jika validasi gagal, kembali dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Buat data baru
        Pembayaran::create($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu pembayaran.
     */
    public function show(Pembayaran $pembayaran)
    {
        // Laravel akan otomatis mencari data berdasarkan ID (Route Model Binding)
        // Mengembalikan view 'pembayaran.show' dengan data yang ditemukan
        return view('pembayaran.show', compact('pembayaran'));
    }

    /**
     * Menampilkan form untuk mengedit data pembayaran.
     */
    public function edit(Pembayaran $pembayaran)
    {
        // Mengambil semua sesi konseling untuk ditampilkan di dropdown form
        $sesiKonselings = sesikonseling::all();
        
        // Mengembalikan view 'pembayaran.edit' dengan data pembayaran dan daftar sesi
        return view('pembayaran.edit', compact('pembayaran', 'sesiKonselings'));
    }

    /**
     * Memperbarui data pembayaran di dalam database.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'sesi_id'            => 'required|exists:sesi_konselings,id',
            'metode_pembayaran'  => 'required|string|max:255',
            'jumlah'             => 'required|numeric|min:0',
            'status_pembayaran'  => 'required|string|max:255',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Update data
        $pembayaran->update($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil diperbarui.');
    }

    /**
     * Menghapus data pembayaran dari database.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        // Hapus data
        $pembayaran->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pembayaran.index')->with('success', 'Data pembayaran berhasil dihapus.');
    }
}
