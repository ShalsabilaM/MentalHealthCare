<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MindCare - Konseling Online</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* Menggunakan font Inter sebagai default */
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

<body class="bg-slate-50 text-gray-800">

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
                <li><a href="#" class="text-blue-600 font-semibold">Beranda</a></li>
                <li><a href="dashboard.html" class="text-gray-600 hover:text-blue-600 transition">Dashboard</a></li>
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

    <main>
        <section class="container mx-auto px-6 pt-24 pb-20 text-center">
            <h1 class="text-4xl md:text-6xl font-extrabold text-slate-900 leading-tight">
                Temukan Ketenangan dalam<br>Hidup Anda
            </h1>
            <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
                Konseling online dengan psikolog profesional. Akses 24/7, privasi terjamin, dan dukungan yang Anda butuhkan.
            </p>
            <div class="mt-8 flex justify-center items-center gap-4">
                <a href="#" class="bg-blue-600 text-white px-7 py-3 rounded-lg font-semibold flex items-center gap-2 hover:bg-blue-700 transition shadow">
                    Mulai Konseling
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" /></svg>
                </a>
                <a href="#" class="bg-white border border-slate-300 text-slate-700 px-7 py-3 rounded-lg font-semibold hover:bg-slate-100 transition">
                    Pelajari Lebih Lanjut
                </a>
            </div>
            <div class="mt-10 flex justify-center items-center gap-8 text-slate-600">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span>Konsultasi gratis 15 menit</span>
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>
                    <span>100% rahasia</span>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Mengapa Memilih MindCare?</h2>
                    <p class="mt-3 text-lg text-gray-600">Kami berkomitmen memberikan layanan kesehatan mental terbaik</p>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100">
                        <div class="bg-blue-100 inline-block p-4 rounded-xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 mb-2">Konselor Profesional</h3>
                        <p class="text-gray-500">Tim psikolog berlisensi berpengalaman</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100">
                        <div class="bg-blue-100 inline-block p-4 rounded-xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 mb-2">Privasi Terjamin</h3>
                        <p class="text-gray-500">Data Anda aman dengan enkripsi end-to-end</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100">
                        <div class="bg-blue-100 inline-block p-4 rounded-xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 mb-2">Akses 24/7</h3>
                        <p class="text-gray-500">Dukungan kapan saja Anda membutuhkannya</p>
                    </div>
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100">
                        <div class="bg-blue-100 inline-block p-4 rounded-xl mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-semibold text-slate-800 mb-2">Komunitas Suportif</h3>
                        <p class="text-gray-500">Bergabung dengan komunitas yang peduli</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-slate-50">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">Layanan Kami</h2>
                    <p class="mt-3 text-lg text-gray-600">Pilih layanan yang sesuai dengan kebutuhan Anda</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col border-2 border-transparent hover:border-blue-500 transition-all duration-300">
                        <div class="bg-blue-100 inline-block p-4 rounded-xl mb-4 self-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800">Konseling Individual</h3>
                        <p class="text-gray-500 mt-2">Sesi one-on-one dengan konselor profesional</p>
                        <hr class="my-6"><p class="text-sm text-gray-500">Mulai dari</p>
                        <p class="text-4xl font-bold text-blue-600 my-2">Rp 150.000</p>
                        <ul class="space-y-3 text-gray-600 mt-6">
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>50 menit per sesi</li>
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Chat 24/7</li>
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Progress tracking</li>
                        </ul>
                        <div class="flex-grow"></div>
                        <a href="#" class="block w-full text-center bg-blue-600 text-white rounded-lg py-3 font-semibold mt-8 hover:bg-blue-700 transition">Pilih Paket</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col border-2 border-green-500 transform lg:scale-105">
                        <div class="bg-green-100 inline-block p-4 rounded-xl mb-4 self-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800">Terapi Kelompok</h3>
                        <p class="text-gray-500 mt-2">Bergabung dengan group support yang tepat</p>
                        <hr class="my-6">
                        <p class="text-sm text-gray-500">Mulai dari</p>
                        <p class="text-4xl font-bold text-green-600 my-2">Rp 75.000</p>
                        <ul class="space-y-3 text-gray-600 mt-6">
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>6-8 peserta</li>
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Dipandu ahli</li>
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Mingguan</li>
                        </ul>
                        <div class="flex-grow"></div>
                        <a href="#" class="block w-full text-center bg-green-500 text-white rounded-lg py-3 font-semibold mt-8 hover:bg-green-600 transition">Pilih Paket</a>
                    </div>
                    <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col border-2 border-transparent hover:border-purple-500 transition-all duration-300">
                        <div class="bg-purple-100 inline-block p-4 rounded-xl mb-4 self-start">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800">Self-Help Resources</h3>
                        <p class="text-gray-500 mt-2">Akses artikel dan tools untuk pengembangan diri</p>
                        <hr class="my-6">
                        <p class="text-sm text-gray-500">&nbsp;</p> 
                        <p class="text-4xl font-bold text-purple-600 my-2">Gratis</p>
                        <ul class="space-y-3 text-gray-600 mt-6">
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>100+ artikel</li>
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Audio meditation</li>
                            <li class="flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" /></svg>Mood tracker</li>
                        </ul>
                        <div class="flex-grow"></div>
                        <a href="#" class="block w-full text-center bg-white text-purple-600 rounded-lg py-3 font-semibold mt-8 border-2 border-purple-300 hover:bg-purple-50 transition">Mulai Gratis</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900">
                        Apa Kata Mereka?
                    </h2>
                    <p class="mt-3 text-lg text-gray-600">
                        Cerita dari klien yang telah merasakan perubahan positif
                    </p>
                </div>
        
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100 flex flex-col">
                        <div class="flex items-center gap-1 mb-6">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        </div>
                        <p class="text-gray-600 leading-relaxed flex-grow">"MindCare membantu saya mengatasi anxiety. Konselornya sangat profesional dan pengertian."</p>
                        <p class="mt-6 font-bold text-slate-800">Sarah M.</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100 flex flex-col">
                        <div class="flex items-center gap-1 mb-6">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        </div>
                        <p class="text-gray-600 leading-relaxed flex-grow">"Platform yang mudah digunakan. Sesi konseling benar-benar membantu saya fokus."</p>
                        <p class="mt-6 font-bold text-slate-800">Budi S.</p>
                    </div>

                    <div class="bg-white p-8 rounded-2xl shadow-lg border border-slate-100 flex flex-col">
                        <div class="flex items-center gap-1 mb-6">
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                            <svg class="h-5 w-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" /></svg>
                        </div>
                        <p class="text-gray-600 leading-relaxed flex-grow">"Sangat berterima kasih kepada MindCare. Bisa konseling dari rumah dengan nyaman."</p>
                        <p class="mt-6 font-bold text-slate-800">Maya K.</p>
                    </div>
                </div>
            </div>
        </section>
        </main>
        <footer class="bg-white">
    <div class="bg-blue-600">
        <div class="container mx-auto px-6 py-12 text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold">Siap Memulai Perjalanan Mental Wellness Anda?</h2>
            <p class="mt-3 text-lg text-blue-200">Dapatkan konsultasi gratis 15 menit dengan konselor berpengalaman</p>
            <div class="mt-8 flex justify-center items-center gap-4">
                <a href="#" class="bg-white text-blue-600 px-7 py-3 rounded-lg font-semibold flex items-center gap-2 hover:bg-slate-100 transition shadow-sm">
                    Mulai Sekarang
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div class="bg-white rounded-lg w-[50px] h-[44px] hidden sm:block"></div>
            </div>
        </div>
    </div>

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
</body>
</html>