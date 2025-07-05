<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran & Billing - MindCare</title>
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
<body class="bg-slate-100 text-slate-800">

    <header class="bg-white/80 backdrop-blur-sm border-b border-slate-200 sticky top-0 z-50">
        <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2">
                <div class="bg-blue-500 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd" /></svg>
                </div>
                <span class="text-xl font-bold text-slate-800">MindCare</span>
            </a>
            <ul class="hidden lg:flex items-center gap-8">
                <li><a href="beranda.htm" class="text-gray-600 hover:text-blue-600 transition">Beranda</a></li>
                <li><a href="dashboard.html" class="text-gray-600 hover:text-blue-600 transition">Dashboard</a></li>
                <li><a href="konseling.html" class="text-gray-600 hover:text-blue-600 transition">Konseling</a></li>
                <li><a href="artikel.html" class="text-gray-600 hover:text-blue-600 transition">Artikel</a></li>
                <li><a href="#" class="text-blue-600 font-semibold">Pembayaran</a></li>
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

        <section>
            <h1 class="text-3xl font-bold text-slate-900">Pembayaran & Billing</h1>
            <p class="text-slate-500 mt-1">Kelola langganan, metode pembayaran, dan riwayat transaksi Anda</p>
        </section>

      <section class="mt-8">
       <div class="bg-slate-200/80 p-1.5 rounded-xl flex items-center max-w-lg mx-auto">
        <a href="#langganan" class="tab-item">Langganan</a>
        <a href="#riwayat" class="tab-item">Riwayat</a>
        <a href="#metode" class="tab-item active">Metode Pembayaran</a>
       </div>
      </section>
        
        <div class="mt-6">

            <div id="langganan" class="tab-panel">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                    <div class="lg:col-span-2 space-y-8">
                        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                            <div class="flex justify-between items-start">
                                <div>
                                    <h2 class="font-bold text-lg flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" /></svg>
                                        Paket Aktif
                                    </h2>
                                    <p class="mt-4 font-bold text-slate-800">Premium Plan</p>
                                    <p class="text-blue-600 font-semibold">Rp 499.000/bulan</p>
                                    <p class="text-sm text-slate-500 mt-1">Tagihan berikutnya: 20 Januari 2025</p>
                                </div>
                                <div class="inline-flex items-center gap-2 bg-green-100 text-green-700 font-semibold text-xs px-3 py-1.5 rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                                    Aktif
                                </div>
                            </div>
                            <div class="mt-4">
                                <div class="flex justify-between text-sm font-medium text-slate-500">
                                    <span>Sesi konseling digunakan</span>
                                    <span>3/5</span>
                                </div>
                                <div class="mt-1 w-full bg-slate-200 rounded-full h-2">
                                    <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                                </div>
                            </div>
                            <div class="mt-6 flex items-center gap-3">
                                <button class="px-4 py-2 text-sm font-semibold rounded-lg bg-white border border-slate-300 hover:bg-slate-100 transition">Ubah Paket</button>
                                <button class="px-4 py-2 text-sm font-semibold rounded-lg text-red-500 bg-white border border-red-300 hover:bg-red-50 transition">Batalkan Langganan</button>
                            </div>
                        </div>

                        <div>
                            <h2 class="text-xl font-bold text-slate-900 mb-4">Paket Langganan</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div class="bg-white p-6 rounded-xl border border-slate-200 flex flex-col">
                                    <h3 class="font-bold text-lg">Basic Plan</h3>
                                    <p class="text-2xl font-bold my-2">Rp 299.000<span class="text-sm font-medium text-slate-500">/bulan</span></p>
                                    <ul class="space-y-3 text-sm text-slate-600 mt-4 flex-grow">
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>2 sesi konseling per bulan</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Akses artikel unlimited</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Chat support 24/7</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Mood tracking</li>
                                    </ul>
                                    <button class="w-full mt-6 text-center bg-white border border-slate-300 text-slate-800 rounded-lg py-2.5 font-semibold hover:bg-slate-100 transition">Pilih Paket</button>
                                </div>
                                <div class="bg-white p-6 rounded-xl border-2 border-blue-500 flex flex-col relative">
                                    <span class="absolute top-0 -translate-y-1/2 bg-blue-500 text-white text-xs font-semibold px-3 py-1 rounded-full left-6">Populer</span>
                                    <h3 class="font-bold text-lg">Premium Plan</h3>
                                    <p class="text-2xl font-bold my-2">Rp 499.000<span class="text-sm font-medium text-slate-500">/bulan</span></p>
                                    <ul class="space-y-3 text-sm text-slate-600 mt-4 flex-grow">
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>5 sesi konseling per bulan</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Akses semua konten premium</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Priority support</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Group therapy access</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Personalized recommendations</li>
                                    </ul>
                                    <button class="w-full mt-6 text-center bg-blue-600 text-white rounded-lg py-2.5 font-semibold">Paket Aktif</button>
                                </div>
                                <div class="bg-white p-6 rounded-xl border border-slate-200 flex flex-col">
                                    <h3 class="font-bold text-lg">Unlimited Plan</h3>
                                    <p class="text-2xl font-bold my-2">Rp 899.000<span class="text-sm font-medium text-slate-500">/bulan</span></p>
                                    <ul class="space-y-3 text-sm text-slate-600 mt-4 flex-grow">
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Unlimited sesi konseling</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>All premium features</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>1-on-1 dedicated counselor</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Family therapy access</li>
                                        <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Emergency crisis support</li>
                                    </ul>
                                    <button class="w-full mt-6 text-center bg-white border border-slate-300 text-slate-800 rounded-lg py-2.5 font-semibold hover:bg-slate-100 transition">Pilih Paket</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-1 space-y-6">
                        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                            <h3 class="font-bold text-lg">Ringkasan Pembayaran</h3>
                            <div class="space-y-3 mt-4 text-sm">
                                <div class="flex justify-between">
                                    <span class="text-slate-500">Langganan bulanan</span>
                                    <span class="font-medium">Rp 499.000</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-slate-500">PPN (11%)</span>
                                    <span class="font-medium">Rp 54.890</span>
                                </div>
                            </div>
                            <div class="mt-4 pt-4 border-t border-slate-200">
                                <div class="flex justify-between font-bold">
                                    <span>Total</span>
                                    <span>Rp 553.890</span>
                                </div>
                                <p class="text-xs text-slate-400 mt-1">Tagihan berikutnya: 20 Januari 2025</p>
                            </div>
                        </div>
                        <div class="bg-white p-6 rounded-xl border border-slate-200 shadow-sm">
                             <h3 class="font-bold text-lg">Need Help?</h3>
                             <p class="text-sm text-slate-500 mt-1">Ada pertanyaan tentang pembayaran atau billing?</p>
                             <div class="mt-4 space-y-3">
                                <button class="w-full flex items-center justify-center gap-2 text-sm font-semibold p-2.5 rounded-lg border border-slate-300 hover:bg-slate-100 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z" clip-rule="evenodd" /></svg>
                                    Chat Support
                                </button>
                                <button class="w-full flex items-center justify-center gap-2 text-sm font-semibold p-2.5 rounded-lg border border-slate-300 hover:bg-slate-100 transition">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" /></svg>
                                    Jadwalkan Call
                                </button>
                             </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="riwayat" class="tab-panel hidden">
                <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-slate-900">Riwayat Pembayaran</h2>
                    <button class="flex items-center gap-2 text-sm font-semibold px-4 py-2 rounded-lg border border-slate-300 bg-white hover:bg-slate-100 transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                        Export
                    </button>
                </div>
                <div class="mt-4 space-y-3">
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="bg-green-100 text-green-600 p-3 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01M12 6v-1m0-1V4m0 2.01M12 14c1.657 0 3-.895 3-2s-1.343-2-3-2-3-.895-3-2 1.343-2 3-2m7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg></div>
                            <div>
                                <p class="font-bold">Premium Plan - Desember 2024</p>
                                <p class="text-xs text-slate-500 mt-1">20 Des 2024 <span class="mx-1.5">•</span> Invoice: INV-001234 <span class="mx-1.5">•</span> Credit Card</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-3">
                            <div class="text-right">
                                <p class="font-semibold">Rp 499.000</p>
                                <span class="inline-block text-xs font-semibold bg-green-100 text-green-700 px-2 py-0.5 rounded-full">Berhasil</span>
                            </div>
                            <button class="flex items-center gap-1.5 text-xs font-medium p-2 rounded-md hover:bg-slate-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> Detail</button>
                            <button class="flex items-center gap-1.5 text-xs font-medium p-2 rounded-md hover:bg-slate-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg> Invoice</button>
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="bg-green-100 text-green-600 p-3 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01M12 6v-1m0-1V4m0 2.01M12 14c1.657 0 3-.895 3-2s-1.343-2-3-2-3-.895-3-2 1.343-2 3-2m7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg></div>
                            <div>
                                <p class="font-bold">Premium Plan - November 2024</p>
                                <p class="text-xs text-slate-500 mt-1">20 Nov 2024 <span class="mx-1.5">•</span> Invoice: INV-001233 <span class="mx-1.5">•</span> GoPay</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-3">
                            <div class="text-right">
                                <p class="font-semibold">Rp 499.000</p>
                                <span class="inline-block text-xs font-semibold bg-green-100 text-green-700 px-2 py-0.5 rounded-full">Berhasil</span>
                            </div>
                            <button class="flex items-center gap-1.5 text-xs font-medium p-2 rounded-md hover:bg-slate-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> Detail</button>
                            <button class="flex items-center gap-1.5 text-xs font-medium p-2 rounded-md hover:bg-slate-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg> Invoice</button>
                        </div>
                    </div>
                     <div class="bg-white p-4 rounded-xl border border-slate-200 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex items-center gap-4">
                            <div class="bg-green-100 text-green-600 p-3 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01M12 6v-1m0-1V4m0 2.01M12 14c1.657 0 3-.895 3-2s-1.343-2-3-2-3-.895-3-2 1.343-2 3-2m7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg></div>
                            <div>
                                <p class="font-bold">Sesi Konseling Individual - Dr. Maya Sari</p>
                                <p class="text-xs text-slate-500 mt-1">25 Nov 2024 <span class="mx-1.5">•</span> Invoice: INV-001235 <span class="mx-1.5">•</span> Credit Card</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-end gap-3">
                            <div class="text-right">
                                <p class="font-semibold">Rp 200.000</p>
                                <span class="inline-block text-xs font-semibold bg-green-100 text-green-700 px-2 py-0.5 rounded-full">Berhasil</span>
                            </div>
                            <button class="flex items-center gap-1.5 text-xs font-medium p-2 rounded-md hover:bg-slate-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M10 12a2 2 0 100-4 2 2 0 000 4z" /><path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" /></svg> Detail</button>
                            <button class="flex items-center gap-1.5 text-xs font-medium p-2 rounded-md hover:bg-slate-100"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" /></svg> Invoice</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="metode" class="tab-panel hidden">
                 <div class="flex justify-between items-center">
                    <h2 class="text-xl font-bold text-slate-900">Metode Pembayaran</h2>
                    <button class="flex items-center gap-2 text-sm font-semibold px-4 py-2 rounded-lg bg-blue-600 text-white hover:bg-blue-700 transition">
                       <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" /></svg>
                        Tambah Kartu
                    </button>
                </div>
                <div class="mt-4 space-y-3">
                    <div class="bg-white p-4 rounded-xl border-2 border-blue-500 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="bg-slate-100 p-3 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H4a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg></div>
                            <div>
                                <p class="font-bold flex items-center gap-3">Visa •••• 4242 <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">Default</span></p>
                                <p class="text-xs text-slate-500 mt-1">Expires 12/2026</p>
                            </div>
                        </div>
                        <button class="text-sm font-semibold text-red-500 hover:text-red-700 transition px-3">Hapus</button>
                    </div>
                     <div class="bg-white p-4 rounded-xl border border-slate-200 flex items-center justify-between">
                        <div class="flex items-center gap-4">
                            <div class="bg-slate-100 p-3 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H4a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg></div>
                            <div>
                                <p class="font-bold">Mastercard •••• 5555</p>
                                <p class="text-xs text-slate-500 mt-1">Expires 08/2025</p>
                            </div>
                        </div>
                        <div class="flex items-center gap-2">
                           <button class="text-sm font-semibold text-blue-600 hover:underline transition px-3">Set Default</button>
                           <button class="text-sm font-semibold text-red-500 bg-white border border-red-300 hover:bg-red-50 transition px-4 py-2 rounded-lg">Hapus</button>
                        </div>
                    </div>
                </div>
                 <div class="mt-8">
                     <h2 class="text-xl font-bold text-slate-900">Metode Pembayaran Lainnya</h2>
                     <div class="mt-4 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white p-6 rounded-xl border border-slate-200">
                             <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H4a3 3 0 00-3 3v8a3 3 0 003 3z" /></svg>
                                <h3 class="font-bold">E-Wallet</h3>
                            </div>
                            <p class="text-sm text-slate-500 mt-2">GoPay, OVO, Dana</p>
                            <button class="mt-4 text-sm font-semibold bg-slate-100 hover:bg-slate-200 transition px-4 py-2 rounded-lg">Hubungkan</button>
                        </div>
                         <div class="bg-white p-6 rounded-xl border border-slate-200">
                             <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                                <h3 class="font-bold">Bank Transfer</h3>
                            </div>
                            <p class="text-sm text-slate-500 mt-2">Transfer manual</p>
                            <button class="mt-4 text-sm font-semibold bg-slate-100 hover:bg-slate-200 transition px-4 py-2 rounded-lg">Setup</button>
                        </div>
                     </div>
                 </div>
            </div>

        </div>

    </main>

    <style>
        .tab-item {
            @apply text-slate-600 font-medium py-2.5 px-5 rounded-md hover:bg-slate-300/60 transition text-center w-full sm:w-auto;
        }
        .tab-item.active {
            @apply bg-white text-blue-600 font-semibold shadow-sm;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const tabs = document.querySelectorAll('.tab-item');
            const panels = document.querySelectorAll('.tab-panel');

            tabs.forEach(tab => {
                tab.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Deactivate all tabs and hide all panels
                    tabs.forEach(t => t.classList.remove('active'));
                    panels.forEach(p => p.classList.add('hidden'));

                    // Activate clicked tab
                    this.classList.add('active');

                    // Show corresponding panel
                    const targetPanelId = this.getAttribute('href').substring(1);
                    const targetPanel = document.getElementById(targetPanelId);
                    if (targetPanel) {
                        targetPanel.classList.remove('hidden');
                    }
                });
            });
        });
    </script>
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