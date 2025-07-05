<?php

namespace App\Http\Controllers;

// Import model User dengan huruf kapital (standar Laravel)
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Menampilkan daftar semua user.
     */
    public function index()
    {
        // Mengambil semua data user dari database, diurutkan dari yang terbaru
        $users = User::latest()->paginate(10); // Menggunakan paginate untuk membatasi data per halaman

        // Mengembalikan view 'users.index' dan mengirimkan data users
        return view('users.index', compact('users'));
    }

    /**
     * Menampilkan form untuk membuat user baru.
     */
    public function create()
    {
        // Hanya mengembalikan view untuk form tambah data
        return view('users.create');
    }

    /**
     * Menyimpan user baru ke dalam database.
     */
    public function store(Request $request)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'nama'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users', // 'unique:users' memastikan email belum terdaftar
            'password'      => 'required|string|min:8', // Minimal 8 karakter
            'role'          => 'required|string',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|string',
            'no_hp'         => 'nullable|string|max:15',
        ]);

        // Jika validasi gagal, kembali ke halaman sebelumnya dengan error dan input lama
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Buat user baru
        User::create([
            'nama'          => $request->nama,
            'email'         => $request->email,
            'password'      => Hash::make($request->password), // Enkripsi password sebelum disimpan
            'role'          => $request->role,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'no_hp'         => $request->no_hp,
        ]);

        // 3. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail dari satu user.
     */
    public function show(User $user)
    {
        // Laravel secara otomatis akan mencari user berdasarkan ID (Route Model Binding)
        // Mengembalikan view 'users.show' dan mengirimkan data user yang ditemukan
        return view('users.show', compact('user'));
    }

    /**
     * Menampilkan form untuk mengedit data user.
     */
    public function edit(User $user)
    {
        // Mengembalikan view 'users.edit' dan mengirimkan data user yang akan diedit
        return view('users.edit', compact('user'));
    }

    /**
     * Memperbarui data user di dalam database.
     */
    public function update(Request $request, User $user)
    {
        // 1. Validasi input
        $validator = Validator::make($request->all(), [
            'nama'          => 'required|string|max:255',
            'email'         => 'required|string|email|max:255|unique:users,email,' . $user->id, // Email harus unik, kecuali untuk user ini sendiri
            'role'          => 'required|string',
            'tanggal_lahir' => 'nullable|date',
            'jenis_kelamin' => 'nullable|string',
            'no_hp'         => 'nullable|string|max:15',
            'password'      => 'nullable|string|min:8', // Password opsional, hanya diisi jika ingin diubah
        ]);

        // Jika validasi gagal
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 2. Siapkan data untuk diupdate
        $data = $request->except('password'); // Ambil semua input kecuali password

        // Jika ada input password baru, hash dan tambahkan ke data
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // 3. Update data user
        $user->update($data);

        // 4. Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'Data user berhasil diperbarui.');
    }

    /**
     * Menghapus user dari database.
     */
    public function destroy(User $user)
    {
        // Hapus data user
        $user->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil dihapus.');
    }
}
