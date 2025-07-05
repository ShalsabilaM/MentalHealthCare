<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi - Halaman Anda</title>
    <!-- Memuat Tailwind CSS dari CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen py-10">

    <!-- Kontainer Form -->
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        
        <!-- Judul -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Buat Akun Baru</h2>

        <!-- Form Registrasi -->
        <form action="#" method="POST">
            <!-- Kolom Nama Lengkap -->
            <div class="mb-4">
                <label for="fullname" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                <input type="text" id="fullname" name="fullname" placeholder="Nama Anda"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-200">
            </div>

            <!-- Kolom Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="masukkan@email.com"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-200">
            </div>

            <!-- Kolom Password -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="Minimal 8 karakter"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-200">
            </div>
            
            <!-- Kolom Konfirmasi Password -->
            <div class="mb-6">
                <label for="confirm_password" class="block text-gray-700 text-sm font-bold mb-2">Konfirmasi Kata Sandi</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Ulangi kata sandi"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 transition duration-200">
            </div>

            <!-- Tombol Daftar -->
            <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-transform transform hover:scale-105 duration-300">
                Daftar
            </button>

             <!-- Tautan ke Halaman Login -->
             <div class="text-center mt-6">
                <p class="text-gray-600 text-sm">
                    Sudah punya akun? <a href="login.html" class="text-blue-500 hover:underline">Login di sini</a>
                </p>
            </div>
        </form>
    </div>

</body>
</html>
