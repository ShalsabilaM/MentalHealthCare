<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Saya - MindCare</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-slate-100/80 text-slate-800">

    <header class="bg-white/80 backdrop-blur-sm border-b border-slate-200 sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2">
                <div class="bg-blue-500 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" /></svg>
                </div>
                <span class="text-xl font-bold text-slate-800">MindCare</span>
            </a>
            <ul class="hidden lg:flex items-center gap-8">
                <li><a href="beranda.html" class="text-gray-600 hover:text-blue-600 transition">Beranda</a></li>
                <li><a href="dashboard.html" class="text-gray-600 hover:text-blue-600 transition">Dashboard</a></li>
                <li><a href="konseling.html" class="text-gray-600 hover:text-blue-600 transition">Konseling</a></li>
                <li><a href="artikel.html" class="text-gray-600 hover:text-blue-600 transition">Artikel</a></li>
                <li><a href="pembayaran.html" class="text-gray-600 hover:text-blue-600 transition">Pembayaran</a></li>
                <li><a href="feedback.html" class="text-gray-600 hover:text-blue-600 transition">Feedback</a></li>
                <li><a href="#" class="text-blue-600 font-semibold">Catatan</a></li>
            </ul>
            <div class="hidden lg:flex items-center gap-4">
                <a href="#" class="font-semibold text-gray-600 hover:text-blue-600 transition">Masuk</a>
                <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm">Daftar</a>
            </div>
             <div class="lg:hidden">
                <button class="text-slate-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-10">

        <section class="flex flex-col sm:flex-row justify-between sm:items-center gap-4">
            <div>
                <h1 class="text-3xl font-bold text-slate-900">Catatan Saya</h1>
                <p class="text-slate-500 mt-1">Tulis dan kelola catatan pribadi Anda</p>
            </div>
            <a href="#" class="bg-blue-600 text-white font-semibold px-5 py-3 rounded-lg flex items-center justify-center gap-2 hover:bg-blue-700 transition shadow-sm w-full sm:w-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                <span>Tulis Catatan</span>
            </a>
        </section>

        <section class="mt-8">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                     <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </div>
                <input type="search" placeholder="Cari catatan..." class="w-full py-3 pl-11 pr-4 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white shadow-sm">
            </div>
        </section>

        <section class="mt-8 space-y-6">
            <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-slate-800">Sesi dengan Dr. Maya</h3>
                        <p class="text-sm text-slate-500 mt-1">Catatan Sesi • 22 Des 2024</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-slate-500 hover:text-blue-600 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                        <button class="text-slate-500 hover:text-red-600 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                    </div>
                </div>
                <p class="text-slate-600 text-sm mt-4">Hari ini belajar teknik breathing exercise. Merasa lebih tenang setelah mencoba teknik 4-7-8. Ingin konsisten menerapkannya setiap pagi.</p>
            </div>

            <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-slate-800">Hal yang Disyukuri Hari Ini</h3>
                        <p class="text-sm text-slate-500 mt-1">Jurnal Harian • 21 Des 2024</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-slate-500 hover:text-blue-600 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                        <button class="text-slate-500 hover:text-red-600 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                    </div>
                </div>
                <div class="text-slate-600 text-sm mt-4 space-y-1">
                    <p>1. Berhasil presentasi tanpa cemas, 2. Dapat dukungan dari teman, 3. Menikmati kopi hangat di pagi hari.</p>
                </div>
            </div>

            <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm">
                <div class="flex justify-between items-center">
                    <div>
                        <h3 class="font-bold text-slate-800">Refleksi Mingguan</h3>
                        <p class="text-sm text-slate-500 mt-1">Refleksi • 20 Des 2024</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="text-slate-500 hover:text-blue-600 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" /></svg></button>
                        <button class="text-slate-500 hover:text-red-600 transition"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg></button>
                    </div>
                </div>
                <p class="text-slate-600 text-sm mt-4">Target minggu ini meditasi 10 menit setiap hari. Progress: 5/7 hari berhasil. Perlu lebih konsisten.</p>
            </div>
        </section>

    </main>
    <footer class="bg-white mt-12 pt-10 border-t border-slate-200">
        <div class="container mx-auto px-6 pt-16 pb-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-12 gap-10">
                <div class="lg:col-span-4">
                    <a href="#" class="flex items-center gap-2 mb-4">
                        <div class="bg-blue-500 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <span class="text-xl font-bold text-slate-800">MindCare</span>
                    </a>
                    <p class="text-gray-500 mt-2 max-w-xs">Platform kesehatan mental tepercaya yang menghubungkan Anda dengan konselor profesional untuk hidup yang lebih bahagia dan seimbang.</p>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="font-semibold text-slate-800 mb-4">Layanan</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Konseling Online</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Artikel Mental Health</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Forum Diskusi</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Jurnal Pribadi</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-2">
                    <h3 class="font-semibold text-slate-800 mb-4">Dukungan</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Bantuan</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">FAQ</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Kebijakan Privasi</a></li>
                        <li><a href="#" class="text-gray-500 hover:text-blue-600 transition">Syarat & Ketentuan</a></li>
                    </ul>
                </div>

                <div class="lg:col-span-4">
                    <h3 class="font-semibold text-slate-800 mb-4">Kontak</h3>
                    <ul class="space-y-4 text-gray-500">
                        <li class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                            <span>+62 21 1234 5678</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" /><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" /></svg>
                            <span>hello@mindcare.id</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" /></svg>
                            <span>Jakarta, Indonesia</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-slate-200 flex flex-col sm:flex-row justify-between items-center text-sm text-gray-400">
                <p class="text-center sm:text-left">© 2024 MindCare. Semua hak dilindungi.</p>
                <div class="flex items-center gap-4 mt-4 sm:mt-0">
                    <span>Terdaftar di Kementerian Kesehatan RI</span>
                    <span class="text-gray-300">•</span>
                    <span>ISO 27001 Certified</span>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>