<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Halaman Anda</title>
    <!-- Memuat Tailwind CSS dari CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <!-- Kontainer Form -->
    <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        
        <!-- Judul -->
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-8">Selamat Datang Kembali</h2>

        <!-- Form Login -->
        <form action="#" method="POST">
            <!-- Kolom Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Alamat Email</label>
                <input type="email" id="email" name="email" placeholder="masukkan@email.com"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
            </div>

            <!-- Kolom Password -->
            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Kata Sandi</label>
                <input type="password" id="password" name="password" placeholder="********"
                       class="w-full px-4 py-2 border rounded-lg text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200">
            </div>

            <!-- Tombol Login -->
            <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-4 rounded-lg focus:outline-none focus:shadow-outline transition-transform transform hover:scale-105 duration-300">
                Login
            </button>

            <!-- Tautan ke Halaman Registrasi -->
            <div class="text-center mt-6">
                <p class="text-gray-600 text-sm">
                    Belum punya akun? <a href="registrasi.html" class="text-blue-500 hover:underline">Daftar di sini</a>
                </p>
            </div>
        </form>
    </div>

</body>
</html>
