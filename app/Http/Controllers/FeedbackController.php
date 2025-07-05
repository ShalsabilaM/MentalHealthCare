<?php

namespace App\Http\Controllers;

// Menggunakan nama model PascalCase sesuai konvensi Laravel
use App\Models\Feedback;
use App\Models\sesi_konseling;
use App\Models\SesiKonseling; // Diperlukan untuk relasi
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FeedbackController extends Controller
{
    /**
     * Menampilkan daftar semua feedback.
     */
    public function index()
    {
        // Mengambil data feedback dengan relasi 'sesiKonseling' dan 'user'
        // untuk menampilkan detail sesi dan user yang memberikan feedback.
        $feedbacks = Feedback::with('sesiKonseling.user')->latest()->paginate(10);

        // Mengembalikan view 'feedback.index' dengan data
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Menampilkan form untuk membuat feedback baru.
     */
    public function create()
    {
        // Mengambil semua sesi konseling untuk ditampilkan di dropdown form
        $sesiKonselings = sesikonseling::all();
        
        // Mengembalikan view 'feedback.create' dengan data sesi
        return view('feedback.create', compact('sesiKonselings'));
    }

    /**
     * Menyimpan feedback baru ke dalam database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input dari form
        $validator = Validator::make($request->all(), [
            'sesi_id'  => 'required|exists:sesi_konselings,id', // Memastikan sesi_id ada
            'rating'   => 'required|integer|min:1|max:5', // Rating antara 1 dan 5
            'komentar' => 'nullable|string',
        ]);

        // Jika validasi gagal, kembali dengan pesan error
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Buat data baru
        Feedback::create($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu feedback.
     */
    public function show(Feedback $feedback)
    {
        // Laravel akan otomatis mencari data berdasarkan ID (Route Model Binding)
        // Mengembalikan view 'feedback.show' dengan data yang ditemukan
        return view('feedback.show', compact('feedback'));
    }

    /**
     * Menampilkan form untuk mengedit data feedback.
     */
    public function edit(Feedback $feedback)
    {
        // Mengambil semua sesi konseling untuk ditampilkan di dropdown form
        $sesiKonselings = sesikonseling::all();
        
        // Mengembalikan view 'feedback.edit' dengan data feedback dan daftar sesi
        return view('feedback.edit', compact('feedback', 'sesiKonselings'));
    }

    /**
     * Memperbarui data feedback di dalam database.
     */
    public function update(Request $request, Feedback $feedback)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'sesi_id'  => 'required|exists:sesi_konselings,id',
            'rating'   => 'required|integer|min:1|max:5',
            'komentar' => 'nullable|string',
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Update data
        $feedback->update($request->all());

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil diperbarui.');
    }

    /**
     * Menghapus data feedback dari database.
     */
    public function destroy(Feedback $feedback)
    {
        // Hapus data
        $feedback->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('feedback.index')->with('success', 'Feedback berhasil dihapus.');
    }
}
