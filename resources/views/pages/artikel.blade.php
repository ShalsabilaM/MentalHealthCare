<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel & Resources - MindCare</title>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" /></svg>
                </div>
                <span class="text-xl font-bold text-slate-800">MindCare</span>
            </a>
            <ul class="hidden lg:flex items-center gap-8">
                <li><a href="beranda.html" class="text-gray-600 hover:text-blue-600 transition">Beranda</a></li>
                <li><a href="dashboard.html" class="text-gray-600 hover:text-blue-600 transition">Dashboard</a></li>
                <li><a href="konseling.html" class="text-gray-600 hover:text-blue-600 transition">Konseling</a></li>
                <li><a href="#" class="text-blue-600 font-semibold">Artikel</a></li>
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
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
                </button>
            </div>
        </nav>
    </header>

    <main class="container mx-auto px-6 py-10">
        <section class="text-center">
            <h1 class="text-4xl font-bold text-slate-900">Artikel & Resources</h1>
            <p class="text-slate-500 mt-2 max-w-xl mx-auto">Temukan artikel dan konten untuk mendukung mental wellness Anda</p>
        </section>
        
        <section class="mt-8 max-w-3xl mx-auto">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                     <svg class="h-5 w-5 text-slate-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                </div>
                <input type="search" placeholder="Cari artikel..." class="w-full py-3 pl-11 pr-4 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <div class="mt-4 flex flex-wrap justify-center gap-3">
                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-slate-200 text-slate-800">Semua</button>
                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-white border border-slate-300 hover:bg-slate-100 transition">Anxiety</button>
                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-white border border-slate-300 hover:bg-slate-100 transition">Depression</button>
                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-white border border-slate-300 hover:bg-slate-100 transition">Self-Care</button>
                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-white border border-slate-300 hover:bg-slate-100 transition">Relationships</button>
                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-white border border-slate-300 hover:bg-slate-100 transition">Stress Management</button>
            </div>
        </section>

        <section class="mt-10">
             <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col">
                    <div class="relative">
                       <div class="absolute top-0 left-0 bg-orange-100/80 backdrop-blur-sm p-3 rounded-lg"><span class="text-xl">🧘</span></div>
                    </div>
                    <div class="pt-16">
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full">Anxiety</span>
                        <h3 class="mt-3 text-lg font-bold text-slate-900">5 Teknik Mindfulness untuk Mengatasi Anxiety</h3>
                        <p class="mt-2 text-sm text-slate-600 line-clamp-2">Pelajari teknik mindfulness yang terbukti efektif untuk mengurangi gejala anxiety dan meningkatkan kualitas hidup.</p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200/80 flex-grow flex flex-col justify-end">
                        <div class="flex items-center justify-between text-sm text-slate-500">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" /></svg> 8 menit</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> 1245</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" /></svg> 89</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-slate-500">Dr. Maya Sari • 2 hari yang lalu</p>
                    </div>
                </div>
                 <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col">
                    <div class="relative">
                       <div class="absolute top-0 left-0 bg-yellow-100/80 backdrop-blur-sm p-3 rounded-lg"><span class="text-xl">💪</span></div>
                    </div>
                    <div class="pt-16">
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full">Self-Care</span>
                        <h3 class="mt-3 text-lg font-bold text-slate-900">Membangun Resiliensi Mental di Era Digital</h3>
                        <p class="mt-2 text-sm text-slate-600 line-clamp-2">Cara melindungi kesehatan mental dari dampak negatif teknologi dan media sosial.</p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200/80 flex-grow flex flex-col justify-end">
                        <div class="flex items-center justify-between text-sm text-slate-500">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" /></svg> 6 menit</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> 987</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" /></svg> 64</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-slate-500">Dr. Budi Hartono • 3 hari yang lalu</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col">
                    <div class="relative">
                       <div class="absolute top-0 left-0 bg-red-100/80 backdrop-blur-sm p-3 rounded-lg"><span class="text-xl">🔥</span></div>
                    </div>
                    <div class="pt-16">
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full">Stress Management</span>
                        <h3 class="mt-3 text-lg font-bold text-slate-900">Mengenal dan Mengatasi Burnout Syndrome</h3>
                        <p class="mt-2 text-sm text-slate-600 line-clamp-2">Panduan lengkap untuk mengenali tanda-tanda burnout dan strategi pemulihan yang efektif.</p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200/80 flex-grow flex flex-col justify-end">
                        <div class="flex items-center justify-between text-sm text-slate-500">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" /></svg> 10 menit</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> 2156</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" /></svg> 142</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-slate-500">Dr. Sarah Chen • 1 minggu yang lalu</p>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm flex flex-col">
                    <div class="relative">
                       <div class="absolute top-0 left-0 bg-violet-100/80 backdrop-blur-sm p-3 rounded-lg"><span class="text-xl">💬</span></div>
                    </div>
                    <div class="pt-16">
                        <span class="inline-block px-3 py-1 text-xs font-semibold text-blue-700 bg-blue-100 rounded-full">Relationships</span>
                        <h3 class="mt-3 text-lg font-bold text-slate-900">Komunikasi Assertif dalam Hubungan</h3>
                        <p class="mt-2 text-sm text-slate-600 line-clamp-2">Belajar menyampaikan kebutuhan dan batasan dengan cara yang sehat dan konstruktif.</p>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-200/80 flex-grow flex flex-col justify-end">
                        <div class="flex items-center justify-between text-sm text-slate-500">
                            <div class="flex items-center gap-4">
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" /></svg> 7 menit</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> 756</span>
                                <span class="flex items-center gap-1.5"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" /></svg> 45</span>
                            </div>
                        </div>
                        <p class="mt-4 text-sm text-slate-500">Dr. Lisa Wijaya • 4 hari yang lalu</p>
                    </div>
                </div>
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