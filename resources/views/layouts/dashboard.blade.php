

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - MindCare</title>
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
<body class="bg-slate-50 text-slate-800">

    <header class="bg-white/80 backdrop-blur-sm border-b border-slate-200 sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2">
                <div class="bg-blue-500 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" />
                    </svg>
                </div>
                <span class="text-xl font-bold text-slate-800">MindCare</span>
            </a>
            <ul class="hidden lg:flex items-center gap-8">
                <li><a href="beranda.html" class="text-gray-600 hover:text-blue-600 transition">Beranda</a></li>
                <li><a href="#" class="text-blue-600 font-semibold">Dashboard</a></li>
                <li><a href="konseling.html" class="text-gray-600 hover:text-blue-600 transition">Konseling</a></li>
                <li><a href="artikel.html" class="text-gray-600 hover:text-blue-600 transition">Artikel</a></li>
                <li><a href="pembayaran.html" class="text-gray-600 hover:text-blue-600 transition">Pembayaran</a></li>
                <li><a href="feedback.html" class="text-gray-600 hover:text-blue-600 transition">Feedback</a></li>
                <li><a href="catatan.html" class="text-gray-600 hover:text-blue-600 transition">Catatan</a></li>
            </ul>
            <div class="hidden lg:flex items-center gap-4">
                <a href="#" class="font-semibold text-gray-600 hover:text-blue-600 transition">Masuk</a>
                <a href="#" class="bg-blue-600 text-white px-5 py-2 rounded-lg font-semibold hover:bg-blue-700 transition shadow-sm">Daftar</a>
            </div>
            <div class="lg:hidden">
                <button class="text-slate-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-10">

        <section>
            <h1 class="text-3xl font-bold text-slate-900">Halo, Sarah! 👋</h1>
            <p class="text-slate-500 mt-1">Selamat datang kembali di MindCare</p>
        </section>

        <section class="mt-8">
            <h2 class="text-xl font-bold text-slate-900">Aksi Cepat</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-4">
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:border-blue-500 transition cursor-pointer">
                    <div class="bg-blue-100 h-12 w-12 flex items-center justify-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mt-4">Jadwalkan Konseling</h3>
                    <p class="text-slate-500 text-sm mt-1">Buat janji dengan konselor</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:border-green-500 transition cursor-pointer">
                    <div class="bg-green-100 h-12 w-12 flex items-center justify-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mt-4">Baca Artikel</h3>
                    <p class="text-slate-500 text-sm mt-1">Tips kesehatan mental</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:border-purple-500 transition cursor-pointer">
                    <div class="bg-purple-100 h-12 w-12 flex items-center justify-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mt-4">Tulis Catatan</h3>
                    <p class="text-slate-500 text-sm mt-1">Jurnal harian Anda</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm hover:border-orange-500 transition cursor-pointer">
                    <div class="bg-orange-100 h-12 w-12 flex items-center justify-center rounded-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-orange-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                        </svg>
                    </div>
                    <h3 class="font-semibold text-lg mt-4">Berikan Feedback</h3>
                    <p class="text-slate-500 text-sm mt-1">Share pengalaman Anda</p>
                </div>
            </div>
        </section>

        <section class="mt-10 grid grid-cols-1 lg:grid-cols-5 gap-8">

            <div class="lg:col-span-3 bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-lg">Sesi Mendatang</h2>
                    <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Lihat Semua</a>
                </div>
                <div class="mt-4 space-y-5">
                    <div class="flex justify-between items-center bg-slate-50/80 p-4 rounded-lg">
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-100 h-10 w-10 flex items-center justify-center rounded-full">
                               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold">Dr. Maya Sari</p>
                                <p class="text-sm text-slate-500">Senin, 25 Des • 14:00</p>
                            </div>
                        </div>
                        <a href="#" class="bg-green-500 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-green-600 transition">Video Call</a>
                    </div>
                    <div class="flex justify-between items-center bg-slate-50/80 p-4 rounded-lg">
                        <div class="flex items-center gap-4">
                            <div class="bg-blue-100 h-10 w-10 flex items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-600" viewBox="0 0 20 20" fill="currentColor">
                                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div>
                                <p class="font-semibold">Dr. Budi Hartono</p>
                                <p class="text-sm text-slate-500">Rabu, 27 Des • 10:00</p>
                            </div>
                        </div>
                        <a href="#" class="bg-blue-500 text-white text-sm font-semibold px-4 py-2 rounded-lg hover:bg-blue-600 transition">Voice Call</a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2 bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm">
                <div class="flex justify-between items-center">
                    <h2 class="font-bold text-lg">Artikel Terbaru</h2>
                    <a href="#" class="text-sm font-semibold text-blue-600 hover:underline">Lihat Semua</a>
                </div>
                <div class="mt-4 space-y-5">
                    <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-slate-50">
                        <div class="bg-green-100 h-10 w-10 flex items-center justify-center rounded-lg shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Tips Mengatasi Anxiety</p>
                            <p class="text-sm text-slate-500">5 menit</p>
                        </div>
                    </a>
                    <a href="#" class="flex items-center gap-4 p-3 rounded-lg hover:bg-slate-50">
                        <div class="bg-green-100 h-10 w-10 flex items-center justify-center rounded-lg shrink-0">
                           <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold">Mindfulness untuk Pemula</p>
                            <p class="text-sm text-slate-500">8 menit</p>
                        </div>
                    </a>
                </div>
            </div>

        </section>
        <section class="mt-10">
            <h2 class="text-xl font-bold text-slate-900 mb-4">Progress Anda</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm text-center">
                    <p class="text-4xl font-bold text-blue-600">12</p>
                    <p class="text-slate-500 mt-1">Sesi Selesai</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm text-center">
                    <p class="text-4xl font-bold text-green-600">24</p>
                    <p class="text-slate-500 mt-1">Artikel Dibaca</p>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200/80 shadow-sm text-center">
                    <p class="text-4xl font-bold text-purple-600">15</p>
                    <p class="text-slate-500 mt-1">Hari Streak</p>
                </div>
            </div>
        </section>

    </main>

    <footer class="bg-white mt-12 border-t border-slate-200">
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
                <p>© 2024 MindCare. Semua hak dilindungi.</p>
                <div class="flex items-center gap-4 mt-4 sm:mt-0">
                    <span>Terdaftar di Kementerian Kesehatan RI</span>
                    <span class="text-gray-300">•</span>
                    <span>ISO 27001 Certified</span>
                </div>
            </div>
        </div>
    </footer>
    </main>

</body>
</html>